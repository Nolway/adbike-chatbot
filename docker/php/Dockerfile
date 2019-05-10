FROM php:7.3-fpm

RUN apt-get update && apt-get install -y libicu-dev && apt-get clean
RUN pecl install xdebug apcu
RUN docker-php-ext-enable xdebug apcu
RUN docker-php-ext-install intl opcache pdo_mysql


WORKDIR /usr/share/nginx/html