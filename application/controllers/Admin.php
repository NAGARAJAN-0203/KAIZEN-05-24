<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mapi');
		$this->load->model('memail');
		$this->load->model('messages');
		$this->load->library('excelsheet');

	}

	/**********************************
	LOGOUT - SESSION
	**********************************/
	public function logout() {
		//session_start();
		//session_unset();
		//session_destroy();
		$this->session->unset_userdata('viv_email');
		$this->session->unset_userdata('viv_profile_id');
		$this->session->unset_userdata('viv_user_type');
		redirect('admin');
	}

	/**********************************
	ADMIN - Login
	**********************************/
	public function testtable()
	{
		//$this->load->view('testtable');
		//$this->mapi->update_returntype_returnstatement();
		//$this->mapi->update_returntype_feesentry();

	}



	/**********************************
	ADMIN - testemail
	**********************************/
	public function testemail()
	{
		$to      = 'chandru5452@gmail.com';
		$subject = 'kaizen test';
		$message = 'kaizen test';
		$headers = array(
			 'From' => 'chandru5452@gmail.com',
			 'Reply-To' => 'chandru5452@gmail.com',
			 'X-Mailer' => 'PHP/' . phpversion()
		);

		mail($to, $subject, $message, $headers);

	}

	/**********************************
	ADMIN - Login
	**********************************/
	public function index()
	{
		$this->load->view('login');
	}


	/**********************************
	ADMIN - register
	**********************************/
	public function register()
	{
		$this->load->view('signup');
	}

	/**********************************
	ADMIN - forgotpassword
	**********************************/
	public function forgotpassword()
	{
		$this->load->view('forgotpassword');
	}

	/**********************************
	ADMIN - forgotpassword
	**********************************/
	public function newpassword()
	{
		$this->load->view('newpassword');
	}






	/**********************************
	tremmeandous - changepassword
	**********************************/
	public function changepassword()
	{


		$user_type = $this->session->userdata('viv_user_type');
		if($user_type=='TRMMADMIN' || $user_type=='TRMMEMP'  || $user_type=='TRMMMANG' || $user_type=='TRMMFINANCE' || $user_type=='TRMMIEDEPT') {
			$this->load->view('changepassword');
		}
		else  {
			$this->logout();
		}
	}


	/**********************************
	tremmeandous - Dashboard
	**********************************/
	public function kaizenidea()
	{


		$user_type = $this->session->userdata('viv_user_type');
		if($user_type=='TRMMADMIN' || $user_type=='TRMMEMP'  || $user_type=='TRMMMANG' || $user_type=='TRMMFINANCE' || $user_type=='TRMMIEDEPT') {
			$this->load->view('kaizenidea/home');
		}
		else  {
			$this->logout();
		}
	}




	/**********************************
	ADMIN - addsession
	**********************************/
	public function addsession()
	{
		$email = $this->input->post('email');
		$user_type = $this->input->post('usertype');
		$profile_id = $this->input->post('profileid');
		$empid = $this->input->post('empid');
		$profile_pic = $this->input->post('profile_pic');
		$fname = $this->input->post('fname');
		$designation = $this->input->post('designation');
		$domain = $this->input->post('domain');
		$password = $this->input->post('password');
		$md5password = MD5(123);


		$this->session->set_userdata('viv_email', $email);
		$this->session->set_userdata('viv_user_type', $user_type);
		$this->session->set_userdata('viv_profile_id', $profile_id);
		$this->session->set_userdata('viv_empid', $empid);
		$this->session->set_userdata('viv_profile_pic', $profile_pic);
		$this->session->set_userdata('viv_fname', $fname);
		$this->session->set_userdata('viv_designation', $designation);
		$this->session->set_userdata('viv_domain', $domain);


		if($password==$md5password) {
			redirect('admin/changepassword');
		} else {
			redirect('admin/kaizenidea/dashboard');
		}

	}


	public function downloadpdf_kaizenidea_byid($idea_id) {
		//$this->mapi->downloadpdf_kaizenidea_byid($idea_id);
		$user_type = $this->session->userdata('viv_user_type');
		if($user_type=='TRMMADMIN' || $user_type=='TRMMEMP'  || $user_type=='TRMMMANG' || $user_type=='TRMMFINANCE' || $user_type=='TRMMIEDEPT') {
			$this->load->view('kaizenidea/idea/downloadkaizenpdf');
		}
		else  {
			$this->logout();
		}
	}



	public function updateidea() { $this->mapi->updateidea(); }
	public function updateidea_ajax() { $this->mapi->updateidea_ajax(); }
	public function createuser() { $this->mapi->createuser(); }
	public function edituser() { $this->mapi->edituser(); }


	public function updateideastatus() { $this->mapi->updateideastatus(); }
	public function updateideastatus_fin() { $this->mapi->updateideastatus_fin(); }
	public function updateideastatus_iedept() { $this->mapi->updateideastatus_iedept(); }
	public function updateideastatus_finance() { $this->mapi->updateideastatus_finance(); }
	public function importuserexcel() { $this->mapi->importuserexcel(); }

	public function updatemyprofile() { $this->mapi->updatemyprofile(); }

	public function downloadkaizenreportexcel($statusname) { $this->mapi->downloadkaizenreportexcel($statusname); }
	public function downloadideareportexcel($statusname) { $this->mapi->downloadideareportexcel($statusname); }

	public function updateuserpassword() { $this->mapi->updateuserpassword(); }
	public function updateuserpassword_user() { $this->mapi->updateuserpassword_user(); }
	public function updatenewpassword_user() { $this->mapi->updatenewpassword_user(); }


	public function updateidea_ideagen() { $this->mapi->updateidea_ideagen(); }
	public function updateideastatus_ideagen() { $this->mapi->updateideastatus_ideagen(); }
	public function updateideastatus_iedept_ideagen() { $this->mapi->updateideastatus_iedept_ideagen(); }
	public function updateideastatus_finance_ideagen() { $this->mapi->updateideastatus_finance_ideagen(); }





	public function updateidea_manageredit() { $this->mapi->updateidea_manageredit(); }
	public function updateidea_ideagen_manageredit() { $this->mapi->updateidea_ideagen_manageredit(); }


	public function downloaduseremailsexcel($condi) { $this->mapi->downloaduseremailsexcel($condi); }

	public function deletekaizenbyemp($idea_id) { $this->mapi->deletekaizenbyemp($idea_id); }

	public function addcatg() { $this->mapi->addcatg(); }
	public function adddepartment() { $this->mapi->adddepartment(); }
	public function upddmstatus($domainid,$status) { $this->mapi->upddmstatus($domainid,$status); }
	public function deletedomain($domainid) { $this->mapi->deletedomain($domainid); }

	public function upddpstatus($deptid,$status) { $this->mapi->upddpstatus($deptid,$status); }
	public function deletedepart($deptid) { $this->mapi->deletedepart($deptid); }
	public function addwinner() { $this->mapi->addwinner(); }
	public function updwinnerstatus($winnerid,$status) { $this->mapi->updwinnerstatus($winnerid,$status); }
	public function deletewinner($winnerid) { $this->mapi->deletewinner($winnerid); }

	public function get_dept_bydomain() { $this->mapi->get_dept_bydomain(); }
	public function mforgotpassword_user() { $this->mapi->mforgotpassword_user(); }







	//public function importuserexcel_temp() { $this->mapi->importuserexcel_temp(); }
	//public function temp_updateusers_addinfo() { $this->mapi->temp_updateusers_addinfo(); }
	//public function temp_addusersfrom_newlist() { $this->mapi->temp_addusersfrom_newlist(); }
	//public function temp_update_datetimestamp() { $this->mapi->temp_update_datetimestamp(); }





}
