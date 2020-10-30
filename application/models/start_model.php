<?php
class Start_model extends CI_Model 
{
	function multisave($user_id,$category)
	{
		$query="insert into user_cat values($user_id,$category)";
		$this->db->query($query);
	}
	
}

?>