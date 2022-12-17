<?php
	class Product extends CI_Controller{
		 function __construct(){
		 parent::__construct();
		 $this->load->model('m_product');
		 }
	 function index(){
		 $data['product'] = $this->m_product->get_product();
		 $this->load->view('admin/product',$data);
		 }
}
