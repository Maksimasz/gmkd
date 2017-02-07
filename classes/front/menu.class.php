<?php

class menu extends main {
    
    public function __construct(){
       parent::__construct();
    }
    
    # Template menu    
    protected function TopMenu(){
        
        $menu =$this->db->MSelect('SELECT * FROM menu_he');
        foreach($menu as $key){
                extract($key);
                if($link=='dropdown'){
                    $submenu =$this->db->MSelect("SELECT * FROM sub_menu_he WHERE sub_id =$id_item" );
                      foreach($submenu as $sub){
                        extract($sub);
                        $result[$item][$sub_item]=$sub_link;   
                       }
                }
                else{
                    $result[$item]=$link;
                }
        }
        
       $result2 = $this->Templ(PATCH.'/TPL/menu.tpl.php',array('result'=>$result));
        
        return $result2;
    }
}