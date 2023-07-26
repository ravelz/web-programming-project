## Composer
FROM composer:latest as composer_stage

WORKDIR /var/www/html

COPY ./ ./

RUN composer update
RUN composer install

## NPM react
FROM node:18-alpine as npm_builder

COPY --from=composer_stage /var/www/html /var/www/html

WORKDIR /var/www/html
COPY ./ ./

RUN npm install
RUN npm run build

## Linux
FROM php:8.1.16-fpm

WORKDIR /var/www/html

# Linux Library
RUN apt-get update && apt-get install -y \
    sudo \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip

COPY --from=npm_builder /var/www/html /var/www/html

RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd
# Composer
# COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
# RUN composer install

RUN sudo chown -R www-data:www-data /var/www/html \
    && sudo chmod 777 -R /var/www/html
