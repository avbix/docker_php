# Use the base PHP 8.1 FPM image.
FROM php:8.1-fpm

# Install PHP extensions for MySQL database support (pdo and pdo_mysql).
RUN docker-php-ext-install pdo pdo_mysql

# Set the working directory inside the container.
WORKDIR /var/www/public_html

# Start PHP-FPM as the default command for the container.
CMD [ "php-fpm" ]
