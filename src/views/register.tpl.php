<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/images/css/register.css">
    <title>Librería Online</title>
</head>
<body>
    <header>
      <h1>Librería Online</h1>
    </header>
  
    <section>
      <h2>Registro</h2>
      <form action="/register/registeraction" method="post">
        <label for="registerUser">Nombre de Usuario:</label>
        <input type="text" id="registerUser" name="registerUser" required>
  
        <label for="registerEmail">Correo Electrónico:</label>
        <input type="email" id="registerEmail" name="registerEmail" required>
  
        <label for="registerPassword">Contraseña:</label>
        <input type="password" id="registerPassword" name="registerPassword" required>
  
        <button type="submit" class="login-btn">Registrarse</button>
      </form>
    </section>
  
    <section>
      <h2>¿Ya tienes una cuenta?</h2>
      <p>Inicia sesión para acceder a tu cuenta.</p>
      <a href="/index">Iniciar Sesion</a>
    </section>
  </body>
</html>