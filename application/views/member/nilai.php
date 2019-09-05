<?php include 'header.php'; ?>

<div class="container">
    <div class="row">
      <div class="col s12 offset-m1 l12 offset-l2">
          <div id="right" class="section scrollspy">
          </div>
          <div class="col s12">
            <h5><u>Nilai Semester</u></h5>
            <form class="" action="<?php echo base_url('index.php/member/nilai/edit/'.$data->id); ?>" method="post">
              <div class="row">
                <div class="input-field col s2">
                  <h5>Semester 1</h5>
                </div>
                <div class="input-field col s2">
                  <h5>Semester 2</h5>
                </div>
                <div class="input-field col s2">
                  <h5>Semester 3</h5>
                </div>
                <div class="input-field col s2">
                  <h5>Semester 4</h5>
                </div>
                <div class="input-field col s2">
                  <h5>Semester 5</h5>
                </div>
                <br>
              </div>


              <div class="row">
                <div class="input-field col s2">
                  <input type="NUMBER" class="validate" name="ipa1" value="<?= $data->ipa1; ?>" size="3">
                  <label data-success="Benar!">IPA Semester 1</label>
                </div>
                <div class="input-field col s2">
                  <input type="NUMBER" class="validate" name="ipa2" value="<?= $data->ipa2; ?>" size="3">
                  <label data-success="Benar!">IPA Semester 2</label>
                </div>
                <div class="input-field col s2">
                  <input type="NUMBER" class="validate" name="ipa3" value="<?= $data->ipa3; ?>" size="3">
                  <label data-success="Benar!">IPA Semester 3</label>
                </div>
                <div class="input-field col s2">
                  <input type="NUMBER" class="validate" name="ipa4" value="<?= $data->ipa4; ?>" size="3">
                  <label data-success="Benar!">IPA Semester 4</label>
                </div>
                <div class="input-field col s2">
                  <input type="NUMBER" class="validate" name="ipa5" value="<?= $data->ipa5; ?>" size="3">
                  <label data-success="Benar!">IPA Semester 5</label>
                </div>
              </div>

              <div class="row">
                <div class="input-field col s2">
                  <input type="NUMBER" class="validate" name="mtk1" value="<?= $data->mtk1; ?>">
                  <label data-success="Benar!">Matematika Semester 1</label>
                </div>
                <div class="input-field col s2">
                  <input type="NUMBER" class="validate" name="mtk2" value="<?= $data->mtk2; ?>">
                  <label data-success="Benar!">Matematika Semester 2</label>
                </div>
                <div class="input-field col s2">
                  <input type="NUMBER" class="validate" name="mtk3" value="<?= $data->mtk3; ?>">
                  <label data-success="Benar!">Matematika Semester 3</label>
                </div>
                <div class="input-field col s2">
                  <input type="NUMBER" class="validate" name="mtk4" value="<?= $data->mtk4; ?>">
                  <label data-success="Benar!">Matematika Semester 4</label>
                </div>
                <div class="input-field col s2">
                  <input type="NUMBER" class="validate" name="mtk5" value="<?= $data->mtk5; ?>">
                  <label data-success="Benar!">Matematika Semester 5</label>
                </div>
              </div>

              <div class="row">
                <div class="input-field col s2">
                  <input type="NUMBER" class="validate" name="indo1" value="<?= $data->indo1; ?>">
                  <label data-success="Benar!">B.Indonesia Semester 1</label>
                </div>
                <div class="input-field col s2">
                  <input type="NUMBER" class="validate" name="indo2" value="<?= $data->indo2; ?>">
                  <label data-success="Benar!">B.Indonesia Semester 2</label>
                </div>
                <div class="input-field col s2">
                  <input type="NUMBER" class="validate" name="indo3" value="<?= $data->indo3; ?>">
                  <label data-success="Benar!">B.Indonesia Semester 3</label>
                </div>
                <div class="input-field col s2">
                  <input type="NUMBER" class="validate" name="indo4" value="<?= $data->indo4; ?>">
                  <label data-success="Benar!">B.Indonesia Semester 4</label>
                </div>
                <div class="input-field col s2">
                  <input type="NUMBER" class="validate" name="indo5" value="<?= $data->indo5; ?>">
                  <label data-success="Benar!">B.Indonesia Semester 5</label>
                </div>
              </div>



              <div class="row">
                <div class="input-filed col s12">

                    <input type="submit" name="simpan2" value="simpan" class="btn light-blue">


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
