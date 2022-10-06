<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vehicle extends CI_Controller {

	 
    public function __construct(){
        parent::__construct();
        
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('Vehicle_Model');
        $this->load->model('Post_Model');
		$this->load->library("pagination");
    }
    
	public function index(){
		$data['Title'] ="";
		$data['Post'] = $this->Vehicle_Model->PostByID();
		$data['gallaryImages'] = $this->Vehicle_Model->gallaryPostByID();
		$data['themesetting'] = $this->Post_Model->themeSetting();
		$this->load->view('templates/header');
		$this->load->view('pages/single-vehicle',$data);
		$this->load->view('templates/footer');
	}
	public function advanceSearch(){
		
		$data['Title'] ="";
		$data['carCategories'] = $this->Post_Model->car_categories();
		$data['carBrandmodels'] = $this->Post_Model->car_brandmodels();
		$data['carState'] = $this->Post_Model->car_state();
		$data['getBrand'] = $this->Post_Model->getBrand();
		$data['searchcount'] = $this->Vehicle_Model->searchFilter();
		$data['themesetting'] = $this->Post_Model->themeSetting();
		/*$mileage = array();					
		for ($x = 5; $x <= 50; $x++) {
			$mileage[$x] = $x.' miles';
		}
		$data['mileage']=	$mileage;
		*/
		$data['mileage']= array(
				"100"  =>"Up to 100 Km",
				"500"  =>"Up to 500 Km",
				"5000"     =>"Up to 5,000 Km",
				"10000"  =>"Up to 10,000 Km",
				"15000"  =>"Up to 15,000 Km",
				"20000"  =>"Up to 20,000 Km",
				"25000"  =>"Up to 25,000 Km",
				"30000"  =>"Up to 30,000 Km",
				"35000"  =>"Up to 35,000 Km",
				"40000"  =>"Up to 40,000 Km",
				"45000"  =>"Up to 45,000 Km",
				"50000"  =>"Up to 50,000 Km",
				"60000"  =>"Up to 60,000 Km",
				"70000"  =>"Up to 70,000 Km",
				"80000"  =>"Up to 80,000 Km",
				"90000"  =>"Up to 90,000 Km",
				"100000"  =>"Up to 100,000 Km",
				"125000"  =>"Up to 125,000 Km",
				"150000"  =>"Up to 150,000 Km",
				"200000"  =>"Up to 200,000 Km",
				"250000"  =>"More than 200,000 Km",
			);
		$data['price']=  array(
								100=>'Up to 100',500=>'Up to 500',5000=>'Up to 5,000',
								10000=>'Up to 10,000',15000=>'Up to 15,000',20000=>'Up to 20,000',
								25000=>'Up to 25,000',30000=>'Up to 30,000',35000=>'Up to 35,000',
								40000=>'Up to 40,000',45000=>'Up to 45,000',50000=>'Up to 50,000',
								60000=>'Up to 60,000',70000=>'Up to 70,000',80000=>'Up to 80,000',
								90000=>'Up to 90,000',100000=>'Up to 100,000',125000=>'Up to 125,000',
								150000=>'Up to 150,000',200000=>'Up to 200,000s'
							);					
		$this->load->view('templates/header');
		$this->load->view('pages/advance-search',$data);
		$this->load->view('templates/footer');
	}
	public function usedCar(){
		$data['Title'] ="";
		$data['carCategories'] = $this->Post_Model->car_categories();
		$data['carBrandmodels'] = $this->Post_Model->car_brandmodels();
		$data['carState'] = $this->Post_Model->car_state();
		$data['getBrand'] = $this->Post_Model->getBrand();
		$data['searchcount'] = $this->Vehicle_Model->searchFilter();
		$data['themesetting'] = $this->Post_Model->themeSetting();
		/*$mileage = array();					
		for ($x = 5; $x <= 50; $x++) {
			$mileage[$x] = $x.' miles';
		}
		$data['mileage']=	$mileage;
		*/
		$data['mileage']= array(
				"100"  =>"Up to 100 Km",
				"500"  =>"Up to 500 Km",
				"5000"     =>"Up to 5,000 Km",
				"10000"  =>"Up to 10,000 Km",
				"15000"  =>"Up to 15,000 Km",
				"20000"  =>"Up to 20,000 Km",
				"25000"  =>"Up to 25,000 Km",
				"30000"  =>"Up to 30,000 Km",
				"35000"  =>"Up to 35,000 Km",
				"40000"  =>"Up to 40,000 Km",
				"45000"  =>"Up to 45,000 Km",
				"50000"  =>"Up to 50,000 Km",
				"60000"  =>"Up to 60,000 Km",
				"70000"  =>"Up to 70,000 Km",
				"80000"  =>"Up to 80,000 Km",
				"90000"  =>"Up to 90,000 Km",
				"100000"  =>"Up to 100,000 Km",
				"125000"  =>"Up to 125,000 Km",
				"150000"  =>"Up to 150,000 Km",
				"200000"  =>"Up to 200,000 Km",
				"250000"  =>"More than 200,000 Km",
			);
		$this->load->view('templates/header');
		$this->load->view('pages/used-car',$data);
		$this->load->view('templates/footer');
	}
	public function rentCar(){
		$data['Title'] ="";
		$data['carCategories'] = $this->Post_Model->car_categories();
		$data['carBrandmodels'] = $this->Post_Model->car_brandmodels();
		$data['carState'] = $this->Post_Model->car_state();
		$data['getBrand'] = $this->Post_Model->getBrand();
		$data['searchcount'] = $this->Vehicle_Model->searchFilter();
		$data['themesetting'] = $this->Post_Model->themeSetting();
		/*$mileage = array();					
		for ($x = 5; $x <= 50; $x++) {
			$mileage[$x] = $x.' miles';
		}
		$data['mileage']=	$mileage;
		*/
		$data['mileage']= array(
				"100"  =>"Up to 100 Km",
				"500"  =>"Up to 500 Km",
				"5000"     =>"Up to 5,000 Km",
				"10000"  =>"Up to 10,000 Km",
				"15000"  =>"Up to 15,000 Km",
				"20000"  =>"Up to 20,000 Km",
				"25000"  =>"Up to 25,000 Km",
				"30000"  =>"Up to 30,000 Km",
				"35000"  =>"Up to 35,000 Km",
				"40000"  =>"Up to 40,000 Km",
				"45000"  =>"Up to 45,000 Km",
				"50000"  =>"Up to 50,000 Km",
				"60000"  =>"Up to 60,000 Km",
				"70000"  =>"Up to 70,000 Km",
				"80000"  =>"Up to 80,000 Km",
				"90000"  =>"Up to 90,000 Km",
				"100000"  =>"Up to 100,000 Km",
				"125000"  =>"Up to 125,000 Km",
				"150000"  =>"Up to 150,000 Km",
				"200000"  =>"Up to 200,000 Km",
				"250000"  =>"More than 200,000 Km",
			);
		$this->load->view('templates/header');
		$this->load->view('pages/rent-car',$data);
		$this->load->view('templates/footer');
	}
	public function newCar(){
		$data['Title'] ="";
		$data['carCategories'] = $this->Post_Model->car_categories();
		$data['carBrandmodels'] = $this->Post_Model->car_brandmodels();
		$data['carState'] = $this->Post_Model->car_state();
		$data['getBrand'] = $this->Post_Model->getBrand();
		$data['searchcount'] = $this->Vehicle_Model->searchFilter();
		$data['themesetting'] = $this->Post_Model->themeSetting();
	    	/*$mileage = array();					
		for ($x = 5; $x <= 50; $x++) {
			$mileage[$x] = $x.' miles';
		}
		$data['mileage']=	$mileage;
		*/
		$data['mileage']= array(
				"100"  =>"Up to 100 Km",
				"500"  =>"Up to 500 Km",
				"5000"     =>"Up to 5,000 Km",
				"10000"  =>"Up to 10,000 Km",
				"15000"  =>"Up to 15,000 Km",
				"20000"  =>"Up to 20,000 Km",
				"25000"  =>"Up to 25,000 Km",
				"30000"  =>"Up to 30,000 Km",
				"35000"  =>"Up to 35,000 Km",
				"40000"  =>"Up to 40,000 Km",
				"45000"  =>"Up to 45,000 Km",
				"50000"  =>"Up to 50,000 Km",
				"60000"  =>"Up to 60,000 Km",
				"70000"  =>"Up to 70,000 Km",
				"80000"  =>"Up to 80,000 Km",
				"90000"  =>"Up to 90,000 Km",
				"100000"  =>"Up to 100,000 Km",
				"125000"  =>"Up to 125,000 Km",
				"150000"  =>"Up to 150,000 Km",
				"200000"  =>"Up to 200,000 Km",
				"250000"  =>"More than 200,000 Km",
			);
		//$data['mileage']=	$mileage;
		$this->load->view('templates/header');
		$this->load->view('pages/new-car',$data);
		$this->load->view('templates/footer');
	}
	function searchFilter(){
		$data = $this->Vehicle_Model->searchFilter();
		echo $data;
	}
	
	public function advresults(){
	    //echo "<pre>"; print_r($_POST); die;
		if(!empty($_POST)){
			$data['postData'] = $_POST;
		}
		
		$data['Title'] ="";
		$data['carCategories'] = $this->Post_Model->car_categories();
		$data['carBrandmodels'] = $this->Post_Model->car_brandmodels();
		$data['carState'] = $this->Post_Model->car_state();
		$data['getBrand'] = $this->Post_Model->getBrand();
		$data['searchcount'] = $this->Vehicle_Model->searchFilter();
		$data['themesetting'] = $this->Post_Model->themeSetting();
		
			/*$mileage = array();					
		for ($x = 5; $x <= 50; $x++) {
			$mileage[$x] = $x.' miles';
		}
		$data['mileage']=	$mileage;
		*/
		$data['mileage']= array(
				"100"  =>"Up to 100 Km",
				"500"  =>"Up to 500 Km",
				"5000"     =>"Up to 5,000 Km",
				"10000"  =>"Up to 10,000 Km",
				"15000"  =>"Up to 15,000 Km",
				"20000"  =>"Up to 20,000 Km",
				"25000"  =>"Up to 25,000 Km",
				"30000"  =>"Up to 30,000 Km",
				"35000"  =>"Up to 35,000 Km",
				"40000"  =>"Up to 40,000 Km",
				"45000"  =>"Up to 45,000 Km",
				"50000"  =>"Up to 50,000 Km",
				"60000"  =>"Up to 60,000 Km",
				"70000"  =>"Up to 70,000 Km",
				"80000"  =>"Up to 80,000 Km",
				"90000"  =>"Up to 90,000 Km",
				"100000"  =>"Up to 100,000 Km",
				"125000"  =>"Up to 125,000 Km",
				"150000"  =>"Up to 150,000 Km",
				"200000"  =>"Up to 200,000 Km",
				"250000"  =>"More than 200,000 Km",
			);
		$data['price']=  array(
								100=>'Up to 100',500=>'Up to 500',5000=>'Up to 5,000',
								10000=>'Up to 10,000',15000=>'Up to 15,000',20000=>'Up to 20,000',
								25000=>'Up to 25,000',30000=>'Up to 30,000',35000=>'Up to 35,000',
								40000=>'Up to 40,000',45000=>'Up to 45,000',50000=>'Up to 50,000',
								60000=>'Up to 60,000',70000=>'Up to 70,000',80000=>'Up to 80,000',
								90000=>'Up to 90,000',100000=>'Up to 100,000',125000=>'Up to 125,000',
								150000=>'Up to 150,000',200000=>'Up to 200,000'
							);					
		$this->load->view('templates/header');
		$this->load->view('pages/adv-results',$data);
		$this->load->view('templates/footer');
	}
	
	public function loadRecord($rowno=0){
	    $rowno =$_POST['pagno'];
		// Row per page
		$rowperpage = 10;
		// Row position
		if($rowno != 0){
			$rowno = ($rowno-1) * $rowperpage;
		}
      	
      	// All records count
      	$allcount = $this->Vehicle_Model->getrecordCount();
		// Get  records
      	$users_record = $this->Vehicle_Model->getData($rowno,$rowperpage);
      	
      	// Pagination Configuration
      	$config['base_url'] = base_url().'vehicle/loadRecord';
      	$config['use_page_numbers'] = TRUE;
		$config['total_rows'] = $allcount;
		$config['per_page'] = $rowperpage;
		$config['anchor_class'] = 'class="number" ';
		// Initialize
		$this->pagination->initialize($config);

		// Initialize $data Array
		$data['pagination'] = $this->pagination->create_links();
		$data['result'] = $users_record;
		$data['row'] = $rowno;
		$data['allcount'] = $allcount;
		echo json_encode($data);
		
	}
	
	function contactseller(){
		$data = $this->Vehicle_Model->contactseller();
		echo $data;
	}
	
}
