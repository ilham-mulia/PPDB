<?php include 'header.php'; ?>

<div class="container">
    <div class="row">
      <div class="col s12 offset-m1 l12 offset-l2">
          <div id="right" class="section scrollspy">
          </div>
          <div class="col s12">
            <h5><u>Pengaturan Setting</u></h5>
            <p>
              Disini Anda Bisa Ubah Username, Email Dan Password
            </p>
            <br>
            <form class="" action="<?php echo base_url('index.php/member/setting/edit/'.$data->id); ?>" method="post">
              <div class="row">
                <div class="input-field col s12">
                  <i class="material-icons prefix">person</i>
                  <input id="icon_prefix" type="text" class="validate" name="username" value="<?= $data->username; ?>">
                  <label for="icon_prefix" data-success="Benar!">*Username</label>
                </div>
              </div>

              <div class="row">
                <div class="input-field col s12">
                  <i class="material-icons prefix">email</i>
                  <input type="email" name="email" value="<?= $data->email; ?>" class="validate" id="icon_prefix">
                  <label for="icon_prefix" data-success="Benar!" data-error="Email Salah!">Email</label>
                </div>
              </div>

              <div class="row">
                <div class="input-field col s12">
                  <i class="material-icons prefix">lock</i>
                  <input type="password" name="password" value="" class="validate" id="icon_prefix" required="">
                  <label for="icon_prefix" data-success="Benar!">Password</label>
                </div>
              </div>

              <div class="row">
                <div class="input-filed col s12">
                    <input type="submit" name="simpan3" value="Simpan" class="btn light-blue">
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


    })

  </script>
  </body>
</html>
