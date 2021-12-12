<?php
class Empresa{
private $idEmpresa;
private $nombreEmpresa;
private $imagen;
private $descripcion;
private $categoria;
private $horario;

public function __construct($idEmpresa,$nombreEmpresa,$imagen,$descripcion,$categoria,$horario){
    $this->idEmpresa = $idEmpresa;
    $this->nombreEmpresa = $nombreEmpresa;
    $this->imagen = $imagen;
    $this->descripcion = $descripcion;
    $this->categoria = $categoria;
    $this->horario = $horario;
}


public static function obtenerEmpresas($idUsuario){
    $contenidoArchivoEmpresas = file_get_contents('../data/empresa.json');
    $empresas = json_decode($contenidoArchivoEmpresas,true);
    for ($i=0; $i <sizeof($empresas); $i++) { 
            if($empresas[$i]["idEmpresa"]==$idUsuario){
                    return $empresas[$i];
            }
            
    }
    return null;
    
}
public static function obtenerEmpresa(){
    return json_decode(file_get_contents('../data/empresa.json'),true);
}
public function guardarEmpresa(){
    $contenidoArchivo = file_get_contents("../data/empresa.json");
    $e = json_decode($contenidoArchivo, true);
    $e[] = array(
                 "idEmpresa"=> $this->idEmpresa,
                 "nombreEmpresa"=> $this->nombreEmpresa,
                 "imagen"=> $this->imagen,
                 "descripcion"=> $this->descripcion,
                 "categoria"=> $this->categoria,
                 "horario"=> $this->horario
    );
    $archivo = fopen("../data/empresa.json","w");
    fwrite($archivo, json_encode($e));
    fclose($archivo);
    
    echo '{"codigoResultado":1, "mensaje":"agregado con exito"}';
    
    
 }

/**
 * Get the value of idEmpresa
 */ 
public function getIdEmpresa()
{
return $this->idEmpresa;
}

/**
 * Set the value of idEmpresa
 *
 * @return  self
 */ 
public function setIdEmpresa($idEmpresa)
{
$this->idEmpresa = $idEmpresa;

return $this;
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
 * Get the value of categoria
 */ 
public function getCategoria()
{
return $this->categoria;
}

/**
 * Set the value of categoria
 *
 * @return  self
 */ 
public function setCategoria($categoria)
{
$this->categoria = $categoria;

return $this;
}

/**
 * Get the value of horario
 */ 
public function getHorario()
{
return $this->horario;
}

/**
 * Set the value of horario
 *
 * @return  self
 */ 
public function setHorario($horario)
{
$this->horario = $horario;

return $this;
}
}    


?>