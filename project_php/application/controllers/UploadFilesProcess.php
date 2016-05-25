<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//require_once(APPPATH.'libraries/UploadHandler.php');
class UploadFilesProcess extends CI_Controller {

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

	function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url')); // load library
	}

	function ckeditor_do_upload()
	{


		 // config

		//$config['upload_path'] = 'F:/xampp5.6.21/htdocs/projectnew/assets/upload/ex_user1/image_gallery/'; // CONFIG PATH upload_path_image

		$config['upload_path'] =  $this->config->item('upload_path_image');
		$config['allowed_types'] = 'bmp|gif|jpeg|jpg|png';
		$config['max_size']	= '200000';


		 // load config to upload
		$this->load->library('upload', $config); //Load library



		 // proocess upload
		if ( ! $this->upload->do_upload('upload') ){ // error
			$arr_result = array('uploaded' => 0,
													 'error' => 'can\'t uploading'
												 );

		}else{ // success
			$arr_result = array('uploaded' => 1,
													 'fileName' => ''.$this->upload->data('file_name').'',
													 'url' => $this->config->item('upload_dir_image').$this->upload->data('file_name')

													 //'url' => 'http://localhost:8020/projectnew/assets/upload/ex_user1/image_gallery/'.$this->upload->data('file_name').''
												 );

		}
		echo json_encode( $arr_result );


	}

  private function blueimp_POST($files){
		foreach ($files as $value) {


			if( trim($value) == "image/jpeg" ||
			    trim($value) == "image/gif" ||
					trim($value) == "image/png" ||
					trim($value) == "image/bmp"  ){
					$options = array (
															'script_url' => base_url()."/UploadFilesProcess/blueimp_multiupload",
															//'upload_dir' => 'F:/xampp5.6.21/htdocs/projectnew/assets/upload/ex_user1/image_gallery/',
						                  //'upload_url' => base_url().'assets/upload/ex_user1/image_gallery/',
															'upload_dir' => $this->config->item('upload_path_image'),
						                  'upload_url' => $this->config->item('upload_dir_image'),
															'image_file_types' => '/\.(gif|jpe?g|png|mp4|mp3)$/i'
						                );
					$this->load->library('UploadHandler', $options);
			}
			else if( trim($value) == "video/webm" ||
						   trim($value) == "video/mp4" ||
						   trim($value) == "video/ogv" ){

					$options = array (
						 									'script_url' => base_url()."/UploadFilesProcess/blueimp_multiupload",
						 									'upload_dir' => $this->config->item('upload_path_video'),
						 		              'upload_url' => $this->config->item('upload_dir_video'),
															'image_file_types' => '/\.(gif|jpe?g|png|mp4|mp3)$/i'
						 		            );
					$this->load->library('UploadHandler', $options);
			}

		}

	}

	private function blueimp_DELETE(){
		$supported_image = array(
	    'gif',
	    'jpg',
	    'jpeg',
	    'png'
		);
		$supported_video = array(
			'ogv',
			'mp4',
			'webm'
		);

		$filename = $_GET["file"];
		$ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
		if (in_array($ext, $supported_image)) {
			$options = array (
													'script_url' => base_url()."/UploadFilesProcess/blueimp_multiupload",
													'upload_dir' => $this->config->item('upload_path_image'),
													'upload_url' => $this->config->item('upload_dir_image')
												);
			$this->load->library('UploadHandler', $options);
		}
		else if(in_array($ext, $supported_video))
		{
			$options = array (
													'script_url' => base_url()."/UploadFilesProcess/blueimp_multiupload",
													'upload_dir' => $this->config->item('upload_path_video'),
													'upload_url' => $this->config->item('upload_dir_video')
												);
			$this->load->library('UploadHandler', $options);
		}



		//$this->load->library('UploadHandler');

	}

	private function blueimp_GET(){
		$options = array (
												'script_url' => base_url()."/UploadFilesProcess/blueimp_multiupload",
												'upload_dir' => $this->config->item('upload_path_image'),
												'upload_url' => $this->config->item('upload_dir_image')
											);
		$options2 = array (
												'script_url' => base_url()."/UploadFilesProcess/blueimp_multiupload",
												'upload_dir' => $this->config->item('upload_path_image'),
												'upload_url' => $this->config->item('upload_dir_image'),
												'upload_dir2' => $this->config->item('upload_path_video'),
												'upload_url2' => $this->config->item('upload_dir_video')
											);
		$this->load->library('UploadHandler', $options2);
		//echo ",";
		//$upload_handler = new UploadHandler($options2);
		//$this->load->library('UploadHandler', $options2);
	}

	public function blueimp_multiupload(){


		switch ( $this->input->server('REQUEST_METHOD')) {
				case 'OPTIONS':
				case 'HEAD':

						break;
				case 'GET':
						$this->blueimp_GET();
						break;
				case 'PATCH':
				case 'PUT':
				case 'POST':
						$this->blueimp_POST($_FILES["files"]["type"]);
						break;
				case 'DELETE':
					  $this->blueimp_DELETE();

						break;
				default:

		}

		// if( isset($_FILES["files"]["type"]) ){
		// 	$this->blueimp_uploading($_FILES["files"]["type"]);
		// }

		//echo json_decode($_FILES);
		// $options = array (
		// 									'script_url' => base_url()."/UploadFilesProcess/blueimp_multiupload",
		// 									'upload_dir' => 'F:/xampp5.6.21/htdocs/projectnew/assets/upload/ex_user1/other/',
		//                  'upload_url' => base_url().'assets/upload/ex_user1/other/'
		//                 );
		//$this->load->library('UploadHandler', $options);


		//$upload_handler = new UploadHandler($options);

	}

	public function index()
	{

		//$this->load->view('welcome_message');
	}
}
