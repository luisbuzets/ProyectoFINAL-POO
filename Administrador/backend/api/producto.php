<?php
header("content-Type: application/json");
include_once("../class/class-productos.php");
switch($_SERVER['REQUEST_METHOD']){
    case 'POST'://GUARDAR
        $_POST = json_decode(file_get_contents('php://input'),true);
        $p = new Productos(
        $_POST["nombreEmpresa"],
        $_POST["idProducto"],
        $_POST["nombreProducto"],
        $_POST["descripcion"],
        $_POST["imagen"],
        $_POST["precio"]
      );
        $p->guardarProducto();
    case 'GET':
        if(isset($_GET['idUsuario'])){
              Productos::obtenerProductos($_GET['idUsuario']);
        } if(isset($_GET['idProducto'])){
        }else{
           
        }
        break;
    case 'PUT':
        //ACTUALIZAR
        break;
    case 'DELETE':
       //ELIMINAR
        break;        
}





?>