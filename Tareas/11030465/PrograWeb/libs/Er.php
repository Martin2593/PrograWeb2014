<?php

class Er 
{
    
	public function valida_email($valor)
	{
		$exp_reg = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'; 
		if (preg_match($exp_reg, $valor))
		 {
		     return true;
		} 
		else 
		{ 
		     return false;
		} 
	}
	
	public function valida_Curp($valor)
	{
		$exp_reg2= '/^[A-Z]{4}[0-9]{6}[H,M][A-Z]{5}[0-9]{2}$/';
		if(preg_match($exp_reg2, $valor))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	public function valida_Rfc($valor)
	{	 
		$exp_reg3='/^[A-Z]{4}[0-9]{6}[A-Z0-9]{3}$/';
	
		if(preg_match($exp_reg3, $valor))
		{
			return true;
		}
		else
		{
			return false;
		}
	}

    public function valida_Username($valor)
     {
		$exp_reg4= '/^[a-z]+$/';
		if(preg_match($exp_reg4, $valor))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	public function valida_Password($valor) 
	{
		$exp_reg5= '/^[A-Z]+$/';
		if(preg_match($exp_reg5, $valor))
		{
			return true;
		}
		else
		{
			return false;
		}

	}

}
?>    