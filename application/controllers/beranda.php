<?php
	
	class Beranda extends CI_Controller{
		
		//constructor
		public function __construct(){
			parent::__construct();
		}
		
		//Method Index
		public function index(){
			$this->load->view('beranda_v');
		}
	}
?>