<!--h2 class="header">Parallax</h2>
<p class="grey-text text-darken-3 lighten-3">Parallax is an effect where the background content or image in this case, is moved at a different speed than the foreground content while scrolling.</p-->
<ul id="tabs-swipe-demo" class="tabs">

  <?php
  $a = 1;
  foreach ($results as $veri) {
      echo "<li class=\"tab col-2\"><a href=\"#swipe-".$a."\">".$veri->Baslik."</a></li>";//purple accent-2
      $a++;
  }
  ?>
</ul>
<?php
$b=1;
foreach ($results as $veri) {
    echo "<div id=\"swipe-".$b."\" class=\"col s12\">".$veri->icerik."</div>";
    $b++;
}
?>
</div>
<ul class="pagination">
<?php
echo $links;
  ?>
</ul>
