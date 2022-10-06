<?php

	class Post_Model extends CI_Model
	{
		protected $car_categories = 'car_categories';
		protected $car_brandmodels = 'car_brandmodels';
		protected $car_upload_images = 'car_upload_images';
		protected $car_locations = 'car_locations';
		protected $car_posts = 'car_posts';
		protected $car_contact = 'car_contact';
		protected $theme_setting = 'theme_setting';
		protected $car_users = 'car_users';
		protected $car_blog = 'car_blog';
		
		
		public function __construct()
		{
			parent::__construct();
			$this->load->database();
			date_default_timezone_set('Asia/Kolkata');
		}
    
    
    function userDetail($userid){
		$this->db->where('id',$userid)->from($this->car_users);
		$query = $this->db->get();
		return $query->row_array();
    }
    
	function car_categories(){
		$this->db->from($this->car_categories);
		$query = $this->db->get();
		return $query->result();
    }
	function car_brandmodels(){
		$this->db->where('parent',0)->from($this->car_brandmodels);
		$query = $this->db->get();
		return $query->result();
    }
	function car_state(){
		$this->db->where('parent',93)->from($this->car_locations);
		$query = $this->db->get();
		return $query->result();
    }
	function selectCategory(){
		$category_id = $this->input->post('category_id');
		$this->db->where('category_id',$category_id)->from($this->car_brandmodels);
		$query = $this->db->get();
		$result = $query->result_array();
		$parentid = array();
		foreach($result as  $value){
			$parentid[]= $value['parent'];
		}
		
		$unique_pid = array_unique($parentid);
		
		if(!empty($unique_pid)){
			  $html ='<select name="brand" class="form-control" id="select-brand" required="true">  <option value="">Select Brand</option>';
			$order_by =$this->car_brandmodels.'.name ASC';
			$this->db->order_by($order_by);
			$this->db->where('type','Brand');
			$this->db->where_in('id',$unique_pid)->from($this->car_brandmodels);
		    $queryB = $this->db->get();
			$resultqueryB = $queryB->result_array();
			foreach($resultqueryB as  $valueB){
			  $html .='<option value="'.$valueB['id'].'" >'.$valueB['name'].'</option>';
		    }
		  }else{
			  $html ='<select name="brand" class="form-control" id="select-brand">  <option value="">Select Brand</option>';
		  }
	   $html .='</select>';
		return $html;
    }
	function selectBrand(){
		$brand = $this->input->post('brand');
		$order_by =$this->car_brandmodels.'.name ASC';
		$this->db->order_by($order_by);
		$this->db->where('parent',$brand)->from($this->car_brandmodels);
		$query = $this->db->get();
		$result = $query->result_array();
		$html ='<select name="model" class="form-control" id="select-model"> <option value="">Select Model</option>';
		foreach($result as  $value){
			$html .='<option value="'.$value['id'].'" >'.$value['name'].'</option>';
		}
		$html .='</select>';
		return $html;
    }
	function addImageGallary(){
		$browser_id = session_id();
		$array = array();
		if(!empty($this->session->userdata('user_id'))){
			$user_id = $this->session->userdata('user_id');
		}else{
			$user_id = '';
		}

		set_time_limit(0);
		ini_set('memory_limit', '-1');
		if(!empty($_FILES['userfile']["name"])){
		 $ext = pathinfo($_FILES['userfile']["name"]);
			$fileName = rand().'-'.time().'.'.$ext['extension'];
			$_FILES['userfile']["name"]= 'gallary-'.$fileName;
			//Upload Image
			$config['upload_path'] = './assets/upload/gallary/';
			$config['allowed_types'] = 'gif|jpg|png';
			//$config['max_size'] = '*';
			//$config['max_width'] = '2000';
			//$config['max_height'] = '2000';
			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('userfile')){
				$errors =  array('error' => $this->upload->display_errors());
				$array['error'] = $errors;
			}else{
				$data =  array('upload_data' => $this->upload->data());
				$this->resizeImage($_FILES['userfile']['name']);
				$this->db->where('browser_id',$browser_id)->from($this->car_upload_images);
				$query = $this->db->get();
				$numRow = $query->num_rows();
				if($this->input->post('packageName')=='basic'){
					if($numRow >4){
					$array['imagecount'] = 5; 
					$array['imagename'] = ''; 
				}else{
						$data = array(
							'image' => $_FILES['userfile']['name'],
							'browser_id' => $browser_id,
							'user_id' => $user_id,
							'created_date' => date("Y-m-d H:i:s")
						);
						$result = $this->db->insert($this->car_upload_images, $data);
						$lastID = $this->db->insert_id();
						$array['id'] =$lastID; 
						$array['imagecount'] = $numRow; 
						$array['imagename'] = $_FILES['userfile']['name']; 
				
				}
				}else{
					if($numRow >9){
					$array['imagecount'] = 10; 
					$array['imagename'] = ''; 
				}else{
						$data = array(
							'image' => $_FILES['userfile']['name'],
							'browser_id' => $browser_id,
							'user_id' => $user_id,
							'created_date' => date("Y-m-d H:i:s")
						);
						$result = $this->db->insert($this->car_upload_images, $data);
						$lastID = $this->db->insert_id();
						$array['id'] =$lastID; 
						$array['imagecount'] = $numRow; 
						$array['imagename'] = $_FILES['userfile']['name']; 
				
				}
					
				}
				
				return $array;
				
			}
		
		}
	}
	
	function fImageGallary(){
		$array = array();
		set_time_limit(0);
		ini_set('memory_limit', '-1');
		if(!empty($_FILES['userfile']["name"])){
		 $ext = pathinfo($_FILES['userfile']["name"]);
			$fileName = rand().'-'.time().'.'.$ext['extension'];
			$_FILES['userfile']["name"]= 'gallary-'.$fileName;
			//Upload Image
			$config['upload_path'] = './assets/upload/gallary/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			
			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('userfile')){
				$errors =  array('error' => $this->upload->display_errors());
				$array['error'] = $errors;
			}else{
				$data =  array('upload_data' => $this->upload->data());
				$this->resizeImage($_FILES['userfile']['name']);
				echo $_FILES['userfile']['name'];
				
			}
			
		
		}
	}
	
	public function resizeImage($filename){
	$source_path = $_SERVER['DOCUMENT_ROOT'] . '/carcompare/dev/assets/upload/gallary/' . $filename;
	 $target_path = $_SERVER['DOCUMENT_ROOT'] . '/carcompare/dev/assets/upload/gallary/thumbnail/';
	
	// $source_path = './assets/img/portfolio/' . $filename;
	 //$target_path =  './assets/img/portfolio/thumbnail/';

      $config_manip = array(
          'image_library' => 'gd2',
          'source_image' => $source_path,
          'new_image' => $target_path,
          'maintain_ratio' => TRUE,
          //'create_thumb' => TRUE,
          //'thumb_marker' => '_thumb',
          'width' => 150,
          'height' => 150
      );

		$this->load->library('image_lib',$config_manip);
		$this->image_lib->initialize($config_manip);
      if (!$this->image_lib->resize()) {
          echo $this->image_lib->display_errors();
      }
		$this->image_lib->clear();
   }

	
	function removeimage(){
		$id = $this->input->post('id');
		$this->db->where('id', $id);
        return $this->db->delete($this->car_upload_images);
    }
	
	function savePostAdd(){
	    $description = $_POST['description'];
		parse_str($_POST['formdata'], $searcharray);
		$browser_id =session_id();
		if(!empty($this->session->userdata('user_id'))){
			$user_id = $this->session->userdata('user_id');
			//if($searcharray['package']=='basic'){ $status = 1; }else{ $status = 0;}
			if($searcharray['package']=='basic'){ $status = 0; }else{ $status = 1;}
			
		}else{
			$user_id = '';
			$status = 0;
		}
        $ExpiredDate = date('Y-m-d H:i:s', strtotime('+60 days')); 
		$data = array(   'advert_type' => $searcharray['advert_type'],
							'category' => $searcharray['category'],
							'brand' => $searcharray['brand'],
							'model' => $searcharray['model'],
							'year' => $searcharray['year'],
							'yearofimport' => $searcharray['yearofimport'],
							'currency' => $searcharray['currency'],
							'price' => $searcharray['price'],
							'mileage' => $searcharray['mileage'],
							'transmission' => $searcharray['transmission'],
							'condition' => $searcharray['condition'],
							'fuel_type' => $searcharray['fuel_type'],
							'phone_no' => $searcharray['phone_no'],
							'email' => $searcharray['email'],
							'state' => $searcharray['state'],
							'title' => $searcharray['title'],
							'description' => $description,
							'featured_img' => $searcharray['txtfeaturedImage'],
							'package' => $searcharray['package'],
							'browser_id' => $browser_id,
							'user_id' => $user_id,
							'status' => $status,
							'noofSeats' => $searcharray['noofSeats'],
							'safetyRating' => $searcharray['safetyRating'],
							'activation_date' => date("Y-m-d H:i:s"),
							'expirtion_date' => $ExpiredDate,
							'created_date' => date("Y-m-d H:i:s"),
							'SGS' => $searcharray['SGS']
						);
						
						$result = $this->db->insert($this->car_posts, $data);
						$lastID = $this->db->insert_id();
						$updataGallary = "update ".$this->car_upload_images." set post_id='".$lastID."' where browser_id='".$browser_id."'";
						$this->db->query($updataGallary);
						return $lastID;
	 }
	 
	function savepublish(){
		//$bogid = base64_decode($_POST['id']);
		//echo "<pre>"; print_r($_POST['id']); die;
		$this->db->where('id', $this->session->userdata('user_id'));
		$query = $this->db->get($this->car_users);
		$resultuser = $query->row_array();
		
		
		$data = array(
		'status' => 1,
		);
		$this->db->where('id', $_POST['id']);
		$result = $this->db->update($this->car_posts, $data);
		
		$userdata =  array(
		    'countads' => $resultuser['countads'] + 1,
		    );
	    $this->db->where('id', $this->session->userdata('user_id'));
		return $result = $this->db->update($this->car_users, $userdata);	
	
    }
	 
	function getBrand(){
			$where  = " parent!=0 ";
			$this->db->where($where);
			$query = $this->db->get($this->car_brandmodels);
			$result = $query->result();
		
		return $result;
    }
	function getBrandOnChange(){
		$brand = $this->input->post('brand');
		$this->db->where('parent',$brand)->from($this->car_brandmodels);
		$query = $this->db->get();
		$result = $query->result_array();
		$html =' <option value="">Select Model</option>';
		foreach($result as  $value){
			$html .='<option value="'.$value['id'].'" >'.$value['name'].'</option>';
		}
		
		return $html;
    }
 
	function searchFilter(){
	
		if(!empty($_POST['formdata'])){
		parse_str($_POST['formdata'], $searcharray);
		}
		$where  = ' where status=1';
		
			if(!empty($searcharray['state'])){
				 $where  .= " AND state ='".$searcharray['state']."'";
			}
			if(!empty($searcharray['advert_type'])){
				 $where  .= " AND advert_type ='".$searcharray['advert_type']."'";
			}
			if(!empty($searcharray['condition'])){
				 $where  .= " AND `condition` ='".$searcharray['condition']."'";
			}
			if(!empty($searcharray['brand'])){
				 $where  .= " AND brand ='".$searcharray['brand']."'";
			}
			if(!empty($searcharray['model'])){
				 $where  .= " AND model ='".$searcharray['model']."'";
			}
			if(!empty($searcharray['category'])){
				 $where  .= " AND category ='".$searcharray['category']."'";
			}
			if(!empty($searcharray['fuel_type'])){
				 $where  .= " AND fuel_type ='".$searcharray['fuel_type']."'";
			}
			if(!empty($searcharray['mileage_range'])){
				 //$where  .= " AND mileage ='".$searcharray['mileage_range']."'";
				 $where  .= " AND mileage <='".$searcharray['mileage_range']."'";
			}
			
			$currentDate= date('Y-m-d');
		    $where  .= " AND expirtion_date > '".$currentDate."'";
			
			$Sql ="select * from ".$this->car_posts.$where;
			
			$query = $this->db->query($Sql);
			$numRow = $query->num_rows();
			return  $numRow;
		}
	function latestPost(){
		$currentDate= date('Y-m-d');
		$where  = " expirtion_date > '".$currentDate."'";
		$order_by ='car_posts.package DESC,car_posts.id DESC';
		$this->db->select('brand.name as brandname,modal.name as modalname,car_users.*,car_users.status as Userstatus, car_posts.*,car_categories.title as categoryName');
		$this->db->order_by($order_by);
		$this->db->limit(9);
		$this->db->where('car_posts.status',1);
		$this->db->where('car_users.status',1);
		$this->db->where($where);
		$this->db->from('car_posts');
		$this->db->join('car_brandmodels  brand', 'brand.id  = car_posts.brand','left');
		$this->db->join('car_brandmodels  modal', 'modal.id  = car_posts.model','left');
		$this->db->join('car_categories ', 'car_categories.id  = car_posts.category','left');
		$this->db->join('car_users ', 'car_users.id  = car_posts.user_id','left');
		$query = $this->db->get();
		return $query->result();
    }
	
		function contactform(){
			if(!empty($_POST['formdata'])){
				parse_str($_POST['formdata'], $searcharray);
			}
			
			
			if(!empty($searcharray['fname'])){$fname = $searcharray['fname'];}
			if(!empty($searcharray['lname'])){$lname = $searcharray['lname'];}
			if(!empty($searcharray['email'])){$email = $searcharray['email'];}
			if(!empty($searcharray['message'])){$message = $searcharray['message'];}
			if(!empty($searcharray['phone'])){$phone = $searcharray['phone'];}
			$data = array(
							
							'fname' => $fname,
							'lname' => $lname,
							'email' => $email,
							'message' => $message,
							'vehicleMake' => $searcharray['vehicleMake'],
							'vehicleModel' => $searcharray['vehicleModel'],
							'vehicleRegNo' => $searcharray['vehicleRegNo'],
							'yearofManufacture' => $searcharray['yearofManufacture'],
							'valueofVehicle' => $searcharray['valueofVehicle'],
							'created_date' => date("Y-m-d H:i:s")
						);
						
			$result = $this->db->insert($this->car_contact, $data);
			if($result){return 1;}
		}
		function getcategoryOnChange(){
		$category_id = $this->input->post('category_id');
		$this->db->where('category_id',$category_id)->from($this->car_brandmodels);
		$query = $this->db->get();
		$result = $query->result_array();
		$html =' <option value="">Select Brand</option>';
		foreach($result as  $value){
			$html .='<option value="'.$value['id'].'" >'.$value['name'].'</option>';
		}
		
		return $html;
    }
	function themeSetting(){
		$this->db->from($this->theme_setting);
		$query = $this->db->get();
		return $query->row_array();
    }
	function forgotPassword(){
		if(!empty($_POST['formdata'])){
				parse_str($_POST['formdata'], $searcharray);
			}
			
		$this->db->where('user_email', $searcharray['useremail'])->from($this->car_users);
		$query = $this->db->get();
		$numRow = $query->num_rows();
		if($numRow > 0){
				$password = rand();
			$data = array(   
					'password' => md5($password)
					);
						
				$this->db->where('user_email', $searcharray['useremail']);
				$this->db->update($this->car_users, $data);
				$to = $searcharray['useremail'];
				$subject = "Forgot Password";
				$message ="<html><body><p>Hello User,</p><br><p>New password : ".$password."</p></body></html>";
				$headers = "MIME-Version: 1.0" . "\r\n";
				$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
				$headers .= 'From: <harsh.wowz@gmail.com>' . "\r\n";
				$sendmail = mail($to,$subject,$message,$headers);
				if($sendmail){ return 1;}else{return 2;}
			
			
		}else{
			return 2;
		}
	
    }
	function carreview(){
		$this->db->select('car_users.first_name,car_users.last_name,car_blog.*');
		$this->db->order_by("id", "desc");
		$this->db->from($this->car_blog);
		$this->db->join('car_users ', 'car_users.id  = car_blog.created_by');
		$query = $this->db->get();
		return $query->result();
    }
		function carReviewById($id){
		$bogid = base64_decode($id);
		$this->db->select('car_users.first_name,car_users.last_name,car_blog.*');
		$this->db->where('car_blog.id',$bogid);
		$this->db->from($this->car_blog);
		$this->db->join('car_users ', 'car_users.id  = car_blog.created_by');
		$query = $this->db->get();
		return $query->row_array();
    }
	function carreviewByPost(){
		$this->db->select('car_users.first_name,car_users.last_name,car_blog.*');
		$this->db->order_by("id", "desc");
		if(!empty($_POST['txtsearch'])){
		$where  = " (title like '".$_POST['txtsearch']."%' OR description like '".$_POST['txtsearch']."%')";
		 $this->db->where($where);
		}
		$this->db->from($this->car_blog);
		$this->db->join('car_users', 'car_users.id  = car_blog.created_by');
		$query = $this->db->get();
		return $query->result();
    }
	public function multipleImageStore(){
		set_time_limit(0);
		ini_set('memory_limit', '-1');
		$browser_id = session_id();
		$img = '';
		$error = '';
		$array = array();
		if(!empty($this->session->userdata('user_id'))){
			$user_id = $this->session->userdata('user_id');
		}else{
			$user_id = '';
		}
		if(!empty($_POST['post_id'])){
			$post_id = $this->input->post('post_id');
		}else{
			$post_id = '';
		}
		$showpath =base_url()."assets/upload/gallary/";
		$countfiles = count($_FILES['userfile']['name']);
		$config = array();
		$config['upload_path'] = './assets/upload/gallary/';
		$config['allowed_types'] = 'jpg|jpeg|png|gif';
		$config['overwrite'] = TRUE;
		$this->load->library('upload');
		$files = $_FILES;
		for($i=0;$i<$countfiles;$i++){
			if(!empty($_FILES['userfile']['name'][$i])){
				$ext = pathinfo($files['userfile']["name"][$i]);
				$fileName = rand().'-'.time().'.'.$ext['extension'];
				$files['userfile']['name'][$i]= 'gallery-'.$fileName;
				$_FILES['userfile']['name'] = $files['userfile']['name'][$i];

				//$_FILES['userfile']['name']= rand().'-'.time().'_'.$files['userfile']['name'][$i];
				$_FILES['userfile']['type']= $files['userfile']['type'][$i];
				$_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
				$_FILES['userfile']['error']= $files['userfile']['error'][$i];
				$_FILES['userfile']['size']= $files['userfile']['size'][$i];   
				// Set preference
				$this->upload->initialize($config);
				if($this->upload->do_upload()){
					$data =  array('upload_data' => $this->upload->data());
					$this->resizeImage($_FILES['userfile']['name']);
					if($this->input->post('packageName')=='basic'){
						$data = array(
								'image' => $_FILES['userfile']['name'],
								'browser_id' => $browser_id,
								'user_id' => $user_id,
								'post_id' => $post_id,
								'created_date' => date("Y-m-d H:i:s")
							);
							$result = $this->db->insert($this->car_upload_images, $data);
							$lastID = $this->db->insert_id();
							$array['id'] =$lastID; 
							$this->db->where('browser_id',$browser_id)->from($this->car_upload_images);
							$query = $this->db->get();
							$numRow = $query->num_rows();
							$array['imagecount'] = $numRow; 
							$img .= '<div class="col-md-4" id="'.$lastID.'"><div class="thumbnail">';
							$img .= '<img src="'.$showpath.$_FILES['userfile']['name'].'" />';
							$img .= '<span class="remove-image" onclick="removeimage('.$lastID.')">X</span></div></div>';
							$array['img'] = $img; 
							$array['error'] = ''; 
						
						
						
					}else{
						
					$data = array(
								'image' => $_FILES['userfile']['name'],
								'browser_id' => $browser_id,
								'user_id' => $user_id,
								'post_id' => $post_id,
								'created_date' => date("Y-m-d H:i:s")
							);
							$result = $this->db->insert($this->car_upload_images, $data);
							$lastID = $this->db->insert_id();
							$array['id'] =$lastID; 
							$this->db->where('browser_id',$browser_id)->from($this->car_upload_images);
							$query = $this->db->get();
							$numRow = $query->num_rows();
							$array['imagecount'] = $numRow; 
							$img .= '<div class="col-md-4" id="'.$lastID.'"><div class="thumbnail">';
							$img .= '<img src="'.$showpath.$_FILES['userfile']['name'].'" />';
							$img .= '<span class="remove-image" onclick="removeimage('.$lastID.')">X</span></div></div>';
							$array['img'] = $img; 
							$array['error'] = ''; 
				
						
					}
					
					
				}else{
					$array['error'] = $this->upload->display_errors();
					//$error =  $this->upload->display_errors();
				}
			}

		}
			echo json_encode($array);	
			die();
		}
		
		
			// Select total records
        public function getrecordCount() {
		if(!empty($_POST['formdata'])){
			parse_str($_POST['formdata'], $searcharray);
		}
		$this->db->select('car_users.first_name,car_users.last_name,car_blog.*');
		$this->db->order_by("id", "desc");
		if(!empty($searcharray['txtsearch'])){
			$where  = " (title like '".$searcharray['txtsearch']."%' OR description like '".$searcharray['txtsearch']."%')";
			$this->db->where($where);
		}
		$this->db->from($this->car_blog);
		$this->db->join('car_users', 'car_users.id  = car_blog.created_by');
		$query = $this->db->get();
		$allcount = $query->num_rows();
		return  $allcount;
			
		}
		
		public function getData($rowno,$rowperpage) {
				if(!empty($_POST['formdata'])){
			parse_str($_POST['formdata'], $searcharray);
		}
			$where  = ' where 1';
			
			if(!empty($searcharray['txtsearch'])){
				 $where  .= " And  (title like '".$searcharray['txtsearch']."%' OR description like '".$searcharray['txtsearch']."%')";
			}
			
			
			$Sql =" select car_users.first_name,car_users.last_name,car_blog.* from  ".$this->car_blog.'
			left join car_users  on car_users.id=car_blog.created_by'.$where." ORDER BY  car_blog.id DESC LIMIT ".$rowno." , ".$rowperpage;
			
			$query = $this->db->query($Sql);
			$numRow = $query->num_rows();
			$result = $query->result_array();
			$array = array();
			foreach($result as $key=> $result){
				$array[] = $result;
				$array[$key]['urlpath'] = base64_encode($result['id']);
				$array[$key]['description'] = substr(strip_tags($result['description']),0,500);
				$array[$key]['created_date'] = date('D d F Y ', strtotime($result['created_date']));
			}
			return  $array;
		}
		
		function previewvehicle($id){
			$postid =base64_decode($id);
			$this->db->select('brand.name as brandname,modal.name as modalname,car_posts.*,car_users.user_type,car_categories.title as categoryName,car_locations.name as location');
			$this->db->where('car_posts.id',$postid);  
			//$this->db->where('car_posts.status',1);
			$this->db->from('car_posts');
			$this->db->join('car_brandmodels  brand', 'brand.id  = car_posts.brand','left');
			$this->db->join('car_brandmodels  modal', 'modal.id  = car_posts.model','left');
			$this->db->join('car_categories ', 'car_categories.id  = car_posts.category','left');
			$this->db->join('car_locations ', 'car_locations.id  = car_posts.state','left');
			$this->db->join('car_users ', 'car_users.id  = car_posts.user_id','left');
			$query = $this->db->get();
			return $query->row_array();
		}
		
		function emailsendfor7day(){
		    $sevenDay = date('Y-m-d', strtotime('+7 days'));
			$where  = " expirtion_date='".$sevenDay."'";
			/*$this->db->where($where);
			$query = $this->db->get($this->car_posts);
			$result = $query->result();
		    return $result;*/
		    
		   $this->db->select('car_posts.*,car_users.id as uid,car_users.first_name as first_name,car_users.last_name as last_name,car_users.user_email as user_email');
		   $this->db->where($where);
		    $this->db->from('car_posts');
			$this->db->join('car_users ', 'car_users.id  = car_posts.user_id','left');
		
			$query = $this->db->get();
			return $query->result();
		    
		    
		    
		    
		    
		    
         }
	
}