<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Donations_model extends CI_Model
{
	function __construct()
    {
	    parent::__construct();
	    $this->load->library('email');
	}

	public function make_donation($user_email, $organisation_name, $mother_name, $days_donated, $hr_email) {
		// $this->db->insert($this->tables['donations'], $data);
		$this->db->query("INSERT INTO donations SET user_email = ?, organisation_name = ?, mother_name = ?, days_donated = ?, hr_email = ?", array($user_email, $organisation_name, $mother_name, $days_donated, $hr_email));
		// return $this->db->insert_id();
		return true;
	}

	public function get_count() {
		$query = $this->db->query("SELECT SUM(days_donated) as sum FROM donations");
		$result = $query->result();
		return $result[0]->sum;
	}
}