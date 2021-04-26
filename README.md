# Pascal Allen

My personal website. Fully containerized PHP and React web application. (WORK IN PROGRESS)

## Prerequisites

- [Docker](https://www.docker.com/)
- [Docker Compose](https://docs.docker.com/compose/)

## Development Environment Setup

### Clone Repository

$ `cd <projects-parent-directory>`
$ `git clone https://github.com/pascalallen/PascalAllen.git`

### Create Environment file

$ `cp .env .env.local`

### Bring Up Environment

$ `docker-compose build && docker-compose up -d`

### Install Composer Dependencies

$ `composer install`

### Take Down Environment

$ `docker-compose down`
