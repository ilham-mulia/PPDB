<?php include 'header.php'; ?>

<div class="container">
    <div class="row">
      <div class="col s12 offset-m1 l12 offset-l2">
          <div id="right" class="section scrollspy">
            <h2>Selamat Datang Siswa <u><?= $data->nama; ?></u></h2>
            <p>
              Hello semuanya, selamat datang di Website Penerimaan Perserta siswa baru 2018 SMKN 2 Guguak,
              di mohon kepada semua siswa yang ingin mendaftar agar segera melengkapi data diri yang telah di camtumkan di
              bawah ini agar cepat di isi :
            </p>
            <a href="#modal1" class="waves-effect btn modal-trigger">Tutorial Mengisi Data</a>
            <div class="modal modal-fixed-footer"id="modal1">
              <div class="modal-content">
                <h4>Tutorial Daftar</h4>
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
          <div class="col s12">
            <h5><u>Data Diri</u></h5>
            <table class=" highlight striped">
            <tbody>
            <tr>
                  <th>Foto</th>
                  <td><img src="<?php echo base_url('gambar/').$data->gbr1?>"width="110" height="140" /></td>
            </tr>
            <tr>
                <th>Nama</th>
                <td><?= $data->nama; ?></td>
            </tr>
            <tr>
              <th>NISN</th>
              <td><?= $data->nisn; ?></td>
            </tr>
            <tr>
              <th>Tempat Lahir</th>
              <td><?= $data->tmp_lahir; ?></td>
            </tr>
            <tr>
              <th>Tanggal Lahir</th>
              <td><?= $data->tgl_lahir; ?></td>
            </tr>
              <tr>
                <th>Jenis Kelamin</th>
                <td><?= $data->kelamin; ?></td>
              </tr>
              <tr>
                <th>NIK</th>
                <td><?= $data->nik; ?></td>
              </tr>
              <tr>
                <th>Agama</th>
                <td><?= $data->agama; ?></td>
              </tr>
              <tr>
                <th>Alamat</th>
                <td><?= $data->alamat; ?></td>
              </tr>
              <tr>
                <th>Asal Sekolah</th>
                <td><?= $data->asal_sekolah; ?></td>
              </tr>
          </tbody>
        </table>
          </div>

          <div class="col s12">
            <br><br>
            <h5><u>Prodi Yang Di Pilih</u></h5>
            <table class=" highlight striped">
            <tbody>
            <tr>
                <th>Prodi Pertama</th>
                <td><?= $data->prodi1; ?></td>
            </tr>
            <tr>
              <th>Prodi Kedua</th>
              <td><?= $data->prodi2; ?></td>
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
                <td><?= $data->ipa1; ?></td>
            </tr>
            <tr>
              <th>IPA Semester 2</th>
              <td><?= $data->ipa2; ?></td>
            </tr>
            <tr>
                <th>IPA Semester 3</th>
                <td><?= $data->ipa3; ?></td>
            </tr>
            <tr>
              <th>IPA Semester 4</th>
              <td><?= $data->ipa4; ?></td>
            </tr>
            <tr>
                <th>IPA Semester 5</th>
                <td><?= $data->ipa5; ?></td>
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
                <td><?= $data->mtk1; ?></td>
            </tr>
            <tr>
              <th>Matematika Semester 2</th>
              <td><?= $data->mtk2; ?></td>
            </tr>
            <tr>
                <th>Matematika Semester 3</th>
                <td><?= $data->mtk3; ?></td>
            </tr>
            <tr>
              <th>Matematika Semester 4</th>
              <td><?= $data->mtk4; ?></td>
            </tr>
            <tr>
                <th>Matematika Semester 5</th>
                <td><?= $data->mtk5; ?></td>
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
                <td><?= $data->indo1; ?></td>
            </tr>
            <tr>
              <th>B.Indonesia Semester 2</th>
              <td><?= $data->indo2; ?></td>
            </tr>
            <tr>
                <th>B.Indonesia Semester 3</th>
                <td><?= $data->indo3; ?></td>
            </tr>
            <tr>
              <th>B.Indonesia Semester 4</th>
              <td><?= $data->indo4; ?></td>
            </tr>
            <tr>
                <th>B.Indonesia Semester 5</th>
                <td><?= $data->indo5; ?></td>
            </tr>

          </tbody>
        </table>
        <br><br>
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
