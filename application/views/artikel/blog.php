







<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
	<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
	<?php foreach ($artikel as $value) {
		?>
		<h4><?php echo $value->judul; ?></h6>
		<h6><?php echo $value->tanggal; ?></h6>
		<article>
			<?php echo $value->isi; ?>

		</article>
		<pre>	
			<?php 
				$tag = $value->tag;
				$arr = explode(",", $tag);
				
				for ($i=0; $i <sizeof($arr) ; $i++) { 
					echo $arr[$i] ."<br>";
				}
		
			?>

		</pre>
		
	<?php } ?>
	</div>
</div>