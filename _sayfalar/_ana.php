<?php defined( '_ERISIM' ) or die( 'Erisim engellendi!' );?>
<?php
	if($ayarlar['aside']) {require('_inc/_aside.php');$boyut='kucuk';}else $boyut='buyuk';
?>
<section id="icerik" class="<?=$boyut;?>">
    <?php if($ayarlar['slider']) require('_inc/_slider.php'); ?>
    
    <div class="row">
        <article class="col-md-10"> <?php require('_inc/_article.php'); ?></article>
        <aside class="col-md-2">
            <div class="list-group">
            	
            	
            </div>
       
        </aside>
	</div>
</section>