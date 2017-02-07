<?php

class sidebar extends main {
    
    public function __construct(){
       parent::__construct();
    }
    
# Template sidebar   
    protected function Sidebarr(){
      //  Debug::Dtest($this->Article());
     $sidebar['links']=$this->Links('overall');
     $sidebar['article']=$this->Article();
     $sidebar['rightslider']= slider::Sidebarslider();
     $result = $this->Templ(PATCH.'/TPL/sidebar.tpl.php',$sidebar);
    return $result;
    }
    
    private function Links($cat){
       $links['links'] = $this->db->MSelect("SELECT title,link FROM links WHERE category='$cat'");
       //Debug::Dtest($links);
       return $this->Templ(PATCH.'/TPL/links.tpl.php',$links);
        
    }
    
    private function Article(){
       $cat2 = $this->db->MSelect("SELECT category,lable FROM category_he");
       foreach($cat2 as $val){
        $c = $val['lable'];
        $cat[$c]['category']=$val['category'];
        $cat[$c][] = $this->db->MSelect("SELECT title,description,link FROM article_static_he WHERE category='$c'");
       }
       return $this->Templ(PATCH.'/TPL/article.tpl.php',array('article'=>$cat));
               
    }
 
}