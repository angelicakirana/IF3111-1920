<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 *
 */
class Mahasiswa extends CI_Controller
{

public function index()
{
    $this->load->view('buatlapor');
}

function masuk()
{
  $nim = $this->input->post('nim');
  $where = array('nim' => $nim );
  $user_id = $this->guest_model->cek_akun("mahasiswa",$where)->num_rows();
  if ($user_id > 0) {
    $this->session->set_flashdata('daftar', 'Berhasil Masuk!');
    redirect('mahasiswa');
  } else {
    $this->session->set_flashdata('daftar', 'Gagal Masuk!');
    redirect('guest');
  }
}



}






 ?>
