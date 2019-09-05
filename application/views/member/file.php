<?php include 'header.php'; ?>

<div class="container">
    <div class="row">
      <div class="col s12 offset-m1 l12 offset-l2">
          <div id="right" class="section scrollspy">
          </div>
          <div class="col s12">
            <h5><u>Upload Foto</u></h5>
            <br><br>
            <form class="" action="<?php echo base_url('index.php/member/file/edit/'.$data->id); ?>" method="post" enctype="multipart/form-data">
              <div class="row">
                <div class="input-field col s12">
                  <div class="file-field">
                    <div class="btn">
                      <span>Foto Siswa</span>
                      <input type="file" multiple name="gbr1">
                    </div>
                    <div class="file-path-wrapper">
                      <input class="file-path validate" type="text" placeholder="Upload Foto Siwa *Wajib">
                            <td><img src="<?php echo base_url('gambar/').$data->gbr1?>"width="110" height="140" /></td>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="input-filed col s12">
                  <input type="submit" name="simpangbr" value="simpan" class="btn light-blue">



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
