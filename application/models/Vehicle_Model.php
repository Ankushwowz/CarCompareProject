<?php

	class Vehicle_Model extends CI_Model
	{
		protected $car_categories = 'car_categories';
		protected $car_brandmodels = 'car_brandmodels';
		protected $car_upload_images = 'car_upload_images';
		protected $car_locations = 'car_locations';
		protected $car_posts = 'car_posts';
		protected $car_contact_offer = 'car_contact_offer';
		
		
		public function __construct()
		{
			parent::__construct();
			$this->load->database();
			date_default_timezone_set('Asia/Kolkata');
		}

	function car_categories(){
		$this->db->from($this->car_categories);
		$query = $this->db->get();
		return $query->result();
    }
	function PostByID(){
		$id = base64_decode($this->uri->segment(2));
		$this->db->select('brand.name as brandname,modal.name as modalname,car_posts.*,car_categories.title as categoryName,car_locations.name as location');
		$this->db->order_by("car_posts.id", "desc");
		$this->db->where('car_posts.status',1);
		$this->db->where('car_posts.id',$id);
		$this->db->from('car_posts');
		$this->db->join('car_brandmodels  brand', 'brand.id  = car_posts.brand');
		$this->db->join('car_brandmodels  modal', 'modal.id  = car_posts.model');
		$this->db->join('car_categories ', 'car_categories.id  = car_posts.category');
		$this->db->join('car_locations ', 'car_locations.id  = car_posts.state');
		$query = $this->db->get();
		return $query->row_array();
    }
	function gallaryPostByID(){
		$id = base64_decode($this->uri->segment(2));
		$this->db->where('post_id',$id)->from($this->car_upload_images);
		$query = $this->db->get();
		return $query->result();
    }
	function searchFilter(){
		$advert_type = $this->uri->segment(1);
		if(!empty($_POST['formdata'])){
			parse_str($_POST['formdata'], $searcharray);
		}
		$where  = ' where status=1 ';
		
			if(!empty($advert_type) && $advert_type=='rent-car'){
				 $where  .= " AND advert_type ='rent'";
			}
			if(!empty($advert_type) && $advert_type=='used-car'){
				 $where  .= " AND `condition` ='used'";
			}
			if(!empty($advert_type) && $advert_type=='new-car'){
				 $where  .= " AND `condition` ='new'";
			}
			
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
			if(!empty($searcharray['currency'])){
				 $where  .= " AND currency ='".$searcharray['currency']."'";
			}
			if(!empty($searcharray['price'])){
				 $where  .= " AND price >='".$searcharray['price']."'";
			}
			//Post Array
			if(!empty($_POST['advert_type'])){
				 $where  .= " AND advert_type ='".$_POST['advert_type']."'";
			}
			
			if(!empty($_POST['condition'])){
				 $where  .= " AND `condition` ='".$_POST['condition']."'";
			}
			if(!empty($_POST['brand'])){
				 $where  .= " AND brand ='".$_POST['brand']."'";
			}
			if(!empty($_POST['model'])){
				 $where  .= " AND model ='".$_POST['model']."'";
			}
			if(!empty($_POST['category'])){
				 $where  .= " AND category ='".$_POST['category']."'";
			}
			if(!empty($_POST['fuel_type'])){
				 $where  .= " AND fuel_type ='".$_POST['fuel_type']."'";
			}
			if(!empty($searcharray['mileage_range'])){
				 //$where  .= " AND mileage ='".$searcharray['mileage_range']."'";
				 $where  .= " AND mileage <='".$searcharray['mileage_range']."'";
			}
			if(!empty($_POST['currency'])){
				 $where  .= " AND currency ='".$_POST['currency']."'";
			}
			if(!empty($_POST['price'])){
				 $where  .= " AND price >='".$_POST['price']."'";
			}
			$currentDate= date('Y-m-d');
		    $where  .= " And expirtion_date > '".$currentDate."'";
			
			
			$Sql ="select * from ".$this->car_posts.$where;
			
			$query = $this->db->query($Sql);
			$numRow = $query->num_rows();
			return  $numRow;
		}
		
		
		// Select total records
    public function getrecordCount() {
		if(!empty($_POST['formdata'])){
			parse_str($_POST['formdata'], $searcharray);
		}
			$where  = ' where status=1 ';
			if(!empty($searcharray['state'])){
				 $where  .= " AND car_posts.state ='".$searcharray['state']."'";
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
			if(!empty($searcharray['currency'])){
				 $where  .= " AND currency ='".$searcharray['currency']."'";
			}
			if(!empty($searcharray['price'])){
				 $where  .= " AND price >='".$searcharray['price']."'";
			}
			
			$currentDate= date('Y-m-d');
		    $where  .= " And expirtion_date > '".$currentDate."'";
			
			$Sql ="select * from ".$this->car_posts.$where;
			
			$query = $this->db->query($Sql);
			$allcount = $query->num_rows();
			return  $allcount;
			
		}
		// Fetch records
		public function getData($rowno,$rowperpage) {
				if(!empty($_POST['formdata'])){
			parse_str($_POST['formdata'], $searcharray);
		}
			$where  = ' where car_posts.status=1 ';
			
			if(!empty($searcharray['state'])){
				 $where  .= " AND car_posts.state ='".$searcharray['state']."'";
			}
			if(!empty($searcharray['advert_type'])){
				 $where  .= " AND car_posts.advert_type ='".$searcharray['advert_type']."'";
			}
			
			if(!empty($searcharray['condition'])){
				 $where  .= " AND `condition` ='".$searcharray['condition']."'";
			}
			if(!empty($searcharray['brand'])){
				 $where  .= " AND car_posts.brand ='".$searcharray['brand']."'";
			}
			if(!empty($searcharray['model'])){
				 $where  .= " AND car_posts.model ='".$searcharray['model']."'";
			}
			if(!empty($searcharray['category'])){
				 $where  .= " AND car_posts.category ='".$searcharray['category']."'";
			}
			if(!empty($searcharray['fuel_type'])){
				 $where  .= " AND fuel_type ='".$searcharray['fuel_type']."'";
			}
			if(!empty($searcharray['mileage_range'])){
				 //$where  .= " AND mileage ='".$searcharray['mileage_range']."'";
				 $where  .= " AND mileage <='".$searcharray['mileage_range']."'";
			}
			if(!empty($searcharray['currency'])){
				 $where  .= " AND currency ='".$searcharray['currency']."'";
			}
			if(!empty($searcharray['price'])){
				 $where  .= " AND price >='".$searcharray['price']."'";
			}
			
			$Sql ="select brand.name as brandname,modal.name as modalname,car_categories.title as categoryName,car_locations.name as location,car_posts.* from  ".$this->car_posts.'
			left join car_brandmodels brand on brand.id=car_posts.brand
			left join car_brandmodels modal on modal.id=car_posts.model
			left join car_categories on car_categories.id=car_posts.category
			left join car_locations  on car_locations.id=car_posts.state'.$where." ORDER BY car_posts.package DESC, car_posts.id DESC LIMIT ".$rowno." , ".$rowperpage;
			
			$query = $this->db->query($Sql);
			$numRow = $query->num_rows();
			$result = $query->result_array();
			$array = array();
			foreach($result as $key=> $result){
				$array[] = $result;
				$array[$key]['urlpath'] = base64_encode($result['id']);
			}
			return  $array;
		}

		function contactseller(){
			if(!empty($_POST['formdata'])){
				parse_str($_POST['formdata'], $searcharray);
			}
			if(!empty($searcharray['moamount'])){ $amount = $searcharray['moamount'];}else{  $amount = '';}
			if(!empty($searcharray['post_id'])){$post_id = $searcharray['post_id'];}else{ $post_id = $searcharray['mopost_id'];}
			if(!empty($searcharray['seller_id'])){$seller_id = $searcharray['seller_id'];}else{ $seller_id = $searcharray['moseller_id'];}
			if(!empty($searcharray['sender_name'])){$sender_name = $searcharray['sender_name'];}else{ $sender_name = $searcharray['mosender_name'];}
			if(!empty($searcharray['sender_email'])){$sender_email = $searcharray['sender_email'];}else{ $sender_email = $searcharray['mosender_email'];}
			if(!empty($searcharray['subject'])){$subject = $searcharray['subject'];}else{ $subject = $searcharray['mosubject'];}
			if(!empty($searcharray['msg'])){$msg = $searcharray['msg'];}else{ $msg = $searcharray['momsg'];}
				if(!empty($searcharray['phone'])){$phone = $searcharray['phone'];}else{ $phone = $searcharray['mophone'];}
			$data = array(
							'post_id' => $post_id,
							'seller_id' => $seller_id,
							'sender_name' => $sender_name,
							'sender_email' => $sender_email,
							'phone' => $phone,
							'subject' => $subject,
							'message' => $msg,
							'amount' => $amount,
							'created_date' => date("Y-m-d H:i:s")
						);
						
			$result = $this->db->insert($this->car_contact_offer, $data);
			if($result){return 1;}
		}
		
		
    	

	
}