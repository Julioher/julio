<?php
class producto{ /*inicio de la clase producto*/
	private $idProducto;
	private $nombre;
	private $precio;
	private $idCategoria;
	private $cantidad;
	private $fecha_creacion;
	private $fecha_mod;
	

	public function __construct(){

		}

		
		
	public function getIdProducto(){
		return $this->idProducto;
	}
     public function SetIdProducto($idProducto){
     	$this->idProducto = $idProducto;
     }

     

     public function getNombre(){
		return $this->nombre;
	}
     public function setNombre($nombre){
     	$this->nombre = $nombre;
     }

     

     public function getPrecio(){
		return $this->precio;
	}
     public function setPrecio($precio){
     	$this->precio = $precio;
     }

	 
     
	public function getIdCategoria(){
		return $this->idCategoria;
	}
	public function setIdCategoria($idCategoria){
		 $this->idCategoria = $idCategoria;
	}

	
	
	public function getCantidad(){
		return $this->cantidad;
	}
     public function setCantidad($cantidad){
     	$this->cantidad = $cantidad;
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
	 
}/*fin de la clase producto*/
?>

