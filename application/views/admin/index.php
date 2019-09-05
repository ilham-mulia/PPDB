<?php include 'header.php'; ?>

<div class="container">
    <div class="row">
      <div class="col s12 offset-m2 l12 offset-l2">
            <h1>Welcome Admin</h1>
            <p>
              Selamat Datang Di Halaman Admin, kalau anda admin baru, anda bisa membaca ketentuan ini agar anda bisa
              memahami fitu-fitur yang ada di dalam website ini. <br>Di buat Oleh <u>&copy; Ilham Mulia </u>. <br> Situs Resmi : <a href="Www.Mintailmu.com">Www.Mintailmu.com</a>
            </p>

            <a href="#modal1" class="waves-effect btn modal-trigger">Wajib Baca</a>
            <div class="modal modal-fixed-footer"id="modal1">
              <div class="modal-content">
                <h4>Harap Baca</h4>
                <div class="col s12">
                  <table class=" highlight striped">
                  <tbody>
                    <thead>
                  <tr>
                      <th>Halaman</th>
                      <th>Keterangan</th>
                  </tr>
                    </thead>
                  <tr>
                    <th>Home</th>
                    <td>Halaman Depan Pada Menu Admin</td>
                  </tr>
                  <tr>
                    <th>Data Siswa</th>
                    <td>Data Semua Siswa Yang Mendafatar(Kita bisa melakukan aksi lulus/tidak lulus siswa tersebut)</td>
                  </tr>
                  <tr>
                    <th>Setting Pendaftaran</th>
                    <td>Cuma menu , di dalamnya ada menu prodi,agama dan status</td>
                  </tr>
                    <tr>
                      <th>Prodi</th>
                      <td>Di gunakan untuk menambah prodi yang kita ingin masukan</td>
                    </tr>
                    <tr>
                      <th>Agama</th>
                      <td>Di gunakan untuk menambah agama yang lupa di masukan</td>
                    </tr>
                    <tr>
                      <th>Status</th>
                      <td>Di gunakan untuk menambah staus yang yang kita inginkan ex(lulus,tidak lulus dll)</td>
                    </tr>
                    <tr>
                      <th>Setting Website</th>
                      <td>Di gunakan untuk mengubah bentuk / isi pada website ini</td>
                    </tr>
                    <tr>
                      <th>Setting Akun</th>
                      <td>Di gunakan untuk menukar informasi pada akun yang login sekarang ex(ubah,username,email,password dll)</td>
                    </tr>
                </tbody>
              </table>
                </div>
              </div>
              <div class="modal-footer">
                <a href="#!" class="modal-action modal-close btn flag">Tutup</a>
              </div>
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

  </script>
  </body>
</html>
