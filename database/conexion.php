<?php
class conexio{
    function conexion(){
        $host="localhost";
        $dbname="Usuarios";
        $username="ChristianMejia";
        $password="123456789";
        $port=1433;

        try{
            $conn = new PDO("sqlsrv:Server=$host,$port;Database=$dbname",$username,$password);
            echo "Se conecto correctamente a la base de datos";
        }
        catch(PDOExeceptio $exp){
            echo ("No se logro conectar con la base: $dbName, error: $exp");
        }
        return $conn;
    }
}
¿>