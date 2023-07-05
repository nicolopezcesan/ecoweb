FROM php:8.0-apache
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN a2enmod rewrite
RUN apachectl restart
RUN apt-get update && apt-get upgrade -y