<?php include 'header.php'; ?>



<script src="<?php echo base_url('ckeditor/ckeditor.js'); ?>">
  </script>
<div class="container">
    <div class="row">
      <div class="col s12 offset-m1 l12 offset-l2">
              <h4>Edit Config Setting website</h4> <br>
          <form class="" action="" method="post">
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">person</i>
                <input id="icon_prefix" type="text" class="validate" name="judul" value="<?php echo $data->judul ?>">
                <label for="icon_prefix" data-success="Benar!">Judul Website</label>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-12">
  	             <textarea name="text_home" class="ckeditor" name="editor"><?php echo $data->text_home ?></textarea>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-12">
  	             <textarea name="text_pengumuman" class="ckeditor" name="editor"><?php echo $data->text_pengumuman ?></textarea>
              </div>
            </div>

            <div class="row">
              <div class="input-field col s12">
                  <i class="material-icons prefix">location_on</i>
                <textarea class="materialize-textarea" name="about" id="icon_prefix" required=""><?php echo $data->about ?></textarea>
                <label for="icon_prefix">About</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col s12">
                  <i class="material-icons prefix">location_on</i>
                <textarea class="materialize-textarea" name="informasi" id="icon_prefix" required=""><?= $data->informasi; ?></textarea>
                <label for="icon_prefix">Informasi</label>
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
              <div class="input-field col s12">
                <i class="material-icons prefix">person</i>
                <input id="icon_prefix" type="text" class="validate" name="pemilik" value="<?= $data->pemilik; ?>" required="">
                <label for="icon_prefix">Pemilik</label>
              </div>
            </div>






              <input type="submit" name="submit00" value="Ubah" class="btn btn-primary">
          </form>


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
