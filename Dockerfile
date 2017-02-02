FROM php:7-cli

RUN apt-get update && apt-get install -y unzip git

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer

VOLUME /app
WORKDIR /app/