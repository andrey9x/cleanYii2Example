FROM php:7.3-apache

RUN apt-get update && apt-get install -y \
        git \
        wget \
        curl \
        mc

RUN a2enmod rewrite

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer --quiet
ENV COMPOSER_ALLOW_SUPERUSER 1

ENV APACHE_DOCUMENT_ROOT=/var/www/html/web
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

RUN usermod -u 1000 www-data && groupmod -g 1000 www-data