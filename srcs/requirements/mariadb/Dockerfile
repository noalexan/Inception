FROM alpine:3.16

RUN apk add --update --no-cache mariadb
RUN mkdir /run/mysqld && chown -R mysql:mysql /run/mysqld
RUN mysql_install_db --user=mysql --datadir=/var/lib/mysql

CMD [ "mysqld", "--user=mysql", "--datadir=/var/lib/mysql" ] 
