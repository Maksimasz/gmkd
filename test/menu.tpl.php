<nav class="navbar navbar-default">
  <div class="container">
       
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="./">GMKD</a>
    </div>

    
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
     
      <?foreach($result as $item=>$link):?>
      
      <?if(is_array($link)):?>
          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?=$item;?><span class="caret"></span></a>
          <ul class="dropdown-menu">
          <?foreach($link as $subitem=>$sublink):?>
          <li><a href="<?=$sublink;?>"><?=$subitem;?></a></li>
          <?endforeach;?>
          </ul>
          </li>
        <?else:?>
        <li><a href="<?=$link;?>"><?=$item;?></a></li>
        <?endif?>
      
      
      
        
        
      <?endforeach;?>
      </ul>
      
      
    </div>
	</div>
  </nav>
