FROM alpine:3.16

ARG REDIS_PASSWORD

EXPOSE 6379

COPY conf/redis.conf /etc/redis.conf

RUN apk add --update --no-cache redis
RUN sed -i "s/^requirepass/requirepass $REDIS_PASSWORD/" /etc/redis.conf

CMD [ "redis-server", "/etc/redis.conf" ]
