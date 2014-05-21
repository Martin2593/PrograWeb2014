<?php

class Datos_Personales extends Modelo{
    public $nombre_tabla = 't_Dpersonales';
    public $pk = 'id_persona';
    
    
    public $atributos = array(
        'nombre'=>array(),
        'apellido'=>array(),
        'correo'=>array(),
        'edad'=>array(),
        'direccion'=>array(),
        'numero_exterior'=>array(), 
        'colonia'=>array(), 
        'telefono'=>array(),
        'codigo_postal'=>array(),
        'curp'=>array(),
    );
    
    public $errores = array( );
    
    private $nombre;
    private $apellido;
    private $correo;
    private $edad;
    private $direccion;
    private $numero_exterior;
    private $colonia;
    private $telefono;
    private $codigo_postal;
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
    
    public function get_correo(){
        return $this->correo;
    } 
    public function set_correo($valor){
        $this->correo = trim($valor);
    }

    public function get_edad(){
        return $this->edad;
    } 
    public function set_edad($valor){
        $this->edad = trim($valor);
    } 
	


    public function get_direccion(){
        return $this->direccion;
    } 
    public function set_direccion($valor){
        $this->direccion= trim($valor);
    } 


    public function get_numero_exterior(){
        return $this->numero_exterior;
    } 
    public function set_numero_exterior($valor){
        $this->numero_exterior = trim($valor);
    }  


    public function get_colonia(){
        return $this->colonia;
    } 
    public function set_colonia($valor){
        $this->colonia = trim($valor);
    } 


    public function get_telefono(){
        return $this->telefono;
    } 
    public function set_telefono($valor){
        $this->telefono = trim($valor);
    } 


    public function get_codigo_postal(){
        return $this->codigo_postal;
    } 
    public function set_codigo_postal($valor){
        $this->codigo_postal = trim($valor);
    } 


    public function get_curp(){
        return $this->curp;
    } 
    public function set_curp($valor){
        $this->curp = trim($valor);
    } 

    

    public function set_email($valor){
        	//aqui es donde se valida
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
