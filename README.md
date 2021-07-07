## Laravel Installation
Via Composer Create-Project<br/>
$ composer create-project --prefer-dist laravel/laravel:^7.0 blog

update .env file 

php artisan key:generate

php artisan serve


## Database migration 
Dabase Migration 

//brew services start mysql<br/>
brew services stop mysql

//Enter into mysql<br/> 
mysql -uroot -p 

//Create a new database<br/>
CREATE DATABASE db_name;

//Show all the databases<br/> 
SHOW DATABASES;

clear & <exit> to logout

//Add a new table<br/> 
php artisan make: migration create_posts_table --create="posts"

//Add to existing table<br/> 
php artisan make:migration add_is_admin_column_to_posts_tables - -table=“posts”

Then, edit the migration file and run the migration command

//Undo the last migration<br/>
php artisan migrate:rollback

//Reset all migrations<br/> 
php artisan migrate:reset

//Rollback and migrate<br/> 
php artisan migrate:refresh

//Check the migration status<br/> 
php artisan migrate:status 

## Install Bootstrap 4 on Laravel
$ composer require laravel/ui<br/>
After successfully installing the package, we install Bootstrap 4 in our application using the following command:

$ php artisan ui bootstrap<br/>
You can also install the auth scaffoldings using the following command instead:

$ php artisan ui bootstrap --auth<br/>
Finally, you need to install the bootstrap package and the related frontend dependencies such as jquery from npm using the following command:

$ npm install

//To build css and js<br/>
$ npm run development

//To build runtime<br/> 
$ npm run watch 

## Install Laravel Collective
Begin by installing this package through Composer. Edit your project's composer.json file to require laravelcollective/html.

$ composer require laravelcollective/html

### Install ckeditor
$ composer require ckeditor/ckeditor

Then copy ckeditor folder in vendor/ckeditor to public folder
And add this script<br/>
<script src="{{ asset('ckeditor/ckeditor.js')}}"></script><br/>
<script>CKEDITOR.replace('article-ckeditor');</script>

## Install Laravel Auth ##
php artisan make:auth

## Mac environment setup 
Brew packages -> usr/local/Celler<br/>
Package information -> usr/local/opt

brew list<br/> 
brew search <php><br/>
brew list<br/> 
brew install <php/mysql><br/>
brew install node<br/> 
brew install composer<br/>
brew info composer<br/>

//Remove composer<br/> 
rm usr/local/bin/composer

//Paths<br/>
Sudo nano etc/paths

//Run server<br/>
php artisan serve -port=1234<br/>
CTR + C to stop 

//Install valet<br/>
composer global require larval/valet

//Register the current working (or specified) directory with Valet<br/>
valet park

//Link the current working directory to Valet<br/>
valet link

//Display all of the registered Valet links<br/>
valet links 

Remove the current working (or specified) directory from Valet's //list of paths<br/>
valet forget


## Docker installation on Ubuntu 18
 sudo apt-get update

sudo apt install docker.io
sudo systemctl start docker
sudo systemctl enable docker

### Deployment of a Laravel application
git clone repo
docker-compose up -d
docker exec -it 83ad4ef2b5dc bash

....

DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=laraapp_db
DB_USERNAME=root
DB_PASSWORD=

....

### Install Vim and Nano inside docker
sudo docker exec -it be8aa338d656 bash

apt-get update
apt-get install vim nano

### File permission fix
sudo chmod o+w ./storage/ -R


