<article>
	<div style="overflow:auto; margin-bottom:20px;">
    
    	<?php
			$tamamlananp = $ifo->sec('*', 'projeler  AS t', 't.onay = 1 and t.tip = 2 ')->oku(false);
			foreach($tamamlananp AS $tamamlananp):
		?>
                <div class="col-md-4">
                    <h4><?=$tamamlananp['baslik']?></h4>
                    <a href="_rsm/_projeler/<?=$tamamlananp['resim']?>" data-lightbox="image-<?=$tamamlananp['id']?>" data-title="<?=strip_tags($tamamlananp['aciklama'])?>">
                    	<img src="_rsm/_projeler/<?=$tamamlananp['resim']?>" class="img-rounded img-responsive"/>
                    </a>
<div style="margin-top:20px;"><button type="submit" class="btn btn-info"><a href="_yorumekle">Yorum Ekle</a></button></div>
                </div>
		<?php
			endforeach;	
		?>
    </div>
</article>