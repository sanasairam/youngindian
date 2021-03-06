<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Model {

	public function _constructor(){

		
	}

	public function user_add($first_name, $sur_name, $dob, $gender, $email, $mobile, $country, $state, $city, $area, $pincode, $education,$jobprofile, $address, $identity_num=null, $identity_file=null, $profile_image=null){

		$sql = "INSERT INTO users(first_name, sur_name, dob, gender, email, mobile, country, state, city, area, pincode,education,jobprofile, address,identity_num,identity_file,profile_image) VALUES ('$first_name', '$sur_name', '$dob', '$gender', '$email', '$mobile', '$country', '$state', '$city', '$area', '$pincode','$education','$jobprofile', '$address','$identity_num','$identity_file','$profile_image')";

		return $this->db->query($sql);
	}

	public function users_list(){

		$sql = "SELECT uuid, first_name, sur_name, mobile, city, area FROM users";
		$userDetails = $this->db->query($sql);
		return $userDetails->result();
	}

	public function admins_list($user_name, $password){

		$sql = "SELECT *  FROM admins where username = '$user_name' ";
		$adminDetails = $this->db->query($sql);
		return $adminDetails->result();

	}

	public function singleUserDetail($uuid){

		$sql = "SELECT *  FROM users where uuid = '$uuid' ";
		$userDetails = $this->db->query($sql);
		return $userDetails->result();

	}


}
