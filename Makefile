#=== Akeneo Darts Helper ===

# Styles
YELLOW=$(shell echo "\033[00;33m")
RED=$(shell echo "\033[00;31m")
RESTORE=$(shell echo "\033[0m")

CURRENT_DIR := $(shell pwd)

check_var = $(if $(strip $(shell echo "$2")),,$(error "$1" is not defined))

.DEFAULT_GOAL := help

.PHONY: help
help:
	@echo ""
	@echo "Akeneo Darts available targets:"
	@echo ""
	@echo "$(YELLOW)install$(RESTORE) $(RED) > install your vendors"
	@echo "$(YELLOW)update(RESTORE) $(RED) > update your vendors"
	@echo "$(YELLOW)phpstan(RESTORE) $(RED) > run PHPStan on your codebase"
	@echo "$(YELLOW)phpspec-run-tests(RESTORE) $(RED) > run your PHPSpec tests"
	@echo "$(YELLOW)cs(RESTORE) $(RED) > run PHPCSfixer on your codebase"

.PHONY: install
install:
	@docker-compose run fpm composer install

.PHONY: update
update:
	@docker-compose run fpm composer update

.PHONY: enter
enter:
	@docker-compose run fpm bash

.PHONY: phpspec-describe
phpspec-describe:
	@docker-compose run fpm vendor/bin/phpspec describe ${CLASS}

.PHONY: phpspec-run-tests
phpspec-run-tests:
	@docker-compose run fpm vendor/bin/phpspec run test/Unit/Darts/spec -vvv

.PHONY: phpstan
phpstan:
	@docker-compose run fpm vendor/bin/phpstan analyse src/ --level=7

.PHONY: cs
cs:
	@docker-compose run fpm vendor/bin/php-cs-fixer fix --config=.php_cs.php
