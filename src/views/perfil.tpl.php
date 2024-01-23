<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perfil</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    .profile-container {
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      padding: 20px;
      width: 300px;
      height: 450px;
      text-align: center;
    }

    .profile-container h2 {
      color: #333;
    }

    .profile-info {
      text-align: left;
      margin-top: 10px;
    }

    .profile-info p {
      margin: 5px 0;
    }
  </style>
</head>
<body>


<div class="profile-container">
  <h2><u>Perfil</u></h2>
  <div class="profile-info">
    <h2>Nombre de Usuario:</h2> <h3><?php print  $_SESSION['datosUsers']->username?></h3>
    <h2>Correo Electrónico:</h2> <h3><?php print  $_SESSION['datosUsers']->email?></h3>
    <h2>Contraseña: </h2> <h3>*********</h3><br>
    <a href="/update"><h3>Editar Perfil</h3></a><a href="/catalogo"><--- Atras</a>
  </div>
</div>

</body>
</html>
