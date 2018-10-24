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
        $this->load->library('session');  
        
        if(!empty($this->session->userdata('user'))){
            redirect('admin/userDetails');
            return true;    
        }

        $adminLoginSuccess = false;
        $adminLoginFailed = false;
        if ($this->input->post("login-submit")) {
			$this->load->model("Users");
            $this->load->helper('security');
            $userName =  $this->input->post("user_name");
            $password = $this->input->post("password");
			$uuid = xss_clean($this->input->post('uuid'), $is_image = false);
			$getadminDetails = $this->Users->admins_list($userName, $password);


            // echo "admin details".JSON_encode($getadminDetails);
            if(count($getadminDetails) != 0 ){
            if($userName == $getadminDetails[0]->username && md5($password) == $getadminDetails[0]->password ){
                // $adminLoginSuccess = true;
                $this->session->set_userdata(array('user'=>$getadminDetails[0]->username));  
                redirect('admin/userDetails');
                return true;
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
        if(!empty($this->session->userdata('user'))){
            $this->load->model("Users");
            $userDetails = $this->Users->users_list();
            // echo JSON_encode($userDetails);
            $this->load->view('head');
            $this->load->view('userlist', array("users"=>$userDetails));  
        }

        else{
            redirect('admin/login');            
        }

    }

    public function singleUserDetails(){
        $uuid = $this->uri->segment(3);
        echo $uuid;
        if(!empty($this->session->userdata('user'))){
            $this->load->model("Users");
            $userDetails = $this->Users->singleUserDetail($uuid);

            if(count($userDetails) != 0 ){
                echo JSON_encode($userDetails);
                $this->load->view('header');
                $this->load->view('update', array("userDetails" => $userDetails ));
                $this->load->view('footer');
            }
            else{
                return false;
            }

            // $this->load->view('head');
            // $this->load->view('userlist', array("users"=>$userDetails));  
        }
    }

    public function logout(){
        $this->session->sess_destroy();  
        redirect('admin/login');  
    }

}
    