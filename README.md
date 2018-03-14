# GoGo Script 
Convert any HTML landing page or portfolio to a dynamic web site using GoGo Script

First we want to tell you that our project based on laravel so if you know about laravel you can easily understood our code but we will teach everything

# Installation

Run `git clone` or download the project then run `composer install` 
Open project folder then open .env.example file then put all necessary information in the file 
Then run `php artisan migrate`then `php artisan db:seed` then `php artisan serve` to run the server 

## configuration theme files 
* Template structure

Know you must convert all .html files to .blade.php then put all new .blade.php files in `resources/views `
It's time for CSS and JS files copy all and put them in `public/` folder.

* Requiring CSS and JavaScript files correctly in our template

Now I will give a small example to how you can require them 
Let we imagine that in our public filder we have two folders 

1- css include this main.css

2- js  include this main.js

`<link href="{{ asset('css/main.css') }}" >`

`<script src="{{ asset{'js/main.js') }} "></script>`

# Displaying Data in your Template

## Basic Info 
  * Your Title : `{{ $info->name }}`.
  * Your Jops  : you will find a test file in resources/views ,
  * Your Photo Link : `{{ $info->photo }}` .
  *
   
 

 .
 
