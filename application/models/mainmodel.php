<?php
class mainmodel extends CI_model
{
// public function regist($a) 
// {
// 	$this->db->insert("form",$a);
// }
// public function encpswd($pass)
// {
// 	return password_hash($pass,PASSWORD_BCRYPT);
// }
// //public function view()
// //{
// 	//$this->db->select('*');
// 	//$qry=$this->db->get("form");
// 	//return $qry;
// //}
// public function singledata($id)
// {
// 	$this->db->select('*');
// 	$this->db->where("id",$id);
// 	$qry=$this->db->get("form");
// 	return $qry;
// }
// public function singleselect()
// {
// 	$qry=$this->db->get("form");
// 	return $qry;
// }
// public function updatedetails($a,$id)
// {
// 	$this->db->select('*');
// 	$qry=$this->db->where("id",$id);
// 	$qry=$this->db->update("form",$a);
// 	return $qry;
// }
// public function deletedetails($id)
// {
// 	$this->db->where('id',$id);
// 	$this->db->delete("form");
// }
// public function viewdata()
// {
// 	$this->db->select('*');
// 	$qry=$this->db->get("form");
// 	return $qry;
// }
// public function approve($id)
// {
// 	$this->db->set('status','1');
// 	$qry=$this->db->where("id",$id);
// 	$qry=$this->db->update("form");
// 	return $qry;
// }
// public function reject($id)
// {
// 	$this->db->set('status','2');
// 	$qry=$this->db->where("id",$id);
// 	$qry=$this->db->update("form");
// 	return $qry;
// }
// public function selectpass($email,$pass)
// {
// 	$this->db->select('password');
// 	$this->db->from("form");
// 	$this->db->where("email",$email);
// 	$query=$this->db->get()->row('password');
// 	return $this->verifypass($pass,$qry);
// }
// public function verifypass($pass,$qry)
// {
// return password_verify($pass,$qry);
// }
// public function getuserid($email)
// {
// 	$this->db->select('id');
// 	$this->db->from("table2");
// 	$this->db->where("email","$email");
// 	return $this->db->get()->row('id');
// }
// public function getuser($id)
// {
// 	$this->db->select('*');
// 	$this->db->from("form");
// 	$this->db->where("id",$id);
// 	return$this->db->get()->row();
// }

// public function formi($a,$b)
// {
// 	$this->db->insert("table2",$b);
// 	$this->db->insert("details",$a);
// }
// public function regist_form($a,$b)
// {
// 	$this->db->insert("table2",$b);
// 	$loginid=$this->db->insert_id();
// 	$a["loginid"]=$loginid;
// 	$this->db->insert("details",$a);
// }
// public function view()
// {
// 	$this->db->select('*');
// 	$this->db->join('table2','table2.id=details.loginid','inner');
// $qry=$this->db->get("details");
// 	return $qry;
// }
// public function approval($loginid)
// {
// $this->db->set('status','1');
// $qry=$this->db->where("id",$loginid);
// $qry=$this->db->update("table2");
// return $qry;
// }
// public function reject_reg($loginid)
// {
// $this->db->set('status','2');
// $qry=$this->db->where("id",$loginid);
// $qry=$this->db->update("table2");
// return $qry;
// }

// public function reglog($a,$b)
// {
// 	$this->db->insert("table2",$b);
// 	$loginid=$this->db->insert_id();
// 	$a['loginid']=$loginid;
// 	$this->db->insert("teacher_login",$a);
// }

// public function encpswds($pass)
// {
// 	return password_hash($pass,PASSWORD_BCRYPT);
// }
// public function viewdatas()
// {
// 	$this->db->select('*');
// 	$qry=$this->db->get("teacher_login");
// 	return $qry;
// }
// public function teacher_update($id)
// {
// 	$this->db->select('*');
// 	$qry=$this->db->get("teacher_update");
// 	return $qry;
// }
// public function selectpassed($email,$pass)
// {
// 	$this->db->select('password');
// 	$this->db->from("table2");
// 	$this->db->where("email","$email");
// 	$qry=$this->db->get()->row("password");
// return $this->verifypassed($pass,$qry);
// }
// public function verifypassed($pass,$qry)
// {
// 	return password_verify($pass,$qry);
// }
// public function getuseridd($email)
// {
// 	$this->db->select('id');
// 	$this->db->from("table2");
// 	$this->db->where("email","$email");
// 	return $this->db->get()->row('id');
// }
// public function getusers($id)
// {
// 	$this->db->select('id');
// 	$this->db->from("table2");
// 	$this->db->where("id",$id);
// 	return $this->db->get()->row();
// }
// public function viewers($id)
// {
// 	$this->db->select('*');
// 	$qry=$this->db->join('table2','table2.id=details.loginid','inner');
// 	$qry=$this->db->where("details.loginid",$id);
// 	$qry=$this->db->get("details");
// 	return$qry;
// }
// public function updatedatalist($p,$q,$id)
// {
// 	$this->db->select('*');
// 	$qry=$this->db->where("loginid",$id);
// 	$this->db->join('table2','table2.id=details.loginid','inner');
// 	$qry=$this->db->update("details",$p);
// 	$qry=$this->db->where("id",$id);
// 	$qry=$this->db->update("table2",$q);
// 	return $qry;
// }
// public function notification($s)
// {
// 	$this->db->insert("notification",$s);
// }

public function regstrform($a)
{
	$this->db->insert("regstrform",$a);
}
public function encpswd()
{
	return password_hash($pass,PASSWORD_BCRYPT);
}
public function approved()
{
	$this->db->select('*');
	$qry=$this->db->get("regstrform");
	return $qry;
}
public function approver($id)
{
	$this->db->set('status','1');
	$qry=$this->db->where("id",$id);
	$qry=$this->db->update("regstrform");
	return $qry;
}
public function rejectd($id)
{
	$this->db->set('status','2');
	$qry=$this->db->where("id",$id);
	$qry=$this->db->update("regstrform");
	return $qry;
}
public function selectpass($email,$pass)
{
	$this->db->select('password');
	$this->db->from("regstrform");
	$this->db->where("email",$email);
	$query=$this->db->get()->row('password');
	return $this->verifypass($pass,$qry);
}
public function verifypass($pass,$qry)
{
return password_verify($pass,$qry);
}
public function getuserid($email)
{
	$this->db->select('id');
	$this->db->from("regstrform");
	$this->db->where("email","$email");
	return $this->db->get()->row('id');
}
public function getuser($id)
{
	$this->db->select('*');
	$this->db->from("regstrform");
	$this->db->where("id",$id);
	return$this->db->get()->row();
}
}
?>


