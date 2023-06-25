all: up

~/data:
	mkdir ~/data

~/data/mariadb: ~/data
	mkdir ~/data/mariadb

~/data/wordpress: ~/data
	mkdir ~/data/wordpress

up: ~/data/mariadb ~/data/wordpress
	docker compose --file srcs/docker-compose.yml up --build

detach: ~/data/mariadb ~/data/wordpress
	docker compose --file srcs/docker-compose.yml up --build --detach

down:
	docker compose --file srcs/docker-compose.yml down

prune: down
	docker system prune --all --force

remove-data: prune
	rm -rf ~/data

.PHONY: all up detach down prune remove-data
