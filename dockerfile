FROM php:8.1-apache-buster
WORKDIR /usr/local/apache2/htdocs/signos
EXPOSE 80

COPY . .