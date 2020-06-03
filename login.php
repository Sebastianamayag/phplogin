<?php

    //include 'conexion.php';

    $connect = new mysqli("23.236.50.121","root","matias2014se98","movil");

    if($connect){
    }else{
    echo "Fallo, revise ip o firewall";
    exit();
}
    $correo = $_POST['correo'];
    $password = $_POST['pass'];
    

    $consultar=$connect->query('SELECT * FROM usuarios WHERE correo="'.$correo.'" && pass="'.$password.'"');

    $resultado=array();

    while($extraerDatos=$consultar->fetch_assoc()){
        $resultado[]=$extraerDatos;
    }

    echo json_encode($resultado);

    ?>