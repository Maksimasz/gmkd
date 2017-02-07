<?php

# GMKD -site 
# PHP OOP site version
# programming: Maksim Azizov
# mail: maksimasz@yahoo.com
# version: 1.03
# 2015

define('KEY',TRUE);

include_once "function.php";


//$debug = New Debug;


if(empty($_POST)){

 $post=Clear($_POST);
    
 if(isset($post['send'])){
 $send= New Mail;
 $send->Send($post);
    
    
}
        
}

if (!empty($_GET['page'])){ 
    
    $get=Clear($_GET);
    
    if($get['page']=='admin'){
        $site = New admin;
    }
    else{
        $site = New main;
    }
    $site->GetBody($get['page']);
   
}
else {
    $site = New main();
    $site->GetBody($s);
    
}


//Debug::Dtest($post);