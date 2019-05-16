<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<html>
  <head>
  <title>Login</title>
  <meta charset=“UTF-8”>
  <meta name=“viewport” content=“width=device-width”>
  </head>
  <body>
  <form action=“ingresar.php” method=“POST”>
  <input type=“text” placeholder=“carnet” name=“txtusuario” />
  <input type=“password” placeholder=“contraseña” name=“txtpassword” />
  <input type=“submit” value=“submit” name=“entrar” />
  </form>
  </body>
</html>
