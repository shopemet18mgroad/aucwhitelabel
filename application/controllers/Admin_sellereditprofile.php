<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_sellereditprofile extends CI_Controller {
	function __construct() {
        parent::__construct();
        $this->output->delete_cache();
    }

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
		$this->load->helper(array('url','html'));
		$this->load->library('session');
		$sess = array('sessi'=>$this->session->userdata('username'));
		$this->load->view('admin/header',$sess);
		//$this->load->view('admin/header');
		$this->load->view('admin/sellereditprofile');
		$this->load->view('admin/footer');
		
	}
	public function get_table(){
		$datatoquerydb = $this->uri->segment(3);
		$this->load->model('Admin_model');
		$data = $this->Admin_model->get_lookalike('sellerprofile','scomapnyname',$datatoquerydb);
		if(count($data)){
			echo '<table class="table table-striped table-bordered table-sm text-center mt-5" width="100%" cellspacing="0">';
			echo '<thead class="bg-primary text-white">';
			echo '<tr>';
			echo '<th>Seller Name</th>';
			echo '<th>Company Name</th>';
			echo '<th>Contact Person</th>';
			echo '<th>Location</th>';
			echo '<th>City</th>';
			echo '<th>Status</th>';
			echo '<th>Action</th>';
			echo '</tr>';
			echo '</thead>';
			echo '<tbody>';
			foreach($data as $dat){
				echo '<tr>';	
				echo '<td>'.$dat['sname'].'</td>';
				echo '<td>'.$dat['scomapnyname'].'</td>';
				echo '<td>'.$dat['scontactperson'].'</td>';
				echo '<td>'.$dat['slocation'].'</td>';
				echo '<td>'.$dat['scity'].'</td>';
				echo '<td>'.$dat['spin'].'</td>';
				echo '<td><a href="'.base_url().'admin_editseller/edit_seller/'.$dat['scomapnyname'].'">';	
				echo '<i class="fa fa-edit"></i>';
				echo '</a>';
				echo '<a href="'.base_url().'admin_editseller/delete_seller/'.$dat['scomapnyname'].'" class="btn btn-sm text-white delete-confirm">';
				echo '<i class="fa fa-trash" style="color:black"></i>';
				echo '</a>';
				echo '</td>';
				echo '</td>';
				echo '</tr>';
			}
			echo '</tbody>';
			echo '</table>';
		}else{
			echo '<table class="table table-striped table-bordered table-sm text-center mt-5" width="100%" cellspacing="0">';
			echo '<thead class="bg-primary text-white">';
			echo '<tr>';
			echo '<th>Seller Name</th>';
			echo '<th>Company Type</th>';
			echo '<th>Contact Person</th>';
			echo '<th>Location</th>';
			echo '<th>City</th>';
			echo '<th>Status</th>';
			echo '<th>Action</th>';
			echo '</tr>';
			echo '</thead>';
			echo '<tbody>';
			echo '<tr>';
				echo '<td>No Records Found</td>';
				echo '<td>No Records Found</td>';
				echo '<td>No Records Found</td>';
				echo '<td>No Records Found</td>';
				echo '<td>No Records Found</td>';
				echo '<td>No Records Found</td>';
				echo '<td><a href="'.base_url().'#">';
				echo '<i class="fa fa-edit"></i>';
				echo '</a>';
				echo '<a href="'.base_url().'#">';
				echo '<i class="fa fa-trash" style="color:black"></i>';
				echo '</a>';
				echo '</td>';
				echo '</td>';
				echo '</tr>';
			echo '</tbody>';
			echo '</table>';
		}



	}
	
	
}



echo "<script>\n";
echo "$('.delete-confirm').on('click', function (event) {\n";
echo "    event.preventDefault();\n";
echo "    const url = $(this).attr('href');\n";
echo "    swal({\n";
echo "        title: 'Are you sure?',\n";
echo "        text: 'This record and it`s details will be permanantly deleted!',\n";
echo "        icon: 'warning',\n";
echo "        buttons: [\"Cancel\", \"Yes!\"],\n";
echo "    }).then(function(value) {\n";
echo "        if (value) {\n";
echo "            window.location.href = url;\n";
echo "        }\n";
echo "    });\n";
echo "});\n";
echo "</script>\n";

