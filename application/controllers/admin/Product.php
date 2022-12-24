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
	
	function add_new(){ 
    $this->load->view('admin/add_new_product'); 
	} 
	
	function get_edit(){
		$product_id = $this->uri->segment(4);
		$result = $this->m_product->get_product_id($product_id);
		if($result->num_rows() > 0){
		$i = $result->row_array();
		$data = array(
		'product_id' => $i['product_id'],
		'product_name' => $i['product_name'],
		'product_price' => $i['product_price']
		);
			$this->load->view('admin/edit_product_view',$data);
		}else{
			echo "Data Was Not Found";
		}
	}
	
	function delete(){
		$product_id = $this->uri->segment(4);
		$this->m_product->delete($product_id);
		redirect('admin/product');
 }
 
	function save(){
		 $product_name = $this->input->post('product_name');
		 $product_price = $this->input->post('product_price');
		 $this->m_product->save($product_name,$product_price);
		 redirect('admin/product');
 }
	
	function update(){
		$product_id = $this->input->post('product_id');
		$product_name = $this->input->post('product_name');
		$product_price = $this->input->post('product_price');
		$this->m_product->update($product_id,$product_name,$product_price);
		redirect('admin/product');
 }


}
