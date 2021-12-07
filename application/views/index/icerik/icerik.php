<?php foreach ($results as $veri) {?>
    <div class="row">
      <div class="col s12 m7">
        <div class="card">
          <div class="card-image">
            <img src="<?php echo base_url('/assets/img/sample-1.jpg'); ?>">
            <span class="card-title"><?php echo $veri->Baslik; ?></span>
          </div>
          <div class="card-content">
            <p><?php echo $veri->icerik; ?></p>
          </div>
        </div>
      </div>
    </div>
 <?php
}
?>
