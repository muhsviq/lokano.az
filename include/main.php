
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


<!-- News start -->
<?PHP
        $s_news_title = MYSQLI_QUERY($db,"SELECT * FROM menu WHERE u_id='25' AND l_id='".$lng."'");
        $n_news_title = MYSQLI_FETCH_ASSOC($s_news_title);
        ?>
  <?PHP
  $s_news_slider = MYSQLI_QUERY($db,"select *,DATE_FORMAT(date, '%d.%m.%Y') AS tarix from news WHERE l_id='".$lng."' order by ordering desc limit 3");
  $n_news_num = MYSQLI_NUM_ROWS($s_news_slider);
  ?>
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h3 class= "caption" style="text-align:center;"><a class="home_news_title" href="<?PHP echo $site_url; echo $lng;?>/pages/23"><?PHP echo $n_news_title['name'];?></a></h3>
      </div>
    </div>
  </div>
  <?PHP
  while($n_news_slider = MYSQLi_FETCH_ASSOC($s_news_slider)){
      ?>
<div class="news">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="news-caption">
          <p class=" news-caption-text "><b><?PHP echo $n_news_slider['name'];?></b> </p>
          
         
        </div>
      </div>
    </div>
    <div class="col-xs-12">
        <div class="news-text"><?PHP $limit = 400; $news_text= $n_news_slider['text'].'   '; $news_text=strip_tags($news_text); echo $qisatext = substr($news_text, 0, strrpos(substr($news_text, 0, $limit), ' ')) .'...'; ?><div class="more"><a href="<?PHP echo $site_url; echo $lng;?>/news/<?PHP echo $n_news_slider['u_id'];?>#ppp" ><img class="pull-right more-image" src="<?PHP echo $site_url;?>images/home_news_read_<?PHP echo $lng;?>.png" border="0" /></a></div></div>
        <p class="date pull-left"><b><?PHP echo $n_news_slider['date'];?>.</b></p>
      </div>
  </div>
</div>

<?PHP
} 
?>
</div>




<!-- News end -->
