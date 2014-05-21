
<?php

class ER {
    
	public function valida_email($valor){
		$exp_reg = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}





	public function valida_usuario($valor){
		$exp_reg = '/^[a-z\d_]{4,28}$/i';
				if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}



	public function valida_codigoPostal($valor){
		$exp_reg = '/^[0-9]{5,5}([- ]?[0-9]{4,4})?$/';
				if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}



	public function valida_curp($valor){
		$exp_reg = '/^([a-z]{4})([0-9]{6})([a-z]{6})([0-9]{2})$/i';
				if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}




	public function valida_rfc($valor){
		$exp_reg = '/^[A-Z,Ñ,&]{3,4}[0-9]{2}[0-1][0-9][0-3][0-9][A-Z,0-9]?[A-Z,0-9]?[0-9,A-Z]$/'; ;
				if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}



	public function valida_password($valor){
		$exp_reg = '/^[a-z\d_]{4,5}$/i';
				if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}








}


?>    

 




