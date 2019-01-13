<!DOCTYPE html>
<html>
<body>
<h1>userapi</h1>
<p>A laravel package that demonstrates REST api using custom authentication(without passport)</p>
<h3> Instructions</h3>
<p>git clone this repository and cd inside the project root, then enter the following commands:</p>
<ol>
<li>composer install</li>
<li>cp .env.example .env</li>
<li>php artisan key:generate</li>
<li>Now open `.env` file and make necessary changes to the **DB_** section</li>
<li>php artisan migrate</li>
<li>php artisan serve</li>
</ol>
<p>After setup you can call following routes:</p>
<p> * To register user, <br>Send post request to  api/user-register route using Postman or any other Http client library with following fields: <br>
 
 i) name <br>
 ii) email <br>
 ii) password <br>
 iii) phone_number <br>
 iv) address <br>
 v) gender <br>
 vi) country <br>
 vii) state 
 
 </p>
 
 Example
 <br>
 <img src='public/register.png' alt='img' >
 

 
</body>
</html>