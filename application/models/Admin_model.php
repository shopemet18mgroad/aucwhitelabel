<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
   class Admin_model extends CI_Model {
	
		  function __construct() { 
			 parent::__construct(); 
			$this->load->database(); 
		  } 
		  public function insert($table, $data) { 
			 if ($this->db->insert($table, $data)) { 
				return true; 
			 } 
		  } 
		 public function check($table, $data) { 
			 $query = $this->db->get_where($table, $data); 
					if ($query->num_rows() == 0 )
					{
					   return FALSE;
					}else{
						return TRUE;
					}
		
		  } 
		public function getdatafromtable($table, $data) { 
			 $query = $this->db->get_where($table, $data); 
			 return $query->result();
		} 
		public function datebetween($table, $date){
			$this->db->select('*');
			$this->db->from($table);
			$this->db->where('saucstartdate_time <=', $date);
			$this->db->where('saucclosedate_time >=', $date);
			$query = $this->db->get();
			return $query->result();
		}
		
		
		public function datebetweensess($table, $date, $sessi){
			$this->db->select('*');
			$this->db->from($table);
			$this->db->where('aucstartdate_time <=', $date);
			$this->db->where('aucclosedate_time >=', $date);
			$this->db->where('bidderusername =', $sessi);
			$query = $this->db->get();
			return $query->result();
		}
		
		public function datebetweensess2($table, $date, $sessi){
			$this->db->select('*');
			$this->db->from($table);
			//$this->db->where('aucstartdate_time <=', $date);
			$this->db->where('aucclosedate_time <', $date);
			$this->db->where('bidderusername =', $sessi);
			$query = $this->db->get();
			return $query->result();
		} 
		

	 public function dateclosedauc($table, $date){
			$this->db->select('*');
			$this->db->from($table);
			//$this->db->where('aucstartdate_time <=', $date);
			$this->db->where('aucclosedate_time <', $date);
			//$this->db->where('bidderusername =', $sessi);
			$query = $this->db->get();
			return $query->result();
		} 
		
		
		
		
		
		
		public function maxbidvalue($table,$auctmp, $auclottmp){
			$this->db->select(max('mybid_val'));

			$this->db->from($table);
			
			//$this->db->where('mybid_val >', $compdata);
			$this->db->where('auctionid =', $auctmp);
			$this->db->where('lotno =', $auclottmp);
			$this->db->where('bidderusername =', $sessi);
			$query = $this->db->get();
		
			return $query->result();
		} 
		
		public function getmaxbid(){
        $this->db->select_max('mybid_val');
        $this->db->from('biddercart');
        $query = $this->db->get();
        if($query->num_rows() > 0){
           return $query->row('mybid_val');        
        }else{
           return 1;
        }
}
		
		
	
		
		public function gettable($table) { 
			 $query = $this->db->get($table); 
			 return $query->result();
		} 
		public function getdatafromtablejoin($table,$table2,$joincolname,$compdata){
			$this->db->select('*');
			$this->db->from($table);
			$this->db->join($table2, "$table.$joincolname = $table2.$joincolname");
			$this->db->where("$table2.sname", $compdata);
			$query = $this->db->get();
			return $query->result();
		}
		
		  public function delete_data($table, $data) { 
			 if ($this->db->delete($table, $data)) { 
				return true; 
			 } 
		  } 
   
		  public function update($table,$data,$comp) { 
			 $this->db->set($data); 
			 $this->db->where("cat_name", $comp); 
			 $this->db->update($table, $data); 
		  } 
		  public function update_custom($table,$data,$colname,$comp) { 
			 $this->db->set($data); 
			 $this->db->where($colname, $comp);
			 $this->db->update($table, $data); 
		  } 
		  public function get_distinct($table,$col,$id) { 
			$this->db->select($col);
			$this->db->distinct();
			//$query = $this->db->get($table);
			$query = $this->db->get_where($table, array("prod_id"=>$id));
			return $query->result();
		  } 
		   
		  public function get_lookalike($table,$col,$query){			  
			$this->db->from($table);
			$this->db->like($col,$query);
			$q = $this->db->get();
			return $q->result_array();
		  }
		  
			


			function fetch_all()
			 {
			  $query = $this->db->get("auction");
			  return $query->result();
			 }
		
		public function select()  
      {  
         //data is retrive from this query  
         $query = $this->db->get('biddercart');  
         return $query;  
      }

		  
		 
		  
   }
   
?> 