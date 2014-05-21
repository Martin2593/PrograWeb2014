<?php

class Historial extends Modelo{
    public $nombre_tabla = 'historial';
    public $pk = 'idpaciente';
    
    
    public $atributos = array(
        'nombre'=>array(),
        'apellido'=>array(),
        'sintomas'=>array(),
        'enfermedad'=>array(),
        'medicamento'=>array(),
        'sangre'=>array(), 
        'dias'=>array(), 
        'antecedentes'=>array(),
        'alergias'=>array(),
        'descripcion'=>array(),
    );
    
    public $errores = array( );
    
    private $nombre;
    private $apellido;
    private $sintomas;
    private $enfermedad;    
    private $medicamento;
    private $sangre;
    private $dias;
    private $antecedentes;
    private $alergias;
    private $descripcion;
    
    function Historial(){
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
    
    public function get_sintomas(){
        return $this->sintomas;
    } 
    public function set_sintomas($valor){
        $this->sintomas = trim($valor);
    }

    public function get_enfermedad(){
        return $this->enfermedad;
    } 
    public function set_enfermedad($valor){
        $this->enfermedad= trim($valor);
    } 

    public function get_medicamento(){
        return $this->medicamento;
    } 
    public function set_medicamento($valor){
        $this->medicamento = trim($valor);
    } 
    

    public function get_sangre(){
        return $this->sangre;
    } 
    public function set_sangre($valor){
        $this->sangre = trim($valor);
    }  


    public function get_dias(){
        return $this->dias;
    } 
    public function set_dias($valor){
        $this->dias = trim($valor);
    } 


    public function get_antecedentes(){
        return $this->antecedentes;
    } 
    public function set_antecedentes($valor){
        $this->antecedentes = trim($valor);
    } 

    public function get_alergias(){
        return $this->alergias;
    } 
    public function set_alergias($valor){
        $this->alergias = trim($valor);
    } 



    public function get_descripcion(){
        return $this->descripcion;
    } 
    public function set_descripcion($valor){
        $this->descripcion= trim($valor);
    } 

    
    
    
    
}

?>
