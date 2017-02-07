<div id="righrslider" class="vertical-slider carousel vertical slide col-md-12" data-ride="carousel">
    
    <div class="carousel-inner">
        <?$a=1;foreach($slider as $key=>$photo):?>
        <?if($a==1):?>     
        <div class="item active">
            <div class="row">
                <div class="col-md-12">
                    <a data-toggle="modal" data-target="#<?=$photo[id];?>"> <img src="<?=$photo[image];?>" class="thumbnail" alt="<?=$photo[alt];?>" title="<?=$photo[title];?>" /></a>
               </div>
            </div>
        </div>
        <?$a++;?>
        <?else:?>
        <div class="item ">
            <div class="row">
                <div class="col-md-12">
                    <a data-toggle="modal" data-target="#<?=$photo[id];?>"> <img src="<?=$photo[image];?>" class="thumbnail"  alt="<?=$photo[alt];?>" title="<?=$photo[title];?>" /></a>
               </div>
            </div>
        </div>
         <?endif;?>
         
         <div class="modal fade" id="<?=$photo[id];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    
	
	<div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">מרק עיתון</h4>
      </div>
      <div class="modal-body" style="padding:0px;text-align: center;">
        <figure ><img  class="img-rounded img-responsive"  src="<?=$photo[full];?>" alt="<?=$photo[alt];?>" title="<?=$photo[title];?>"></figure>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div>
	  
    </div>
  </div>
</div>
         
         
         
         
         
         
         <?endforeach;?> 
               
    </div>
            
        
</div>



