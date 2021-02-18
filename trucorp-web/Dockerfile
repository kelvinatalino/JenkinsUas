FROM php:7.4-apache

RUN docker-php-ext-install mysqli \
  && docker-php-ext-enable mysqli

COPY . /var/www/html/

RUN chown www-data:www-data /var/www
RUN chmod -R 774 /var/www

EXPOSE 80

