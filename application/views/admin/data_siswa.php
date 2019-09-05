<?php include 'header.php' ?>


<div class="container">
    <div class="row">
      <div class="col s12 offset-m1 l12 offset-l2">

      <div class="col s12">
        <br><br>
        <h5 style="margin-bottom:-8%;"><u>Status Lulus/tidak Siswa</u></h5>
        <form class="" action="" method="post">
          <form class="" action="<?php echo base_url(); ?>" method="post"><br>
            <div class="row right" >
              <div class="input-field col 4" >
                <i class="material-icons prefix">search</i>
                <input id="icon_prefix" type="text" class="validate" name="key" style="margin-bottom:-8%;">
                <label for="icon_prefix">Cari</label>
              </div>
              <div class="col 4">
                <input type="submit" name="" value="search" class="btn light-blue"style="margin-top:20%;" >
              </div>

            </div>
        </form>
        <table class="bordered striped highlight responsive">
        <tbody>
        <thead>
        <tr>
          <th>No</th>
            <th>Nama</th>
            <th>NISN</th>
            <th>Pilihan Prodi 1</th>
            <th>Pilihan Prodi 2</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
      </thead>
          <?php
          $no = 0;
          foreach ($data as $tampil) { // $data di ambil dari home.php dan $tampil hanya sebuah variable baru
            $no++;
          ?>
        <tr>
          <td>
            <?php echo $no; ?>
          </td>
          <td><?php echo $tampil->nama; ?></td>
          <td><?php echo $tampil->nisn; ?></td>
          <td><?php echo $tampil->prodi1; ?></td>
          <td><?php echo $tampil->prodi2; ?></td>
          <td><?php echo $tampil->status; ?></td>
          <td>
            <a href="<?php echo base_url('index.php/admin/lihat/').$tampil->id?>" title="Lihat Data"><i class="material-icons prefix">remove_red_eye</i></a>
            <a href="<?php echo base_url('index.php/admin/edit/').$tampil->id?>"  title="Edit Status"><i class="material-icons prefix">update</i></a>
            <a href="<?php echo base_url('index.php/admin/hapus/').$tampil->id?>" onclick="return confirm('Apakah anda ingin Menghapus Data ini?')" title="Hapus Data"><i class="material-icons prefix">delete</i></a>
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
      $('.modal').modal({

      });

      $('.datepicker').pickadate({

      });


    });
    $(document).ready(function() {
        $('select').material_select();
      });

  </script>
  </body>
</html>
