FROM php:8.2-apache

RUN apt-get update \
    && docker-php-ext-install pdo_mysql mysqli

COPY . /var/www/html

WORKDIR /var/www/html

RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

EXPOSE 80