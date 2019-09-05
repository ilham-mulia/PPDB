<?php include 'header.php'; ?>


<div class="container">
    <div class="row">
      <div class="col s12 offset-m1 l12 offset-l2">
        <div id="right" class="section scrollspy">
          <h5>Edit Status Lulus / Tidak Lulus, Siswa Atas Nama <u><?php echo $tampil->nama; ?></u></h5>
        </div>
        <div class="col s12">
          <h5><u>Data Rinci</u></h5>
          <table class=" highlight striped">
          <tbody>
          <tr>
              <th>Nama</th>
              <td><?php echo $tampil->nama; ?></td>
          </tr>
          <tr>
            <th>NISN</th>
            <td><?php echo $tampil->nisn; ?></td>
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
              <th>Edit status Lulu / Tidak Lulus</th>
              <td>
                <form class="" action="" method="post">
                <?php
                include 'database.php';
                echo "
                <select name='status'>
                <option value=''selected disabled>Sedang Di Proses</option>";
                $pil2=mysqli_query($koneksi,"select * from status");
                while($j=mysqli_fetch_array($pil2)){
                echo "<option value='$j[nama]'>$j[nama]</option>";
                }
                echo "</select>";
                ?>
              </td>
          </tr>
          <tr>
            <td></td>
            <td>
              <input type="submit" name="submit22" value="Ubah" class="btn">
              </form>
            </td>
          </tr>
        </tbody>
      </table><br>
        </div>
<br><br><br><br><br><br>
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


    });$(document).ready(function() {
        $('select').material_select();
      });


  </script>
  </body>
</html>
