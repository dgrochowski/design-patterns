# Design Patterns [![Build Status](https://travis-ci.com/dgrochowski/design-patterns.svg?branch=master)](https://travis-ci.com/dgrochowski/design-patterns)
## PHP language

## Behavioral - [pl] wzorce operacyjne
- [Command - [pl] polecenie](https://github.com/dgrochowski/design-patterns/tree/master/Behavioral/Command)
- [Mediator - [pl] mediator](https://github.com/dgrochowski/design-patterns/tree/master/Behavioral/Mediator)
- [Observer - [pl] obserwator](https://github.com/dgrochowski/design-patterns/tree/master/Behavioral/Observer)
- [State - [pl] stan](https://github.com/dgrochowski/design-patterns/tree/master/Behavioral/State)
- [Strategy - [pl] strategia](https://github.com/dgrochowski/design-patterns/tree/master/Behavioral/Strategy)

## Tests - how to run
Requirements:
- [Docker-compose](https://docs.docker.com/compose/)

##### Build and start docker container
```bash
docker-compose up --build -d
```
##### Install libraries (vendors)
```bash
docker-compose exec design-patterns-php composer install --dev
```
##### Run tests (phpunit)
```bash
docker-compose exec design-patterns-php vendor/bin/phpunit --testsuite design-patterns
```
##### Stop and remove docker container
```bash
docker-compose down
```
