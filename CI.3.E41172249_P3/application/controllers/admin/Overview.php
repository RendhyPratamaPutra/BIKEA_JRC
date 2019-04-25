<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Overview extends CI_Controller {
        function __construct(){
		parent::__construct();
	}
	public function index(){
		echo "ini method index pada controller belajar | Cara membuat controller pada codeigniter";
	}
	 
	public function halo(){
		echo "ini method halo pada controller belajar |Cara membuat controller pada codeigniter"; 
	}
        // load view admin/overview.php
        $this->load->view("admin/overview");
	}
}