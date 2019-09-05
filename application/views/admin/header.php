<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>Admin - PPDB</title>

    <!-- CSS ajo  -->

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="<?php echo base_url('materialize/css/materialize.css'); ?>" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="<?php echo base_url('materialize/css/materialize.min.css'); ?>" type="text/css" rel="stylesheet" media="screen,projection"/>

  </head>
  <body>


    <header>
      <nav class="top-nav light-blue">
        <a href="#" class="brand-logo show">PPDB</a>
          <div class="container"><a href="sss" data-activates="nav-mobile" class="button-collapse top-nav full hide-on-large-only"><i class="material-icons">menu</i></a>
          </div>

<ul id="dropdown1" class="dropdown-content z-depth-5">
  <li><a href="<?php echo base_url('index.php/admin/prodi')?>">Prodi</a></li>
  <li><a href="<?php echo base_url('index.php/admin/agama')?>">Agama</a></li>
  <li><a href="<?php echo base_url('index.php/admin/status')?>">Status</a></li>
</ul>

    </nav>
      <ul id="nav-mobile" class="side-nav fixed" style="transform: translateX(0px);">
        <li disabled class="brand-logo bold" style="font-size:38px; margin-top:3%; margin-bottom:8px;"><center><b>PPDB</b></center></li>
        <li class="bold"><a href="<?php echo base_url('index.php/admin')?>" class="waves-effect waves-teal">Home</a></li>
        <li class="bold"><a href="<?php echo base_url('index.php/admin/datasiswa')?>" class="waves-effect waves-teal">Data Siswa</a></li>
        <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Setting Pendaftaran<i class="material-icons right" style="margin-right:35%;">arrow_drop_down</i></a></li>
          <li class="bold"><a href="<?php echo base_url('index.php/admin/config')?>" class="waves-effect waves-teal">Setting Website</a></li>
        <li class="bold"><a href="<?php echo base_url('index.php/admin/setting')?>" class="waves-effect waves-teal">Setting Akun</a></li>
        <li><a style="margin-top:100%"class="waves-effect waves-light btn cyan" href="<?php echo base_url('index.php/admin/logout')?>" onclick="return confirm('Apakah Anda Ingin Keluar')">Logout</a></li>


      </ul>
    </header>
