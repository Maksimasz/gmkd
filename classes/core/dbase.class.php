<?php

class dbase {
    
    protected $db;
    
    
    public function __construct() {
        
        $this->db = new PDO('sqlite:db/gmkd.db'); 
          
    }
    
    

     public function MInsert($sql){
            
            $this->db->exec($sql); 
            
         }
        
    public function MSelectOne($sql){
            
            $st = $this->db->query($sql);
            return  $st->fetch(PDO::FETCH_ASSOC);  
     }
     
     public function MSelect($sql){
            
            $st = $this->db->query($sql);
            return  $st->fetchAll(PDO::FETCH_ASSOC);  
     }
}