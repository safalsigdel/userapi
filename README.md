<!DOCTYPE html>
<html>
<body>
<h1>userapi</h1>
<p>A laravel package that demonstrates REST api using custom authentication(without passport).No nedd to install laravel passport.
All the stuff is handled by ApiToken(name any) middleware.
</p>
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
<p> * To register, <br>Send post request to  api/user-register route using Postman or any other Http client library with following fields: <br>
 
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
 <img src='public/register.png' alt='register' ><br>
 <p> * To login, <br>Send post request to  api/user-login route using Postman or any other Http client library with following fields: <br>
  
  i) email <br>
  ii) email <br> 
  </p>
  Example<br>
  <img src ='public/login.png' alt='login'>
  <br>
  <p> 1) In api.php define route that is protected by ApiToken middleware.These route can only be accessed when token is present in the request header.<p>
  <p> 2) Upon registration token is received which can be used to access various part of the application. </p>
  <p> 3) To access api routes,Authorization header must be set.  </p>
  <p> 4) The value of Authorization is the token that is received after registration.<p> 
  <p> 5) When the token matches, user can access the resource that is requested.</p>
  <p>In below example 'api-check' route is accessed which is protected by ApiToken middleware. <br>
  To access this route Authorization header is set 
  </p>
  
  <img src='public/api-check.png' alt='api-check'><br>
  <h4>Build your own api using custom authentication :)</h4>
  
</body>
</html>