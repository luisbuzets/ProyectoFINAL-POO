<?php
class Usuario{
    private $idUsuario;
    private $nombre;
    private $apellido;
    private $Numero;
    

    public function __construct($idUsuario,$nombre,$apellido,$Numero){
        $this->idUsuario = $idUsuario;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->Numero = $Numero;

    }
    public static function obtenerUsuarios($idUsuario){
        $contenidoArchivoUsuario = file_get_contents('../data/usuarios.json'); 
        $usuarios = json_decode($contenidoArchivoUsuario,true);
        $usuarioSeleccionado = null;
        for($i=0; $i< sizeof($usuarios);$i++){
            if($usuarios[$i]['idUsuario'] == $idUsuario){
                $usuarioSeleccionado = $usuarios[$i];
                return $usuarioSeleccionado;
            }
        }
        return null;

    }
    
    public static function obtenerUsuario(){
        $archivoObtenerUsaurio = file_get_contents('../data/usuarios.json');
        return json_decode($archivoObtenerUsaurio,true);
}


    /**
     * Get the value of idUsuario
     */ 
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    /**
     * Set the value of idUsuario
     *
     * @return  self
     */ 
    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;

        return $this;
    }

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of apellido
     */ 
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set the value of apellido
     *
     * @return  self
     */ 
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get the value of Numero
     */ 
    public function getNumero()
    {
        return $this->Numero;
    }

    /**
     * Set the value of Numero
     *
     * @return  self
     */ 
    public function setNumero($Numero)
    {
        $this->Numero = $Numero;

        return $this;
    }
}
?>