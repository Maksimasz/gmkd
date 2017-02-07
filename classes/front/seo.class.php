<?php

class seo extends main {
    
    public function __construct(){
       parent::__construct();
    }
    
# Template keywords and description SEO    
    public function KD(){
        $seo= $this->db->MSelectOne('SELECT keywords,description FROM seo_he');
    return $seo;
    }

# Title site and pages
    public function Title($rr){
        if(empty($rr) or $rr=='abaut'){
            return $title['title']='משרד עורכי-דין ';
        }
        $title= $this->db->MSelectOne("SELECT title FROM article_static_he WHERE link ='$rr'");
        return $title['title'];
     }      
 
}