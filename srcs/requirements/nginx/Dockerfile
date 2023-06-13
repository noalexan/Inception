FROM alpine:3.16

EXPOSE 443

COPY conf/nginx.conf /etc/nginx/http.d/default.conf

RUN apk add --update --no-cache nginx openssl
RUN mkdir /certificates && openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /certificates/nginx.key -out /certificates/nginx.crt -subj "/C=FR/ST=PACA/L=NICE/O=42Nice/CN=${DOMAIN_NAME}"

CMD [ "nginx", "-g", "daemon off;" ]
