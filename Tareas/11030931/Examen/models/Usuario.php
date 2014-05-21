<?php

class Usuario extends Modelo{
    public $nombre_tabla = 'usuario';
    public $pk = 'id_persona';

       
    
    
    public $atributos = array(
        'email'=>array(),
        'user_name'=>array(),
        'password'=>array(),
        'foto'=>array(),
        'rfc'=>array(),
        'curp'=>array(), 
        'codigo_postal'=>array(), 
        
    );
    
    public $errores = array( );
    
    private $email;
    private $user_name;
    private $password;
    private $foto;
    private $rfc;
    private $curp;
     private $codigo_postal;
    
    function Usuario(){
        parent::Modelo();
    }
    
    public function get_atributos(){
        $rs = array();
        foreach ($this->atributos as $key => $value) {
            $rs[$key]=$this->$key;
        }
        return $rs;
    }
    
    
    public function get_email(){
        return $this->email;
    } 






    public function set_email($valor){
        //$this->email = trim($valor);
        $er = new ER();

            if ( !$er->valida_email($valor) ){
            $this->errores[] = "Este e-mail (".$valor.") no es vpopmail_alias_del_domain(domain)";
        }

        $rs = $this->consulta_sql("select * from usuario where email = '$valor'");
        $rows = $rs->GetArray();
        
        if(count($rows) > 0){
            $this->errores[] = "Este e-mail (".$valor.") ya esta registrado"; 
        }else{
            $this->email = trim($valor);
        }


    }





    public function get_user_name(){
        return $this->user_name;
    } 
    public function set_user_name($valor){
      //  $this->user_name = trim($valor);

        $er = new ER();

            if ( !$er->valida_usuario($valor) ){
            $this->errores[] = "Este usuario (".$valor.") no es valido)";
        }

        $rs = $this->consulta_sql("select * from usuario where user_name = '$valor'");
        $rows = $rs->GetArray();
        
        if(count($rows) > 0){
            $this->errores[] = "Este Usuario (".$valor.") ya esta registrado"; 
        }else{
            $this->user_name = trim($valor);
        }

    }
    
    public function get_password(){
        return $this->password;
    } 
    public function set_password($valor){
        //$this->password = trim($valor);

         $er = new ER();

            if ( !$er->valida_password($valor) ){
            $this->errores[] = "Esta contraseña (".$valor.") no es valido)";
        }

        $rs = $this->consulta_sql("select * from usuario where password = '$valor'");
        $rows = $rs->GetArray();
        
        
    }

    public function get_foto(){
        return $this->foto;
    } 
    public function set_foto($valor){
        $this->foto = trim($valor);
    } 
	


    public function get_rfc(){
        return $this->rfc;
    } 
    public function set_rfc($valor){
        //$this->rfc= trim($valor);

        $er = new ER();

            if ( !$er->valida_rfc($valor) ){
            $this->errores[] = "El RFC (".$valor.") no es valido)";
        }

        $rs = $this->consulta_sql("select * from usuario where rfc = '$valor'");
        $rows = $rs->GetArray();
        
        if(count($rows) > 0){
            $this->errores[] = "Este RFC (".$valor.") ya esta registrado"; 
        }else{
            $this->rfc = trim($valor);
        }


    } 


    public function get_curp(){
        return $this->curp;
    } 
    public function set_curp($valor){
        //$this->curp = trim($valor);
        $er = new ER();

            if ( !$er->valida_curp($valor) ){
            $this->errores[] = "El Curp (".$valor.") no es valido)";
        }

        $rs = $this->consulta_sql("select * from usuario where curp = '$valor'");
        $rows = $rs->GetArray();
        
        if(count($rows) > 0){
            $this->errores[] = "Este Curp (".$valor.") ya esta registrado"; 
        }else{
            $this->curp = trim($valor);
        }

    }  


    public function get_codigo_postal(){
        return $this->codigo_postal;
    } 


    public function set_codigo_postal($valor){
        //$this->codigo_postal = trim($valor);
        $er = new ER();

            if ( !$er->valida_codigo_postal($valor) ){
            $this->errores[] = "El codigo postal (".$valor.") no es valido)";
        }

        $rs = $this->consulta_sql("select * from usuario where codigo_postal = '$valor'");
        $rows = $rs->GetArray();
                

    }  





   


    
    
    
}

?>
