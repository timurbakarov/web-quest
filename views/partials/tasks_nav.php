<div class="btn-group" role="group">
    <?php foreach($items as $item):?>
        <a href="<?=$item['href']?>" class="btn btn-default <?php if($item['active']):?>active<?php endif?>">
            <?=$item['label']?>
        </a>
    <?php endforeach?>
</div>