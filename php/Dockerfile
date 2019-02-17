FROM php:7.2-apache
RUN apt-get update && \
  docker-php-ext-install pdo_mysql mysqli mbstring

RUN cp /usr/local/etc/php/php.ini-development /usr/local/etc/php/php.ini

# find / -name xdebug.soで調べたxdebug.soをphp.iniへ追記
RUN pecl install xdebug

RUN echo -e "[xdebug]" \
"xdebug.remote_enable=1\n" \
"xdebug.remote_autostart=1" \
"xdebug.remote_host=localhost" \
"xdebug.remote_port=9001" \
"xdebug.profiler_enable=1" \
"xdebug.idekey=PhpStorm" >> /usr/local/etc/php/php.ini

WORKDIR /var/www/html

EXPOSE 80