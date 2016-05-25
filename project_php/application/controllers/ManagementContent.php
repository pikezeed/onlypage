<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManagementContent extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	 private  $directory_image;
	 private  $directory_video;
	 private  $url_image;
	 private  $url_video;

	 public function __construct(){
		 parent::__construct();

		 $this->directory_image =  $this->config->item('upload_path_image');
		 $this->directory_video =  $this->config->item('upload_path_video');
		 $this->url_image =  $this->config->item('upload_dir_image');
		 $this->url_video =  $this->config->item('upload_dir_video');

	 }

 public function viewtext(){
	 //echo  $this->input->post('editor1');
	 $data = $this->getGallery();
	 $data['editor'] = $this->input->post('editor1');
	// print_r($data);
	 $this->load->view('show_content',$data);



 }

	public function index()
	{
		// $this->load->helper(array('form', 'url'));
		// $this->load->helper('directory');
		//
	  // $arr_file_image = directory_map( $this->directory_image ,1);
	  // $arr_file_video = directory_map( $this->directory_video ,1);
		//
		//
		// //
		// $arr_image = array_map(array($this,'prependPathImage'), $arr_file_image);
		// $arr_video = array_map(array($this,'prependPathVideo'), $arr_file_video);
		//
		// $arr_image = $this->checkFile($arr_image);
		// $arr_video = $this->checkFile($arr_video);
		//
		// $result_image = array_map(array($this,'prependUrlImage'), $arr_image);
		// $result_video= array_map(array($this,'prependUrlVideo'), $arr_video);
		// //echo $this->config->item('upload_path_video');
		//
		// $data = array(
    //            'image_path' => $result_image,
    //            'video_path' => $result_video
    //         );
		$data = $this->getGallery();
		$this->load->view('show_management_content',$data);
	}
	private function getGallery(){
		$this->load->helper(array('form', 'url'));
		$this->load->helper('directory');

	  $arr_file_image = directory_map( $this->directory_image ,1);
	  $arr_file_video = directory_map( $this->directory_video ,1);


		//
		$arr_image = array_map(array($this,'prependPathImage'), $arr_file_image);
		$arr_video = array_map(array($this,'prependPathVideo'), $arr_file_video);

		$arr_image = $this->checkFile($arr_image);
		$arr_video = $this->checkFile($arr_video);

		$result_image = array_map(array($this,'prependUrlImage'), $arr_image);
		$result_video= array_map(array($this,'prependUrlVideo'), $arr_video);
		//echo $this->config->item('upload_path_video');
		$data = array(
               'image_path' => $result_image,
               'video_path' => $result_video
            );
		return $data;
	}

	private function prependUrlImage($filename){

		$result = $this->url_image.$filename;
		 return $result;
	}
	private function prependUrlVideo($filename){

		$result = $this->url_video.$filename;
		 return $result;
	}

	private function prependPathImage($filepath){

		$result = $this->directory_image.$filepath;
		 return $result;
	}
	private function prependPathVideo($filepath){
		$result = $this->directory_video.$filepath;
		 return $result;
	}
	private function checkFile($arr){
		$result = array();
		foreach ($arr as &$value) {
			if (is_file( $value )) {
				//echo basename($value);
				 array_push($result, basename($value));
			}

		}
		return $result;
	}





}
