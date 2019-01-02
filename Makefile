init:
	docker-compose build
	docker-compose up -d
start:
	docker-compose up -d

stop:
	docker-compose stop

restart:
	docker-compose restart

phpunit:
	docker exec -it server /bin/bash -c "vendor/bin/phpunit"

composer:
	docker exec -i apache /bin/bash -c "composer update && chmod -R 777 vendor composer.lock"

linter:
	docker exec -i server /bin/bash -c "vendor/bin/phpcs -- --standard=PSR12 src"

linter-fix:
	docker exec -i php-lib /bin/bash -c "composer run-script phpcbf -- --standard=PSR12 src"


