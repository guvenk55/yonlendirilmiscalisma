<?php defined( '_ERISIM' ) or die( 'Erisim engellendi!' );
	ifo::yetki('1');
?>
<section id="icerik" class="buyuk">
	<h4 class="well">PROJELER <p class="pull-right"> <a href="_proje-ekle"><i class="fa fa-fw fa-plus"></i> Yeni PROJE</a></p></h4>
    
    <table id="datatable" class="table table-striped table-bordered">
    	<thead>
        	<tr>
            	
            	<th><i class="fa fa-fw fa-picture-o"></i> RESİM</th>
            	
            	
            </tr>
        </thead>
        <tbody>
        	<?php
            	$ifo->sec('r.*','projeler AS r','1=1','id DESC');
				while($projeler=$ifo->oku()){
			?>
        	<tr>
            	<td >
                <a class="btn" href="_projegncl?id=<?=$projeler['id'];?>" data-toggle="popover" data-placement="bottom" data-title="Açıklama" data-content="<?=substr(strip_tags($projeler['aciklama']),0,250);?> ..." data-trigger="hover" ><i class="fa fa-fw fa-puzzle-piece"></i> <b><?=$projeler['baslik'];?></b></a>
                <p class="pull-right">
                	
                    <a class="text-info" title="Güncelle" href="_projegncl?id=<?=$projeler['id'];?>"><i class="fa fa-fw fa-pencil"></i></a>
									<a class="btn-ajax-confirm text-danger" frm="referansSil" data-id="<?=$projeler['id'];?>" title="projeSil" style="cursor:pointer;"><i class="fa fa-fw fa-eraser"></i></a>
									
									<a class="btn-ajax-confirm text-<?=$projeler['onay']?'info':'danger';?>" frm="projeOnayla" data-id="<?=$projeler['id'];?>" title="Onayla" style="cursor:pointer;"><i class="fa fa-fw fa-<?=$projeler['onay']?'check':'circle-o';?>"></i></a>
							
                </p>
                <hr />
               <img src="_rsm/_projeler/<?=$projeler['resim'];?>" class="img-rounded img-responsive" /></td>
            	
            	
            	
            </tr>
            <?php } ?>
        </tbody>
    </table>
    
</section>