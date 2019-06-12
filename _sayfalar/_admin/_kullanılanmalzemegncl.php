<?php 
	defined( '_ERISIM' ) or die( 'Erisim engellendi!' );
	ifo::yetki(1);
	
	$id = ifo::kontrol($_GET['id'], 'int');
	if(!$query = $ifo->sec('*', 'kullanılanmalzeme', "id={$id}")->oku()){
		exit();
	}
	
?>
	<section id="icerik" class="buyuk">
        
    	<h4 class="well">
        	Kullanılan Malzeme Güncelle
            <p class="pull-right">
            	<a href="_kullanılanmlzm">
                	<i class="fa fa-fw fa-chevron-left"></i> Geri
                </a>
            </p>
        </h4>
        
        <form id="frm" method="post">
        	<input type="hidden" name="frm" value="kullanılanmlzmgncl" />
            <input type="hidden" name="id" value="<?=$query['id']?>" />
            
           
            
            <div class="form-group col-md-12">
            	Proje Adı <br>
                <input name="projeadı" type="text" required class="form-control" placeholder="Proje Adı" value="<?=$query['projeadı']?>" required/>
            </div>
             <div class="form-group col-md-12">
            	Malzeme Adı <br>
                <input name="malzemeadı" type="text" required class="form-control" placeholder="Malzeme Adı" value="<?=$query['malzemeadı']?>" required/>
            </div>
             <div class="form-group col-md-12">
            	Malzeme Miktarı <br>
                <input name="malzememiktarı" type="text" required class="form-control" placeholder="Malzeme Miktarı" value="<?=$query['malzememiktarı']?>" required/>
            </div>
           
            <div class="form-group col-md-12">
            	<button type="submit" class="btn btn-primary">Kaydet</button>
            </div>
            
        </form>
        
    </section>