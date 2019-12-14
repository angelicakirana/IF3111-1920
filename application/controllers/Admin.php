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
  $this->load->view('admin/login');
}


}




 ?>
