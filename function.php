<?php
if(!defined('KEY')){header('Location:index.php');}
session_start() ;

define('DS',DIRECTORY_SEPARATOR) ;
define('PS',PATH_SEPARATOR) ; 
define('PATCH',dirname(__FILE__));

# clear post get data
function Clear($data){
        
   foreach($data as $k=>$str){
     $str = trim($str);
     $str = stripslashes($str);
     $str = htmlspecialchars($str);
     $ss[$k] = $str;
   } 
return $ss;
}

# PATCH
function showTree($folder) {
    
    $files = scandir($folder);
 
    foreach($files as $file) {
       if (($file == '.') || ($file == '..')) continue;
       $f0 = $folder.'/'.$file;
       if (is_dir($f0)) {
            $_SESSION['patch'].=PS.$f0;
            showTree($f0);
      }
   }
    
}

showTree(".");
$patch = get_include_path() ;
$patch.=$_SESSION['patch'];
set_include_path($patch) ;
unset($_SESSION['patch']);


#autiload
function CoreClass($name){
    $file = "classes/core/$name.class.php";
    if(file_exists($file)){
        require_once $file;
    }
}

function FrontClass($name){
    $file = "classes/front/$name.class.php";
    if(file_exists($file)){
        require_once $file;
    }
}

function AdminClass($name){
    $file = "classes/admin/$name.class.php";
    if(file_exists($file)){
        require_once $file;
    }
}

spl_autoload_register('CoreClass');
spl_autoload_register('FrontClass');
spl_autoload_register('AdminClass');