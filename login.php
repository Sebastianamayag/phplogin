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
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $query="SELECT * FROM productos WHERE catergoriaProductos=$categoria";
    $result = mysqli_query($link,$query);
    $resultado=array();
    while($extraerDatos=$result->fetch_assoc()){
        $resultado[]=$extraerDatos;
    }
    echo json_encode($resultado);
    }

    ?>