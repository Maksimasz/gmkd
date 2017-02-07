<?php

class main extends core {
    
    public function __construct(){
        parent::__construct();
    }
    
# Load classes
  private function LoadClasses($name){
    
    if(!class_exists($name)){
        return exit("CLASS {$name} FAIL");
       }
    else{
        $result = New $name();
        return $result;
    }
  }
    
# Template keywords and description SEO    
    protected function SEO(){
       $result = $this->LoadClasses('seo');
       return $result->KD();
    }
    
# Title site and pages
    protected function Title($rr){
        $result = $this->LoadClasses('seo');
        return $result->Title($rr);
     }  

# Template header
   protected function Header(){
        $result = $this->LoadClasses('header');
        return $result->Head();  
    }    
# Template menu    
    protected function Menu(){
      $result = $this->LoadClasses('menu');
      return $result->TopMenu();      
    }
    
# Template footer
    protected function Footer(){
        $result = $this->LoadClasses('footer');
        return $result->Foot(); 
    }
    
# Template slider
    protected function Slider(){
        $result = $this->LoadClasses('slider');
        return $result->Sliderr(); 
    }

# Template sidebar   
    protected function Sidebar(){
        $result = $this->LoadClasses('sidebar');
        return $result->Sidebarr(); 
    }
        
# Template abaut
    protected function Abaut(){
        $result = $this->LoadClasses('abaut');
        return $result->Contact();
    }



# Template content    
    protected function Page($data=''){
        $result = $this->LoadClasses('content');
        return $result->Page($data);
           }
    
# Template load
   public function GetBody ($rr){
        
       
        if(!isset($rr)){
             
                 $data['slider']=$this->Slider();
                 $data['content']= $this->Page('abautus');
        }
        
        else{
            if($rr=='abaut'){
                $data['content']= $this->Abaut();
            }
            else{
                $data['content']= $this->Page($rr);
            }
            
        }
        $seo = $this->SEO();
        $data['keywords']=$seo['keywords'];
        $data['description']=$seo['description'];
        $data['title']=$this->Title($rr);
        $data['header']=$this->Header();
        $data['menu']=$this->Menu();
        $data['footer']=$this->Footer();
        $data['sidebar']=$this->Sidebar();
        
       // Debug::Dtest($data[content]);
        echo $this->Templ(PATCH.'/TPL/main.tpl.php',$data);
    }


    
    
}