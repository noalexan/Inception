FROM alpine:3.16

RUN apk add --update nodejs npm

WORKDIR /app

COPY tools/main.js .

EXPOSE 8000

CMD ["node", "main.js"]

