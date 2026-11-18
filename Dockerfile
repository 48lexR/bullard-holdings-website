FROM php:8.3-apache

RUN apt-get update -y && apt-get upgrade -y

RUN docker-php-ext-install pdo_mysql

COPY ./site-config.conf /etc/apache2/sites-available/000-default.conf

COPY ./src/ /var/www/html/
