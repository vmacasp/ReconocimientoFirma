<?php
    class oficina {
		
		public $numeroM;
		public $numeroF;
		public $canton;
		public $provincia;		
		
		public function __construct($numeroM, $numeroF, $canton, $provincia){
			$this->numeroM = $numeroM;
			$this->numeroF = $numeroF;
			$this->canton = $canton;
			$this->provincia = $provincia;
		}
		
		public function obtenerDesignacion($sexo){			
			if ($sexo == "M"){
				return "Notario Público ".$this->numeroM." del cantón ".$this->canton;
			} else {
				return "Notaria Pública ".$this->numeroF." del cantón ".$this->canton;
			}						
		}
		
		public function obtenerProvincia(){
			return $this->provincia;
		}
		
		public function obtenerOficina(){
			return "Notaría Pública ".$this->numeroF."del cantón ".$this->canton;
		}
			
	 }
?>