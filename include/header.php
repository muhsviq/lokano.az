<!DOCTYPE html>
<html lang="en">
<head>
  <title>Lokano.az</title>
  <base href="http://localhost/lokano2/cms/" >
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <link rel="stylesheet" type="text/css" href="<?PHP echo $site_url;?>css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="<?PHP echo $site_url;?>css/bootstrap.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?PHP echo $site_url;?>css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="<?PHP echo $site_url;?>js/bootstrap.min.js"></script>
  

</head> 
<body>

<nav class="navbar navbar-default ">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle toggle-custom pull-left" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    <?PHP
      function make_menu($sub,$lng,$site_url,$db)
      {
        if($sub==0) {$cls='nav navbar-nav'; }
        else        {$cls='dropdown-menu';  }
        echo'<ul class="'.$cls.'">';
        $sql=MYSQLI_QUERY($db,'SELECT * FROM menu WHERE sub_id = "'.$sub.'" AND l_id="'.$lng.'" AND status = 0 AND (tip="2" OR tip="5") ORDER BY ordering ASC');
        while($b=MYSQLI_FETCH_ASSOC($sql))
        {
          $sql2=MYSQLI_QUERY($db,'select * from menu where sub_id="'.$b['u_id'].'" AND l_id="'.$lng.'" AND status = "0" AND (tip="2" OR tip="5") ');
          if(MYSQLI_NUM_ROWS($sql2)==0)
          {
          
            if(!empty($b['url'])){ $link='href="'.$b['url'].'"';  }
            else{ $link='href="'.$site_url.$lng.'/pages/'.$b['u_id'].'"'; }

            $dt='';
            $cr='';
          }
          else
          {
            $link=' href="'.$site_url.$lng.'/ft/'.$b['u_id'].'" ';

            $dt='data-toggle="dropdown"';
            $cr='<span class="caret"></span>';  
          }
          if($b['u_id']==4 or $b['u_id']==5)
          {
          }
          else
          {
            echo '<li><a '.$link.' '.$dt.'>'.$b['name'].$cr.'</a>';
            if(MYSQLI_NUM_ROWS($sql2)!=0)
            {
              make_menu($b['u_id'],$lng,$site_url,$db);
            }
            echo'</li>';
          }
        }
        echo'</ul>';
      }
      make_menu(0,$lng,$site_url,$db);
    ?>
      
    </div>
    <div class="languages pull-right">
      <ul>
        <li><a href="<?php echo $site_url.'1/'.$page.'/'.$id ?>">AZ |</a></li>
        <li><a href="<?php echo $site_url.'2/'.$page.'/'.$id ?>">RU |</a></li>
        <li><a href="<?php echo $site_url.'3/'.$page.'/'.$id ?>">EN</a></li>
      </ul>
    </div>
  </div>
</nav>
<!-- Navbar end -->
<!-- logo start here -->
<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <div class="logo">
        <a href="<?php echo $site_url.$lng.'/main'.'/'.$id ?>">
          <img src="<?PHP echo $site_url;?>images/logo.jpg"/>
        </a>
      </div>
    </div>
  </div>
</div>
<div class="clearFix"></div>
<!-- logo end here -->
<!-- cataloq start -->
<div class="catalog">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <button class="dropdown-toggle catalog-text" type="button" data-toggle="dropdown">Kataloq <span class="caret"></span>
        </button>
        <div class="col-xs-12">
          <ul class="nav navbar-nav catalog-nav">
          <?PHP
      
        $s_category = MYSQLI_QUERY($db,"SELECT * FROM product_cat WHERE l_id='".$lng."' ");
        
        while($n_category = MYSQLI_FETCH_ASSOC($s_category)){
        ?> 
        <li> <a href="<?PHP echo $site_url; echo $lng;?>/category/<?PHP echo $n_category['u_id'];?>" class="content_title"><?PHP echo $n_category['name'];?></a></li>
        <?PHP } ?>        
          </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  $(".dropdown-toggle").click(function(){
    $(".catalog-nav").slideToggle();
  })
</script>
<div class="clearFix"></div>
<!-- catalog end -->