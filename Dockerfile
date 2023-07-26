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

COPY ./ ./

RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd
RUN sudo chown -R www-data:www-data /var/www/html \
    && sudo chmod 777 -R /var/www/html
