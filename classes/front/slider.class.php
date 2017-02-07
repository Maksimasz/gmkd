<?php

class slider extends main {
    
    public function __construct(){
       parent::__construct();
    }
    
# Template slider
    public function Sliderr(){
        $slider= $this->db->MSelect('SELECT * FROM slider');
        $result = $this->Templ(PATCH.'/TPL/slider.tpl.php',array('slider'=>$slider));
    return $result;
    }
    
    public function Sidebarslider(){
        $slider= $this->db->MSelect('SELECT * FROM rightslider');
        $result = $this->Templ(PATCH.'/TPL/rightslider.tpl.php',array('slider'=>$slider));
    return $result;
    }
 
}