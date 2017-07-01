# Laravel Sample - Basic Task List
This sample project is based on [Basic Task List Tutorial](https://laravel.com/docs/5.1/quickstart) with slight modification. This project provides a basic introduction to the Laravel framework and includes content on the following concept:
- database migrations, 
- the Eloquent ORM for basic CRUD, 
- routing using HTTP verb,
- controller
- input validation, and 
- views using Blade templates.

This project sample basic selection of Laravel features through simple task list application which we can use to track all of the tasks we want to accomplish. This typical "to-do list" example demonstrates how to do simple CRUD using Laravel.

## Quick Installation
First, clone repo and install all dependencies.
```sh
$ git clone https://github.com/haryasa/laravel-sample-basic-task-list.git basic-task-list
$ cd basic-task-list
$ composer install
```
After that, setting up database config in `.env` file and then run migrate command.
```sh
$ php artisan migrate
```
You're ready to go! :)