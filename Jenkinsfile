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
                sh 'rm -rf /var/lib/jenkins/workspace/shivatechdigital || true'
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
        success {
            echo "✅ Deployment completed successfully!"
        }
        failure {
            echo "❌ Deployment failed. Check Jenkins logs."
        }
    }
}
