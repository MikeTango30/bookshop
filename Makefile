start:
	@./tools/scripts/start.sh

stop:
	@./tools/scripts/stop.sh


php:
	@docker exec -itu homeless laravel_php sh