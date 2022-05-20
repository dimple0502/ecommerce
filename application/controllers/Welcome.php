<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data['LISTDATA']=$this->product->get_data('products');
		$this->load->view('products',$data);
	}

	public function add()
	{
		

		    $this->load->library('form_validation');
			$this->form_validation->set_rules('product_name', 'Product Name', 'required');
			$this->form_validation->set_rules('product_price', 'Product Price', 'required');
			$this->form_validation->set_rules('product_description', 'Product Description', 'required');
			//$this->form_validation->set_rules('product_image', 'Product Image', 'required');
			
		if ($this->form_validation->run() == FALSE)
		{
			
			$this->load->view('add_product');
		}
		else
		{

		    $data = [];

      $count = count($_FILES['product_image']['name']);
 
      for($i=0;$i<$count;$i++){
 
        if(!empty($_FILES['product_image']['name'][$i])){
 
          $_FILES['file']['name'] = $_FILES['product_image']['name'][$i];
          $_FILES['file']['type'] = $_FILES['product_image']['type'][$i];
          $_FILES['file']['tmp_name'] = $_FILES['product_image']['tmp_name'][$i];
          $_FILES['file']['error'] = $_FILES['product_image']['error'][$i];
          $_FILES['file']['size'] = $_FILES['product_image']['size'][$i];

          $config['upload_path'] = 'uploads/'; 
          $config['allowed_types'] = 'jpg|jpeg|png|gif';
          $config['max_size'] = '5000'; // max_size in kb
          $config['file_name'] = $_FILES['product_image']['name'][$i];
 
          $this->load->library('upload',$config); 
 
          if($this->upload->do_upload('file')){
            $uploadData = $this->upload->data();
            $filename = $uploadData['file_name'];

          $product_image[] = $filename;
          }
        }
 
      }
			$data['product_image']= implode(',', $product_image);
			
			$data['product_name']=$this->input->post('product_name');
			$data['product_price']=$this->input->post('product_price');
			$data['product_description']=$this->input->post('product_description');
			
			$this->product->insert('products',$data);
			$this->session->set_flashdata('success', 'New Product Added Successfull..!');
			redirect("welcome/index");
		}
		
	}
	
	public function edit()
	{
		$args=func_get_args();
		

		$this->load->library('form_validation');
			$this->form_validation->set_rules('product_name', 'Product Name', 'required');
			$this->form_validation->set_rules('product_price', 'Product Price', 'required');
			$this->form_validation->set_rules('product_description', 'Product Description', 'required');
			//$this->form_validation->set_rules('product_image', 'Product Image', 'required');
			
		if ($this->form_validation->run() == FALSE)
		{
			
			$data['EDITDATA']=$this->product->fetchdatabyid($args[0],'products');
			$this->load->view('edit_product',$data);
		}
		else
		{

		    $data = [];

      $count = count($_FILES['product_image']['name']);
 
      for($i=0;$i<$count;$i++){
 
        if(!empty($_FILES['product_image']['name'][$i])){
 
          $_FILES['file']['name'] = $_FILES['product_image']['name'][$i];
          $_FILES['file']['type'] = $_FILES['product_image']['type'][$i];
          $_FILES['file']['tmp_name'] = $_FILES['product_image']['tmp_name'][$i];
          $_FILES['file']['error'] = $_FILES['product_image']['error'][$i];
          $_FILES['file']['size'] = $_FILES['product_image']['size'][$i];

          $config['upload_path'] = 'uploads/'; 
          $config['allowed_types'] = 'jpg|jpeg|png|gif';
          $config['max_size'] = '5000'; // max_size in kb
          $config['file_name'] = $_FILES['product_image']['name'][$i];
 
          $this->load->library('upload',$config); 
 
          if($this->upload->do_upload('file')){
            $uploadData = $this->upload->data();
            $filename = $uploadData['file_name'];

          $product_image[] = $filename;
          }
        }
 
      }
			$data['product_image']= implode(',', $product_image);
			
			$data['product_name']=$this->input->post('product_name');
			$data['product_price']=$this->input->post('product_price');
			$data['product_description']=$this->input->post('product_description');
			$this->product->update('products',$args[0],$data);
			$this->session->set_flashdata('success', 'Updated Product Successfull..!');
			redirect("welcome/index");
		}

		
	}
	
	public function delete()
	{
	   $args=func_get_args();
	   
	   $this->product->delete('products',$args[0]);
	   
	   redirect(base_url());
	   
	}
	
}


