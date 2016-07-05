<!-- Gallary start -->
      <?PHP
        $s_gallery_title = MYSQLI_QUERY($db,"SELECT * FROM menu WHERE u_id='26' AND l_id='".$lng."'");
        $n_gallery_title = MYSQLI_FETCH_ASSOC($s_gallery_title);
        ?>
<div class="container">
  <div class="row">
    <div class="col-xs3">
      <h3 class= "caption" style="text-align:center;"><?PHP echo $n_gallery_title['name'];?></h3>
    </div>
  </div>
</div>
<div class="clearFix"></div>
<div class="container">
  <br>
  <div id="myCarousel3" class="carousel slide" data-ride="carousel">

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
    <?PHP
          $s_botslide = MYSQLI_QUERY($db,"SELECT * FROM gallery WHERE status='0' AND l_id='".$lng."' ORDER BY ordering ASC");
          $b = 0;
          while($n_botslide = MYSQLI_FETCH_ASSOC($s_botslide)){
            $s_botslide_photo = MYSQLI_QUERY($db,"SELECT * FROM gallery_photo WHERE gal_id='".$n_botslide['u_id']."' ORDER BY id ASC LIMIT 1");
            $s_botslide_photo_num = MYSQLI_NUM_ROWS($s_botslide_photo);
            $n_botslide_photo = MYSQLI_FETCH_ASSOC($s_botslide_photo);
          ?>

      <div class="item <?PHP if($b==0){echo "active";} else{} ?>">
      <?PHP $b++; ?>
       <a href="<?PHP echo $site_url.$lng;?>/images/<?PHP echo $n_botslide['u_id'];?>"><img style="height:300px;" src="<?PHP echo $site_url; if($s_botslide_photo_num>0){ echo $n_botslide_photo['img_src']; }else{?>images/no_image.jpg<?PHP }?>"  alt=""/></a>

        <div class="carousel-caption">
          <h2 style="color:white;"><?PHP echo $n_botslide['name'];?></h2>
        </div>
      </div>
        <?PHP } ?>


  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel3" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel3" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!-- Gallary end-->