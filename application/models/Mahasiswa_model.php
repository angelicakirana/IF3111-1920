<?php

class Mahasiswa_model extends CI_Model
{

  function __construct()
  {
    $this->load->database();
  }

  function buatlaporan()
  {
    $data = [
              "nim"        => $this->input->post('nim', true),
              "hal"        => $this->input->post('hal', true),
              "lampiran"   => $this->input->post('lampiran', true),
              "cp"         => $this->input->post('cp', true),
              "status"     => "MENUNGGU"
            ];

    $this->db->insert('laporan', $data);
  }



}


 ?>
