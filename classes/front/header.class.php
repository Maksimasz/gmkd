<?php

class header extends main {
    
    public function __construct(){
       parent::__construct();
    }
    
public function Head(){
        $header= $this->db->MSelectOne('SELECT name,phone,fax,sity,street,email,map,facebook,linkedin FROM adress_he');
        $result = $this->Templ(PATCH.'/TPL/header.tpl.php',$header);
         
    return $result;
    }    
 
}