<?php

class Admin extends Core {

# Template keywords and description SEO
   public function SEO(){}
    
# Title site and pages
   public function Title($rr){}

# Template header
   public function Header(){}
    
# Template menu    
   public function Menu(){}
     
# Template footer
   public function Footer(){}
    
# Template slider
   public function Slider(){}

# Template sidebar
   public function Sidebar(){}
       
# Template content
   public function Page($data){}
   
# Template load
   public function GetBody ($rr){
    
    echo $this->Templ('ATPL/amain.tpl.php',array());
   }

}