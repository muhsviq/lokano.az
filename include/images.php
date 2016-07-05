<div class="container">
	<div class="row">

<?php

$q_gallery= MYSQLI_QUERY($db,"SELECT * FROM gallery WHERE status='0' AND l_id='".$lng."' AND u_id='".$id."' ORDER BY ordering ASC");
while($s_gallery=MYSQLI_FETCH_ASSOC($q_gallery)){
	echo '<div class="col-xs-12"><h4 style="text-align:center;">';
	echo $s_gallery['name'];
	echo '</h4></div>';
	$q_gallery_img =MYSQLI_QUERY($db,"SELECT * FROM gallery_photo WHERE gal_id='".$s_gallery['u_id']."' ORDER BY id ASC");
	while($s_gallery_img=MYSQLI_FETCH_ASSOC($q_gallery_img)){
		echo '<div class="col-xs-12 img-empty">';
		echo '<img style="width:100%;" src="';
		echo $site_url."../".$s_gallery_img['img_src'];
		echo '"/></div>';
	}

}



?>
	</div>
</div>