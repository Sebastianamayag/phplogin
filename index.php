<?php
    $host ="23.236.50.121";
    $puerto = "3306";
    $user ="root";
    $pw = "matias2014se98";
    $db ="movil";
   
$connect = new mysqli("23.236.50.121","root","matias2014se98","movil");

if($connect){
   
}else{
  echo "Fallo, revise ip o firewall";
  exit();
}
    $correo=$_POST['correo'];
    $password=$_POST['password'];
    $connect->query('SELECT * FROM usuarios WHERE correo="'.$correo.'" && pass="'.$password.'"');

    ?>