<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login Form Design One | Fazt</title>
    <link rel="stylesheet" href="{{ asset('css/master.css') }}">
  </head>
  <body>

    <div class="login-box">
      <img src="img/logoMV.png" class="avatar" alt="Avatar Image">
      <h1>Login Usuario</h1>
      <form>
        <!-- USERNAME INPUT -->
        <label for="username">Rut</label>
        <input type="text" placeholder="Ingresa tu rut, sin guion">
        <!-- PASSWORD INPUT -->
        <label for="password">Contraseña</label>
        <input type="password" placeholder="Ingresa Tu Contraseña">
        <input type="submit" value="Ingresar">
        <a href="#">Olvidaste Tu Contraseña?</a><br>
      </form>
    </div>
  </body>
</html>
