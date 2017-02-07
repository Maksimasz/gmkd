<?php

class abaut extends main {
    
    public function __construct(){
       parent::__construct();
    }

# Template abaut    
    public function Contact(){
        
        $abaut = $this->db->MSelectOne('SELECT * FROM adress_he'); 
        $abaut2 = $this->db->MSelect('SELECT name,email,image,link FROM users'); 
        foreach($abaut2 as $value){
            extract($value);
            $abaut[$link][]=$image;
            $abaut[$link][]=$name;
            $abaut[$link][]=$email;
            $abaut[$link][]=$link;
        }
        
        $abaut['title']='משרד עורכי-דין ';
        $rlt = $this->Templ(PATCH.'/TPL/abaut.tpl.php',$abaut); 
       //  Debug::Dtest($abaut);   
             
        return $rlt;    
        } 
    
    
}