<?php
    namespace App\Controllers;
    use App\Request;
    use App\Controller;
    use App\View;
    use App\Registry;
    class IndexController extends Controller {
        function __construct($session,$request)
        {
            parent::__construct($session,$request); 
        }
        function index(){

            echo View::render('home');
            
        }

        function loginaction(){
            
            if(isset($_POST['loginEmail']) && isset($_POST['loginPassword']) ){

                $fields=[
                    'email' => $_POST['loginEmail'],
                ];

                
                //obtener datos de la bd
                $login=Registry::get("database")->select('users',$fields);
                
                
                //recorrer datos del usuario
                $_SESSION['datosUsers']=$login[0];

                //suscripcion
                
                $condition_sub=['user_id' => $_SESSION['datosUsers']->id];
                $suscripciones=Registry::get("database")->select('suscripciones', $condition_sub);
                
                $_SESSION['suscripciones']=$suscripciones;

   

                //calcular dias restantes de suscripcion
                $fechaActual = new \DateTime($_SESSION['suscripciones'][0]->start_date);      
                $finishDate = new \DateTime($_SESSION['suscripciones'][0]->end_date);
                $diferencia = $fechaActual->diff($finishDate);
                // Obtener el número de días restantes
                $diasRestantes = $diferencia->days;

                $_SESSION['diferenciaDias'] = $diasRestantes;


                
                
             

                

                if(password_verify($_POST['loginPassword'], $login[0]->password)){
                    header('Location:/catalogo');
                }
                


            }else{
                echo "Usuario incorrecto";
            }
        }
        
    }