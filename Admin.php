<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 *
 */
class Admin extends CI_Controller
{	
		public function __construct(){
			parent::__construct();
			$this->load->model('Admin_model');
		}


public function index()
{
  $data['admin']=$this->Admin_model->get_all_admin();
  // $this->load->view('admin/login');

$this->load->helper(array('form', 'url'));

                $this->load->library('form_validation');
                $this->form_validation->set_rules('username', 'Username', 'required');
$this->form_validation->set_rules('password', 'Password', 'required');

                if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('admin/login');
                }
                else
                {
                        $this->load->view('admin/success');
                }

}

}