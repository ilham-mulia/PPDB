<?php include 'header.php'; ?>

<div class="container">
    <div class="row">
      <div class="col s12 offset-m1 l12 offset-l2">
          <div id="right" class="section scrollspy">
            <h1>Hello <u><?= $data->nama; ?></u></h1>
            <p>
              Di halaman ini anda bisa bisa meng-cek apa kah anda di terima atau tidaknya <br>
              Tunggu Proses Admin 1-6 hari.

            </p>
          </div>
          <div class="col s12">
            <h5><u>Data Diri</u></h5>
            <table class=" highlight striped">
            <tbody>
            <tr>
                <th>Nama</th>
                <td><?= $data->nama; ?></td>
            </tr>
            <tr>
              <th>NISN</th>
              <td><?= $data->nisn; ?></td>
            </tr>
              <tr>
                <th>NIK</th>
                <td><?= $data->nik; ?></td>
              </tr>
              <tr>
                <th>Status Diterima / Tidak</th>
                <td><i class="btn pulse"><?= $data->status; ?></i></td>
              </tr>



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
      $('.datepicker').pickadate({

      });


    })

  </script>
  </body>
</html>
