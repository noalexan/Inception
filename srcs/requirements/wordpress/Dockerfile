FROM alpine:3.16

RUN apk add --update --no-cache php8-fpm php8-mysqli curl
RUN curl -O https://wordpress.org/latest.zip && unzip latest.zip && rm latest.zip
RUN sed -i "s/^listen = 127.0.0.1:9000/listen = wordpress:9000/" /etc/php8/php-fpm.d/www.conf

CMD [ "php-fpm8", "--nodaemonize" ]
