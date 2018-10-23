<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	

	public function index()
	{
		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');
    }
    
    public function login(){

        $adminLoginSuccess = false;
        $adminLoginFailed = false;
        if ($this->input->post("login-submit")) {
			$this->load->model("Users");
            $this->load->helper('security');
            $userName =  $this->input->post("user_name");
            $password = $this->input->post("password");
			$uuid = xss_clean($this->input->post('uuid'), $is_image = false);
			$getadminDetails = $this->Users->admins_list(
            $userName, 
            $password);


            // echo "admin details".JSON_encode($getadminDetails);
            if(count($getadminDetails) != 0 ){
            if($userName == $getadminDetails[0]->username && md5($password) == $getadminDetails[0]->password ){
                $adminLoginSuccess = true;
            }
            else{
                $adminLoginFailed = true;
            }
            }
            else{
                $adminLoginFailed = true;
            }
        }

        $this->load->view('head');
        $this->load->view('login', array("adminLoginSuccess" => $adminLoginSuccess,"adminLoginFailed" => $adminLoginFailed ));
    }

    public function userDetails()
    {
        
        $this->load->model("Users");
            $userDetails = $this->Users->users_list();

            echo JSON_encode($userDetails);

            $this->load->view('head');
        $this->load->view('userlist', array("users"=>$userDetails));
            // exit;
        // $uuid = $this->input->post('uuid') ? $this->input->post('uuid') : 0;


        // if ($this->input->post("user-get")) {
        //     $this->load->model("Users");
        //     $userDetails = $this->Users->users_list($uuid);
        //     if ($userDetails->num_rows() == 0) {
        //         return false;
        //     } else if ($userDetails->num_rows() == 1) {
        //         return $userDetails->row();
        //     } else {
        //         return $userDetails->result();
        //     }
        // }
    }

}
    