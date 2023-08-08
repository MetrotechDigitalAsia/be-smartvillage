#!/bin/sh

echo "🎬 entrypoint.sh: [$(whoami)] [PHP $(php -r 'echo phpversion();')]"

composer dump-autoload --no-interaction --no-dev --optimize

echo "🎬 artisan commands"
# php artisan migrate:fresh --seed # first deploy
# php artisan migrate # update table

# 💡 Group into a custom command e.g. php artisan app:on-deploy
php artisan clear-compiled
php artisan optimize

# Run After Config First
php artisan key:generate

# Update SESSION
php artisan config:clear
php artisan cache:clear
composer dump-autoload
php artisan view:clear
php artisan route:clear
php artisan storage:link

echo "🎬 change permission"

chmod -R 777 $LARAVEL_PATH/*

echo "🎬 start supervisord"

supervisord -c $LARAVEL_PATH/.deploy/config/supervisor.conf

echo "🎬 finish build"
