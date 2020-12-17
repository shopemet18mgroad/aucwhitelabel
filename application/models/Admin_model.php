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
		
		public function get1datafromtable($table, $data) { 
			 $this->db->select('scomapnyname');
			  $this->db->select('sname');
			 $query = $this->db->get_where($table, $data); 
			 return $query->result();
		}
		
		public function getsomedatafromtable($table, $data) { 
			 $this->db->select('sname');
			 $this->db->select('sauctionid');
			 $this->db->select('scompanyname');
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
		
		public function datebetweenhome($date){
			$this->db->select('*');
			$this->db->from('auction');
			$this->db->join('addlot', 'addlot.sauctionid = auction.sauctionid');
			$this->db->where('saucstartdate_time <=', $date);
			$this->db->where('saucclosedate_time >=', $date);
			$this->db->where('status =', 1);
			$query = $this->db->get();
			return $query->result();
		}
		
		public function getsessdatafromtable($table, $data,$sessi) {
			$this->db->where('sname =', $sessi);
			 $query = $this->db->get_where($table, $data,$sessi); 
			 
			 return $query->result();
		} 
		
		
		public function datebetweensess($table, $date, $sessi){
			$this->db->select('*');
			$this->db->from($table);
			$this->db->where('aucstartdate_time <=', $date);
			$this->db->where('aucclosedate_time >=', $date);
			$this->db->where('bidderusername =', $sessi);
			$this->db->where('emdrequest =', 1);
			$this->db->or_where('emd_paid_dd =', 1);
			$query = $this->db->get();
			return $query->result();
		}
		
		public function datebetween5($date){
			$this->db->select('*');
			//$this->db->from($table);
			 $this->db->from('auction');
			$this->db->join('addlot', 'addlot.sauctionid = auction.sauctionid');
			$this->db->where('status =', 1);
			$this->db->where('saucstartdate_time <=', $date);
			$this->db->where('saucclosedate_time >=', $date);
			$query = $this->db->get();
			return $query->result();
		}
		public function datebetween8($date,$sessi){
			$this->db->select('*');
			//$this->db->from($table);
			 $this->db->from('auction');
			$this->db->join('addlot', 'addlot.sauctionid = auction.sauctionid');
			$this->db->join('sellerprofile', 'sellerprofile.sname = auction.sname');
			$this->db->where('status =', 1);
			$this->db->where('saucstartdate_time <=', $date);
			$this->db->where('saucclosedate_time >=', $date);
			$this->db->where('susername =', $sessi);
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
		
		public function maxbidvalue($auction,$lot){
			$this->db->select('*');
			$this->db->select_max('bidamount');
			$this->db->from('biddingdata');
			$this->db->where('sauctionid =', $auction);
			$this->db->where('slotno =',$lot);
			$query = $this->db->get();
			return $query->result();
		}
		
		 public function maxbidlotno($sauctionid,$slotno){
			$this->db->select('*');
			$this->db->select_max('slotno');
			$this->db->from('addlot');
			$this->db->where('sauctionid =', $sauctionid);
			//$this->db->where('slotno =',$slotno);
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
		
		public function gettable($table) { 
			 $query = $this->db->get($table); 
			 return $query->result();
		} 
		
		public function gettablenews($table) {
			$this->db->limit(2);			
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
		
		public function getdatafromtablejoin7($table,$table2,$joincolname,$compdata){
			$this->db->select('*');
			$this->db->from($table);
			$this->db->join($table2, "$table.$joincolname = $table2.$joincolname");
			$this->db->where("$table2.sauctionid", $compdata);
			$query = $this->db->get();
			return $query->result();
		}
		public function getdatafromtablehomejoin(){
			$this->db->select('*');
			 $this->db->from('auction');
			$this->db->join('addlot', 'addlot.sauctionid = auction.sauctionid');
			$this->db->where('status =', 1);
			$this->db->limit(4);
			$query = $this->db->get();
			return $query->result();
		}
		
		
		
		
		
		public function getdatafromtablejoinallauc(){
			$this->db->select('*');
			 $this->db->from('auction');
			$this->db->join('addlot', 'addlot.sauctionid = auction.sauctionid');
			//$this->db->where('status =', 1);
			//$this->db->limit(4);
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
		  
		    public function get_distinctforauc($table,$col,$sname) { 
			$this->db->select($col);
			$this->db->distinct();
			//$query = $this->db->get($table);
			$query = $this->db->get_where($table, array("sname" => $sname));
			return $query->result();
		  } 
		   
		  public function get_lookalike($table,$col,$query){			  
			$this->db->from($table);
			$this->db->like($col,$query);
			$q = $this->db->get();
			return $q->result_array();
		  }
		  
		  
		
		public function get_lookalikesess($table,$col,$query,$sessi){			  
			$this->db->from($table);
			$this->db->like($col,$query);
			$this->db->where('susername =', $sessi);
			$q = $this->db->get();
			return $q->result_array();
		  }
		  
			public function getdataASC($table, $data) { 
			$this->db->order_by("bidvalue", "desc");
			//$this->db->limit(5)
			$query = $this->db->get_where($table, $data); 
			 return $query->result();
		}
			
			
			public function admindateclosedauc($table, $date, $data){
			$this->db->select('*');
			$this->db->from($table);
			//$this->db->where('aucstartdate_time <=', $date);
			$this->db->where('aucclosedate_time <', $date);
			$this->db->where('auctionid =', $data);
			$query = $this->db->get();
			return $query->result();
		}

			function fetch_all()
			 {
			  $query = $this->db->get("auction");
			  return $query->result();
			 }
		
		public function get_lookalike2($table,$col,$query){			  
			$this->db->from($table);
			$this->db->like($col,$query);
			$this->db->where('status =', 1);
			$q = $this->db->get();
			return $q->result_array();
		  }
		
		 public function get_lookalike5($table,$col,$query,$date){			  
			$this->db->from($table);
			$this->db->like($col,$query);
			$this->db->where('saucstartdate_time <=', $date);
			$this->db->where('saucclosedate_time >=', $date);
			
			return $q->result_array();
		  }
		public function select()  
      {  
         //data is retrive from this query  
         $query = $this->db->get('biddercart');  
         return $query;  
      }
		
	
		 
		  
   }
   
?> 