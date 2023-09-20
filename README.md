<div id="header" align="center">
  <img src="https://media.giphy.com/media/qgQUggAC3Pfv687qPC/giphy.gif" width="600" height="300"/>
</div>

<div id="badges" align="center">
   <a href="https://www.facebook.com/gurgen1995">
    <img src="https://img.shields.io/badge/Facebook-blue?style=for-the-badge&logo=facebook&logoColor=white" alt="Facebook Badge"/>
  </a>
   <a href="https://www.linkedin.com/in/%D0%B3%D1%83%D1%80%D0%B3%D0%B5%D0%BD-%D0%BC%D0%BA%D1%80%D1%82%D1%87%D1%8F%D0%BD-15073627a">
    <img src="https://img.shields.io/badge/LinkedIn-blue?style=for-the-badge&logo=linkedin&logoColor=white" alt="LinkedIn Badge"/>
  </a>
</div>

Test exercise (Laravel 10)
=============

API development in Laravel 10
____________
Minimum requirements
------------

* Server Apache
* Laravel 10
* PHP 8.1
* Mysql 7.0.33
* composer
____________
## Copy Git

https://github.com/Gurgen1995/laravel_api.git
____________
# Operations that will help in the analysis of the project

### Create a project of Laravel

composer create-project laravel/laravel laravel_api

### After creating the Laravel project "laravel_api", we go to the project catalog

cd laravel_api_import

### Enter the necessary data in the .env file to connect to the database

![env.png](env.png)

### Run the local server
php artisan serve

### Create a database migration

php artisan make:migration create_users_table

### Start the push in the GitHub

- git init
- git add .
- git commit -m "name commit"
- git branch -M main
- git remote add origin https://github.com/Gurgen1995/laravel_api.git
- git push -u origin main

### Start the migration to create tables (users, companies, comments) in the database

php artisan migrate
____________
### Creating models, controllers, seeds, factories

- php artisan make:model nameModel
- php artisan make:controller nameController
- php artisan make:seeder nameSeeder
- php artisan make:factory nameFactory

____________
## Links for interacting with each table <br>(creating a new record, viewing, rectifying and deleting):

- Route::resource('users', UserController::class);
  (http://127.0.0.1:8000/users)
![users.png](users.png)
- Route::resource('companies', CompanyController::class);
  (http://127.0.0.1:8000/companies)
![companies.png](companies.png)
- Route::resource('comments', CommentController::class);
  (http://127.0.0.1:8000/comments)
 ![comments.png](comments.png)
- Route::resource('ratings', RatingController::class);
  (http://127.0.0.1:8000/ratings)
![ratings.png](ratings.png)

---
## Used documentations:

- https://laravel.com/docs/10.x/installation
- https://laravel.com/docs/10.x/migrations
- https://laravel.com/docs/10.x/queries
- https://laravel.com/docs/10.x/seeding
- https://laravel.com/docs/10.x/eloquent-factories#main-content
---

### Языки программирования и инструменты, которыми я пользуюсь:
<div>

<img src='icons/laravel-plain-wordmark.svg' title="React" alt="React" width="40" height="40"/>&nbsp;
<img src='icons/bootstrap-original-wordmark.svg' title="Spring" alt="Spring" width="40" height="40"/>&nbsp;
<img src='icons/git-plain-wordmark.svg' title="Redux" alt="Redux " width="40" height="40"/>&nbsp;
<img src='icons/github-original-wordmark.svg'  title="CSS3" alt="CSS" width="40" height="40"/>&nbsp;
<img src='icons/html5-plain-wordmark.svg' title="HTML5" alt="HTML" width="40" height="40"/>&nbsp;
<img src='icons/linux-original.svg'  alt="Gatsby" width="40" height="40"/>&nbsp;
<img src='icons/mysql-original-wordmark.svg' title="MySQL"  alt="MySQL" width="40" height="40"/>&nbsp;
<img src='icons/php-plain.svg' title="NodeJS" alt="NodeJS" width="40" height="40"/>&nbsp;
<img src='icons/phpstorm-original-wordmark.svg' title="AWS" alt="AWS" width="40" height="40"/>&nbsp;

</div>
