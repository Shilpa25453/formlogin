<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

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
	public function index()
	{
		echo"hi";
		$this->load->view('');
	}
	public function form()
	{
		$this->load->view('form');
	}

	public function regist()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules("name","name",'required');
		$this->form_validation->set_rules("address","address",'required');
		$this->form_validation->set_rules("gender","gender",'required');
		$this->form_validation->set_rules("age","age",'required');
		$this->form_validation->set_rules("email","email",'required');
		$this->form_validation->set_rules("password","password",'required');
		if($this->form_validation->run())
		{
			$this->load->model('mainmodel');
			$pass=$this->input->post("password");
			$encpass=$this->mainmodel->encpswd($pass);
		$a=array("name"=>$this->input->post("name"),
		"address"=>$this->input->post("address"),
		"gender"=>$this->input->post("gender"),
		"age"=>$this->input->post("age"),
		"emailid"=>$this->input->post("email"),
		"password"=>$encpass);
$this->mainmodel->regist($a);
redirect(base_url().'main/form');
	}
}
public function table()
	{
		$this->load->model('mainmodel');
		$data['n']=$this->mainmodel->view();
		$this->load->view('table',$data);
	}
	public function updatedetails()
	{
		$a=array("name"=>$this->input->post("name"),
		"address"=>$this->input->post("address"),
		"gender"=>$this->input->post("gender"),
		"emailid"=>$this->input->post("emailid"));
$this->load->model('mainmodel');
$id=$this->uri->segment(3);
$data['user_data']=$this->mainmodel->singledata($id);
$this->mainmodel->singleselect();
$this->load->view('table',$data);
if($this->input->post("update"))
{
	$this->mainmodel->updatedetails($a,$this->input->post("id"));
	redirect('main/table','refresh');
	}
}
public function deletedetails()
{
	$this->load->model('mainmodel');
	$id=$this->uri->segment(3);
	$this->mainmodel->deletedetails($id);
	redirect('main/table','refresh');
}
public function viewdata()
{
	$this->load->model('mainmodel');
	$data['n']=$this->mainmodel->viewdata();
	$this->load->view('viewdata',$data);
}
public function approve()
{
	$this->load->model('mainmodel');
	$id=$this->uri->segment(3);
	$this->mainmodel->approve($id);
	redirect('main/viewdata','refresh');
}
	public function reject()
	{
		$this->load->model('mainmodel');
	$id=$this->uri->segment(3);
	$this->mainmodel->reject($id);
	redirect('main/viewdata','refresh');

	}
	public function login()
	{
		$this->load->model('mainmodel');
		$data['n']=$this->mainmodel->view();
		$this->load->view('login',$data);
	}
	public function log()
	{   $this->load->library('form_validation');
		$this->form_validation->set_rules("emailid","email",'required');
		$this->form_validation->set_rules("password","password",'required');
		if($this->form_validation->run())
		{

			$email=$this->input->post("email");
			$this->load->model('mainmodel');
			$pass=$this->input->post("password");
			$rslt=$this->mainmodel->selectpass($email,$pass);
			if($rslt)
			{
				$id=$this->mainmodel->getuserid($email);
				$user=$this->mainmodel->getuser($id);
				$this->load->library(array('session'));
				$this->session->set_userdata(array('session'));
				$this->session->set_userdata(array('id'=>(int)$user->id,'status'=>$user->status));
				if($_SESSION['status']=='1')
				{
					redirect(base_url().'main/view');
				}
				else
				{
					echo"waiting for approval";

				}
			}
			else
			{
				echo"invalid user";
			
					}
				}
		else{
			redirect('main/log','refresh');
		}
	}
	public function registrationformss()
	{
	$this->load->view('registrationformss');
	} 
	public function regist_form()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules("firstname","firstname",'required');
		$this->form_validation->set_rules("lastname","lastname",'required');
		$this->form_validation->set_rules("address","address",'required');
		$this->form_validation->set_rules("district","district",'required');
		$this->form_validation->set_rules("pincode","pincode",'required');
		$this->form_validation->set_rules("phonenumber","phonenumber",'required');
		$this->form_validation->set_rules("dob","dob",'required');
		$this->form_validation->set_rules("gender","gender",'required');
		$this->form_validation->set_rules("highereducation","highereducation",'required');
		$this->form_validation->set_rules("email","email",'required');
		$this->form_validation->set_rules("password","password",'required');
		if($this->form_validation->run())
		{
			$this->load->model('mainmodel');
			$pass=$this->input->post("password");
			$encpass=$this->mainmodel->encpswd($pass);
		$a=array("firstname"=>$this->input->post("firstname"),
		"lastname"=>$this->input->post("lastname"),
			"address"=>$this->input->post("address"),
			"district"=>$this->input->post("district"),
		"pincode"=>$this->input->post("pincode"),
		"phonenumber"=>$this->input->post("phonenumber"),
		"dob"=>$this->input->post("dob"),
		"gender"=>$this->input->post("gender"),
		"highesteducation"=>$this->input->post("highereducation"));
		
		$b=array("email"=>$this->input->post("email"),
		"password"=>$encpass,
		"status"=>'0',
		"usertype"=>'1');
$this->mainmodel->regist_form($a,$b);
redirect(base_url().'main/registrationformss');

	}
}

public function viewtable()
{
	$this->load->model('mainmodel');
	$data['n']=$this->mainmodel->view();
	$this->load->view('viewtable',$data);
}
public function approval()
{
$this->load->model('mainmodel');
$loginid=$this->uri->segment(3);
$this->mainmodel->approval($loginid);
redirect('main/view','refresh');
}
public function reject_reg()
{
$this->load->model('mainmodel');
$loginid=$this->uri->segment(3);
$this->mainmodel->reject_reg($loginid);
redirect('main/view','refresh');
}



	public function reglog()
	{
		$this->load->view('reglog');
	}

	public function register()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules("name","name",'required');
		$this->form_validation->set_rules("address","address",'required');
		$this->form_validation->set_rules("district","district",'required');
		$this->form_validation->set_rules("pincode","pincode",'required');
		$this->form_validation->set_rules("phonenumber","phonenumber",'required');
		$this->form_validation->set_rules("gender","gender",'required');
		$this->form_validation->set_rules("age","age",'required');
		$this->form_validation->set_rules("subject","subject",'required');
		$this->form_validation->set_rules("email","email",'required');
		$this->form_validation->set_rules("password","password",'required');
		if($this->form_validation->run())
		{
			$this->load->model('mainmodel');
			$pass=$this->input->post("password");
			$encpass=$this->mainmodel->encpswds($pass);
		$a=array("name"=>$this->input->post("name"),
		"address"=>$this->input->post("address"),
		"district"=>$this->input->post("district"),
		"pincode"=>$this->input->post("pincode"),
		"phonenumber"=>$this->input->post("phonenumber"),
		"gender"=>$this->input->post("gender"),
		"age"=>$this->input->post("age"),
		"subject"=>$this->input->post("subject"));

		$b=array("email"=>$this->input->post("email"),
		"password"=>$encpass,
		"status"=>'1',
		"usertype"=>'0');
$this->mainmodel->reglog($a,$b);
redirect(base_url().'main/reglog');
	}
}
public function teacher_view()
{
	
}
public function login_student()
	{
		//$this->load->model('mainmodel');
		//$data['n']=$this->mainmodel->view();
		$this->load->view('teacher_login');
	}
	public function log_student()
	{   $this->load->library('form_validation');
		$this->form_validation->set_rules("emailid","email",'required');
		$this->form_validation->set_rules("password","password",'required');
		if($this->form_validation->run())
		{
			$this->load->model('mainmodel');
			$email=$this->input->post("email");
			$pass=$this->input->post("password");
			$rslt=$this->mainmodel->selectpassed($email,$pass);
			if($rslt)
			{
				$id=$this->mainmodel->getuseridd($email);
				$user=$this->mainmodel->getusers($id);
				$this->load->library(array('session'));
				//$this->session->set_userdata(array('session'));
				$this->session->set_userdata(array('id'=>$user->id,'status'=>$user->status,'usertype'=>$user->usertype));
				if($_SESSION['status']=='1'&& $_SESSION['usertype']=='1')
				{
					redirect(base_url().'main/teacher_update');
				}
				elseif($_SESSION['status']=='1'&& $_SESSION['usertype']=='0')
				{
					redirect(base_url().'main/notifi');
				}
				else
				{
					echo"waiting for approval";

				}
			}
			else
			{
				echo"invalid user";
			
					}
				}
		else{
			redirect('main/table2','refresh');
		}
	}
	public function teacher_login()
	{
		$this->load->view('teacher_login');
	}
	public function teacher_update()
	{
		$this->load->view('teacher_update');
	}
	public function viewdatas()
	{
		$this->load->model('mainmodel');
		$id=$this->session->id;
		$data['userdata']=$this->mainmodel->viewers($id);
		$this->load->view("teacher_update",$data);
	}
	public function viewers()
	{
		$p=array("firstname"=>$this->input->post("firstname"),
		"lastname"=>$this->input->post("lastname"),
		"address"=>$this->input->post("address"),
		"district"=>$this->input->post("district"),
		"pincode"=>$this->input->post("pincode"),
		"phonenumber"=>$this->input->post("phonenumber"),
		"dob"=>$this->input->post("dob"),
		"gender"=>$this->input->post("gender"),
		"highesteducation"=>$this->input->post("highesteducation"));
		$q=array("email"=>$this->input->post("email"),'usertype'=>'1');
$this->load->model('mainmodel');

//$id=$this->uri->segment(3);
//$data['user_data']=$this->mainmodel->singledata($id);
//$this->load->view('teacher_update',$data);
if($this->input->post("update"))
{
	$id=$this->session->id;
	$this->mainmodel->updatedatalist($p,$q,$id);
	redirect('main/teacher_update','refresh');
	}
}
public function notifi()
{
	$this->load->view('notification');
}

public function notification()
{
	$this->load->library('form_validation');
	$this->form_validation->set_rules("notification","notification",'required');
	if($this->form_validation->run())
	{
		$this->load->model('mainmodel');
		$id=$this->session->id;
		$s=array("notification"=>$this->input->post("notification"),
		"currentdate"=>date('y-m-d'),
		"loginid"=>$id);
$this->mainmodel->notification('$s');
redirect(base_url().'main/notifi');
}
}
// public function viewdatass()
// {
// 	$this->load->model('modell');
// 	$data['n']=$this->modell->viewdatass();
// 	$this->load->view('viewdatass',$data);
// }
public function regstrform()
{
$this->load->view('regstrform');

}
public function regg()
{
$this->load->library('form_validation');
$this->form_validation->set_rules("firstname","firstname",'required');
$this->form_validation->set_rules("lastname","lastname",'required');
$this->form_validation->set_rules("username","username",'required');
$this->form_validation->set_rules("password","password",'required');
$this->form_validation->set_rules("mobile","mobile",'required');
$this->form_validation->set_rules("email","email",'required');

if($this->form_validation->run())
{
$this->load->model('mainmodel');
$pass=$this->input->post("password");
$encpass=$this->mainmodel->encpswd($pass);
$a=array("firstname"=>$this->input->post("firstname"),

"lastname"=>$this->input->post("lastname"),
"username"=>$this->input->post("username"),
"password"=>$encpass,
"mobile"=>$this->input->post("mobile"),
"email"=>$this->input->post("email")
);
$this->mainmodel->regstrform($a);
redirect(base_url().'main/regstrform');
}

}
public function approved()
{

$this->load->model('mainmodel');
$data['n']=$this->mainmodel->approved();
$this->load->view('regstrapprove',$data);
}
public function approver()
{
$this->load->model('mainmodel');
$id=$this->uri->segment(3);
$this->mainmodel->approver($id);
redirect('Main/approved','refresh');
}
public function rejectd()
{
$this->load->model('mainmodel');
$id=$this->uri->segment(3);
$this->mainmodel->rejectd($id);
redirect('Main/approved','refresh');
}
public function loginreg()
	{
		$this->load->view('regstrlogin');
	}
	public function logregg()
	{   $this->load->library('form_validation');
		$this->form_validation->set_rules("email","email",'required');
		$this->form_validation->set_rules("password","password",'required');
		if($this->form_validation->run())
		{

			$email=$this->input->post("email");
			$this->load->model('mainmodel');
			$pass=$this->input->post("password");
			$rslt=$this->mainmodel->selectpass($email,$pass);
			if($rslt)
			{
				$id=$this->mainmodel->getuserid($email);
				$user=$this->mainmodel->getuser($id);
				$this->load->library(array('session'));
				$this->session->set_userdata(array('session'));
				$this->session->set_userdata(array('id'=>(int)$user->id,'status'=>$user->status));
				if($_SESSION['status']=='1')
				{
					redirect(base_url().'main/logsucess');
				}
				else
				{
					echo"waiting for approval";

				}
			}
			else
			{
				echo"invalid user";
			
					}
				}
		else{
			redirect('main/loginreg','refresh');
		}
	}
	public function logsucess()
	{
	$this->load->view('loginsuccess');
	}
}





		