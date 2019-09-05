<?php include 'header.php'; ?>

<div class="container">
    <div class="row">
      <div class="col s12 offset-m1 l12 offset-l2">
          <div id="right" class="section scrollspy">
          </div>
          <div class="col s12">
            <h5><u>Prodi</u></h5>
            <br>
            <form class="" action="<?php echo base_url('index.php/member/prodi/edit/'.$data->id); ?>" method="post">
              <div class="row">
                <div class="input-field col s12">
                  <i class="material-icons prefix">school</i>
                  <?php
                  include 'database.php';
                  echo "
                  <select name='prodi1' id='pilih'  required>
                  <option value='' selected disabled >Pilih Prodi Pertama</option>";
                  $pil2=mysqli_query($koneksi,"select * from prodi");
                  while($j=mysqli_fetch_array($pil2)){
                  echo "<option value='$j[nama]'>$j[nama]</option>";
                  }
                  echo "</select>";
                  ?>
                </div>
              </div>

              <div class="row">
                <div class="input-field col s12">
                  <i class="material-icons prefix">school</i>
                  <?php
                  include 'database.php';
                  echo "
                  <select name='prodi2' id='pilih'  required>
                  <option value='' selected disabled >Pilih Prodi Kedua</option>";
                  $pil2=mysqli_query($koneksi,"select * from prodi");
                  while($j=mysqli_fetch_array($pil2)){
                  echo "<option value='$j[nama]'>$j[nama]</option>";
                  }
                  echo "</select>";
                  ?>
                </div>
              </div>

              <div class="row">
                <div class="input-filed col s12">

                    <input type="submit" name="simpan1" value="simpan" class="btn light-blue">


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


    });  $(document).ready(function() {
        $('select').material_select();
      });

  </script>
  </body>
</html>
