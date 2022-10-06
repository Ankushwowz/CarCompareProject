<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Administrator extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->config('email');
        $this->load->library('email');
        $this->load->model('administrator_model');
		$this->load->model('Post_Model');
    }
	function logout(){
		session_start(); 
		session_destroy();
		unset($_SESSION);
		session_regenerate_id(true);
		redirect('/');
    }
	function logoutbyadmin(){
		session_start(); 
		session_destroy();
		unset($_SESSION);
		session_regenerate_id(true);
		redirect('/administrator');
    }
    function logoutbycorporate(){
		session_start(); 
		session_destroy();
		unset($_SESSION);
		session_regenerate_id(true);
		redirect('/corporate-administrator');
    }
	public function loginMe(){
		if(!empty($_POST['SignIn'])){
			$email = strtolower($this->security->xss_clean($this->input->post('email')));
			$password = $this->input->post('password');
			$result = $this->administrator_model->loginMe($email, $password);
			
				if($result){
				   $sessionArray = array(
						'user_id' => $result['id'],
						'email' => $result['user_email'],
						'role' => $result['user_type']
					);
					$this->session->set_userdata($sessionArray);
					redirect('dashboard');
				}
				else{
					 $this->session->set_flashdata('error', 'Email or password does not match');
					 $this->load->view('/administrator/login');
				}
		}else{
			$this->load->view('/administrator/login');
		}
	}



    /* Forgot Password Start Here*/
	
	public function forgetpassword(){
	    if (!empty($_POST['forgetpassword']))
        {
	    $email = $this->input->post('email');
	    
	    $findemail = $this->administrator_model->ForgotPassword($email);
	    //echo "<pre>"; print_r($findemail); die;
	    
	      if($findemail){
            $useremail = $findemail['user_email'];
      		$password = $findemail['plain_password'];
            $to = $useremail;
            $subject = "Forget Password";
            $message ="<html>
    					<head>
    					<title>Car Compare</title>
    					</head>
    					<body>
    					<p>Dear $useremail</p>
    					<table>
    					<tr>
    					<td><p>Your forget password credentials are below:-</p></td>
    					</tr>
    					<tr>
    					<td><p>Your Email is $useremail and Your Password is <b>$password</b></p></td>
    					</tr>
    					<tr><td><p>Thank You</p></td>
    					</tr>
    					</tr>
    					<tr><td><p>Car Compare</p></td>
    					</tr>
    					</table>
    					</body>
    					</html>";

                    $send = $this->send($to,$subject,$message);	
                	if($send){
                		$this->session->set_flashdata('success','Thanks for Contacting Us. We send your credentials!! Please check your email');
                		redirect('forget-password');
                	}else{
                		 //error
                		echo "NO";
                	}
                      
               }else{
              $this->session->set_flashdata('error',' Email not found!');
              redirect('forget-password','refresh');
          }
	    
        }else{  
            $this->load->view('/administrator/forget-password');
        }
       
    }
	
	/* Forgot Password End Here*/
	
      function send($to,$subject,$message) {
        $this->load->config('email');
        $this->load->library('email');
        $from = $this->config->item('smtp_user');
        $to = $to;
        $subject = $subject;
        $message = $message;

        $this->email->set_newline("\r\n");
        $this->email->from($from);
        $this->email->to($to);
        $this->email->subject($subject);
        $this->email->message($message);

        if ($this->email->send()) {
			return 1;
            //echo 'Your Email has successfully been sent.';
        } else {
			return 0;
            //show_error($this->email->print_debugger());
        }
    }
    
    public function dashboard(){
        $user_id = $this->session->userdata('user_id');
        //echo "<pre>"; print_r($user_id); die;
		$data['pageTitle'] = 'Cardealer : Dashboard';    
		$data['InventoryCount'] = 	$this->administrator_model->sellCar();
		$data['UserName'] = 	$this->administrator_model->getUserName($user_id);
		//echo "<pre>"; print_r($data['UserName']); die;
		$this->load->view('administrator/includes/header',$data);
		$this->load->view('administrator/dashboard');
		$this->load->view('administrator/includes/footer');
       
    }
    
	public function sellCar(){
		$data['pageTitle'] = 'Cardealer : Sell vehicle'; 
		$data['Records'] = $this->administrator_model->sellCar();
		//echo "<pre>"; print_r($data['Records']); die;
		$this->load->view('administrator/includes/header',$data);
		$this->load->view('administrator/sell-car');
		$this->load->view('administrator/includes/footer');
       
    }
	public function editvehicle($id){
		if(!empty($_POST['updatevehicle'])){
			$updateRecords = $this->administrator_model->updateRecords();
			 if($this->session->userdata('role')==3){ 
			$this->session->set_flashdata('success', 'Inventory has been updated successfully');
			 }else{
			 $this->session->set_flashdata('success', 'This post has been updated successfully');
			 }
			//$this->session->set_flashdata('success', 'Service has been Updated successfully.');	
			redirect('administrator/sell-car/');
			
		}
		$data['pageTitle'] = 'Cardealer : Edit vehicle';
		$data['carCategories'] = $this->Post_Model->car_categories();
		$data['carBrandmodels'] = $this->Post_Model->car_brandmodels();
		$data['carState'] = $this->Post_Model->car_state();
		$data['getBrand'] = $this->Post_Model->getBrand();
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
		$data['Records'] = $this->administrator_model->editvehicle($id);
		//echo "<pre>"; print_r($data['Records']); die;
		$data['galleryRecords'] = $this->administrator_model->galleryRecords($id);	
		
		$this->load->view('administrator/includes/header',$data);
		$this->load->view('administrator/edit-vehicle');
		$this->load->view('administrator/includes/footer');
       
    }
	function addImageGallary(){
			$data = $this->administrator_model->addImageGallary();
			echo json_encode($data);
	}
	function deletevehicle(){
			$data = $this->administrator_model->deletevehicle();
			echo $data;
	}
	public function users(){
		$data['pageTitle'] = 'Cardealer : Users'; 
		$data['Records'] = $this->administrator_model->users();		
		$this->load->view('administrator/includes/header',$data);
		$this->load->view('administrator/users');
		$this->load->view('administrator/includes/footer');
    }
	function deleteuser(){
			$data = $this->administrator_model->deleteuser();
			echo $data;
	}
	public function category(){
		$data['pageTitle'] = 'Cardealer : category'; 
		$data['Records'] = $this->administrator_model->category();		
		$this->load->view('administrator/includes/header',$data);
		$this->load->view('administrator/category');
		$this->load->view('administrator/includes/footer');
    }
	public function addcategory(){
		$data['pageTitle'] = 'Cardealer : add category';
		if(!empty($_POST['submit'])){
			$this->administrator_model->addcategory();	
			$this->session->set_flashdata('success', 'Category has been added succesfully');
			
		}	
			
		$this->load->view('administrator/includes/header',$data);
		$this->load->view('administrator/addcategory');
		$this->load->view('administrator/includes/footer');
    }
	function deletecategory(){
			$data = $this->administrator_model->deletecategory();
			echo $data;
	}
	public function editcategory($id){
		$data['pageTitle'] = 'Cardealer : Edit category';
		$data['Records'] = $this->administrator_model->getcategorybyid($id);
		if(!empty($_POST['submit'])){
			$this->administrator_model->editcategory($id);	
			redirect('administrator/category');
		}	
			
		$this->load->view('administrator/includes/header',$data);
		$this->load->view('administrator/editcategory');
		$this->load->view('administrator/includes/footer');
    }
	public function brand(){
		$data['pageTitle'] = 'Cardealer : Brand'; 
		$data['Records'] = $this->administrator_model->brand();		
		
		$this->load->view('administrator/includes/header',$data);
		$this->load->view('administrator/brand');
		$this->load->view('administrator/includes/footer');
    }
	public function addbrand(){
		$data['pageTitle'] = 'Cardealer : add brand';
		if(!empty($_POST['submit'])){
			$this->administrator_model->addbrand();	
			$this->session->set_flashdata('success', 'Brand has been added succesfully');
			
		}	
		
		
		$this->load->view('administrator/includes/header',$data);
		$this->load->view('administrator/addbrand');
		$this->load->view('administrator/includes/footer');
    }
	function deletebrand(){
			$data = $this->administrator_model->deletebrand();
			echo $data;
	}
	public function editbrand($id){
		$data['pageTitle'] = 'Cardealer : Edit brand';
		$data['category'] = $this->administrator_model->category();
		$data['Records'] = $this->administrator_model->getbrandbyid($id);
		
		if(!empty($_POST['submit'])){
			$this->administrator_model->editbrand($id);	
			redirect('administrator/brand');
		}	
			
		$this->load->view('administrator/includes/header',$data);
		$this->load->view('administrator/editbrand');
		$this->load->view('administrator/includes/footer');
    }
	
	public function model(){
		$data['pageTitle'] = 'Cardealer : Model'; 
		$data['Records'] = $this->administrator_model->model();		
		$this->load->view('administrator/includes/header',$data);
		$this->load->view('administrator/model');
		$this->load->view('administrator/includes/footer');
    }
	public function addmodel(){
		$data['pageTitle'] = 'Cardealer : add model';
		if(!empty($_POST['submit'])){
			$this->administrator_model->addmodel();	
			$this->session->set_flashdata('success', 'Model has been added succesfully');
			
		}
      $data['category'] = $this->administrator_model->category();			
		$data['brand'] = $this->administrator_model->getbrand();	
		
		$this->load->view('administrator/includes/header',$data);
		$this->load->view('administrator/addmodel');
		$this->load->view('administrator/includes/footer');
    }
	public function editmodel($id){
		$data['pageTitle'] = 'Cardealer : Edit model';
		$data['brand'] = $this->administrator_model->getbrand();
		$data['Records'] = $this->administrator_model->getmodelbyid($id);
		 $data['category'] = $this->administrator_model->category();	
		if(!empty($_POST['submit'])){
			$this->administrator_model->editmodel($id);	
			redirect('administrator/model');
		}	
			
		$this->load->view('administrator/includes/header',$data);
		$this->load->view('administrator/editmodel');
		$this->load->view('administrator/includes/footer');
    }
	function deletemodel(){
			$data = $this->administrator_model->deletemodel();
			echo $data;
	}
	public function themeSetting(){
		$data['pageTitle'] = 'Cardealer : Theme Setting';
		$data['themesetting'] = $this->administrator_model->themeSetting();
		
		if(!empty($_POST['submit'])){
			$this->administrator_model->savetheme();	
			redirect('administrator/theme-setting');
		}	
			
		$this->load->view('administrator/includes/header',$data);
		$this->load->view('administrator/theme-setting');
		$this->load->view('administrator/includes/footer');
    }
	public function carreview(){
		$data['pageTitle'] = 'Cardealer : Car Review';
		$data['Records'] = $this->administrator_model->carreview();
		$this->load->view('administrator/includes/header',$data);
		$this->load->view('administrator/car-review');
		$this->load->view('administrator/includes/footer');
    }
	public function addcarreview(){
		$data['pageTitle'] = 'Cardealer : add car review';
		if(!empty($_POST['submit'])){
			$this->administrator_model->addcarreview();	
			$this->session->set_flashdata('success', 'review has been added succesfully');
			
		}
      	$this->load->view('administrator/includes/header',$data);
		$this->load->view('administrator/addcarreview');
		$this->load->view('administrator/includes/footer');
    }
	public function editcarreview($id){
		
		$data['pageTitle'] = 'Cardealer : Edit car review';
		$data['result'] = $this->administrator_model->getcarreviewById($id);
		if(!empty($_POST['submit'])){
			$this->administrator_model->editcarreview($id);	
			$this->session->set_flashdata('success', 'review has been updated succesfully');
			redirect('administrator/carreview');
			
		}
		
		$this->load->view('administrator/includes/header');
		$this->load->view('administrator/editcarreview',$data);
		$this->load->view('administrator/includes/footer');
    }
	function deletereview(){
			$data = $this->administrator_model->deletereview();
			echo $data;
	}
	public function editprofile(){
		$data['pageTitle'] = 'Cardealer : Edit Profile';
		if(!empty($_POST['submit-btn'])){
		 $this->administrator_model->updateprofile();
			$this->session->set_flashdata('success', 'your Information has been update successfully');
			redirect('administrator/editprofile');
		}
		$data['profile'] = $this->administrator_model->editprofile();
		
		$this->load->view('administrator/includes/header',$data);
		$this->load->view('administrator/edit-profile');
		$this->load->view('administrator/includes/footer');
    }
	function unavailable(){
			$data = $this->administrator_model->unavailable();
			echo 1;
	}
	function available(){
			$data = $this->administrator_model->available();
			echo 1;
	}
	
	
	/* Manage Corporate Account Start Here*/
	
	public function corporateusers(){
		$data['pageTitle'] = 'Cardealer : Corporate Users'; 
		$data['Records'] = $this->administrator_model->corporate_users();		
		$this->load->view('administrator/includes/header',$data);
		$this->load->view('administrator/corporate-users');
		$this->load->view('administrator/includes/footer');
    }
	
	public function createuser(){
		$data['pageTitle'] = 'Cardealer : Corporate Users'; 	
		$this->load->view('administrator/includes/header',$data);
		$this->load->view('administrator/create-user');
		$this->load->view('administrator/includes/footer');
	}
	
	public function addcorporate(){
		$data = $this->administrator_model->addcorporate();
		echo $data;
	}
	

	public function editcorporate($id){
	//echo "<pre>"; print_r($id); die;
		$data['pageTitle'] = 'Edit Corporate';
		//$data['Records'] = $this->administrator_model->getcategorybyid($id);
		if(!empty($_POST['submit'])){
			$this->administrator_model->editcorporate($id);	
			redirect('administrator/corporateusers');
		}	
			
		$this->load->view('administrator/includes/header',$data);
		$this->load->view('administrator/edit-user');
		$this->load->view('administrator/includes/footer');
    }
	
	function activeUser(){
			$data = $this->administrator_model->activeUser();
			echo $data;
	}
	
	public function deactiveUser(){
		$data = $this->administrator_model->deactiveUser();
	}
	
	function deletecorporateuser(){
			$data = $this->administrator_model->deletecorporateuser();
			echo $data;
	}
	
	public function edituser($id){
		$data['pageTitle'] = 'Edit Hotel '; 
		$data['users'] = $this->administrator_model->editUser($id);
		//echo "<pre>"; print_r($data['users']); die;
		$this->load->view('administrator/includes/header');
        $this->load->view('administrator/edit-user', $data);
        $this->load->view('administrator/includes/footer');
	
		//echo "<pre>"; print_r($id); die;
	}
	
	
	/* Manage Corporate Account End Here*/
	
	
	
	
	
}

?>