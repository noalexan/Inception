FROM alpine:3.16

ARG DOMAIN_NAME
ARG CERTS_

EXPOSE 443

COPY conf/nginx.conf /etc/nginx/http.d/default.conf

RUN apk add --update --no-cache nginx openssl
RUN mkdir $CERTS_ && openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout $CERTS_/nginx.key -out $CERTS_/nginx.crt -subj "/C=FR/ST=PACA/L=NICE/O=42Nice/CN=$DOMAIN_NAME"

CMD [ "nginx", "-g", "daemon off;" ]
