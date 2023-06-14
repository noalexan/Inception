FROM alpine:3.16

ARG MYSQL_ROOT_PASSWORD
ARG MYSQL_USER
ARG MYSQL_PASSWORD
ARG MYSQL_DATABASE

RUN apk add --update --no-cache mariadb mariadb-client
RUN mkdir /run/mysqld && chown -R mysql:mysql /run/mysqld /var/lib/mysql
RUN mysql_install_db --user=mysql --datadir=/var/lib/mysql

RUN sed -i "s/^#bind-address/bind-address/" /etc/my.cnf.d/mariadb-server.cnf && \
	sed -i "s/^skip-networking/#skip-networking/" /etc/my.cnf.d/mariadb-server.cnf

RUN (echo "CREATE DATABASE IF NOT EXISTS ${MYSQL_DATABASE};" && \
	echo "CREATE USER IF NOT EXISTS '${MYSQL_USER}'@'%' IDENTIFIED BY '${MYSQL_PASSWORD}';" && \
	echo "ALTER USER 'root'@'localhost' IDENTIFIED BY '${MYSQL_ROOT_PASSWORD}';" && \
	echo "GRANT ALL PRIVILEGES ON ${MYSQL_DATABASE} . * TO '${MYSQL_USER}';" && \
	echo "FLUSH PRIVILEGES;") > /init.sql

CMD [ "mysqld", "--user=mysql", "--datadir=/var/lib/mysql", "--init-file=/init.sql" ]
