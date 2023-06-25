all: up

/run/docker.sock:
	sudo service docker start

~/data:
	mkdir ~/data

~/data/mariadb: ~/data
	mkdir ~/data/mariadb

~/data/wordpress: ~/data
	mkdir ~/data/wordpress

srcs/.env:
	@echo > srcs/.env
	@echo "# NGINX Setup" >> srcs/.env
	@echo "DOMAIN_NAME=" >> srcs/.env
	@echo "CERTS_=" >> srcs/.env
	@echo "" >> srcs/.env
	@echo "# MySQL Setup" >> srcs/.env
	@echo "MYSQL_ROOT_PASSWORD=" >> srcs/.env
	@echo "MYSQL_USER=" >> srcs/.env
	@echo "MYSQL_PASSWORD=" >> srcs/.env
	@echo "MYSQL_DATABASE=" >> srcs/.env
	vim srcs/.env

up: /run/docker.sock srcs/.env ~/data/mariadb ~/data/wordpress
	docker compose --file srcs/docker-compose.yml up --build

detach: /run/docker.sock srcs/.env ~/data/mariadb ~/data/wordpress
	docker compose --file srcs/docker-compose.yml up --build --detach

down: /run/docker.sock
	docker compose --file srcs/docker-compose.yml down

prune: down
	docker system prune --all --force

remove-data: prune
	rm -rf ~/data

.PHONY: all up detach down prune remove-data
