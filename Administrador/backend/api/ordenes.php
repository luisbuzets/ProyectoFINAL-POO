<?php
header("Content-Type: application/json");
include_once("../class/class-ordenes.php");
switch($_SERVER['REQUEST_METHOD']){
    case 'POST': 
        $_POST = json_decode(file_get_contents('php://input'),true);
        $orden = new Ordenes(
        $_POST["codigoUsuario"],
        $_POST["codigoOrden"],
        $_POST["title"], 
        $_POST["descripcion"],
        $_POST["imagen"],
         $_POST["Motorista"]);
        $orden ->guardarOrdenes();
        json_encode($_POST);
    break;
    case "GET":     
        if (isset($_GET['id'])){
            echo json_encode(Ordenes::obtenerOrdenes($_GET['id']));
        }
        else{
            echo json_encode(Ordenes::obtenerOrden());
        } 
    break;
    case "PUT": //Actualizar
        //Actualizar
    break;
    case "DELETE":
        //Eliminar
    break;

}

?>