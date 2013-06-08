<?php
/**
 * @package config
 * @version 1.0
 * @author Luis Alberto Vega <vla200632213@gmail.com>
 */
include_once 'DataAccess.php';
include_once 'IEntity.php';

class Delegado extends DataAccess implements IEntity{
    
    const ID_DELEGADO_SYSTEM = 1;

    /**
     * @var type integer
     */
    private $idDelegado;

    /**
     * @var type string
     */
    private $nombres;

    /**
     * @var type string
     */
    private $apellidos;
    
    /**
     * @var type bool
     */
    private $eliminado;
    
    
    public function __construct() {
        parent::__construct();
    }

    public function getIdDelegado() {
        return $this->idDelegado;
    }

    public function setIdDelegado($idDelegado) {
        $this->idDelegado = $idDelegado;
    }

    public function getNombres() {
        return $this->nombres;
    }

    public function setNombres($nombres) {
        $this->nombres = $nombres;
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    public function getEliminado() {
        return $this->eliminado;
    }

    private function setEliminado($eliminado) {
        $this->eliminado = $eliminado;
    }
    
    public function remove() {
        
    }

    public function save() {
        
    }

    public function update() {
        
    }

    public function find($id = 0) {
        $this->loadFields();
        $this->findObject($id, __CLASS__);
        $this->toObject();
    }

    public static function findAll() {
        
    }
    
    private function loadFields() {
        $this->arrayFieldsObject['id' . __CLASS__] = $this->getIdDelegado();
        $this->arrayFieldsObject['eliminado'] = $this->getEliminado();
        $this->arrayFieldsObject['nombres'] = $this->getNombres();
        $this->arrayFieldsObject['apellidos'] = $this->getApellidos();
    }

    private function toObject() {
        $this->setIdDelegado($this->arrayFieldsObject[0]);
        $this->setNombres($this->arrayFieldsObject[1]);
        $this->setApellidos($this->arrayFieldsObject[2]);
        $this->setEliminado($this->arrayFieldsObject[3]);
    }
}

    $delegado = new Delegado();
    $delegado->find(Delegado::ID_DELEGADO_SYSTEM);
    var_dump($delegado->getApellidos());
?>
