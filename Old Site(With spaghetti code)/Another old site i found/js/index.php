<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!--Merhaba Kullanıcı! Sen bunu okuyorken ben bu siteyi yazmaya başlamış olacağım. Olur da bir gün ben de okursam bu Yazının Hatıra Olarak Durmasını istiyorum-->
    <!--İkinci olarak bildiğin gibi 80 portu halka açık porttur yani istediğin css, js veya html kodunu olduğu gibi kopyalayıp kendi sitene yapıştırabilirsin. Soruların veya sorunların olursa bana edipididi@gmail.com adresinden ulaşabilirsin...-->
    <!--Son olarak site php Kullanılarak yazılmıştır ve verileri php'den çekiyorum eğer kod yazılırken hiç özen gösterilmediğini düşünüyor isen tam olarak öyle değil sadece php satırları ayrı ayrı yazmak yerine bitiştiriyor...-->
    <!--Yine de aşırı özen göstereceğim kodların düzeninin bozulmamasına..-->
    <!--Kullandığım Css Kütüphaneleri Materialize-->
    <!-- Kullandığım JavaScript Kütüphaneleri: Css dosyalarının JavaScript Kütüphaneleri, Angular JS-->
    <!-- Aslında bu yorumları konsola yazdıracaktım ama konsolu kimse okumuyor burayı okursunuz..-->
    <title>Edip Çınkılıç - Kişisel Blog</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="css/master.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>
  <body>
    <?php
      //$username= "root";
      //$password= "1234";
      $username= "edipincc_1";
      $password= "4u58mXtt5E";
      try{
        $dbh = new PDO('mysql:host=localhost;dbname=edipincc_deneme', $username, $password);
        $dbh->query("SET CHARACTER SET utf8");;

      } catch (PDOException $e) {
        print "Hata!: " . $e->getMessage() . "<br/>";
        die();
      }

      $sql = null; $result = null; $row = null;
      ?>
  <!--30 dakikadır kendime navbar beğendiremiyorum-->
  <!--Navbar-->
  <div class="parallax-container">
    <div class="parallax"><img src="img/parallax1.jpg"></div>

    <nav class="purple darken-3 pin-top  hoverable">
      <div class="container">
      <!--purple darken-3 materialize'nin mor renk sınıfından bir sınıf diğerleri klasik navbar bu arada bana göre mor maviden daha güzel-->
      <div class="nav-wrapper purple darken-3">
        <a href="#" class="brand-logo glow-on-hover">Edip Çınkılıç</img></a>
        <a href="#" data-target="mobile-demo" onclick="instance.open();"class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <?php
          foreach($dbh->query('SELECT Link from Linkler') as $row) {
            if($row["Link"] == "Ana Sayfa"){
              echo "<li><a class=\"hover3\" href=\"#\">Ana Sayfa</a></li>";
            }else{
              echo "<li><a class=\"hover3\" href=\"".$row["Link"]."/\">".$row["Link"]."</a></li>";
            }
          }
            /*$sql="SELECT * FROM Linkler";
            $sorgu=mysqli_query($dbh,$sql);
            while( $sonuc=mysqli_fetch_assoc($sorgu) ){
                echo $sonuc["Link"];     // ogrID kolonu
              }*/
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
        <img src="img/sidenav-bg.jpg" alt="bg-nav-1">
      </div>
      <a href="#user"><img class="circle" src="img/e-logo-png.png"></a>
      <a href="#name"><span class="white-text name">Edip Çınkılıç</span></a>
      <a href="#email"><span class="white-text email">edipididi@gmail.com</span></a>
    </div></li>
    <?php
    foreach($dbh->query('SELECT Link from Linkler') as $row) {
      if($row["Link"] == "Ana Sayfa"){
        echo "<li><a class=\"waves-effect waves-purple btn-flat\" href=\"#\">Ana Sayfa</a></li>";
      }else{
        echo "<li><a class=\"waves-effect waves-purple btn-flat\" href=\"".$row["Link"]."/\">".$row["Link"]."</a></li>";
      }
    }?>
  </ul>,
  </div>
  <div class="container section white">
    <div class="row container">
      <!--h2 class="header">Parallax</h2>
      <p class="grey-text text-darken-3 lighten-3">Parallax is an effect where the background content or image in this case, is moved at a different speed than the foreground content while scrolling.</p-->
      <ul id="tabs-swipe-demo" class="tabs">
        <li class="tab col s3"><a href="#swipe-1">Test 1</a></li>
        <li class="tab col s3"><a href="#swipe-2">Test 2</a></li>
        <li class="tab col s3"><a href="#swipe-3">Test 3</a></li>
      </ul>
      <div id="swipe-1" class="col s12 blue">First tab content</div>
      <div id="swipe-2" class="col s12 red">Second tab content</div>
      <div id="swipe-3" class="col s12 green">Third tab content</div>
    </div>
  </div>
  <div class="parallax-container">
    <div class="parallax"><img src="img/parallax2.png"></div>
  </div>
    <?php
    $dbh=null;?>
    <script src="js/materialize.min.js"></script>
    <script src="js/jquery-3.4.1.min.js"></script>
    <!--script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script-->
    <script src="js/components.js"></script>
    <script src="js/tabs.js">

    </script>
  </body>
</html>
