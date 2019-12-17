<?php
class ApanelForms extends CI_Controller{
	
//-------------------------------------------------------------------------------------------------------------------------	
	
	public function inquiry(){
		$name = $this->input->post("name");
		$data = array(
				"name" => $this->input->post("name"),
				"mobile" => $this->input->post("mobile"),
				"email" => $this->input->post("email"),
				"msg" => $this->input->post("msg"),
				"date" => date("Y-m-d")
		);
		if($this->db->insert("inquiry",$data)){
			if($this->input->post("contact") == "contact"):
				redirect("welcome/contact/true/$name");
			else:
				redirect("welcome/index/true/$name");
			endif;
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
	function saveGallery(){
		$photo_name = time().trim($_FILES['selectedStu']['name']);
		$data=array(
				'name'=>$this->input->post("title"),
				'image'=>$photo_name,
				'date'=>date("Y-m-d")
		);
		$query = $this->db->insert("gallery",$data);
		if($query){
			$this->load->library('upload');
			$image_path = realpath(APPPATH . '../assets/images');
			$config['upload_path'] = $image_path;
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size'] = '6048';
			$config['file_name'] = $photo_name;
		}
		if (!empty($_FILES['selectedStu']['name'])) {
			$this->upload->initialize($config);
			$this->upload->do_upload('selectedStu');
			
			redirect(base_url()."apanel/gallery");
			//echo $image_path;
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
public function deleteGallery(){
		$this->db->where("id",$this->uri->segment(3));
		if($this->db->delete("gallery")){
			redirect(base_url()."apanel/gallery");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}

//-------------------------------------------------------------------------------------------------------------------------	
	
//-----------------------------------------------------------------------------------------------------------------------------	
	public function noticeBoard(){
		$data = array(
				"subject" => $this->input->post("title"),
				"message" => $this->input->post("content"),
				"date" => date("Y-m-d")
		);
		if($this->db->insert("notice",$data)){
			redirect(base_url()."apanel/noticeBoard");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
	
//-----------------------------------------------------------------------------------------------------------------------------
	
function saveStaff(){
	
		$data=array(
				'name'=>$this->input->post("name"),
				'mobile'=>$this->input->post("mble_nm"),
					'qualification'=>$this->input->post("quali"),
						'experience'=>$this->input->post("exp"),
				
		);
		$query = $this->db->insert("staff",$data);
		if($query)
		{
			redirect(base_url()."apanel/staff");
		}
	}

		public function deleteStaff(){
		$this->db->where("id",$this->uri->segment(3));
		if($this->db->delete("staff")){
			redirect(base_url()."apanel/index");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}

	
 
		public function deleteCareer(){
		$this->db->where("id",$this->uri->segment(3));
		if($this->db->delete("carrer")){

			redirect(base_url()."apanel/contact");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
		
		
		
		
		
		
	}
