<?php

class Medico extends Modelo{
    public $nombre_tabla = 't_regMedico';
    public $pk = 'id_registroMedico';
    
    
    public $atributos = array(
        'nombre'=>array(),
        'apellido'=>array(),
        'edad'=>array(),
        'tipo_sangre'=>array(),
        'direccion'=>array(),
        'color_ojos'=>array(), 
        'enfermedades_respiratorias'=>array(), 
        'estatura'=>array(),
        'peso'=>array(),
        'curp'=>array(),
    );
    
    public $errores = array( );
    
    private $nombre;
    private $apellido;
    private $edad;
    private $tipo_sangre;
    private $direccion;
    private $color_ojos;
    private $enfermedades_respiratorias;
    private $estatura;
    private $peso;
    private $curp;
    
    function Medico(){
        parent::Modelo();
    }
    
    public function get_atributos(){
        $rs = array();
        foreach ($this->atributos as $key => $value) {
            $rs[$key]=$this->$key;
        }
        return $rs;
    }
    
    
    public function get_nombre(){
        return $this->nombre;
    } 
    public function set_nombre($valor){
        $this->nombre = trim($valor);
    }

    public function get_apellido(){
        return $this->apellido;
    } 
    public function set_apellido($valor){
        $this->apellido = trim($valor);
    }
    
    public function get_edad(){
        return $this->edad;
    } 
    public function set_edad($valor){
        $this->edad = trim($valor);
    }

    public function get_tipo_sangre(){
        return $this->tipo_sangre;
    } 
    public function set_tipo_sangre($valor){
        $this->tipo_sangre = trim($valor);
    } 
	


    public function get_direccion(){
        return $this->direccion;
    } 
    public function set_direccion($valor){
        $this->direccion= trim($valor);
    } 


    public function get_color_ojos(){
        return $this->color_ojos;
    } 
    public function set_color_ojos($valor){
        $this->color_ojos = trim($valor);
    }  


    public function get_enfermedades_respiratorias(){
        return $this->enfermedades_respiratorias;
    } 
    public function set_enfermedades_respiratorias($valor){
        $this->enfermedades_respiratorias = trim($valor);
    } 


    public function get_estatura(){
        return $this->estatura;
    } 
    public function set_estatura($valor){
        $this->estatura = trim($valor);
    } 


    public function get_peso(){
        return $this->peso;
    } 
    public function set_peso($valor){
        $this->peso = trim($valor);
    } 


    public function get_curp(){
        return $this->curp;
    } 
    public function set_curp($valor){
        $this->curp = trim($valor);
    } 

    

    public function set_email($valor){
        
        $rs = $this->consulta_sql("select * from evt_asistentes where email = '$valor'");
        $rows = $rs->GetArray();
        
        if(count($rows) > 0){
            $this->email = "";
            $this->errores[] = "Este e-mail (".$valor.") ya esta registrado"; 
        }else{
            $this->email = trim($valor);
        }
        
    } 
    


    
    
    
}

?>
