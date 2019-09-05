<?php include 'header.php'; ?>





<div class="container">
    <div class="row">
      <div class="col s12 offset-m1 l12 offset-l2">

        <h4>Setting Config Website</h4>

        <table class="bordered  responsive-table">
        <tbody>
        <thead>
        <tr>
            <th>Judul</th>
            <th>Home</th>
            <th>Pengumuman</th>
            <th>About</th>
            <th>Informasi</th>
            <th>Alamat</th>
            <th>Pemilik</th>
            <th>
              Aksi
            </th>
        </tr>
      </thead>
          <?php

          foreach ($data as $tampil) { // $data di ambil dari home.php dan $tampil hanya sebuah variable baru

          ?>
        <tr>
          <td><?php echo $tampil->judul; ?></td>
          <td><?php echo $tampil->text_home; ?></td>
          <td><?php echo $tampil->text_pengumuman; ?></td>
          <td><?php echo $tampil->about; ?></td>
          <td><?php echo $tampil->informasi; ?></td>
          <td><?php echo $tampil->alamat; ?></td>
          <td><?php echo $tampil->pemilik; ?></td>
          <td>
            <a class="btn btn-floating btn-large cyan pulse" href="<?php echo base_url('index.php/admin/config_edit/').$tampil->id;?>"><i class="material-icons">edit</i></a>

          </td>
        </tr>
        <?php
            }

            ?>
      </tbody>
    </table>


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
