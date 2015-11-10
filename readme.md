## Configure the project to run in your environment

1. Clone Repository 
2. run `composer install` 
3. run `vendor/bin/homestead make` 
4. edit Homestead.yaml and change 'map: homestead.app' to 'map: showroom.senecatank.dev'
5. edit /etc/hosts to point the test domain to 192.168.10.10
6. run `mv .env.example .env` and then `php artisan key:generate`
7. run `vagrant up`
8. ssh into the VM
9. cd to the project directory: `cd showroom`
10. run `php artisan migrate`


