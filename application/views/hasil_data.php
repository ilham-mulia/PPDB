
<html lang="en">
<head>
  <!-- meta ini sebagai responsive pada tampilan sajo lahh  -->
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>HASIL</title>

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
      <a href="#" class="brand-logo">PPDB</a>
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


  <?php
  $no = 0;
  foreach ($data as $tampil) { // $data di ambil dari home.php dan $tampil hanya sebuah variable baru
    $no++;
  ?>

  <div class="container">
      <div class="row">
        <div class="col s12">
            <div id="right" class="section scrollspy">
              <h4>Tampilan Atas Nama <u><?php echo $tampil->nama; ?></u></h4>
            </div>
            <div class="col s12">
              <h5><u>Data Diri</u></h5>
              <table class=" highlight striped">
              <tbody>
                <tr>
                      <th>Foto</th>
                      <td><img src="<?php echo base_url('gambar/').$tampil->gbr1?>"width="110" height="140" /></td>
                </tr>
              <tr>
                  <th>Nama</th>
                  <td><?php echo $tampil->nama; ?></td>
              </tr>
              <tr>
                <th>NISN</th>
                <td><?php echo $tampil->nisn; ?></td>
              </tr>
              <tr>
                <th>Tempat Lahir</th>
                <td><?php echo $tampil->tmp_lahir; ?></td>
              </tr>
              <tr>
                <th>Tanggal Lahir</th>
                <td><?php echo $tampil->tgl_lahir; ?></td>
              </tr>
                <tr>
                  <th>Jenis Kelamin</th>
                  <td><?php echo $tampil->kelamin; ?></td>
                </tr>
                <tr>
                  <th>NIK</th>
                  <td><?php echo $tampil->nik; ?></td>
                </tr>
                <tr>
                  <th>Agama</th>
                  <td><?php echo $tampil->agama; ?></td>
                </tr>
                <tr>
                  <th>Alamat</th>
                  <td><?php echo $tampil->alamat; ?></td>
                </tr>
                <tr>
                  <th>Asal Sekolah</th>
                  <td><?php echo $tampil->asal_sekolah; ?></td>
                </tr>
            </tbody>
          </table>
            </div>

            <div class="col s12">
              <br><br>
              <h5><u>Prodi Yang Di Pilih</u></h5>
              <table class=" highlight striped">
              <tbody>
              <tr>
                  <th>Prodi Pertama</th>
                  <td><?php echo $tampil->prodi1; ?></td>
              </tr>
              <tr>
                <th>Prodi Kedua</th>
                <td><?php echo $tampil->prodi2; ?></td>
              </tr>
            </tbody>
          </table>
            </div>

            <div class="col s12">
              <br><br>
              <h5><u>Nilai Semester IPA</u></h5>
              <table class=" highlight striped">
              <tbody>
              <tr>
                  <th>IPA Semester 1</th>
                  <td><?php echo $tampil->ipa1; ?></td>
              </tr>
              <tr>
                <th>IPA Semester 2</th>
                <td><?php echo $tampil->ipa2; ?></td>
              </tr>
              <tr>
                  <th>IPA Semester 3</th>
                  <td><?php echo $tampil->ipa3; ?></td>
              </tr>
              <tr>
                <th>IPA Semester 4</th>
                <td><?php echo $tampil->ipa4; ?></td>
              </tr>
              <tr>
                  <th>IPA Semester 5</th>
                  <td><?php echo $tampil->ipa5; ?></td>
              </tr>
            </tbody>
          </table>
            </div>

            <div class="col s12">
              <br><br>
              <h5><u>Nilai Semester Matematika</u></h5>
              <table class=" highlight striped">
              <tbody>
              <tr>
                  <th>Matematika Semester 1</th>
                  <td><?php echo $tampil->mtk1; ?></td>
              </tr>
              <tr>
                <th>Matematika Semester 2</th>
                <td><?php echo $tampil->mtk2; ?></td>
              </tr>
              <tr>
                  <th>Matematika Semester 3</th>
                  <td><?php echo $tampil->mtk3; ?></td>
              </tr>
              <tr>
                <th>Matematika Semester 4</th>
                <td><?php echo $tampil->mtk4; ?></td>
              </tr>
              <tr>
                  <th>Matematika Semester 5</th>
                  <td><?php echo $tampil->mtk5; ?></td>
              </tr>
            </tbody>
          </table>
            </div>

            <div class="col s12">
              <br><br>
              <h5><u>Nilai Semester B.Indonesia</u></h5>
              <table class=" highlight striped">
              <tbody>
              <tr>
                  <th>B.Indonesia Semester 1</th>
                  <td><?php echo $tampil->indo1; ?></td>
              </tr>
              <tr>
                <th>B.Indonesia Semester 2</th>
                <td><?php echo $tampil->indo2; ?></td>
              </tr>
              <tr>
                  <th>B.Indonesia Semester 3</th>
                  <td><?php echo $tampil->indo3; ?></td>
              </tr>
              <tr>
                <th>B.Indonesia Semester 4</th>
                <td><?php echo $tampil->indo4; ?></td>
              </tr>
              <tr>
                  <th>B.Indonesia Semester 5</th>
                  <td><?php echo $tampil->indo5; ?></td>
              </tr>

            </tbody>
          </table>
          <br><br>
            </div>

            <div class="col s12">
              <br><br>
              <h5><u>Status</u></h5>
              <table class=" highlight striped">
              <tbody>
              <tr>
                  <th>Status Lulus / Tidak Lulus</th>
                  <td><i class="btn pulse"><?php echo $tampil->status; ?></i></td>
              </tr>
            </tbody>
          </table>
          <br><br>
            </div>





          </div>
      </div>
  </div>
  <?php
      }
      ?>


<div class="container">
  <div class="row">
    <div class="col s12"><br>
      <a href="<?php echo base_url('index.php/home/hasil') ?>" class="btn"> Kembali</a>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="<?php echo base_url('materialize/js/materialize.js')?>"></script>
<script src="<?php echo base_url('materialize/js/materialize.min.js')?>"></script>
<!-- scrip ini sebagai js all-->
<script src="<?php echo base_url('materialize/js/init.js')?>"></script>

<script>
$(document).ready(function(){
  $('.button-collapse').sideNav();
  $('.datepicker').pickadate({

  });
});
</script>
<script>

$(document).ready(function() {
$('select').material_select();
});

</script>
</body>
</html>
