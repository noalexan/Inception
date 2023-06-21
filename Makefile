all: up

up:
	docker compose --file srcs/docker-compose.yml up --build

detach:
	docker compose --file srcs/docker-compose.yml up --build --detach

down:
	docker compose --file srcs/docker-compose.yml down

prune: down
	docker system prune --all --force

remove-data: prune
	# docker volume rm $(shell docker volume ls -q)
	rm -rf ~/data
	mkdir -p ~/data/wordpress ~/data/mariadb
