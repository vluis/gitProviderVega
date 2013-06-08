<?php
/**
 * @package config
 * @version 1.0
 * @author Luis Alberto Vega <vla200632213@gmail.com>
 */
include_once 'DataAccess.php';
include_once 'IEntity.php';

class Jugador extends DataAccess implements IEntity{
    
    /**
     * @var integer 
     */
    private $idJugador;

    /**
     * @var string 
     */
    private $nombres;
    
    /**
     * @var string 
     */
    private $apellidos;
    
    /**
     * @var type string
     */
    private $apodo;

    /**
     * @var type 
     */
    private $eliminado;
    
    /**
     * @var string 
     */
    private $direccion;
    
    public function __construct() {
        parent::__construct();
    }

    public function getIdJugador() {
        return $this->idJugador;
    }
    
    /**
     * @param integer $idJugador
     */
    public function setIdJugador($idJugador) {
        $this->idJugador = $idJugador;
    }
    
    public function getNombres() {
        return $this->nombres;
    }

    public function setNombres($nombres) {
        $this->nombres = $nombres;
    }

    public function getEliminado() {
        return $this->eliminado;
    }

    private function setEliminado($eliminado) {
        $this->eliminado = $eliminado;
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    public function getApodo() {
        return $this->apodo;
    }

    public function setApodo($apodo) {
        $this->apodo = $apodo;
    }

    /**
     * @return string 
     */
    public function getDireccion() {
        return $this->direccion;
    }

    public function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    /**
     * return All the objects Jugador of BD.
     */
     public static function findAll() {
//        parent::findAll();
    }

    /**
     * remove this object of the BD
     */
    public function remove() {
//        parent::remove();
    }

    /**
     * save the fields of the Class
     */
    public function save() {
        $this->loadFields();
        $this->saveObject(__CLASS__);
    }

    /**
     * update the fields of the Class 
     */
    public function update() {
       
    }
    
    /**
     * return of date of the Class
     * @param type $id integer
     */
    public static function find($id = 0) {
        
    }
        
    private function loadFields() {
      
        $this->arrayFieldsObject['eliminado'] = $this->getEliminado();
        $this->arrayFieldsObject['nombres'] = $this->getNombres();
        $this->arrayFieldsObject['apellidos'] = $this->getApellidos();
        $this->arrayFieldsObject['apodo'] = $this->getApodo();
    }

    
}

$jugador = new Jugador();
$jugador->setNombres('Luis Alberto');
$jugador->setApellidos('Vega');
$jugador->setApodo('negro');
 
 $jugador->save();
?>
    