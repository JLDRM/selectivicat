FROM php:7.4-apache

COPY --from=composer /usr/bin/composer /usr/bin/composer

RUN apt-get update && apt-get install -y \
  zlib1g-dev \
  libzip-dev \
  unzip

RUN docker-php-ext-install zip

RUN docker-php-ext-install mysqli

WORKDIR /usr/src/myapp

COPY . /usr/src/myapp

RUN composer install \
  --no-interaction \
  --no-plugins \
  --no-scripts \
  --no-dev \
  --prefer-dist

COPY . /var/www/html/

EXPOSE 80
