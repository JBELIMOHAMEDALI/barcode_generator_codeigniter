<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {


	public function index()
	{
		$this->load->view('product/index');
	}

	public function generete()
	{
	    
	    $id=$_POST['id'];
	    $type=$_POST['type'];
	    var_dump($type);
	    $height=$_POST['height'];
	    $this->load->library('Zend');
	    $this->zend->load('Zend/Barcode');
	    $imageBarcode= Zend_Barcode::factory($type,'image',array(
	        'text'=>$id,
            'barHeight'=>$height
        ),array())->draw();
	    $barcode_image = 'barcode-'.date('m-d-H-i-s').'.png';
        imagepng ( $imageBarcode , './assets/barcode/'.$barcode_image,   -1 , -1 );
        $data['barcode_image']=$barcode_image;
        $this->load->view('product/index',$data);
	}
}
