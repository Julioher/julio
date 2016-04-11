<?php
class categoria { /*inicio de la clase categoria*/

		private $idCategoria; 			
		private $nombre;	
		private $descripcion;	
		private $fecha_creacion;	
		private $fecha_mod;

	public function __construct(){

		}
		
		
		
	public function getIdCategoria(){
		return $this->idCategoria;
	}
     public function setIdCategoria($idCategoria){
     	$this->idCategoria = $idCategoria;
     }


	 
	public function getNombre(){
		return $this->nombre;
	}
     public function setNombre($nombre){
     	$this->nombre = $nombre;
     }

	 
	 
     public function getDescripcion(){
		return $this->descripcion;
	}
     public function setDescripcion($descripcion){
     	$this->descripcion = $descripcion;
     }

	 
	 
     public function getFecha_creacion(){
		return $this->fecha_creacion;
	}
     public function setFecha_creacion($fecha_creacion){
     	$this->fecha_creacion = $fecha_creacion;
     }

	 
	 
     public function getFecha_mod(){
		return $this->fecha_mod;
	}
     public function setFecha_mod($fecha_mod){
		 $this->fecha_mod = $fecha_mod;
	}
	
	
}/*fin de la clase categoria*/
?>

