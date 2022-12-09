#!/bin/bash

# Update the package index and install the required dependencies
sudo apt-get update
sudo apt-get install git curl unzip -y

# Install Composer
curl -sS https://getcomposer.org/installer | sudo php -- --install-dir=/usr/local/bin --filename=composer

# Install Laravel
composer global require laravel/installer

# Create a new Laravel project
laravel new my-project

# Navigate to the project directory
cd my-project

# Install the project dependencies
composer install

# Generate an application key
php artisan key:generate

# Run the database migrations
php artisan
