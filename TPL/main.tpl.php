<!DOCTYPE html>
<html lang="he">
  <head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="Keywords" content='<?=$keywords;?>'> 
    <meta name="description" content='<?=$description;?>'> 
    <meta name="author" content="Maksim Azizov">

	
    <title>GMKD-<?=$title;?></title>
    
    <link rel="stylesheet" href="<?PATCH;?>/css/bootstrap-new.css">
    <link rel="stylesheet" href="<?PATCH;?>/css/bootstrap-rtl.css">
    <link rel="stylesheet" href="<?PATCH;?>/css/font-awesome.css">
    <link rel="stylesheet" href="<?PATCH;?>/css/user.css">
    
        
    
       
    
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.js"></script>
    <![endif]-->
    
 </head>

  <body  class="container" style="margin-top: 0.5%;" >
 <video autoplay loop muted class="bgvideo" id="bgvideo">
   <source src="./video/Valentines.mp4" type="video/mp4"></source>
  </video>
    
      
        <header  class="row">
            <?=$header;?>
        </header>
    
        
           <?=$menu;?>
        
        <main class="row">
            <div class="col-md-9 col-md-push-3 " >
               <aside><?=$slider;?></aside>
               <section><?=$content;?></section>
             </div>
             <aside class="col-md-3 col-md-pull-9">
			     <?=$sidebar;?>
			 </aside>
         </main>
   <footer><?=$footer;?></footer>

 </body>   
  
  
  <script src="<?PATCH;?>/js/jquery-1.11.3.min.js"></script>
  <script src="<?PATCH;?>/js/bootstrap.js"></script>
  <script src="<?PATCH;?>/js/user.js"></script>


  <!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','//connect.facebook.net/en_US/fbevents.js');

fbq('init', '433510176841149');
fbq('track', "PageView");</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=433510176841149&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

  
  
</html>