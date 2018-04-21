cd /data/www/adidas
git fetch 2>&1
composer dump-autoload 2>&1
php artisan config:clear 2>&1
php artisan cache:clear 2>&1
php artisan queue:restart 2>&1