all:
	docker-compose --project-directory srcs up --build
	open https://localhost

prune:
	docker system prune --all --force
