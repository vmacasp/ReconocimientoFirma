<?php	
	class notario {
		
		public $nombres;
		public $apellidos;
		public $titulo;
		public $sexo;
		
		public function __construct($nombres, $apellidos, $titulo, $sexo){
			$this->nombres = $nombres;
			$this->apellidos = $apellidos;
			$this->titulo = $titulo;
			$this->sexo = $sexo;
		}
		
		public function obtenerNotario(){			
			return $this->nombres." ".$this->apellidos;			
		}
		
		public function obtenerTitulo(){			
			return $this->titulo;			
		}
		
		public function obtenerSexo(){			
			return $this->sexo;			
		}
			
	 }
?>