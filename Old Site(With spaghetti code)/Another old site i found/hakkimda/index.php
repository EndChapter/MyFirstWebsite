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

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="../css/master.css">
    <link rel="stylesheet" href="../css/semantic.min.css">
    <link rel="stylesheet" href="../css/item.min.css">
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
        $dbh->query("SET CHARACTER SET utf8");

      } catch (PDOException $e) {
        print "Hata!: " . $e->getMessage() . "<br/>";
        die();
      }
      //baslangic
      $sayfa = 1;
      //sayfa basi gosterilecek veri
      $sayfaBasi = 6;
      //get ile sayfa verisini alıyoruz;
      if(isset($_GET['sayfa'])&&$_GET['sayfa'] >0){
        $sayfa = $_GET['sayfa'];
      }
      //SQL sorgusu için Limit
      $limit = ($sayfa -  1) * $sayfaBasi;
      //SQL ile sayfa basina aldigimiz sorguyu limitlendirdik
      $query = $dbh->query("SELECT * FROM Content ORDER BY Tarih DESC LIMIT $limit, $sayfaBasi");
      //fetch ile limitlendirdiğimiz veriyi seçcik
      $fetch = $query->fetchAll(PDO::FETCH_ASSOC);
      //SQL ile toplam baslik sayisini sorduk
      $query2= $dbh->query("SELECT COUNT(*) FROM Content");
      $query2->execute();
      //fetch ile toplam baslik sayimizi aldık ama bu array donduruyor integera cevircez
      $toplamBaslik= $query2->fetchColumn();
      //toplam baslik sayimizi arrayden aldık
      //toplam sayfa sayimizi toplam baslik sayimizi sayfa basina gösterecegimiz icerik sayisina bolerek ve bunu uste yuvarlayarak toplam sayfa sayimizi netlestirdik
      $toplamSayfa = ceil($toplamBaslik / $sayfaBasi);
      $sql = null; $result = null; $row = null;
      ?>
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
              if($row["href"] == "blogcontent"){
                echo "<li><a class=\"hover3\" href=\"#\">Blog Yazıları</a></li>";
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
      foreach($dbh->query('SELECT * from Linkler') as $row) {
        if($row["href"] == "blogcontent"){
          echo "<li><a class=\"waves-effect waves-purple btn-flat\" href=\"#\">Blog Yazıları</a></li>";
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
          <!--h2 class="header">Parallax</h2>
          <p class="grey-text text-darken-3 lighten-3">Parallax is an effect where the background content or image in this case, is moved at a different speed than the foreground content while scrolling.</p-->
          <div class="ui items">
            <?php foreach ($fetch as $veri) {?>
            <div class="item">
              <div class="image">
                <img src="../img/image.png">
              </div>
              <div class="content">
                <?php
                $a = 1;
                    echo "<a class=\"header\" href=\"../icerik.php?icerik=".$veri['href']."\">".$veri["Baslik"]."</a>";
                    $a++;
                ?>
                <div class="meta">
                  <span><?php echo $veri['aciklama']; ?></span>
                </div>
                <div class="description">
                  <p><?php echo $veri["icerik"]; ?></p>
                </div>
                <div class="extra">
                </div>
              </div>
            </div>
            <?php
          }
          ?>
        </div>
        <ul class="pagination">
          <?php
          $i = 0;
          $active = 1;
          //eger ilk sayfada ise ilk geri tuşu disable..;
          if ($sayfa == 1){
            echo "<li class=\"disabled\"><a href=\"#!\"><i class=\"material-icons\">chevron_left</i></a></li>";
          }else{
            echo "<li class=\"\"><a href=\"/blogcontent/?sayfa=".($sayfa-1)."\"><i class=\"material-icons\">chevron_left</i></a></li>";
          }
            for($i = 1; $i <= $toplamSayfa;$i++){
              if($sayfa==$i){
                echo "<li class=\"active\"><a href=\"#!\">".$i."</a></li>";
              }else{
                echo "<li class=\"waves-effect\"><a href=\"?sayfa=". $i ." \">". $i ."</a></li>";
              }
            }if($sayfa<$toplamSayfa){
            echo "<li class=\"waves-effect\"><a href=\"/blogcontent/?sayfa=".($sayfa+1)."\"><i class=\"material-icons\">chevron_right</i></a></li>";
          }else{
            echo "<li class=\"disabled\"><a href=\"#!\"><i class=\"material-icons\">chevron_right</i></a></li>";
          }
            ?>
          </ul>
        </div>
  </div>
    <div class="parallax-container">
      <div class="parallax"><img alt="parallax" src="../img/parallax.jpg"></div>
    </div>
      <?php $dbh=null;?>
      <script src="../js/materialize.min.js"></script>
      <script src="../js/jquery-3.4.1.min.js"></script>
      <script src="../js/semantic.min.js"> </script>
      <!--script src="../https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script-->
      <script src="../js/components.js"></script>
      <script src="../js/tabs.js"></script>
    </body>
  </html>
