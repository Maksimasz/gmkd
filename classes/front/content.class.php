<?php

class content extends main {
    
    public function __construct(){
       parent::__construct();
    }
    
# Template content    
    protected function Page($data){
        
        
       $page = $this->db->MSelectOne("SELECT title,text FROM article_static_he WHERE link ='$data'");
        //Debug::Dtest($page);
        if(is_array($page)==true){   
        $rlt = $this->Templ(PATCH.'/TPL/content.tpl.php',$page); 
          
        }
        else {
            $rlt = $this->Templ(PATCH.'/TPL/content.tpl.php',array('text'=>'Connect fail...')); 
            
             
            
        }
        return $rlt;
    } 
}