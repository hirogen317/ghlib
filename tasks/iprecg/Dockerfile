FROM php:7.4-cli

RUN apt-get update; \
    apt-get install -y zip unzip

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

COPY . /usr/src/myapp
WORKDIR /usr/src/myapp

RUN curl -sS https://getcomposer.org/installer | php

RUN ["php", "composer.phar", "require", "geoip2/geoip2:~2.0"]
CMD [ "php", "./index.php"]
