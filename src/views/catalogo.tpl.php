<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/images/css/catalogo.css">
</head>
<body>

    <header>
        <h1 class="title">Libreria Online</h1>
        <?php
            
            if(isset($_SESSION['suscripciones'])&&$_SESSION['suscripciones']==true){
                echo '<a class="premium none" href="/suscripcion"><h1>Premium</h1></a>';
            }else{
                echo '<a class="premium" href="/suscripcion"><h1>Premium</h1></a>';
            }
        ?>
        
        <a class="perfil" href="/perfil"><h1>PERFIL</h1></a>
    </header>

    <section>

        <?php

            $i = 1;

            echo "Te quedan ".$_SESSION['diferenciaDias']. " dias restantes de suscripcion.";
            foreach ($libros as $libro) {
                echo '<div class="grid">';
                    echo '<div class="img">';
                        echo '<img class="size_img" src="public/images/book_' . $i . '.jpg" alt="">';
                    echo '</div>';
            
                    echo '<div class="details">';
                        echo '<h1 class="titulo">' . $libro->Titulo .'</h1>';
                        echo '<h3 class="Autor">Autor: ' . $libro->Autor .'</h3>';
                        echo '<h3 class="Genero">Genero: ' . $libro->Genero .'</h3>';
                        echo '<h3 class="disponible">Disponibilidad: ' . $libro->disponible .'</h3>';
                        if(isset($_SESSION['suscripciones'])&&$_SESSION['suscripciones']==true){
                            echo '<a href="public/books/readBook_' . $i . '.txt"><h3  class="btn-read">Leer Libro</h3></a>';
                        }else{
                            echo '<a href="/suscripcion"><h3  class="btn-read">Leer Libro</h3></a>';
                        }
                        
                    echo '</div>';
                echo '</div>';
            
                // Incrementa el valor de $i
                $i++;
            }
            
        ?>

    </section>
</body>
</html>
