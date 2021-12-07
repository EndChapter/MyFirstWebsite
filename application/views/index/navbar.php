<nav class="purple darken-3 pin-top  hoverable">
  <div class="container">
  <!--purple darken-3 materialize'nin mor renk sınıfından bir sınıf diğerleri klasik navbar bu arada bana göre mor maviden daha güzel-->
  <div class="nav-wrapper purple darken-3">
    <a href="#" class="brand-logo glow-on-hover">Edip Çınkılıç</a>
    <a href="#" data-target="mobile-demo" onclick="instance.open();" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    <ul class="right hide-on-med-and-down">
      <?php
      foreach ($link as $key) {
          echo "<li><a class=\"hover3\" href=\"".base_url().$key->href."/\">".$key->Link."</a></li>";
      }
    ?>
    </ul>
  </div>
  </div>
</nav>

<!--Navbarın mobil görünümü... En iyi şekilde görünmesi için tam 3 saatimi harcadım..-->
<!--Bunu yazdıktan sonra bir 30 dakika daha uğraştım :D-->
<ul class="sidenav deep-purple lighten-4" id="mobile-demo">
<li><div class="user-view">
  <div class="background">
    <img src="<?php echo base_url('/assets/img/sidenav-bg.jpg');?>" alt="bg-nav-1">
  </div>
  <a href="#user"><img class="circle" src="<?php echo base_url('/assets/img/e-logo-png.png');?>" alt="elogo"></a>
  <a href="#name"><span class="white-text name">Edip Çınkılıç</span></a>
  <a href="#email"><span class="white-text email">edipididi@gmail.com</span></a>
</div></li>
<?php
foreach ($link as $key) {
    echo "<li><a class=\"waves-effect waves-purple btn-flat\" href=\"".base_url().$key->href."/\">".$key->Link."</a></li>";
}
?>
</ul>
