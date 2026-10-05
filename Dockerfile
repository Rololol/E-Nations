FROM composer:2.2 AS composer

FROM php:7.4-apache

RUN docker-php-ext-install pdo_mysql mbstring

RUN a2enmod rewrite

ENV APACHE_DOCUMENT_ROOT=/var/www/html/htdocs

RUN sed -ri 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

COPY --from=composer /usr/bin/composer /usr/local/bin/composer

WORKDIR /var/www/html

COPY composer.json ./
RUN composer install --no-dev --no-interaction --prefer-dist --optimize-autoloader

COPY . .

RUN mkdir -p tmp/cache && chown -R www-data:www-data tmp

EXPOSE 80

CMD ["apache2-foreground"]
