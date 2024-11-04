install:
	composer install
brain-games:
	./bin/brain-games
brain-even:
	php bin/brain-even.php
validate:
	composer validate
lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin
