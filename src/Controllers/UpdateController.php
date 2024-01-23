<?php
    namespace App\Controllers;
    use App\Request;
    use App\Controller;
    use App\View;
    use App\Registry;
    class UpdateController extends Controller {
        function __construct($session,$request)
        {
            parent::__construct($session,$request); 
        }
        function index(){

            echo View::render('update');
            
        }

        function updatePerfil() {
            if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {
        
                $username = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password'];
        
                // Hashear la contraseña
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        
                $fields = [
                    'username' => $username,
                    'email' => $email,
                    'password' => $hashedPassword  // Guardar el hash en lugar de la contraseña en texto plano
                ];
        
                $conditions = [
                    'id' => $_SESSION['datosUsers']->id
                ];
        
                Registry::get("database")->update('users', $fields, $conditions);

                $login=Registry::get("database")->select('users',$fields);

                //recorrer datos del usuario
                $_SESSION['datosUsers']=$login[0];

                header('Location:/perfil');
            }
        }
        
        

    }