docker run --rm \  
    -u "$(id -u):$(id -g)" \  
    -v $(pwd):/var/www/html \  
    -w /var/www/html \  
    laravelsail/php83-composer:latest \  
    composer install --ignore-platform-reqs  
  
php artisan key:generate  
php artisan migrate  
npm install  
npm run build  
php artisan db:seed  
