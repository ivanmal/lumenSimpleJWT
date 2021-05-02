# Simple JWT Api with Lumen 8

A simple JWT Authentication Api using Lumen 8

## Setup

Clone this project, then use docker-compose to create the containers.

```bash
docker-compose up -d
```

Install the necessary packages using composer. You can use the composer from the php-fpm container.

```bash
docker exec -it jwt-php-fpm composer install
```

### Initial Configuration

If the composer installation did not create a ```.env``` on the ```api/``` directory, copy the ```api/.env.exemple``` file to ```/api/.env```

### Generate secret key

Use the helper comand to generate a key:

```bash
php api/artisan jwt:secret
```

This will update your ```.env``` file.

You can run this on docker:

```bash
docker exec -it jwt-php-fpm php artisan jwt:secret
```
