# symforum

A Symfony web forum

Usage:

```
git clone https://github.com/bpetering/docker-symfony-postgres
cd docker-symfony-postgres
git clone https://github.com/bpetering/symforum app
docker-compose up -d
cd app && composer install && cd ..
docker-compose run phpcli php bin/console doctrine:database:create
docker-compose run phpcli php bin/console doctrine:migrations:migrate

(visit http://localhost:5000)
```
