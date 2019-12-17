<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		$this->load->view('welcome_message');
	}

	function savecontact(){
	$name = $this->input->post("name");
	$email = $this->input->post("email");
	$contact = $this->input->post("subject");
	$comments = $this->input->post("message");
	
		$data = array(
				'name'=>$name,
				'email'=>$email,
				'subject'=>$contact,
				'message'=>$comments,
				'enquiry_date'=>date("Y-m-d"),
				'response'=>"NO"
		);
		
		$a=$this->db->insert("carrer",$data);
		if($a)
		{       $email=$this->input->post("email");
		    	$this->load->library('email');
			
			$this->email->from('info@daffodilsgzp.com', 'Daffodils Public School');
			$this->email->to($email);
// 			$this->email->cc('info@ddsmanner.in');
// 			$this->email->bcc('themannerschool@gmail.com,anandnarayansingh@gmail.com');
				
			$this->email->subject('Thanks For enquiry us');
			$this->email->message('Your Details are Successfully seved and we will contact you soon. Thanks Daffodils Public School Sahkari Colony Aamghat, Ghazipur, U.P');
				
			$this->email->send();
			redirect("welcome/index");
		}

		
	}
}
