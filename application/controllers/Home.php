<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

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

		$this->load->helper('url');

		$this->load->helper(array('url', 'html', 'date'));
		//Setting  default time zone
		date_default_timezone_set('Asia/Kolkata');
		//initaliazing the current time 
		$time =  Date('Y-m-d H:i:s');
		$time2 = strtotime(Date('Y-m-d'));
		//Loading Admin Model
		$this->load->model('Admin_model');
		//Fetching the apporved forthcoming auctions lot using  getdatafromtablehomejoin model
		//sqldata1 is for passing data from auction table using getdatafromtablehomejoin model
		$data['sqldata1'] = $this->Admin_model->getdatafromtablehomejoin($time);
		//fetching todays auction from datebetweenhome. 
		$data['sqldata'] = $this->Admin_model->datebetweenhome2($time2);
		//print_r($data['sqldata']); die;
		//Fetching  news from database from latestnews.
		$data['lnews'] = $this->Admin_model->gettablenews('latestnews');
		//Fetching Data from the auction and add lot table. 
		$data['all'] = $this->Admin_model->getdatafromtablejoinallauc();
		$data['tender_today'] = $this->Admin_model->getdatafromtablejoinalltentoday($time2);
		//print_r($data['tender_today']);die;
		$data['upcoming_tender'] = $this->Admin_model->getdatafromtablejoinalltenup($time2);
		//print_r($data['upcoming_tender']);die;
		$data['sql'] = $this->Admin_model->datebetweenhomemarquee($time);
		 //echo "<pre>";
		//print_r($data['sql']);  
		//echo "</pre>";die;  
		//Fetching all the data from  both tables and saving the the data into the variable called $data and passing all the values to the view.
		$this->load->view('header',$data);
		$this->load->view('home', $data);
		$this->load->view('footer');
	}
}