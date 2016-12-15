<?php
	class MY_Controller extends CI_Controller{
		
		public $base;
		public $assets_path;
		public $bodyId;
		public $header;
		public $navigation;
		public $adminNavigation;
		public $footer;
		public $carouselSearch;

		public function __construct(){
			parent::__construct();
			$this->load->helper('url');
			$this->base 			=	$this->config->item('base_url');
			$this->assets_path		=	$this->base."/assets";
			//$this->header 			=	"parts/header";
			//$this->navigation 		=	"parts/navigation";
			//$this->adminNavigation	=	"parts/admin_navigation";
			//$this->footer 			=	"parts/footer";
			//$this->carouselSearch 	=	"parts/carousel_search";	
			//$this->mainSearch	 	=	"parts/main_search";	
		}
		
	}

?>