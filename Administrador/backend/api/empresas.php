<?php
header("Content-Type: application/json");
include_once("../class/class-empresa.php");
switch($_SERVER['REQUEST_METHOD']){
    case 'POST': 
        $_POST = json_decode(file_get_contents('php://input'),true);
        $e = new Empresa(
        $_POST["idEmpresa"],
        $_POST["nombreEmpresa"],
        $_POST["imagen"],
        $_POST["descripcion"],
        $_POST["categoria"],
        $_POST["horario"]
      );
        $e->guardarEmpresa();
    break;
    case "GET":    
         if (isset($_GET['id'])){
        echo json_encode(Empresa::obtenerEmpresas($_GET['id']));
    }
    else{
        echo json_encode(Empresa::obtenerEmpresa());
    } 
       
    break;
    case "PUT":
        
    break;
    case "DELETE":
        
    break;

}

?>