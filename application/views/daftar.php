<?php
foreach ($data as $tampil) {
  ?>
<html lang="en">
<head>
  <!-- meta ini sebagai responsive pada tampilan sajo lahh  -->
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title><?php echo $tampil->judul; ?></title>

  <!-- CSS ajo  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="<?php echo base_url('materialize/css/materialize.css'); ?>" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php echo base_url('materialize/css/materialize.min.css'); ?>" type="text/css" rel="stylesheet" media="screen,projection"/>

</head>
<body>


        <ul class="side-nav" id="nav-mobile">   <!-- memanggil id   -->
          <li ><a href="<?php echo base_url()?>" >Home</a></li>
          <li><a href="<?php echo base_url('index.php/home/pengumuman')?>">Pengumuman</a></li>
          <li><a href="<?php echo base_url('index.php/home/hasil')?>">Hasil</a></li>
          <li class="active"><a href="<?php echo base_url('index.php/home/daftar')?>">Daftar</a></li>
          <li><a class="waves-effect waves-light btn" href="<?php echo base_url('index.php/home/login')?>">Login</a></li>
        </ul>
<div class="navbar-fixed">
  <nav class="light-blue">
    <div class="container">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">PPDB</a>
      <a href="#" data-activates="nav-mobile" class="button-collapse">
        <i class="material-icons">menu</i>
      </a>


      <ul class="right hide-on-med-and-down">
        <li><a href="<?php echo base_url()?>" >Home</a></li>
        <li><a href="<?php echo base_url('index.php/home/pengumuman')?>">Pengumuman</a></li>
        <li><a href="<?php echo base_url('index.php/home/hasil')?>">Hasil</a></li>
        <li class="active"><a href="<?php echo base_url('index.php/home/daftar')?>">Daftar</a></li>
        <li><a class="waves-effect waves-light btn" href="<?php echo base_url('index.php/home/login')?>">Login</a></li>
      </ul>

    </div>
    </div>
  </nav>

</div>



<div class="container">
  <div class="row">
  <br><br>
  <div class="col s12 offset l12">
   <div class="card-panel grey lighten-5 z-depth-5 ">
     <div class="row valign-wrapper">
       <div class="col s12">
         <span class="black-text">
  <center><h3>Form Pendaftaran</h3></center>
  <form class="" action="<?php echo base_url('index.php/home/daftar');?>" method="post">
    <div class="row">
      <div class="input-field col s12">
        <i class="material-icons prefix">person</i>
        <input id="icon_prefix" type="text" class="validate" name="nama" required="">
        <label for="icon_prefix">Nama</label>
      </div>
    </div>

    <div class="row">
      <div class="input-field col s12">
        <i class="material-icons prefix">email</i>
        <input type="email" name="email" value="" class="validate" id="icon_prefix" required="">
        <label for="icon_prefix" data-success="Email Benar" data-error="Email Salah">Email</label>
      </div>
    </div>

    <div class="row">
      <div class="input-field col s12">
        <i class="material-icons prefix">account_circle</i>
        <input type="text" name="username" value="" class="validate" id="icon_prefix" required="">
        <label for="icon_prefix" data-success="Benar!">Username</label>
      </div>
    </div>

    <div class="row">
      <div class="input-field col s12">
        <i class="material-icons prefix">lock</i>
        <input type="password" name="password" value="" class="validate" id="icon_prefix" required="">
        <label for="icon_prefix" data-success="Password Benar!">Password</label>
      </div>
    </div>


    <div class="row">
      <div class="radio-field col s6" style="margin-left:2px;">
          <span><i class="material-icons prefix">people  </i>   </span>
        <input type="radio" name="kelamin" value="Laki-Laki" id="laki">
        <label for="laki">Laki-Laki</label>

        <input type="radio" name="kelamin" value="Perempuan" id="perempuan">
        <label for="perempuan">Perempuan</label>
      </div>
    </div>

    <div class="row">
      <div class="col s12 l5 offset-m2">
      <p>
        <input type="checkbox" id="test5" required=""/>
        <label for="test5">Apakah Data Anda Sudah Benar.?</label>
      </p>
      </div>
    </div>



    <div class="row">
      <div class="input-filed col s12">

          <input type="submit" name="submit" value="Simpan"class="btn waves light-blue">


      </div>
    </div>
  </div>


  </div>

  </form>
</span>
</div>
</div>
</div>
</div>
</div>


</div>
<?php } ?>

<?php include 'footer.php'; ?>
