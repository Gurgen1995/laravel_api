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

### Start the migration to create tables (users, companies, comments) in the database

php artisan migrate

____________
Ссылки для запуска импорта данных из API
--------------------
У нас созданы 4 таблицы в Базе данных:
* Stocks
* Incomes
* Orders
* Sales

Ссылки для запуска импорта данных из API для каждой таблицы:
* Route::get('/add-stocks', [StockController::class, 'addStock'])->name('stocks.addstock');
* Route::get('/add-incomes', [IncomeController::class, 'addIncome'])->name('incomes.addincome');
* Route::get('/add-orders', [OrderController::class, 'addOrder'])->name('orders.addorder');
* Route::get('/add-sales', [SaleController::class, 'addSale'])->name('sales.addsale');

Пример запуска импорта данных из API в таблицу Orders:

![img_1.png](img_1.png)


Ссылки для взаимодествия с каждой таблицей <br>(создание новой записи, просмотр, ректирование и удаление):
* Route::resource('stocks', 'App\Http\Controllers\StockController');
* Route::resource('incomes', 'App\Http\Controllers\IncomeController');
* Route::resource('orders', 'App\Http\Controllers\OrderController');
* Route::resource('sales', 'App\Http\Controllers\SaleController');

Пример просмотра таблицы Stocks:

![img_2.png](img_2.png)

### !!! В таблицах incomes, orders и sales даты получения данных указаны не текущие, так как за сегодняшний день отсутсвуют данные !!!
<br>
<br>
<br>

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
