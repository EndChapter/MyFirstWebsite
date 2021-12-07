<!DOCTYPE html>
<html lang="tr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!--oh başlıyoruz-->
    <!--todo: açıklama ekle ve semantic ui açıklamasını diğer phplere ekle klasörleri düzenle veritabanına resim ekle anasayfayı düzenle Linkleri tam olarak düzgün çalışacak şekilde ayarla..-->
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/semantic.min.css">
    <link rel="stylesheet" href="css/item.min.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Edip Çınkılıç - Kişisel Blog</title>
  </head>
  <body>
    <?php
    //$username = "root";
    //$password = "1234";
    $username= "edipincc_1";
    $password= "4u58mXtt5E";
    try{
      $dbh = new PDO('mysql:host=localhost;dbname=edipincc_deneme', $username, $password);
      $dbh->query("SET CHARACTER SET utf8");
    }catch(PDOException $e){
      print"Hata: " . $e->getMessage() . "<br/>";
      die();
    }
    $icerik;
    //eger icerik yoksa anasayfaya yönlendir.
    if(isset($_GET['icerik'])){
      $icerik = $_GET['icerik'];
    }else{
      header ("Location:index.php");
    }
    $query = $dbh->query("SELECT * FROM Content WHERE href=\"$icerik\"");
    $fetch = $query->fetchAll(PDO::FETCH_ASSOC);
     ?>
     <div class="parallax-container">
       <div class="parallax"><img alt="parallax" src="img/parallax.jpg"></div>

       <nav class="purple darken-3 pin-top  hoverable">
         <div class="container">
         <!--purple darken-3 materialize'nin mor renk sınıfından bir sınıf diğerleri klasik navbar bu arada bana göre mor maviden daha güzel-->
         <div class="nav-wrapper purple darken-3">
           <a href="#" class="brand-logo glow-on-hover">Edip Çınkılıç</a>
           <a href="#" data-target="mobile-demo" onclick="instance.open();" class="sidenav-trigger"><i class="material-icons">menu</i></a>
           <ul class="right hide-on-med-and-down">
             <?php
             foreach($dbh->query('SELECT * from Linkler') as $row) {
               if($row["Link"] == "Ana Sayfa"){
                 echo "<li><a class=\"hover3\" href=\"../\">Ana Sayfa</a></li>";
               }else{
                 echo "<li><a class=\"hover3\" href=\"".$row["href"]."/\">".$row["Link"]."</a></li>";
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
     <!--copy paste ile sitenin genel gorunumunu çektim-->
     <!--Navbarın mobil görünümü... En iyi şekilde görünmesi için tam 3 saatimi harcadım..-->
     <!--Bunu yazdıktan sonra bir 30 dakika daha uğraştım :D-->
     <ul class="sidenav deep-purple lighten-4" id="mobile-demo">
       <li><div class="user-view">
         <div class="background">
           <img src="img/sidenav-bg.jpg" alt="bg-nav-1">
         </div>
         <a href="#user"><img class="circle" src="img/e-logo-png.png" alt="elogo"></a>
         <a href="#name"><span class="white-text name">Edip Çınkılıç</span></a>
         <a href="#email"><span class="white-text email">edipididi@gmail.com</span></a>
       </div></li>
       <?php
       foreach($dbh->query('SELECT * from Linkler') as $row) {
         if($row["href"] == "home"){
           echo "<li><a class=\"waves-effect waves-purple btn-flat\" href=\"edipinc.com\">Ana Sayfa</a></li>";
         }else{
           echo "<li><a class=\"waves-effect waves-purple btn-flat\" href=\"".$row["href"]."/\">".$row["Link"]."</a></li>";
         }
       }?>
     </ul>
     </div>
     <div class="container section white">
       <div class="row container">
         <?php foreach ($fetch as $veri) {?>
           <div class="row">
             <div class="col s12 m7">
               <div class="card">
                 <div class="card-image">
                   <img src="img/sample-1.jpg">
                   <span class="card-title"><?php echo $veri['Baslik']; ?></span>
                 </div>
                 <div class="card-content">
                   <p><?php echo $veri['icerik']; ?></p>
                 </div>
               </div>
             </div>
            </div>
        <?php
      }
      ?>
       </div>
     </div>
     <div class="parallax-container">
       <div class="parallax"><img alt="parallax" src="img/parallax.jpg"></div>
     </div>
       <?php
       $dbh=null;?>
    <script src="js/materialize.min.js"></script>
    <script src="js/jquery-3.4.1.min.js"></script>
    <!--script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script-->
    <script src="js/components.js"></script>
    <script src="js/tabs.js"></script>
  </body>
</html>
