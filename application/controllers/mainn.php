<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mainn extends CI_Controller {

public function viewdata()
{
	$this->load->model('modell');
	$data['n']=$this->modell->viewdata();
	$this->load->view('viewdata',$data);
}
public function deleted details()
{
    $this->load->model('mainmodel');
	$id=$this->uri->segment(3);
	$this->mainmodel->deletedetails($id);
	redirect('main/table','refresh');

}

}
?>
