 <?php
  include_once("header/header.php");
  ?>
    <body>
<?php
  include_once("header/nav.php");
?>

<div class="row">
  <div class="col s6">
   <a href="foto.php" style="margin-left: 250px;">Foto</a>
  </div>
  <div class="col s6">
   <a href="video.php" style="text-align: center;">video</a>
  </div>
</div>

<div style="margin-left: 160px;">
<div class="gallery">
<a target="_blank" href="custom/image/unpad.png">
    <img src="custom/image/unpad.png" alt="unpad">
  </a>
  <div class="desc">Lihat Selengkapnya</div>
</div>
<div class="row">
<div class="gallery">
  <a target="_blank" href="custom/image/unpad.png">
    <img src="custom/image/unpad.png" alt="unpad">
  </a>
  <div class="desc">Lihat Selengkapnya</div>
</div>

<div class="gallery">
<a target="_blank" href="custom/image/unpad.png">
    <img src="custom/image/unpad.png" alt="unpad">
  </a>
  <div class="desc">Lihat Selengkapya</div>
</div>

<div class="gallery">
<a target="_blank" href="custom/image/unpad.png">
    <img src="custom/image/unpad.png" alt="unpad">
  </a>
  <div class="desc">Lihat Selengkapnya</div>
</div>
</div>

</div>
<div style="margin-left: 160px;">
<ul class="pagination">
    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
    <li class="active"><a href="#!">1</a></li>
    <li class="waves-effect"><a href="#!">2</a></li>
    <li class="waves-effect"><a href="#!">3</a></li>
    <li class="waves-effect"><a href="#!">4</a></li>
    <li class="waves-effect"><a href="#!">5</a></li>
    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
  </ul>
</div>
<?php include_once('header/footer.php');
?>
    </body>
