<?php
class Admin_Controller extends Master_Controller
{

	function __construct()
	{
		parent::__construct();

		// redirect ไปที่หลังบ้านเว็บใหม่
		redirect('http://thaigcd.ddc.moph.go.th/2016/admin');

		// Check Auth Login
		if(!is_login('Administrator')) redirect('users/admin/auth');
		if(!is_auth()) redirect('users/admin/auth/fail');

		$this->template->set_theme('admin');

		// Set layout
		$this->template->set_layout('layout');

		// Load Langauge
		$this->lang->load('admin');

		// Set js
		$this->template->append_metadata(js_notify());
	}

}
?>
