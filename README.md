# Sample Docker Symfony App

Fully containerized sample web application on PHP version 8 with a Symfony API backend, and a React + SASS frontend.
Docker containers for MySQL, NGINX, and PHP-FPM.

## Prerequisites

- [Docker](https://www.docker.com/)
- [Docker Compose](https://docs.docker.com/compose/)

## Development Environment Setup

### Clone Repository

$ `cd <projects-parent-directory> && git clone https://github.com/pascalallen/DockerSymfony.git`

### Create Environment file

$ `cp .env .env.local`

### Bring Up Environment

$ `docker-compose build && docker-compose up -d`

### Install Composer Dependencies

$ `composer install`

### Take Down Environment

$ `docker-compose down`
