FROM composer:latest

# Easy extension installer (with dependencies)
# https://github.com/mlocati/docker-php-extension-installer
ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/

RUN chmod +x /usr/local/bin/install-php-extensions

# Install extensions
# gd bcmath pdo_mysql soap zip required by oxid
# mysql required by d3/modcfg
RUN install-php-extensions rdkafka
