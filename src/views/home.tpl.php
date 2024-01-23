<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Librería Online</title>
    <link rel="stylesheet" href="public/images/css/home.css">
  </head>
  <body>
    <header>
      <h1>Librería Online</h1>
    </header>

    <section>
      <h2>Iniciar Sesión</h2>
      <form action="/index/loginaction" method="post">
        <label for="loginEmail">Correo Electrónico:</label>
        <input type="email" id="loginEmail" name="loginEmail" required />

        <label for="loginPassword">Contraseña:</label>
        <input type="password" id="loginPassword" name="loginPassword" required/>
        <button type="submit">Iniciar Sesión</button>
      </form>
    </section>

    <section>
      <h2>¿No tienes una cuenta?</h2>
      <p>Regístrate para acceder a más funciones.</p>
      <a class="register-btn" href='/register'">
        Registrarse</a>
      </button>
    </section>
  </body>
</html>
