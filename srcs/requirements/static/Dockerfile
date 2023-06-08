FROM alpine:3.16

EXPOSE 80
COPY tools/nginx.conf /etc/nginx/http.d/default.conf

RUN apk add --update --no-cache nginx

CMD [ "nginx", "-g", "daemon off;" ]

