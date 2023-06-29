cp .env.example .env
chmod 766 .env
docker-compose build app
docker-compose up -d
docker-compose exec app php artisan key:generate
docker-compose exec app composer install
docker-compose exec app php artisan migrate
docker-compose exec app php artisan storage:link
npm install
npm run dev
