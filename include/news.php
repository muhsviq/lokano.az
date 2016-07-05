<div class="container">
	<div class="row">
<?php
$s_news= MYSQLI_QUERY($db,"SELECT n.name , n.text ,n.date , np.img_src FROM news as n,news_photo as np WHERE n.l_id='".$lng."' AND n.u_id='".$id."' AND n.u_id=np.gal_id Group by n.u_id");
while($n_news=MYSQLI_FETCH_ASSOC($s_news)){
	echo '<div class="col-xs-12"><h4>';
	echo $n_news['name'];
	echo "</h4></div>";
	echo '<div class="col-xs-12"><span style="color:gray;">';
	echo $n_news['date'];
	echo "</span></div>";
	echo '<div class="col-xs-12">';
	echo '<img style="width:100%;" src="';
	echo  $site_url.'../'.$n_news['img_src'];
	echo '"/></div>';
	echo '<div class="col-xs-12"><p>';
	echo $n_news['text'];
	echo "</p></div>";
	
}

?>

		</div>
	</div>
</div>