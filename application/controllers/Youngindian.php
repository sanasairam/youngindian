<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Youngindian extends CI_Controller {

	

	public function index()
	{
		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');
	}

	public function register()
	{
        $userDetails = false;
        $registrationFailed = false;

        if ($this->input->post("redg-submit")) {
			$this->load->model("Users");
			$this->load->helper('security');
			$uuid = xss_clean($this->input->post('uuid'), $is_image = false);
			$userDetails = $this->Users->user_add(
            $this->input->post("first_name"), 
			$this->input->post("last_name"),
			$this->input->post("sur_name"),
			$this->input->post("dob"),
			$this->input->post("gender"),
			$this->input->post("email_id"), 
			$this->input->post("mobile_num"), 
			$this->input->post("country"), 
			$this->input->post("state"), 
			$this->input->post("city"),
			$this->input->post("area"), 
			$this->input->post("pincode"), 
			$this->input->post("address"));
            if ($userDetails) {
                $userDetails = true;
            }
            else{
                $registrationFailed = true;
            }
        }

        
        $this->load->view('header');
        $this->load->view('registration', array("userDetails" => $userDetails,"registrationFailed" => $registrationFailed ));
        $this->load->view('footer');
        $this->load->view('validation');
	}

    public function userDetails()
    {
        $uuid = $this->input->post('uuid') ? $this->input->post('uuid') : 0;
        if ($this->input->post("user-get")) {
            $this->load->model("Users");
            $userDetails = $this->Users->users_list($uuid);
            if ($userDetails->num_rows() == 0) {
                return false;
            } else if ($userDetails->num_rows() == 1) {
                return $userDetails->row();
            } else {
                return $userDetails->result();
            }
        }
    }
    public function userstatuschange()
    {
        $this->load->model("Users");
        $uuid = $this->input->post('uuid');
        $status = $this->input->post('status');
        $update = $this->Users->user_status_change($uuid, $status);
        if ($update == false) {
            return false;
        } else {
            return true;
        }
    }
    public function userupdate()
    {
        if ($this->input->post("user-update")) {
            $this->load->model("Users");
            $this->load->helper('security');
            $this->form_validation->set_data($this->post());
            $this->form_validation->set_rules('uuid', 'uuid', 'trim');
            $this->form_validation->set_rules('first_name', 'first_name', 'trim');
            $this->form_validation->set_rules('last_name', 'last_name', 'trim');
            $this->form_validation->set_rules('sur_name', 'sur_name', 'trim');
            $this->form_validation->set_rules('dob', 'dob', 'trim');
            $this->form_validation->set_rules('gender', 'gender', 'trim');
            $this->form_validation->set_rules('email', 'email', 'trim');
            $this->form_validation->set_rules('mobile', 'mobile', 'trim');
            $this->form_validation->set_rules('country', 'country', 'trim');
            $this->form_validation->set_rules('state', 'state', 'trim');
            $this->form_validation->set_rules('city', 'city', 'trim');
            $this->form_validation->set_rules('area', 'area', 'trim');
            $this->form_validation->set_rules('pincode', 'pincode', 'trim');
            $this->form_validation->set_rules('address', 'address', 'trim');
            if (!$this->form_validation->run()) {
                $this->response(array('status' => 'failed', 'error' => $this->form_validation->error_array(), 'description' => 'Given data wrong ' . validation_errors()), 200);
                return false;
            }
            $uuid = xss_clean($this->input->post('uuid'), $is_image = false);
            $first_name = xss_clean($this->input->post('first_name'), $is_image = false);
            $last_name = xss_clean($this->input->post('last_name'), $is_image = false);
            $sur_name = xss_clean($this->input->post('sur_name'), $is_image = false);
            $dob = xss_clean($this->input->post('dob'), $is_image = false);
            $gender = xss_clean($this->input->post('gender'), $is_image = false);
            $email = xss_clean($this->input->post('email'), $is_image = false);
            $mobile = xss_clean($this->input->post('mobile'), $is_image = false);
            $country = xss_clean($this->input->post('country'), $is_image = false);
            $state = xss_clean($this->input->post('state'), $is_image = false);
            $city = xss_clean($this->input->post('city'), $is_image = false);
            $area = xss_clean($this->input->post('area'), $is_image = false);
            $pincode = xss_clean($this->input->post('pincode'), $is_image = false);
            $address = xss_clean($this->input->post('address'), $is_image = false);
            $update = $this->Users->user_update($uuid, $first_name, $last_name, $sur_name, $dob, $gender, $email, $mobile, $country, $state, $city, $area, $pincode, $address);
            if ($update == false) {
                return false;
            } else {
                return true;
            }
        }
    }
    public function userdelete()
    {
        if ($this->input->post("user-delete")) {
            $this->load->model("Users");
            $delete = $this->Users->user_delete($this->input->post("uuid"));
            if ($delete == false) {
                return false;
            } else {
                return true;
            }
        }
    }

}