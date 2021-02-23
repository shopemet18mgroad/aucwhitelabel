<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function insert($table, $data)
	{
		if ($this->db->insert($table, $data)) {
			return true;
		}
	}
	public function check($table, $data)
	{
		$query = $this->db->get_where($table, $data);
		if ($query->num_rows() == 0) {
			return FALSE;
		} else {
			return TRUE;
		}
	}
	public function getdatafromtable($table, $data)
	{
		$query = $this->db->get_where($table, $data);
		return $query->result();
	}


	public function get1datafromtable($table, $data)
	{
		$this->db->select('scomapnyname');
		$this->db->select('sname');
		$query = $this->db->get_where($table, $data);
		return $query->result();
	}

	public function getsomedatafromtable($table, $data)
	{
		$this->db->select('sname');
		$this->db->select('sauctionid');
		$this->db->select('scompanyname');
		$query = $this->db->get_where($table, $data);
		return $query->result();
	}


	public function datebetween($table, $date)
	{
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where('saucstartdate_time <=', $date);
		$this->db->where('saucclosedate_time >=', $date);
		$query = $this->db->get();
		return $query->result();
	}


	public function datebetweenaucappr($table, $date)
	{
		$this->db->select('*');
		$this->db->from('auction');
		$this->db->join('biddercart', 'biddercart.auctionid = auction.sauctionid');
		$this->db->join('sellerprofile', 'sellerprofile.sname = auction.sname');
		$this->db->where('aucclosedate_time <', $date);
		//$this->db->where('susername =', $sessi);
		$query = $this->db->get();
		return $query->result();
	}
	//Function for fetching the data by joining auction and addlot table
	public function datebetweenhome($date)
	{
		$this->db->select('*');
		$this->db->from('auction');
		//Fetching the data by joining addlot and auction  where status is 1 (Approved auctions)
		$this->db->join('addlot', 'addlot.sauctionid = auction.sauctionid');
		$this->db->where('saucstartdate_time <=', $date);
		$this->db->where('saucclosedate_time >=', $date);
		$this->db->where('status =', 1);
		$query = $this->db->get();
		return $query->result();
	}
	// 
	public function getsessdatafromtable($table, $data, $sessi)
	{
		$this->db->where('sname =', $sessi);
		$query = $this->db->get_where($table, $data, $sessi);

		return $query->result();
	}

	public function getdatafromtableReset($table, $sessi)
	{
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where('email =', $sessi);
		$query = $this->db->get();
		return $query->result();
	}
	public function datebetweensess($table, $date, $sessi)
	{
		$this->db->select('*');
		$this->db->group_by('auctionid');
		$this->db->from('biddercart');
		$this->db->join('auction', 'auction.sauctionid = biddercart.auctionid');
		$this->db->where('aucstartdate_time <=', $date);
		$this->db->where('aucclosedate_time >=', $date);
		$this->db->where('bidderusername =', $sessi);
		$this->db->where('emdrequest =', 1 <> 'emd_paid_dd =', 1);
		$query = $this->db->get(); 
		return $query->result();
		}
		
		public function getemdlot($table, $auctionid,$sessi) {
			$this->db->select('*');			
			$this->db->from('addlot');
			$this->db->join('biddercart', 'biddercart.auctionid = addlot.sauctionid');
			$this->db->where('emdrequest =', 1 <> 'emd_paid_dd =', 1);
			$this->db->where('auctionid =', $auctionid);
			$this->db->where('bidderusername =', $sessi);
			$this->db->where('biddercart.lotno = addlot.slotno');
			 $query = $this->db->get(); 
			 return $query->result();
		}
		
		public function datebetween5($table,$date){
			$this->db->select('*');
			//$this->db->from($table);
			$this->db->group_by('addlot.sauctionid');
			$this->db->from('addlot');
			$this->db->join('auction', 'auction.sauctionid = addlot.sauctionid');
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
		
		public function sellerbiddetails($sessi){
			$this->db->select('*');
			//$this->db->from($table);
			 $this->db->from('auction');
			$this->db->join('addlot', 'addlot.sauctionid = auction.sauctionid');
			$this->db->join('sellerprofile', 'sellerprofile.sname = auction.sname');
			$this->db->where('susername =', $sessi);
			$query = $this->db->get();
			return $query->result();
		}
		
		public function adminbidhistory(){
			$this->db->select('*');
			//$this->db->from($table);
			 $this->db->from('auction');
			$this->db->join('addlot', 'addlot.sauctionid = auction.sauctionid');
			//$this->db->where('saucclosedate_time >=', $date);
			$this->db->order_by('addlot.id','DESC');
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
		
	
	public function totalmaxvalueseller($sname){
			$this->db->select('*');
			$this->db->select_sum('biddercart.mybid_val');
			$this->db->select_sum('biddercart.sapproval');
			$this->db->from('biddercart');
			$this->db->join('auction', 'auction.sauctionid = biddercart.auctionid');
			$this->db->join('sellerprofile', 'sellerprofile.sname = auction.sname');
			//$this->db->where('auctionid =', $auct);
			$this->db->where('auction.sname =', $sname);
			$query = $this->db->get();
			return $query->result();
		}
		//$this->db->or_where('emd_paid_dd =', 1);

	public function get($table, $data)
	{
		$this->db->where('emdrequest =', 1 <> 'emd_paid_dd =', 1);
		$query = $this->db->get_where($table, $data);
		return $query->result();
	}

	public function totalmaxvaluebuyer($busername)
	{
		$this->db->select('*');
		$this->db->select_sum('mybid_val');
		$this->db->select_sum('sapproval');
		$this->db->from('biddercart');
		$this->db->join('buyerprofile', 'buyerprofile.busername = biddercart.bidderusername');
		//$this->db->where('auctionid =', $auct);
		$this->db->where('bidderusername =', $busername);
		$query = $this->db->get();
		return $query->result();
	}



	public function dateclosedauc($date)
	{
		$this->db->select('*');
		//$this->db->from($table);
		//$this->db->where('aucstartdate_time <=', $date);
		$this->db->from('auction');
		$this->db->join('addlot', 'addlot.sauctionid = auction.sauctionid');
		$this->db->where('saucclosedate_time <', $date);
		//$this->db->where('bidderusername =', $sessi);
		$query = $this->db->get();
		return $query->result();
	}

	public function gettable($table)
	{
		$query = $this->db->get($table);
		return $query->result();
	}
	//Fetching  news from database from latestnews 
	public function gettablenews($table)
	{
		$this->db->limit(2);
		$query = $this->db->get($table);
		return $query->result();
	}

	public function getdatafromtablejoin($table, $table2, $joincolname, $compdata)
	{
		$this->db->select('*');
		$this->db->from($table);
		$this->db->join($table2, "$table.$joincolname = $table2.$joincolname");
		$this->db->where("$table2.sname", $compdata);
		$query = $this->db->get();
		return $query->result();
	}

	public function getdatafromtablejoin7($table, $table2, $joincolname, $compdata)
	{

		$this->db->select('*');
		$this->db->from($table);
		$this->db->join($table2, "$table.$joincolname = $table2.$joincolname");
		$this->db->where("$table2.sauctionid", $compdata);
		$query = $this->db->get();
		return $query->result();
	}


	//Joing aution table and addlot table and fetching all upcomming approved auction  data. 
	public function getdatafromtablehomejoin($date)
	{
		$this->db->select('*');
		$this->db->from('auction');
		//Joing aution table and addlot table using sauctionid 
		$this->db->join('addlot', 'addlot.sauctionid = auction.sauctionid');
		//Fetching approved lots ,if it is approved lot  the satatus will be 1 else it is 0
		$this->db->where('status =', 1);
		//comparing the date and time for filtering the aution lot according to the current time 
		$this->db->where('saucstartdate_time >=', $date);
		//$this->db->limit(4);
		$query = $this->db->get();
		return $query->result();
	}




	//Joining the two tables auction and addlot using sauction and fetching the 
	public function getdatafromtablejoinallauc()
	{
		$this->db->select('*');
		$this->db->from('auction');
		$this->db->join('addlot', 'addlot.sauctionid = auction.sauctionid');
		//$this->db->where('status =', 1);
		//$this->db->limit(4);
		$query = $this->db->get();
		return $query->result();
	}
	//Query for deleting the data from the database 
	public function delete_data($table, $data)
	{
		if ($this->db->delete($table, $data)) {
			return true;
		}
	}
	//Query for Update a table with data and comp
	public function update($table, $data, $comp)
	{
		$this->db->set($data);
		$this->db->where("cat_name", $comp);
		$this->db->update($table, $data);
	}

	public function update_custom($table, $data, $colname, $comp)
	{
		$this->db->set($data);
		$this->db->where($colname, $comp);
		$this->db->update($table, $data);
	}


	public function get_distinct($table, $col, $id)
	{
		$this->db->select($col);
		$this->db->distinct();
		//$query = $this->db->get($table);
		$query = $this->db->get_where($table, array("prod_id" => $id));
		return $query->result();
	}

	public function get_distinctforauc($table, $col, $sname)
	{
		$this->db->select($col);
		$this->db->distinct();
		//$query = $this->db->get($table);
		$query = $this->db->get_where($table, array("sname" => $sname));
		return $query->result();
	}

	public function get_lookalike($table, $col, $query)
	{
		$this->db->from($table);
		$this->db->like($col, $query);
		$q = $this->db->get();
		return $q->result_array();
	}
	public function get_lookalikesellerbid($table, $col, $query)
	{
		//$this->db->select('*');
		$this->db->from($table);
		$this->db->like($col, $query);
		//$this->db->where('susername =', $sessi);
		$q = $this->db->get();
		return $q->result_array();
	}
	public function get_lookalikefromsearch($table, $col, $col2, $query)
	{
		$this->db->select('*');
		$this->db->from($table);
		$this->db->like($col, $query);
		$this->db->or_like($col2, $query);
		//$this->db->where('susername =', $sessi);
		$q = $this->db->get();
		return $q->result_array();
	}

	public function get_lookalikesess($table, $col, $query, $sessi)
	{
		$this->db->from($table);
		$this->db->like($col, $query);
		$this->db->where('susername =', $sessi);
		$q = $this->db->get();
		return $q->result_array();
	}

	public function getdataDSC($table, $data)
	{
		$this->db->order_by("bidamount", "DESC");
		//$this->db->limit(5)
		$query = $this->db->get_where($table, $data);
		return $query->result();
	}


	public function get_lookalikebuysess($table, $col, $query, $sessi)
	{
		$this->db->from($table);
		$this->db->like($col, $query);
		$this->db->where('bidderusername =', $sessi);
		$q = $this->db->get();
		return $q->result_array();
	}


	public function admindateclosedauc($table, $date, $data)
	{
		//$this->db->select('*');
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

	public function get_lookalike2($table, $col, $query)
	{
		$this->db->from($table);
		$this->db->like($col, $query);
		$this->db->where('status =', 1);
		$q = $this->db->get();
		return $q->result_array();
	}

	public function get_lookalike5($table, $col, $query, $date)
	{
		$this->db->from($table);
		$this->db->like($col, $query);
		$this->db->where('saucstartdate_time <=', $date);
		$this->db->where('saucclosedate_time >=', $date);

		return $q->result_array();
	}

	public function get_adminforthlookalike($table, $col, $query, $date)
	{
		$this->db->from($table);
		$this->db->like($col, $query);
		$this->db->where('saucstartdate_time >=', $date);
		$q = $this->db->get();
		return $q->result_array();
	}

	public function get_lookalikehistory($col, $query, $date)
	{
		$this->db->from('auction');
		$this->db->join('addlot', 'addlot.sauctionid = auction.sauctionid');
		$this->db->like($col, $query);
		$this->db->where('saucclosedate_time >', $date);

		return $q->result_array();
	}
	public function getdataDSCclosedate($table, $data)
	{
		//$this->db->limit(5)
		$this->db->order_by("Date_time", "DESC");
		$query = $this->db->get_where($table, $data);
		return $query->result();
	}
	public function select()
	{
		//data is retrive from this query  
		$query = $this->db->get('biddercart');
		return $query;
	}

	public function get_lookalikesearch($table, $col1, $col2, $query)
	{
		$this->db->from($table);
		$this->db->like($col1, $col2, $query);
		$q = $this->db->get();
		return $q->result_array();
	}
}
