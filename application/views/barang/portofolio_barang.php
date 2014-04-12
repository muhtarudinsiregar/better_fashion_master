<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<legend>
				<h3>Detail Barang 
					<span class="ico-setting"><i class="glyphicon glyphicon-star"></i></span>
				</h3>
			</legend>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<img class="img-responsive" src="<?php echo site_url('img/'.$detail_barang->foto) ?>">
		</div>
		<div class="col-md-4 col-lg-offset-1">
                <h3><?php echo $detail_barang->nama; ?></h3>
                <p><?php echo $detail_barang->detail_barang; ?></p>
                <h3>Kategori</h3>
                <ul>
                    <li><?php echo $detail_barang->kategori; ?></li>
                 
                </ul>
           		<h3>Tags <span><i class="glyphicon glyphicon-tags"></i></span></h3>
           		<ul>
	           		<?php 
					$tag = $detail_barang->tags;
					$arr = explode(",", $tag);
					
					for ($i=0; $i <sizeof($arr) ; $i++) {
						echo "<span class='label label-primary'>".$arr[$i]."</span>&nbsp;"; 
						// echo  ."<br>";
					}
			
				?>


           		</ul>

        </div>

	</div>

