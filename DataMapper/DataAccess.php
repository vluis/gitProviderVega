<?php
/**
 * @package config
 * @version 1.0
 * @author Luis Alberto Vega <vla200632213@gmail.com>
 */

include '../../application/configs/Conection.php';

 class DataAccess extends Conection {
    
     /**
      * @var type array[]
      */
     protected $arrayFieldsObject;


     public function __construct() {
         $this->arrayFieldsObject = array();
        parent::__construct();
    }
        
    protected function saveObject($className = NULL) {
        $fields = '(';  
        $values = '(';
        $arrayFieldsObject = $this->arrayFieldsObject;
        $fistElement = $arrayFieldsObject[0];
        $keys = array_keys($fistElement);
        
        // Eliminar los dos primeros elementos
        unset($arrayFieldsObject['eliminado']);
        unset($arrayFieldsObject[$keys[0]]);
        
        foreach ($arrayFieldsObject as $key => $value) {
            $fields .= $key . ',';  
            $values .= $value . ',';  
        }
        $fields = substr($fields, 0, strlen($fields) - 1);
        $values = substr($values, 0, strlen($values) - 1);
        $fields .= ')';  
        $values .= ')'; 
        
        $sql = 'INSERT INTO ' . $className . ' ' . $fields . ' VALUES ' . $values . ';';
        var_dump( "<br>". $sql . '<br>');
        $rs = parent::executeQuery($sql);
        if (!$rs) {
            echo "<br> Error: $className ::saveObject";
        }
     }
     
     protected function findObject($id = 0, $nameClass) {
         
        $sql = 'SELECT * FROM ' . $nameClass . ' WHERE id' . $nameClass . '=' . $id ;       
        var_dump('<br>' . $sql);
        $rs = parent::executeQuery($sql);
        
        if (isset($rs)) {
            $limit = count($this->arrayFieldsObject) -1;
            foreach (range(0, $limit) as $index) {
                var_dump('<br> id: ' . $index . ' >> ' . $rs->fields[$index]);
                $this->arrayFieldsObject[] = $rs->fields[$index]; 
            }
            $rs->Close();
            return TRUE;
        }
        return FALSE;
     }

     private function loadFields() {}
     
     private function toObject() {}
}
    $da = new DataAccess();
?>
