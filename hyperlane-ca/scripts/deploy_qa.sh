#!/bin/bash

set -e

#########################################
# Configuration
#########################################

REPO="https://github.com/ZEBDRON/hyperlane-solutions.git"
BRANCH="main"

DEPLOY_DIR="/home/u372540498/domains/hyperlane.ca/public_html/qa"
PROJECT_NAME="hyperlane-solutions"

SERVER="u372540498@195.179.237.3"
PORT="65002"

#########################################

echo "Starting deployment..."

if [ -f package.json ]; then
    echo "Installing Node dependencies..."
    npm install

    echo "Building frontend..."
    npm run build
fi

echo "Uploading Vite build..."

scp -P $PORT -r ../public/build \
$SERVER:$DEPLOY_DIR/$PROJECT_NAME/hyperlane-ca/public/

ssh -p "$PORT" "$SERVER" <<EOF
set -e

REPO="$REPO"
BRANCH="$BRANCH"
DEPLOY_DIR="$DEPLOY_DIR"
PROJECT_NAME="$PROJECT_NAME"

echo "Deploying on server..."

mkdir -p "\$DEPLOY_DIR"
cd "\$DEPLOY_DIR"

echo "Current directory:"
pwd


if [ -d "$PROJECT_NAME/.git" ]; then
    echo "Repository exists. Pulling latest changes..."

    cd "$PROJECT_NAME"
    git fetch origin
    git reset --hard "origin/$BRANCH"

else
    echo "Repository doesn't exist. Cloning..."

    rm -rf "$PROJECT_NAME"
    git clone --branch "$BRANCH" "$REPO"
fi

cd "hyperlane-ca"

echo "Current directory:"
pwd

echo "Installing Composer dependencies..."
composer install --no-dev --optimize-autoloader

#if [ ! -f .env ]; then
#    echo "Creating .env..."
#    cp .env.example .env
   php artisan key:generate
#fi

echo "Running Laravel optimizations..."

php artisan migrate --force
php artisan storage:link || true

php artisan config:clear
php artisan cache:clear
php artisan route:clear
php artisan view:clear

php artisan config:cache
php artisan route:cache
php artisan view:cache

echo "Deployment completed successfully!"

EOF