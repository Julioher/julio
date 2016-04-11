<?php
class venta{ /*inicio de la clase venta*/

 	private $idVenta;
 	private $idUsuario;
 	private $fecha;
 	

 	public function __construct(){
		
	}
	

 		public function getIdVenta(){
 			return $this->idVenta;
 		}
 		public function setIdVenta($idVenta){
 			$this->idVenta = $idVenta;
 		}

		
		
        public function getIdUsuario(){
 			return $this->idUsuario;
 		}
 		public function setIdUsuario($idUsuario){
 			$this->idUsuario = $idUsuario;
 		}

		
		
 		public function getFecha(){
 			return $this->fecha;
 		}
 		public function setFecha($fecha){
 			$this->fecha = $fecha;
 		}

 }/*fin de la clase venta*/
?>

