<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Youngindian extends CI_Controller {

	

	public function index()
	{


		$userDetails = false;
		// echo json_encode($_POST);
		// exit;
		if($this->input->post("redg-submit")){
			$this->load->model("Users");
		 $userDetails =	$this->Users->user_add($this->input->post("first_name"),$this->input->post("last_name"),$this->input->post("sur_name"),$this->input->post("dob"),$this->input->post("gender"),$this->input->post("email_id"),$this->input->post("mobile_num"),$this->input->post("country"),$this->input->post("state"),$this->input->post("city"),$this->input->post("area"),$this->input->post("pincode"),$this->input->post("address"));
		}

		$this->load->view('header');
		$this->load->view('registration', array("userDetails"=>$userDetails));
		$this->load->view('footer');
	}
}
