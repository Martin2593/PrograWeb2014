<?php

class Usuario extends Modelo{
    public $nombre_tabla = 'usuarios';
    public $pk = 'idusuario';
    
    
    public $atributos = array(
        'email'=>array(),
        'username'=>array(),
        'password'=>array(),
        'foto'=>array(),
        'rfc'=>array(),
        'curp'=>array(),
    );
    
    public $errores = array( );
    
    private $email;
    private $password;
    private $username;
    private $foto;
    private $rfc;
    private $curp;
       
    
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

        $er = new Er();
        
        if ( !$er->valida_email($valor) ){
            $this->errores[] = "Este e-mail (".$valor.") no es vpopmail_alias_del_domain(domain)";
        }

        $rs = $this->consulta_sql("select * from usuarios where email = '$valor'");
        $rows = $rs->GetArray();
        
        if(count($rows) > 0){
            $this->errores[] = "Este e-mail (".$valor.") ya esta registrado"; 
        }else{
            $this->email = trim($valor);
        }
        
    }

    public function get_username(){
      return $this->username;  
    } 
    public function set_username($valor){
        $er2 = new Er();
        if ( !$er2->valida_Username($valor) ){
            $this->errores[] = "El username solo puede ser en letras minusculas";
        }

        $rs = $this->consulta_sql("select * from usuarios where username = '$valor'");
        $rows = $rs->GetArray();
        
        if(count($rows) > 0){
            $this->errores[] = "Este username (".$valor.") ya esta registrado"; 
        }else{
            $this->username = trim($valor);
        }
    }
    public function get_password(){
        return $this->password;
    } 
    public function set_password($valor){
        $er3 = new Er();
        if ( !$er3->valida_Password($valor) ){
            $this->errores[] = "El password solo pueden ser letras mayusculas";
        }
        else{
            $this->password = trim($valor);
        }
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
        $er4 = new Er();
        
        if ( !$er4->valida_Rfc($valor) ){
            $this->errores[] = "Este rfc (".$valor.") no es valido";
        }

        $rs = $this->consulta_sql("select * from usuarios where rfc = '$valor'");
        $rows = $rs->GetArray();
        
        if(count($rows) > 0){
            $this->errores[] = "Este rfc (".$valor.") ya esta registrado"; 
        }else{
            $this->rfc = trim($valor);
        }
    }
    public function get_curp(){
        return $this->curp;
    } 
    public function set_curp($valor){
        $er5 = new Er();
        
        if ( !$er5->valida_Curp($valor) ){
            $this->errores[] = "Este curp (".$valor.") no es valido";
        }

        $rs = $this->consulta_sql("select * from usuarios where curp = '$valor'");
        $rows = $rs->GetArray();
        
        if(count($rows) > 0){
            $this->errores[] = "Este e-mail (".$valor.") ya esta registrado"; 
        }else{
            $this->curp = trim($valor);
        }    
    }
}
?>
