<!-- Slider start -->

  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
<?PHP
    $s_umumi_slider = MYSQLI_QUERY($db,"SELECT * FROM topslider WHERE status='0' AND l_id='".$lng."' ORDER BY ordering ASC");
    $a=0;
    while($n_umumi_slider = MYSQLI_FETCH_ASSOC($s_umumi_slider)){
    ?>
    <!-- Wrapper for slides -->

      <div class="item <?PHP if($a==0){ echo "active";} else {}?> ">
        <img style="height:300px;width:100%;" src="<?PHP echo $site_url;?>topslider/<?PHP echo $n_umumi_slider['foto']; ?>" >
      </div>
   <?PHP  $a++; ?>
<?PHP 
  }
?>
    </div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
<div class="clearFix"></div>
<!-- Slider end -->