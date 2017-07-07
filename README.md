# Laravel Sample - Basic Task List
This sample project is based on [Basic Task List Tutorial](https://laravel.com/docs/5.1/quickstart) with slight modification. This project provides a basic introduction to the Laravel framework and includes content on the following concepts:
- database migrations, 
- the Eloquent ORM for basic CRUD, 
- routing using HTTP verb,
- controller,
- dependency injection,
- input validation,
- pagination, and
- views using Blade templates.

This project sample a basic selection of Laravel features through simple task list application which we can use to track all of the tasks we want to accomplish. This typical "to-do" list example demonstrates how to do simple CRUD using Laravel.

<kbd>
    <img alt="Preview" src="https://preview.ibb.co/hLDMDQ/Fire_Shot_Capture_3_Sample_Laravel_Basic_Task_List_http_sample_laravel_basic_task_list_dev.png" />
</kbd>

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

## Other Laravel Sample
Check out also [Laravel Sample - Intermediate Task List](https://github.com/haryasa/laravel-sample-intermediate-task-list) repository for an intermediate introduction to the Laravel framework.

## To Do
- Reduce the concepts used to make this sample simpler.