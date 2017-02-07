<div class="row">
    <div class="col-md-12">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <?for($i=1;$i<count($slider);$i++):?>
                <li data-target="#carousel-example-generic" data-slide-to="<?=$i;?>"></li>
                <?endfor;?>
              </ol>
            
              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
               <?$a=1;foreach($slider as $key=>$photo):?>
                 <?if($a==1):?>     
                      <figure class="item active">
                          <img style="margin: auto;" src="<?=$photo[image];?>" alt="<?=$photo[alt];?>" title="<?=$photo[title];?>"  />
                          <!--
<figcaption class="carousel-caption"><?=$photo[caption];?></figcaption>
-->
                    </figure>
                    <?$a++;?>
                 <?else:?>
                       <figure class="item ">
                          <img style="margin: auto;" src="<?=$photo[image];?>" alt="<?=$photo[alt];?>" title="<?=$photo[title];?>"   />
                          <!--
<figcaption class="carousel-caption"><?=$photo[caption];?></figcaption>
-->
                      </figure>
                 <?endif;?>
                 
                <?endforeach;?>  
               </div>
        </div>
        
          <!-- Controls -->
          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
    </div>
</div>
<div>&nbsp;</div>