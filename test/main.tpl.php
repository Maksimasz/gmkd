<!DOCTYPE html>
<html lang="he">
  <head>
    
    <meta name="Keywords" content='<?=$keywords;?>'> 
    <meta name="description" content='<?=$description;?>'> 
    <meta name="author" content="Maksim Azizov">
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>GMKD-<?=$title;?></title>
    
    <link href="./css/bootstrap.css" rel="stylesheet">
    <link href="./css/bootstrap-rtl.css" rel="stylesheet">
    
        
    
       
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.js"></script>
    <![endif]-->
    
 </head>
  <body >
  
    <div class="container">
      
        <header  class="row">
            $header;
        </header>
    
        <div class="row" >
           $menu;
        </div>
        <div class="row">
            <div class="col-md-9 col-md-push-3 " >
               $slider;
               $content;
             </div>
             <aside class="col-md-3 col-md-pull-9">
			 
                $sidebar;
				
             </aside>
         </div>
    $footer;
</div>
         
  <link href="./css/font-awesome.css" rel="stylesheet">
  <link href="./css/user.css" rel="stylesheet">
  
  <script src="./js/jquery-1.11.3.min.js"></script>
  <script src="./js/bootstrap.js"></script>
  <script src="js/user.js"></script>
  
  
  </body>
</html>