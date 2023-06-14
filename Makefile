all: up

up:
	docker compose --file srcs/docker-compose.yml up --build

detach:
	docker compose --file srcs/docker-compose.yml up --build --detach

down:
	docker compose --file srcs/docker-compose.yml down

prune: down
	docker system prune --all --force
