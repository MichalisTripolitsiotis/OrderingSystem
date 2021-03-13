FROM php:7.3-fpm
RUN apt-get update -y && \
    apt-get install -y \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev
RUN docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/
RUN docker-php-ext-install pdo_mysql gd && \
    pecl install xdebug && \
    docker-php-ext-enable xdebug
WORKDIR /var/www/html