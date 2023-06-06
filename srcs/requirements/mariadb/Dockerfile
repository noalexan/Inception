FROM alpine:3.16

COPY tools/init.sql /

RUN apk add --update --no-cache mariadb mariadb-client
RUN mkdir /run/mysqld && chown -R mysql:mysql /run/mysqld
RUN mysql_install_db --user=mysql --datadir=/var/lib/mysql

RUN sed -i "s/^#bind-address/bind-address/" /etc/my.cnf.d/mariadb-server.cnf && \
	sed -i "s/^skip-networking/#skip-networking/" /etc/my.cnf.d/mariadb-server.cnf

CMD [ "mysqld", "--user=mysql", "--datadir=/var/lib/mysql", "--init-file=/init.sql" ]
