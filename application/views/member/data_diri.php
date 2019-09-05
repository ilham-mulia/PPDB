<?php include 'header.php'; ?>

<div class="container">
    <div class="row">
      <div class="col s12 offset-m1 l12 offset-l2">
          <div id="right" class="section scrollspy">
          </div>
          <div class="col s12">
            <h5><u>Data Diri</u></h5>
            <br><br>
            <form class="" action="<?php echo base_url('index.php/member/datadiri/edit/'.$data->id); ?>" method="post" enctype="multipart/form-data">
              <div class="row">
                <div class="input-field col s12">
                  <i class="material-icons prefix">person</i>
                  <input id="icon_prefix" type="text" class="validate" name="nama" value="<?= $data->nama; ?>" required="">
                  <label for="icon_prefix">Nama</label>
                </div>
              </div>

              <div class="row">
                <div class="input-field col s12">
                  <i class="material-icons prefix">card_membership</i>
                  <input type="text" name="nisn" value="<?= $data->nisn; ?>" class="validate" id="icon_prefix" required="">
                  <label for="icon_prefix" data-success="Benar!">NISN</label>
                </div>
              </div>

              <div class="row">
                <div class="input-field col s12">
                  <i class="material-icons prefix">person_pin_circle</i>
                  <input type="text" name="tmp_lahir" value="<?= $data->tmp_lahir; ?>" class="validate" id="icon_prefix" required="">
                  <label for="icon_prefix" data-success="Benar!">Tempat Lahir</label>
                </div>
              </div>

              <div class="row">
                <div class="input-field col s6">
                  <i class="material-icons prefix">date_range</i>
                  <input type="date" name="tgl_lahir" value="<?= $data->tgl_lahir; ?>" class="datepicker" id="icon_prefix" required="">
                  <label for="icon_prefix">Tanggal Lahir</label>
                </div>
                <div class="col s6" style="margin-top:20px;">
                    <span><i class="material-icons prefix">people</i></span>
                  <input type="radio" name="kelamin" value="Laki-Laki" id="laki" required="">
                  <label for="laki">Laki-Laki</label>

                  <input type="radio" name="kelamin" value="Perempuan" id="perempuan">
                  <label for="perempuan">Perempuan</label>
                </div>
              </div>

              <div class="row">
                <div class="input-field col s12">
                  <i class="material-icons prefix">note</i>
                  <input type="text" name="nik" value="<?= $data->nik; ?>" class="validate" id="icon_prefix" required="">
                  <label for="icon_prefix" data-success="Benar!">Nik</label>
                </div>
              </div>


              <div class="row">
                <div class="input-field col s6">
                    <i class="material-icons prefix">flag</i>
                  <?php
                  include 'database.php';
                  echo "
                  <select name='agama' id='pilih'  required>
                  <option value='' selected  >Pilih Agama</option>";
                  $pil2=mysqli_query($koneksi,"select * from agama");
                  while($j=mysqli_fetch_array($pil2)){
                  echo "<option value='$j[nama]'>$j[nama]</option>";
                  }
                  echo "</select>";
                  ?>
               </div>
                <div class="input-field col s6">
                  <i class="material-icons prefix">school</i>
                  <input type="text" name="asal_sekolah" value="<?= $data->asal_sekolah; ?>" class="validate" id="icon_prefix" required="">
                  <label for="icon_prefix" data-success="Benar!">Asal Sekolah</label>
                </div>
              </div>

              <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">location_on</i>
                  <textarea class="materialize-textarea" name="alamat" id="icon_prefix" required=""><?= $data->alamat; ?></textarea>
                  <label for="icon_prefix">Alamat</label>
                </div>
              </div>

              <div class="row">
                <div class="col s12 l5 offset-m2">
                <p>
                  <input type="checkbox" id="test5" required=""/>
                  <label for="test5">Apakah Data Anda Sudah Benar.? <br>
                     Kalau Sudah Tekan Enter</label>
                </p>
                </div>
              </div>

              <div class="row">
                <div class="input-filed col s12">
<input type="submit" name="simpan" value="simpan" class="btn light-blue">



                </div>
              </div>
            </div>


            </div>

            </form>
          </div>

        </div>
    </div>
</div>


    <!--  Scripts-->
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
    $(document).ready(function() {
      $('select').material_select();
    });

  </script>
  </body>
</html>
