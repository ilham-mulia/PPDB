<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('edit_m');

  }

  private function __cegah()
  {
    if($this->session->userdata('level')!=1)
    {
      $this->session->sess_destroy();
      redirect(base_url());
    }
  }


  function index(){
    $this->__cegah();

    $id = $this->session->userdata('id');
    $data['data'] = $this->edit_m->getme($id);
    $this->load->view('member/index', $data);
  }

  function datadiri(){
    $this->__cegah();

    $id = $this->session->userdata('id');
    $data['data'] = $this->edit_m->getme($id);
    $this->load->view('member/data_diri', $data);


    if (@$_POST['simpan']) {
      $data = array(
        'nama' => $this->input->post('nama'),
        'nisn' => $this->input->post('nisn'),
        'tmp_lahir' => $this->input->post('tmp_lahir'),
        'tgl_lahir' => $this->input->post('tgl_lahir'),
        'kelamin' => $this->input->post('kelamin'),
        'nik' => $this->input->post('nik'),
        'agama' => $this->input->post('agama'),
        'alamat' => $this->input->post('alamat'),
        'asal_sekolah' => $this->input->post('asal_sekolah'),
      );
      $simpan = $this->edit_m->ubah($id,$data);
      if ($simpan) {
        echo '<script>alert("Berhasil Di Ubah")</script>';
        redirect(base_url('index.php/member/'),'refresh');
      }
    }
  }

  function prodi(){
    $this->__cegah();

    $id = $this->session->userdata('id');
    $data['data'] = $this->edit_m->getme($id);
    $this->load->view('member/prodi', $data);
    if (@$_POST['simpan1']) {
      $data = array(
        'prodi1' => $this->input->post('prodi1'),
        'prodi2' => $this->input->post('prodi2'),

      );
      $simpan = $this->edit_m->ubah($id,$data);
      if ($simpan) {
        echo '<script>alert("Berhasil Di Ubah")</script>';
        redirect(base_url('index.php/member/'),'refresh');
      }
    }
  }


  function setting(){
    $this->__cegah();

    $id = $this->session->userdata('id');
    $data['data'] = $this->edit_m->getme($id);
    $this->load->view('member/setting', $data);
    if (@$_POST['simpan3']) {
      $data = array(
        'username' => $this->input->post('username'),
        'email' => $this->input->post('email'),
        'password' => md5($this->input->post('password')),

      );
      $simpan = $this->edit_m->ubah($id,$data);
      if ($simpan) {
        echo '<script>alert("Berhasil Di Ubah")</script>';
        redirect(base_url('index.php/member/'),'refresh');
      }
    }
  }

  function nilai(){
    $this->__cegah();

    $id = $this->session->userdata('id');
    $data['data'] = $this->edit_m->getme($id);
    $this->load->view('member/nilai', $data);

    if (@$_POST['simpan2']) {
      $data = array(
        'ipa1' => $this->input->post('ipa1'),
        'ipa2' => $this->input->post('ipa2'),
        'ipa3' => $this->input->post('ipa3'),
        'ipa4' => $this->input->post('ipa4'),
        'ipa5' => $this->input->post('ipa5'),

        'mtk1' => $this->input->post('mtk1'),
        'mtk2' => $this->input->post('mtk2'),
        'mtk3' => $this->input->post('mtk3'),
        'mtk4' => $this->input->post('mtk4'),
        'mtk5' => $this->input->post('mtk5'),

        'indo1' => $this->input->post('indo1'),
        'indo2' => $this->input->post('indo2'),
        'indo3' => $this->input->post('indo3'),
        'indo4' => $this->input->post('indo4'),
        'indo5' => $this->input->post('indo5'),


      );
      $simpan = $this->edit_m->ubah($id,$data);
      if ($simpan) {
        echo '<script>alert("Berhasil Di Ubah")</script>';
        redirect(base_url('index.php/member/'),'refresh');
      }
    }

  }

  function status(){
    $this->__cegah();

    $id = $this->session->userdata('id');
    $data['data'] = $this->edit_m->getme($id);
    $this->load->view('member/status', $data);
  }

  function file(){
    $this->__cegah();

    $id = $this->session->userdata('id');
    $data['data'] = $this->edit_m->getme($id);
    $this->load->view('member/file', $data);

if (@$_POST['simpangbr']) {
      $config['upload_path']='./gambar/';  //gambar
      $config['file_name'] = time().'.jpg'; //gambar
      $gambar = $config['file_name']; //gambar
      $config['allowed_types']='jpg|png';//gambar
      $this->load->library('upload',$config);//gambar

      if ($this->upload->do_upload('gbr1')) {//gambar
      $data = array(
        'gbr1'=> $gambar,
      );
    }
      $simpan = $this->edit_m->ubah($id,$data);
      if ($simpan) {
        echo '<script>alert("Berhasil Di Ubah")</script>';
        redirect(base_url('index.php/member/'),'refresh');
      }
    }
  }


  function logout(){
    $this->load->view('member/logout.php');
  }

}?>
