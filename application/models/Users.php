<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Model {

	public function _constructor(){

		
	}

	public function user_add($first_name, $last_name, $sur_name, $dob, $gender, $email, $mobile, $country, $state, $city, $area, $pincode, $address){

		$sql = "INSERT INTO users(first_name, last_name, sur_name, dob, gender, email, mobile, country, state, city, area, pincode, address) VALUES ('$first_name', '$last_name', '$sur_name', '$dob', '$gender', '$email', '$mobile', '$country', '$state', '$city', '$area', '$pincode', '$address')";

		return $this->db->query($sql);
	}

	public function users_list($uuid, $first_name, $last_name, $sur_name, $dob, $gender, $email, $mobile, $country, $state, $city, $area, $pincode, $address){

		$sql = "SELECT first_name, last_name, sur_name, dob, gender, email, mobile, country, state, city, area, pincode, address FROM users where uuid = $uuid";
	}


}
