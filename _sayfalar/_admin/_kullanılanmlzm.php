<?php defined( '_ERISIM' ) or die( 'Erisim engellendi!' );
	ifo::yetki('1');
?>
<section id="icerik" class="buyuk">
	<h4 class="well">KULLANLILAN MALZEMELER <p class="pull-right"> <a href="_kullanılanmlzmekle"><i class="fa fa-fw fa-plus"></i> Yeni Kullanılan Malzeme</a></p></h4>
	
    <table id="datatable" class="table table-striped table-bordered">
    	<thead>
        	<tr>
            	<th class="gizli text-center">ID</th>
            	<th><i class="fa fa-fw fa-puzzle-piece"></i> PROJE ADI</th>
            	<th class="gizli"><i class="fa fa-fw fa-user"></i> MALZEME ADI</th>
            	<th class="gizli"><i class="fa fa-fw fa-clock-o"></i> MALZEME MİKTARI</th>
            </tr>
        </thead>
        <tbody>
        	<?php
            	$ifo->sec('k.id,k.projeadı,k.malzemeadı,k.malzememiktarı','kullanılanmalzeme AS k','1=1','id DESC');
				while($klnmlzm=$ifo->oku()){
			?>
        	<tr>
            	<td class="gizli text-center"><?=$klnmlzm['id'];?></td>
            	<td><a class="btn" href="_kullanılanmlzmgncl?id=<?=$klnmlzm['id'];?>" data-toggle="popover" data-placement="bottom" data-title="Giriş" data-content="<?=substr(strip_tags($klnmlzm['projeadı']),0,250);?> ..." data-trigger="hover" ><i class="fa fa-fw fa-puzzle-piece"></i> <b><?=$klnmlzm['projeadı'];?></b></a>
                <p class="pull-right">
                	
                    <a class="text-info" title="Güncelle" href="_kullanılanmlzmgncl?id=<?=$klnmlzm['id'];?>"><i class="fa fa-fw fa-pencil"></i></a>
                    <a class="btn-ajax-confirm text-danger" frm="kullanılanmalzemesil" data-id="<?=$klnmlzm['id'];?>" title="Sil" style="cursor:pointer;"><i class="fa fa-fw fa-times"></i></a>
                   
                    
                    
                </p>
                
                </td>
            	<td class="gizli"><?=$klnmlzm['malzemeadı'];?></td>
            	<td class="gizli"><?=$klnmlzm['malzememiktarı'];?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

</section>