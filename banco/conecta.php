<?php 

    require_once(__DIR__ . '/config.php');


    class BD extends PDO{

        public function __construct(string $bd_dsn, string $bd_user, string $bd_pass){

            /* 
            Posso controlar os dados passados por parametros
            ou fazer qualquer outra coisa
            */
            parent::__construct($bd_dsn, $bd_user, $bd_pass);

        }

    }


    $bd= new BD($bd_dsn, $bd_user, $bd_pass);

    