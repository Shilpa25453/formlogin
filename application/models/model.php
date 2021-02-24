<?php
class mainmodel extends CI_model
{
public function regist($a) 
{
	$this->db->insert("form",$a);
}
}
?>
