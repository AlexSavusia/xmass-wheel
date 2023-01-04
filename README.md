
## Install
1. `composer install`
2. `php artisan key:generate`
3. `php artisan migrate`

# INIT
1. `php artisan initial:service 1`
2. `php artisan accrual:prize true`

## HELP commands
1. `php artisan initial:service {truncate}`

## Cron
1. each 1 min, `php artisan initial:service`