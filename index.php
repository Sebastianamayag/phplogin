<?php
    $host ="23.236.50.121";
    $puerto = "3306";
    $user ="root";
    $pw = "matias2014se98";
    $db ="movil";
    function Conectarse($host,$puerto,$user,$pw,$db) {
    if (!($link = mysqli_connect($host.":".$puerto, $user, $pw))){ 
            echo "Error conectando a la base de datos.<br>"; 
           exit(); 
         }else{
          echo " ";
          }
          if (!mysqli_select_db($link, $db)) 
        { 
            echo "Error seleccionando la base de datos.<br>"; 
            exit(); 
        }else{
           echo " "; 
         }
       return $link; 
}
//conectarse a la bd
$link = Conectarse($host,$puerto,$user,$pw,$db);
//metodo para ver los datos
    
    if ($_SERVER['REQUEST_METHOD'] == 'GET'){
    //$correo=$_POST['correo'];
    //$password=$_POST['password'];
    if (isset($_GET['correo']) && isset($_GET['password'])){
    $correo='sebasamaya.gomez@hotmail.com';
    $password='matias2014se98';
    $query='SELECT * FROM usuarios WHERE correo="'.$correo.'" && pass="'.$password.'"';
    $result = mysqli_query($link,$query);
    $resultado=array();
    while($extraerDatos=$result->fetch_assoc()){
        $resultado[]=$extraerDatos;
    }

    $json = json_encode($resultado);
    echo $jason;

    }else{
        $query='SELECT * FROM usuarios';
        $result = mysqli_query($link,$query);
        $resultado=array();
        while($extraerDatos=$result->fetch_assoc()){
        $resultado[]=$extraerDatos;
    }
        $json = json_encode($resultado);
           echo $jason;
    }
}

    ?>