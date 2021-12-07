      <!--h2 class="header">Parallax</h2>
      <p class="grey-text text-darken-3 lighten-3">Parallax is an effect where the background content or image in this case, is moved at a different speed than the foreground content while scrolling.</p-->
      <link rel="stylesheet" href="<?php echo base_url('/assets/css/semantic.min.css');?>">
      <link rel="stylesheet" href="<?php echo base_url('/assets/css/item.min.css');?>">
      <div class="ui items">
        <?php foreach ($results as $veri) {?>
        <div class="item">
          <div class="image">
            <img src="<?php echo base_url('/assets/img/image.png');?>">
          </div>
          <div class="content">
            <?php
            $a = 1;
                echo "<a class=\"header\" href=\"../icerik/".$veri->href."\">".$veri->Baslik."</a>";
                $a++;
            ?>
            <div class="meta">
              <span><?php echo $veri->aciklama; ?></span>
            </div>
            <div class="description">
              <p><?php echo $veri->icerik; ?></p>
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
      <?php echo $links; ?>
      </ul>
