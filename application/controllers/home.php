<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('login_m');
    $this->load->model('daftar_m');
    $this->load->model('tampil_m');

  }

	public function index()
	{
  $data['data'] = $this->tampil_m->data_tampil()->result(); //fungsi dari array
  $this->load->view('index', $data);// buka dengan http://localhost/codeigniter/index.php/home/
	}
  public function pengumuman()
	{
  $data['data'] = $this->tampil_m->data_tampil()->result(); //fungsi dari array
  $this->load->view('pengumuman', $data);// buka dengan http://localhost/codeigniter/index.php/home/
	}
  public function hasil()
	{
  $data['data'] = $this->tampil_m->data_tampil()->result(); //fungsi dari array
  $this->load->view('hasil', $data);// buka dengan http://localhost/codeigniter/index.php/home/
	}
  public function hasildata()
	{

    $key = $this->input->post('key');
    $data ['data'] = $this->tampil_m->cari($key);
    $data1['data1'] = $this->tampil_m->data_tampil()->result();
    $this->load->view('hasil_data', $data, $data1);

	}

  public function footer()
  {
  $data['data'] = $this->tampil_m->data_tampil()->result(); //fungsi dari array
  $this->load->view('footer', $data);// buka dengan http://localhost/codeigniter/index.php/home/
  }

  function daftar(){
  if (@$_POST['submit']) {
    $data = array(
      'nama'=> $this->input->post('nama'),
      'email'=> $this->input->post('email'),
      'username'=> $this->input->post('username'), // kita ambil artibut dari database
      'password'=> md5($this->input->post('password')),
      'kelamin'=> $this->input->post('kelamin'),
    );
    $this->load->model('daftar_m');
    $simpan = $this->daftar_m->simpan($data);
    if ($simpan) {
      echo '<script>alert("Daftar Berhasil")</script>';
      redirect(base_url('index.php/home/login'),'refresh');

    }

  }else {
    $data['data'] = $this->tampil_m->data_tampil()->result(); //fungsi dari array
    $this->load->view('daftar', $data);// buka dengan http://localhost/codeigniter/index.php/home/
  }
}

public function login()
	{
    if(@$_POST['simpan'])
    {
      $username = $this->input->post('username');
      $password = md5($this->input->post('password'));
      $cek = $this->login_m->cek_user($username, $password);
      if($cek->num_rows()>0)
      {
        $sesi = array(
          'id' => $cek->row()->id,
          'username' => $cek->row()->username,
          'level' => $cek->row()->level,
        );
        $this->session->set_userdata($sesi);
        if($cek->row()->level==99)
        {
          redirect(base_url('index.php/admin'));
        }
        else {
          redirect(base_url('index.php/member'));
        }
      }
      else {
        echo '<script>alert("gagal Login nih")</script>';
        redirect(base_url('index.php/home/login'),'refresh');

      }
    }
    else
    {
      $data['data'] = $this->tampil_m->data_tampil()->result(); //fungsi dari array
      $this->load->view('login', $data);// buka dengan http://localhost/codeigniter/index.php/home/
    }

	}


}
