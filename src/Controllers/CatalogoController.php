<?php
    namespace App\Controllers;
    use App\Request;
    use App\Controller;
    use App\View;
    use App\Registry;
    class CatalogoController extends Controller {
        function __construct($session,$request)
        {
            parent::__construct($session,$request); 
        }
        function index(){
            //recorrer libros de la base de datos
            $libros=Registry::get("database")->select('book');

            echo View::render('catalogo',  ['libros' => $libros]);
        }


        

    }