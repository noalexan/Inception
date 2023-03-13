FROM alpine:3.16.4

ENV CERTS_ ${CERTS_}

RUN apk add --no-cache --upgrade nginx openssl
RUN mkdir ${CERTS_}
RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout ${CERTS_}/nginx.key -out ${CERTS_}/nginx.crt -subj "/CN=${DOMAIN_NAME}"


COPY conf/nginx.conf /etc/nginx/nginx.conf

EXPOSE 443

CMD [ "nginx", "-g", "daemon off;" ]
