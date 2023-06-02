FROM alpine:3.16

EXPOSE 443

COPY conf/nginx.conf /etc/nginx/http.d/default.conf

RUN apk add --update --no-cache nginx openssl
RUN mkdir /certs && openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /certs/nginx.key -out /certs/nginx.crt -subj "/C=FR/ST=PACA/L=NICE/O=42Nice/CN=noalexan.42.fr"

CMD [ "nginx", "-g", "daemon off;" ]
