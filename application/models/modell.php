<?php
class modell extends CI_model
{
	public function singleselect()
{
	$qry=$this->db->get("form");
	return $qry;
}
public function singleselect()
{
$qry=$this->db->get("form");
	return $qry;
}
public function deletedetails($id)
{
	$this->db->where('id',$id);
	$this->db->delete("form");

}
?>