pipeline {
    agent any

    environment {
        IMAGE_NAME = "shivatechdigital"
        CONTAINER_NAME = "sivatechdigital"
    }

    stages {

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
                    docker exec -i sivatechdigital chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
                    docker exec -i sivatechdigital chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache
                '''
            }
        }

        stage('Run Laravel Commands') {
            steps {
                echo "🧰 Running composer install & artisan commands..."
                sh '''
                    docker exec -i sivatechdigital composer install
                    docker exec -i sivatechdigital php artisan key:generate
                    docker exec -i sivatechdigital php artisan migrate --force
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
