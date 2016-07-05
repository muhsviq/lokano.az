<!-- footer start -->
<div class="footer clearFix">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="footer-section clearFix">
          <div class="footer-left pull-left">
          <div class="col-xs-12">   
          <h4>Menu</h4>  
          <?PHP
      function make_footer_menu($sub,$lng,$site_url,$db)
      {
        if($sub==0) {$cls='nav navbar-nav'; }
        else        {$cls='dropdown-menu';  }
      
        $sql=MYSQLI_QUERY($db,'SELECT * FROM menu WHERE sub_id = "'.$sub.'" AND l_id="'.$lng.'" AND status = 0 AND (tip="3" OR tip="5") ORDER BY ordering ASC');
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
            $link=' href="#" ';

              
          }
          if($b['u_id']==4 )
          {
          }
          else
          {
            echo '<span><a '.$link.' '.$dt.'>'.$b['name'].$cr.'</a>';
            // if(MYSQLI_NUM_ROWS($sql2)!=0)
            // {
            //   make_footer_menu($b['u_id'],$lng,$site_url,$db);
            // }
            echo'</span>';
          }
        }
      }
      make_footer_menu(0,$lng,$site_url,$db);
    ?>
       
              
          </div>

          </div>
          <div class="col-xs-12">
            <div class="icons">
              <a href="https://www.facebook.com/lokanofloor" target="_blank">
                <i class="fa fa-facebook-square" aria-hidden="true"></i>
              </a>
              <a href="https://twitter.com" target="_blank">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="https://plus.google.com/109126163433461963771/about">
                <i class="fa fa-google-plus-square" aria-hidden="true" target="_blank"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- footer end -->
<script type="text/javascript">
  $("i").hover(function(){
    $(this).css("background-color", "gray");
     }, function(){
    $(this).css("background-color", "white");
});
</script>

</body>
</html>