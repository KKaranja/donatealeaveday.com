<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('donations_model');
	}

	public function index()
	{
		$this->load->view('home');
	}

	public function email() {
		$this->load->view('emailer/email');
	}

	public function make_donation() {
		$user_email = $this->input->post(NULL,TRUE)['user_email'];
		$organisation_name = $this->input->post(NULL,TRUE)['organisation_name'];
		$mother_name = $this->input->post(NULL,TRUE)['mother_name'];
		$days_donated = $this->input->post(NULL,TRUE)['days_donated'];
		$hr_email = $this->input->post(NULL,TRUE)['hr_email'];

		$this->donations_model->make_donation($user_email, $organisation_name, $mother_name, $days_donated, $hr_email);
		// $this->send_email($user_email);
		die();
	}

	public function get_count() {
		$sum = $this->donations_model->get_count();
		die(json_encode($sum));
	}

	public function send_email($email_to) {
		$from_email = "frankcubi7@gmail.com";
        $to_email = $email_to;
        $subject = "Donate a Leave Day";
        $message = "It Takes a Village";

		$config = Array(
		  'protocol' => 'smtp',
		  'smtp_host' => 'ssl://smtp.googlemail.com',
		  'smtp_port' => 465,
		  'smtp_user' => 'frankcubi7@gmail.com', // change it to yours
		  'smtp_pass' => 'franciskarimi', // change it to yours
		  'mailtype' => 'html',
		  'charset' => 'iso-8859-1',
		  'wordwrap' => TRUE
		);

		$this->load->library('email', $config);

        $this->email->from($from_email, "Isobar");
        $this->email->to($to_email);
        $this->email->subject($subject);
        $this->email->message($message);

        if($this->email->send())
	    {
	    	$this->load->library('encrypt');
	    	echo 'Email sent.';
	    }
	     else
	    {
	    	show_error($this->email->print_debugger());
	    }
	}
	// public function email_config() {

	// 	$config = Array(
	// 		'protocol' => 'smtp',
	// 		// 'mailpath' => '/usr/sbin/sendmail',
	// 		'smtp_host' => 'n3plcpnl0100.prod.ams3.secureserver.net',
	// 		'validate'=>TRUE,
	// 		// 'smtp_timeout'=>30,
	// 		'smtp_port' => 25,
	// 		'smtp_user' => 'support@groupmfi.com',
	// 		'smtp_pass' => 'tIsc.jJ6Ex?T',
	// 		'mailtype' => 'html',
	// 		'charset' => 'iso-8859-1',
	// 		'wordwrap' => TRUE
	// 	  );

	// 	$this->email->initialize($config);
	// }
}
