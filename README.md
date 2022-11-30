# Project Title

E-Ticket Concert (Simple Mode)

## Description

Website application that used to handle E-Ticket concert

## Getting Started

### Dependencies

* Composer
* Php >= 8
* Mysql
* Internet

### Installing
Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/master/installation)

Alternative installation is possible without local dependencies relying on [Docker](https://www.docker.com/products/docker-desktop/). 

Clone the repository

    git clone https://github.com/Sleepy4k/laravel-eticket-concert-simple.git

Switch to the repo folder

    cd laravel-eticket-concert-simple

Install all the dependencies using composer

    composer install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate:fresh --seed

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000

**TL;DR command list**

    git clone https://github.com/Sleepy4k/laravel-eticket-concert-simple.git
    cd laravel-eticket-concert-simple
    composer install
    cp .env.example .env
    php artisan key:generate
    
**Make sure you set the correct database connection information before running the migrations**

    php artisan migrate:fresh --seed
    php artisan serve

## Help

Any advise for common problems or issues.
```
Please create issue for detail information
```

## Authors

Contributors names and contact info

[@benjamin4kk](https://github.com/Sleepy4k)

## Version History

* 1.1.10-alpha
    * add route for admin
    * add route for user
    * change postman
    * change project documentation
* 1.1.6-alpha
    * add multi user
    * change user database table
* 1.1.1-alpha
    * change postman
    * fix error when find data
* 1.0.0-alpha
    * initial release
    * add main feature