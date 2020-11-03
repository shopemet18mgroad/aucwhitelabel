<?php
class Start_model extends CI_Model 
{
	function saverecords($sauctionid,$sname,$scategory)
	{
	$query="insert into users values('','$sauctionid','$sname','$scategory')";
	$this->db->query($query);
	}
	
	function displayrecords()
	{
	$query=$this->db->query("select * from auction");
	return $query->result();
	}
	
}

?>