FROM php:7.1

WORKDIR /laration

RUN apt-get update && apt-get install -y git libicu-dev g++ libzip-dev zlib1g-dev && \ 
    docker-php-ext-install zip intl mbstring pdo_mysql
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
