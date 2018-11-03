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
