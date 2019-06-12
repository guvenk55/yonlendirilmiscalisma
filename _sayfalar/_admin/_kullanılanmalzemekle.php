<?php 
	defined( '_ERISIM' ) or die( 'Erisim engellendi!' );
	$ic=$ifo->sec('k.projeadı,k.malzemeadı,k.malzememiktarı','kullanılanmalzeme AS k')->oku();
?>
	<section id="icerik" class="buyuk">
        
    	<h4 class="well">
        	Yeni Kullanılan Malzeme
            <p class="pull-right">
            	<a href="_referans">
                	<i class="fa fa-fw fa-chevron-left"></i> Geri
                </a>
            </p>
        </h4>
        
        <form id="frm" method="post">
        	<input type="hidden" name="frm" value="kullanılanmlzmekle" />
           
            </div>
            
            <div class="form-group col-md-12">
            	Proje Adı <br>
                <input name="projeadı" type="text" required class="form-control" value="" placeholder="Proje Adı" required/>
            </div>
             <div class="form-group col-md-12">
            	Malzeme Adı <br>
                <input name="malzemeadı" type="text" required class="form-control" placeholder="Malzeme Adı" required/>
            </div>
             <div class="form-group col-md-12">
            	Malzeme Miktarı <br>
                <input name="malzememiktarı" type="text" required class="form-control" placeholder="Malzeme Miktarı" required/>
            </div>
           
            <div class="form-group col-md-12">
            	<button type="submit" class="btn btn-primary">Ekle</button>
            </div>
            
        </form>
        
    </section>