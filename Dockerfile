FROM composer:2.0

WORKDIR /app

COPY . .

RUN composer install

CMD ["php", "artisan", "serve", "--host", "0.0.0.0", "--port", "80"]
