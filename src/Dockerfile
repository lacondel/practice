# Указываем базовый образ
FROM php:7.4-apache

# Устанавливаем дополнительные пакеты
RUN apt-get update \
    && docker-php-ext-install pdo_mysql mysqli

# Копируем исходный код приложения в контейнер
COPY . /var/www/html

# Устанавливаем зависимости приложения
WORKDIR /var/www/html

# Устанавливаем права на директории и файлы
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Открываем порт 80 для http
EXPOSE 80