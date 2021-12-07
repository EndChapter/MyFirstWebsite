<!DOCTYPE html>
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
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="../css/master.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>
  <body>
    <?php
      $username= "root";
      $password= "1234";
      try{
        $dbh = new PDO('mysql:host=localhost;dbname=edipincc_deneme', $username, $password);
        $dbh->query("SET CHARACTER SET utf8");;

      } catch (PDOException $e) {
        print "Hata!: " . $e->getMessage() . "<br/>";
        die();
      }?>
    <div class="parallax-container">
      <div class="parallax"><img alt="parallax" src="../img/parallax.jpg"></div>

      <nav class="purple darken-3 pin-top  hoverable">
        <div class="container">
        <!--purple darken-3 materialize'nin mor renk sınıfından bir sınıf diğerleri klasik navbar bu arada bana göre mor maviden daha güzel-->
        <div class="nav-wrapper purple darken-3">
          <a href="#" class="brand-logo glow-on-hover">Edip Çınkılıç</a>
          <a href="#" data-target="mobile-demo" onclick="instance.open();" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <?php
            foreach($dbh->query('SELECT * from Linkler') as $row) {
              if($row["href"] == "hakkimda"){
                echo "<li><a class=\"hover3\" href=\"#\">Hakkımda</a></li>";
              }else if($row["href"]== "home"){
                echo "<li><a class=\"hover3\" href=\"../\">Ana Sayfa</a></li>";
              }else{
                echo "<li><a class=\"hover3\" href=\"../".$row["href"]."/\">".$row["Link"]."</a></li>";
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
          <img src="../img/sidenav-bg.jpg" alt="bg-nav-1">
        </div>
        <a href="#user"><img class="circle" src="../img/e-logo-png.png" alt="elogo"></a>
        <a href="#name"><span class="white-text name">Edip Çınkılıç</span></a>
        <a href="#email"><span class="white-text email">edipididi@gmail.com</span></a>
      </div></li>
      <?php
      foreach($dbh->query('SELECT *from Linkler') as $row) {
        if($row["href"] == "hakkimda"){
          echo "<li><a class=\"waves-effect waves-purple btn-flat\" href=\"#\">Hakkımda</a></li>";
        }else if($row["href"]== "home"){
          echo "<li><a class=\"waves-effect waves-purple btn-flat\" href=\"../\">Ana Sayfa</a></li>";
        }else{
          echo "<li><a class=\"waves-effect waves-purple btn-flat\" href=\"../".$row["href"]."/\">".$row["Link"]."</a></li>";
        }
      }?>
    </ul>
    </div>
    <div class="container section white">
      <div class="row container">
        <h2 class="header">Hakkımda</h2>
        <p class="grey-text text-darken-3 lighten-3">Merhaba, ben Edip Çınkılıç, bu blogu hem kendimce bişeyler karalayıp zaman öldürmek için hem de varolan programlama bilgimi doğrudan site üzerinden geliştirmek amaçlı oluşturdum. Uludağ Üniversitesi Bilgisayar ve Öğretim Teknolojileri 4. sınıf öğrencisiyim. Umarım Burada Geçirdiğin zamandan keyif alırsın..</p>
        <p class="grey-text text-darken-3 lighten-3">E-posta: Edipididi@gmail.com</p>
        <br><br><br><br><br>
    </div>
  </div>
    <div class="parallax-container">
      <div class="parallax"><img alt="parallax" src="../img/parallax.jpg"></div>
    </div>
      <?php $dbh=null;?>
      <script src="../js/materialize.min.js"></script>
      <script src="../js/jquery-3.4.1.min.js"></script>
      <!--script src="../https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script-->
      <script src="../js/components.js"></script>
      <script src="../js/tabs.js"></script>
    </body>
  </html>
