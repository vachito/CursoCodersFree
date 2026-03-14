<?php 
    namespace App\View\Composers;

    class CompanyComposer 
    {
        public function compose($view)
        {
            $view->with('prueba2','Este es un mensaje de prueba 2 enviado desde un service via un metodo composer');
        }
    }