FROM php:8.4.5-apache

# Instala pacotes necessários
RUN apt-get update \
  && apt-get install -y zip curl unzip libxml2-dev libicu-dev libonig-dev \
  && docker-php-ext-install mbstring intl simplexml pdo pdo_mysql

# Instala Composer globalmente
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Define o diretório de trabalho
WORKDIR /var/www/html

# Copia os arquivos do Composer
COPY composer.* ./

# Instala as dependências do projeto
RUN composer install --ignore-platform-req=ext-intl

# Copia a configuração do Apache
COPY httpd.conf /etc/apache2/apache2.conf

# Habilita o mod_rewrite no Apache
RUN a2enmod rewrite
