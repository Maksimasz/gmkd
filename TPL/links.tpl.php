<div class="list-group">
  <?foreach($links as $value):?>
     <a href="<?=$value[link];?>" class="list-group-item " target="_blank">
    <cite class="list-group-item-text"><?=$value[title];?></cite>
  </a>
   <?endforeach;?>
</div>