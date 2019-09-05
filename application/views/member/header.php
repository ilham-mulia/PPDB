<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>Siswa - PPDB</title>

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

    </nav>
      <ul id="nav-mobile" class="side-nav fixed" style="transform: translateX(0px);">
        <li disabled class="brand-logo bold" style="font-size:38px; margin-top:3%; margin-bottom:8px;"><center><b>PPDB</b></center></li>
        <li class="bold"><a href="<?php echo base_url('index.php/member')?>" class="waves-effect waves-teal">Info Siswa</a></li>
        <li class="bold"><a href="<?php echo base_url('index.php/member/datadiri')?>" class="waves-effect waves-teal">Data Diri</a></li>
        <li ><a href="<?php echo base_url('index.php/member/prodi')?>" class="waves-effect waves-teal">Prodi</a></li>
        <li class="bold"><a href="<?php echo base_url('index.php/member/nilai')?>" class="waves-effect waves-teal">Nilai</a></li>
        <li class="bold"><a href="<?php echo base_url('index.php/member/file')?>" class="waves-effect waves-teal">Upload Foto</a></li>
        <li><a class="waves-effect waves-teal" href="<?php echo base_url('index.php/member/status')?>">Status</a></li>
        <li><a class="waves-effect waves-teal" href="<?php echo base_url('index.php/member/setting')?>">Setting</a></li>
        <li><a style="margin-top:70%"class="waves-effect waves-light btn cyan" href="<?php echo base_url('index.php/member/logout')?>" onclick="return confirm('Apakah Anda Ingin Keluar')">Logout</a></li>


      </ul>
    </header>
