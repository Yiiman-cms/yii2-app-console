Simple Yii 2 Console Project Template
============================

Simple Yii 2 Console Project Template is a skeleton [Yii 2](http://www.yiiframework.com/) application best for
rapidly creating console applications.

DIRECTORY STRUCTURE
-------------------

      commands/           contains console commands (controllers)
      config/             contains application configurations
      mail/               contains view files for e-mails
      models/             contains model classes  
      runtime/            contains files generated during runtime
      vendor/             contains dependent 3rd-party packages

REQUIREMENTS
------------

The minimum requirement by this project template that your Web server supports PHP 7.4.


INSTALLATION
------------

### Install via Composer

If you do not have [Composer](http://getcomposer.org/), you may install it by following the instructions
at [getcomposer.org](http://getcomposer.org/doc/00-intro.md#installation-nix).

You can then install this project template using the following command:

~~~
php composer.phar global require "fxp/composer-asset-plugin:^1.2.0"
php composer.phar create-project --prefer-dist --stability=dev yiiman/yii2-app-console console
~~~

CONFIGURATION
-------------

### Config DataBase
Change `.env-example` name to `.env`

Edit the file `.env` with real data

## Use commands 
Type `php yii` in console to see commands


**NOTE:**
- Yii won't create the database for you, this has to be done manually before you can access it.

## Learning and usage
* [Learn on Yii framework site](https://www.yiiframework.com/doc/guide/2.0/en/tutorial-console)
* [Learn on youtube](https://www.youtube.com/watch?v=HG6omaMRx_k&list=PLAUvAGgAbomAF0cQ2ubwJYDJKFrmHREjm)
 
### Lesson 1
Install this project:
[![Create console app with php](http://img.youtube.com/vi/HG6omaMRx_k/0.jpg)](http://www.youtube.com/watch?v=HG6omaMRx_k "Create console app with php")

### Lesson 2
Create first custom command on console:
[![Create console app with php - custom command](http://img.youtube.com/vi/vVehKovWWwU/0.jpg)](http://www.youtube.com/watch?v=vVehKovWWwU "Create console app with php - custom command")

### Lesson 3
Crawl simple data from Github pages
[![Create console app with php - Crawl simple data from Github pages](http://img.youtube.com/vi/lhCCfbslO1o/0.jpg)](http://www.youtube.com/watch?v=lhCCfbslO1o "Create console app with php - Crawl simple data from Github pages")
