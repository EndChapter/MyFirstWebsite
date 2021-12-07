<!DOCTYPE html>
<html>
  <?php $this->load->view('index/head'); ?>
  <body>
  <!--30 dakikadır kendime navbar beğendiremiyorum-->
  <!--Navbar-->
  <div class="parallax-container">
    <div class="parallax"><img alt="parallax" src="<?php echo base_url('/assets/img/parallax.jpg');?>"></div>

    <?php $this->load->view('index/navbar') ?>
  </div>
  <div class="container section white">
    <div class="row container">
      <?php $this->load->view('index/reklam/icerik') ?>
  </div>
</div>
  <div class="parallax-container">
    <div class="parallax"><img alt="parallax" src="<?php echo base_url('/assets/img/parallax.jpg');?>"></div>
  </div>
    <?php $this->load->view('index/include') ?>
  </body>
</html>
