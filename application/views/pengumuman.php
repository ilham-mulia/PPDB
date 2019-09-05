<?php
foreach ($data as $tampil) {
  ?>

<html lang="en">
<head>
  <!-- meta ini sebagai responsive pada tampilan sajo lahh  -->
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title> <?php echo $tampil->judul; ?> </title>

  <!-- CSS ajo  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="<?php echo base_url('materialize/css/materialize.css'); ?>" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php echo base_url('materialize/css/materialize.min.css'); ?>" type="text/css" rel="stylesheet" media="screen,projection"/>

</head>
<body>


        <ul class="side-nav" id="nav-mobile">   <!-- memanggil id   -->
          <li><a href="<?php echo base_url()?>" >Home</a></li>
          <li class="active"><a href="<?php echo base_url('index.php/home/pengumuman')?>">Pengumuman</a></li>
          <li><a href="<?php echo base_url('index.php/home/hasil')?>">Hasil</a></li>
          <li><a href="<?php echo base_url('index.php/home/daftar')?>">Daftar</a></li>
          <li><a class="waves-effect waves-light btn" href="<?php echo base_url('index.php/home/login')?>">Login</a></li>
        </ul>

<div class="navbar-fixed">
  <nav class="light-blue">
    <div class="container">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo"><?php echo $tampil->judul; ?></a>
      <a href="#" data-activates="nav-mobile" class="button-collapse">
        <i class="material-icons">menu</i>
      </a>


      <ul class="right hide-on-med-and-down">
        <li><a href="<?php echo base_url()?>" >Home</a></li>
        <li class="active"><a href="<?php echo base_url('index.php/home/pengumuman')?>">Pengumuman</a></li>
        <li><a href="<?php echo base_url('index.php/home/hasil')?>">Hasil</a></li>
        <li><a href="<?php echo base_url('index.php/home/daftar')?>">Daftar</a></li>
        <li><a class="waves-effect waves-light btn" href="<?php echo base_url('index.php/home/login')?>">Login</a></li>
      </ul>

    </div>
    </div>
  </nav>

</div>



<div class="container">
  <div class="row">
    <div class="col s12">
      <p>
        <?php echo $tampil->text_pengumuman; ?>
        </p>

    </div>
  </div>



</div>







<?php include 'footer.php'; ?>
<?php } ?>
