<?php
/**
 * @package DataAccess
 * @version 1.0
 * @author Manfredo Sanchéz <manfredosanchez@gmail.com>
 */

interface IEntity {
    //put your code here
    
    /**
     * save in the Data Base the fields of Class 
     */
    public function save();
    
    /**
     * update in the Data Base the fields of Class 
     */
    public function update();
    
     /**
     * delete of the Data Base the Class 
     */
    public function remove();
    
     /**
      * Return a the collection of All the object this Class
      */
     public static function findAll();
    
     /**
      * Return the object of the Class
      */
     public function find($id = 0);
     
}

?>
