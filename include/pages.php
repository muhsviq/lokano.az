<?PHP

 $sql=MYSQLI_QUERY($db,'select * from menu where u_id="'.$id.'" AND l_id="'.$lng.'" AND status = "0" AND (tip="2" OR tip="5") ');
 while($b=mysqli_fetch_assoc($sql)){?>
  <div class="container">
    <div class="row">
      <div class="col-xs-12"><h3 style= "border-bottom:1px solid gray;"><?php echo $b['name']; ?></h3></div>
      <div class="col-xs-12"> <?php echo $b['text'] ?>;</div>
    </div>
   </div> 
 <?php } ?>



