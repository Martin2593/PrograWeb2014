<?php

class Datos_Personales extends Modelo{
    public $nombre_tabla = 'registro';
    public $pk = 'idpersona';
    
    
    public $atributos = array(
        'nombre'=>array(),
        'apellido'=>array(),
        'correo'=>array(),
        'direccion'=>array(),
        'codigo'=>array(),
        'ciudad'=>array(), 
        'estado'=>array(), 
        'pais'=>array(),
        'telefono'=>array(),
        'nacionalidad'=>array(),
    );
    
    public $errores = array( );
    
    private $nombre;
    private $apellido;
    private $correo;
    private $direccion;    
    private $codigo;
    private $ciudad;
    private $estado;
    private $pais;
    private $telefono;
    private $nacionalidad;
    
    function Datos_Personales(){
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

    public function get_direccion(){
        return $this->direccion;
    } 
    public function set_direccion($valor){
        $this->direccion= trim($valor);
    } 

    public function get_codigo(){
        return $this->codigo;
    } 
    public function set_codigo($valor){
        $this->codigo = trim($valor);
    } 
    

    public function get_ciudad(){
        return $this->ciudad;
    } 
    public function set_ciudad($valor){
        $this->ciudad = trim($valor);
    }  


    public function get_estado(){
        return $this->estado;
    } 
    public function set_estado($valor){
        $this->estado = trim($valor);
    } 


    public function get_pais(){
        return $this->pais;
    } 
    public function set_pais($valor){
        $this->pais = trim($valor);
    } 

    public function get_telefono(){
        return $this->telefono;
    } 
    public function set_telefono($valor){
        $this->telefono = trim($valor);
    } 



    public function get_nacionalidad(){
        return $this->nacionalidad;
    } 
    public function set_nacionalidad($valor){
        $this->nacionalidad= trim($valor);
    } 

    
    
    
    
}

?>
