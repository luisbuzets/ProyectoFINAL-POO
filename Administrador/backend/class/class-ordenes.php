<?php
class Ordenes{
   private $codigoUsuario;
   private $codigoOrden;
   private $title;
   private $descripcion;
   private $imagen;
   private $Motorista;

   public function __construct($codigoUsuario,$codigoOrden,$title,
   $descripcion,$imagen,$Motorista){
    $this->codigoUsuario = $codigoUsuario;  
    $this->codigoOrden = $codigoOrden;
    $this->title = $title;
    $this->descripcion = $descripcion;
    $this->imagen = $imagen;
    $this->Motorista = $Motorista;
   }
   public static function obtenerOrdenes($idUsuario){
   $contenidoArchivoOrdenes = file_get_contents('../data/carrito.json');
   $ordenes = json_decode($contenidoArchivoOrdenes, true);
   for($i=0; $i<sizeof($ordenes); $i++){
       if($ordenes[$i]["codigoOrden"] == $idUsuario)
           return $ordenes[$i];
   }
}
public static function obtenerOrden(){
   return json_decode(file_get_contents('../data/carrito.json'),true);
}


 

 public function guardarOrdenes(){
   $contenidoArchivo = file_get_contents("../data/carrito.json");
   $carrito = json_decode($contenidoArchivo, true);
   $carrito[] = array(
      
                "codigoUsuario"=> $this->codigoUsuario,
                "codigoOrden"=> $this->codigoOrden,
                "title"=> $this->title,
                "descripcion"=> $this->descripcion,
                "imagen"=> $this->imagen,
                "Motorista"=> $this->Motorista
   );
   $archivo = fopen("../data/carrito.json","w");
   fwrite($archivo, json_encode($carrito));
   fclose($archivo);

   echo '{"codigoResultado":1, "mensaje":"se agrego la orden con exito"}';

}
 


   /**
    * Get the value of codigoUsuario
    */ 
   public function getCodigoUsuario()
   {
      return $this->codigoUsuario;
   }

   /**
    * Set the value of codigoUsuario
    *
    * @return  self
    */ 
   public function setCodigoUsuario($codigoUsuario)
   {
      $this->codigoUsuario = $codigoUsuario;

      return $this;
   }

   /**
    * Get the value of codigoOrden
    */ 
   public function getCodigoOrden()
   {
      return $this->codigoOrden;
   }

   /**
    * Set the value of codigoOrden
    *
    * @return  self
    */ 
   public function setCodigoOrden($codigoOrden)
   {
      $this->codigoOrden = $codigoOrden;

      return $this;
   }

   /**
    * Get the value of title
    */ 
   public function getTitle()
   {
      return $this->title;
   }

   /**
    * Set the value of title
    *
    * @return  self
    */ 
   public function setTitle($title)
   {
      $this->title = $title;

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
    * Get the value of Motorista
    */ 
   public function getMotorista()
   {
      return $this->Motorista;
   }

   /**
    * Set the value of Motorista
    *
    * @return  self
    */ 
   public function setMotorista($Motorista)
   {
      $this->Motorista = $Motorista;

      return $this;
   }
}


?>