## Configure the project to run in your environment

1. Clone Repository 
2. run `composer install` 
3. run `vendor/bin/homestead make` 
4. edit Homestead.yaml and change 'map: homestead.app' to 'map: <insert dev domain here>'
5. edit /etc/hosts to point the test domain to 192.168.10.10
6. run `mv .env.example .env` and then `php artisan key:generate`
7. Install node modules: `npm install`
8. run `vagrant up`
9. ssh into the VM
10. cd to the project directory: `cd showroom`
11. run `php artisan migrate`
