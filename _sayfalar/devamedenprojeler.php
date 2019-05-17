<article>
	<div style="overflow:auto; margin-bottom:20px;">
    
    	<?php
			$devamep = $ifo->sec('*', 'devamedenprojeler AS r', 'r.onay = 1 ')->oku(false);
			foreach($devamep AS $devamep):
		?>
                <div class="col-md-4">
                    <h4><?=$devamep['baslik']?></h4>
                    <a href="_rsm/_projeler/<?=$devamep['resim']?>" data-lightbox="image-<?=$devamep['id']?>" data-title="<?=strip_tags($devamep['aciklama'])?>">
                    	<img src="_rsm/_projeler/<?=$devamep['resim']?>" class="img-rounded img-responsive"/>
                    </a>
                </div>
		<?php
			endforeach;	
		?>
    </div>
</article>