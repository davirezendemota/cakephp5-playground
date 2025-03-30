FROM php:8.4.5-apache

RUN apt-get update \
  && apt-get install -y zip libxml2-dev libicu-dev libonig-dev \
  && docker-php-ext-install mbstring intl simplexml pdo pdo_mysql

COPY httpd.conf /etc/apache2/apache2.conf

RUN a2enmod rewrite