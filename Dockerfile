FROM php:8.1-apache
WORKDIR /var/www/html
RUN   apt-get update  \
    && apt-get install -y libpq-dev git curl zip vim unzip \
    && docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
    && docker-php-ext-install mysqli pdo pdo_mysql pdo_pgsql \
    && a2enmod rewrite 
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer