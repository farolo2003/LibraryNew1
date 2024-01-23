<?php
    namespace App\Controllers;
    use App\Request;
    use App\Registry;
    use App\Controller;
    use App\View;
    class RegisterController extends Controller {
        function __construct($session,$request)
        {
            parent::__construct($session,$request); 
        }
        function index(){
            echo View::render('register');
        }

        function registeraction(){

            if(($_POST['registerUser'])&& isset ($_POST['registerEmail'])&& isset ($_POST['registerPassword'])){
                

                $data=[
                    'username' => $_POST['registerUser'],
                    'email' => $_POST['registerEmail'],
                    'password'=> password_hash($_POST['registerPassword'], PASSWORD_DEFAULT)
                ];
                
                

                Registry::get("database")->insert('users', $data);

                header('Location:/index');



            }else{
                echo "Registro incorrecto";
            }
        }
        
    }