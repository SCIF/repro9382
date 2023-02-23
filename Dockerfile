FROM php:8.1-alpine

COPY --from=composer:2 /usr/bin/composer /usr/local/bin/composer

RUN docker-php-ext-install opcache bcmath

COPY opcache.ini "$PHP_INI_DIR/conf.d/docker-php-ext-opcache.ini"

RUN mkdir /app
WORKDIR /app

COPY composer.json composer.lock preload.php psalm.xml /app/
COPY src/ /app/src/

RUN composer install --ignore-platform-reqs
