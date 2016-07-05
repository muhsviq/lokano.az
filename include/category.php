<div class="container clearFix">
	<div class="row">
		

<?PHP
			$s_product = MYSQLI_QUERY($db,"SELECT p.u_id,p.name,p.qisa_text,p.price,pp.img_src FROM product p, (select * from product_photo order by id ASC) pp WHERE p.l_id='".$lng."' AND p.cat_id = '".$id."' AND p.u_id=pp.gal_id Group by p.u_id ");
			
			
			while($n_product = MYSQLI_FETCH_ASSOC($s_product)){
				echo '<div class="clearFix2"></div>';
				echo '<div class="col-xs-12">';
				echo '<h4 "><a style="margin-bottom:10px;color:black;" href="">'.strip_tags($n_product['name']).'</a></h4><br>';
				echo '</div>';
				echo '<div class="col-xs-12">';
				echo strip_tags($n_product['qisa_text'])."<br>";
				echo '</div>';
				echo '<div class="col-xs-12">';
				echo '<img style="width:100%;height:200px;" src="../';
				echo $n_product['img_src'];
				echo '"/>';
				echo '</div>';
				echo '<div class="col-xs-12">';
				echo '<div class="pull-left">';
				echo $n_product['price']."AZN";
				echo "</div>";
		
		
			?> 
			<div class="more pull-right "><a href="<?PHP echo $site_url; echo $lng;?>/product/<?PHP echo $n_product['u_id'];?>" ><img class="pull-right more-image" src="<?PHP echo $site_url;?>../images/read_more_<?PHP echo $lng;?>.png" border="0" /></a></div></div>
			<?php
		}
			?>

	</div>
</div><div class="clearFix"></div>