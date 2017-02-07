<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true" >
<?$a=1;?>
<?foreach($article as $value):?>
	<div class="panel panel-default">
		<div class="panel-heading" role="tab" id="h<?=$a;?>">
			<h4 class="panel-title">
				<a role="button" data-toggle="collapse" data-parent="#accordion" href="#c<?=$a;?>" aria-expanded="true" aria-controls="c<?=$a;?>"><?=$value['category'];?></a>
			</h4>
		</div>
		<?if($a==1):?>
		<div id="c<?=$a;?>" class="panel-collapse collapse in " role="tabpanel" aria-labelledby="h<?=$a;?>">
		<?else:?>
		<div id="c<?=$a;?>" class="panel-collapse collapse " role="tabpanel" aria-labelledby="h<?=$a;?>">
		<?endif;?>  
			<?foreach($value[0] as $val):?>
			<article class="panel-body">
				<div class="list-group">
					<a href="<?=$val['link'];?>" class="list-group-item ">
					<header><h4 class="list-group-item-heading"><?=$val['title'];?></h4></header>
						<p class="list-group-item-text"><?=$val['description'];?></p>
					</a>
				</div>
			</article>
			<?endforeach;?> 
		</div>
		<?$a++;?>
	</div>
<?endforeach;?> 
</div>