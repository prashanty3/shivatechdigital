pipeline {
    agent any

    environment {
        IMAGE_NAME = "shivatechdigital"
        CONTAINER_NAME = "sivatechdigital"
    }

    stages {
        stage('Remove Old Workspace') {
            steps {
                echo "🧹 Cleaning up old workspace..."
                sh 'sudo rm -rf /var/lib/jenkins/workspace/shivatechdigital || true'
            }
        }
        
        stage('Checkout') {
            steps {
                echo "📦 Pulling latest code from GitHub..."
                git branch: 'main', url: 'https://github.com/prashanty3/shivatechdigital.git'
            }
        }

        stage('Build Docker Images') {
            steps {
                echo "🐳 Building Laravel Docker image..."
                sh 'docker-compose build'
            }
        }

        stage('Stop Old Containers') {
            steps {
                echo "🧹 Stopping old containers if running..."
                sh 'docker-compose down || true'
            }
        }

        stage('Start Database') {
            steps {
                echo "🚀 Starting database container..."
                sh 'docker-compose up -d db'
            }
        }

        stage('Wait for MySQL') {
            steps {
                echo "⏳ Waiting for MySQL to be ready..."
                sh '''
                    echo "Waiting for MySQL connection..."
                    counter=0
                    until docker-compose exec -T db mysql -u user -pshivatechdigital -e "SELECT 1;" &> /dev/null; do
                        counter=$((counter+1))
                        if [ $counter -gt 30 ]; then
                            echo "❌ MySQL failed to start within 150 seconds"
                            docker-compose logs db
                            exit 1
                        fi
                        echo "Waiting for MySQL... attempt $counter/30"
                        sleep 5
                    done
                    echo "✅ MySQL is ready!"
                '''
            }
        }

        stage('Start Application') {
            steps {
                echo "🚀 Starting application container..."
                sh 'docker-compose up -d app'
                sh 'sleep 10'  # Wait for Apache to start
            }
        }

        stage('Setup Environment File') {
            steps {
                echo "⚙️ Setting up environment file..."
                sh '''
                    # Copy .env file inside container
                    docker exec -w /var/www/html -i sivatechdigital cp .env.example .env || true
                    
                    # Set database configuration in .env
                    docker exec -w /var/www/html -i sivatechdigital bash -c "
                        sed -i 's/DB_HOST=.*/DB_HOST=db/g' .env
                        sed -i 's/DB_DATABASE=.*/DB_DATABASE=shivatechdigital/g' .env
                        sed -i 's/DB_USERNAME=.*/DB_USERNAME=user/g' .env
                        sed -i 's/DB_PASSWORD=.*/DB_PASSWORD=shivatechdigital/g' .env
                    "
                '''
            }
        }

        stage('Fix Permissions') {
            steps {
                echo "🔐 Setting correct permissions for Laravel..."
                sh '''
                    docker exec -w /var/www/html -i sivatechdigital chown -R www-data:www-data storage bootstrap/cache
                    docker exec -w /var/www/html -i sivatechdigital chmod -R 775 storage bootstrap/cache
                '''
            }
        }

        stage('Install Dependencies') {
            steps {
                echo "📦 Installing PHP and Node dependencies..."
                sh '''
                    docker exec -w /var/www/html -i sivatechdigital composer install --no-dev --optimize-autoloader
                    docker exec -w /var/www/html -i sivatechdigital npm ci
                '''
            }
        }

        stage('Run Laravel Commands') {
            steps {
                echo "🧰 Running Laravel setup commands..."
                sh '''
                    docker exec -w /var/www/html -i sivatechdigital php artisan key:generate --force
                    docker exec -w /var/www/html -i sivatechdigital php artisan migrate --force
                    docker exec -w /var/www/html -i sivatechdigital php artisan config:cache
                    docker exec -w /var/www/html -i sivatechdigital php artisan route:cache
                    docker exec -w /var/www/html -i sivatechdigital php artisan view:cache
                    docker exec -w /var/www/html -i sivatechdigital php artisan storage:link
                '''
            }
        }

        stage('Build Frontend') {
            steps {
                echo "🎨 Building frontend assets..."
                sh '''
                    docker exec -w /var/www/html -i sivatechdigital npm run build
                '''
            }
        }

        stage('Cleanup') {
            steps {
                echo "🧹 Cleaning up unused Docker resources..."
                sh 'docker system prune -f'
            }
        }
    }

    post {
        success {
            echo "✅ Deployment completed successfully!"
            sh 'docker-compose ps'
        }
        failure {
            echo "❌ Deployment failed. Check Jenkins logs."
            sh 'docker-compose logs'
        }
    }
}