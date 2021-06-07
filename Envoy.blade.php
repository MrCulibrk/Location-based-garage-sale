@servers(['garagesales' => 'user@172.105.83.183'])

@task('deploy')

@if ($production == 'yes')
    cd /home/deploybot/praktik
@else
    cd /home/deploybot/praktik-staging
@endif

php artisan down
git reset --hard HEAD
git pull origin main
composer install
php artisan migrate --force
php artisan up

@endtask