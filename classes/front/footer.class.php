<?php

class footer extends main {
    
    public function __construct(){
       parent::__construct();
    }
    
# Template footer
    public function Foot(){
        $footer= $this->db->MSelectOne('SELECT name FROM adress_he');
        $result = $this->Templ(PATCH.'/TPL/footer.tpl.php',$footer);
    return $result;
    }
 
}