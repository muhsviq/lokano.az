<?PHP
	if(!empty($blokid)){
	$sorgu=mysqli_query(,$db."select *,DATE_FORMAT(date, '%d.%m.%Y') AS tarix from blok where u_id='".$blokid."'");
	$blokgoster=mysqli_fetch_array($sorgu);
	?>
	<p><?PHP echo $blokgoster['tarix'];?></p>