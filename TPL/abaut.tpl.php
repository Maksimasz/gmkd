<div class="panel panel-default">
    <header class="panel-heading"><?=$title;?></header>
    <div class="panel-body">
        <div class="media">
                <div class="media-body">
                <div class="col-md-4 col-md-push-8" >
					<div class="thumbnail">
						<img  src="<?=$geler[0];?>" alt="<?=$geler[1];?>" title="<?=$geler[1];?>"/>
						<div class="caption">
							<h3><?=$geler[1];?></h3>
							<p><a href="mailto:<?=$geler[2];?>"><?=$geler[2];?></a>&nbsp;<i class="fa fa-envelope-o"></i></p>
                            <p><a href="<?=$geler[3];?>" class="btn btn-primary" role="button">קראו עוד</a></p>
						</div>
					</div>
				
				</div>

<div class="col-md-4 " >
                <div class="thumbnail">
                    <img  src="<?=$kaufman[0];?>" alt="<?=$kaufman[1];?>" title="<?=$kaufman[1];?>"/>
                        <div class="caption">
                            <h3><?=$kaufman[1];?></h3>
                            
                            <p><a href="mailto:<?=$kaufman[2];?>"><?=$kaufman[2];?></a>&nbsp;<i class="fa fa-envelope-o"></i></p>
                            <p><a href="<?=$kaufman[3];?>" class="btn btn-primary" role="button">קראו עוד</a></p>
                        </div>
                </div>
            </div>
<div class="col-md-4 col-md-pull-8" >
                <div class="thumbnail">
                    <img  src="<?=$dahari[0];?>" alt="<?=$dahari[1];?>" title="<?=$dahari[1];?>"/>
                        <div class="caption">
                            <h3><?=$dahari[1];?></h3>
                            
                            <p><a href="mailto:<?=$dahari[2];?>"><?=$dahari[2];?></a>&nbsp;<i class="fa fa-envelope-o"></i></p>
                            <p><a href="<?=$dahari[3];?>" class="btn btn-primary" role="button">קראו עוד</a></p>
                        </div>
                </div>
            </div>
                
                
                
                <div class="col-md-5">
    <div class="form-area">  
    
        <form role="form" id="abaut">
        <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center;">כתוב לנו</h3>
    				<div class="form-group">
						<input type="text" class="form-control" id="name" name="name" placeholder="שם" required>
					</div>
					<div class="form-group">
						<input type="email" class="form-control" id="email" name="email" placeholder="דוא"ל" required>
					</div>
					<div class="form-group">
						<input type="tel" class="form-control" id="mobile" name="mobile" placeholder="מספר טלפון נייד" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="subject" name="subject" placeholder="נושא" required>
					</div>
                    <div class="form-group">
                    <textarea class="form-control" name="message" type="textarea" id="message" placeholder="הודעה" maxlength="140" rows="7"></textarea>
                        <span class="help-block"><p id="characterLeft" class="help-block ">הגעת לגבול</p></span>                    
                    </div>
                    <div><input type="hidden" name="send" value="send"></div>          
                   <input type="submit" name="submit" class="btn btn-primary pull-right" id="btnSubmit" value="הגעת לגבול...">
                  
        </form>
        
         <div id="send_ok"></div>
    </div>
    
</div>
<div class="col-md-7">

   	
      	<div>
    		
    		<address>
    			<strong><?=$name;?></strong><br>
    			<?=$street;?><br>
                <?=$sity;?><br />
    		<abbr title="Phone">טל:</abbr>&nbsp;&nbsp;&nbsp;<?=$phone;?>
        <br />
        <abbr title="Phone">פקס:</abbr> <?=$fax;?>
       </address>
    	</div>
        <div >
            <div class="center-block">
                <a href="<?=$facebook;?>"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
	            <a href="<?=$linkedin;?>"><i id="social-gp" class="fa fa-linkedin-square fa-3x social"></i></a>
            	<a href="mailto:<?=$email;?>"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
            </div>
        </div>
        <div>
        	<figure><iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?=$map;?>"></iframe></figure>

        </div>

 
                
            </div>
        </div>
    </div>
</div>



<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">מזל טוב</h4>
      </div>
      <div class="modal-body">
        <p>תודה על פנייתך אלינו, אנחנו בקרוב נחזור אליך</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
  </div>
 </div>

<script type="text/javascript">
<!--
	$(document).ready(function(){
    $("#abaut").submit(function( event) { //устанавливаем событие отправки для формы с id=form
            event.preventDefault();
            var form_data = $(this).serialize(); //собераем все данные из формы
            $.ajax({
            type: "POST",    
            url: "index.php", //путь до php фаила отправителя
            data: form_data,
            success: function() {
                   //код в этом блоке выполняется при успешной отправке сообщения
                   $('#myModal').modal('toggle');
                   setTimeout(function(){  document.location.reload();},3000);
                  
                   
          }
    });
});    
});
-->
</script>