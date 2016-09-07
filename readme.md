# Role Based Permission Management

Role based permission management using laravel5.3 and [entrust](https://github.com/Zizaco/entrust) package

To make the role based permission for the different types of users and based on the this [article](http://itsolutionstuff.com/post/laravel-52-user-acl-roles-and-permissions-with-middleware-using-entrust-from-scratch-tutorialexample.html) 

## Official Documentation of Laravel Framework

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

## How to use it ??

You can follow the following step to configure this project
- Clone the repository using the command "git clone https://github.com/madhusudhan1234/Role-Permission-Management.git"
- Create database in mysql
- Add rename .env.example file to .env and configure for the database credentials
- Now go up to project and run the command "php artisan migrate"
- And seed the data into database using command "php artisan db:seed"
- And run command "php artisan serve" and take a look at "localhost:8000" in browser