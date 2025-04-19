build:
	@docker compose up -d --build

up:
	@docker compose up -d

stop:
	@docker compose stop

down:
	@docker compose down -v

restart:
	@docker compose restart

reload:
	@docker compose down -v
	@docker compose up -d

ps:
	@docker compose ps

logs:
	@docker compose logs -f

server:
	@docker exec -it shorturl-php-1 /bin/bash
