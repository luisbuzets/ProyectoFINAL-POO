<?php

class Productos{
    private $nombreEmpresa;
    private $idProducto;
    private $nombreProducto;
    private $descripcion;
    private $imagen;
    private $precio;


    public function __construct($nombreEmpresa,$idProducto,$nombreProducto,$descripcion,$imagen,$precio){
        $this->nombreEmpresa = $nombreEmpresa;
        $this->idProducto = $idProducto;
        $this->nombreProducto = $nombreProducto;
        $this->descripcion = $descripcion;
        $this->imagen = $imagen;
        $this->precio = $precio;
        
    }
    public static function obtenerProductos($idUsuario){
        $contenidoArchivo = file_get_contents('../data/productos.json');
        $Producto = json_decode($contenidoArchivo, true);
        for($i=0; $i<sizeof($Producto);$i++){
            if($Producto[$i]["idProducto"]==$idUsuario){
                return $Producto[$i];
                break;
            }
        }
        return null;
}
public static function obtenerEmpresa(){
    return json_decode(file_get_contents('../data/productos.json'),true);
}
public function guardarProducto(){
    $contenidoArchivo = file_get_contents("../data/productos.json");
    $e = json_decode($contenidoArchivo, true);
    $e[] = array(
                 "nombreEmpresa"=> $this->nombreEmpresa,
                 "idProducto"=> $this->idProducto,
                 "nombreProducto"=> $this->nombreProducto,
                 "descripcion"=> $this->descripcion,
                 "imagen"=> $this->imagen,
                 "precio"=> $this->precio
    );
    $archivo = fopen("../data/productos.json","w");
    fwrite($archivo, json_encode($e));
    fclose($archivo);
    
    echo '{"codigoResultado":1, "mensaje":"agregado con exito"}';
    
    
 }



    /**
     * Get the value of nombreEmpresa
     */ 
    public function getNombreEmpresa()
    {
        return $this->nombreEmpresa;
    }

    /**
     * Set the value of nombreEmpresa
     *
     * @return  self
     */ 
    public function setNombreEmpresa($nombreEmpresa)
    {
        $this->nombreEmpresa = $nombreEmpresa;

        return $this;
    }

    /**
     * Get the value of idProducto
     */ 
    public function getIdProducto()
    {
        return $this->idProducto;
    }

    /**
     * Set the value of idProducto
     *
     * @return  self
     */ 
    public function setIdProducto($idProducto)
    {
        $this->idProducto = $idProducto;

        return $this;
    }

    /**
     * Get the value of nombreProducto
     */ 
    public function getNombreProducto()
    {
        return $this->nombreProducto;
    }

    /**
     * Set the value of nombreProducto
     *
     * @return  self
     */ 
    public function setNombreProducto($nombreProducto)
    {
        $this->nombreProducto = $nombreProducto;

        return $this;
    }

    /**
     * Get the value of descripcion
     */ 
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set the value of descripcion
     *
     * @return  self
     */ 
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get the value of imagen
     */ 
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * Set the value of imagen
     *
     * @return  self
     */ 
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;

        return $this;
    }

    /**
     * Get the value of precio
     */ 
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set the value of precio
     *
     * @return  self
     */ 
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }
}


?>