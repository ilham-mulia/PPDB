<?php include 'header.php'; ?>




<div class="container">
    <div class="row">
      <div class="col s12 offset-m1 l12 offset-l2">
        <br>
        <div class="col s12">

          <h5><u>Prodi</u></h5>
          <br>
          <form class="" action="" method="post">
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">school</i>
                <input type="text" name="nama" value="">
              </div>
            </div>
            <div class="row">
              <div class="input-filed col s12">
                  <input type="submit" name="submitprodi" value="simpan" class="btn light-blue">
              </div>
            </div>
          </div>
            <div class="col s12">
              <table class=" highlight striped">
              <tbody>
                <thead>
              <tr>
                  <th>No</th>
                  <th>Prodi</th>
                  <th>
                    Aksi
                  </th>
              </tr>
                </thead>
                <?php
                $no = 0;
                foreach ($data as $tampil) {
                  $no++;
                ?>
              <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $tampil->nama; ?></td>
                <td>
                    <a href="<?php echo base_url('index.php/admin/delete/').$tampil->id;?>" onclick="return confirm('Apakah anda ingin Menghapus Data ini?')" title="Hapus Data"><i class="material-icons prefix">delete</i></a>
                </td>
              </tr>
              <?php
                }
              ?>
            </tbody>
          </table>
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
