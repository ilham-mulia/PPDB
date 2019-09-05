<?php
foreach ($data as $tampil) {
  ?>


<footer class=" light-blue page-footer" class="">
  <div class="container">
    <div class="row">

      <div class="col s4">
        <h5><u>About</u></h5>
        <p>
            <?php echo $tampil->about; ?>
        </p>
      </div>

      <div class="col s4">

          <h5><u>Informasi</u></h5>
          <p>
              <?php echo $tampil->informasi; ?>
          </p>

      </div>
      <div class="col s4">
        <h5><u>Alamat</u></h5>
        <p>
            <?php echo $tampil->alamat; ?>
        </p>
      </div>

    </div>
  </div>

  <div class="footer-copyright">
    <div class="container">
     <?php echo $tampil->pemilik; ?> &copy; 2017
      <a class="grey-text text-lighten-4 right" href=""><?php echo $tampil->pemilik; ?></a>
    </div>

  </div>

</footer>
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
</script>
<script>

$(document).ready(function() {
  $('select').material_select();
});

</script>
  </body>
</html>
<?php } ?>
