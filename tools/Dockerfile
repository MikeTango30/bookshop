FROM php:7.4.9-fpm-alpine

WORKDIR /var/www/laravel
RUN docker-php-ext-install pdo pdo_mysql
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

RUN addgroup -g 1000 homeless \
    && adduser --disabled-password --gecos '' -u 1000 -G homeless homeless \
    && chown homeless:homeless /home/homeless

USER homeless
