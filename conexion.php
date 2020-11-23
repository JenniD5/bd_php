<?php //etiqueta php 


    class Bd{
        private static $conexion = NULL; //variable conexion para la cadena 
        private function __construct() {} //pre-cargar informacion  
        
        public static function conectar(){
            $pdo_option[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION; //cachar excepcion
            self::$conexion = new PDO('mysql:host=localhost;dbname=biblioteca_', 'root','',$pdo_option);
             //cadena de conexion
            //ORIGEN, USUARIO/CLAVE, ERROR
            return self::$conexion;
        }
        

    }


?>