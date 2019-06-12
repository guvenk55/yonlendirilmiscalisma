<?php defined( '_ERISIM' ) or die( 'Erisim engellendi!' );?>
<div class="col-md-4">
  <h4 class="well"><a href="hakkimda">HAKKIMIZDA</a></h4>
  <p><?=$ayarlar['hakkimizda']?$ayarlar['hakkimizda']:'Hakkımızda yazısı henüz yazılmamış!';?>
  </p>
</div>
<div class="col-md-4">
  <h4 class="well"><b><a href="<?=$ayarlar['adres'];?>"><?=$ayarlar['adi'];?></a></b></h4>
  <p><?=$ayarlar['aciklama'];?></p>
  <p><?=$ayarlar['slogan'];?></p>
</div>
<div class="col-md-4 " >
  <h4 class="well"><a href="iletisim">İLETİŞİM</a></h4>
  <?=$iletisim['adres']?'<p>'.$iletisim['adres'].'</p>':'';?>
  <?=$iletisim['tel']?'<p><i class="fa fa-phone"></i> '.substr($iletisim['tel'],0,4).' '.substr($iletisim['tel'],4,3).' '.substr($iletisim['tel'],7,2).' '.substr($iletisim['tel'],9,2).'</p>':'';?>
  <?=$iletisim['fax']?'<p><i class="fa fa-fax"></i> '.substr($iletisim['fax'],0,4).' '.substr($iletisim['fax'],4,3).' '.substr($iletisim['fax'],7,2).' '.substr($iletisim['fax'],9,2).'</p>':'';?>
  <?=$iletisim['gsm']?'<p><i class="fa fa-mobile-phone"></i> '.substr($iletisim['gsm'],0,4).' '.substr($iletisim['gsm'],4,3).' '.substr($iletisim['gsm'],7,2).' '.substr($iletisim['gsm'],9,2).'</p>':'';?>
  <?=$iletisim['email']?'<p><i class="fa fa-envelope-o"></i> <a style="color:white;" href="mailto:'.$iletisim['email'].'">'.$iletisim['email'].'</a></p>':'';?>
  <?php  {?>
  <ul class="list-unstyled list-inline list-social-icons">
    <?=$iletisim['facebook']?'<li><a style="color:white;" href="'.$iletisim['facebook'].'"><i class="fa fa-facebook-square fa-2x"></i></a> </li>':'';?>
    <?=$iletisim['linkedin']?'<li><a style="color:white;" href="'.$iletisim['linkedin'].'"><i class="fa fa-linkedin-square fa-2x"></i></a> </li>':'';?>
    <?=$iletisim['twitter']?'<li><a style="color:white;" href="'.$iletisim['twitter'].'"><i class="fa fa-twitter-square fa-2x"></i></a> </li>':'';?>
    <?=$iletisim['google_plus']?'<li><a style="color:white;" href="'.$iletisim['google_plus'].'"><i class="fa fa-google-plus-square fa-2x"></i></a> </li>':'';?>
  </ul>
  <?php }?>
</div>
<?php if($ayarlar['copyright']) {?>
<div class="col-lg-12">
  <hr>
  <p><?=$ayarlar['copyright'];?></p>
</div>
<?php }?>