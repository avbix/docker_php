# Используем базовый образ PHP 8.1 FPM.
FROM php:8.1-fpm

# Устанавливаем расширения PHP для поддержки работы с базой данных MySQL (pdo и pdo_mysql).
RUN docker-php-ext-install pdo pdo_mysql

# Устанавливаем рабочий каталог внутри контейнера.
WORKDIR /var/www/public_html

# Запускаем PHP-FPM как команду по умолчанию для контейнера.
CMD [ "php-fpm" ]
