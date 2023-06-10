# Dockerfile
FROM ubuntu:22.04

# Disable Prompt During Packages Installation
ARG DEBIAN_FRONTEND=noninteractive

# Accept the environment variables as arguments
ARG DB_CONNECTION
ARG DB_HOST
ARG DB_PORT
ARG DB_DATABASE
ARG DB_USERNAME
ARG DB_PASSWORD
ARG APP_KEY

# Set the environment variables
ENV DB_CONNECTION=${DB_CONNECTION}
ENV DB_HOST=${DB_HOST}
ENV DB_PORT=${DB_PORT}
ENV DB_DATABASE=${DB_DATABASE}
ENV DB_USERNAME=${DB_USERNAME}
ENV DB_PASSWORD=${DB_PASSWORD}
ENV APP_KEY=${APP_KEY}

# Update Ubuntu Software repository
RUN apt-get update

# Add Ondrej Sury's PHP repository which has PHP 7.4 package
RUN apt-get install -y software-properties-common
RUN add-apt-repository -y ppa:ondrej/php

# Install dependencies
RUN apt-get update && apt-get install -y \
    nginx \
    php7.4 \
    php7.4-fpm \
    php7.4-mbstring \
    php7.4-xml \
    php7.4-mysql \
    git \
    curl \
    unzip

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Empty /var/www/html directory
RUN rm -rf /var/www/html/*

# Clone your project
RUN git clone https://github.com/milkneko-dev/laravel-5-7-test-calculator.git /var/www/html

# Set working directory
WORKDIR /var/www/html

# Generate .env file from environment variables
RUN echo "DB_CONNECTION=$DB_CONNECTION\n\
DB_HOST=$DB_HOST\n\
DB_PORT=$DB_PORT\n\
DB_DATABASE=$DB_DATABASE\n\
DB_USERNAME=$DB_USERNAME\n\
DB_PASSWORD=$DB_PASSWORD\n\
APP_KEY=$APP_KEY" > .env

# Install project dependencies
RUN composer install

# Change the mode of /var/www/html/storage to 777
RUN chmod -R 777 storage

# Copy the nginx configuration file
COPY default /etc/nginx/sites-available/

# Expose port 80
EXPOSE 80

# Run start-up script to start nginx and php-fpm
CMD service php7.4-fpm start && nginx -g "daemon off;"
