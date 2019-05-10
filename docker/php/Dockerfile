FROM php:7.3-fpm

RUN apt-get update && apt-get install -y libicu-dev libpq-dev && apt-get clean
RUN pecl install xdebug apcu
RUN docker-php-ext-enable xdebug apcu
RUN docker-php-ext-install intl opcache pdo_mysql
RUN docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql
RUN docker-php-ext-install pdo pdo_pgsql


WORKDIR /usr/share/nginx/html