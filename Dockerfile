FROM php:7.2-apache

RUN a2enmod rewrite && service apache2 restart

COPY src/ /var/www/html/
