<article>
	<div style="overflow:auto; margin-bottom:20px;">
    
    	<?php
			$tamamlananp = $ifo->sec('*', 'tamamlananprojeler  AS t', 't.onay = 1 ')->oku(false);
			foreach($tamamlananp AS $tamamlananp):
		?>
                <div class="col-md-4">
                <?php echo ifo::sifrele(123456); ?>
                    <h4><?=$tamamlananp['baslik']?></h4>
                    <a href="_rsm/_projeler/<?=$tamamlananp['resim']?>" data-lightbox="image-<?=$tamamlananp['id']?>" data-title="<?=strip_tags($tamamlananp['aciklama'])?>">
                    	<img src="_rsm/_projeler/<?=$tamamlananp['resim']?>" class="img-rounded img-responsive"/>
                    </a>
                </div>
		<?php
			endforeach;	
		?>
    </div>
</article>