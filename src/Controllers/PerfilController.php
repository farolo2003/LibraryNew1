<?php
    namespace App\Controllers;
    use App\Request;
    use App\Controller;
    use App\View;
    use App\Registry;
    class PerfilController extends Controller {
        function __construct($session,$request)
        {
            parent::__construct($session,$request); 
        }

        function index(){
            echo View::render('perfil' );
        }

    }