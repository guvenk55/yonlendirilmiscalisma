<?php defined( '_ERISIM' ) or die( 'Erisim engellendi!' );?>

<div class="row">
	<?php 
		$sorgu=$ifo->sec('y.baslik,y.metin,y.tarih,y.adsoyad,y.link','yorumlar AS y',' y.onay=1 AND y.ana=1')->oku(false);
		
		
		$sutun=ceil(12/$ayarlar['sutun']);
		foreach($sorgu as $yorum){
	?>
  <div class="col-md-<?=$sutun;?>">
    <h3><a href="<?=$yorum['link'];?>"><?=$yorum['baslik'];?></a></h3>
    <p class="text-danger"><i class="fa fa-clock-o"></i> 
   <?=$ifo::tarih($yorum['tarih']);?> <i class="fa fa-user"></i> <?=$yorum['adsoyad'];?></p>
    <p><?=$yorum['baslik'];?></p>
    
	<?php if($yorum['metin']){?>
    <p class="pull-right"><a class="btn btn-default" href="<?=$yorum['link'];?>"> Devamı <i class="fa fa-angle-right"></i> </a> </p>
    <?php }//if?>
  </div>
  <?php }//while ?>
</div>
	<?php $ifo->navigasyon('article','center');?>


