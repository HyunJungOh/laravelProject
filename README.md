How to start laravel project (On windows)
# laravelProject
installing and start a new app using laravel

# 1. Install php using Bitnami

  https://bitnami.com/stack/wamp

# 2. Add PHP loader to the path 
  Controller Panel > System > System path
  Add the path where "php.exe" is
  (ex: c\xampp\php)  

# 3. Check if everything neccessary there
   php --version # PHP 5.5.30
   php -m | findstr openssl
   php -m | findstr pdo
   php -m | findstr mbstring
   php -m | findstr tokenizer

# 4. Install Laravel Composer 
  --composer version
  composer global require "laravel/installer"

  -> laravel version

  laravel <Project name>
  cd <Project name>
  php artisan --version


# All done! Start the server and run laravel
  php artisan serve

  Go to http://localhost.8000 and see if you can see the laravel page


#Generate APP_KEY !!! 
will be used in encrypting session keys(config/app.php)
$ php artisan key:generate


#Connect DB to laravel
1. set .env file
config/database.php
2. phpMyAdmin 
   xampp/phpMyAdmin/config.inc.php
   set the password
3. (if you forgot root password)
 1) Edit my.ini
  add skip-grant-tables under [mysqld]
 2) restart mySQL
 3) in cmd >>
   UPDATE mysql.user SET Password=PASSWORD('new_pass') WHERE User='root'

4. create user and grant access

#Make table using migration
1. php artisan make:migration create_todolist_table

2. edit migration file under database/migrtions

3. migration
   php artisan migrate (if error occurs : php artisan migrate:reset )
   * edited in AppServiceProvider.php
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Schema::defaultStringLength(191);

    }

