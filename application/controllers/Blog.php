<?php

class blog extends CI_Controller{

   function __construct()
   {
      parent::__construct();
      $this->load->model('Blog_models');
      $this->load->model('biodata');
   }

	public function index(){
      $data['biodata_array']=$this->biodata->getBiodataQueryArray();
      $data['biodata_object']=$this->biodata->getBiodataQueryObject();
		$this->load->view('header');
      $this->load->view('home', $data);
		$this->load->view('footer');
	}

	public function post(){
      $this->load->view('header');
		$data['records'] = $this->Blog_models->getAll();
		$this->load->view('SimpleCRUD/post', $data);
      $this->load->view('footer');
	}

	 public function add_view() {
         $this->load->view('header');
         $data['error'] = "";
         $this->load->view('SimpleCRUD/post_add_view',$data);
         $this->load->view('footer');
      } 

	public function add_action() { 
         $config['upload_path']   = 'uploads'; 
         $config['allowed_types'] = 'gif|jpg|png'; 
         $config['max_size']      = 80000; 
         $config['max_width']     = 1024; 
         $config['max_height']    = 768;  
         $this->load->library('upload', $config);
         
         if ( ! $this->upload->do_upload('image_file')) {
            $error = array('error' => $this->upload->display_errors()); 
            $this->load->view('header');
            $this->load->view('SimpleCRUD/post_add_view', $error); 
            $this->load->view('footer');
         }
         
         else { 
            $dataUpload = $this->upload->data(); 
            $data = array( 
                  'id' => $this->input->post('id'),
                  'author' => $this->input->post('author'),
                  'date' => $this->input->post('date'),
                  'title' => $this->input->post('title'),
                  'content' => $this->input->post('content'),
                  'image_file' => $dataUpload['file_name'] 
               ); 
               $this->Blog_models->insert($data);
            redirect('Blog'); 
         }
      }

      public function byId($id){
       $data['records'] = $this->Blog_models->getOne($id);
         $this->load->view('header'); 
         $this->load->view('SimpleCRUD/post_view',$data); 
         $this->load->view('footer');
   }
}
