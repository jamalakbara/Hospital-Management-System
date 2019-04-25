<!DOCTYPE html>
<html lang="en" class="bg-dark">
<head>
  <meta charset="utf-8" />
  <title>Login</title>
  <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/animate.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/app.css" type="text/css" />
  <!--[if lt IE 9]>
    <script src="js/ie/html5shiv.js"></script>
    <script src="js/ie/respond.min.js"></script>
    <script src="js/ie/excanvas.js"></script>
  <![endif]-->
</head>
<body>
  <section id="content" class="m-t-lg wrapper-md animated fadeInUp">    
    <div class="container aside-xxl">
      
      <section class="panel panel-default bg-white m-t-lg">
        <header class="panel-heading text-center">
          <img src="<?= base_url("assets/images/hms-logo.png")?>" alt="">
        </header>
        <form action="<?php echo site_url('login/cek'); ?>" method="POST" class="panel-body wrapper-lg">
          <div class="form-group">
            <label class="control-label">Email</label>
            <input type="text" name="email" placeholder="Email" class="form-control input-lg">
            <?php echo form_error('email');?>
          </div>
          <div class="form-group">
            <label class="control-label">Password</label>
            <input type="password" name="pass" id="inputPassword" placeholder="Password" class="form-control input-lg">
            <?php echo form_error('password');?>
          </div>
          <button type="submit" class="btn btn-info">Log in</button>
          <div class="line line-dashed"></div>
        </form>
      </section>
    </div>
  </section>
  <!-- footer -->
  
  <!-- / footer -->
  <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
  <!-- App -->
  <script src="<?php echo base_url();?>assets/js/app.js"></script>
  <script src="<?php echo base_url();?>assets/js/app.plugin.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery.slimscroll.js"></script>
  
</body>
</html>