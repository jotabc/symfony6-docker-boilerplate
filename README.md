# Boilerplate docker PHP8 - MYSQL8 - NGINX1.21 COMPOSER LATEST VERSION

## Details

This is a complete stack for running Symfony 6.2 into Docker containers using docker-compose tool.

It is composed by 4 containers:

- nginx, acting as the webserver.
- php, the PHP-FPM container with the 8.2 version of PHP.
- db which is the MySQL database container with a MySQL 8.0 image.

## How to use:
- Clone this repository.
- Inside the .docker folder, create a file .env.nginx.local, taking the file .env.nginx as an example, and place the domain name
- Access the .docker folder. in your terminal try cd .docker/
- Once inside, in your terminal try "docker-compose up -d --build", this builds the development environment.
- Then in your terminal try "docker exec -it symfony_dockerized_php_1 sh or bash", This goes into the docker container, where we have php and composer.