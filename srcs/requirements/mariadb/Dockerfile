FROM alpine:3.16.4

RUN apk add --update --no-cache mariadb
RUN mkdir /data && chown mysql:mysql /data && mariadb-install-db --datadir='/data' --user='mysql'
RUN mkdir /run/mysqld && chown mysql:mysql /run/mysqld

EXPOSE 3306

CMD [ "mariadbd", "--user=mysql", "--datadir=/data" ]
