FROM php:7.2-fpm-alpine

RUN apk update
RUN apk upgrade

# Install php extensions
RUN docker-php-ext-install pcntl

# Install git
RUN apk add --update git

# Install composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php composer-setup.php --version=1.7.3
RUN php -r "unlink('composer-setup.php');"
RUN mv composer.phar /usr/local/bin/composer
