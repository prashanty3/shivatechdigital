pipeline {
    agent any

    environment {
        IMAGE_NAME = "shivatechdigital"
        CONTAINER_NAME = "sivatechdigital"
    }

    stages {

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

        stage('Run Containers') {
            steps {
                echo "🚀 Starting new containers..."
                sh 'docker-compose up -d'
            }
        }

        stage('Setup Environment File') {
            steps {
                echo "⚙️ Checking for .env file..."
                sh '''
                    if [ ! -f .env ]; then
                        echo "📄 .env file not found — copying from .env.example"
                        cp .env.example .env
                    else
                        echo "✅ .env file already exists — skipping copy"
                    fi
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

        stage('Run Laravel Commands') {
            steps {
                echo "🧰 Running composer install & artisan commands..."
                sh '''
                    docker exec -w /var/www/html -i sivatechdigital composer install
                    docker exec -w /var/www/html -i sivatechdigital php artisan key:generate
                    sleep 20
                    docker exec -w /var/www/html -i sivatechdigital php artisan migrate --force
                    docker exec -w /var/www/html -i sivatechdigital php artisan config:cache
                    docker exec -w /var/www/html -i sivatechdigital php artisan route:cache
                    docker exec -w /var/www/html -i sivatechdigital php artisan view:cache
                    docker exec -w /var/www/html -i sivatechdigital php artisan storage:link
                '''
            }
        }

        stage('Build Frontend Inside Container') {
            steps {
                echo "🎨 Building frontend assets inside Docker container..."
                sh '''
                    docker exec -w /var/www/html -i sivatechdigital npm install
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
        always {
            echo "🔄 Cleaning up workspace permissions..."
            sh '''
                echo "Attempting to fix workspace permissions..."
                if sudo chown -R jenkins:jenkins /var/lib/jenkins/workspace/shivatechdigital; then
                    echo "✅ Permissions updated successfully!"
                else
                    echo "⚠️  Permission update failed, but continuing..."
                fi
                
                if sudo chmod -R 755 /var/lib/jenkins/workspace/shivatechdigital; then
                    echo "✅ Permissions set to 755 successfully!"
                else
                    echo "⚠️  Permission modification failed, but continuing..."
                fi
            '''
        }
        
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
