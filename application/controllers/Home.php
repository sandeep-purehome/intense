<?php 
	class Home extends MY_Controller{
		public function __construct(){
			parent::__construct();
		}
		public function index(){
			$data['assets_path'] 	=	$this->assets_path;
			echo "Hello";
			$this->load->view('home',$data);
		}
	}
?>