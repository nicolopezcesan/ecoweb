FROM php:8.0-apache
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN a2enmod rewrite
RUN apachectl restart
RUN apt-get update && apt-get upgrade -y
RUN apt-get install -y libfreetype6-dev libjpeg62-turbo-dev libpng-dev
RUN docker-php-ext-configure gd --with-freetype --with-jpeg
RUN docker-php-ext-install -j$(nproc) gd
