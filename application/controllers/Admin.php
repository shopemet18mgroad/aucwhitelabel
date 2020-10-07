<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
		$this->load->view('admin_page');
	}
	public function upload()
	{
		$this->load->view('theme-upload');
		
	}
	public function view_edit()
	{
		$this->load->view('edit-view-theme');
		
	}
	public function add_category()
	{
		$this->load->view('add-category');
		
	}
	public function edit_category()
	{
		$table = 'category';
		
		if($this->input->get('cat_name', TRUE)){
			$catname = $this->input->get('cat_name', TRUE);
			$this->load->model('Admin_model');
			$data = array("cat_name"=>$catname);
			
			$data2['records'] = $this->Admin_model->getdatafromtable($table, $data); 
			$data2['sta'] = false;
			//print_r($data2['records']);
			$this->load->view('edit-category', $data2);
		}else{
			$this->load->model('Admin_model');
			$data['records'] = $this->Admin_model->gettable($table); 
			$data['sta'] = true;
			//print_r($data['records']);
			$this->load->view('edit-category', $data);
		}
		
		
	}
	public function add_prod_parameters()
	{
		$table = 'category';
		$this->load->model('Admin_model');
		$data['records'] = $this->Admin_model->gettable($table); 
		$data['sta'] = true;
		$this->load->view('add-prod-parameters',$data);
		
	}
	public function edit_prod_parameters()
	{
		$table = 'prod_f_data';
		$table2 = 'filter_stock_parmeter_feilds';
		$colname = 'sl_no';
		if($this->input->post('prod_spec_feild')){
			$this->load->model('Admin_model');
			$ctr = 0;
			$prod_spec_cat = $this->input->post('prod_fld_cat');
			$prod_spec_cat_ref = $this->input->post('prod_fld_cat_ref');
			$prod_spec_title = $this->input->post('prod_fld_title');
			$prod_spec_title_ref = $this->input->post('prod_fld_title_ref');
			$prod_spec_feild_id = $this->input->post('prod_spec_feild_id');
			$prod_spec_feild = $this->input->post('prod_spec_feild');
			$prod_spec_feild_ref = $this->input->post('prod_spec_feild_ref');
			
			$sel = $this->input->post('sel');
			foreach($prod_spec_feild_id as $prod_spec_fld)
			{
				$temp_del_data = $sel[$ctr];
				if($temp_del_data == "DELETE"){
					$data2c = array('sl_no'=>$prod_spec_fld);
					$data2d = array('cat_name'=>$prod_spec_cat, 'title'=>$prod_spec_title_ref, 'feild_name'=>$prod_spec_feild[$ctr]);
					$this->Admin_model->delete_data($table, $data2c);
					$this->Admin_model->delete_data($table2, $data2d);
					$ctr++;
				}else{
					$cat_name = $prod_spec_fld;
					$data = array('title' => $prod_spec_title, 'feilds' => $prod_spec_feild[$ctr], 'feilds_type' => $sel[$ctr]);
					$this->Admin_model->update_custom($table,$data,$colname,$cat_name);
					if($prod_spec_title != $prod_spec_title_ref ){
						$data2e = array('title'=>$prod_spec_title);
						$colname2 = "title";
						$cat_name2 = $prod_spec_title_ref;
						$this->Admin_model->update_custom($table2,$data2e,$colname2,$cat_name2);
					}
					if($prod_spec_feild[$ctr] != $prod_spec_feild_ref[$ctr]){
						$data2e = array('feild_name'=> $prod_spec_feild[$ctr]);
						$colname2 = "feild_name";
						$cat_name2 = $prod_spec_feild_ref[$ctr];
						$this->Admin_model->update_custom($table2,$data2e,$colname2,$cat_name2);
					}
					$ctr++;
				}
				
			}
			$sta .= "Data Stored Successfully";
			redirect('../admin/edit_prod_parameters?m='.$sta.'&e=0');
		}
		if($this->input->get('cat', TRUE)){
			$name = $this->input->get('cat', TRUE);
			$title = $this->input->get('tit', TRUE);
			if($name == 'SELECT' || $title == 'SELECT'){
				$sta .= "Category and Title Both Has To Be Selected";
				redirect('../admin/edit_prod_parameters?m='.$sta.'&e=1');
			}
			$this->load->model('Admin_model');
			$data = array("prod_id"=>'0',"cat_name"=>$name,"title"=>$title);
			$data2['unique'] = $this->Admin_model->getdatafromtable($table, $data);
			$data2['sta'] = false;
			//print_r($data2['unique']);
			$this->load->view('edit-prod-feilds', $data2);
		}else{
			$this->load->model('Admin_model');
			$data['unique_cat'] = $this->Admin_model->get_distinct('prod_f_data','cat_name','0'); 
			$data['unique'] = $this->Admin_model->get_distinct('prod_f_data','title','0'); 
			$data['sta'] = true;
			$this->load->view('edit-prod-feilds', $data);
		}
	}
	//=================================================================================================
	public function insert_prod_feilds(){
		$table_name = 'prod_f_data';
		if($this->input->post('prod_spec_name') && $this->input->post('prod_spec_feild'))
			{
				$this->load->model('Admin_model');
				$cat = $this->input->post('cat_name');
				$title = $this->input->post('prod_spec_name');
				$prod_spec_name = $this->input->post('prod_spec_feild');
				$prod_sel = $this->input->post('sel'); 
				$ctr = 0;
				foreach($prod_spec_name as $prod_spec){
					$data = array('prod_id' => '0', 'cat_name' => $cat, 'title' => $title, 'feilds' => $prod_spec, 'feilds_type' => $prod_sel[$ctr], 'data' => '0');
					$match = array('cat_name' => $cat, 'title' => $title, 'feilds' => $prod_spec);
					if(!$this->Admin_model->check($table_name, $match)){
						$this->Admin_model->insert($table_name, $data);
					}else{
						$sta = "Similar Data feilds also exists which will not be stored.";
					}
					$ctr++;
				} 
				$sta .= "Data Stored Successfully";
			
				redirect('../admin/add_prod_parameters?m='.$sta.'&e=0');
				
				
			}else{
				redirect('../admin/add_prod_parameters?m=Please add feilds and Retry!&e=1');
			}
				
	}
	public function store_categoery(){
		$table_name = 'category';
		if($this->input->post('cat_name'))
			{
				$this->load->model('Admin_model');
				$cat_name = $this->input->post('cat_name');
				$seo_title = $this->input->post('seo_title');
				$seo_description = $this->input->post('seo_description');
				$seo_keywords = $this->input->post('seo_keywords'); 
				$prod_specbox = $this->input->post('specboxname');
				$data = array('cat_name' => $cat_name, 'seo_title' => $seo_title, 'seo_description' => $seo_description, 'seo_keywords' => $seo_keywords, 'prod_spec_title' => $prod_specbox);
				$this->Admin_model->insert($table_name, $data);
				
				$sta = "Data Stored Successfully";
			
				redirect('../admin/add_category?m='.$sta.'&e=0');
				
				
			}else{
				redirect('../admin/add_category?m=Please add feilds and Retry!&e=1');
			}
				
	}
	public function edit_categoery(){
		$table_name = 'category';
		$table_name_2 = 'filter_stock_parmeter_feilds';
		$col = "cat_name";
		if($this->input->post('cat_name'))
			{
				$this->load->model('Admin_model');
				$cat_name = $this->input->post('cat_name');
				$cat_name_ref = $this->input->post('cat_name_ref');
				$seo_title = $this->input->post('seo_title');
				$seo_description = $this->input->post('seo_description');
				$seo_keywords = $this->input->post('seo_keywords'); 
				$prod_specbox = $this->input->post('specboxname');
				$data = array('cat_name' => $cat_name, 'seo_title' => $seo_title, 'seo_description' => $seo_description, 'seo_keywords' => $seo_keywords, 'prod_spec_title' => $prod_specbox);
				$data2 = array('cat_name' => $cat_name);
				$this->Admin_model->update($table_name,$data,$cat_name_ref);
				$this->Admin_model->update_custom($table_name_2,$data2,$col,$cat_name_ref);
				$sta = "Data Modified Successfully";
				redirect('../admin/edit_category?m='.$sta.'&e=0');
				
			}else{
				redirect('../admin/edit_category?m=Data Modification Failed!&e=1');
			}
				
	}
	public function add_stock_parameters(){
		if($this->input->post('title')){
			$this->load->model('Admin_model');
			$table_name = "filter_stock_parmeter_feilds";
			$cat_name = $this->input->post('prod_stock');
			$title = $this->input->post('title');
			$add2 = $this->input->post('add');
			if($cat_name == 'SELECT'){
				redirect('../admin/add_stock_parameters?m=Please Select Category!&e=1');
			}else if(empty($add2)){
					$data2a = array('cat_name' => $cat_name,'is_stock' => FALSE);
					$data2b = array('cat_name' => $cat_name, 'is_stock' => TRUE);
					if($this->Admin_model->check($table_name, $data2a) || $this->Admin_model->check($table_name, $data2b)){
						redirect('../admin/add_stock_parameters?m=Feild ALready Exists!&e=1');
					}else{
						$data = array('cat_name' => $cat_name, 'is_stock' => FALSE);
						$this->Admin_model->insert($table_name, $data);
						redirect('../admin/add_stock_parameters?m=Data Added With Out Feilds Successfully&e=0');
					}
				
			}else{
				$data2c = array('cat_name' => $cat_name,'is_stock' => FALSE);
				if($this->Admin_model->check($table_name, $data2c)){
					$this->Admin_model->delete_data($table_name, $data2c);
					foreach($add2 as $add){
					$data = array('cat_name' => $cat_name, 'title' => $title, 'feild_name' => $add, 'is_stock' => TRUE);
					$data2 = array('feild_name' => $add);
						if($this->Admin_model->check($table_name, $data)){
							redirect('../admin/add_stock_parameters?m=Feild already Exists!&e=1');
						}else{
							$this->Admin_model->insert($table_name, $data);
						}
					}
					redirect('../admin/add_stock_parameters?m=Data Added Successfully&e=0');
				}else{
					foreach($add2 as $add){
					$data = array('cat_name' => $cat_name, 'title' => $title, 'feild_name' => $add, 'is_stock' => TRUE);
					$data2 = array('feild_name' => $add);
						if($this->Admin_model->check($table_name, $data)){
							redirect('../admin/add_stock_parameters?m=Feild already Exists!&e=1');
						}else{
							$this->Admin_model->insert($table_name, $data);
						}
					}
					redirect('../admin/add_stock_parameters?m=Data Added Successfully&e=0');
				}
				
			}
			
		}else{
			$table = "category";
			$table2 = "prod_f_data";
			$this->load->model('Admin_model');
			$data['records'] = $this->Admin_model->gettable($table);
			$datap = array('prod_id'=>'0','feilds_type'=>'FILTER');
			$data['records2'] = $this->Admin_model->getdatafromtable($table2, $datap);
			$data['sta'] = true;
			$this->load->view('edit-add-stock-parmeters',$data);
		}
	}
	public function edit_stock_parameters(){
		$table = "filter_stock_parmeter_feilds";
		if($this->input->post('cat')){
			$com_arr = $this->input->post('com_arr');
			$add = $this->input->post('add');
			if(!$add){
				$final_output = $com_arr;
			}else{
				$clean1 = array_diff($com_arr, $add); 
				$clean2 = array_diff($add, $com_arr);
				$final_output = array_merge($clean1, $clean2);
			}
			$this->load->model('Admin_model');
			foreach($final_output as $fo){
				$data2c = array('sl_no'=>$fo);
				$this->Admin_model->delete_data($table, $data2c);
			}
			redirect('../admin/edit-stock-parameters?m=Record Removed Successfully&e=0');
		}else{
			
			$this->load->model('Admin_model');
			$data['records'] = $this->Admin_model->gettable($table);
			$data['sta'] = true;
			$this->load->view('edit-stock-parmeters',$data);
		}
			
	}
	public function add_filter_options(){
		$this->load->model('Admin_model');
		$table = "filter_stock_parmeter_feilds";
		$table_2 = "prod_f_data";
		$col = "sl_no";
		if($this->input->post('com_arr')){
			$com_arr = $this->input->post('com_arr');
			if($com_arr){
				foreach ($com_arr as $com){
					if($this->input->post($com)){
						$option = $this->input->post($com);
						if($option){
							
							$data = array('options'=>serialize($option));
							$this->Admin_model->update_custom($table,$data,$col,$com);
						}
					}
					
					
				}
				redirect('../admin/add-filter-options?m=Data Stored Successfully&e=0');
			}
		}
		
		$this->load->model('Admin_model');
		$data['records'] = $this->Admin_model->gettable($table);
		$data['sta'] = true;
		$this->load->view('add-filter-options',$data);
		//$this->load->view('add-filter-options');
	}
	public function edit_filter_options(){
		$this->load->model('Admin_model');
		$table = "filter_stock_parmeter_feilds";
		$col = "sl_no";
		if($this->input->post('com_arr')){
			$com_arr = $this->input->post('com_arr');
			if($com_arr){
				foreach ($com_arr as $com){
					if($this->input->post($com)){
						$option = $this->input->post($com);
						if($option){
							
							$data = array('options'=>serialize($option));
							$this->Admin_model->update_custom($table,$data,$col,$com);
						}
					}
					
					
				}
				redirect('../admin/edit-filter-options?m=Data Modified Successfully&e=0');
			}
		}
		$table = "filter_stock_parmeter_feilds";
		$this->load->model('Admin_model');
		$data['records'] = $this->Admin_model->gettable($table);
		$data['sta'] = true;
		$this->load->view('edit-filter-options',$data);
	}
	public function add_products(){
			$table = "category";
			$table2 = "prod_f_data";
			if($this->input->post('cat_name')){
				echo $this->input->post('product_desc');
			}else if($this->input->get('name', TRUE)){
				$name = $this->input->get('name', TRUE);
				$this->load->model('Admin_model');
				$uni = $data['uni'] = $this->Admin_model->get_distinct_par_2('prod_f_data','title','0',$name); 
				$data['t_uni'] = count($data['uni']);
				$ctr = 0;
				foreach ($uni as $u){
					$arr = array('prod_id'=>'0','cat_name'=>$name,'title'=>$u->title);
					$data['i'.$ctr] = $this->Admin_model->getdatafromtable($table2, $arr);
					$ctr++;
				}
				$data['records'] = $name; 
				//$data['records'] = $this->Admin_model->gettable($table); 
				$data['sta'] = false;
				//print_r($data['records']);
				$data['controller']=$this;
				$this->load->view('add-products', $data);
			}else{
				$this->load->model('Admin_model');
				$data['records'] = $this->Admin_model->gettable($table); 
				$data['sta'] = true;
				//print_r($data['records']);
				$this->load->view('add-products', $data);
			}
			
	
	}
	public function query_db($data1, $data2, $data3){
		$this->load->model('Admin_model');
		$arr = array('prod_id'=>'0','cat_name'=>$name,'title'=>$u->title);
	}
}
?>