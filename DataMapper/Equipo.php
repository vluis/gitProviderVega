<?php
/**
 * @package config
 * @version 1.0
 * @author Luis Alberto Vega <vla200632213@gmail.com>
 */

class Equipo extends DataAccess implements IEntity{
 
    /**
     * @var type integer
     */
    private $idEquipo;

    /**
     * @var type string
     */
    private $nombre;

    /**
     * @var type string
     */
    private $historia;

    /**
     * @var type stgring
     */
    private $vision;
    
    /**
     * @var type bool
     */
    private $eliminado;

    /**
     * 
     */
    public function __construct() {
        parent::__construct();
    }
    
    public function getIdEquipo() {
        return $this->idEquipo;
    }

    public function setIdEquipo($idEquipo) {
        $this->idEquipo = $idEquipo;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getHistoria() {
        return $this->historia;
    }

    public function setHistoria($historia) {
        $this->historia = $historia;
    }

    public function getVision() {
        return $this->vision;
    }

    public function setVision($vision) {
        $this->vision = $vision;
    }

    private function getEliminado() {
        return $this->eliminado;
    }

    public function setEliminado($eliminado) {
        $this->eliminado = $eliminado;
    }
    
    public function remove() {
        
    }

    public function save() {
        
    }

    public function update() {
        
    }

    public static function find($id = 0) {
        
    }

    public static function findAll() {
        
    }
    
    /**
     * 
     */
    private function loadFields() {
        $this->arrayFieldsObject['id' . __CLASS__] = $this->getIdEquipo();
        $this->arrayFieldsObject['nombre'] = $this->getNombre();
        $this->arrayFieldsObject['historia'] = $this->getHistoria();
        $this->arrayFieldsObject['vision'] = $this->getVision();
        $this->arrayFieldsObject['nombre'] = $this->getNombre();
        $this->arrayFieldsObject['eliminado'] = $this->getEliminado();
    }

}

?>
