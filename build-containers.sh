#!/bin/bash

app_path=apartment
app_directory=/apartment/

echo "****************************"
echo "** Building Docker Images ***"
echo "****************************"


docker-compose  build  && docker-compose up -d


docker exec -t $app_path bash  -c  "${app_directory}; cp .env.example .env"

docker exec -t $app_path bash  -c  "${app_directory}; composer require maxsky/lumen-app-key-generator"
docker exec -t $app_path bash  -c  "${app_directory}; composer install;"
#docker exec -t $app_path bash  -c  " php artisan migrate"
#docker exec -t $app_path bash  -c  " php artisan db:seed"
docker exec -t $app_path bash  -c  "${app_directory}; composer dump-autoload;"