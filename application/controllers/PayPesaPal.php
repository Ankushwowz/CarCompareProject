<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PayPesaPal extends CI_Controller {

	/**
	 * Core CMS controller 
	 * For Setting Purpose Purpose
	 * @see https://codeigniter.com/user_guide/general/controllers.html
	 */

    protected $TXNtable = 'pesapal_txn'; //TXN Table
    protected $car_posts = 'car_posts'; //TXN Table

    public function __construct(){

        parent::__construct();

        //Libraries
        $this->load->database();
        $this->load->library('pesapal');
         $this->load->model('administrator_model');
         $this->load->library('form_validation');

        //Helpers

        //Models
    }

    public function index()
    {
    	$result= $this->db->get('pesapal_txn');
    	$data['query'] = $result->result();
        $this->load->view('pesapal/index',$data);

    }

    //Receive Data
   	public function buyproducts()
   	{
   		$this->form_validation->set_rules('firstname', 'First Name', 'trim|required|min_length[5]|max_length[12]');
   		$this->form_validation->set_rules('lastname', 'Last Name', 'trim|required|min_length[5]|max_length[12]');
   		$this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[5]|max_length[50]');
   		$this->form_validation->set_rules('mobile', 'Mobile', 'trim|required|min_length[5]|max_length[15]');
   		$this->form_validation->set_rules('amount', 'Amount', 'trim|required|min_length[1]|max_length[22]');

		//If There is error return and show
		if ($this->form_validation->run() == FALSE) {

        	$this->load->view('pesapal/index');
		}else{


			//Data
			$fname = $this->db->escape_str($this->input->post('firstname'));
			$lname = $this->db->escape_str($this->input->post('lastname'));

			$email = $this->db->escape_str($this->input->post('email'));
			$mobile = $this->db->escape_str($this->input->post('mobile'));
			$amount = $this->db->escape_str($this->input->post('amount'));

			$description = 'Product Purchased';
			$type = 'MERCHANT';
			$product = rand(); //unique order id of the transaction, generated by merchant

			//Pay To PesaPal
			$this->paynow($fname,$lname,$email,$mobile,$amount,$description,$type,$product);
		}

   	}

   	//PayNow
	//public function paynow($fname,$lname,$email,$mobile,$amount,$description,$type,$order_id)
	public function paynow($id){
		
		$userdata = $this->administrator_model->getinfo();
		if(!empty($userdata['first_name'])) {
				$first_name=  $userdata['first_name'];
			}else{
				$first_name= '';
		}
		if(!empty($userdata['last_name'])) {
				$last_name=  $userdata['last_name'];
			}else{
				$last_name= '';
		}
		
		$token = $params = NULL;
		$consumer_key = 'fBvR2SdJRAyUBFTnz4RdvEmBO0zCe1Lb';
		$consumer_secret = 'MLL9tpto9wfYC2v7P00nE/Si+AM=';
		$signature_method = new OAuthSignatureMethod_HMAC_SHA1();
		//$iframelink = 'https://demo.pesapal.com/api/PostPesapalDirectOrderV4';//change to      
		                   //https://www.pesapal.com/API/PostPesapalDirectOrderV4 when you are ready to go live!
		$iframelink = 'https://www.pesapal.com/API/PostPesapalDirectOrderV4';
		//Get form details <br>
		$amount = 1000;
		$amount = number_format($amount, 2);//format amount to 2 decimal places
		$desc = "test";
		$type = "MERCHANT"; //default value = MERCHANT
		$reference = $id;//$_POST['reference'];//unique order id of the transaction, generated by merchant
		$first_name = $first_name; //[optional]
		$last_name = $last_name; //[optional]
		$email = $this->session->userdata('email');
		$phonenumber = ''; //ONE of email or phonenumber is required

		//$callback_url = 'https://carcompareug.com/pesapal/response'; //redirect url, the page that will handle the response from pesapal.
		$callback_url = 'https://oxeenit.tech/carcompare/dev/pesapal/response'; //redirect url, the page that will handle the response from pesapal.
		$post_xml = "<?xml version=\"1.0\" encoding=\"utf-8\"?><PesapalDirectOrderInfo xmlns:xsi=\"http://www.w3.org/2001/XMLSchemainstance\" xmlns:xsd=\"http://www.w3.org/2001/XMLSchema\" Amount=\"".$amount."\" Description=\"".$desc."\" Type=\"".$type."\" Reference=\"".$reference."\" FirstName=\"".$first_name."\" LastName=\"".$last_name."\" Email=\"".$email."\" PhoneNumber=\"".$phonenumber."\" xmlns=\"http://www.pesapal.com\" />";
		$post_xml = htmlentities($post_xml);

		$consumer = new OAuthConsumer($consumer_key, $consumer_secret);
		//post transaction to pesapal
		$iframe_src = OAuthRequest::from_consumer_and_token($consumer, $token, "GET",
		$iframelink, $params);
		$iframe_src->set_parameter("oauth_callback", $callback_url);
		$iframe_src->set_parameter("pesapal_request_data", $post_xml);
		$iframe_src->sign_request($signature_method, $consumer, $token);

		$data['iframe_src'] = $iframe_src;

		//View
		$this->load->view('templates/header');
        $this->load->view('pages/pesapal/paynow',$data);
		$this->load->view('templates/footer');
		
    }

    //Paid To PesaPal
    public function paid()
    {
    	//Date and Time
		date_default_timezone_set('Africa/Nairobi');
		$dateTime =  date('Y-m-d, H:i:s');

    	//Values
		$reference = null;
		$pesapal_tracking_id = null;
		$status= null;

		if(isset($_GET['pesapal_merchant_reference'])) {

			$reference = $_GET['pesapal_merchant_reference'];
		}

		if(isset($_GET['pesapal_transaction_tracking_id'])){

			$pesapal_tracking_id = $_GET['pesapal_transaction_tracking_id'];
		}

		//store $pesapal_tracking_id in your database against the order with orderid = $reference
		 if(!empty($this->session->userdata('user_id'))){
			 $userid = $this->session->userdata('user_id');
		 }else{
			$userid =''; 
		 }
		$payment_status = array(
			'reference_code' =>$reference,
			'tracking_id' =>$pesapal_tracking_id,
			'txn_date' =>$dateTime,
			'txn_status' =>'WAITING',
			'user_id' => $userid
		);
		
		
		//Insert
		$this->db->insert($this->TXNtable, $payment_status);
	//Update
			$payment_updates_data = array(
				'status' =>1,
			);
			$payment_updates_data_1 = array(
				'status' =>1,
				'amount' =>1000
			);
			$pesapal_merchant_reference=$_GET['pesapal_merchant_reference'];
			$this->db->where('id', $pesapal_merchant_reference);
			$this->db->update($this->car_posts, $payment_updates_data_1);
		//Index
		$this->success();

    }

    //Paid Successful -> IPN
    public function ipn()
    {

		$consumer_key="fBvR2SdJRAyUBFTnz4RdvEmBO0zCe1Lb";//Register a merchant account on
                   //demo.pesapal.com and use the merchant key for testing.
                   //When you are ready to go live make sure you change the key to the live account
                   //registered on www.pesapal.com!
		$consumer_secret="MLL9tpto9wfYC2v7P00nE/Si+AM=";// Use the secret from your test
		                   //account on demo.pesapal.com. When you are ready to go live make sure you 
		                   //change the secret to the live account registered on www.pesapal.com!
		//$statusrequestAPI = 'https://demo.pesapal.com/api/querypaymentstatus';//change to      
		                   //https://www.pesapal.com/api/querypaymentstatus' when you are ready to go live!
		 $statusrequestAPI = 'https://www.pesapal.com/api/querypaymentstatus';
		// Parameters sent to you by PesaPal IPN
		$pesapalNotification=$_GET['pesapal_notification_type'];
		$pesapalTrackingId=$_GET['pesapal_transaction_tracking_id'];
		$pesapal_merchant_reference=$_GET['pesapal_merchant_reference'];

	//	if($pesapalNotification=="CHANGE" && $pesapalTrackingId!='')
	if( $pesapalTrackingId!='')
		{
			$token = $params = NULL;
			$consumer = new OAuthConsumer($consumer_key, $consumer_secret);
			$signature_method = new OAuthSignatureMethod_HMAC_SHA1();

			//get transaction status
			$request_status = OAuthRequest::from_consumer_and_token($consumer, $token, "GET", $statusrequestAPI, $params);
			$request_status->set_parameter("pesapal_merchant_reference", $pesapal_merchant_reference);
			$request_status->set_parameter("pesapal_transaction_tracking_id",$pesapalTrackingId);
			$request_status->sign_request($signature_method, $consumer, $token);

			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $request_status);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_HEADER, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
			if(defined('CURL_PROXY_REQUIRED')) if (CURL_PROXY_REQUIRED == 'True')
			{
			$proxy_tunnel_flag = (defined('CURL_PROXY_TUNNEL_FLAG') && strtoupper(CURL_PROXY_TUNNEL_FLAG) == 'FALSE') ? false : true;
			curl_setopt ($ch, CURLOPT_HTTPPROXYTUNNEL, $proxy_tunnel_flag);
			curl_setopt ($ch, CURLOPT_PROXYTYPE, CURLPROXY_HTTP);
			curl_setopt ($ch, CURLOPT_PROXY, CURL_PROXY_SERVER_DETAILS);
			}

			$response = curl_exec($ch);
			
// 			echo"<pre>";
// 			print_r($response);
// 			die();
			$header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
			$raw_header  = substr($response, 0, $header_size - 4);
			$headerArray = explode("\r\n\r\n", $raw_header);
			$header      = $headerArray[count($headerArray) - 1];

			//transaction status
			$elements = preg_split("/=/",substr($response, $header_size));
			$status = $elements[1];

			curl_close ($ch);

			//UPDATE YOUR DB TABLE WITH NEW STATUS FOR TRANSACTION WITH pesapal_transaction_tracking_id $pesapalTrackingId
			//Date and Time
			date_default_timezone_set('Africa/Nairobi');
			$dateTime =  date('Y-m-d, H:i:s');

			//Update
			$payment_updates = array(
			'tracking_id' =>$pesapalTrackingId,
			'txn_ipn_date' =>$dateTime,
			'notification_type' =>$status,
			'txn_status' =>'PAID',
			'flag' =>1
			);

			$this->db->where('reference_code', $pesapal_merchant_reference);
			$this->db->update($this->TXNtable, $payment_updates);

			$result = $resp.' | '.$status;

			if($this->db->affected_rows() > 0 && $status != "PENDING")
			{
			$resp="pesapal_notification_type=$pesapalNotification&pesapal_transaction_tracking_id=$pesapalTrackingId&pesapal_merchant_reference=$pesapal_merchant_reference";
			ob_start();
			echo $resp;
			ob_flush();
			exit;
			}
		}
    }

    //Transaction Success
    public function success()
    {
    	$data['response'] = 'Successful';

		//View
        $this->load->view('templates/header');
        $this->load->view('pages/pesapal/status',$data);
		$this->load->view('templates/footer');
    }

    //Transaction Failed
    public function failed()
    {
    	$data['response'] = 'Failed';

		//View
        $this->load->view('pesapal/status',$data);
    }

    //Transaction Feedback
    public function feedback($resp)
    {
    	$data['response'] = $resp;

		//View
        $this->load->view('pesapal/feedback',$data);
    }

}
