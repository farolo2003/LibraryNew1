<?php

namespace App\Controllers;
    use App\Request;
    use App\Controller;
    use App\View;
    use App\Registry;
    class SuscripcionController extends Controller {
        function __construct($session,$request)
        {
            parent::__construct($session,$request); 
        }
        function index(){
            echo View::render('suscripcion');
        }

        function suscripcion(){
            if(isset($_POST['nombre-titular']) && isset($_POST['numero-tarjeta']) && isset($_POST['fecha-expiracion']) && isset($_POST['cvv']) ){

                $id=$_SESSION['datosUsers']->id;
                $startDate=new \DateTime();
                $finishDate=new \DateTime();
                $intervalo=new \DateInterval('P1M');
                $data=[
                    'user_id' => $id,
                    'start_date'=>$startDate->format("Y-m-d"),
                    'end_date'=>$finishDate->add($intervalo)->format("Y-m-d")
                ];
                

                $suscripciones=Registry::get("database")->insert('suscripciones', $data);
                
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

                
                header('Location:/catalogo');
                

            }
        }

    }