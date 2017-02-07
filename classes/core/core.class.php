<?php

abstract class core {
    
    protected $db;
        
    
    public function __construct(){
        
        $this->db = new dbase;
    }
    
# Template
   protected function  Templ($file,$a){
       
        $a1 = count($a);
        $a2 = count($a,1);
              
        if($a1!=$a2){
            foreach($a as $k=>$v){
            $$k=$v;
            }
            //Debug::Dtest($k);
            ob_start();
            
            include"{$file}";
            return ob_get_clean();
        }
        else{
            extract($a);
            ob_start();
            include"{$file}";
            return ob_get_clean();
        }
    }
    
# Template keywords and description SEO
   abstract protected function SEO();
    
# Title site and pages
   abstract protected function Title($rr);

# Template header
   abstract protected function Header();
    
# Template menu    
   abstract protected function Menu();
     
# Template footer
   abstract protected function Footer();
    
# Template slider
   abstract protected function Slider();

# Template sidebar
   abstract protected function Sidebar();
       
# Template content
   abstract protected function Page($data);
   
# Template load
   abstract protected function GetBody ($rr);

}