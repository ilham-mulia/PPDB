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
          <li ><a href="<?php echo base_url()?>" >Home</a></li>
          <li><a href="<?php echo base_url('index.php/home/pengumuman')?>">Pengumuman</a></li>
          <li class="active"><a href="<?php echo base_url('index.php/home/hasil')?>">Hasil</a></li>
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
        <li><a href="<?php echo base_url('index.php/home/pengumuman')?>">Pengumuman</a></li>
        <li class="active"><a href="<?php echo base_url('index.php/home/hasil')?>">Hasil</a></li>
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
      <center><h3>Cek Hasil Penerimaan Siswa</h3></center>
      <p>
        Hello siswa, jika anda ingin mencek hasil dari pendaftaran anda ,<br>
        anda bisa masukan NISN / NIK di
        kolam pencarian di bawah ini.
      </p>
    </div>
    <form class="" action="<?php echo base_url('index.php/home/hasildata'); ?>" method="post"><br>
      <div class="row" >
        <div class="input-field col s10" >
          <i class="material-icons prefix">search</i>
          <input id="icon_prefix" type="text" class="validate" name="key">
          <label for="icon_prefix">Cari *(Nisn / NIK)</label>
        </div>
        <div class="col s2">
          <input type="submit" name="" value="Cari" class="btn light-blue"style="margin-top:20%;" >
        </div>
      </div>
  </form>
  </div>
  <br><br><br><br><br><br><br><br>
</div>







<?php include 'footer.php'; ?>
<?php } ?>
