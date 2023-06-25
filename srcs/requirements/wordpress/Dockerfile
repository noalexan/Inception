FROM alpine:3.16

ARG MYSQL_USER
ARG MYSQL_PASSWORD
ARG MYSQL_DATABASE

RUN apk add --update --no-cache php8-fpm php8-mysqli curl

RUN curl -O https://wordpress.org/latest.zip && unzip latest.zip && rm latest.zip
RUN sed -i "s/^listen = 127.0.0.1:9000/listen = wordpress:9000/" /etc/php8/php-fpm.d/www.conf

COPY conf/wp-config.php /wordpress/wp-config.php
RUN sed -i "s/'DB_NAME', ''/'DB_NAME', '${MYSQL_DATABASE}'/" /wordpress/wp-config.php
RUN sed -i "s/'DB_USER', ''/'DB_USER', '${MYSQL_USER}'/" /wordpress/wp-config.php
RUN sed -i "s/'DB_PASSWORD', ''/'DB_PASSWORD', '${MYSQL_PASSWORD}'/" /wordpress/wp-config.php

CMD [ "php-fpm8", "--nodaemonize" ]
