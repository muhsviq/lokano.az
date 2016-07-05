<div class="container">
	<div class="row">
		

<?php
$s_product = MYSQLI_QUERY($db,"SELECT * FROM product as p, product_photo as pp WHERE p.u_id='".$id."' AND p.l_id='".$lng."' AND p.u_id=pp.gal_id Group by p.u_id");
			
			
			while($n_product = MYSQLI_FETCH_ASSOC($s_product)){
				echo '<div class="clearFix2"></div>';
				echo '<div class="col-xs-12">';
				echo '<h4 "><a style="margin-bottom:10px;color:black;" href="">'.strip_tags($n_product['name']).'</a></h4>';
				echo '</div>';
				echo '<div class="col-xs-12"><p style="color:black;">';
				echo strip_tags($n_product['qisa_text'])."<br>";
				echo '</p></div>';
				echo '<div class="col-xs-12">';
				echo '<div class="pull-left"><p><b>';
				echo $n_product['price']."AZN";
				echo "</b></p></div></div>";
				echo '<div class="col-xs-12"><p>';
				echo strip_tags($n_product['text'])."<br>";
				echo '</p></div>';
				echo '<div class="col-xs-12">';
				echo '<img style="width:100%;height:200px;" src="../';
				echo $n_product['img_src'];
				echo '"/>';
				echo '</div>';
				echo '<div class="col-xs-12">';
				echo $n_product['foto_bottom_text']."<br>";
				echo '</div>';
				
		
			}
?><div class="clearFix"></div>
	</div>
</div>