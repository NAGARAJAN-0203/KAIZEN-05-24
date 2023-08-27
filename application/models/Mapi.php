<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mapi extends CI_Model {
	function __construct() {
		parent::__construct();
 		//$this->load->model("memail");

	}


public function testscript() {

}

public function testcronjob() {
		$currentdatetime = $this->currentdatetime();
		$data = array(
						 'teststatus'=>1,
						 'subdate'=>$currentdatetime
					 );

	 $this->db->insert('test_cronjob',$data);

}



 /********************************
 Random ID Generator
 *********************************/
 public function randomiduniq() {
	 /****** Random ID Generator ********/
		$d=date ("d"); $m=date ("m"); $y=date ("Y"); $t=time();
		$dmt=$d+$m+$y+$t;   $ran= rand(0,10000000);  $dmtran= $dmt+$ran; $un=  uniqid(); $dmtun = $dmt.$un;
		$mdun = md5($dmtran.$un);
		$sort=substr($mdun, 16); // if you want sort length code.
		return $sort;
		/****** Random ID Generator ********/
 }


 /********************************
 Random ID Generator
 *********************************/
 public function currentdatetime() {
	 /***** CURRENT TIME ************/
 		date_default_timezone_set('Asia/Kolkata');
 		//$dte = date('Y-m-d h:i:s A');
		$dte = date("F j, Y, g:i a");
		return $dte;
 	/***** CURRENT TIME ************/
 }



 /********************************
	Login Model
	********************************/
	public function biz_login() {
		$email = $this->input->post('email');
		$password = md5($this->input->post('password'));


 		//Ani---
		/*$sql = mysql_query("select * from usermang where (email='$email' AND password='$password') AND (password='$password' AND status='1')");
		$row = mysqli_num_rows($sql);*/

		//$sql = $this->db->query("select * from usermang where (email='$email' AND status='1')");
		//$sql = $this->db->query("select * from usermang where (email='$email' AND password='$password') AND (password='$password' AND status='1')");

		$this->db->select('*');
		$this->db->from('usermang');
		$this->db->where('email', $email);
		$this->db->where('password', $password);
		$this->db->where('status', 1);
 		$sql_check = $this->db->get();
		//return $sql->result();
		$rows = $sql_check->num_rows();


		//$rows = $sql->num_rows();

		if($rows>0) {

		foreach ($sql_check->result() as $row)
		{
			$user_type = $row->user_type;
			$profile_id = $row->profile_id;
			$empid = $row->empid;
			$profile_pic = $row->profile_pic;
			$fname = $row->fname;
			$designation = $row->designation;
			$domain = $row->domain;

		}


		/*while($row_array = mysqli_fetch_array($sql)) {
			$user_type = $row_array['user_type'];
			$profile_id = $row_array['profile_id'];
		}*/

			if($user_type=='TRMMADMIN') {
				//session_start();
				//$_SESSION['email'] = $email;
				//$_SESSION['user_type'] = $user_type;
				/*
				$this->session->set_userdata('viv_email', $email);
				$this->session->set_userdata('viv_user_type', $user_type);
				$this->session->set_userdata('viv_profile_id', $profile_id);
				redirect('admin/tremmeandous/dashboard');
				*/

				$data['email'] = $email;
				$data['usertype'] = $user_type;
				$data['profileid'] = $profile_id;
				$data['empid'] = $empid;
				$data['profile_pic'] = $profile_pic;
				$data['fname'] = $fname;
				$data['designation'] = $designation;
				$data['domain'] = $domain;
				$data['password'] = $password;

				$data['msgid'] = '';
				$data['message'] = '';
				$data['mstatus'] = '1';
				$json = json_encode($data);
				echo $json;

			}


			elseif($user_type=='TRMMEMP') {
				$data['email'] = $email;
				$data['usertype'] = $user_type;
				$data['profileid'] = $profile_id;
				$data['empid'] = $empid;
				$data['profile_pic'] = $profile_pic;
				$data['fname'] = $fname;
				$data['designation'] = $designation;
				$data['domain'] = $domain;
				$data['password'] = $password;

 				$data['msgid'] = '';
				$data['message'] = '';
				$data['mstatus'] = '1';
				$json = json_encode($data);
				echo $json;
			}

			elseif($user_type=='TRMMMANG') {
 				$data['email'] = $email;
				$data['usertype'] = $user_type;
				$data['profileid'] = $profile_id;
				$data['empid'] = $empid;
				$data['profile_pic'] = $profile_pic;
				$data['fname'] = $fname;
				$data['designation'] = $designation;
				$data['domain'] = $domain;
				$data['password'] = $password;

 				$data['msgid'] = '';
				$data['message'] = '';
				$data['mstatus'] = '1';
				$json = json_encode($data);
				echo $json;
			}

			elseif($user_type=='TRMMFINANCE') {
 				$data['email'] = $email;
				$data['usertype'] = $user_type;
				$data['profileid'] = $profile_id;
				$data['empid'] = $empid;
				$data['profile_pic'] = $profile_pic;
				$data['fname'] = $fname;
				$data['designation'] = $designation;
				$data['domain'] = $domain;
				$data['password'] = $password;

 				$data['msgid'] = '';
				$data['message'] = '';
				$data['mstatus'] = '1';
				$json = json_encode($data);
				echo $json;
			}

			elseif($user_type=='TRMMIEDEPT') {
 				$data['email'] = $email;
				$data['usertype'] = $user_type;
				$data['profileid'] = $profile_id;
				$data['empid'] = $empid;
				$data['profile_pic'] = $profile_pic;
				$data['fname'] = $fname;
				$data['designation'] = $designation;
				$data['domain'] = $domain;
				$data['password'] = $password;

 				$data['msgid'] = '';
				$data['message'] = '';
				$data['mstatus'] = '1';
				$json = json_encode($data);
				echo $json;
			}





		 }
		 else {
			/*
			$data['status'] = '0';
			$data['message'] = 'Incorrect Email and Password';
		  redirect('admin/index/msg_3');
			*/
			$data['mstatus'] = '0';
			$data['msgid'] = '';
			$data['message'] = 'Invalid Username and Password';
			$json = json_encode($data);
			echo $json;

		 }
	}





	 /********************************
		register
		********************************/
		public function register() {
			$name = $this->input->post('name');
			$email = $this->input->post('email');
			$gender = $this->input->post('gender');
			$domain = $this->input->post('domain');
			$depart = $this->input->post('dept');
			$email2 = $this->input->post('email2');

 			$password = md5($this->input->post('password'));


			$this->db->select('*');
			$this->db->from('usermang');
			$this->db->where('email', $email);
 	 		$sql_check = $this->db->get();
			//return $sql->result();
			$rows = $sql_check->num_rows();



			//$rows = $sql->num_rows();

			if($rows>0) {

				$data['mstatus'] = '0';
				$data['msgid'] = '';
				$data['message'] = 'EmpID already exist';
				$json = json_encode($data);
				echo $json;

			 }
			 else {

				  $randomiduniq = $this->randomiduniq();
					$currentdatetime = $this->currentdatetime();


				 $data = array(
					 'profile_id' => 'USER-'.$randomiduniq,
					 'email' => $email,
					 'password' => $password,
					 'fname' => $name,
					 'gender' => $gender,
					 'domain' => $domain,
					 'depart' => $depart,
					 'email2' => $email2,
					 'user_type' => 'TRMMEMP',
					 'status' => 1,
					 'profile_pic' => 0,
 					 'sub_by' => '',
					 'sub_time' => $currentdatetime
					 );
			 $this->db->insert('usermang', $data);



				$data['mstatus'] = '1';
				$data['msgid'] = '';
				$data['message'] = 'Registered Successfully';
				$json = json_encode($data);
				echo $json;

			 }
		}



	/********************************
 WEBSITE - createidea
 ********************************/

public function createidea() {

		$randomiduniq = $this->randomiduniq();
		$currentdatetime = $this->currentdatetime();

		$viv_profile_id = $this->session->userdata('viv_profile_id');
		//$viv_email = $this->session->userdata('viv_email');

		$sday=date('d');
		$smonth=date('m');
		$syear=date('Y');


		$ideaid     = 'IDEA'.$randomiduniq;
		$uniqueurlid     = uniqid();

		/*
		$this->db->where('status', 0);
		$this->db->where('profile_id', $viv_profile_id);
		$this->db->delete('ideas');
		*/


		$data = array(
							 'idea_id'=>$ideaid,
							 'profile_id'=>$viv_profile_id,
							// 'emailid'=>$viv_email,
						   'status'=>0,
							 'hold_status'=>0,
 							 'emp_edit_status'=>0,
               'subdatetime'=>time()
 						 );

		 $this->db->insert('ideas',$data);



			if($this->db->affected_rows() > 0) {
				//redirect('users/invitecolleaguesprivate/'.$challengeid.'/mge292d7e3');
				//redirect('users/editnewchallenge/'.$challengeid.'/mge292d7e3');
				redirect('admin/kaizenidea/ideamang/postidea/'.$ideaid.'');
			} else {
				//redirect('users/editnewchallenge/'.$challengeid.'/mgcd1c3922');
				redirect('dashboard');


			}




}




/********************************
WEBSITE - createidea
********************************/

public function deletekaizenbyemp($idea_id) {

			$viv_profile_id = $this->session->userdata('viv_profile_id');

		 	$this->db->where('idea_id', $idea_id);
			$this->db->where('profile_id', $viv_profile_id);
			$this->db->delete('ideas');


			if($this->db->affected_rows() > 0) {
 				redirect('admin/kaizenidea/ideamang/myidea/totalsubmitted');
			} else {
 				redirect('admin/kaizenidea/ideamang/myidea/totalsubmitted');


			}

}







	/********************************
	 WEBSITE - updateidea
	 ********************************/

	public function updateidea() {

			$randomiduniq = $this->randomiduniq();
		 	$currentdatetime = $this->currentdatetime();

			$viv_profile_id = $this->session->userdata('viv_profile_id');

			$sday=date('d');
			$smonth=date('m');
			$syear=date('Y');

			$ideaid        = $this->input->post('ideaid');
			$activity        = $this->input->post('activity');
			$activity_desc        = $this->input->post('activity_desc');
			$version_no        = $this->input->post('version_no');
			$proj_code        = $this->input->post('proj_code');
			$doc_no        = $this->input->post('doc_no');



			$benifit_area        = $this->input->post('benifit_area');
			$ref_no        = $this->input->post('ref_no');
			$tepl_plant        = $this->input->post('tepl_plant');
			$ktheme        = $this->input->post('ktheme');
			$idea        = $this->input->post('idea');
			$plantname        = $this->input->post('plantname');
			$prob_stmt        = $this->input->post('prob_stmt');
			$count_measur        = $this->input->post('count_measur');

			//$cs_quality = $this->input->post('cs_quality');
			$cs_yield = $this->input->post('cs_yield');
			$cs_cycletime = $this->input->post('cs_cycletime');
			if(empty($cs_cycletime) || $cs_cycletime=='0') { $cs_cycletime = ''; }

			$cs_cost = $this->input->post('cs_cost');
			//$cs_material = $this->input->post('cs_material');
			$cs_manpower = $this->input->post('cs_manpower');
			if(empty($cs_manpower) || $cs_manpower=='0') { $cs_manpower = ''; }

			$cs_consumables = $this->input->post('cs_consumables');
			$cs_others = $this->input->post('cs_others');
			$cs_totalsavings = $this->input->post('cs_totalsavings');
			$cs_appr_ie = $this->input->post('cs_appr_ie');
			$cs_appr_acco = $this->input->post('cs_appr_acco');
			//$cs_standardization = $this->input->post('cs_standardization');
			//$cs_sopsp = $this->input->post('cs_sopsp');
			//$cs_drawing = $this->input->post('cs_drawing');


			$root_cause = $this->input->post('root_cause');

			if(empty($activity)) {
					$root_cause_im = '';
			}	else {
				$root_cause_im = implode(",",$root_cause);
			}


			//$root_cause_exp = $this->input->post('root_cause_exp');
 			$root_cause_block = $this->input->post('root_cause_block');

			$brf_exp_precond = $this->input->post('brf_exp_precond');
			$brf_exp_impdone = $this->input->post('brf_exp_impdone');
			$benifits = $this->input->post('benifits');


			$horizradio = $this->input->post('horizradio');
			$horizontal1 = $this->input->post('horizontal1');
			$horizontal2 = $this->input->post('horizontal2');
			$horizontal3 = $this->input->post('horizontal3');
			$horizontal4 = $this->input->post('horizontal4');

			$origi_domain = $this->input->post('origi_domain');
			$origi_dept = $this->input->post('origi_dept');
			$origi_name = $this->input->post('origi_name');
			$origi_date = $this->input->post('origi_date');
			$origi_date_ex = explode("-",$origi_date);
			$origi_day = $origi_date_ex[2];
			$origi_month = $origi_date_ex[1];
			$origi_year = $origi_date_ex[0];

			$approv_dept = $this->input->post('approv_dept');
			$approv_name = $this->input->post('approv_name');
			$approv_email = $this->input->post('approv_email');
			$approv_email2 = $this->input->post('approv_email2');

			$approv_date = $this->input->post('approv_date');



			$confirm_dept = $this->input->post('confirm_dept');
			$confirm_name = $this->input->post('confirm_name');
			$confirm_date = $this->input->post('confirm_date');

			if(empty($activity)) {
					$activity_im = '';
			}	else {
				$activity_im = implode(",",$activity);
			}

			if(empty($benifit_area)) {
					$benifit_area_im = '';
			}	else {
			$benifit_area_im = implode(",",$benifit_area);
			}

			$submit = $this->input->post('submit');
			if($submit=='submitit') {
				$status = 1;

				$attachm = $this->findtotalimageofkaizen_attachm($ideaid);
				if($attachm>0) {
					$imgapprov_status = 1;
				} else {
					$imgapprov_status = 2;
				}


			} elseif($submit=='submitiedept') {

				$status = 2;
        $imgapprov_status = 2;


			} elseif($submit=='submitfinance') {

				$status = 4;
        $imgapprov_status = 2;


			} elseif($submit=='saveit') {
				$status = 0;
				$imgapprov_status = 0;
			}


			$date_now = $sday."-".$smonth."-".$syear;
	 	  $datestamp = strtotime($date_now);



			$data = array(
									'activity'=>$activity_im,
 	               'activity_desc'=>$activity_desc,

	               'version_no'=>$version_no,
	 							 'proj_code'=>$proj_code,
								 'doc_no'=>$doc_no,
								 'benifit_area'=>$benifit_area_im,
								 'ref_no'=>$ref_no,
								 'tepl_plant'=>$tepl_plant,
								 'ktheme'=>$ktheme,
								 'idea'=>$idea,
								 'plantname'=>$plantname,
								 'prob_stmt'=>$prob_stmt,
								 'count_measur'=>$count_measur,

								//'cs_quality'=>$cs_quality,
								'cs_yield'=>$cs_yield,
								'cs_cycletime'=>$cs_cycletime,
					 		 	'cs_cost'=>$cs_cost,
					 			//'cs_material'=>$cs_material,
								//'cs_consumable'=>$cs_consumable,
					 			'cs_manpower'=>$cs_manpower,
					 			'cs_consumables'=>$cs_consumables,
					 			'cs_others'=>$cs_others,
					 			'cs_totalsavings'=>$cs_totalsavings,
					 			'cs_appr_ie'=>$cs_appr_ie,
					 			'cs_appr_acco'=>$cs_appr_acco,
					 			//'cs_standardization'=>$cs_standardization,
					 			//'cs_sopsp'=>$cs_sopsp,
								//'cs_drawing'=>$cs_drawing,

								'root_cause'=>$root_cause_im,
								//'root_cause_exp'=>$root_cause_exp,
								'root_cause_block'=>$root_cause_block,
								'brf_exp_precond'=>$brf_exp_precond,
								'brf_exp_impdone'=>$brf_exp_impdone,
					 			'benifits'=>$benifits,

								'horizradio'=>$horizradio,
								'horizontal1'=>$horizontal1,
								'horizontal2'=>$horizontal2,
								'horizontal3'=>$horizontal3,
								'horizontal4'=>$horizontal4,
								'origi_domain'=>$origi_domain,
								'origi_dept'=>$origi_dept,
								'origi_name'=>$origi_name,
								'origi_date'=>$origi_date,

								'origi_day'=>$origi_day,
								'origi_month'=>$origi_month,
								'origi_year'=>$origi_year,

								'approv_dept'=>$approv_dept,
								'approv_name'=>$approv_name,
								'approv_email'=>$approv_email,
								'approv_email2'=>$approv_email2,

 								'approv_date'=>$approv_date,
								'confirm_dept'=>$confirm_dept,
								'confirm_name'=>$confirm_name,
								'confirm_date'=>$confirm_date,

								 'status'=>$status,
								 'imgapprov'=>$imgapprov_status,
		            // 'imgapprov_by'=>$viv_profile_id,


		   					 'sday'=>$sday,
								 'smonth'=>$smonth,
								 'syear'=>$syear,
								 'subdatetime'=>$currentdatetime,
								 'datetimestamp'=>$datestamp,
								 'emp_edit_status'=>'0',
	               'hold_status'=>'0'
	             );


			 $this->db->where('idea_id', $ideaid);
	     $this->db->update('ideas',$data);


		 	if($this->db->affected_rows() > 0) {

				//echo $ideaid;
				//TRigger Email
        echo $this->memail->triggerkaizensubmit($approv_email,$ideaid,$currentdatetime,$randomiduniq);
				//echo "oooooo";
 	      redirect('admin/kaizenidea/ideamang/myidea/');
		 	} else {

		 		redirect('admin/kaizenidea/ideamang/myidea/');
		 	}

	}


	/********************************
	 WEBSITE - updateidea_ajax
	 ********************************/

	public function updateidea_ajax() {

		$randomiduniq = $this->randomiduniq();
		$currentdatetime = $this->currentdatetime();

		$viv_profile_id = $this->session->userdata('viv_profile_id');

		$sday=date('d');
		$smonth=date('m');
		$syear=date('Y');

		$ideaid  = $this->input->post('ideaid');




		$activity        = $this->input->post('activity');
		$activity_desc        = $this->input->post('activity_desc');
		$version_no        = $this->input->post('version_no');
		$proj_code        = $this->input->post('proj_code');
		$doc_no        = $this->input->post('doc_no');



		$benifit_area        = $this->input->post('benifit_area');
		$ref_no        = $this->input->post('ref_no');
		$tepl_plant        = $this->input->post('tepl_plant');
		$ktheme        = $this->input->post('ktheme');
		$idea        = $this->input->post('idea');
		$plantname        = $this->input->post('plantname');
		$prob_stmt        = $this->input->post('prob_stmt');
		$count_measur        = $this->input->post('count_measur');

		//$cs_quality = $this->input->post('cs_quality');
		$cs_yield = $this->input->post('cs_yield');
		$cs_cycletime = $this->input->post('cs_cycletime');
		if(empty($cs_cycletime) || $cs_cycletime=='0') { $cs_cycletime = ''; }

		$cs_cost = $this->input->post('cs_cost');
		//$cs_material = $this->input->post('cs_material');
		$cs_manpower = $this->input->post('cs_manpower');
		if(empty($cs_manpower) || $cs_manpower=='0') { $cs_manpower = ''; }

		$cs_consumables = $this->input->post('cs_consumables');
		$cs_others = $this->input->post('cs_others');
		$cs_totalsavings = $this->input->post('cs_totalsavings');
		$cs_appr_ie = $this->input->post('cs_appr_ie');
		$cs_appr_acco = $this->input->post('cs_appr_acco');
		//$cs_standardization = $this->input->post('cs_standardization');
		//$cs_sopsp = $this->input->post('cs_sopsp');
		//$cs_drawing = $this->input->post('cs_drawing');


		$root_cause = $this->input->post('root_cause');

		if(empty($activity)) {
				$root_cause_im = '';
		}	else {
			  $root_cause_im = implode(",",$root_cause);
		}


		//$root_cause_exp = $this->input->post('root_cause_exp');
		$root_cause_block = $this->input->post('root_cause_block');

		$brf_exp_precond = $this->input->post('brf_exp_precond');
		$brf_exp_impdone = $this->input->post('brf_exp_impdone');
		$benifits = $this->input->post('benifits');


		$horizradio = $this->input->post('horizradio');
		$horizontal1 = $this->input->post('horizontal1');
		$horizontal2 = $this->input->post('horizontal2');
		$horizontal3 = $this->input->post('horizontal3');
		$horizontal4 = $this->input->post('horizontal4');

		$origi_domain = $this->input->post('origi_domain');
		$origi_dept = $this->input->post('origi_dept');
		$origi_name = $this->input->post('origi_name');
		$origi_date = $this->input->post('origi_date');

		if(empty($origi_date)) {
			$origi_day = '';
			$origi_month = '';
			$origi_year = '';
		} else {
				$origi_date_ex = explode("-",$origi_date);
				$origi_day = $origi_date_ex[2];
				$origi_month = $origi_date_ex[1];
				$origi_year = $origi_date_ex[0];
		}

		$approv_dept = $this->input->post('approv_dept');
		$approv_name = $this->input->post('approv_name');
		$approv_email = $this->input->post('approv_email');
		$approv_email2 = $this->input->post('approv_email2');

		$approv_date = $this->input->post('approv_date');



		$confirm_dept = $this->input->post('confirm_dept');
		$confirm_name = $this->input->post('confirm_name');
		$confirm_date = $this->input->post('confirm_date');

		if(empty($activity)) {
				$activity_im = '';
		}	else {
			$activity_im = implode(",",$activity);
		}

		if(empty($benifit_area)) {
				$benifit_area_im = '';
		}	else {
		$benifit_area_im = implode(",",$benifit_area);
		}

		//$submit = $this->input->post('submit');

		$status = 0;
		$imgapprov_status = 0;






		$data = array(
							 'activity'=>$activity_im,
							 'activity_desc'=>$activity_desc,

							 'version_no'=>$version_no,
							 'proj_code'=>$proj_code,
							 'doc_no'=>$doc_no,
							 'benifit_area'=>$benifit_area_im,
							 'ref_no'=>$ref_no,
							 'tepl_plant'=>$tepl_plant,
							 'ktheme'=>$ktheme,
							 'idea'=>$idea,
							 'plantname'=>$plantname,
							 'prob_stmt'=>$prob_stmt,
							 'count_measur'=>$count_measur,

							//'cs_quality'=>$cs_quality,
							'cs_yield'=>$cs_yield,
							'cs_cycletime'=>$cs_cycletime,
							'cs_cost'=>$cs_cost,
							//'cs_material'=>$cs_material,
							//'cs_consumable'=>$cs_consumable,
							'cs_manpower'=>$cs_manpower,
							'cs_consumables'=>$cs_consumables,
							'cs_others'=>$cs_others,
							'cs_totalsavings'=>$cs_totalsavings,
							'cs_appr_ie'=>$cs_appr_ie,
							'cs_appr_acco'=>$cs_appr_acco,
							//'cs_standardization'=>$cs_standardization,
							//'cs_sopsp'=>$cs_sopsp,
							//'cs_drawing'=>$cs_drawing,

							'root_cause'=>$root_cause_im,
							//'root_cause_exp'=>$root_cause_exp,
							'root_cause_block'=>$root_cause_block,
							'brf_exp_precond'=>$brf_exp_precond,
							'brf_exp_impdone'=>$brf_exp_impdone,
							'benifits'=>$benifits,

							'horizradio'=>$horizradio,
							'horizontal1'=>$horizontal1,
							'horizontal2'=>$horizontal2,
							'horizontal3'=>$horizontal3,
							'horizontal4'=>$horizontal4,
							'origi_domain'=>$origi_domain,
							'origi_dept'=>$origi_dept,
							'origi_name'=>$origi_name,
							'origi_date'=>$origi_date,

							'origi_day'=>$origi_day,
							'origi_month'=>$origi_month,
							'origi_year'=>$origi_year,

							'approv_dept'=>$approv_dept,
							'approv_name'=>$approv_name,
							'approv_email'=>$approv_email,
							'approv_email2'=>$approv_email2,

							'approv_date'=>$approv_date,
							'confirm_dept'=>$confirm_dept,
							'confirm_name'=>$confirm_name,
							'confirm_date'=>$confirm_date,

							 'status'=>$status,
							 'imgapprov'=>$imgapprov_status,
							// 'imgapprov_by'=>$viv_profile_id,


							 'sday'=>$sday,
							 'smonth'=>$smonth,
							 'syear'=>$syear,
							 'subdatetime'=>$currentdatetime
						 );


		 $this->db->where('idea_id', $ideaid);
		 $this->db->where('profile_id', $viv_profile_id);
		 $this->db->update('ideas',$data);



		 if($this->db->affected_rows() > 0) {
			 	echo $ideaid;
		 } else {
			 	echo $ideaid;
		 }


	}


	/********************************
		findtotalimageofkaizen_attachm
	 ********************************/
	 public function findtotalimageofkaizen_attachm($ideaid) {
			 $this->db->select('*');
			 $this->db->from('ideas');
			 $this->db->where('idea_id',$ideaid);
			 $sql = $this->db->get();
			 //return $sql->result();
			 //return $sql->num_rows();
			 foreach ($sql->result() as $listtopicsbyidsRow) {
				 $before_img = $listtopicsbyidsRow->before_img;
				 $after_img = $listtopicsbyidsRow->after_img;
				 $rootcause_img = $listtopicsbyidsRow->rootcause_img;

 			 }
			 if(!empty($before_img)) { $before_img_val = 1; } else { $before_img_val = 0;  }
			 if(!empty($after_img)) { $after_img_val = 1; } else { $after_img_val = 0;  }
			 if(!empty($rootcause_img)) { $rootcause_img_val = 1; } else { $rootcause_img_val = 0;  }


			 $this->db->select('*');
			 $this->db->from('ideas_attachment');
			 $this->db->where('idea_id',$ideaid);
			 $sql = $this->db->get();
			 //return $sql->result();
			 $totalimg_multi = $sql->num_rows();

			 if($totalimg_multi >0) { $totalimg_multi_val = 1; } else { $totalimg_multi_val = 0;  }


			 $totalval = $before_img_val + $after_img_val + $rootcause_img_val + $totalimg_multi_val;
			 return $totalval;


	 }





		/********************************
			SUPER ADMIN - findemail2byemail
		 ********************************/
		 public function findemail2byemail($email) {
			 //$wl_profileid = $this->session->userdata('rsa_profileid');

				$this->db->select('*');
				$this->db->from('usermang');
				$this->db->where('email', $email);
				$sql = $this->db->get();
				//return $sql->result();
				//return $sql->num_rows();
				foreach ($sql->result() as $listtopicsbyidsRow) {
					$email2 = $listtopicsbyidsRow->email2;
						//$fullname = $listtopicsbyidsRow->rname;
					return $email2;
				}

		 }


		 /********************************
 			SUPER ADMIN - findemailbyprofileid
 		 ********************************/
 		 public function findemailbyprofileid($profile_id) {
 			 //$wl_profileid = $this->session->userdata('rsa_profileid');

 				$this->db->select('*');
 				$this->db->from('usermang');
 				$this->db->where('profile_id', $profile_id);
 				$sql = $this->db->get();
 				//return $sql->result();
 				//return $sql->num_rows();
 				foreach ($sql->result() as $listtopicsbyidsRow) {
 					$email = $listtopicsbyidsRow->email;
 						//$fullname = $listtopicsbyidsRow->rname;
 					return $email;
 				}

 		 }




	/********************************
	 SUPER ADMIN - listmyideas
	********************************/
	public function listmyideas() {




		$uri5 = $this->uri->segment(5);
		$uri6 = $this->uri->segment(6); if(empty($uri6)) { $uri6 = 'ALL'; }
		$uri7 = $this->uri->segment(7); if(empty($uri7)) { $uri7 = 'ALL'; }
		$uri8 = $this->uri->segment(8); if(empty($uri8)) { $uri8 = 'ALL'; }
		$uri9 = $this->uri->segment(9); if(empty($uri9)) { $uri9 = 'ALL'; }

		$viv_user_type = $this->session->userdata('viv_user_type');
		$viv_profile_id = $this->session->userdata('viv_profile_id');

		$viv_email = $this->session->userdata('viv_email');



		if($viv_user_type=='TRMMADMIN') {



					/*** PAGINATION ****/
					 $config = array();
					 $config["base_url"] = site_url('admin/kaizenidea/ideamang/myidea/'.$uri5.'/'.$uri6.'/'.$uri7.'/'.$uri8.'/'.$uri9.'');
					 $config["total_rows"] = $this->count_pagi_listmyideas_admin();
					 $config["per_page"] = 10;
			 		 $config["uri_segment"] = 10;
					 $this->pagination->initialize($config);
					 $pagestart = ($this->uri->segment(10)) ? $this->uri->segment(10) : 0;
					 /*** PAGINATION ****/

		 } elseif($viv_user_type=='TRMMEMP')	 {

				 /*** PAGINATION ****/
					$config = array();
					$config["base_url"] = site_url('admin/kaizenidea/ideamang/myidea/'.$uri5.'');
					$config["total_rows"] = $this->count_pagi_listmyideas();
					$config["per_page"] = 10;
					$config["uri_segment"] = 6;
					$this->pagination->initialize($config);
					$pagestart = ($this->uri->segment(6)) ? $this->uri->segment(6) : 0;
					/*** PAGINATION ****/


		}









			if($viv_user_type=='TRMMADMIN') {



				if($uri5=='totalsubmitted'){
					$status = '1,2,3,4,5,6,7';
					$status_ex = explode(',',$status);

					$imgapprov_sts = '0,1,2,3';
					$imgapprov_ex = explode(',',$imgapprov_sts);

				} elseif($uri5=='totalpending') {
					$status = '1';
					$status_ex = explode(',',$status);

					$imgapprov_sts = '0,1,2';
					$imgapprov_ex = explode(',',$imgapprov_sts);

				} elseif($uri5=='totalapproved') {
					$status = '2,4,6';
					$status_ex = explode(',',$status);

					$imgapprov_sts = '0,1,2';
					$imgapprov_ex = explode(',',$imgapprov_sts);

				} elseif($uri5=='totalrejected') {
					$status = '3,5,7';
					$status_ex = explode(',',$status);

					$imgapprov_sts = '0,1,2,3';
					$imgapprov_ex = explode(',',$imgapprov_sts);
				} else {
					$status = '1,2,3,4,5,6,7';
					$status_ex = explode(',',$status);

					$imgapprov_sts = '0,1,2,3';
					$imgapprov_ex = explode(',',$imgapprov_sts);

				}

				$year_sub = $uri6;
				$domain_sub = $uri7;
				$dept_sub = $uri8;
				$month_sub = $uri9;

				$dept_sub = str_replace('%20', ' ', $dept_sub);
				$domain_sub = str_replace('%20', ' ', $domain_sub);

				if(empty($year_sub) || $year_sub =='ALL') {  $year_sub = ''; }
				if(empty($dept_sub) || $dept_sub == 'ALL') { $dept_sub = '';  }
				if(empty($domain_sub) || $domain_sub == 'ALL') { $domain_sub = '';  }
				if(empty($month_sub) || $month_sub == 'ALL') { $month_sub = '';  }

					$this->db->select('*');
					$this->db->from('ideas');
					$this->db->where_in('status', $status_ex);
					$this->db->where_in('imgapprov', $imgapprov_ex);

					$this->db->like('origi_year', $year_sub);
 					$this->db->like('origi_month', $month_sub);
					$this->db->like('origi_dept', $dept_sub);
					$this->db->like('origi_domain', $domain_sub);
					$this->db->order_by('id', 'DESC');
					$this->db->limit($config["per_page"], $pagestart);
 			 		$sql = $this->db->get();
					return $sql->result();

			} elseif($viv_user_type=='TRMMEMP')	 {

						if($uri5=='totalsubmitted'){
							$status = '0,1,2,3,4,5,6,7';
							$status_ex = explode(',',$status);

							$imgapprov_status = '0,1,2,3';
							$imgapprov_status_ex = explode(',',$imgapprov_status);

						} elseif($uri5=='totalapproved') {
							$status = '2,4,6';
							$status_ex = explode(',',$status);

							$imgapprov_status = '2';
							$imgapprov_status_ex = explode(',',$imgapprov_status);

						} elseif($uri5=='totalrejected') {
							$status = '3,5,7';
							$status_ex = explode(',',$status);

							$imgapprov_status = '3';
							$imgapprov_status_ex = explode(',',$imgapprov_status);

						} else {
							$status = '0,1,2,3,4,5,6,7';
							$status_ex = explode(',',$status);

							$imgapprov_status = '0,1,2,3';
							$imgapprov_status_ex = explode(',',$imgapprov_status);

						}


					$this->db->select('*');
					$this->db->from('ideas');
					$this->db->where_in('status', $status_ex);
					//$this->db->or_where('status', 2);
					//$this->db->or_where('status', 3);
					$this->db->where_in('imgapprov', $imgapprov_status_ex);
					$this->db->where('profile_id', $viv_profile_id);
					$this->db->order_by('id', 'DESC');
					$this->db->limit($config["per_page"], $pagestart);
			 		$sql = $this->db->get();
					return $sql->result();

			}



 	}



	/********************************
	 SUPER ADMIN - listmyideas
	********************************/
	public function listmyideasbypid($profile_id) {


		$viv_user_type = $this->session->userdata('viv_user_type');
		$viv_profile_id = $this->session->userdata('viv_profile_id');

		$viv_email = $this->session->userdata('viv_email');

		$status = '1,2,3,4,5,6,7';
		$status_ex = explode(',',$status);



					$this->db->select('*');
					$this->db->from('ideas');
					$this->db->where_in('status', $status_ex);
					//$this->db->where_in('imgapprov', $imgapprov_ex);
 					$this->db->where('profile_id', $profile_id);
 					$this->db->order_by('id', 'DESC');
  			 	$sql = $this->db->get();
					return $sql->result();



 	}







		/********************************
		 SUPER ADMIN - listmyideas_filter
		********************************/
		public function listmyideas_filter() {



			$viv_user_type = $this->session->userdata('viv_user_type');
			$viv_profile_id = $this->session->userdata('viv_profile_id');
			$viv_email = $this->session->userdata('viv_email');


			$uri5 = $this->uri->segment(5);
			$uri6 = $this->uri->segment(6); //year
			$uri7 = $this->uri->segment(7);
			$uri8 = $this->uri->segment(8);
			$uri9 = $this->uri->segment(9); //month


						/*** PAGINATION ****
						 $config = array();
						 $config["base_url"] = site_url('admin/kaizenidea/ideamang/myidea/totalsubmitted/'.$uri6.'');
						 $config["total_rows"] = $this->count_pagi_listmyideas_admin();
						 $config["per_page"] = 10;
				 		 $config["uri_segment"] = 6;
						 $this->pagination->initialize($config);
						 $pagestart = ($this->uri->segment(6)) ? $this->uri->segment(6) : 0;
						 /*** PAGINATION ****/



						 //$dept_sub = str_replace('%20', ' ', $dept_sub);
						 //$domain_sub = str_replace('%20', ' ', $domain_sub);

						 $year = $this->input->post('year');
						 $month = $this->input->post('month');
						 $domain = $this->input->post('domain');
						 $dept = $this->input->post('dept');
						 $kaizentheme = $this->input->post('kaizentheme');
						 $status = $this->input->post('status');
						 $shortlisted = $this->input->post('shortlisted');


						 if(empty($month) || $month =='ALL') {  $month = ''; }
						 if(empty($domain) || $domain =='ALL') {  $domain = ''; }
						 if(empty($dept) || $dept == 'ALL') { $dept = '';  }
						 if(empty($status) || $status == 'ALL') { $status = '';  }
						 if(empty($shortlisted) || $shortlisted == 'ALL') { $shortlisted = '';  }

					if($status=='totalsubmitted'){
						$status = '1,2,3,4,5,6,7';
						$status_ex = explode(',',$status);

						$imgapprov_sts = '0,1,2,3';
						$imgapprov_ex = explode(',',$imgapprov_sts);

					} elseif($status=='totalpending') {
						$status = '1';
						$status_ex = explode(',',$status);

						$imgapprov_sts = '0,1';
						$imgapprov_ex = explode(',',$imgapprov_sts);

					} elseif($status=='totalapproved') {
						$status = '2,4,6';
						$status_ex = explode(',',$status);

						$imgapprov_sts = '0,2';
						$imgapprov_ex = explode(',',$imgapprov_sts);

					} elseif($status=='totalrejected') {
						$status = '3,5,7';
						$status_ex = explode(',',$status);

						$imgapprov_sts = '0,3';
						$imgapprov_ex = explode(',',$imgapprov_sts);
					} else {


						$status = '1,2,3,4,5,6,7';
						$status_ex = explode(',',$status);

						$imgapprov_sts = '0,1,2,3';
						$imgapprov_ex = explode(',',$imgapprov_sts);

					}





						$this->db->select('*');
						$this->db->from('ideas');
						$this->db->where_in('status', $status_ex);
						$this->db->where_in('imgapprov', $imgapprov_ex);



						if(empty($year)) { $this->db->like('origi_year', $year); } else { $this->db->where('origi_year', $year); }
						if(empty($month)) { $this->db->like('origi_month', $month); } else { $this->db->where('origi_month', $month); }
						if(empty($domain)) { $this->db->like('origi_domain', $domain); } else { $this->db->where('origi_domain', $domain); }
						if(empty($dept)) { $this->db->like('origi_dept', $dept); } else { $this->db->where('origi_dept', $dept); }



 						$this->db->like('ktheme', $kaizentheme);
						$this->db->like('shortlisted', $shortlisted);
						//$this->db->limit($config["per_page"], $pagestart);
						$this->db->order_by('id', 'DESC');
				 		$sql = $this->db->get();
						return $sql->result();



	 	}



		/********************************
		 SUPER ADMIN - listmyideas_month
		********************************/
		public function listmyideas_month() {



			$viv_user_type = $this->session->userdata('viv_user_type');
			$viv_profile_id = $this->session->userdata('viv_profile_id');
			$viv_email = $this->session->userdata('viv_email');


			$uri4 = $this->uri->segment(4);
			$uri5 = $this->uri->segment(9); // role
	    $uri6 = $this->uri->segment(10); // status
	    $uri7 = $this->uri->segment(7); //Domain
	    $uri8 = $this->uri->segment(8); //Depart
			$uri9 = $this->uri->segment(5); //Year
	    $uri10 = $this->uri->segment(6); //Month


				/*** PAGINATION ****/
				 $config = array();
				 $config["base_url"] = site_url('admin/kaizenidea/ideamang/myidea_monthfilter/'.$uri9.'/'.$uri10.'/'.$uri7.'/'.$uri8.'/'.$uri5.'/'.$uri6.'');
				 $config["total_rows"] = $this->count_listmyideas_month();
				 $config["per_page"] = 10;
				 $config["uri_segment"] = 11;
				 $this->pagination->initialize($config);
				 $pagestart = ($this->uri->segment(11)) ? $this->uri->segment(11) : 0;
				 /*** PAGINATION ****/

				if(empty($uri5) || ($uri5 =='ALL' || $uri5 =='all')) {  $uri5 = ''; }
	 			if(empty($uri6) || ($uri6 =='ALL' || $uri6 =='all')) {  $uri6 = ''; }
	 			if(empty($uri7) || ($uri7 =='ALL' || $uri7 =='all')) {  $uri7 = ''; }
	 			if(empty($uri8) || ($uri8 =='ALL' || $uri8 =='all')) {  $uri8 = ''; }
	 			if(empty($uri9) || ($uri9 =='ALL' || $uri9 =='all')) {  $uri9 = ''; }
	 			if(empty($uri10) || ($uri10 =='ALL' || $uri10 =='all')) {  $uri10 = ''; }


			  $uri7 = str_replace('%20', ' ', $uri7);
			  $uri8 = str_replace('%20', ' ', $uri8);


					$imgapprov_sts = '0,1,2,3';
 				  $imgapprov_ex = explode(',',$imgapprov_sts);

					if($uri5=='dri' && $uri6==''){
						$status = '1,2,3,4,5,6,7';
						$status_ex = explode(',',$status);

 					} elseif($uri5=='dri' && $uri6=='pending'){
						$status = '1';
						$status_ex = explode(',',$status);

 					} elseif($uri5=='dri' && $uri6=='approved'){
						$status = '2,4,5,6,7';
						$status_ex = explode(',',$status);

 					} elseif($uri5=='dri' && $uri6=='rejected'){
						$status = '3';
						$status_ex = explode(',',$status);

 					} elseif($uri5=='iedept' && $uri6==''){
						$status = '2,4,5,6,7';
						$status_ex = explode(',',$status);

						$iedept_sts = '1,2,3';
			      $iedept_sts_ex_irdept = explode(',',$iedept_sts);

 					} elseif($uri5=='iedept' && $uri6=='pending'){
						$status = '2';
						$status_ex = explode(',',$status);

						$iedept_sts = '1,2,3';
			      $iedept_sts_ex_irdept = explode(',',$iedept_sts);

 					} elseif($uri5=='iedept' && $uri6=='approved'){
						$status = '4,6,7';
						$status_ex = explode(',',$status);

						$iedept_sts = '1,2,3';
			      $iedept_sts_ex_irdept = explode(',',$iedept_sts);

 					} elseif($uri5=='iedept' && $uri6=='rejected'){
						$status = '5';
						$status_ex = explode(',',$status);

						$iedept_sts = '1,2,3';
			      $iedept_sts_ex_irdept = explode(',',$iedept_sts);

 					} elseif($uri5=='finance' && $uri6==''){
						$status = '4,6,7';
						$status_ex = explode(',',$status);

						$iedept_sts = '1,2,3';
			      $iedept_sts_ex_sts_fin = explode(',',$iedept_sts);

 					} elseif($uri5=='finance' && $uri6=='pending'){
						$status = '4';
						$status_ex = explode(',',$status);

						$iedept_sts = '1,2,3';
			      $iedept_sts_ex_sts_fin = explode(',',$iedept_sts);

 					} elseif($uri5=='finance' && $uri6=='approved'){
						$status = '6';
						$status_ex = explode(',',$status);

						$iedept_sts = '1,2,3';
			      $iedept_sts_ex_sts_fin = explode(',',$iedept_sts);

 					} elseif($uri5=='finance' && $uri6=='rejected'){
						$status = '7';
						$status_ex = explode(',',$status);

						$iedept_sts = '1,2,3';
			      $iedept_sts_ex_sts_fin = explode(',',$iedept_sts);
 					}


					$this->db->select('*');
					$this->db->from('ideas');
					$this->db->where_in('status', $status_ex);
					$this->db->where_in('imgapprov', $imgapprov_ex);


					if($uri5=='iedept' && $uri6==''){
						$this->db->where_in('iedept_status', $iedept_sts_ex_irdept);
 					} elseif($uri5=='iedept' && $uri6=='pending'){
						$this->db->where_in('iedept_status', $iedept_sts_ex_irdept);
 					} elseif($uri5=='iedept' && $uri6=='approved'){
						$this->db->where_in('iedept_status', $iedept_sts_ex_irdept);
 					} elseif($uri5=='iedept' && $uri6=='rejected'){
						$this->db->where_in('iedept_status', $iedept_sts_ex_irdept);
 					} elseif($uri5=='finance' && $uri6==''){
						$this->db->where_in('finance_status', $iedept_sts_ex_sts_fin);
 					} elseif($uri5=='finance' && $uri6=='pending'){
						$this->db->where_in('finance_status', $iedept_sts_ex_sts_fin);
 					} elseif($uri5=='finance' && $uri6=='approved'){
						$this->db->where_in('finance_status', $iedept_sts_ex_sts_fin);
 					} elseif($uri5=='finance' && $uri6=='rejected'){
						$this->db->where_in('finance_status', $iedept_sts_ex_sts_fin);
  				}


					$this->db->like('origi_domain', $uri7);
					$this->db->like('origi_dept', $uri8);
					$this->db->like('origi_year', $uri9);
					$this->db->like('origi_month', $uri10);



 					$this->db->limit($config["per_page"], $pagestart);
					$this->db->order_by('id', 'DESC');
					$sql = $this->db->get();
					return $sql->result();



		}



		/********************************
		 SUPER ADMIN - listmyideas_month
		********************************/
		public function count_listmyideas_month() {



			$viv_user_type = $this->session->userdata('viv_user_type');
			$viv_profile_id = $this->session->userdata('viv_profile_id');
			$viv_email = $this->session->userdata('viv_email');


			$uri4 = $this->uri->segment(4);
			$uri5 = $this->uri->segment(9); // role
	    $uri6 = $this->uri->segment(10); // status
	    $uri7 = $this->uri->segment(7); //Domain
	    $uri8 = $this->uri->segment(8); //Depart
			$uri9 = $this->uri->segment(5); //Year
	    $uri10 = $this->uri->segment(6); //Month

 			if(empty($uri5) || ($uri5 =='ALL' || $uri5 =='all')) {  $uri5 = ''; }
			if(empty($uri6) || ($uri6 =='ALL' || $uri6 =='all')) {  $uri6 = ''; }
			if(empty($uri7) || ($uri7 =='ALL' || $uri7 =='all')) {  $uri7 = ''; }
			if(empty($uri8) || ($uri8 =='ALL' || $uri8 =='all')) {  $uri8 = ''; }
			if(empty($uri9) || ($uri9 =='ALL' || $uri9 =='all')) {  $uri9 = ''; }
			if(empty($uri10) || ($uri10 =='ALL' || $uri10 =='all')) {  $uri10 = ''; }

			$uri7 = str_replace('%20', ' ', $uri7);
			$uri8 = str_replace('%20', ' ', $uri8);


					$imgapprov_sts = '0,1,2,3';
 				  $imgapprov_ex = explode(',',$imgapprov_sts);

					if($uri5=='dri' && $uri6==''){
						$status = '1,2,3,4,5,6,7';
						$status_ex = explode(',',$status);

 					} elseif($uri5=='dri' && $uri6=='pending'){
						$status = '1';
						$status_ex = explode(',',$status);

 					} elseif($uri5=='dri' && $uri6=='approved'){
						$status = '2,4,5,6,7';
						$status_ex = explode(',',$status);

 					} elseif($uri5=='dri' && $uri6=='rejected'){
						$status = '3';
						$status_ex = explode(',',$status);

 					} elseif($uri5=='iedept' && $uri6==''){
						$status = '2,4,5,6,7';
						$status_ex = explode(',',$status);

						$iedept_sts = '1,2,3';
			      $iedept_sts_ex_irdept = explode(',',$iedept_sts);

 					} elseif($uri5=='iedept' && $uri6=='pending'){
						$status = '2';
						$status_ex = explode(',',$status);

						$iedept_sts = '1,2,3';
			      $iedept_sts_ex_irdept = explode(',',$iedept_sts);

 					} elseif($uri5=='iedept' && $uri6=='approved'){
						$status = '4,6,7';
						$status_ex = explode(',',$status);

						$iedept_sts = '1,2,3';
			      $iedept_sts_ex_irdept = explode(',',$iedept_sts);

 					} elseif($uri5=='iedept' && $uri6=='rejected'){
						$status = '5';
						$status_ex = explode(',',$status);

						$iedept_sts = '1,2,3';
			      $iedept_sts_ex_irdept = explode(',',$iedept_sts);

 					} elseif($uri5=='finance' && $uri6==''){
						$status = '4,6,7';
						$status_ex = explode(',',$status);

						$iedept_sts = '1,2,3';
			      $iedept_sts_ex_sts_fin = explode(',',$iedept_sts);

 					} elseif($uri5=='finance' && $uri6=='pending'){
						$status = '4';
						$status_ex = explode(',',$status);

						$iedept_sts = '1,2,3';
			      $iedept_sts_ex_sts_fin = explode(',',$iedept_sts);

 					} elseif($uri5=='finance' && $uri6=='approved'){
						$status = '6';
						$status_ex = explode(',',$status);

						$iedept_sts = '1,2,3';
			      $iedept_sts_ex_sts_fin = explode(',',$iedept_sts);

 					} elseif($uri5=='finance' && $uri6=='rejected'){
						$status = '7';
						$status_ex = explode(',',$status);

						$iedept_sts = '1,2,3';
			      $iedept_sts_ex_sts_fin = explode(',',$iedept_sts);
 					}


					$this->db->select('*');
					$this->db->from('ideas');
					$this->db->where_in('status', $status_ex);
					$this->db->where_in('imgapprov', $imgapprov_ex);


					if($uri5=='iedept' && $uri6==''){
						$this->db->where_in('iedept_status', $iedept_sts_ex_irdept);
 					} elseif($uri5=='iedept' && $uri6=='pending'){
						$this->db->where_in('iedept_status', $iedept_sts_ex_irdept);
 					} elseif($uri5=='iedept' && $uri6=='approved'){
						$this->db->where_in('iedept_status', $iedept_sts_ex_irdept);
 					} elseif($uri5=='iedept' && $uri6=='rejected'){
						$this->db->where_in('iedept_status', $iedept_sts_ex_irdept);
 					} elseif($uri5=='finance' && $uri6==''){
						$this->db->where_in('finance_status', $iedept_sts_ex_sts_fin);
 					} elseif($uri5=='finance' && $uri6=='pending'){
						$this->db->where_in('finance_status', $iedept_sts_ex_sts_fin);
 					} elseif($uri5=='finance' && $uri6=='approved'){
						$this->db->where_in('finance_status', $iedept_sts_ex_sts_fin);
 					} elseif($uri5=='finance' && $uri6=='rejected'){
						$this->db->where_in('finance_status', $iedept_sts_ex_sts_fin);
  				}

					$this->db->like('origi_domain', $uri7);
					$this->db->like('origi_dept', $uri8);
					$this->db->like('origi_year', $uri9);
					$this->db->like('origi_month', $uri10);


 					$this->db->order_by('id', 'DESC');
					$sql = $this->db->get();
					return $sql->num_rows();



		}






	/********************************
	 SUPER ADMIN - count_pagi_listmyideas_admin
	********************************/
	public function count_pagi_listmyideas_admin() {

			$uri5 = $this->uri->segment(5);
			$uri6 = $this->uri->segment(6);
			$uri7 = $this->uri->segment(7);
			$uri8 = $this->uri->segment(8);
			$uri9 = $this->uri->segment(9);

			$viv_user_type = $this->session->userdata('viv_user_type');
			$viv_profile_id = $this->session->userdata('viv_profile_id');

			$viv_email = $this->session->userdata('viv_email');



			if($viv_user_type=='TRMMADMIN') {

				if($uri5=='totalsubmitted'){
					$status = '1,2,3,4,5,6,7';
					$status_ex = explode(',',$status);

					$imgapprov_sts = '0,1,2,3';
					$imgapprov_ex = explode(',',$imgapprov_sts);

				} elseif($uri5=='totalpending') {
					$status = '1';
					$status_ex = explode(',',$status);

					$imgapprov_sts = '0,1,2';
					$imgapprov_ex = explode(',',$imgapprov_sts);

				} elseif($uri5=='totalapproved') {
					$status = '2,4,6';
					$status_ex = explode(',',$status);

					$imgapprov_sts = '0,1,2';
					$imgapprov_ex = explode(',',$imgapprov_sts);

				} elseif($uri5=='totalrejected') {
					$status = '3,5,7';
					$status_ex = explode(',',$status);

					$imgapprov_sts = '0,1,2,3';
					$imgapprov_ex = explode(',',$imgapprov_sts);
				} else {
					$status = '1,2,3,4,5,6,7';
					$status_ex = explode(',',$status);

					$imgapprov_sts = '0,1,2,3';
					$imgapprov_ex = explode(',',$imgapprov_sts);

				}

				$year_sub = $uri6;
				$domain_sub = $uri7;
				$dept_sub = $uri8;
				$month_sub = $uri9;

				$dept_sub = str_replace('%20', ' ', $dept_sub);
				$domain_sub = str_replace('%20', ' ', $domain_sub);

				if(empty($year_sub) || $year_sub =='ALL') {  $year_sub = ''; }
				if(empty($dept_sub) || $dept_sub == 'ALL') { $dept_sub = '';  }
				if(empty($domain_sub) || $domain_sub == 'ALL') { $domain_sub = '';  }
				if(empty($month_sub) || $month_sub == 'ALL') { $month_sub = '';  }

					$this->db->select('*');
					$this->db->from('ideas');
					$this->db->where_in('status', $status_ex);
					$this->db->where_in('imgapprov', $imgapprov_ex);
					$this->db->like('origi_year', $year_sub);
					$this->db->like('origi_month', $month_sub);
					$this->db->like('origi_dept', $dept_sub);
					$this->db->like('origi_domain', $domain_sub);
 					$this->db->order_by('id', 'DESC');
			 		$sql = $this->db->get();
					return $sql->num_rows();

			} elseif($viv_user_type=='TRMMEMP')	 {

				if($uri5=='totalsubmitted'){
					$status = '1,2,3,4,5,6,7';
					$status_ex = explode(',',$status);

				} elseif($uri5=='totalapproved') {
					$status = '2,4,6';
					$status_ex = explode(',',$status);

				} elseif($uri5=='totalrejected') {
					$status = '3,5,7';
					$status_ex = explode(',',$status);
				} else {
					$status = '1,2,3,4,5,6,7';
					$status_ex = explode(',',$status);

				}


					$this->db->select('*');
					$this->db->from('ideas');
					$this->db->where_in('status', $status_ex);
					//$this->db->or_where('status', 2);
					//$this->db->or_where('status', 3);
					$this->db->where('profile_id', $viv_profile_id);
 					$this->db->order_by('id', 'DESC');
			 		$sql = $this->db->get();
					return $sql->num_rows();

			}
 	}





	/********************************
	 SUPER ADMIN - listmyideas
	********************************/
	public function count_pagi_listmyideas() {

			$uri5 = $this->uri->segment(5);

			$viv_user_type = $this->session->userdata('viv_user_type');
			$viv_profile_id = $this->session->userdata('viv_profile_id');

			$viv_email = $this->session->userdata('viv_email');



			if($viv_user_type=='TRMMADMIN') {

				if($uri5=='totalsubmitted'){
					$status = '1,2,3,4,5,6,7';
					$status_ex = explode(',',$status);

				} elseif($uri5=='totalpending') {
					$status = '1';
					$status_ex = explode(',',$status);

				} elseif($uri5=='totalapproved') {
					$status = '2,4,6';
					$status_ex = explode(',',$status);

				} elseif($uri5=='totalrejected') {
					$status = '3,5,7';
					$status_ex = explode(',',$status);
				} else {
					$status = '1,2,3,4,5,6,7';
					$status_ex = explode(',',$status);

				}

					$this->db->select('*');
					$this->db->from('ideas');
					$this->db->where_in('status', $status_ex);
					//$this->db->where('profileid', $wl_profileid);
 					$this->db->order_by('id', 'DESC');
			 		$sql = $this->db->get();
					return $sql->num_rows();

			} elseif($viv_user_type=='TRMMEMP')	 {

				if($uri5=='totalsubmitted'){
					$status = '0,1,2,3,4,5,6,7';
					$status_ex = explode(',',$status);

				} elseif($uri5=='totalapproved') {
					$status = '2,4,6';
					$status_ex = explode(',',$status);

				} elseif($uri5=='totalrejected') {
					$status = '3,5,7';
					$status_ex = explode(',',$status);
				} else {
					$status = '0,1,2,3,4,5,6,7';
					$status_ex = explode(',',$status);

				}


					$this->db->select('*');
					$this->db->from('ideas');
					$this->db->where_in('status', $status_ex);
					//$this->db->or_where('status', 2);
					//$this->db->or_where('status', 3);
					$this->db->where('profile_id', $viv_profile_id);
 					$this->db->order_by('id', 'DESC');
			 		$sql = $this->db->get();
					return $sql->num_rows();

			}
 	}







		/********************************
		 SUPER ADMIN - count_listmyideas_emp
		********************************/
		public function count_listmyideas_emp() {

			$viv_user_type = $this->session->userdata('viv_user_type');
			$viv_profile_id = $this->session->userdata('viv_profile_id');
			$viv_email = $this->session->userdata('viv_email');

			$status = '1,2,3,4,5,6,7';
			$status_ex = explode(',',$status);

			if($viv_user_type=='TRMMADMIN') {

					$this->db->select('*');
					$this->db->from('ideas');
					$this->db->where_in('status', $status_ex);
					//$this->db->where('profileid', $wl_profileid);
					$this->db->order_by('id', 'DESC');
					$sql = $this->db->get();
					return $sql->num_rows();

			} elseif($viv_user_type=='TRMMEMP')	 {
					$this->db->select('*');
					$this->db->from('ideas');
					$this->db->where_in('status', $status_ex);
					$this->db->where('profile_id', $viv_profile_id);
					$this->db->order_by('id', 'DESC');
					$sql = $this->db->get();
					return $sql->num_rows();

			}


		}



		/********************************
		 SUPER ADMIN - count_listmyideas_empbypid
		********************************/
		public function count_listmyideas_empbypid($uri5) {

			$viv_user_type = $this->session->userdata('viv_user_type');
			$viv_profile_id = $this->session->userdata('viv_profile_id');
			$viv_email = $this->session->userdata('viv_email');

			$status = '1,2,3,4,5,6,7';
			$status_ex = explode(',',$status);



					$this->db->select('*');
					$this->db->from('ideas');
					$this->db->where_in('status', $status_ex);
					$this->db->where('profile_id', $uri5);
					$this->db->order_by('id', 'DESC');
					$sql = $this->db->get();
					return $sql->num_rows();




		}





		/********************************
		 SUPER ADMIN - listmyideas_verification
		********************************/
		public function listmyideas_verification() {

				$viv_user_type = $this->session->userdata('viv_user_type');
				$viv_profile_id = $this->session->userdata('viv_profile_id');
				$viv_email = $this->session->userdata('viv_email');

				$uri5 = $this->uri->segment(5);

				if($viv_user_type=='TRMMADMIN') {
					$status = '1,2,3,4,5,6,7';
					$status_ex = explode(',',$status);

					$status_fin = '2,4,5';
					$status_fin_ex = explode(',',$status_fin);

						$this->db->select('*');
						$this->db->from('ideas');
						$this->db->where_in('status', $status_ex);
						//$this->db->where('profileid', $wl_profileid);
						$this->db->order_by('id', 'DESC');
				 		$sql = $this->db->get();
						return $sql->result();

				} elseif($viv_user_type=='TRMMMANG')	 {



						if($uri5=='totalsubmitted'){

							$status = '1,2,3,4,5,6,7';
							$status_ex = explode(',',$status);

						} elseif($uri5=='totalpending') {

							$status = '1';
							$status_ex = explode(',',$status);

						} elseif($uri5=='totalapproved') {

							$status = '2,4,5,6,7';
							$status_ex = explode(',',$status);

						} elseif($uri5=='totalrejected') {
							$status = '3';
							$status_ex = explode(',',$status);
						} else {
							$status = '1,2,3,4,5,6,7';
							$status_ex = explode(',',$status);
						}


						$this->db->select('*');
						$this->db->from('ideas');
						$this->db->where_in('status', $status_ex);
						$this->db->where('imgapprov', 2);
						//$this->db->or_where('status', 2);
						//$this->db->or_where('status', 3);
						$this->db->where('approv_email', $viv_email);
						$this->db->order_by('id', 'DESC');
				 		$sql = $this->db->get();
						return $sql->result();

				} elseif($viv_user_type=='TRMMFINANCE')	 {

						$status = '1,2,3,4,5,6,7';
						$status_ex = explode(',',$status);

						$status_fin = '2,4,5';
						$status_fin_ex = explode(',',$status_fin);

						$this->db->select('*');
						$this->db->from('ideas');
						$this->db->where_in('status', $status_fin_ex);
						$this->db->where('imgapprov', 2);
						//$this->db->or_where('status', 2);
						//$this->db->or_where('status', 3);
						//$this->db->where('approv_email', $viv_email);
						$this->db->order_by('id', 'DESC');
				 		$sql = $this->db->get();
						return $sql->result();

				}



		}



	/********************************
	 SUPER ADMIN - count_listmyideas
	********************************/
	public function count_listmyideas() {

		$viv_user_type = $this->session->userdata('viv_user_type');
		$viv_profile_id = $this->session->userdata('viv_profile_id');
		$viv_email = $this->session->userdata('viv_email');



	 	$uri5 = $this->uri->segment(5);

		if($viv_user_type=='TRMMADMIN') {

			if($uri5=='totalsubmitted'){
				$status = '1,2,3,4,5,6,7';
				$status_ex = explode(',',$status);

			} elseif($uri5=='totalpending') {
				$status = '1';
				$status_ex = explode(',',$status);

			} elseif($uri5=='totalapproved') {
				$status = '2,4,6';
				$status_ex = explode(',',$status);

			} elseif($uri5=='totalrejected') {
				$status = '3,5,7';
				$status_ex = explode(',',$status);
			} else {
				$status = '1,2,3,4,5,6,7';
				$status_ex = explode(',',$status);
			}


				$this->db->select('*');
				$this->db->from('ideas');
				$this->db->where_in('status', $status_ex);
				//$this->db->where('profileid', $wl_profileid);
				$this->db->order_by('id', 'DESC');
				$sql = $this->db->get();
				return $sql->num_rows();

		} elseif($viv_user_type=='TRMMMANG')	 {
				$this->db->select('*');
				$this->db->from('ideas');
				$this->db->where_in('status', $status_ex);
				$this->db->where('imgapprov', 2);
				$this->db->where('approv_email', $viv_email);
				$this->db->order_by('id', 'DESC');
				$sql = $this->db->get();
				return $sql->num_rows();

		} elseif($viv_user_type=='TRMMEMP') {

			if($uri5=='totalsubmitted'){
				$status = '1,2,3,4,5,6,7';
				$status_ex = explode(',',$status);

			} elseif($uri5=='totalapproved') {
				$status = '2,4,6';
				$status_ex = explode(',',$status);

			} elseif($uri5=='totalrejected') {
				$status = '3,5,7';
				$status_ex = explode(',',$status);
			} else {
				$status = '1,2,3,4,5,6,7';
				$status_ex = explode(',',$status);

			}


				$this->db->select('*');
				$this->db->from('ideas');
				$this->db->where_in('status', $status_ex);
				$this->db->where('imgapprov', 2);
				//$this->db->where('profileid', $wl_profileid);
				$this->db->order_by('id', 'DESC');
				$sql = $this->db->get();
				return $sql->num_rows();

		}





	}





	/********************************
	 SUPER ADMIN - count_listmyideas_verifiy
	********************************/
	public function count_listmyideas_verifiy() {

		$viv_user_type = $this->session->userdata('viv_user_type');
		$viv_profile_id = $this->session->userdata('viv_profile_id');
		$viv_email = $this->session->userdata('viv_email');

		$uri5 = $this->uri->segment(5);

		if($viv_user_type=='TRMMADMIN') {
			$status = '1,2,3,4,5,6,7';
			$status_ex = explode(',',$status);

			$status_fin = '2,4,5';
			$status_fin_ex = explode(',',$status_fin);

				$this->db->select('*');
				$this->db->from('ideas');
				$this->db->where_in('status', $status_ex);
				//$this->db->where('profileid', $wl_profileid);
				$this->db->order_by('id', 'DESC');
				$sql = $this->db->get();
				return $sql->num_rows();

		} elseif($viv_user_type=='TRMMMANG')	 {



				if($uri5=='totalsubmitted'){

					$status = '1,2,3,4,5,6,7';
					$status_ex = explode(',',$status);

				} elseif($uri5=='totalpending') {

					$status = '1';
					$status_ex = explode(',',$status);

				} elseif($uri5=='totalapproved') {

					$status = '2,4,5,6,7';
					$status_ex = explode(',',$status);

				} elseif($uri5=='totalrejected') {
					$status = '3';
					$status_ex = explode(',',$status);
				} else {
					$status = '1,2,3,4,5,6,7';
					$status_ex = explode(',',$status);
				}


				$this->db->select('*');
				$this->db->from('ideas');
				$this->db->where_in('status', $status_ex);
				$this->db->where('imgapprov', 2);
				//$this->db->or_where('status', 2);
				//$this->db->or_where('status', 3);
				$this->db->where('approv_email', $viv_email);
				$this->db->order_by('id', 'DESC');
				$sql = $this->db->get();
				return $sql->num_rows();

		} elseif($viv_user_type=='TRMMFINANCE')	 {

				$status = '1,2,3,4,5,6,7';
				$status_ex = explode(',',$status);

				$status_fin = '2,4,5';
				$status_fin_ex = explode(',',$status_fin);

				$this->db->select('*');
				$this->db->from('ideas');
				$this->db->where_in('status', $status_fin_ex);
				$this->db->where('imgapprov', 2);
				//$this->db->or_where('status', 2);
				//$this->db->or_where('status', 3);
				//$this->db->where('approv_email', $viv_email);
				$this->db->order_by('id', 'DESC');
				$sql = $this->db->get();
				return $sql->num_rows();

		}





	}





	/********************************
	 SUPER ADMIN - count_listmyideas_verifiy_mang_dashb
	********************************/
	public function count_listmyideas_verifiy_mang_dashb($year_sub,$domain_sub,$dept_sub) {

		$viv_user_type = $this->session->userdata('viv_user_type');
		$viv_profile_id = $this->session->userdata('viv_profile_id');
		$viv_email = $this->session->userdata('viv_email');

		if(empty($year_sub) || $year_sub =='ALL') {  $year_sub = ''; }
		if(empty($dept_sub) || $dept_sub == 'ALL') { $dept_sub = '';  }
		if(empty($domain_sub) || $domain_sub == 'ALL') { $domain_sub = '';  }

		$status = '1,2,3,4,5,6,7';
		$status_ex = explode(',',$status);

		$status_fin = '2,4,5';
		$status_fin_ex = explode(',',$status_fin);

		if($viv_user_type=='TRMMADMIN') {

				$this->db->select('*');
				$this->db->from('ideas');
				$this->db->where_in('status', $status_ex);
				//$this->db->where('profileid', $wl_profileid);
				$this->db->order_by('id', 'DESC');
				$sql = $this->db->get();
				return $sql->num_rows();

		} elseif($viv_user_type=='TRMMMANG')	 {
				$this->db->select('*');
				$this->db->from('ideas');
				$this->db->where_in('status', $status_ex);
				$this->db->where('approv_email', $viv_email);
				$this->db->where('imgapprov', 2);
				$this->db->like('syear', $year_sub);
				$this->db->like('origi_dept', $dept_sub);
				$this->db->like('origi_domain', $domain_sub);
				$this->db->order_by('id', 'DESC');
				$sql = $this->db->get();
				return $sql->num_rows();

		} elseif($viv_user_type=='TRMMFINANCE')	 {
				$this->db->select('*');
				$this->db->from('ideas');
				$this->db->where_in('status', $status_fin_ex);
				//$this->db->where('approv_email', $viv_email);
				$this->db->order_by('id', 'DESC');
				$sql = $this->db->get();
				return $sql->num_rows();

		}


	}






		/********************************
		 SUPER ADMIN - count_listmyideas_verifiy_sts
		********************************/
		public function count_listmyideas_verifiy_sts($status) {

			$viv_user_type = $this->session->userdata('viv_user_type');
			$viv_profile_id = $this->session->userdata('viv_profile_id');
			$viv_email = $this->session->userdata('viv_email');





			if($viv_user_type=='TRMMADMIN') {

					$this->db->select('*');
					$this->db->from('ideas');
					$this->db->where_in('status', $status);
					//$this->db->where('profileid', $wl_profileid);
					$this->db->order_by('id', 'DESC');
					$sql = $this->db->get();
					return $sql->num_rows();

			} elseif($viv_user_type=='TRMMMANG')	 {

					$this->db->select('*');
					$this->db->from('ideas');
					$this->db->where_in('status', $status);
					$this->db->where('imgapprov', 2);
					$this->db->where('approv_email', $viv_email);
					$this->db->order_by('id', 'DESC');
					$sql = $this->db->get();
					return $sql->num_rows();

			} elseif($viv_user_type=='TRMMFINANCE')	 {
					$this->db->select('*');
					$this->db->from('ideas');
					$this->db->where_in('status', $status);

 					$this->db->order_by('id', 'DESC');
					$sql = $this->db->get();
					return $sql->num_rows();

			}


		}



		/********************************
		 SUPER ADMIN - count_listmyideas_verifiy_sts_mang_dashb
		********************************/
		public function count_listmyideas_verifiy_sts_mang_dashb($status,$year_sub,$domain_sub,$dept_sub) {

			$viv_user_type = $this->session->userdata('viv_user_type');
			$viv_profile_id = $this->session->userdata('viv_profile_id');
			$viv_email = $this->session->userdata('viv_email');


			if(empty($year_sub) || $year_sub =='ALL') {  $year_sub = ''; }
			if(empty($dept_sub) || $dept_sub == 'ALL') { $dept_sub = '';  }
			if(empty($domain_sub) || $domain_sub == 'ALL') { $domain_sub = '';  }


			if($viv_user_type=='TRMMADMIN') {

					$this->db->select('*');
					$this->db->from('ideas');
					$this->db->where_in('status', $status);
					//$this->db->where('profileid', $wl_profileid);
					$this->db->order_by('id', 'DESC');
					$sql = $this->db->get();
					return $sql->num_rows();

			} elseif($viv_user_type=='TRMMMANG')	 {

					$this->db->select('*');
					$this->db->from('ideas');
					$this->db->where_in('status', $status);
					$this->db->where('imgapprov', 2);
					$this->db->where('approv_email', $viv_email);
					$this->db->like('syear', $year_sub);

					if(empty($dept_sub) || $dept_sub == 'ALL') {
						$this->db->like('origi_dept', $dept_sub);
					} else {
						$this->db->where('origi_dept', $dept_sub);
 					}

					$this->db->like('origi_domain', $domain_sub);
					$this->db->order_by('id', 'DESC');
					$sql = $this->db->get();
					return $sql->num_rows();

			} elseif($viv_user_type=='TRMMFINANCE')	 {
					$this->db->select('*');
					$this->db->from('ideas');
					$this->db->where_in('status', $status);
					$this->db->order_by('id', 'DESC');
					$sql = $this->db->get();
					return $sql->num_rows();

			}


		}

	/********************************
	 SUPER ADMIN - count_listmyideasoutoff
	********************************/
	public function count_listmyideasoutoff() {

		$viv_user_type = $this->session->userdata('viv_user_type');
		$viv_profile_id = $this->session->userdata('viv_profile_id');
		$viv_email = $this->session->userdata('viv_email');

		if($viv_user_type=='TRMMADMIN') {

				$this->db->select('*');
				$this->db->from('ideas');
				$this->db->where('status !=', 0);
				//$this->db->where('profileid', $wl_profileid);
				$this->db->order_by('id', 'DESC');
				$sql = $this->db->get();
				return $sql->num_rows();

		} elseif($viv_user_type=='TRMMEMP')	 {
				$this->db->select('*');
				$this->db->from('ideas');
				$this->db->where('status !=', 0);
				$this->db->where('profile_id', $viv_profile_id);
				$this->db->order_by('id', 'DESC');
				$sql = $this->db->get();
				return $sql->num_rows();

		} elseif($viv_user_type=='TRMMFINANCE')	 {
				$this->db->select('*');
				$this->db->from('ideas');
				$this->db->where('status', 2);
				//$this->db->where('profile_id', $viv_profile_id);
				$this->db->order_by('id', 'DESC');
				$sql = $this->db->get();
				return $sql->num_rows();

		}


	}




		/********************************
		 SUPER ADMIN - count_listmyideasoutoff_filter
		********************************/
		public function count_listmyideasoutoff_filter($year_sub,$domain_sub,$dept_sub) {

			$viv_user_type = $this->session->userdata('viv_user_type');
			$viv_profile_id = $this->session->userdata('viv_profile_id');
			$viv_email = $this->session->userdata('viv_email');

			if(empty($year_sub) || $year_sub =='ALL') {  $year_sub = ''; }
			if(empty($dept_sub) || $dept_sub == 'ALL') { $dept_sub = '';  }
			if(empty($domain_sub) || $domain_sub == 'ALL') { $domain_sub = '';  }


			if($viv_user_type=='TRMMADMIN') {

					$this->db->select('*');
					$this->db->from('ideas');
					$this->db->where('status !=', 0);
					//$this->db->where('profileid', $wl_profileid);
					$this->db->like('syear', $year_sub);
					$this->db->like('origi_dept', $dept_sub);
					$this->db->like('origi_domain', $domain_sub);
					$this->db->order_by('id', 'DESC');
					$sql = $this->db->get();
					return $sql->num_rows();

			} elseif($viv_user_type=='TRMMEMP')	 {
					$this->db->select('*');
					$this->db->from('ideas');
					$this->db->where('status !=', 0);
					$this->db->where('profile_id', $viv_profile_id);
					$this->db->order_by('id', 'DESC');
					$sql = $this->db->get();
					return $sql->num_rows();

			}


		}



	/********************************
	 SUPER ADMIN - count_listmyideasbystatus
	********************************/
	public function count_listmyideasbystatus($year_sub,$status) {

		$viv_user_type = $this->session->userdata('viv_user_type');
		$viv_profile_id = $this->session->userdata('viv_profile_id');
		$viv_email = $this->session->userdata('viv_email');

		$status_ex = explode(',',$status);

		if($viv_user_type=='TRMMADMIN') {

				$this->db->select('*');
				$this->db->from('ideas');
				$this->db->where_in('status', $status_ex);
				//$this->db->where('profileid', $wl_profileid);
				$this->db->order_by('id', 'DESC');
				$sql = $this->db->get();
				return $sql->num_rows();

		} elseif($viv_user_type=='TRMMEMP')	 {
				$this->db->select('*');
				$this->db->from('ideas');
				$this->db->where_in('status', $status_ex);
 				$this->db->where('profile_id', $viv_profile_id);
				$this->db->like('syear', $year_sub);
				$this->db->order_by('id', 'DESC');
				$sql = $this->db->get();
				return $sql->num_rows();

		}


	}



		/********************************
		 SUPER ADMIN - count_listmyideasbystatus_filter
		********************************/
		public function count_listmyideasbystatus_filter($status,$year_sub,$domain_sub,$dept_sub) {

			$viv_user_type = $this->session->userdata('viv_user_type');
			$viv_profile_id = $this->session->userdata('viv_profile_id');
			$viv_email = $this->session->userdata('viv_email');

			if(empty($year_sub) || $year_sub =='ALL') {  $year_sub = ''; }
			if(empty($dept_sub) || $dept_sub == 'ALL') { $dept_sub = '';  }
			if(empty($domain_sub) || $domain_sub == 'ALL') { $domain_sub = '';  }

			$status_ex = explode(',',$status);

			$imgapprov_sts = '0,1,2,3';
			$imgapprov_ex = explode(',',$imgapprov_sts);

			if($viv_user_type=='TRMMADMIN') {

					$this->db->select('*');
					$this->db->from('ideas');
					$this->db->where_in('status', $status_ex);
					$this->db->where_in('imgapprov', $imgapprov_ex);

					$this->db->like('syear', $year_sub);
					$this->db->like('origi_dept', $dept_sub);
					$this->db->like('origi_domain', $domain_sub);
					$this->db->order_by('id', 'DESC');
					$sql = $this->db->get();
					return $sql->num_rows();

			} elseif($viv_user_type=='TRMMEMP')	 {
					$this->db->select('*');
					$this->db->from('ideas');
					$this->db->where_in('status', $status_ex);
					$this->db->where('profile_id', $viv_profile_id);
					$this->db->order_by('id', 'DESC');
					$sql = $this->db->get();
					return $sql->num_rows();

			}


		}




				/********************************
				 SUPER ADMIN - count_listmyideasbystatus_filter
				********************************/
				public function count_listmyideasbystatus_filter_month2($status,$year_sub,$month_sub,$domain_sub,$dept_sub) {

					$viv_user_type = $this->session->userdata('viv_user_type');
					$viv_profile_id = $this->session->userdata('viv_profile_id');
					$viv_email = $this->session->userdata('viv_email');

					if(empty($year_sub) || $year_sub =='ALL') {  $year_sub = ''; }
					if(empty($month_sub) || $month_sub =='ALL') {  $month_sub = ''; }
					if(empty($dept_sub) || $dept_sub == 'ALL') { $dept_sub = '';  }
					if(empty($domain_sub) || $domain_sub == 'ALL') { $domain_sub = '';  }

					$status_ex = explode(',',$status);

					$imgapprov_sts = '0,1,2,3';
					$imgapprov_ex = explode(',',$imgapprov_sts);

					if($viv_user_type=='TRMMADMIN') {

							$this->db->select('*');
							$this->db->from('ideas');
							$this->db->where_in('status', $status_ex);
							$this->db->where_in('imgapprov', $imgapprov_ex);

							$this->db->like('syear', $year_sub);
							$this->db->like('smonth', $month_sub);
							$this->db->like('origi_dept', $dept_sub);
							$this->db->like('origi_domain', $domain_sub);
							$this->db->order_by('id', 'DESC');
							$sql = $this->db->get();
							return $sql->num_rows();

					} elseif($viv_user_type=='TRMMEMP')	 {
							$this->db->select('*');
							$this->db->from('ideas');
							$this->db->where_in('status', $status_ex);
							$this->db->where('profile_id', $viv_profile_id);
							$this->db->order_by('id', 'DESC');
							$sql = $this->db->get();
							return $sql->num_rows();

					}


				}








		/********************************
		 SUPER ADMIN - count_listmyideasbystatus_filter
		********************************/
		public function count_listmyideasbystatus_filter_month($status,$year_sub,$month,$domain_sub,$dept_sub) {

			$viv_user_type = $this->session->userdata('viv_user_type');
			$viv_profile_id = $this->session->userdata('viv_profile_id');
			$viv_email = $this->session->userdata('viv_email');

			if(empty($year_sub) || $year_sub =='ALL') {  $year_sub = ''; }
			if(empty($month) || $month =='ALL') {  $month = ''; }
			if(empty($dept_sub) || $dept_sub == 'ALL') { $dept_sub = '';  }
			if(empty($domain_sub) || $domain_sub == 'ALL') { $domain_sub = '';  }

			$status_ex = explode(',',$status);

			$this->db->select('*');
			$this->db->from('ideas');
			$this->db->where_in('status', $status_ex);
			$this->db->like('syear', $year_sub);
			$this->db->like('origi_month', $month);
			$this->db->like('origi_dept', $dept_sub);
			$this->db->like('origi_domain', $domain_sub);
			$this->db->order_by('id', 'DESC');
			$sql = $this->db->get();
			return $sql->num_rows();


		}










				/********************************
				 SUPER ADMIN - count_listmyideastypebystatus_filter_month
				********************************/
				public function count_listmyideastypebystatus_filter_month($status,$typ_sts,$year_sub,$month,$domain_sub,$dept_sub) {

					$viv_user_type = $this->session->userdata('viv_user_type');
					$viv_profile_id = $this->session->userdata('viv_profile_id');
					$viv_email = $this->session->userdata('viv_email');

					if(empty($year_sub) || $year_sub =='ALL') {  $year_sub = ''; }
					if(empty($month) || $month =='ALL') {  $month = ''; }
					if(empty($dept_sub) || $dept_sub == 'ALL') { $dept_sub = '';  }
					if(empty($domain_sub) || $domain_sub == 'ALL') { $domain_sub = '';  }

					$status_ex = explode(',',$status);



					$this->db->select('*');
					$this->db->from('ideas');
					$this->db->where_in('status', $status_ex);

					if($typ_sts=='dri') {
						//$this->db->where_in('status', $status_ex);
					} elseif($typ_sts=='iedept') {
						 $iedept_sts = '1,2,3';
						 $iedept_sts_ex = explode(',',$iedept_sts);
						 $this->db->where_in('iedept_status', $iedept_sts_ex);
					} elseif($typ_sts=='finance') {
						 $iedept_sts = '1,2,3';
						 $iedept_sts_ex = explode(',',$iedept_sts);
						 $this->db->where_in('finance_status', $iedept_sts_ex);
					}


					$this->db->like('syear', $year_sub);
					$this->db->like('origi_month', $month);
					$this->db->like('origi_dept', $dept_sub);
					$this->db->like('origi_domain', $domain_sub);
					$this->db->order_by('id', 'DESC');
					$sql = $this->db->get();
					return $sql->num_rows();


				}











				/********************************
				 SUPER ADMIN - count_listmyideastypebystatus_filter
				********************************/
				public function count_listmyideastypebystatus_filter($status,$typ_sts,$year_sub,$domain_sub,$dept_sub) {

					$viv_user_type = $this->session->userdata('viv_user_type');
					$viv_profile_id = $this->session->userdata('viv_profile_id');
					$viv_email = $this->session->userdata('viv_email');

					if(empty($year_sub) || $year_sub =='ALL') {  $year_sub = ''; }
					if(empty($month) || $month =='ALL') {  $month = ''; }
					if(empty($dept_sub) || $dept_sub == 'ALL') { $dept_sub = '';  }
					if(empty($domain_sub) || $domain_sub == 'ALL') { $domain_sub = '';  }

					$status_ex = explode(',',$status);

					$imgapprov_sts = '0,1,2,3';
					$imgapprov_ex = explode(',',$imgapprov_sts);

					if($typ_sts=='dri') {
					} elseif($typ_sts=='iedept') {
						 $iedept_sts = '1,2,3';
						 $iedept_sts_ex_irdept = explode(',',$iedept_sts);
					} elseif($typ_sts=='finance') {
						 $iedept_sts = '1,2,3';
						 $iedept_sts_ex_sts_fin = explode(',',$iedept_sts);
					}




					$this->db->select('*');
					$this->db->from('ideas');
					$this->db->where_in('status', $status_ex);
					$this->db->where_in('imgapprov', $imgapprov_ex);

					if($typ_sts=='dri') {
 					} elseif($typ_sts=='iedept') {
 						 $this->db->where_in('iedept_status', $iedept_sts_ex_irdept);
					} elseif($typ_sts=='finance') {
 						 $this->db->where_in('finance_status', $iedept_sts_ex_sts_fin);
					}

					$this->db->like('syear', $year_sub);
					//$this->db->like('origi_month', $month);
					$this->db->like('origi_dept', $dept_sub);
					$this->db->like('origi_domain', $domain_sub);
					$this->db->order_by('id', 'DESC');
					$sql = $this->db->get();
					return $sql->num_rows();


				}




				/********************************
				 SUPER ADMIN - count_listmyideastypebystatus_filter
				********************************/
				public function count_listmyideastypebystatus_filter_month2($status,$typ_sts,$year_sub,$month_sub,$domain_sub,$dept_sub) {

					$viv_user_type = $this->session->userdata('viv_user_type');
					$viv_profile_id = $this->session->userdata('viv_profile_id');
					$viv_email = $this->session->userdata('viv_email');

					if(empty($year_sub) || ($year_sub =='ALL' || $year_sub =='all')) {  $year_sub = ''; }
					if(empty($month) || ($month =='ALL' || $month =='all')) {  $month = ''; }
					if(empty($dept_sub) || ($dept_sub == 'ALL' || $dept_sub =='all')) { $dept_sub = '';  }
					if(empty($domain_sub) || ($domain_sub == 'ALL' || $domain_sub =='all')) { $domain_sub = '';  }

					$dept_sub = str_replace('%20', ' ', $dept_sub);
					$domain_sub = str_replace('%20', ' ', $domain_sub);

					$status_ex = explode(',',$status);

					$imgapprov_sts = '0,1,2,3';
					$imgapprov_ex = explode(',',$imgapprov_sts);

					if($typ_sts=='dri') {
					} elseif($typ_sts=='iedept') {
						 $iedept_sts = '1,2,3';
						 $iedept_sts_ex_irdept = explode(',',$iedept_sts);
					} elseif($typ_sts=='finance') {
						 $iedept_sts = '1,2,3';
						 $iedept_sts_ex_sts_fin = explode(',',$iedept_sts);
					}




					$this->db->select('*');
					$this->db->from('ideas');
					$this->db->where_in('status', $status_ex);
					$this->db->where_in('imgapprov', $imgapprov_ex);

					if($typ_sts=='dri') {
 					} elseif($typ_sts=='iedept') {
 						 $this->db->where_in('iedept_status', $iedept_sts_ex_irdept);
					} elseif($typ_sts=='finance') {
 						 $this->db->where_in('finance_status', $iedept_sts_ex_sts_fin);
					}

					$this->db->like('syear', $year_sub);
					$this->db->like('origi_month', $month_sub);
					$this->db->like('origi_dept', $dept_sub);
					$this->db->like('origi_domain', $domain_sub);
					$this->db->order_by('id', 'DESC');
					$sql = $this->db->get();
					return $sql->num_rows();


				}







	/********************************
	 SUPER ADMIN - count_listsmt
	********************************/
	public function count_listsmt() {

			//$wl_profileid = $this->session->userdata('rsa_profileid');
			/*
			$this->db->select('*');
			$this->db->from('ideas');
			$this->db->where('status', 1);
			//$this->db->where('profileid', $wl_profileid);
	 		$sql = $this->db->get();
			//return $sql->result();
			return $sql->num_rows();
			*/
			return 0;
	}


	/********************************
	 SUPER ADMIN - listmyideasbyiid
	********************************/
	public function listmyideasbyiid($idea_id) {

			//$wl_profileid = $this->session->userdata('rsa_profileid');

			$this->db->select('*');
			$this->db->from('ideas');
			//$this->db->where('status', 1);
			$this->db->where('idea_id', $idea_id);
	 		$sql = $this->db->get();
			return $sql->result();
	}



	/********************************
  SUPER ADMIN - createuser
  ********************************/
  public function createuser() {
	 $name = $this->input->post('empname');
 	 $emailid = $this->input->post('empemail');
 	 $password = MD5($this->input->post('password'));
	 $acc_status = $this->input->post('accstatus');
	 $usertype = $this->input->post('usertype');
	 $empemail2 = $this->input->post('empemail2');


	 $gender = $this->input->post('empgender');
	 $domain = $this->input->post('empdomain');
	 $depart = $this->input->post('dept');
	 $cadre = $this->input->post('cadre');




	 if($usertype==1) { $usertypee = 'TRMMADMIN'; $prefix = 'ADMIN';  }
	 elseif($usertype==2) { $usertypee = 'TRMMADMIN'; $prefix = 'ADMIN'; }
	 elseif($usertype==3) { $usertypee = 'TRMMEMP'; $prefix = 'USER'; }
	 elseif($usertype==4) { $usertypee = 'TRMMHOD'; $prefix = 'HOD'; }
	 elseif($usertype==5) { $usertypee = 'TRMMFINANCE'; $prefix = 'FINANCE'; }
	 elseif($usertype==6) { $usertypee = 'TRMMIEDEPT'; $prefix = 'IEDEPT'; }


	 $viv_email = $this->session->userdata('viv_email');
 	 $viv_profile_id = $this->session->userdata('viv_profile_id');

 	 $randomiduniq = $this->randomiduniq();
 	 $currentdatetime = $this->currentdatetime();



	 $this->db->select('*');
	 $this->db->from('usermang');
	 $this->db->where('email', $emailid);
	 $sqlq = $this->db->get();
	 //return $sql->result();
	 $rowcount = $sqlq->num_rows();

		if($rowcount>0){
				 redirect('admin/kaizenidea/useraccounts/addusers/mgce926289');
		}else {




			 		 $data = array(
			 			 'profile_id' => $prefix.'-'.$randomiduniq,
			 			 'email' => $emailid,
			 			 'password' => $password,
						 'fname' => $name,
						 'user_type' => $usertypee,
						 'status' => $acc_status,
						 'gender' => $gender,
						 'domain' => $domain,
						 'depart' => $depart,
						 'profile_pic' => 0,
			 			 'email2' => $empemail2,

			 		//	 'emailid_status' => 1,
			 		//	 'mobileno_status' => 1,
			 		//	 'regdate' => $currentdatetime,
			 		//	 'emailid_verify' => 1,

						 'sub_by' => $viv_profile_id,
						 'cadre' => $cadre,

			 			 'sub_time' => $currentdatetime
			 			 );
			 	 $this->db->insert('usermang', $data);



			 	 if($this->db->affected_rows() > 0) {
			 			 redirect('admin/kaizenidea/useraccounts/addusers/mgefge1234');
			 	 } else {
			 			 redirect('admin/kaizenidea/useraccounts/addusers/mgcd1c3922');
			 	 }

		}


}




	/********************************
	SUPER ADMIN - edituser
	********************************/
	public function edituser() {
	 $name = $this->input->post('empname');
	 $profileid = $this->input->post('profileid');
 	 $acc_status = $this->input->post('accstatus');
	 $usertype = $this->input->post('usertype');

	 $gender = $this->input->post('empgender');
	 $domain = $this->input->post('empdomain');
	 $depart = $this->input->post('empdepart');
	 $empemail2 = $this->input->post('empemail2');
	 $cadre = $this->input->post('cadre');


	 if($usertype==1) { $usertypee = 'TRMMADMIN'; $prefix = 'ADMIN';  }
	 elseif($usertype==2) { $usertypee = 'TRMMADMIN'; $prefix = 'ADMIN'; }
	 elseif($usertype==3) { $usertypee = 'TRMMMANG'; $prefix = 'MANAGER'; }
	 elseif($usertype==4) { $usertypee = 'TRMMEMP'; $prefix = 'USER'; }
	 //elseif($usertype==5) { $usertypee = 'TRMMITDEPT'; $prefix = 'ITDEPT'; }
	 elseif($usertype==5) { $usertypee = 'TRMMFINANCE'; $prefix = 'FINANCE'; }
	 elseif($usertype==6) { $usertypee = 'TRMMIEDEPT'; $prefix = 'IEDEPT'; }


	 $viv_email = $this->session->userdata('viv_email');
	 $viv_profile_id = $this->session->userdata('viv_profile_id');

	 $randomiduniq = $this->randomiduniq();
	 $currentdatetime = $this->currentdatetime();



		 $data = array(
			 'fname' => $name,
			 'user_type' => $usertypee,
			 'status' => $acc_status,
			 'gender' => $gender,
			 'domain' => $domain,
			 'email2' => $empemail2,
			 'depart' => $depart,
			 'cadre' => $cadre

		  );

		 $this->db->where('profile_id', $profileid);
	   $this->db->update('usermang', $data);



		 if($this->db->affected_rows() > 0) {
				 redirect('admin/kaizenidea/useraccounts/editusers/'.$profileid.'/mgefge1234');
		 } else {
				 redirect('admin/kaizenidea/useraccounts/editusers/'.$profileid.'/mgcd1c3922');
		 }




}







	/********************************
	SUPER ADMIN - listrsausersbyids
	 ********************************/
	 public function listusersbyids($uri5,$name,$emailid,$emailid2,$usertype,$dept) {

		 if(empty($uri5) || $uri5=='all') { $uri5 = ''; $uri55 = 'all'; } else  { $uri55 = $uri5; }

		 $uri5 = str_replace('%20', ' ', $uri5);



		 if(empty($name) && empty($emailid) && empty($emailid2) && empty($usertype) && empty($dept)) {
		 /*** PAGINATION ****/
			$config = array();
			$config["base_url"] = site_url('admin/kaizenidea/useraccounts/listusers/'.$uri55.'');
			$config["total_rows"] = $this->countlistusersbyids($uri5,$name,$emailid,$emailid2,$usertype,$dept);
			$config["per_page"] = 20;
			$config["uri_segment"] = 6;
			$this->pagination->initialize($config);
			$pagestart = ($this->uri->segment(6)) ? $this->uri->segment(6) : 0;
		/*** PAGINATION ****/
		}

		if($usertype=='1') { $usertype_name = 'TRMMADMIN'; }
		elseif($usertype=='3') { $usertype_name = 'TRMMMANG'; }
		elseif($usertype=='4') { $usertype_name = 'TRMMEMP'; }
		elseif($usertype=='5') { $usertype_name = 'TRMMFINANCE'; }
		elseif($usertype=='6') { $usertype_name = 'TRMMIEDEPT'; }
		elseif($usertype=='') { $usertype_name = ''; }



		$this->db->select('*');
		$this->db->from('usermang');
		$this->db->like('fname',$name);
		$this->db->like('email',$emailid);
		$this->db->like('email2',$emailid2);
		$this->db->like('user_type',$usertype_name);
		$this->db->like('domain',$uri5);
 		$this->db->like('depart',$dept);

		if(empty($name) && empty($emailid) && empty($emailid2) && empty($usertype) && empty($dept)) {
		$this->db->limit($config["per_page"], $pagestart);
		}
		$sql = $this->db->get();
		return $sql->result();
		//return $sql->num_rows();
		}


		/********************************
		SUPER ADMIN - listrsausersbyids
		 ********************************/
		 public function countlistusersbyids($uri5,$name,$emailid,$emailid2,$usertype,$dept) {

			  if(empty($uri5) || $uri5=='all') { $uri5 = ''; $uri55 = 'all'; } else  { $uri55 = $uri5; }
				$uri5 = str_replace('%20', ' ', $uri5);

			 if($usertype=='1') { $usertype_name = 'TRMMADMIN'; }
			 elseif($usertype=='3') { $usertype_name = 'TRMMMANG'; }
			 elseif($usertype=='4') { $usertype_name = 'TRMMEMP'; }
			 elseif($usertype=='5') { $usertype_name = 'TRMMFINANCE'; }
			 elseif($usertype=='6') { $usertype_name = 'TRMMIEDEPT'; }
			 elseif($usertype=='') { $usertype_name = ''; }

					$this->db->select('*');
					$this->db->from('usermang');
					$this->db->like('fname',$name);
					$this->db->like('email',$emailid);
					$this->db->like('email2',$emailid2);
					$this->db->like('user_type',$usertype_name);
					$this->db->like('domain',$uri5);
					$this->db->like('depart',$dept);
			 		//$this->db->where('courseid',$courseid);
					$sql = $this->db->get();
					//return $sql->result();
					return $sql->num_rows();
			}




				/********************************
				SUPER ADMIN - listusersbykaizentotal
				 ********************************/
				 public function listusersbykaizentotal() {


 					 /*** PAGINATION ****/
						$config = array();
						$config["base_url"] = site_url('admin/kaizenidea/useraccounts/listusersbykaizen/');
						$config["total_rows"] = $this->countlistusersbykaizentotal();
						$config["per_page"] = 20;
						$config["uri_segment"] = 5;
						$this->pagination->initialize($config);
						$pagestart = ($this->uri->segment(5)) ? $this->uri->segment(5) : 0;
					/*** PAGINATION ****/



					$this->db->select('*');
					$this->db->from('usermang');
					/*
					$this->db->like('fname',$name);
					$this->db->like('email',$emailid);
					$this->db->like('email2',$emailid2);
					$this->db->like('user_type',$usertype_name);
					$this->db->like('domain',$uri5);
			 		$this->db->like('depart',$dept);
					*/

 					$this->db->limit($config["per_page"], $pagestart);

					$sql = $this->db->get();
					return $sql->result();
					//return $sql->num_rows();
					}



					/********************************
					SUPER ADMIN - listusersbykaizentotal
					 ********************************/
					 public function listusersbykaizentotal_oneq() {


	 					 /*** PAGINATION ****/
							$config = array();
							$config["base_url"] = site_url('admin/kaizenidea/useraccounts/listusersbykaizen/');
							$config["total_rows"] = $this->countlistusersbykaizentotal();
							$config["per_page"] = 20;
							$config["uri_segment"] = 5;
							$this->pagination->initialize($config);
							$pagestart = ($this->uri->segment(5)) ? $this->uri->segment(5) : 0;
						/*** PAGINATION ****/

						/*
						$this->db->select('usermang.profile_id, COUNT(ideas.profile_id) as total_ideas');
						$this->db->from('usermang');
						$this->db->join('ideas', 'usermang.profile_id = ideas.profile_id', 'left');
						$this->db->where('ideas.status >=', 1);
						$this->db->group_by('usermang.profile_id');
						$this->db->order_by('total_ideas', 'DESC');
						*/

						$this->db->select('usermang.profile_id, COUNT(ideas.profile_id) as total_ideas');
						$this->db->from('usermang');
						$this->db->join('ideas', 'usermang.profile_id = ideas.profile_id AND ideas.status >= 1', 'left');
						$this->db->group_by('usermang.profile_id');
						$this->db->order_by('total_ideas', 'DESC');
 						$this->db->limit($config["per_page"], $pagestart);
						$sql = $this->db->get();
  					return $sql->result();
						//return $sql->num_rows();
						}


						/********************************
						SUPER ADMIN - listusersbykaizentotal
						 ********************************/
						 public function listusersbykaizentotal_oneq_tot($profile_id) {

 							$this->db->select('usermang.profile_id, COUNT(ideas.profile_id) as total_ideas');
							$this->db->from('usermang');
							$this->db->join('ideas', 'usermang.profile_id = ideas.profile_id AND ideas.status >= 1', 'left');
							$this->db->where('ideas.profile_id',$profile_id);
							//$this->db->group_by('usermang.profile_id');
							$this->db->order_by('total_ideas', 'DESC');
 							$sql = $this->db->get();
	  					//return $sql->result();
							return $sql->num_rows();
							}




						/********************************
						SUPER ADMIN - listusersbykaizentotal
						 ********************************/
						 public function listusersbykaizentotal_oneq_totalemp($value) {

							if($value=='notsubmitted') {
										$this->db->select('usermang.profile_id, COUNT(ideas.profile_id) as total_ideas');
										$this->db->from('usermang');
										$this->db->join('ideas', 'usermang.profile_id = ideas.profile_id', 'left');

										$this->db->group_by('usermang.profile_id');
										$this->db->order_by('total_ideas', 'DESC');
			 							$sql = $this->db->get();
				  					//return $sql->result();
										return $sql->num_rows();
							}	elseif($value=='submitted') {

										$this->db->select('usermang.profile_id, COUNT(ideas.profile_id) as total_ideas');
										$this->db->from('usermang');
										$this->db->join('ideas', 'usermang.profile_id = ideas.profile_id', 'left');
										$this->db->where('ideas.status >=', 1);
										$this->db->group_by('usermang.profile_id');
										$this->db->order_by('total_ideas', 'DESC');
										$sql = $this->db->get();
										//return $sql->result();
										return $sql->num_rows();

							} elseif($value=='all') {
										$this->db->select('usermang.profile_id, COUNT(ideas.profile_id) as total_ideas');
										$this->db->from('usermang');
										$this->db->join('ideas', 'usermang.profile_id = ideas.profile_id', 'left');
										//$this->db->where('ideas.status >=', 1);
										$this->db->group_by('usermang.profile_id');
										$this->db->order_by('total_ideas', 'DESC');
										$sql = $this->db->get();
										//return $sql->result();
										return $sql->num_rows();

							}


							}








			/********************************
			SUPER ADMIN - listusersbykaizentotal
			 ********************************/
			 public function countlistusersbykaizentotal() {



				$this->db->select('*');
				$this->db->from('usermang');
 				$sql = $this->db->get();
				//return $sql->result();
				return $sql->num_rows();
				}


				 /********************************
				 SUPER ADMIN - counttotalkaizensubmitted
				 ********************************/
				 public function counttotalkaizensubmitted($profile_id) {


				 $this->db->select('profile_id, COUNT(*) as count');
				 $this->db->from('ideas');
				 $this->db->where('profile_id',$profile_id);
				 $this->db->where('status >=',2);
				 $this->db->group_by('profile_id');
				 $this->db->order_by('count', 'DESC');
				 $sql = $this->db->get();

 					//return $sql->result();
					return $sql->num_rows();
					}



			/********************************
			SUPER ADMIN - listuserbypid
			 ********************************/
			 public function listuserbypid($profileid) {


				$this->db->select('*');
				$this->db->from('usermang');
				$this->db->like('profile_id',$profileid);
 				//$this->db->where('courseid',$courseid);
 				$sql = $this->db->get();
				return $sql->result();
				//return $sql->num_rows();
				}



		/********************************
		deleteuser
		********************************/
		public function deleteuser() {

		 $dataid = $this->input->post('dataid');


		 $data = array(
							'status'=>3
						 );
		 $this->db->where('profile_id', $dataid);
		 $this->db->update('usermang',$data);

		 if($this->db->affected_rows() > 0) {
				$data['mstatus'] = '1';
				$data['msgid'] = '';
				$data['message'] = 'Employee Account Deleted Successfully';
				$json = json_encode($data);
				echo $json;
			} else {
				$data['mstatus'] = '0';
				$data['msgid'] = '';
				$data['message'] = 'Sorry! Please Try Again...';
				$json = json_encode($data);
				echo $json;
		 }


	 	}




		/********************************
			SUPER ADMIN - ajaxaddimagebefore
		 ********************************/
		 public function ajaxaddimagebefore() {
			 $randomiduniq = $this->randomiduniq();
			 $currentdatetime = $this->currentdatetime();


			 $sday=date('d');
			 $smonth=date('m');
			 $syear=date('Y');

			 $postid = $this->input->post('postid');
			 $profileid = $this->input->post('profileid');


			 // var_dump($uniqueurlid);exit;

			 // ***Multiple FILE UPLOAD****
			 $new_image_name = time() . str_replace(str_split(' ()\\/,:*?"<>|-.'), '',$_FILES['files']['name']);
			 //  $new_image_name = preg_replace('/\.*/', '', $new_image_name1);
			 $new_filetype = pathinfo($_FILES['files']['name'], PATHINFO_EXTENSION);
			 $new_image_name = $new_image_name.".".$new_filetype;

			 $config['upload_path'] = 'assets/images/kaizenattachments/';
			 //$config['allowed_types'] = 'gif|jpg|png|jpeg|pdf|ppt|docx|pptx|xlsx|xls|doc';
			 $config['allowed_types'] = 'jpg|png|jpeg';
			 /* PDF, DOCx, JPEG, PNG, GIF, PPTX, XLXx */
			 $config['file_name'] = $new_image_name;
			 $config['max_size']  = '0';
			 $config['max_width']  = '0';
			 $config['max_height']  = '0';
			 $config['$min_width'] = '0';
			 $config['min_height'] = '0';

			 $this->upload->initialize($config);
			 $this->load->library('upload', $config);
			 // $upload = $this->upload->do_upload('files');
			 /***** END Multiple FILE UPLOAD************/


			 if (!$this->upload->do_upload('files'))
			 {

			 $error =$this->upload->display_errors();

			 if(!empty($error)){
			 echo 2;
			 }

			 }
			    else {


			    $data = array(
			             'before_img'=>$new_image_name,
			             'before_img_filetype'=>$new_filetype
			             );
			     $this->db->where('idea_id', $postid);
			     $this->db->update('ideas',$data);

			     if($this->db->affected_rows() > 0) {
			             echo 1;
			    } else {
			             echo 2;
			      }

			    }

			 exit();

		 }




		 /********************************
 			SUPER ADMIN - ajaxaddimageafter
 		 ********************************/
 		 public function ajaxaddimageafter() {
 			 $randomiduniq = $this->randomiduniq();
 			 $currentdatetime = $this->currentdatetime();


 			 $sday=date('d');
 			 $smonth=date('m');
 			 $syear=date('Y');

 			 $postid = $this->input->post('postid');
 			 $profileid = $this->input->post('profileid');


 			 // var_dump($uniqueurlid);exit;

 			 // ***Multiple FILE UPLOAD****
 			 $new_image_name = time() . str_replace(str_split(' ()\\/,:*?"<>|-.'), '',$_FILES['files_a']['name']);
 			 //  $new_image_name = preg_replace('/\.*/', '', $new_image_name1);
 			 $new_filetype = pathinfo($_FILES['files_a']['name'], PATHINFO_EXTENSION);
 			 $new_image_name = $new_image_name.".".$new_filetype;

 			 $config['upload_path'] = 'assets/images/kaizenattachments/';
 			 //$config['allowed_types'] = 'gif|jpg|png|jpeg|pdf|ppt|docx|pptx|xlsx|xls|doc';
 			 $config['allowed_types'] = 'jpg|png|jpeg';
 			 /* PDF, DOCx, JPEG, PNG, GIF, PPTX, XLXx */
 			 $config['file_name'] = $new_image_name;
 			 $config['max_size']  = '0';
 			 $config['max_width']  = '0';
 			 $config['max_height']  = '0';
 			 $config['$min_width'] = '0';
 			 $config['min_height'] = '0';

 			 $this->upload->initialize($config);
 			 $this->load->library('upload', $config);
 			 // $upload = $this->upload->do_upload('files');
 			 /***** END Multiple FILE UPLOAD************/


 			 if (!$this->upload->do_upload('files_a'))
 			 {

 			 $error =$this->upload->display_errors();

 			 if(!empty($error)){
 			 echo 2;
 			 }

 			 }
 			    else {


 			    $data = array(
 			             'after_img'=>$new_image_name,
 			             'after_img_filetype'=>$new_filetype
 			             );
 			     $this->db->where('idea_id', $postid);
 			     $this->db->update('ideas',$data);

 			     if($this->db->affected_rows() > 0) {
 			             echo 1;
 			    } else {
 			             echo 2;
 			      }

 			    }

 			 exit();

 		 }




		 		 /********************************
		  			SUPER ADMIN - ajaxaddimagerootcause
		  		 ********************************/
		  		 public function ajaxaddimagerootcause() {
		  			 $randomiduniq = $this->randomiduniq();
		  			 $currentdatetime = $this->currentdatetime();


		  			 $sday=date('d');
		  			 $smonth=date('m');
		  			 $syear=date('Y');

		  			 $postid = $this->input->post('postid');
		  			 $profileid = $this->input->post('profileid');


		  			 // var_dump($uniqueurlid);exit;

		  			 // ***Multiple FILE UPLOAD****
		  			 $new_image_name = time() . str_replace(str_split(' ()\\/,:*?"<>|-.'), '',$_FILES['files_a']['name']);
		  			 //  $new_image_name = preg_replace('/\.*/', '', $new_image_name1);
		  			 $new_filetype = pathinfo($_FILES['files_a']['name'], PATHINFO_EXTENSION);
		  			 $new_image_name = $new_image_name.".".$new_filetype;

		  			 $config['upload_path'] = 'assets/images/kaizenattachments/';
		  			 //$config['allowed_types'] = 'gif|jpg|png|jpeg|pdf|ppt|docx|pptx|xlsx|xls|doc';
		  			 $config['allowed_types'] = 'jpg|png|jpeg';
		  			 /* PDF, DOCx, JPEG, PNG, GIF, PPTX, XLXx */
		  			 $config['file_name'] = $new_image_name;
		  			 $config['max_size']  = '0';
		  			 $config['max_width']  = '0';
		  			 $config['max_height']  = '0';
		  			 $config['$min_width'] = '0';
		  			 $config['min_height'] = '0';

		  			 $this->upload->initialize($config);
		  			 $this->load->library('upload', $config);
		  			 // $upload = $this->upload->do_upload('files');
		  			 /***** END Multiple FILE UPLOAD************/


		  			 if (!$this->upload->do_upload('files_a'))
		  			 {

		  			 $error =$this->upload->display_errors();

		  			 if(!empty($error)){
		  			 echo 2;
		  			 }

		  			 }
		  			    else {


		  			    $data = array(
		  			             'rootcause_img'=>$new_image_name,
		  			             'rootcause_img_filetype'=>$new_filetype
		  			             );
		  			     $this->db->where('idea_id', $postid);
		  			     $this->db->update('ideas',$data);

		  			     if($this->db->affected_rows() > 0) {
		  			             echo 1;
		  			    } else {
		  			             echo 2;
		  			      }

		  			    }

		  			 exit();

		  		 }




 		 /********************************
			SUPER ADMIN - findnamebyprofileid
		 ********************************/
		 public function findnamebyprofileid($profileid) {
			 //$wl_profileid = $this->session->userdata('rsa_profileid');

				$this->db->select('*');
				$this->db->from('usermang');
		 		$this->db->where('profile_id', $profileid);
				$sql = $this->db->get();
				//return $sql->result();
				//return $sql->num_rows();
				foreach ($sql->result() as $listtopicsbyidsRow) {
					$fname = $listtopicsbyidsRow->fname;
 					//$fullname = $listtopicsbyidsRow->rname;
					return $fname;
				}

		 }


		 /********************************
			SUPER ADMIN - findnamebyprofileid
		 ********************************/
		 public function finddomainbyprofileid($profileid) {
			 //$wl_profileid = $this->session->userdata('rsa_profileid');

				$this->db->select('*');
				$this->db->from('usermang');
		 		$this->db->where('profile_id', $profileid);
				$sql = $this->db->get();
				//return $sql->result();
				//return $sql->num_rows();
				foreach ($sql->result() as $listtopicsbyidsRow) {
					$domain = $listtopicsbyidsRow->domain;
 					//$fullname = $listtopicsbyidsRow->rname;
					return $domain;
				}

		 }


		 /********************************
			SUPER ADMIN - findnamebyprofileid
		 ********************************/
		 public function finddepartbyprofileid($profileid) {
			 //$wl_profileid = $this->session->userdata('rsa_profileid');

				$this->db->select('*');
				$this->db->from('usermang');
		 		$this->db->where('profile_id', $profileid);
				$sql = $this->db->get();
				//return $sql->result();
				//return $sql->num_rows();
				foreach ($sql->result() as $listtopicsbyidsRow) {
					$depart = $listtopicsbyidsRow->depart;
 					//$fullname = $listtopicsbyidsRow->rname;
					return $depart;
				}

		 }


		 /********************************
		 ajaxaddteammembnames
		 ********************************/
		 public function ajaxaddteammembnames() {

			$randomiduniq = $this->randomiduniq();
 		 	$currentdatetime = $this->currentdatetime();
			$teamid= 'TEAMMEMB'.$randomiduniq;
 			$viv_profile_id = $this->session->userdata('viv_profile_id');

 			$sday=date('d');
 			$smonth=date('m');
 			$syear=date('Y');

 			 $eteamname = $this->input->post('eteamname');
			 $efunction = $this->input->post('efunction');
			 $eempid = $this->input->post('eempid');
			 $eideaid = $this->input->post('eideaid');


			$data = array(
						 	'idea_id'=>$eideaid,
							 'teamid'=>$teamid,
						 	 'profile_id'=>$viv_profile_id,
							 'teamname'=>$eteamname,
							 'function'=>$efunction,
							 'empid'=>$eempid,
							 'status'=>1,
							 'sday'=>$sday,
							 'smonth'=>$smonth,
							 'syear'=>$syear,
							 'subdatetime'=>$currentdatetime
							);

			$this->db->insert('kaizen_teammembers',$data);




			if($this->db->affected_rows() > 0) {
				 $data['mstatus'] = '1';
				 $data['msgid'] = '';
				 $data['message'] = 'Team Members Added Successfully';
				 $json = json_encode($data);
				 echo $json;
			 } else {
				 $data['mstatus'] = '0';
				 $data['msgid'] = '';
				 $data['message'] = 'Sorry! Please Try Again...';
				 $json = json_encode($data);
				 echo $json;
			}


		 }







		 		 /********************************
					SUPER ADMIN - listteammembersbyiid
				 ********************************/
				 public function listteammembersbyiid($eideaid) {
					 //$wl_profileid = $this->session->userdata('rsa_profileid');

						$this->db->select('*');
						$this->db->from('kaizen_teammembers');
				 		$this->db->where('idea_id', $eideaid);
						$sql = $this->db->get();
						return $sql->result();
						//return $sql->num_rows();
 				 }




				 /********************************
					SUPER ADMIN - count_listteammembersbyiid
				 ********************************/
				 public function count_listteammembersbyiid($eideaid) {
					 //$wl_profileid = $this->session->userdata('rsa_profileid');

						$this->db->select('*');
						$this->db->from('kaizen_teammembers');
				 		$this->db->where('idea_id', $eideaid);
						$sql = $this->db->get();
						//return $sql->result();
						return $sql->num_rows();
 				 }





				 /********************************
		 		deletekaizenimg
		 		********************************/
		 		public function deletekaizenimg() {

				 $dataiid = $this->input->post('dataiid');
		 		 $dataitype = $this->input->post('dataitype');

				 if($dataitype=='before') {
					 $dataitype_col1 = 'before_img'; $dataitype_col2 = 'before_img_filetype';
				 } elseif($dataitype=='after') {
					 $dataitype_col1 = 'after_img'; $dataitype_col2 = 'after_img_filetype';
				 } elseif($dataitype=='rootcause') {
					 $dataitype_col1 = 'rootcause_img'; $dataitype_col2 = 'rootcause_img_filetype';
				 }


				 $findkaizenimagename = $this->findkaizenimagename($dataiid,$dataitype);
				 $file_to_delete = 'assets/images/kaizenattachments/'.$findkaizenimagename.'';
				 unlink($file_to_delete);


		 		 $data = array(
					 				''.$dataitype_col1.''=>0,
		 							''.$dataitype_col2.''=>0,
		 						 );
		 		 $this->db->where('idea_id', $dataiid);
		 		 $this->db->update('ideas',$data);





		 		 if($this->db->affected_rows() > 0) {
		 				$data['mstatus'] = '1';
		 				$data['msgid'] = $dataitype;
		 				$data['message'] = 'Image Deleted Successfully';
		 				$json = json_encode($data);
		 				echo $json;
		 			} else {
		 				$data['mstatus'] = '0';
		 				$data['msgid'] = $dataitype;
		 				$data['message'] = 'Sorry! Please Try Again...';
		 				$json = json_encode($data);
		 				echo $json;
		 		 }



		 	 	}







				/********************************
	 			SUPER ADMIN - findkaizenimagename
	 		 ********************************/
	 		 public function findkaizenimagename($dataiid,$dataitype) {
	 			 //$wl_profileid = $this->session->userdata('rsa_profileid');

	 				$this->db->select('*');
	 				$this->db->from('ideas');
	 		 		$this->db->where('idea_id', $dataiid);
	 				$sql = $this->db->get();
	 				//return $sql->result();
	 				//return $sql->num_rows();

					if($dataitype=='before') {
		 				foreach ($sql->result() as $listtopicsbyidsRow) {
									$img = $listtopicsbyidsRow->before_img;
						}
				   } else if($dataitype=='after') {
								foreach ($sql->result() as $listtopicsbyidsRow) {
									 $img = $listtopicsbyidsRow->after_img;
								}
						}

						else if($dataitype=='rootcause') {
 								foreach ($sql->result() as $listtopicsbyidsRow) {
 									 $img = $listtopicsbyidsRow->rootcause_img;
 								}
 						}

	  					//$fullname = $listtopicsbyidsRow->rname;
	 					return $img;


	 		 }


			 /********************************
			deleteteammember
			********************************/
			public function deleteteammember() {

			 $dataiid = $this->input->post('dataiid');
			 $datamid = $this->input->post('datamid');

			 $this->db->where('teamid', $datamid);
			 $this->db->where('idea_id', $dataiid);
			 $this->db->delete('kaizen_teammembers');

			 if($this->db->affected_rows() > 0) {
					$data['mstatus'] = '1';
					$data['msgid'] = '';
					$data['message'] = 'Deleted Successfully';
					$json = json_encode($data);
					echo $json;
				} else {
					$data['mstatus'] = '0';
					$data['msgid'] = '';
					$data['message'] = 'Sorry! Please Try Again...';
					$json = json_encode($data);
					echo $json;
			 }



			}




			/********************************
			 SUPER ADMIN - listteammembersbyiid
			********************************/
			public function listsustenancebyiid($eideaid) {
				//$wl_profileid = $this->session->userdata('rsa_profileid');

				 $this->db->select('*');
				 $this->db->from('kaizen_sustenance');
				 $this->db->where('idea_id', $eideaid);
				 $sql = $this->db->get();
				 return $sql->result();
				 //return $sql->num_rows();
			}



			/********************************
			 SUPER ADMIN - count_listteammembersbyiid
			********************************/
			public function count_listsustenancebyiid($eideaid) {
				//$wl_profileid = $this->session->userdata('rsa_profileid');

				 $this->db->select('*');
				 $this->db->from('kaizen_sustenance');
				 $this->db->where('idea_id', $eideaid);
				 $sql = $this->db->get();
				 //return $sql->result();
				 return $sql->num_rows();
			}





			/********************************
 		 addsustenance
 		 ********************************/
 		 public function addsustenance() {

 			$randomiduniq = $this->randomiduniq();
  		$currentdatetime = $this->currentdatetime();
 			$sus_id= 'SUSTENANCE'.$randomiduniq;
  		$viv_profile_id = $this->session->userdata('viv_profile_id');

  			$sday=date('d');
  			$smonth=date('m');
  			$syear=date('Y');

  		 $esn = $this->input->post('esn');
 			 $emc = $this->input->post('emc');
 			 $etargetdate = $this->input->post('etargetdate');
			 $eresponsi = $this->input->post('eresponsi');
			 $estatus = $this->input->post('estatus');
 			 $eideaid_s = $this->input->post('eideaid_s');


 			$data = array(
 						 	 'sus_id'=>$sus_id,
 							 'idea_id'=>$eideaid_s,
 						 	 'profile_id'=>$viv_profile_id,
							 'sn'=>$esn,
							 'mc'=>$emc,
 							 'targetdate'=>$etargetdate,
							 'responsi'=>$eresponsi,
 							 'sus_status'=>$estatus,
 							 'status'=>1,
 							 'sday'=>$sday,
 							 'smonth'=>$smonth,
 							 'syear'=>$syear,
 							 'subdatetime'=>$currentdatetime
 							);

 			$this->db->insert('kaizen_sustenance',$data);



 			if($this->db->affected_rows() > 0) {
 				 $data['mstatus'] = '1';
 				 $data['msgid'] = '';
 				 $data['message'] = 'Sustenance Status Added Successfully';
 				 $json = json_encode($data);
 				 echo $json;
 			 } else {
 				 $data['mstatus'] = '0';
 				 $data['msgid'] = '';
 				 $data['message'] = 'Sorry! Please Try Again...';
 				 $json = json_encode($data);
 				 echo $json;
 			}


 		 }



		 /********************************
		deletesustenance
		********************************/
		public function deletesustenance() {

		 $dataiid = $this->input->post('dataiid');
		 $datasid = $this->input->post('datasid');

		 $this->db->where('sus_id', $datasid);
		 $this->db->where('idea_id', $dataiid);
		 $this->db->delete('kaizen_sustenance');

		 if($this->db->affected_rows() > 0) {
				$data['mstatus'] = '1';
				$data['msgid'] = '';
				$data['message'] = 'Deleted Successfully';
				$json = json_encode($data);
				echo $json;
			} else {
				$data['mstatus'] = '0';
				$data['msgid'] = '';
				$data['message'] = 'Sorry! Please Try Again...';
				$json = json_encode($data);
				echo $json;
		 }



		}



	 /********************************
	 updateideastatus
	 ********************************/
	 public function updateideastatus() {

		 $viv_user_type = $this->session->userdata('viv_user_type');
		 $viv_profile_id = $this->session->userdata('viv_profile_id');
		 $viv_email = $this->session->userdata('viv_email');

		 $randomiduniq = $this->randomiduniq();
		 $currentdatetime = $this->currentdatetime();

		$ideaid = $this->input->post('ideaid');
		$status = $this->input->post('status');

		$finance_status = $this->input->post('finance_status');
		$iedept_status = $this->input->post('iedept_status');
		$finance_email = $this->mapi->findfinanceemail2bypid();
		$iedept_email = $this->mapi->findieemail2bypid();


		$reject_reason = $this->input->post('reject_reason');
		if(empty($reject_reason)) { $reject_reason = ''; }

		$hold_reason = $this->input->post('hold_reason');
		if(empty($hold_reason)) { $hold_reason = ''; }


		if($status=='approve') {
			  $upstatus = '2';
				$emp_edit_status = '1';
				$hodstatus = 'Approved';
				$hold_status = '0';

		} elseif($status=='reject') {
				$upstatus = '3';
				$hodstatus = 'Rejected';
				$emp_edit_status = '1';
				$hold_status = '0';
		} elseif($status=='hold') {
				$upstatus = '1';
				$hodstatus = 'Hold';
				$emp_edit_status = '0';
				$hold_status = '1';

					$data_i = array(

										 'idea_id'=>$ideaid,
										 'hold_id'=>'HOLD'.$randomiduniq,
										 'idea_type'=>'HOD',
										 'iemail'=>$viv_email,
										 'istatus'=>1,
										 'hold_reason'=>$hold_reason,
										 'idatetime'=>$currentdatetime
			 	  );
 			 		$this->db->insert('idea_hold_status', $data_i);
		}

		$data = array(

							 'hod_email'=>$viv_email,
							 'hod_status'=>$hodstatus,
							 'hod_datetime'=>$currentdatetime,
							 'finance_status'=>$finance_status,
							 'iedept_status'=>$iedept_status,
							 'reject_reason'=>$reject_reason,
							 'status'=>$upstatus,
							 'hold_status'=>$hold_status,
							 'emp_edit_status'=>$emp_edit_status
	  );

		$this->db->where('idea_id', $ideaid);
		$this->db->update('ideas', $data);






		if($this->db->affected_rows() > 0) {
				//redirect('admin/kaizenidea/ideamang/postidea/'.$ideaid.'/mgefge1234');
				/*
				if($status=='approve') {

							if($iedept_status=='1' && $finance_status=='1'){
								//TRigger Email
			        	$this->memail->triggerkaizen_driappr($iedept_email,$ideaid,$currentdatetime,$randomiduniq);

							} elseif($iedept_status=='' && $finance_status=='1'){
								//TRigger Email
			        	$this->memail->triggerkaizen_driappr($finance_email,$ideaid,$currentdatetime,$randomiduniq);

							} elseif($iedept_status=='1' && $finance_status==''){
								//TRigger Email
			        	$this->memail->triggerkaizen_driappr($iedept_email,$ideaid,$currentdatetime,$randomiduniq);

							} elseif($iedept_status=='' && $finance_status==''){

							}


				}
				*/


				redirect('admin/kaizenidea/ideamang/ideaverification');

		} else {
				//redirect('admin/kaizenidea/ideamang/postidea/'.$ideaid.'/mgcd1c3922');
				redirect('admin/kaizenidea/ideamang/ideaverification');
		}



	 }




	 	 /********************************
	 	 updateideastatus_fin
	 	 ********************************/
	 	 public function updateideastatus_fin() {

	 		 $viv_user_type = $this->session->userdata('viv_user_type');
	 		 $viv_profile_id = $this->session->userdata('viv_profile_id');
	 		 $viv_email = $this->session->userdata('viv_email');

	 		 $randomiduniq = $this->randomiduniq();
	 		 $currentdatetime = $this->currentdatetime();

	 		$ideaid = $this->input->post('ideaid');
	 		$status = $this->input->post('status');

	 		if($status=='approve') {
	 			  $upstatus = '4';
	 				$hodstatus = 'Approved';
	 		} elseif($status=='reject') {
	 				$upstatus = '5';
	 				$hodstatus = 'Rejected';
	 		}

	 		$data = array(
	 							 'finance_email'=>$viv_email,
	 							 'finance_status'=>$hodstatus,
	 							 'finance_datetime'=>$currentdatetime,
	 							 'status'=>$upstatus
	 	  );

	 		$this->db->where('idea_id', $ideaid);
	 		$this->db->update('ideas', $data);

	 		if($this->db->affected_rows() > 0) {
	 				//redirect('admin/kaizenidea/ideamang/postidea/'.$ideaid.'/mgefge1234');
	 				redirect('admin/kaizenidea/ideamang/ideaverification');

	 		} else {
	 				//redirect('admin/kaizenidea/ideamang/postidea/'.$ideaid.'/mgcd1c3922');
	 				redirect('admin/kaizenidea/ideamang/ideaverification');
	 		}



	 	 }




	 		/********************************
		 importuserexcel
			********************************/
			public function importuserexcel() {

									$viv_user_type = $this->session->userdata('viv_user_type');
									$viv_profile_id = $this->session->userdata('viv_profile_id');
									$viv_email = $this->session->userdata('viv_email');


									 $accstatus = $this->input->post('accstatus');
									 $usertype = $this->input->post('usertype');
									 $passowrd = MD5($this->input->post('passowrd'));


									 //echo '234';
									 $path = 'assets/sample_users_xls/emplist/';
									 $config['upload_path']   = $path;
									 $config['allowed_types'] = 'xlsx|xls|csv';
									 $config['remove_spaces'] = TRUE;
									 $this->upload->initialize($config);
									 $this->load->library('upload', $config);
									 if (!$this->upload->do_upload('userfile')) {
											 $error = array(
													 'error' => $this->upload->display_errors()
											 );
									 } else {
											 $data = array(
													 'upload_data' => $this->upload->data()
											 );
									 }

									 if (!empty($data['upload_data']['file_name'])) {
											 $import_xls_file = $data['upload_data']['file_name'];
									 } else {
											 $import_xls_file = 0;
									 }
									 $inputFileName = $path . $import_xls_file;

									 /** Excel File Detail **/

									 $randomiduniq = $this->randomiduniq();
									 $currentdatetime = $this->currentdatetime();
									 $date_today=date('d-m-Y');
									 $timestamp = strtotime("now");
									 $datestamp = strtotime($date_today);


									 $exl_id = 'EXLID_'.$this->randomiduniq();
									 $data = array(
										 'exl_id' => $exl_id,
										 'iyear' => date('Y'),
										 'file_name' => $import_xls_file,
										 'created_date' => $currentdatetime,
										 'c_datestamp' => $datestamp,
										 'c_timestamp' => $timestamp,
										 'sub_by' => $viv_email,
										 'profileid' => $viv_profile_id,
										 'status' => 1
										 );
									 $this->db->insert('emp_exl', $data);
									 /** END Excel File Detail **/


									 try {
											 $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
											 $objReader     = PHPExcel_IOFactory::createReader($inputFileType);
											 $objPHPExcel   = $objReader->load($inputFileName);
									 }
									 catch (Exception $e) {
											 die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME) . '": ' . $e->getMessage());
									 }
									 $allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);

									 $arrayCount   = count($allDataInSheet);
									 $flag         = 0;




									 $createArray  = array(
 											 'EmpNO',
											 'RESOURCENAME',
 											 'Gender',
											 'EMAILID',
 											 'DOMAIN',
 											 'Department'
									 );

									 $makeArray    = array(

											 'EmpNO' => 'EmpNO',
											 'RESOURCENAME' => 'RESOURCENAME',
 											 //'SAP Entity' => 'SAP Entity',
											 'Gender' => 'Gender',
									 //		'Building Name' => 'Building Name',
											 'EMAILID' => 'EMAILID',
									 //		'Region' => 'Region',
											 'DOMAIN' => 'DOMAIN',
											 'Department' => 'Department'

									 );




									 $SheetDataKey = array();
									 foreach ($allDataInSheet as $dataInSheet) {
											 foreach ($dataInSheet as $key => $value) {
													 if (in_array(trim($value), $createArray)) {
													 //if (in_array($value, $createArray)) {
															 //$value                      = preg_replace('/\s+/', '', $value);
															 $SheetDataKey[trim($value)] = $key;
															 //$SheetDataKey[$value] = $key;
													 } else {

													 }
											 }
									 }
									 $data = array_diff_key($makeArray, $SheetDataKey);

									 if (empty($data)) {
											 $flag = 1;
									 }

									 //print_r("<pre>");
									 //print_r($data);
									 //print_r("</pre>");

									 //echo $flag;
									 //exit();
									 if ($flag == 1) {
											 for ($i = 2; $i <= $arrayCount; $i++) {
													 $addresses     = array();


													 $email  = $SheetDataKey['EmpNO'];
													 $fname  = $SheetDataKey['RESOURCENAME'];
 													 $gender  = $SheetDataKey['Gender'];
													 $email2  = $SheetDataKey['EMAILID'];
 													 $domain  = $SheetDataKey['DOMAIN'];
 													 $depart  = $SheetDataKey['Department'];



					 $email  = filter_var(trim($allDataInSheet[$i][$email]), FILTER_SANITIZE_STRING);
					 $fname  = filter_var(trim($allDataInSheet[$i][$fname]), FILTER_SANITIZE_STRING);
 					 $gender  = filter_var(trim($allDataInSheet[$i][$gender]), FILTER_SANITIZE_STRING);
					 $email2  = filter_var(trim($allDataInSheet[$i][$email2]), FILTER_SANITIZE_STRING);
 					 $domain  = filter_var(trim($allDataInSheet[$i][$domain]), FILTER_SANITIZE_STRING);
					 $depart  = filter_var(trim($allDataInSheet[$i][$depart]), FILTER_SANITIZE_STRING);


													 /****** Random ID Generator ********/
													 $d           = date("d");
													 $m           = date("m");
													 $y           = date("Y");
													 $t           = time();
													 $dmt         = $d + $m + $y + $t;
													 $ran         = rand(0, 10000000);
													 $dmtran      = $dmt + $ran;
													 $un          = uniqid();
													 $dmtun       = $dmt . $un;
													 $mdun        = md5($dmtran . $un);
													 $sort        = substr($mdun, 16); // if you want sort length code.
													 $rsa_email = $this->session->userdata('rews_email');
														$randomiduniq = $this->randomiduniq();
														$currentdatetime = $this->currentdatetime();
													 /****** Random ID Generator ********/


													 if($usertype==1) { $usertypee = 'TRMMADMIN'; $prefix = 'ADMIN';  }
													 elseif($usertype==2) { $usertypee = 'TRMMADMIN'; $prefix = 'ADMIN'; }
													 elseif($usertype==3) { $usertypee = 'TRMMEMP'; $prefix = 'USER'; }
													 elseif($usertype==4) { $usertypee = 'TRMMHOD'; $prefix = 'HOD'; }
													 elseif($usertype==5) { $usertypee = 'TRMMITDEPT'; $prefix = 'ITDEPT'; }


													 $fetchData[] = array(


														'exl_id' => $exl_id,
														'profile_id' => 'USER-'.$randomiduniq,
														'email' => $email,
 													  'password' => $passowrd,
														'fname' => $fname,
														'user_type' => $usertypee,
														'email2' => $email2,
														'domain' => $domain,
														'depart' => $depart,
	 													'gender' => $gender,
	 													 'status' => 1,
	 													 'profile_pic' => 0,
	 								 					 'sub_by' => $viv_profile_id,
	 													 'sub_time' => $currentdatetime


													 );
											 }
											 $excelinfo = $fetchData;
											 $this->db->insert_batch('usermang', $excelinfo);

											 //$this->import->setBatchImport($fetchData);
											 //$this->import->importData();

											 if (isset($excelinfo) && !empty($excelinfo)) {

														 /*
														 foreach ($excelinfo as $key => $element) {
																echo $element['sap_cc']."<br/>";
																echo $element['sap_account']."<br/>";

														 }
														 */
														 redirect('admin/kaizenidea/useraccounts/listusers');
												 } else {
														 //echo 'There is no forecast';
														 //redirect('admin/forecastcollection/forecastentry/');
														 echo "Please import correct file";

												 }





									 } else {
											 echo "Please import correct file";
									 }


			}





			/********************************
			importuserexcel_temp
			********************************/
			public function importuserexcel_temp() {

									$viv_user_type = $this->session->userdata('viv_user_type');
									$viv_profile_id = $this->session->userdata('viv_profile_id');
									$viv_email = $this->session->userdata('viv_email');


									 //echo '234';
									 $path = 'assets/sample_users_xls/emplist/';
									 $config['upload_path']   = $path;
									 $config['allowed_types'] = 'xlsx|xls|csv';
									 $config['remove_spaces'] = TRUE;
									 $this->upload->initialize($config);
									 $this->load->library('upload', $config);
									 if (!$this->upload->do_upload('userfile')) {
											 $error = array(
													 'error' => $this->upload->display_errors()
											 );
									 } else {
											 $data = array(
													 'upload_data' => $this->upload->data()
											 );
									 }

									 if (!empty($data['upload_data']['file_name'])) {
											 $import_xls_file = $data['upload_data']['file_name'];
									 } else {
											 $import_xls_file = 0;
									 }
									 $inputFileName = $path . $import_xls_file;

									 /** Excel File Detail **/

									 $randomiduniq = $this->randomiduniq();
									 $currentdatetime = $this->currentdatetime();
									 $date_today=date('d-m-Y');
									 $timestamp = strtotime("now");
									 $datestamp = strtotime($date_today);

									 try {
											 $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
											 $objReader     = PHPExcel_IOFactory::createReader($inputFileType);
											 $objPHPExcel   = $objReader->load($inputFileName);
									 }
									 catch (Exception $e) {
											 die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME) . '": ' . $e->getMessage());
									 }
									 $allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);

									 $arrayCount   = count($allDataInSheet);
									 $flag         = 0;




									 $createArray  = array(
											 'Emp NO',
											 'RESOURCE NAME',
											 'Gender',
											 'EMAIL ID',
											 'DOMAIN',
											 'Department',
											 'Plant',
											 'Area'
									 );

									 $makeArray    = array(

											 'Emp NO' => 'Emp NO',
											 'RESOURCE NAME' => 'RESOURCE NAME',
											 //'SAP Entity' => 'SAP Entity',
											 'Gender' => 'Gender',
									 //		'Building Name' => 'Building Name',
											 'EMAIL ID' => 'EMAIL ID',
									 //		'Region' => 'Region',
											 'DOMAIN' => 'DOMAIN',
											 'Department' => 'Department',
											 'Plant' => 'Plant',
											 'Area' => 'Area'

									 );




									 $SheetDataKey = array();
									 foreach ($allDataInSheet as $dataInSheet) {
											 foreach ($dataInSheet as $key => $value) {
													 if (in_array(trim($value), $createArray)) {
													 //if (in_array($value, $createArray)) {
															 //$value                      = preg_replace('/\s+/', '', $value);
															 $SheetDataKey[trim($value)] = $key;
															 //$SheetDataKey[$value] = $key;
													 } else {

													 }
											 }
									 }
									 $data = array_diff_key($makeArray, $SheetDataKey);

									 if (empty($data)) {
											 $flag = 1;
									 }

									 //print_r("<pre>");
									 //print_r($data);
									 //print_r("</pre>");

									 //echo $flag;
									 //exit();
									 if ($flag == 1) {
											 for ($i = 2; $i <= $arrayCount; $i++) {
													 $addresses     = array();


													 $empid  = $SheetDataKey['Emp NO'];
													 $name  = $SheetDataKey['RESOURCE NAME'];
													 $gender  = $SheetDataKey['Gender'];
													 $emailid  = $SheetDataKey['EMAIL ID'];
													 $domain  = $SheetDataKey['DOMAIN'];
													 $department  = $SheetDataKey['Department'];
													 $plant  = $SheetDataKey['Plant'];
													 $area  = $SheetDataKey['Area'];



					 $empid  = filter_var(trim($allDataInSheet[$i][$empid]), FILTER_SANITIZE_STRING);
					 $name  = filter_var(trim($allDataInSheet[$i][$name]), FILTER_SANITIZE_STRING);
					 $gender  = filter_var(trim($allDataInSheet[$i][$gender]), FILTER_SANITIZE_STRING);
					 $emailid  = filter_var(trim($allDataInSheet[$i][$emailid]), FILTER_SANITIZE_STRING);
					 $domain  = filter_var(trim($allDataInSheet[$i][$domain]), FILTER_SANITIZE_STRING);
					 $department  = filter_var(trim($allDataInSheet[$i][$department]), FILTER_SANITIZE_STRING);
					 $plant  = filter_var(trim($allDataInSheet[$i][$plant]), FILTER_SANITIZE_STRING);
					 $area  = filter_var(trim($allDataInSheet[$i][$area]), FILTER_SANITIZE_STRING);


													 /****** Random ID Generator ********/
													 $d           = date("d");
													 $m           = date("m");
													 $y           = date("Y");
													 $t           = time();
													 $dmt         = $d + $m + $y + $t;
													 $ran         = rand(0, 10000000);
													 $dmtran      = $dmt + $ran;
													 $un          = uniqid();
													 $dmtun       = $dmt . $un;
													 $mdun        = md5($dmtran . $un);
													 $sort        = substr($mdun, 16); // if you want sort length code.
													 $rsa_email = $this->session->userdata('rews_email');
														$randomiduniq = $this->randomiduniq();
														$currentdatetime = $this->currentdatetime();
													 /****** Random ID Generator ********/



													 $fetchData[] = array(
 														'empid' => $empid,
														'name' => $name,
														'gender' => $gender,
														'emailid' => $emailid,
														'domain' => $domain,
														'department' => $department,
														'plant' => $plant,
														'area' => $area,
														'status' => 0

													 );
											 }
											 $excelinfo = $fetchData;
											 $this->db->insert_batch('usermang_temp', $excelinfo);

											 //$this->import->setBatchImport($fetchData);
											 //$this->import->importData();

											 if (isset($excelinfo) && !empty($excelinfo)) {

														 /*
														 foreach ($excelinfo as $key => $element) {
																echo $element['sap_cc']."<br/>";
																echo $element['sap_account']."<br/>";

														 }
														 */
														 redirect('admin/kaizenidea/useraccounts/listusers');
												 } else {
														 //echo 'There is no forecast';
														 //redirect('admin/forecastcollection/forecastentry/');
														 echo "Please import correct file";

												 }





									 } else {
											 echo "Please import correct file";
									 }


			}






			/********************************
		  SUPER ADMIN - updatemyprofile
		  ********************************/
		  public function updatemyprofile() {
			 $name = $this->input->post('empname');
		 	 //$emailid = $this->input->post('empemail');
 			 $gender = $this->input->post('empgender');
			 $domain = $this->input->post('empdomain');
			 $depart = $this->input->post('empdepart');
			 $empemail2 = $this->input->post('empemail2');




			 $viv_email = $this->session->userdata('viv_email');
		 	 $viv_profile_id = $this->session->userdata('viv_profile_id');

		 	 $randomiduniq = $this->randomiduniq();
		 	 $currentdatetime = $this->currentdatetime();


					 		 $data = array(
 								 'fname' => $name,
 								 'gender' => $gender,
								 'domain' => $domain,
								 'depart' => $depart,
								 'profile_pic' => 0,
					 			 'email2' => $empemail2
					 			 );

								 $this->db->where('profile_id', $viv_profile_id);
								 $this->db->update('usermang', $data);




					 	 if($this->db->affected_rows() > 0) {
					 			 redirect('admin/kaizenidea/myprofile/editprofile/mgpr465748');
					 	 } else {
					 			 redirect('admin/kaizenidea/myprofile/editprofile/mgcd1c3922');
					 	 }




		}




		/********************************
	 			SUPER ADMIN - findmydeptbypid
	 		 ********************************/
	 		 public function findmydeptbypid($profileid) {
	 			 //$wl_profileid = $this->session->userdata('rsa_profileid');

	 				$this->db->select('*');
	 				$this->db->from('usermang');
	 		 		$this->db->where('profile_id', $profileid);
	 				$sql = $this->db->get();
	 				//return $sql->result();
	 				//return $sql->num_rows();
	 				foreach ($sql->result() as $listtopicsbyidsRow) {
	 					$depart = $listtopicsbyidsRow->depart;
	  					//$fullname = $listtopicsbyidsRow->rname;
	 					return $depart;
	 				}

	 		 }


			 /********************************
	 	 			SUPER ADMIN - findmydomainbypid
	 	 		 ********************************/
	 	 		 public function findmydomainbypid($profileid) {
	 	 			 //$wl_profileid = $this->session->userdata('rsa_profileid');

	 	 				$this->db->select('*');
	 	 				$this->db->from('usermang');
	 	 		 		$this->db->where('profile_id', $profileid);
	 	 				$sql = $this->db->get();
	 	 				//return $sql->result();
	 	 				//return $sql->num_rows();
	 	 				foreach ($sql->result() as $listtopicsbyidsRow) {
	 	 					$domain = $listtopicsbyidsRow->domain;
	 	  					//$fullname = $listtopicsbyidsRow->rname;
	 	 					return $domain;
	 	 				}

	 	 		 }



			 /********************************
	 	 			SUPER ADMIN - listgroupbydept
	 	 		 ********************************/
	 	 		 public function listgroupbydept() {
	 	 			 //$wl_profileid = $this->session->userdata('rsa_profileid');

					   $this->db->select('depart');
						 $this->db->from('usermang');
						 $this->db->order_by('depart', 'ASC');
						 $this->db->group_by('depart');
						 $sql = $this->db->get();
						 return $sql->result();
 	 	 		 }

				 /********************************
		 	 			SUPER ADMIN - listgroupbydomain
		 	 		 ********************************/
		 	 		 public function listgroupbydomain() {
		 	 			 //$wl_profileid = $this->session->userdata('rsa_profileid');

						   $this->db->select('domain');
							 $this->db->from('usermang');
							 $this->db->order_by('domain', 'ASC');
							 $this->db->group_by('domain');
							 $sql = $this->db->get();
							 return $sql->result();
	 	 	 		 }


					 /********************************
						 SUPER ADMIN - listcadreall
						********************************/
						public function listcadreall() {
							//$wl_profileid = $this->session->userdata('rsa_profileid');

								$this->db->select('cadre');
								$this->db->from('cadre');
								$this->db->order_by('cadre', 'ASC');
								$this->db->group_by('cadre');
								$sql = $this->db->get();
								return $sql->result();
						}



					 /********************************
			 	 			SUPER ADMIN - listgroupbydomain_byid
			 	 		 ********************************/
			 	 		 public function listgroupbydomain_byid($domain) {
			 	 			 //$wl_profileid = $this->session->userdata('rsa_profileid');

							   $this->db->select('domain');
								 $this->db->from('usermang');
								 $this->db->where('domain', $domain);
								 $this->db->order_by('domain', 'ASC');
								 $this->db->group_by('domain');
								 $sql = $this->db->get();
								 return $sql->result();
		 	 	 		 }




					 /********************************
			 	 			SUPER ADMIN - listgroupbydeptbydomain
			 	 		 ********************************/
			 	 		 public function listgroupbydeptbydomain($domain) {
			 	 			 //$wl_profileid = $this->session->userdata('rsa_profileid');

							   $this->db->select('depart');
								 $this->db->from('usermang');
								 $this->db->where('domain', $domain);
								 $this->db->order_by('depart', 'ASC');
								 $this->db->group_by('depart');
								 $sql = $this->db->get();
								 return $sql->result();
		 	 	 		 }



						 /********************************
				 	 			SUPER ADMIN - listgroupbydeptbydomaindepart
				 	 		 ********************************/
				 	 		 public function listgroupbydeptbydomaindepart($domain,$depart) {
				 	 			 //$wl_profileid = $this->session->userdata('rsa_profileid');

								   $this->db->select('depart');
									 $this->db->from('usermang');
									 $this->db->where('domain', $domain);
									 $this->db->where('depart', $depart);
									 $this->db->order_by('depart', 'ASC');
									 $this->db->group_by('depart');
									 $sql = $this->db->get();
									 return $sql->result();
			 	 	 		 }



						 /********************************
				 	 			SUPER ADMIN - listgroupbydeptbydomain_all
				 	 		 ********************************/
				 	 		 public function listgroupbydeptbydomain_all($domain) {
				 	 			 //$wl_profileid = $thi	s->session->userdata('rsa_profileid');

									if(empty($domain) || $domain=='all') { $domain = ''; }

									 $this->db->select('depart');
									 $this->db->from('usermang');
									 $this->db->like('domain', $domain);
									 $this->db->order_by('depart', 'ASC');
									 $this->db->group_by('depart');
									 $sql = $this->db->get();
									 return $sql->result();
			 	 	 		 }




				 /********************************
					 SUPER ADMIN - listgroupbykaizenyear
					********************************/
					public function listgroupbykaizenyear() {
						//$wl_profileid = $this->session->userdata('rsa_profileid');

							$this->db->select('syear');
							$this->db->from('ideas');
							//$this->db->order_by('depart', 'ASC');
							$this->db->group_by('syear');
							$sql = $this->db->get();
							return $sql->result();
						}


						/********************************
	 					 SUPER ADMIN - listgroupbykaizenyear_ideagen
	 					********************************/
	 					public function listgroupbykaizenyear_ideagen() {
	 						//$wl_profileid = $this->session->userdata('rsa_profileid');

	 							$this->db->select('syear');
	 							$this->db->from('idea_gen');
	 							//$this->db->order_by('depart', 'ASC');
	 							$this->db->group_by('syear');
	 							$sql = $this->db->get();
	 							return $sql->result();
	 						}





				 /********************************
		 	 			SUPER ADMIN - listgroupbynamesbydept
		 	 		 ********************************/
		 	 		 public function listgroupbynamesbydept() {
		 	 			 //$wl_profileid = $this->session->userdata('rsa_profileid');

						 	 $this->db->select('fname');
						   $this->db->select('email');
							 $this->db->from('usermang');
							 $this->db->where('approvedby', '1');
							 $this->db->order_by('fname', 'ASC');
							 $this->db->group_by('fname');
							 $this->db->group_by('email');
							 $sql = $this->db->get();
							 return $sql->result();
	 	 	 		 }


					 /********************************
							 SUPER ADMIN - count_empbydomain
							********************************/
							public function count_empbydomain($domain) {
								//$wl_profileid = $this->session->userdata('rsa_profileid');

								 $this->db->select('*');
								 $this->db->from('usermang');
								 $this->db->where('domain', $domain);
								 $sql = $this->db->get();
								 //return $sql->result();
								 return $sql->num_rows();


							}




					  /********************************
					 			SUPER ADMIN - findnamebyemail
					 		 ********************************/
					 		 public function findnamebyemail($email) {
					 			 //$wl_profileid = $this->session->userdata('rsa_profileid');

					 				$this->db->select('*');
					 				$this->db->from('usermang');
					 		 		$this->db->where('email', $email);
					 				$sql = $this->db->get();
					 				//return $sql->result();
					 				//return $sql->num_rows();
					 				foreach ($sql->result() as $listtopicsbyidsRow) {
					 					$fname = $listtopicsbyidsRow->fname;
					  					//$fullname = $listtopicsbyidsRow->rname;
					 					return $fname;
					 				}

					 		 }


							 /********************************
	 					 			SUPER ADMIN - findprofileidbyemail
	 					 		 ********************************/
	 					 		 public function findprofileidbyemail($email) {
	 					 			 //$wl_profileid = $this->session->userdata('rsa_profileid');

	 					 				$this->db->select('*');
	 					 				$this->db->from('usermang');
	 					 		 		$this->db->where('email', $email);
	 					 				$sql = $this->db->get();
	 					 				//return $sql->result();
	 					 				//return $sql->num_rows();
	 					 				foreach ($sql->result() as $listtopicsbyidsRow) {
	 					 					$profile_id = $listtopicsbyidsRow->profile_id;
	 					  					//$fullname = $listtopicsbyidsRow->rname;
	 					 					return $profile_id;
	 					 				}

	 					 		 }


							 /********************************
									 SUPER ADMIN - finddepartbyemail
									********************************/
									public function finddepartbyemail($email) {
										//$wl_profileid = $this->session->userdata('rsa_profileid');

										 $this->db->select('*');
										 $this->db->from('usermang');
										 $this->db->where('email', $email);
										 $sql = $this->db->get();
										 //return $sql->result();
										 //return $sql->num_rows();
										 foreach ($sql->result() as $listtopicsbyidsRow) {
											 $depart = $listtopicsbyidsRow->depart;
												 //$fullname = $listtopicsbyidsRow->rname;
											 return $depart;
										 }

									}




							 /********************************
									 SUPER ADMIN - finddeptbyemail
									********************************/
									public function finddeptbyemail($email) {
										//$wl_profileid = $this->session->userdata('rsa_profileid');

										 $this->db->select('*');
										 $this->db->from('usermang');
										 $this->db->where('email', $email);
										 $sql = $this->db->get();
										 //return $sql->result();
										 //return $sql->num_rows();
										 foreach ($sql->result() as $listtopicsbyidsRow) {
											 $depart = $listtopicsbyidsRow->depart;
												 //$fullname = $listtopicsbyidsRow->rname;
											 return $depart;
										 }

									}





		 		 /********************************
		 			SUPER ADMIN - findnamebyemail
		 		 ********************************/
		 		 public function findstatuskizen($idea_id) {
		 			 //$wl_profileid = $this->session->userdata('rsa_profileid');

		 				$this->db->select('*');
		 				$this->db->from('ideas');
		 		 		$this->db->where('idea_id', $idea_id);
		 				$sql = $this->db->get();
		 				//return $sql->result();
		 				//return $sql->num_rows();
		 				foreach ($sql->result() as $listtopicsbyidsRow) {
		 					$status = $listtopicsbyidsRow->status;
		  					//$fullname = $listtopicsbyidsRow->rname;
		 					return $status;
		 				}

		 		 }





			/********************************
			 SUPER ADMIN - downloadkaizenreportexcel
			********************************/
			public function downloadkaizenreportexcel($statusname) {

			 // file name
					$date = date('d-M-Y')."-".date("h:i:sa");
					$filename = 'KaizenForm-'.$statusname.'-'.$date.'.csv';
					header("Content-Description: File Transfer");
					header("Content-Disposition: attachment; filename=$filename");
					header("Content-Type: application/csv; ");


					// file creation
					$file = fopen('php://output', 'w');


					//$header_tit = array("OverAll Activity");
					//fputcsv($file, $header_tit);

					$header = array("Status","Doc No","Version No/ Date","Project Code","KAIZEN Ref.No","Dept.","Originated by -  Name ","Date","Approved Dept","Approved Name","Date","Confirmed by","Date","ACTIVITY","Activity Desc","Benefit Area","Plant Name","Kaizen Theme","Block/Line/Machine/Others","Suggested Kaizen ( Logical Correlation with root cause)","Problem Statement","Counter measure( Engineering solution)","BEFORE","AFTER","Yield","Cycle Time","Cost","Man power","Consumables","Others","Total Savings","Approved by (IE)","Approved by (Accounts)","EmpDetails","Root Cause ( Problem Phenomena) Type","Root Cause Explanation ","Brief explanation of present conditions","Brief explanation of Improvements done","Horizontal Deployment","In Other Machines within the cell","Within the Department in all the machine groups","In Other Dept/ Other Location","Any other Relevant Points","Scope and Plan for Horizontal Deployment","Benifits (P,Q,C,S,D,M,E)");
					fputcsv($file, $header);

					if($statusname=='allkaizens') { $status = '1,2,3,4,5,6,7'; }
					/*else if($statusname=='hodapproved') { $status = '2'; }
					else if($statusname=='hodrejected') { $status = '3'; } */

					$listmyideasbystatus = $this->listmyideasbystatus($status);
					foreach ($listmyideasbystatus as $listmyideasbystatusRow) {
						/*
 						idea_id
						profile_id
						viv_email

						activity
						activity_desc
 						benifit_area
						tepl_plant
						ktheme
						area_line_machine
						idea
						plantname
						prob_stmt
						count_measur
						cs_quality
						cs_cost
						cs_material
						cs_manpower
						cs_consumables
						cs_others
						cs_totalsavings
						cs_appr_ie
						cs_appr_acco
						cs_standardization
						cs_sopsp
						cs_drawing
						before_img
						before_img_filetype
						after_img
						after_img_filetype
						root_cause
						root_cause_exp
						brf_exp_precond
						brf_exp_impdone
						benifits
						horizontal1
						horizontal2
						horizontal3
						horizontal4
 						confirm_dept
						confirm_name
						confirm_date
						status
						sub_by
						sdate
						sday
						smonth
						syear
						subdatetime
						updatedinfo
						hod_email
						hod_status
						hod_datetime
						iedept_email
						iedept_status
						iedept_datetime
						*/




						$idea_id =    $listmyideasbystatusRow->idea_id;
						$doc_no =    $listmyideasbystatusRow->doc_no;
						$version_no =    $listmyideasbystatusRow->version_no;
						$proj_code =    $listmyideasbystatusRow->proj_code;
						$ref_no =    $listmyideasbystatusRow->ref_no;
						$origi_dept =    $listmyideasbystatusRow->origi_dept;
						$origi_name =    $listmyideasbystatusRow->origi_name;
						$origi_date =    $listmyideasbystatusRow->origi_date;
						$approv_dept =    $listmyideasbystatusRow->approv_dept;
						$approv_name =    $listmyideasbystatusRow->approv_name;
						$approv_date =    $listmyideasbystatusRow->approv_date;

						$activity =    $listmyideasbystatusRow->activity;
						$activity_desc =    $listmyideasbystatusRow->activity_desc;
 						$benifit_area =    $listmyideasbystatusRow->benifit_area;
						$tepl_plant =    $listmyideasbystatusRow->tepl_plant;
						$ktheme =    $listmyideasbystatusRow->ktheme;
						$ktheme =    $listmyideasbystatusRow->ktheme;
						//$area_line_machine =    $listmyideasbystatusRow->area_line_machine;
						$idea =    $listmyideasbystatusRow->idea;
						$plantname =    $listmyideasbystatusRow->plantname;
						$prob_stmt =    $listmyideasbystatusRow->prob_stmt;
						$count_measur =    $listmyideasbystatusRow->count_measur;



						$cs_yield =    $listmyideasbystatusRow->cs_yield;
						$cs_cycletime =    $listmyideasbystatusRow->cs_cycletime;
						$cs_cost =    $listmyideasbystatusRow->cs_cost;
						$cs_manpower =    $listmyideasbystatusRow->cs_manpower;
						$cs_consumables =    $listmyideasbystatusRow->cs_consumables;
						$cs_others =    $listmyideasbystatusRow->cs_others;
						$cs_totalsavings =    $listmyideasbystatusRow->cs_totalsavings;
						$cs_appr_ie =    $listmyideasbystatusRow->cs_appr_ie;
						$cs_appr_acco =    $listmyideasbystatusRow->cs_appr_acco;

						//$cs_material =    $listmyideasbystatusRow->cs_material;
						//$cs_standardization =    $listmyideasbystatusRow->cs_standardization;
						//$cs_sopsp =    $listmyideasbystatusRow->cs_sopsp;
						//$cs_drawing =    $listmyideasbystatusRow->cs_drawing;


						$before_img =    $listmyideasbystatusRow->before_img;
						$before_img_filetype =    $listmyideasbystatusRow->before_img_filetype;
						$after_img =    $listmyideasbystatusRow->after_img;
						$after_img_filetype =    $listmyideasbystatusRow->after_img_filetype;
						$root_cause =    $listmyideasbystatusRow->root_cause;
						$root_cause_exp =    $listmyideasbystatusRow->root_cause_exp;
						//$root_cause_block =    $listmyideasbystatusRow->root_cause_block;

						$brf_exp_precond =    $listmyideasbystatusRow->brf_exp_precond;
						$brf_exp_impdone =    $listmyideasbystatusRow->brf_exp_impdone;
						$benifits =    $listmyideasbystatusRow->benifits;

						$horizradio =    $listmyideasbystatusRow->horizradio;
						$horizontal1 =    $listmyideasbystatusRow->horizontal1;
						$horizontal2 =    $listmyideasbystatusRow->horizontal2;
						$horizontal3 =    $listmyideasbystatusRow->horizontal3;
						$horizontal4 =    $listmyideasbystatusRow->horizontal4;

						$origi_domain =    $listmyideasbystatusRow->origi_domain;
						$origi_dept =    $listmyideasbystatusRow->origi_dept;
						$origi_name =    $listmyideasbystatusRow->origi_name;
						$origi_date =    $listmyideasbystatusRow->origi_date;
						$origi_day =    $listmyideasbystatusRow->origi_day;
						$origi_month =    $listmyideasbystatusRow->origi_month;
						$origi_year =    $listmyideasbystatusRow->origi_year;
						$approv_dept =    $listmyideasbystatusRow->approv_dept;
						$approv_name =    $listmyideasbystatusRow->approv_name;
						$approv_email =    $listmyideasbystatusRow->approv_email;
						$approv_email2 =    $listmyideasbystatusRow->approv_email2;
						$approv_date =    $listmyideasbystatusRow->approv_date;




						$status =    $listmyideasbystatusRow->status;
						$imgapprov =    $listmyideasbystatusRow->imgapprov;
						$imgapprov_by =    $listmyideasbystatusRow->imgapprov_by;
						$reject_reason =    $listmyideasbystatusRow->reject_reason;
						$hod_email =    $listmyideasbystatusRow->hod_email;
						$hod_status =    $listmyideasbystatusRow->hod_status;
						$hod_datetime =    $listmyideasbystatusRow->hod_datetime;
						$finance_email =    $listmyideasbystatusRow->finance_email;
						$finance_status =    $listmyideasbystatusRow->finance_status;
						$fin_reject_reason =    $listmyideasbystatusRow->fin_reject_reason;
						$finance_datetime =    $listmyideasbystatusRow->finance_datetime;
						$iedept_email =    $listmyideasbystatusRow->iedept_email;
						$iedept_status =    $listmyideasbystatusRow->iedept_status;
						$iedept_reject_reason =    $listmyideasbystatusRow->iedept_reject_reason;
						$iedept_reject_reason =    $listmyideasbystatusRow->iedept_reject_reason;



						/*
						if($status==1) {  $statusdata = 'Waiting for DRI Approval'; }
						elseif($status==2) {
							$statusdata_1 = 'DRI Approved';
							if(empty($cs_cycletime) && empty($cs_manpower) && $cs_cost<50000) {
								$statusdata_2 = '';
							} else {
								$statusdata_2 = ' & Waiting for';
								if(!empty($cs_cycletime) || !empty($cs_manpower)) { $statusdata_3 = 'IE Dept'; }
								if((!empty($cs_cycletime) || !empty($cs_manpower)) && $cs_cost>=50000) { $statusdata_4 =', '; }
								if($cs_cost>=50000) { $statusdata_5 = 'Finance'; }
								$statusdata_5 = 'Approval';
							}

							if(empty($statusdata_2)) { $statusdata_2 = ''; }
							if(empty($statusdata_3)) { $statusdata_3 = ''; }
							if(empty($statusdata_4)) { $statusdata_4 = ''; }
							if(empty($statusdata_5)) { $statusdata_5 = ''; }

							$statusdata = $statusdata_1."".$statusdata_2."".$statusdata_3."".$statusdata_4."".$statusdata_5;

						}
						elseif($status==3) { $statusdata = 'DRI Rejected'; }
						elseif($status==4) {
							$statusdata_1 = 'IE Department Approved';
							if($cs_cost>=50000) { $statusdata_2 = '& Waiting for Finance Approval'; }
							if(empty($statusdata_2)) { $statusdata_2 = ''; }
							$statusdata = $statusdata_1."".$statusdata_2;
						}
						elseif($status==5) { $statusdata = 'IE Department Rejected'; }
						elseif($status==6) { $statusdata = 'Finance Approved'; }
						elseif($status==7) { $statusdata = 'Finance Rejected'; }

						*/


						if($status==1 && $imgapprov==1) {
								$statusdata = 'Waiting for Image Sanitization';
						} else if($status==1 && $imgapprov==3) {
								$statusdata = 'Images Sanitization Rejected';
						} else if($status==1 && $imgapprov==2) {
						  	$statusdata = 'Waiting for DRI Approval';
						} else if($status==2) {
							    $statusdata_sub = 'DRI Approved';

								  if(empty($cs_cycletime) && empty($cs_manpower) && $cs_cost<50000) {
 									 $statusdata_sub7 = '';
								  } else {

												$statusdata_sub2 = '& Waiting for';
												if(!empty($cs_cycletime) || !empty($cs_manpower)) {
													$statusdata_sub3 = 'IE Dept';
												} else { $statusdata_sub3 = '';  }

												if((!empty($cs_cycletime) || !empty($cs_manpower)) && $cs_cost>=50000) {
			 										$statusdata_sub4 = ', ';
												} else { $statusdata_sub4 = '';  }

												if($cs_cost>=50000) {
													$statusdata_sub5 = 'Finance';
												} else { $statusdata_sub5 = '';  }

													$statusdata_sub6 = 'Approval';

										$statusdata_sub7 =  $statusdata_sub2."".$statusdata_sub3."".$statusdata_sub4."".$statusdata_sub5."".$statusdata_sub6;


									}

									$statusdata = $statusdata_sub."".$statusdata_sub7;

									} else if($status==3) {
											$statusdata = 'DRI Rejected';
									} else if($status==4) {
											$statusdata_sub = 'IE Department Approved';
											if($cs_cost>=50000) { $statusdata_sub2 = '& Waiting for Finance Approval'; } else {
												$statusdata_sub2 = '';
											}
											$statusdata = $statusdata_sub."".$statusdata_sub2;
									} else if($status==5) {
										$statusdata = 'IE Department Rejected';

									} else if($status==6) {
											$statusdata = 'Finance Approved';
							  	} else if($status==7) {
										  $statusdata = 'Finance Rejected';

									}



						$listteammembersbyiid = $this->mapi->listteammembersbyiid($idea_id);
						$teamnames = "EmpID - TeamName - Function \r";
						foreach ($listteammembersbyiid as $rowArrayTeam) {
							 $teamid = $rowArrayTeam->teamid;
							 $empid = $rowArrayTeam->empid;
							 $teamname = $rowArrayTeam->teamname;
							 $function = $rowArrayTeam->function;

							 $teamnames .= $empid." - ".$teamname." - ".$function."\r";
						}


						$listsustenancebyiid = $this->mapi->listsustenancebyiid($idea_id);

						$listsus = "SN - M/C - Target Date - Responsibility - Status \r";
						foreach ($listsustenancebyiid as $listsustenancebyiidArray) {
							 $sus_id = $listsustenancebyiidArray->sus_id;
							 $sn = $listsustenancebyiidArray->sn;
							 $mc = $listsustenancebyiidArray->mc;
							 $targetdate = $listsustenancebyiidArray->targetdate;
							 $responsi = $listsustenancebyiidArray->responsi;
							 $sus_status = $listsustenancebyiidArray->sus_status;

							 $listsus .= $sn." - ".$mc." - ".$targetdate." - ".$responsi." - ".$sus_status."\r";
						 }


						$report = array($statusdata,$doc_no,$version_no,$proj_code,$ref_no,$origi_dept,$origi_name,$origi_date,$approv_dept,$approv_name,$approv_date,"","",$activity,$activity_desc,$benifit_area,$plantname,$ktheme,$tepl_plant,$idea,$prob_stmt,$count_measur,$before_img,$after_img,$cs_yield,$cs_cycletime,$cs_cost,$cs_manpower,$cs_consumables,$cs_others,$cs_totalsavings,$cs_appr_ie,$cs_appr_acco,$teamnames,$root_cause,$root_cause_exp,$brf_exp_precond,$brf_exp_impdone,$horizradio,$horizontal1,$horizontal2,$horizontal3,$horizontal4,$listsus,$benifits);

						fputcsv($file, $report);



						/*
						$listteammembersbyiid = $this->mapi->listteammembersbyiid($idea_id);
						//$teamnames = "EmpID - TeamName - Function \r";
						foreach ($listteammembersbyiid as $rowArrayTeam) {
							 $teamid = $rowArrayTeam->teamid;
							 $empid = $rowArrayTeam->empid;
							 $teamname = $rowArrayTeam->teamname;
							 $function = $rowArrayTeam->function;

							 //$teamnames .= $empid." - ".$teamname." - ".$function."\r";

							 $report2 = array("","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","",$empid,$teamname,$function,"","","","","","","","","","","");

	 						fputcsv($file, $report2);
						}
						*/



						}



					//fputcsv($file, $entityid);

					fclose($file);
					exit;




			}




				/********************************
				 SUPER ADMIN - listmyideasbystatus
				********************************/
				public function listmyideasbystatus($status) {

					$viv_user_type = $this->session->userdata('viv_user_type');
					$viv_profile_id = $this->session->userdata('viv_profile_id');
					$viv_email = $this->session->userdata('viv_email');

					$status_ex = explode(',',$status);


							$this->db->select('*');
							$this->db->from('ideas');
							$this->db->where_in('status', $status_ex);
							//$this->db->where('profileid', $wl_profileid);
							$this->db->order_by('id', 'DESC');
							$sql = $this->db->get();
							//return $sql->num_rows();
							return $sql->result();



				}




					/********************************
					SUPER ADMIN - listusersbyprofileid
					 ********************************/
					 public function listusersbyprofileid($profile_id) {

						$this->db->select('*');
						$this->db->from('usermang');
 						$this->db->where('profile_id',$profile_id);
 						$sql = $this->db->get();
						return $sql->result();
						//return $sql->num_rows();
						}




			/********************************
			 getempinfobyempid
			 ********************************/
			 public function getempinfobyempid() {
					$typeempid = $this->input->post('typeempid');

					$this->db->select('*');
					$this->db->from('usermang');
					$this->db->where('email', $typeempid);
					//$this->db->order_by('panel_model', 'ASC');
					$sql = $this->db->get();
					//echo json_encode(array('result'=>$sql->result()));

					foreach ($sql->result() as $sqlArray) {
							 $fname =    $sqlArray->fname;
							 $depart =    $sqlArray->depart;
							 $domain =    $sqlArray->domain;
				 }



				  $data['fname'] = $fname;
					$data['depart'] = $depart;
					$data['domain'] = $domain;
					$json = json_encode($data);
					echo $json;

			 }



	 	/********************************
	 	ajaxgetdeptnamebyempid
	 	********************************/
	 	public function ajaxgetdeptnamebyempid() {
	 		  $email = $this->input->post('email');

	 			$this->db->select('depart');
	 			$this->db->from('usermang');
	 			$this->db->where('email', $email);
	 			$this->db->group_by('depart');
	  			//$this->db->order_by('panel_model', 'ASC');
	 			$sql = $this->db->get();
	 			echo json_encode(array('result'=>$sql->result()));
	 	}



		/********************************
	 	ajaxgetemail2byempid
	 	********************************/
	 	public function ajaxgetemail2byempid() {
	 		  $email = $this->input->post('email');

				$this->db->select('email');
				$this->db->select('email2');
				$this->db->select('fname');
	 			$this->db->select('depart');
	 			$this->db->from('usermang');
	 			$this->db->where('email', $email);
 	  		//$this->db->order_by('panel_model', 'ASC');
	 			$sql = $this->db->get();
	 			echo json_encode(array('result'=>$sql->result()));

				/*
				foreach ($sql->result() as $sqlArray) {
						$email2 =    $sqlArray->email2;
						//$depart =    $sqlArray->depart;
			 }
			 echo $email2;
			 */


	 	}


		/********************************
		 SUPER ADMIN - totalmonthkaizenbyyear
		********************************/
		public function totalmonthkaizenbyyear($uri5) {

			$viv_user_type = $this->session->userdata('viv_user_type');
			$viv_profile_id = $this->session->userdata('viv_profile_id');
			$viv_email = $this->session->userdata('viv_email');

				for($i=1;$i<=12;$i++) {
					$str_i = strlen($i);
					if($str_i>1) { $i = $i; } else { $i = '0'.$i;  }

					$month_v =  $this->count_totalmonthkaizenbyyear($i,$uri5);
					$month_array[] = $month_v;
				}
				$month_array_im = implode(",",$month_array);
				return $month_array_im;




		}









			/********************************
			 SUPER ADMIN - count_totalmonthkaizenbyyear
			********************************/
			public function count_totalmonthkaizenbyyear($month,$year) {

				$viv_user_type = $this->session->userdata('viv_user_type');
				$viv_profile_id = $this->session->userdata('viv_profile_id');
				$viv_email = $this->session->userdata('viv_email');

				$status = '1,2,3,4,5,6,7';
				$status_ex = explode(',',$status);

				if($viv_user_type=='TRMMADMIN') {

						$this->db->select('*');
						$this->db->from('ideas');
						$this->db->where_in('status', $status_ex);
						$this->db->where('smonth', $month);
						$this->db->where('syear', $year);
						$this->db->order_by('id', 'DESC');
						$sql = $this->db->get();
						return $sql->num_rows();

				} elseif($viv_user_type=='TRMMEMP')	 {
						$this->db->select('*');
						$this->db->from('ideas');
						$this->db->where_in('status', $status_ex);
						$this->db->where('profile_id', $viv_profile_id);
						$this->db->where('smonth', $month);
						$this->db->where('syear', $year);
						$this->db->order_by('id', 'DESC');
						$sql = $this->db->get();
						return $sql->num_rows();

				}


			}







	/********************************
	SUPER ADMIN - updateuserpassword
	********************************/
	public function updateuserpassword() {
		$emppassword = MD5($this->input->post('emppassword'));
	  $profileid = $this->input->post('profileid');



	 $viv_email = $this->session->userdata('viv_email');
	 $viv_profile_id = $this->session->userdata('viv_profile_id');

	 $randomiduniq = $this->randomiduniq();
	 $currentdatetime = $this->currentdatetime();



		 $data = array(
			 'password' => $emppassword
		  );

		 $this->db->where('profile_id', $profileid);
	   $this->db->update('usermang', $data);



		 if($this->db->affected_rows() > 0) {
				 redirect('admin/kaizenidea/useraccounts/editusers/'.$profileid.'/mgefgerspass1');
		 } else {
				 redirect('admin/kaizenidea/useraccounts/editusers/'.$profileid.'/mgefgerspass0');
		 }




}




	/********************************
	SUPER ADMIN - updateuserpassword_user
	********************************/
	public function updateuserpassword_user() {
		$emppassword = MD5($this->input->post('emppassword'));
	  $profileid = $this->input->post('profileid');



	 $viv_email = $this->session->userdata('viv_email');
	 $viv_profile_id = $this->session->userdata('viv_profile_id');

	 $randomiduniq = $this->randomiduniq();
	 $currentdatetime = $this->currentdatetime();



		 $data = array(
			 'password' => $emppassword
		  );

		 $this->db->where('profile_id', $profileid);
	   $this->db->update('usermang', $data);



		 if($this->db->affected_rows() > 0) {
				 redirect('admin/kaizenidea/dashboard');
		 } else {
				 redirect('admin/kaizenidea/dashboard');
		 }




}




	/********************************
	SUPER ADMIN - updatenewpassword_user
	********************************/
	public function updatenewpassword_user() {
		$emppassword = MD5($this->input->post('emppassword'));
		$profileid = $this->input->post('uri3');
	  $uri4 = $this->input->post('uri4');

	 $randomiduniq = $this->randomiduniq();
	 $currentdatetime = $this->currentdatetime();



		 $data = array(
			 'password' => $emppassword
		  );

		 $this->db->where('profile_id', $profileid);
		 $this->db->where('password', $uri4);
	   $this->db->update('usermang', $data);



		 if($this->db->affected_rows() > 0) {
				 redirect('admin/kaizenidea/dashboard');
		 } else {
				 redirect('admin/logout');
		 }




}






		/********************************
		 SUPER ADMIN - totalmonthkaizenbyyear_status
		********************************/
		public function totalmonthkaizenbyyear_status($uri5,$status) {

			$viv_user_type = $this->session->userdata('viv_user_type');
			$viv_profile_id = $this->session->userdata('viv_profile_id');
			$viv_email = $this->session->userdata('viv_email');

				for($i=1;$i<=12;$i++) {
					$str_i = strlen($i);
					if($str_i>1) { $i = $i; } else { $i = '0'.$i;  }

					$month_v =  $this->count_totalmonthkaizenbyyear_status($i,$uri5,$status);
					$month_array[] = $month_v;
				}
				$month_array_im = implode(",",$month_array);
				return $month_array_im;




		}






		/********************************
		 SUPER ADMIN - count_totalmonthkaizenbyyear_status
		********************************/
		public function count_totalmonthkaizenbyyear_status($month,$year,$status) {

			$viv_user_type = $this->session->userdata('viv_user_type');
			$viv_profile_id = $this->session->userdata('viv_profile_id');
			$viv_email = $this->session->userdata('viv_email');

		//	$status = '1,2,3,4,5';
		//	$status_ex = explode(',',$status);

			if($viv_user_type=='TRMMADMIN') {

					$this->db->select('*');
					$this->db->from('ideas');
				//	$this->db->where_in('status', $status_ex);
					$this->db->where('smonth', $month);
					$this->db->where('syear', $year);
					$this->db->where('status', $status);
					$this->db->order_by('id', 'DESC');
					$sql = $this->db->get();
					return $sql->num_rows();

			} elseif($viv_user_type=='TRMMEMP')	 {
					$this->db->select('*');
					$this->db->from('ideas');
				//	$this->db->where_in('status', $status_ex);
					$this->db->where('profile_id', $viv_profile_id);
					$this->db->where('smonth', $month);
					$this->db->where('syear', $year);
					$this->db->where('status', $status);
					$this->db->order_by('id', 'DESC');
					$sql = $this->db->get();
					return $sql->num_rows();

			}


		}





				/********************************
	 			SUPER ADMIN - findmanageremailbypid
	 		 ********************************/
	 		 public function findmanageremailbypid($emp_dept) {
	 			 //$wl_profileid = $this->session->userdata('rsa_profileid');

	 				$this->db->select('*');
	 				$this->db->from('usermang');
					$this->db->where('depart', $emp_dept);
					$this->db->where('user_type', 'TRMMMANG');
	 		 		$this->db->limit(1);
	 				$sql = $this->db->get();
	 				//return $sql->result();
	 				//return $sql->num_rows();
	 				foreach ($sql->result() as $listtopicsbyidsRow) {
	 					$email = $listtopicsbyidsRow->email;
	  					//$fullname = $listtopicsbyidsRow->rname;
	 					return $email;
	 				}

	 		 }


			 /********************************
			 SUPER ADMIN - findmanageremailbydid
			********************************/
			public function findmanageremailbydid($emp_domain) {
				//$wl_profileid = $this->session->userdata('rsa_profileid');

				 $this->db->select('*');
				 $this->db->from('usermang');
				 $this->db->where('domain', $emp_domain);
				 $this->db->where('user_type', 'TRMMMANG');
				 $this->db->limit(1);
				 $sql = $this->db->get();
				 //return $sql->result();
				 //return $sql->num_rows();
				 foreach ($sql->result() as $listtopicsbyidsRow) {
					 $email = $listtopicsbyidsRow->email;
						 //$fullname = $listtopicsbyidsRow->rname;
					 return $email;
				 }

			}




			 /********************************
			 SUPER ADMIN - findmanagernamebypid
			********************************/
			public function findmanagernamebypid($emp_dept) {
				//$wl_profileid = $this->session->userdata('rsa_profileid');

				 $this->db->select('*');
				 $this->db->from('usermang');
				 $this->db->where('depart', $emp_dept);
				 $this->db->where('user_type', 'TRMMMANG');
				 $this->db->limit(1);
				 $sql = $this->db->get();
				 //return $sql->result();
				 //return $sql->num_rows();
				 foreach ($sql->result() as $listtopicsbyidsRow) {
					 $fname = $listtopicsbyidsRow->fname;
						 //$fullname = $listtopicsbyidsRow->rname;
					 return $fname;
				 }

			}



			/********************************
			SUPER ADMIN - findallmanagernamebypid
		 ********************************/
		 public function findallmanagernamebypid($emp_dept) {
			 //$wl_profileid = $this->session->userdata('rsa_profileid');

				$this->db->select('*');
				$this->db->from('usermang');
				$this->db->where('depart', $emp_dept);
				$this->db->where('user_type', 'TRMMMANG');
				//$this->db->limit(1);
				$sql = $this->db->get();
				return $sql->result();

				/*
				//return $sql->num_rows();
				foreach ($sql->result() as $listtopicsbyidsRow) {
					$fname = $listtopicsbyidsRow->fname;
						//$fullname = $listtopicsbyidsRow->rname;
					return $fname;
				}
				*/

		 }




						 /********************************
						 SUPER ADMIN - findmanagernamebydid
						********************************/
						public function findmanagernamebydid($emp_domain) {
							//$wl_profileid = $this->session->userdata('rsa_profileid');

							 $this->db->select('*');
							 $this->db->from('usermang');
							 $this->db->where('domain', $emp_domain);
							 $this->db->where('user_type', 'TRMMMANG');
							 $this->db->limit(1);
							 $sql = $this->db->get();
							 //return $sql->result();
							 //return $sql->num_rows();
							 foreach ($sql->result() as $listtopicsbyidsRow) {
								 $fname = $listtopicsbyidsRow->fname;
									 //$fullname = $listtopicsbyidsRow->rname;
								 return $fname;
							 }

						}


						/********************************
						SUPER ADMIN - findmanagerdepartmentbyeid
					 ********************************/
					 public function findmanagerdepartmentbyeid($emp_id) {
						 //$wl_profileid = $this->session->userdata('rsa_profileid');

							$this->db->select('*');
							$this->db->from('usermang');
							$this->db->where('email', $emp_id);
							$this->db->where('user_type', 'TRMMMANG');
							$this->db->limit(1);
							$sql = $this->db->get();
							//return $sql->result();
							//return $sql->num_rows();
							foreach ($sql->result() as $listtopicsbyidsRow) {
								$depart = $listtopicsbyidsRow->depart;
									//$fullname = $listtopicsbyidsRow->rname;
								return $depart;
							}

					 }



			/********************************
			SUPER ADMIN - findfinancenamebypid
		 ********************************/
		 public function findfinancenamebypid() {
			 //$wl_profileid = $this->session->userdata('rsa_profileid');

				$this->db->select('*');
				$this->db->from('usermang');
				//$this->db->where('depart', $emp_dept);
				$this->db->where('user_type', 'TRMMFINANCE');
				$this->db->limit(1);
				$sql = $this->db->get();
				//return $sql->result();
				//return $sql->num_rows();
				foreach ($sql->result() as $listtopicsbyidsRow) {
					$fname = $listtopicsbyidsRow->fname;
						//$fullname = $listtopicsbyidsRow->rname;
					return $fname;
				}

		 }



		 /********************************
		 SUPER ADMIN - findfinanceemailbypid
		********************************/
		public function findfinanceemailbypid() {
			//$wl_profileid = $this->session->userdata('rsa_profileid');

			 $this->db->select('*');
			 $this->db->from('usermang');
			 //$this->db->where('depart', $emp_dept);
			 $this->db->where('user_type', 'TRMMFINANCE');
			 $this->db->limit(1);
			 $sql = $this->db->get();
			 //return $sql->result();
			 //return $sql->num_rows();
			 foreach ($sql->result() as $listtopicsbyidsRow) {
				 $email = $listtopicsbyidsRow->email;
					 //$fullname = $listtopicsbyidsRow->rname;
				 return $email;
			 }

		}



		/********************************
	  SUPER ADMIN - findiedeptemailbypid
	 ********************************/
	 public function findiedeptemailbypid() {
	 	//$wl_profileid = $this->session->userdata('rsa_profileid');

	 	 $this->db->select('*');
	 	 $this->db->from('usermang');
	 	 //$this->db->where('depart', $emp_dept);
	 	 $this->db->where('user_type', 'TRMMIEDEPT');
	 	 $this->db->limit(1);
	 	 $sql = $this->db->get();
	 	 //return $sql->result();
	 	 //return $sql->num_rows();
	 	 foreach ($sql->result() as $listtopicsbyidsRow) {
	 		 $email = $listtopicsbyidsRow->email;
	 			 //$fullname = $listtopicsbyidsRow->rname;
	 		 return $email;
	 	 }

	 }




		 			/********************************
		 			SUPER ADMIN - findiedeptnamebypid
		 		 ********************************/
		 		 public function findiedeptnamebypid() {
		 			 //$wl_profileid = $this->session->userdata('rsa_profileid');

		 				$this->db->select('*');
		 				$this->db->from('usermang');
		 				//$this->db->where('depart', $emp_dept);
		 				$this->db->where('user_type', 'TRMMIEDEPT');
		 				$this->db->limit(1);
		 				$sql = $this->db->get();
		 				//return $sql->result();
		 				//return $sql->num_rows();
		 				foreach ($sql->result() as $listtopicsbyidsRow) {
		 					$fname = $listtopicsbyidsRow->fname;
		 						//$fullname = $listtopicsbyidsRow->rname;
		 					return $fname;
		 				}

		 		 }



			/********************************
			SUPER ADMIN - findmanageremail2bypid
		 ********************************/
		 public function findmanageremail2bypid($emp_dept) {
			 //$wl_profileid = $this->session->userdata('rsa_profileid');

				$this->db->select('*');
				$this->db->from('usermang');
				$this->db->where('depart', $emp_dept);
				$this->db->where('user_type', 'TRMMMANG');
				$this->db->limit(1);
				$sql = $this->db->get();
				//return $sql->result();
				//return $sql->num_rows();
				foreach ($sql->result() as $listtopicsbyidsRow) {
					$email2 = $listtopicsbyidsRow->email2;
						//$fullname = $listtopicsbyidsRow->rname;
					return $email2;
				}

		 }


		 /********************************
		 SUPER ADMIN - findmanageremail2bydid
		********************************/
		public function findmanageremail2bydid($emp_domain) {
			//$wl_profileid = $this->session->userdata('rsa_profileid');

			 $this->db->select('*');
			 $this->db->from('usermang');
			 $this->db->where('domain', $emp_domain);
			 $this->db->where('user_type', 'TRMMMANG');
			 $this->db->limit(1);
			 $sql = $this->db->get();
			 //return $sql->result();
			 //return $sql->num_rows();
			 foreach ($sql->result() as $listtopicsbyidsRow) {
				 $email2 = $listtopicsbyidsRow->email2;
					 //$fullname = $listtopicsbyidsRow->rname;
				 return $email2;
			 }

		}




		 			/********************************
		 			SUPER ADMIN - findfinanceemail2bypid
		 		 ********************************/
		 		 public function findfinanceemail2bypid() {
		 			 //$wl_profileid = $this->session->userdata('rsa_profileid');

		 				$this->db->select('*');
		 				$this->db->from('usermang');
		 				//$this->db->where('depart');
		 				$this->db->where('user_type', 'TRMMFINANCE');
		 				$this->db->limit(1);
		 				$sql = $this->db->get();
		 				//return $sql->result();
		 				//return $sql->num_rows();
		 				foreach ($sql->result() as $listtopicsbyidsRow) {
		 					$email2 = $listtopicsbyidsRow->email2;
		 						//$fullname = $listtopicsbyidsRow->rname;
		 					return $email2;
		 				}

		 		 }


				 /********************************
				 SUPER ADMIN - findiedeptemail2bypid
				********************************/
				public function findiedeptemail2bypid() {
					//$wl_profileid = $this->session->userdata('rsa_profileid');

					 $this->db->select('*');
					 $this->db->from('usermang');
					 //$this->db->where('depart');
					 $this->db->where('user_type', 'TRMMIEDEPT');
					 $this->db->limit(1);
					 $sql = $this->db->get();
					 //return $sql->result();
					 //return $sql->num_rows();
					 foreach ($sql->result() as $listtopicsbyidsRow) {
						 $email2 = $listtopicsbyidsRow->email2;
							 //$fullname = $listtopicsbyidsRow->rname;
						 return $email2;
					 }

				}


				 /********************************
				 SUPER ADMIN - findieemail2bypid
				********************************/
				public function findieemail2bypid() {
					//$wl_profileid = $this->session->userdata('rsa_profileid');

					 $this->db->select('*');
					 $this->db->from('usermang');
					 //$this->db->where('depart');
					 $this->db->where('user_type', 'TRMMIEDEPT');
					 $this->db->limit(1);
					 $sql = $this->db->get();
					 //return $sql->result();
					 //return $sql->num_rows();
					 foreach ($sql->result() as $listtopicsbyidsRow) {
						 $email2 = $listtopicsbyidsRow->email2;
							 //$fullname = $listtopicsbyidsRow->rname;
						 return $email2;
					 }

				}




		 /********************************
		 SUPER ADMIN - findmanagerdepartbypid
		********************************/
		public function findmanagerdepartbypid($emp_dept) {
			//$wl_profileid = $this->session->userdata('rsa_profileid');

			 $this->db->select('*');
			 $this->db->from('usermang');
			 $this->db->where('depart', $emp_dept);
			 $this->db->where('user_type', 'TRMMMANG');
			 $this->db->limit(1);
			 $sql = $this->db->get();
			 //return $sql->result();
			 //return $sql->num_rows();
			 foreach ($sql->result() as $listtopicsbyidsRow) {
				 $depart = $listtopicsbyidsRow->depart;
					 //$fullname = $listtopicsbyidsRow->rname;
				 return $depart;
			 }

		}


		/********************************
		 SUPER ADMIN - count_totalmonthbyyear
		********************************/
		public function count_totalmonthbyyear($month,$year,$domain,$dept,$type) {

			$viv_user_type = $this->session->userdata('viv_user_type');
			$viv_profile_id = $this->session->userdata('viv_profile_id');
			$viv_email = $this->session->userdata('viv_email');

			if(empty($month) || $month =='ALL') { $month = ''; }
			if(empty($year) || $year =='ALL') { $year = ''; }
			if(empty($dept) || $dept =='ALL') { $dept = ''; }
			if(empty($domain) || $domain =='ALL') { $domain = ''; }


			if($type=='approved') {

				$status = '2,4,6';
				$status_ex = explode(',',$status);

					$this->db->select('*');
					$this->db->from('ideas');
					$this->db->where_in('status', $status_ex);
					//$this->db->like('smonth', $month);
					//$this->db->like('syear', $year);
					$this->db->like('origi_month', $month);
					$this->db->like('origi_year', $year);
					$this->db->like('origi_domain', $domain);
					$this->db->like('origi_dept', $dept);
					$this->db->order_by('id', 'DESC');
					$sql = $this->db->get();
					return $sql->num_rows();

			}

			elseif($type=='submitted') {

				$status = '1,2,3,4,5,6,7';
				$status_ex = explode(',',$status);

					$this->db->select('*');
					$this->db->from('ideas');
					$this->db->where_in('status', $status_ex);
					//$this->db->like('smonth', $month);
					//$this->db->like('syear', $year);
					$this->db->like('origi_month', $month);
					$this->db->like('origi_year', $year);
					$this->db->like('origi_domain', $domain);
					$this->db->like('origi_dept', $dept);
					$this->db->order_by('id', 'DESC');
					$sql = $this->db->get();
					return $sql->num_rows();

			}

			elseif($type=='rejected') {

				$status = '3,5,7';
				$status_ex = explode(',',$status);

					$this->db->select('*');
					$this->db->from('ideas');
					$this->db->where_in('status', $status_ex);
					//$this->db->like('smonth', $month);
					//$this->db->like('syear', $year);
					$this->db->like('origi_month', $month);
					$this->db->like('origi_year', $year);
					$this->db->like('origi_domain', $domain);
					$this->db->like('origi_dept', $dept);
					$this->db->order_by('id', 'DESC');
					$sql = $this->db->get();
					return $sql->num_rows();

			}

			elseif($type=='pendingapproval') {

				$status = '1';
				$status_ex = explode(',',$status);

					$this->db->select('*');
					$this->db->from('ideas');
					$this->db->where_in('status', $status_ex);
					//$this->db->like('smonth', $month);
					//$this->db->like('syear', $year);
					$this->db->like('origi_month', $month);
					$this->db->like('origi_year', $year);
					$this->db->like('origi_domain', $domain);
					$this->db->like('origi_dept', $dept);
					$this->db->order_by('id', 'DESC');
					$sql = $this->db->get();
					return $sql->num_rows();

			}

		}



		/********************************
		SUPER ADMIN - count_listempbyusertype
		 ********************************/
		 public function count_listempbyusertype($usertype) {

			 if($usertype=='1') { $usertype_name = 'TRMMADMIN'; }
			 elseif($usertype=='3') { $usertype_name = 'TRMMMANG'; }
			 elseif($usertype=='4') { $usertype_name = 'TRMMEMP'; }
			 elseif($usertype=='5') { $usertype_name = 'TRMMFINANCE'; }
			 elseif($usertype=='6') { $usertype_name = 'TRMMITDEPT'; }
			 elseif($usertype=='') { $usertype_name = ''; }

					$this->db->select('*');
					$this->db->from('usermang');
 					$this->db->like('user_type',$usertype_name);
			 		//$this->db->where('courseid',$courseid);
					$sql = $this->db->get();
					//return $sql->result();
					return $sql->num_rows();
			}


			/********************************
			 SUPER ADMIN - listmyideas_verifiy_iedept
			********************************/
			public function listmyideas_verifiy_iedept() {

				$viv_user_type = $this->session->userdata('viv_user_type');
				$viv_profile_id = $this->session->userdata('viv_profile_id');
				$viv_email = $this->session->userdata('viv_email');

				$uri5 = $this->uri->segment(5);

				if($uri5=='totalsubmitted'){
						$status = '2,4,5,6,7';
						$status_ex = explode(',',$status);

						$status_iedept = '1,2,3';
						$status_iedept_ex = explode(',',$status_iedept);
				} elseif($uri5=='totalpending') {
						$status = '2,4,5,6,7';
						$status_ex = explode(',',$status);

						$status_iedept = '1';
						$status_iedept_ex = explode(',',$status_iedept);

				} elseif($uri5=='totalapproved') {
						$status = '2,4,5,6,7';
						$status_ex = explode(',',$status);

						$status_iedept = '2';
						$status_iedept_ex = explode(',',$status_iedept);

				} elseif($uri5=='totalrejected') {

					$status = '2,4,5,6,7';
					$status_ex = explode(',',$status);

					$status_iedept = '3';
					$status_iedept_ex = explode(',',$status_iedept);

				} else {

					$status = '2,4,5,6,7';
					$status_ex = explode(',',$status);

					$status_iedept = '1,2,3';
					$status_iedept_ex = explode(',',$status_iedept);

				}


				$this->db->select('*');
				$this->db->from('ideas');
				$this->db->where_in('status', $status_ex);
				$this->db->where_in('iedept_status', $status_iedept_ex);
				//$this->db->where('profileid', $wl_profileid);
				$this->db->order_by('id', 'DESC');
				$sql = $this->db->get();
				return $sql->result();




			}




				/********************************
				 SUPER ADMIN - count_listmyideas_verifiy_iedept
				********************************/
				public function count_listmyideas_verifiy_iedept() {


					$viv_user_type = $this->session->userdata('viv_user_type');
					$viv_profile_id = $this->session->userdata('viv_profile_id');
					$viv_email = $this->session->userdata('viv_email');

					$uri5 = $this->uri->segment(5);

					if($uri5=='totalsubmitted'){
							$status = '2,4,5,6,7';
							$status_ex = explode(',',$status);

							$status_iedept = '1,2,3';
							$status_iedept_ex = explode(',',$status_iedept);
					} elseif($uri5=='totalpending') {
							$status = '2,4,5,6,7';
							$status_ex = explode(',',$status);

							$status_iedept = '1';
							$status_iedept_ex = explode(',',$status_iedept);

					} elseif($uri5=='totalapproved') {
							$status = '2,4,5,6,7';
							$status_ex = explode(',',$status);

							$status_iedept = '2';
							$status_iedept_ex = explode(',',$status_iedept);

					} elseif($uri5=='totalrejected') {

						$status = '2,4,5,6,7';
						$status_ex = explode(',',$status);

						$status_iedept = '3';
						$status_iedept_ex = explode(',',$status_iedept);

					} else {

						$status = '2,4,5,6,7';
						$status_ex = explode(',',$status);

						$status_iedept = '1,2,3';
						$status_iedept_ex = explode(',',$status_iedept);

					}


					$this->db->select('*');
					$this->db->from('ideas');
					$this->db->where_in('status', $status_ex);
					$this->db->where_in('iedept_status', $status_iedept_ex);
					//$this->db->where('profileid', $wl_profileid);
					$this->db->order_by('id', 'DESC');
					$sql = $this->db->get();
					return $sql->num_rows();


				}


				/********************************
				 SUPER ADMIN - count_listmyideas_driapproved_iedept
				********************************/
				public function count_listmyideas_driapproved_iedept() {

					$viv_user_type = $this->session->userdata('viv_user_type');
					$viv_profile_id = $this->session->userdata('viv_profile_id');
					$viv_email = $this->session->userdata('viv_email');


					$status = '2,4,5,6,7';
				  $status_ex = explode(',',$status);

					$iedept_status = '1,2,3';
				  $status_iedept = explode(',',$iedept_status);


					$this->db->select('*');
					$this->db->from('ideas');
					$this->db->where_in('status', $status_ex);
					$this->db->where_in('iedept_status', $status_iedept);
					//$this->db->where('profileid', $wl_profileid);
					$this->db->order_by('id', 'DESC');
					$sql = $this->db->get();
					return $sql->num_rows();

				}



						/********************************
						 SUPER ADMIN - count_listmyideas_verifiy_sts_iedept
						********************************/
						public function count_listmyideas_verifiy_sts_iedept($status_iedept) {

							$viv_user_type = $this->session->userdata('viv_user_type');
							$viv_profile_id = $this->session->userdata('viv_profile_id');
							$viv_email = $this->session->userdata('viv_email');

							//$status = '4,5';
							//$status_ex = explode(',',$status);

							//$status_iedept = '1,2,3';
							//$status_iedept_ex = explode(',',$status_iedept);


							$this->db->select('*');
							$this->db->from('ideas');
							//$this->db->where_in('status', $status_ex);
							//$this->db->where_in('iedept_status', $status_iedept);

							if($status_iedept==1) {
								$status = '2,4,6';
								$status_ex = explode(',',$status);

								$this->db->where_in('status', $status_ex);
								$this->db->where_in('iedept_status', $status_iedept);
							} elseif($status_iedept==2) {
								$status = '2,4,6';
								$status_ex = explode(',',$status);

								$this->db->where_in('status', $status_ex);
								$this->db->where_in('iedept_status', $status_iedept);
							} elseif($status_iedept==3) {
								$status = '3,5,7';
								$status_ex = explode(',',$status);

								$this->db->where_in('status', $status_ex);
								$this->db->where_in('iedept_status', $status_iedept);
							}




							//$this->db->where('profileid', $wl_profileid);
							$this->db->order_by('id', 'DESC');
							$sql = $this->db->get();
							return $sql->num_rows();


						}




			 	 /********************************
			 	 updateideastatus_iedept
			 	 ********************************/
			 	 public function updateideastatus_iedept() {

			 		 $viv_user_type = $this->session->userdata('viv_user_type');
			 		 $viv_profile_id = $this->session->userdata('viv_profile_id');
			 		 $viv_email = $this->session->userdata('viv_email');

			 		 $randomiduniq = $this->randomiduniq();
			 		 $currentdatetime = $this->currentdatetime();

			 		$ideaid = $this->input->post('ideaid');
			 		$status = $this->input->post('status');

					$iedept_reject_reason = $this->input->post('iedept_reject_reason'); if(empty($iedept_reject_reason)) { $iedept_reject_reason = ''; }

					$hold_reason = $this->input->post('hold_reason');
					if(empty($hold_reason)) { $hold_reason = ''; }



			 		if($status=='approve') {
			 			  $upstatus = '4';
			 				$hodstatus = '2';
							$hold_status = '0';
							$emp_edit_status = '1';
			 		} elseif($status=='reject') {
			 				$upstatus = '5';
			 				$hodstatus = '3';
							$hold_status = '0';
							$emp_edit_status = '1';
			 		} elseif($status=='hold') {
				      $upstatus = '2';
				      $hodstatus = '1';
				      $emp_edit_status = '0';
				      $hold_status = '1';

				        $data_i = array(

				                   'idea_id'=>$ideaid,
				                   'hold_id'=>'HOLD'.$randomiduniq,
				                   'idea_type'=>'IEDEPT',
				                   'iemail'=>$viv_email,
				                   'istatus'=>1,
													 'hold_reason'=>$hold_reason,
 				                   'idatetime'=>$currentdatetime
				        );
				        $this->db->insert('idea_hold_status', $data_i);
				  }

			 		$data = array(
			 							 'iedept_email'=>$viv_email,
			 							 'iedept_status'=>$hodstatus,
										 'iedept_datetime'=>$currentdatetime,
			 							 'iedept_reject_reason'=>$iedept_reject_reason,
										 'hold_status'=>$hold_status,
			 							 'status'=>$upstatus,
										 'emp_edit_status'=>$emp_edit_status
			 	  );

			 		$this->db->where('idea_id', $ideaid);
			 		$this->db->update('ideas', $data);

			 		if($this->db->affected_rows() > 0) {
								if($status=='approve') {

										$count_finance_status_ideaid = $this->count_finance_status_ideaid($ideaid);
										if($count_finance_status_ideaid>0){
											$finance_email = $this->mapi->findfinanceemail2bypid();
											//TRigger Email
							        $this->memail->triggerkaizen_iedeptappr($finance_email,$ideaid,$currentdatetime,$randomiduniq);
										}
								}


			 				//redirect('admin/kaizenidea/ideamang/postidea/'.$ideaid.'/mgefge1234');
			 				redirect('admin/kaizenidea/ideamang/ideaverification');

			 		} else {
			 				//redirect('admin/kaizenidea/ideamang/postidea/'.$ideaid.'/mgcd1c3922');
			 				redirect('admin/kaizenidea/ideamang/ideaverification');
			 		}



			 	 }





				 			 	 /********************************
				 			 	 updateideastatus_finance
				 			 	 ********************************/
				 			 	 public function updateideastatus_finance() {

				 			 		 $viv_user_type = $this->session->userdata('viv_user_type');
				 			 		 $viv_profile_id = $this->session->userdata('viv_profile_id');
				 			 		 $viv_email = $this->session->userdata('viv_email');

				 			 		 $randomiduniq = $this->randomiduniq();
				 			 		 $currentdatetime = $this->currentdatetime();

				 			 		$ideaid = $this->input->post('ideaid');
				 			 		$status = $this->input->post('status');

									$fin_reject_reason = $this->input->post('fin_reject_reason'); if(empty($fin_reject_reason)) { $fin_reject_reason = ''; }

									$hold_reason = $this->input->post('hold_reason');
									if(empty($hold_reason)) { $hold_reason = ''; }

				 			 		if($status=='approve') {
				 			 			  $upstatus = '6';
				 			 				$hodstatus = '2';
											$emp_edit_status = '1';
											$hold_status = '0';
				 			 		} elseif($status=='reject') {
				 			 				$upstatus = '7';
				 			 				$hodstatus = '3';
											$emp_edit_status = '1';
								      $hold_status = '0';
				 			 		} elseif($status=='hold') {
								      $upstatus = '4';
								      $hodstatus = '1';
								      $emp_edit_status = '0';
								      $hold_status = '1';

								        $data_i = array(

								                   'idea_id'=>$ideaid,
								                   'hold_id'=>'HOLD'.$randomiduniq,
								                   'idea_type'=>'FINANCE',
								                   'iemail'=>$viv_email,
								                   'istatus'=>1,
								                   'hold_reason'=>$hold_reason,
								                   'idatetime'=>$currentdatetime
								        );
								        $this->db->insert('idea_hold_status', $data_i);
								  }

				 			 		$data = array(
				 			 							 'finance_email'=>$viv_email,
				 			 							 'finance_status'=>$hodstatus,
				 			 							 'finance_datetime'=>$currentdatetime,
														 'fin_reject_reason'=>$fin_reject_reason,
				 			 							 'status'=>$upstatus,
														 'hold_status'=>$hold_status,
								             'emp_edit_status'=>$emp_edit_status
				 			 	  );

				 			 		$this->db->where('idea_id', $ideaid);
				 			 		$this->db->update('ideas', $data);

				 			 		if($this->db->affected_rows() > 0) {
				 			 				//redirect('admin/kaizenidea/ideamang/postidea/'.$ideaid.'/mgefge1234');
				 			 				redirect('admin/kaizenidea/ideamang/ideaverification');

				 			 		} else {
				 			 				//redirect('admin/kaizenidea/ideamang/postidea/'.$ideaid.'/mgcd1c3922');
				 			 				redirect('admin/kaizenidea/ideamang/ideaverification');
				 			 		}



				 			 	 }


				/********************************
				 SUPER ADMIN - count_finance_status_ideaid
				********************************/
				public function count_finance_status_ideaid($ideaid)	 {

					$viv_user_type = $this->session->userdata('viv_user_type');
					$viv_profile_id = $this->session->userdata('viv_profile_id');
					$viv_email = $this->session->userdata('viv_email');


					$this->db->select('*');
					$this->db->from('ideas');
					$this->db->where('idea_id', $ideaid);
					$this->db->where('finance_status', 1);
					//$this->db->where('profileid', $wl_profileid);
					$this->db->order_by('id', 'DESC');
					$sql = $this->db->get();
					return $sql->num_rows();

				}



				 /********************************
					SUPER ADMIN - count_listmyideas_verifiy_finance
				 ********************************/
				 public function count_listmyideas_verifiy_finance() {

					 $viv_user_type = $this->session->userdata('viv_user_type');
					 $viv_profile_id = $this->session->userdata('viv_profile_id');
					 $viv_email = $this->session->userdata('viv_email');

					 $fin_status = '1,2,3';
					 $fin_status_ex = explode(',',$fin_status);

					 $status = '4,6,7';
					 $status_ex = explode(',',$status);


					 $this->db->select('*');
					 $this->db->from('ideas');
					 $this->db->where_in('finance_status', $fin_status_ex);
					 $this->db->where_in('status', $status_ex);
					 $this->db->order_by('id', 'DESC');
					 $sql = $this->db->get();
					 return $sql->num_rows();

				 }


				 /********************************
					 SUPER ADMIN - count_listmyideas_verifiy_sts_finance
					********************************/
					public function count_listmyideas_verifiy_sts_finance($status) {

						$viv_user_type = $this->session->userdata('viv_user_type');
						$viv_profile_id = $this->session->userdata('viv_profile_id');
						$viv_email = $this->session->userdata('viv_email');

						//$status = '4,6,7';
						//$status_ex = explode(',',$status);

						//$status_iedept = '1,2,3';
						//$status_iedept_ex = explode(',',$status_iedept);

						if($status==1) {
									$status_ex = 4;
						} elseif($status==2) {
									$status_ex = 6;
						} elseif($status==3) {
									$status_ex = 7;
						}

						$this->db->select('*');
						$this->db->from('ideas');
						//$this->db->where_in('status', $status_ex);
						$this->db->where_in('finance_status', $status);
						$this->db->where('status', $status_ex);
						$this->db->order_by('id', 'DESC');
						$sql = $this->db->get();
						return $sql->num_rows();


					}



					/********************************
					 SUPER ADMIN - listmyideas_verifiy_finance
					********************************/
					public function listmyideas_verifiy_finance() {

						$viv_user_type = $this->session->userdata('viv_user_type');
						$viv_profile_id = $this->session->userdata('viv_profile_id');
						$viv_email = $this->session->userdata('viv_email');

						$uri5 = $this->uri->segment(5);

						if($uri5=='totalsubmitted'){

									$fin_status = '1,2,3';
									$fin_status_ex = explode(',',$fin_status);

									$status = '4,6,7';
									$status_ex = explode(',',$status);

						} elseif($uri5=='totalpending') {

									$fin_status = '1';
									$fin_status_ex = explode(',',$fin_status);

									$status = '4,6,7';
									$status_ex = explode(',',$status);

						} elseif($uri5=='totalapproved') {

									$fin_status = '2';
									$fin_status_ex = explode(',',$fin_status);

									$status = '4,6,7';
									$status_ex = explode(',',$status);

						} elseif($uri5=='totalrejected') {

									$fin_status = '3';
									$fin_status_ex = explode(',',$fin_status);

									$status = '4,6,7';
									$status_ex = explode(',',$status);

						} else {

									$fin_status = '1,2,3';
									$fin_status_ex = explode(',',$fin_status);

									$status = '4,6,7';
									$status_ex = explode(',',$status);

						}




						$this->db->select('*');
						$this->db->from('ideas');
						$this->db->where_in('finance_status', $fin_status_ex);
						$this->db->where_in('status', $status_ex);
						$this->db->order_by('id', 'DESC');
						$sql = $this->db->get();
						return $sql->result();

					}




/****IDEAGEN******/

	/********************************
 WEBSITE - createidea_ideagen
 ********************************/

public function createidea_ideagen() {

		$randomiduniq = $this->randomiduniq();
		$currentdatetime = $this->currentdatetime();

		$viv_profile_id = $this->session->userdata('viv_profile_id');
		//$viv_email = $this->session->userdata('viv_email');

		$sday=date('d');
		$smonth=date('m');
		$syear=date('Y');


		$ideaid     = 'IDEAGEN'.$randomiduniq;
		$uniqueurlid     = uniqid();

		$this->db->where('status', 0);
		$this->db->where('profile_id', $viv_profile_id);
		$this->db->delete('idea_gen');


		$data = array(
							 'idea_id'=>$ideaid,
							 'profile_id'=>$viv_profile_id,
							// 'emailid'=>$viv_email,
 							 'status'=>0,
               'subdatetime'=>time()
 						 );

		 $this->db->insert('idea_gen',$data);



			if($this->db->affected_rows() > 0) {
				//redirect('users/invitecolleaguesprivate/'.$challengeid.'/mge292d7e3');
				//redirect('users/editnewchallenge/'.$challengeid.'/mge292d7e3');
				redirect('admin/kaizenidea/ideagen/postidea/'.$ideaid.'');
			} else {
				//redirect('users/editnewchallenge/'.$challengeid.'/mgcd1c3922');
				redirect('dashboard');


			}




}





		/********************************
		 WEBSITE - updateidea_ideagen
		 ********************************/

		public function updateidea_ideagen() {

				$randomiduniq = $this->randomiduniq();
			 	$currentdatetime = $this->currentdatetime();

				$viv_profile_id = $this->session->userdata('viv_profile_id');

				$sday=date('d');
				$smonth=date('m');
				$syear=date('Y');

				$ideaid        = $this->input->post('ideaid');
				$activity        = $this->input->post('activity');
				$activity_desc        = $this->input->post('activity_desc');
				$version_no        = $this->input->post('version_no');
				$proj_code        = $this->input->post('proj_code');
				$doc_no        = $this->input->post('doc_no');



				$benifit_area        = $this->input->post('benifit_area');
				$ref_no        = $this->input->post('ref_no');
				$tepl_plant        = $this->input->post('tepl_plant');
				$ktheme        = $this->input->post('ktheme');
				$idea        = $this->input->post('idea');
				$plantname        = $this->input->post('plantname');
				$prob_stmt        = $this->input->post('prob_stmt');
				$count_measur        = $this->input->post('count_measur');

				//$cs_quality = $this->input->post('cs_quality');
				$cs_yield = $this->input->post('cs_yield');
				$cs_cycletime = $this->input->post('cs_cycletime');
				if(empty($cs_cycletime) || $cs_cycletime=='0') { $cs_cycletime = ''; }

				$cs_cost = $this->input->post('cs_cost');
				//$cs_material = $this->input->post('cs_material');
				$cs_manpower = $this->input->post('cs_manpower');
				if(empty($cs_manpower) || $cs_manpower=='0') { $cs_manpower = ''; }

				$cs_consumables = $this->input->post('cs_consumables');
				$cs_others = $this->input->post('cs_others');
				$cs_totalsavings = $this->input->post('cs_totalsavings');
				$cs_appr_ie = $this->input->post('cs_appr_ie');
				$cs_appr_acco = $this->input->post('cs_appr_acco');
				//$cs_standardization = $this->input->post('cs_standardization');
				//$cs_sopsp = $this->input->post('cs_sopsp');
				//$cs_drawing = $this->input->post('cs_drawing');


				$root_cause = $this->input->post('root_cause');
				$root_cause_im = implode(",",$root_cause);
				//$root_cause_exp = $this->input->post('root_cause_exp');
	 			$root_cause_block = $this->input->post('root_cause_block');

				$brf_exp_precond = $this->input->post('brf_exp_precond');
				$brf_exp_impdone = $this->input->post('brf_exp_impdone');
				$benifits = $this->input->post('benifits');


				$horizradio = $this->input->post('horizradio');
				$horizontal1 = $this->input->post('horizontal1');
				$horizontal2 = $this->input->post('horizontal2');
				$horizontal3 = $this->input->post('horizontal3');
				$horizontal4 = $this->input->post('horizontal4');
				$origi_domain = $this->input->post('origi_domain');
				$origi_dept = $this->input->post('origi_dept');
				$origi_name = $this->input->post('origi_name');
				$origi_date = $this->input->post('origi_date');
				$origi_date_ex = explode("-",$origi_date);
				$origi_day = $origi_date_ex[2];
				$origi_month = $origi_date_ex[1];
				$origi_year = $origi_date_ex[0];

				$approv_dept = $this->input->post('approv_dept');
				$approv_name = $this->input->post('approv_name');
				$approv_email = $this->input->post('approv_email');
				$approv_email2 = $this->input->post('approv_email2');

				$approv_date = $this->input->post('approv_date');



				$confirm_dept = $this->input->post('confirm_dept');
				$confirm_name = $this->input->post('confirm_name');
				$confirm_date = $this->input->post('confirm_date');


				$activity_im = implode(",",$activity);
	 			$benifit_area_im = implode(",",$benifit_area);


				$submit = $this->input->post('submit');
				if($submit=='submitit') {
					$status = 1;

					$attachm = $this->findtotalimageofkaizen_attachm_ideagen($ideaid);
					if($attachm>0) {
						$imgapprov_status = 1;
					} else {
						$imgapprov_status = 2;
					}

				} elseif($submit=='saveit') {
					$status = 0;
					$imgapprov_status = 0;
				}

				$data = array(
										'activity'=>$activity_im,
	 	               'activity_desc'=>$activity_desc,

		               'version_no'=>$version_no,
		 							 'proj_code'=>$proj_code,
									 'doc_no'=>$doc_no,
									 'benifit_area'=>$benifit_area_im,
									 'ref_no'=>$ref_no,
									 'tepl_plant'=>$tepl_plant,
									 'ktheme'=>$ktheme,
									 'idea'=>$idea,
									 'plantname'=>$plantname,
									 'prob_stmt'=>$prob_stmt,
									 'count_measur'=>$count_measur,

									//'cs_quality'=>$cs_quality,
									'cs_yield'=>$cs_yield,
									'cs_cycletime'=>$cs_cycletime,
						 		 	'cs_cost'=>$cs_cost,
						 			//'cs_material'=>$cs_material,
									//'cs_consumable'=>$cs_consumable,
						 			'cs_manpower'=>$cs_manpower,
						 			'cs_consumables'=>$cs_consumables,
						 			'cs_others'=>$cs_others,
						 			'cs_totalsavings'=>$cs_totalsavings,
						 			'cs_appr_ie'=>$cs_appr_ie,
						 			'cs_appr_acco'=>$cs_appr_acco,
						 			//'cs_standardization'=>$cs_standardization,
						 			//'cs_sopsp'=>$cs_sopsp,
									//'cs_drawing'=>$cs_drawing,

									'root_cause'=>$root_cause_im,
									//'root_cause_exp'=>$root_cause_exp,
									'root_cause_block'=>$root_cause_block,
									'brf_exp_precond'=>$brf_exp_precond,
									'brf_exp_impdone'=>$brf_exp_impdone,
						 			'benifits'=>$benifits,

									'horizradio'=>$horizradio,
									'horizontal1'=>$horizontal1,
									'horizontal2'=>$horizontal2,
									'horizontal3'=>$horizontal3,
									'horizontal4'=>$horizontal4,

									'origi_domain'=>$origi_domain,
									'origi_dept'=>$origi_dept,
									'origi_name'=>$origi_name,
									'origi_date'=>$origi_date,
									'origi_day'=>$origi_day,
									'origi_month'=>$origi_month,
									'origi_year'=>$origi_year,

									'approv_dept'=>$approv_dept,
									'approv_name'=>$approv_name,
									'approv_email'=>$approv_email,
									'approv_email2'=>$approv_email2,

	 								'approv_date'=>$approv_date,
									'confirm_dept'=>$confirm_dept,
									'confirm_name'=>$confirm_name,
									'confirm_date'=>$confirm_date,

			             'status'=>$status,
									 'imgapprov'=>$imgapprov_status,
									 // 'imgapprov_by'=>$viv_profile_id,

			   					 'sday'=>$sday,
									 'smonth'=>$smonth,
									 'syear'=>$syear,
		               'subdatetime'=>$currentdatetime
		             );


				 $this->db->where('idea_id', $ideaid);
		     $this->db->update('idea_gen',$data);


			 	if($this->db->affected_rows() > 0) {

					//echo $ideaid;
					//TRigger Email
	        $this->memail->triggerideagensubmit($approv_email,$ideaid,$currentdatetime,$randomiduniq);
					//echo "oooooo";
	 	      redirect('admin/kaizenidea/ideagen/myidea/');
			 	} else {

			 		redirect('admin/kaizenidea/ideagen/myidea/');
			 	}

		}




		/********************************
			findtotalimageofkaizen_attachm_ideagen
		 ********************************/
		 public function findtotalimageofkaizen_attachm_ideagen($ideaid) {
				 $this->db->select('*');
				 $this->db->from('idea_gen');
				 $this->db->where('idea_id',$ideaid);
				 $sql = $this->db->get();
				 //return $sql->result();
				 //return $sql->num_rows();
				 foreach ($sql->result() as $listtopicsbyidsRow) {
					 $before_img = $listtopicsbyidsRow->before_img;
					 $after_img = $listtopicsbyidsRow->after_img;
					 $rootcause_img = $listtopicsbyidsRow->rootcause_img;

	 			 }
				 if(!empty($before_img)) { $before_img_val = 1; } else { $before_img_val = 0;  }
				 if(!empty($after_img)) { $after_img_val = 1; } else { $after_img_val = 0;  }
				 if(!empty($rootcause_img)) { $rootcause_img_val = 1; } else { $rootcause_img_val = 0;  }

				 $totalval = $before_img_val + $after_img_val + $rootcause_img_val;
				 return $totalval;


		 }



					/********************************
					 SUPER ADMIN - listmyideasbyiid_ideagen
					********************************/
					public function listmyideasbyiid_ideagen($idea_id) {

							//$wl_profileid = $this->session->userdata('rsa_profileid');

							$this->db->select('*');
							$this->db->from('idea_gen');
							//$this->db->where('status', 1);
							$this->db->where('idea_id', $idea_id);
					 		$sql = $this->db->get();
							return $sql->result();
					}



							/********************************
								SUPER ADMIN - ajaxaddimagebefore_ideagen
							 ********************************/
							 public function ajaxaddimagebefore_ideagen() {
								 $randomiduniq = $this->randomiduniq();
								 $currentdatetime = $this->currentdatetime();


								 $sday=date('d');
								 $smonth=date('m');
								 $syear=date('Y');

								 $postid = $this->input->post('postid');
								 $profileid = $this->input->post('profileid');


								 // var_dump($uniqueurlid);exit;

								 // ***Multiple FILE UPLOAD****
								 $new_image_name = time() . str_replace(str_split(' ()\\/,:*?"<>|-.'), '',$_FILES['files']['name']);
								 //  $new_image_name = preg_replace('/\.*/', '', $new_image_name1);
								 $new_filetype = pathinfo($_FILES['files']['name'], PATHINFO_EXTENSION);
								 $new_image_name = $new_image_name.".".$new_filetype;

								 $config['upload_path'] = 'assets/images/kaizenattachments/';
								 //$config['allowed_types'] = 'gif|jpg|png|jpeg|pdf|ppt|docx|pptx|xlsx|xls|doc';
								 $config['allowed_types'] = 'jpg|png|jpeg';
								 /* PDF, DOCx, JPEG, PNG, GIF, PPTX, XLXx */
								 $config['file_name'] = $new_image_name;
								 $config['max_size']  = '0';
								 $config['max_width']  = '0';
								 $config['max_height']  = '0';
								 $config['$min_width'] = '0';
								 $config['min_height'] = '0';

								 $this->upload->initialize($config);
								 $this->load->library('upload', $config);
								 // $upload = $this->upload->do_upload('files');
								 /***** END Multiple FILE UPLOAD************/


								 if (!$this->upload->do_upload('files'))
								 {

								 $error =$this->upload->display_errors();

								 if(!empty($error)){
								 echo 2;
								 }

								 }
								    else {


								    $data = array(
								             'before_img'=>$new_image_name,
								             'before_img_filetype'=>$new_filetype
								             );
								     $this->db->where('idea_id', $postid);
								     $this->db->update('idea_gen',$data);

								     if($this->db->affected_rows() > 0) {
								             echo 1;
								    } else {
								             echo 2;
								      }

								    }

								 exit();

							 }





		 		 /********************************
		  			SUPER ADMIN - ajaxaddimageafter_ideagen
		  		 ********************************/
		  		 public function ajaxaddimageafter_ideagen() {
		  			 $randomiduniq = $this->randomiduniq();
		  			 $currentdatetime = $this->currentdatetime();


		  			 $sday=date('d');
		  			 $smonth=date('m');
		  			 $syear=date('Y');

		  			 $postid = $this->input->post('postid');
		  			 $profileid = $this->input->post('profileid');


		  			 // var_dump($uniqueurlid);exit;

		  			 // ***Multiple FILE UPLOAD****
		  			 $new_image_name = time() . str_replace(str_split(' ()\\/,:*?"<>|-.'), '',$_FILES['files_a']['name']);
		  			 //  $new_image_name = preg_replace('/\.*/', '', $new_image_name1);
		  			 $new_filetype = pathinfo($_FILES['files_a']['name'], PATHINFO_EXTENSION);
		  			 $new_image_name = $new_image_name.".".$new_filetype;

		  			 $config['upload_path'] = 'assets/images/kaizenattachments/';
		  			 //$config['allowed_types'] = 'gif|jpg|png|jpeg|pdf|ppt|docx|pptx|xlsx|xls|doc';
		  			 $config['allowed_types'] = 'jpg|png|jpeg';
		  			 /* PDF, DOCx, JPEG, PNG, GIF, PPTX, XLXx */
		  			 $config['file_name'] = $new_image_name;
		  			 $config['max_size']  = '0';
		  			 $config['max_width']  = '0';
		  			 $config['max_height']  = '0';
		  			 $config['$min_width'] = '0';
		  			 $config['min_height'] = '0';

		  			 $this->upload->initialize($config);
		  			 $this->load->library('upload', $config);
		  			 // $upload = $this->upload->do_upload('files');
		  			 /***** END Multiple FILE UPLOAD************/


		  			 if (!$this->upload->do_upload('files_a'))
		  			 {

		  			 $error =$this->upload->display_errors();

		  			 if(!empty($error)){
		  			 echo 2;
		  			 }

		  			 }
		  			    else {


		  			    $data = array(
		  			             'after_img'=>$new_image_name,
		  			             'after_img_filetype'=>$new_filetype
		  			             );
		  			     $this->db->where('idea_id', $postid);
		  			     $this->db->update('idea_gen',$data);

		  			     if($this->db->affected_rows() > 0) {
		  			             echo 1;
		  			    } else {
		  			             echo 2;
		  			      }

		  			    }

		  			 exit();

		  		 }





				 /********************************
					SUPER ADMIN - ajaxaddimagerootcause_ideagen
				 ********************************/
				 public function ajaxaddimagerootcause_ideagen() {
					 $randomiduniq = $this->randomiduniq();
					 $currentdatetime = $this->currentdatetime();


					 $sday=date('d');
					 $smonth=date('m');
					 $syear=date('Y');

					 $postid = $this->input->post('postid');
					 $profileid = $this->input->post('profileid');


					 // var_dump($uniqueurlid);exit;

					 // ***Multiple FILE UPLOAD****
					 $new_image_name = time() . str_replace(str_split(' ()\\/,:*?"<>|-.'), '',$_FILES['files_a']['name']);
					 //  $new_image_name = preg_replace('/\.*/', '', $new_image_name1);
					 $new_filetype = pathinfo($_FILES['files_a']['name'], PATHINFO_EXTENSION);
					 $new_image_name = $new_image_name.".".$new_filetype;

					 $config['upload_path'] = 'assets/images/kaizenattachments/';
					 //$config['allowed_types'] = 'gif|jpg|png|jpeg|pdf|ppt|docx|pptx|xlsx|xls|doc';
					 $config['allowed_types'] = 'jpg|png|jpeg';
					 /* PDF, DOCx, JPEG, PNG, GIF, PPTX, XLXx */
					 $config['file_name'] = $new_image_name;
					 $config['max_size']  = '0';
					 $config['max_width']  = '0';
					 $config['max_height']  = '0';
					 $config['$min_width'] = '0';
					 $config['min_height'] = '0';

					 $this->upload->initialize($config);
					 $this->load->library('upload', $config);
					 // $upload = $this->upload->do_upload('files');
					 /***** END Multiple FILE UPLOAD************/


					 if (!$this->upload->do_upload('files_a'))
					 {

					 $error =$this->upload->display_errors();

					 if(!empty($error)){
					 echo 2;
					 }

					 }
					    else {


					    $data = array(
					             'rootcause_img'=>$new_image_name,
					             'rootcause_img_filetype'=>$new_filetype
					             );
					     $this->db->where('idea_id', $postid);
					     $this->db->update('idea_gen',$data);

					     if($this->db->affected_rows() > 0) {
					             echo 1;
					    } else {
					             echo 2;
					      }

					    }

					 exit();

				 }




				 				 /********************************
				 		 		deletekaizenimg_ideagen
				 		 		********************************/
				 		 		public function deletekaizenimg_ideagen() {

				 				 $dataiid = $this->input->post('dataiid');
				 		 		 $dataitype = $this->input->post('dataitype');

				 				 if($dataitype=='before') {
				 					 $dataitype_col1 = 'before_img'; $dataitype_col2 = 'before_img_filetype';
				 				 } elseif($dataitype=='after') {
				 					 $dataitype_col1 = 'after_img'; $dataitype_col2 = 'after_img_filetype';
				 				 } elseif($dataitype=='rootcause') {
				 					 $dataitype_col1 = 'rootcause_img'; $dataitype_col2 = 'rootcause_img_filetype';
				 				 }


				 				 $findkaizenimagename = $this->findkaizenimagename_ideagen($dataiid,$dataitype);
				 				 $file_to_delete = 'assets/images/kaizenattachments/'.$findkaizenimagename.'';
				 				 unlink($file_to_delete);


				 		 		 $data = array(
				 					 				''.$dataitype_col1.''=>0,
				 		 							''.$dataitype_col2.''=>0,
				 		 						 );
				 		 		 $this->db->where('idea_id', $dataiid);
				 		 		 $this->db->update('idea_gen',$data);





				 		 		 if($this->db->affected_rows() > 0) {
				 		 				$data['mstatus'] = '1';
				 		 				$data['msgid'] = $dataitype;
				 		 				$data['message'] = 'Image Deleted Successfully';
				 		 				$json = json_encode($data);
				 		 				echo $json;
				 		 			} else {
				 		 				$data['mstatus'] = '0';
				 		 				$data['msgid'] = $dataitype;
				 		 				$data['message'] = 'Sorry! Please Try Again...';
				 		 				$json = json_encode($data);
				 		 				echo $json;
				 		 		 }



				 		 	 	}




					 /********************************
					 ajaxaddteammembnames_ideagen
					 ********************************/
					 public function ajaxaddteammembnames_ideagen() {

						$randomiduniq = $this->randomiduniq();
			 		 	$currentdatetime = $this->currentdatetime();
						$teamid= 'TEAMMEMB'.$randomiduniq;
			 			$viv_profile_id = $this->session->userdata('viv_profile_id');

			 			$sday=date('d');
			 			$smonth=date('m');
			 			$syear=date('Y');

			 			 $eteamname = $this->input->post('eteamname');
						 $efunction = $this->input->post('efunction');
						 $eempid = $this->input->post('eempid');
						 $eideaid = $this->input->post('eideaid');


						$data = array(
									 	'idea_id'=>$eideaid,
										 'teamid'=>$teamid,
									 	 'profile_id'=>$viv_profile_id,
										 'teamname'=>$eteamname,
										 'function'=>$efunction,
										 'empid'=>$eempid,
										 'status'=>1,
										 'sday'=>$sday,
										 'smonth'=>$smonth,
										 'syear'=>$syear,
										 'subdatetime'=>$currentdatetime
										);

						$this->db->insert('ideagen_teammembers',$data);




						if($this->db->affected_rows() > 0) {
							 $data['mstatus'] = '1';
							 $data['msgid'] = '';
							 $data['message'] = 'Team Members Added Successfully';
							 $json = json_encode($data);
							 echo $json;
						 } else {
							 $data['mstatus'] = '0';
							 $data['msgid'] = '';
							 $data['message'] = 'Sorry! Please Try Again...';
							 $json = json_encode($data);
							 echo $json;
						}


					 }




					 /********************************
					 deleteteammember_ideagen
					 ********************************/
					 public function deleteteammember_ideagen() {

					 $dataiid = $this->input->post('dataiid');
					 $datamid = $this->input->post('datamid');

					 $this->db->where('teamid', $datamid);
					 $this->db->where('idea_id', $dataiid);
					 $this->db->delete('ideagen_teammembers');

					 if($this->db->affected_rows() > 0) {
					 	 $data['mstatus'] = '1';
					 	 $data['msgid'] = '';
					 	 $data['message'] = 'Deleted Successfully';
					 	 $json = json_encode($data);
					 	 echo $json;
					  } else {
					 	 $data['mstatus'] = '0';
					 	 $data['msgid'] = '';
					 	 $data['message'] = 'Sorry! Please Try Again...';
					 	 $json = json_encode($data);
					 	 echo $json;
					 }



					 }




					 			/********************************
					  		 addsustenance_ideagen
					  		 ********************************/
					  		 public function addsustenance_ideagen() {

					  			$randomiduniq = $this->randomiduniq();
					   		$currentdatetime = $this->currentdatetime();
					  			$sus_id= 'SUSTENANCE'.$randomiduniq;
					   		$viv_profile_id = $this->session->userdata('viv_profile_id');

					   			$sday=date('d');
					   			$smonth=date('m');
					   			$syear=date('Y');

					   		 $esn = $this->input->post('esn');
					  			 $emc = $this->input->post('emc');
					  			 $etargetdate = $this->input->post('etargetdate');
					 			 $eresponsi = $this->input->post('eresponsi');
					 			 $estatus = $this->input->post('estatus');
					  			 $eideaid_s = $this->input->post('eideaid_s');


					  			$data = array(
					  						 	 'sus_id'=>$sus_id,
					  							 'idea_id'=>$eideaid_s,
					  						 	 'profile_id'=>$viv_profile_id,
					 							 'sn'=>$esn,
					 							 'mc'=>$emc,
					  							 'targetdate'=>$etargetdate,
					 							 'responsi'=>$eresponsi,
					  							 'sus_status'=>$estatus,
					  							 'status'=>1,
					  							 'sday'=>$sday,
					  							 'smonth'=>$smonth,
					  							 'syear'=>$syear,
					  							 'subdatetime'=>$currentdatetime
					  							);

					  			$this->db->insert('ideagen_sustenance',$data);



					  			if($this->db->affected_rows() > 0) {
					  				 $data['mstatus'] = '1';
					  				 $data['msgid'] = '';
					  				 $data['message'] = 'Sustenance Status Added Successfully';
					  				 $json = json_encode($data);
					  				 echo $json;
					  			 } else {
					  				 $data['mstatus'] = '0';
					  				 $data['msgid'] = '';
					  				 $data['message'] = 'Sorry! Please Try Again...';
					  				 $json = json_encode($data);
					  				 echo $json;
					  			}


					  		 }




								 		 /********************************
								 		deletesustenance_ideagen
								 		********************************/
								 		public function deletesustenance_ideagen() {

								 		 $dataiid = $this->input->post('dataiid');
								 		 $datasid = $this->input->post('datasid');

								 		 $this->db->where('sus_id', $datasid);
								 		 $this->db->where('idea_id', $dataiid);
								 		 $this->db->delete('ideagen_sustenance');

								 		 if($this->db->affected_rows() > 0) {
								 				$data['mstatus'] = '1';
								 				$data['msgid'] = '';
								 				$data['message'] = 'Deleted Successfully';
								 				$json = json_encode($data);
								 				echo $json;
								 			} else {
								 				$data['mstatus'] = '0';
								 				$data['msgid'] = '';
								 				$data['message'] = 'Sorry! Please Try Again...';
								 				$json = json_encode($data);
								 				echo $json;
								 		 }



								 		}



							/********************************
				 			SUPER ADMIN - findkaizenimagename_ideagen
				 		 ********************************/
				 		 public function findkaizenimagename_ideagen($dataiid,$dataitype) {
				 			 //$wl_profileid = $this->session->userdata('rsa_profileid');

				 				$this->db->select('*');
				 				$this->db->from('idea_gen');
				 		 		$this->db->where('idea_id', $dataiid);
				 				$sql = $this->db->get();
				 				//return $sql->result();
				 				//return $sql->num_rows();

								if($dataitype=='before') {
					 				foreach ($sql->result() as $listtopicsbyidsRow) {
												$img = $listtopicsbyidsRow->before_img;
									}
							   } else if($dataitype=='after') {
											foreach ($sql->result() as $listtopicsbyidsRow) {
												 $img = $listtopicsbyidsRow->after_img;
											}
									}

									else if($dataitype=='rootcause') {
			 								foreach ($sql->result() as $listtopicsbyidsRow) {
			 									 $img = $listtopicsbyidsRow->rootcause_img;
			 								}
			 						}

				  					//$fullname = $listtopicsbyidsRow->rname;
				 					return $img;


				 		 }



						 /********************************
				 		 SUPER ADMIN - count_listteammembersbyiid_ideagen
				 		********************************/
				 		public function count_listteammembersbyiid_ideagen($eideaid) {
				 			//$wl_profileid = $this->session->userdata('rsa_profileid');

				 			 $this->db->select('*');
				 			 $this->db->from('ideagen_teammembers');
				 			 $this->db->where('idea_id', $eideaid);
				 			 $sql = $this->db->get();
				 			 //return $sql->result();
				 			 return $sql->num_rows();
				 		}




						/********************************
						 SUPER ADMIN - listteammembersbyiid_ideagen
						********************************/
						public function listteammembersbyiid_ideagen($eideaid) {
							//$wl_profileid = $this->session->userdata('rsa_profileid');

							 $this->db->select('*');
							 $this->db->from('ideagen_teammembers');
							 $this->db->where('idea_id', $eideaid);
							 $sql = $this->db->get();
							 return $sql->result();
							 //return $sql->num_rows();
						}



						/********************************
						 SUPER ADMIN - count_listteammembersbyiid
						********************************/
						public function count_listsustenancebyiid_ideagen($eideaid) {
							//$wl_profileid = $this->session->userdata('rsa_profileid');

							 $this->db->select('*');
							 $this->db->from('ideagen_sustenance');
							 $this->db->where('idea_id', $eideaid);
							 $sql = $this->db->get();
							 //return $sql->result();
							 return $sql->num_rows();
						}



						/********************************
						 SUPER ADMIN - listsustenancebyiid_ideagen
						********************************/
						public function listsustenancebyiid_ideagen($eideaid) {
							//$wl_profileid = $this->session->userdata('rsa_profileid');

							 $this->db->select('*');
							 $this->db->from('ideagen_sustenance');
							 $this->db->where('idea_id', $eideaid);
							 $sql = $this->db->get();
							 return $sql->result();
							 //return $sql->num_rows();
						}




			/********************************
			 SUPER ADMIN - count_listmyideas_emp_ideagen
			********************************/
			public function count_listmyideas_emp_ideagen() {

				$viv_user_type = $this->session->userdata('viv_user_type');
				$viv_profile_id = $this->session->userdata('viv_profile_id');
				$viv_email = $this->session->userdata('viv_email');

				$status = '1,2,3,4,5,6,7';
				$status_ex = explode(',',$status);

				if($viv_user_type=='TRMMADMIN') {

						$this->db->select('*');
						$this->db->from('idea_gen');
						$this->db->where_in('status', $status_ex);
						//$this->db->where('profileid', $wl_profileid);
						$this->db->order_by('id', 'DESC');
						$sql = $this->db->get();
						return $sql->num_rows();

				} elseif($viv_user_type=='TRMMEMP')	 {
						$this->db->select('*');
						$this->db->from('idea_gen');
						$this->db->where_in('status', $status_ex);
						$this->db->where('profile_id', $viv_profile_id);
						$this->db->order_by('id', 'DESC');
						$sql = $this->db->get();
						return $sql->num_rows();

				}


			}



				/********************************
				 SUPER ADMIN - listmyideas_ideagen
				********************************/
				public function listmyideas_ideagen() {

					$uri5 = $this->uri->segment(5);
					$uri6 = $this->uri->segment(6); if(empty($uri6)) { $uri6 = 'ALL'; }
					$uri7 = $this->uri->segment(7); if(empty($uri7)) { $uri7 = 'ALL'; }
					$uri8 = $this->uri->segment(8); if(empty($uri8)) { $uri8 = 'ALL'; }

					$viv_user_type = $this->session->userdata('viv_user_type');
					$viv_profile_id = $this->session->userdata('viv_profile_id');

					$viv_email = $this->session->userdata('viv_email');


					if($viv_user_type=='TRMMADMIN') {
									/*** PAGINATION ****/
									 $config = array();
									 $config["base_url"] = site_url('admin/kaizenidea/ideagen/myidea/'.$uri5.'/'.$uri6.'/'.$uri7.'/'.$uri8.'');
									 $config["total_rows"] = $this->count_pagi_listmyideas_ideagen_admin();
									 $config["per_page"] = 10;
									 $config["uri_segment"] = 9;
									 $this->pagination->initialize($config);
									 $pagestart = ($this->uri->segment(9)) ? $this->uri->segment(9) : 0;
									/*** PAGINATION ****/
					} elseif($viv_user_type=='TRMMEMP')	 {

					     /*** PAGINATION ****/
					      $config = array();
					      $config["base_url"] = site_url('admin/kaizenidea/ideagen/myidea/'.$uri5.'');
					      $config["total_rows"] = $this->count_pagi_listmyideas_ideagen();
					      $config["per_page"] = 10;
					      $config["uri_segment"] = 6;
					      $this->pagination->initialize($config);
					      $pagestart = ($this->uri->segment(6)) ? $this->uri->segment(6) : 0;
					      /*** PAGINATION ****/


					}



						if($viv_user_type=='TRMMADMIN') {

							if($uri5=='totalsubmitted'){
								$status = '1,2,3,4,5,6,7';
								$status_ex = explode(',',$status);

							} elseif($uri5=='totalpending') {
								$status = '1';
								$status_ex = explode(',',$status);

							} elseif($uri5=='totalapproved') {
								$status = '2,4,6';
								$status_ex = explode(',',$status);

							} elseif($uri5=='totalrejected') {
								$status = '3,5,7';
								$status_ex = explode(',',$status);
							} else {
								$status = '1,2,3,4,5,6,7';
								$status_ex = explode(',',$status);

							}


							$year_sub = $uri6;
							$domain_sub = $uri7;
							$dept_sub = $uri8;

							$dept_sub = str_replace('%20', ' ', $dept_sub);
							$domain_sub = str_replace('%20', ' ', $domain_sub);

							if(empty($year_sub) || $year_sub =='ALL') {  $year_sub = ''; }
							if(empty($dept_sub) || $dept_sub == 'ALL') { $dept_sub = '';  }
							if(empty($domain_sub) || $domain_sub == 'ALL') { $domain_sub = '';  }


								$this->db->select('*');
								$this->db->from('idea_gen');
								$this->db->where_in('status', $status_ex);
								$this->db->like('syear', $year_sub);
					      $this->db->like('origi_dept', $dept_sub);
					      $this->db->like('origi_domain', $domain_sub);
								$this->db->limit($config["per_page"], $pagestart);
								$this->db->order_by('id', 'DESC');
						 		$sql = $this->db->get();
								return $sql->result();

						} elseif($viv_user_type=='TRMMEMP')	 {

							if($uri5=='totalsubmitted'){
								$status = '0,1,2,3,4,5,6,7';
								$status_ex = explode(',',$status);

								$imgapprov_status = '1,2,3';
		            $imgapprov_status_ex = explode(',',$imgapprov_status);

							} elseif($uri5=='totalapproved') {
								$status = '2,4,6';
								$status_ex = explode(',',$status);

								$imgapprov_status = '2';
		            $imgapprov_status_ex = explode(',',$imgapprov_status);

							} elseif($uri5=='totalrejected') {
								$status = '3,5,7';
								$status_ex = explode(',',$status);

								$imgapprov_status = '3';
		            $imgapprov_status_ex = explode(',',$imgapprov_status);

							} else {
								$status = '0,1,2,3,4,5,6,7';
								$status_ex = explode(',',$status);

								$imgapprov_status = '1,2,3';
		            $imgapprov_status_ex = explode(',',$imgapprov_status);

							}


								$this->db->select('*');
								$this->db->from('idea_gen');
								$this->db->where_in('status', $status_ex);
								//$this->db->or_where('status', 2);
								//$this->db->or_where('status', 3);
								$this->db->where_in('imgapprov', $imgapprov_status_ex);
								$this->db->where('profile_id', $viv_profile_id);
								$this->db->limit($config["per_page"], $pagestart);
								$this->db->order_by('id', 'DESC');
						 		$sql = $this->db->get();
								return $sql->result();

						}
			 	}






						/********************************
						 SUPER ADMIN - listmyideas_ideagen_filter
						********************************/
						public function listmyideas_ideagen_filter() {



							$viv_user_type = $this->session->userdata('viv_user_type');
							$viv_profile_id = $this->session->userdata('viv_profile_id');
							$viv_email = $this->session->userdata('viv_email');


							$uri5 = $this->uri->segment(5);
							$uri6 = $this->uri->segment(6);
							$uri7 = $this->uri->segment(7);
							$uri8 = $this->uri->segment(8);


										/*** PAGINATION ****
										 $config = array();
										 $config["base_url"] = site_url('admin/kaizenidea/ideamang/myidea/totalsubmitted/'.$uri6.'');
										 $config["total_rows"] = $this->count_pagi_listmyideas_admin();
										 $config["per_page"] = 10;
								 		 $config["uri_segment"] = 6;
										 $this->pagination->initialize($config);
										 $pagestart = ($this->uri->segment(6)) ? $this->uri->segment(6) : 0;
										 /*** PAGINATION ****/



										 //$dept_sub = str_replace('%20', ' ', $dept_sub);
										 //$domain_sub = str_replace('%20', ' ', $domain_sub);

										 $year = $this->input->post('year');
										 $domain = $this->input->post('domain');
										 $dept = $this->input->post('dept');
										 $kaizentheme = $this->input->post('kaizentheme');
										 $status = $this->input->post('status');


										 if(empty($domain) || $domain =='ALL') {  $domain = ''; }
										 if(empty($dept) || $dept == 'ALL') { $dept = '';  }
										 if(empty($status) || $status == 'ALL') { $status = '';  }

									if($status=='totalsubmitted'){
										$status = '1,2,3,4,5,6,7';
										$status_ex = explode(',',$status);

									} elseif($status=='totalpending') {
										$status = '1';
										$status_ex = explode(',',$status);

									} elseif($status=='totalapproved') {
										$status = '2,4,6';
										$status_ex = explode(',',$status);

									} elseif($status=='totalrejected') {
										$status = '3,5,7';
										$status_ex = explode(',',$status);
									} else {
										$status = '1,2,3,4,5,6,7';
										$status_ex = explode(',',$status);

									}





										$this->db->select('*');
										$this->db->from('idea_gen');
										$this->db->where_in('status', $status_ex);
					 					$this->db->like('syear', $year);
										$this->db->like('origi_dept', $dept);
										$this->db->like('origi_domain', $domain);
										$this->db->like('ktheme', $kaizentheme);
										//$this->db->limit($config["per_page"], $pagestart);
										$this->db->order_by('id', 'DESC');
								 		$sql = $this->db->get();
										return $sql->result();



					 	}




				/********************************
				 SUPER ADMIN - count_pagi_listmyideas_ideagen_admin
				********************************/
				public function count_pagi_listmyideas_ideagen_admin() {

						$uri5 = $this->uri->segment(5);
						$uri6 = $this->uri->segment(6);
		        $uri7 = $this->uri->segment(7);
		        $uri8 = $this->uri->segment(8);

						$viv_user_type = $this->session->userdata('viv_user_type');
						$viv_profile_id = $this->session->userdata('viv_profile_id');

						$viv_email = $this->session->userdata('viv_email');


						if($viv_user_type=='TRMMADMIN') {

							if($uri5=='totalsubmitted'){
								$status = '1,2,3,4,5,6,7';
								$status_ex = explode(',',$status);

							} elseif($uri5=='totalpending') {
								$status = '1';
								$status_ex = explode(',',$status);

							} elseif($uri5=='totalapproved') {
								$status = '2,4,6';
								$status_ex = explode(',',$status);

							} elseif($uri5=='totalrejected') {
								$status = '3,5,7';
								$status_ex = explode(',',$status);
							} else {
								$status = '1,2,3,4,5,6,7';
								$status_ex = explode(',',$status);

							}

							$year_sub = $uri6;
							$domain_sub = $uri7;
							$dept_sub = $uri8;

							$dept_sub = str_replace('%20', ' ', $dept_sub);
							$domain_sub = str_replace('%20', ' ', $domain_sub);

							if(empty($year_sub) || $year_sub =='ALL') {  $year_sub = ''; }
							if(empty($dept_sub) || $dept_sub == 'ALL') { $dept_sub = '';  }
							if(empty($domain_sub) || $domain_sub == 'ALL') { $domain_sub = '';  }

								$this->db->select('*');
								$this->db->from('idea_gen');
								$this->db->where_in('status', $status_ex);
								$this->db->like('syear', $year_sub);
					      $this->db->like('origi_dept', $dept_sub);
					      $this->db->like('origi_domain', $domain_sub);
								$this->db->order_by('id', 'DESC');
								$sql = $this->db->get();
								return $sql->num_rows();

						} elseif($viv_user_type=='TRMMEMP')	 {

							if($uri5=='totalsubmitted'){
								$status = '1,2,3,4,5,6,7';
								$status_ex = explode(',',$status);

							} elseif($uri5=='totalapproved') {
								$status = '2,4,6';
								$status_ex = explode(',',$status);

							} elseif($uri5=='totalrejected') {
								$status = '3,5,7';
								$status_ex = explode(',',$status);
							} else {
								$status = '1,2,3,4,5,6,7';
								$status_ex = explode(',',$status);

							}


								$this->db->select('*');
								$this->db->from('idea_gen');
								$this->db->where_in('status', $status_ex);
								//$this->db->or_where('status', 2);
								//$this->db->or_where('status', 3);
								$this->db->where('profile_id', $viv_profile_id);
								$this->db->order_by('id', 'DESC');
								$sql = $this->db->get();
								return $sql->num_rows();

						}
				}





					/********************************
					 SUPER ADMIN - count_pagi_listmyideas_ideagen
					********************************/
					public function count_pagi_listmyideas_ideagen() {

							$uri5 = $this->uri->segment(5);

							$viv_user_type = $this->session->userdata('viv_user_type');
							$viv_profile_id = $this->session->userdata('viv_profile_id');

							$viv_email = $this->session->userdata('viv_email');


							if($viv_user_type=='TRMMADMIN') {

								if($uri5=='totalsubmitted'){
									$status = '1,2,3,4,5,6,7';
									$status_ex = explode(',',$status);

								} elseif($uri5=='totalpending') {
									$status = '1';
									$status_ex = explode(',',$status);

								} elseif($uri5=='totalapproved') {
									$status = '2,4,6';
									$status_ex = explode(',',$status);

								} elseif($uri5=='totalrejected') {
									$status = '3,5,7';
									$status_ex = explode(',',$status);
								} else {
									$status = '1,2,3,4,5,6,7';
									$status_ex = explode(',',$status);

								}

									$this->db->select('*');
									$this->db->from('idea_gen');
									$this->db->where_in('status', $status_ex);
									//$this->db->where('profileid', $wl_profileid);
				 					$this->db->order_by('id', 'DESC');
							 		$sql = $this->db->get();
									return $sql->num_rows();

							} elseif($viv_user_type=='TRMMEMP')	 {

								if($uri5=='totalsubmitted'){
									$status = '1,2,3,4,5,6,7';
									$status_ex = explode(',',$status);

								} elseif($uri5=='totalapproved') {
									$status = '2,4,6';
									$status_ex = explode(',',$status);

								} elseif($uri5=='totalrejected') {
									$status = '3,5,7';
									$status_ex = explode(',',$status);
								} else {
									$status = '1,2,3,4,5,6,7';
									$status_ex = explode(',',$status);

								}


									$this->db->select('*');
									$this->db->from('idea_gen');
									$this->db->where_in('status', $status_ex);
									//$this->db->or_where('status', 2);
									//$this->db->or_where('status', 3);
									$this->db->where('profile_id', $viv_profile_id);
				 					$this->db->order_by('id', 'DESC');
							 		$sql = $this->db->get();
									return $sql->num_rows();

							}
				 	}



						/********************************
						 SUPER ADMIN - count_listmyideas_verifiy_ideagen
						********************************/
						public function count_listmyideas_verifiy_ideagen() {

							$viv_user_type = $this->session->userdata('viv_user_type');
							$viv_profile_id = $this->session->userdata('viv_profile_id');
							$viv_email = $this->session->userdata('viv_email');

							$uri5 = $this->uri->segment(5);

							if($viv_user_type=='TRMMADMIN') {
							  $status = '1,2,3,4,5,6,7';
							  $status_ex = explode(',',$status);

							  $status_fin = '2,4,5';
							  $status_fin_ex = explode(',',$status_fin);

							    $this->db->select('*');
							    $this->db->from('idea_gen');
							    $this->db->where_in('status', $status_ex);
							    //$this->db->where('profileid', $wl_profileid);
							    $this->db->order_by('id', 'DESC');
							    $sql = $this->db->get();
							    return $sql->num_rows();

							} elseif($viv_user_type=='TRMMMANG')	 {



							    if($uri5=='totalsubmitted'){

							      $status = '1,2,3,4,5,6,7';
							      $status_ex = explode(',',$status);

							    } elseif($uri5=='totalpending') {

							      $status = '1';
							      $status_ex = explode(',',$status);

							    } elseif($uri5=='totalapproved') {

							      $status = '2,4,5,6,7';
							      $status_ex = explode(',',$status);

							    } elseif($uri5=='totalrejected') {
							      $status = '3';
							      $status_ex = explode(',',$status);
							    } else {
							      $status = '1,2,3,4,5,6,7';
							      $status_ex = explode(',',$status);
							    }


							    $this->db->select('*');
							    $this->db->from('idea_gen');
							    $this->db->where_in('status', $status_ex);
							    //$this->db->or_where('status', 2);
							    //$this->db->or_where('status', 3);
							    $this->db->where('approv_email', $viv_email);
							    $this->db->order_by('id', 'DESC');
							    $sql = $this->db->get();
							    return $sql->num_rows();

							} elseif($viv_user_type=='TRMMFINANCE')	 {

							    $status = '1,2,3,4,5,6,7';
							    $status_ex = explode(',',$status);

							    $status_fin = '2,4,5';
							    $status_fin_ex = explode(',',$status_fin);

							    $this->db->select('*');
							    $this->db->from('idea_gen');
							    $this->db->where_in('status', $status_fin_ex);
							    //$this->db->or_where('status', 2);
							    //$this->db->or_where('status', 3);
							    //$this->db->where('approv_email', $viv_email);
							    $this->db->order_by('id', 'DESC');
							    $sql = $this->db->get();
							    return $sql->num_rows();

							}





						}




						/********************************
						 SUPER ADMIN - count_listmyideas_verifiy_ideagen_mang_dashb
						********************************/
						public function count_listmyideas_verifiy_ideagen_mang_dashb($year_sub,$domain_sub,$dept_sub) {

							$viv_user_type = $this->session->userdata('viv_user_type');
							$viv_profile_id = $this->session->userdata('viv_profile_id');
							$viv_email = $this->session->userdata('viv_email');

							if(empty($year_sub) || $year_sub =='ALL') {  $year_sub = ''; }
							if(empty($dept_sub) || $dept_sub == 'ALL') { $dept_sub = '';  }
							if(empty($domain_sub) || $domain_sub == 'ALL') { $domain_sub = '';  }


							$status = '1,2,3,4,5,6,7';
							$status_ex = explode(',',$status);

							$status_fin = '2,4,5';
							$status_fin_ex = explode(',',$status_fin);

							if($viv_user_type=='TRMMADMIN') {

									$this->db->select('*');
									$this->db->from('idea_gen');
									$this->db->where_in('status', $status_ex);
									//$this->db->where('profileid', $wl_profileid);
									$this->db->order_by('id', 'DESC');
									$sql = $this->db->get();
									return $sql->num_rows();

							} elseif($viv_user_type=='TRMMMANG')	 {
									$this->db->select('*');
									$this->db->from('idea_gen');
									$this->db->where_in('status', $status_ex);
									$this->db->where('approv_email', $viv_email);
									$this->db->like('syear', $year_sub);
									$this->db->like('origi_dept', $dept_sub);
									$this->db->like('origi_domain', $domain_sub);
									$this->db->order_by('id', 'DESC');
									$sql = $this->db->get();
									return $sql->num_rows();

							} elseif($viv_user_type=='TRMMFINANCE')	 {
									$this->db->select('*');
									$this->db->from('idea_gen');
									$this->db->where_in('status', $status_fin_ex);
									//$this->db->where('approv_email', $viv_email);
									$this->db->order_by('id', 'DESC');
									$sql = $this->db->get();
									return $sql->num_rows();

							}


						}






		/********************************
		 SUPER ADMIN - count_listmyideas_verifiy_sts_ideagen
		********************************/
		public function count_listmyideas_verifiy_sts_ideagen($status) {

			$viv_user_type = $this->session->userdata('viv_user_type');
			$viv_profile_id = $this->session->userdata('viv_profile_id');
			$viv_email = $this->session->userdata('viv_email');





			if($viv_user_type=='TRMMADMIN') {

			    $this->db->select('*');
			    $this->db->from('idea_gen');
			    $this->db->where_in('status', $status);
			    //$this->db->where('profileid', $wl_profileid);
			    $this->db->order_by('id', 'DESC');
			    $sql = $this->db->get();
			    return $sql->num_rows();

			} elseif($viv_user_type=='TRMMMANG')	 {

			    $this->db->select('*');
			    $this->db->from('idea_gen');
			    $this->db->where_in('status', $status);
			    $this->db->where('approv_email', $viv_email);
			    $this->db->order_by('id', 'DESC');
			    $sql = $this->db->get();
			    return $sql->num_rows();

			} elseif($viv_user_type=='TRMMFINANCE')	 {
			    $this->db->select('*');
			    $this->db->from('idea_gen');
			    $this->db->where_in('status', $status);
			    $this->db->order_by('id', 'DESC');
			    $sql = $this->db->get();
			    return $sql->num_rows();

			}

		}



		/********************************
		 SUPER ADMIN - count_listmyideas_verifiy_sts_ideagen_mang_dashb
		********************************/
		public function count_listmyideas_verifiy_sts_ideagen_mang_dashb($status,$year_sub,$domain_sub,$dept_sub) {

			$viv_user_type = $this->session->userdata('viv_user_type');
			$viv_profile_id = $this->session->userdata('viv_profile_id');
			$viv_email = $this->session->userdata('viv_email');


			if(empty($year_sub) || $year_sub =='ALL') {  $year_sub = ''; }
			if(empty($dept_sub) || $dept_sub == 'ALL') { $dept_sub = '';  }
			if(empty($domain_sub) || $domain_sub == 'ALL') { $domain_sub = '';  }


			if($viv_user_type=='TRMMADMIN') {

					$this->db->select('*');
					$this->db->from('idea_gen');
					$this->db->where_in('status', $status);
					//$this->db->where('profileid', $wl_profileid);
					$this->db->order_by('id', 'DESC');
					$sql = $this->db->get();
					return $sql->num_rows();

			} elseif($viv_user_type=='TRMMMANG')	 {
					$this->db->select('*');
					$this->db->from('idea_gen');
					$this->db->where_in('status', $status);
					$this->db->where('approv_email', $viv_email);
					$this->db->like('syear', $year_sub);
					$this->db->like('origi_dept', $dept_sub);
					$this->db->like('origi_domain', $domain_sub);
					$this->db->order_by('id', 'DESC');
					$sql = $this->db->get();
					return $sql->num_rows();

			} elseif($viv_user_type=='TRMMFINANCE')	 {
					$this->db->select('*');
					$this->db->from('idea_gen');
					$this->db->where_in('status', $status);
					$this->db->order_by('id', 'DESC');
					$sql = $this->db->get();
					return $sql->num_rows();

			}


		}






				/********************************
				 SUPER ADMIN - listmyideas_verification_ideagen
				********************************/
				public function listmyideas_verification_ideagen() {

						$viv_user_type = $this->session->userdata('viv_user_type');
						$viv_profile_id = $this->session->userdata('viv_profile_id');
						$viv_email = $this->session->userdata('viv_email');

						$uri5 = $this->uri->segment(5);

						if($viv_user_type=='TRMMADMIN') {

							$status = '1,2,3,4,5,6,7';
							$status_ex = explode(',',$status);

							$status_fin = '2,4,5';
							$status_fin_ex = explode(',',$status_fin);


								$this->db->select('*');
								$this->db->from('idea_gen');
								$this->db->where_in('status', $status_ex);
								//$this->db->where('profileid', $wl_profileid);
								$this->db->order_by('id', 'DESC');
						 		$sql = $this->db->get();
								return $sql->result();

						} elseif($viv_user_type=='TRMMMANG')	 {

							if($uri5=='totalsubmitted'){

								$status = '1,2,3,4,5,6,7';
								$status_ex = explode(',',$status);

							} elseif($uri5=='totalpending') {

								$status = '1';
								$status_ex = explode(',',$status);

							} elseif($uri5=='totalapproved') {

								$status = '2,4,5,6,7';
								$status_ex = explode(',',$status);

							} elseif($uri5=='totalrejected') {
								$status = '3';
								$status_ex = explode(',',$status);
							} else {
								$status = '1,2,3,4,5,6,7';
								$status_ex = explode(',',$status);
							}



								$this->db->select('*');
								$this->db->from('idea_gen');
								$this->db->where_in('status', $status_ex);
								//$this->db->or_where('status', 2);
								//$this->db->or_where('status', 3);
								$this->db->where('imgapprov', 2);
								$this->db->where('approv_email', $viv_email);
								$this->db->order_by('id', 'DESC');
						 		$sql = $this->db->get();
								return $sql->result();

						} elseif($viv_user_type=='TRMMFINANCE')	 {

							$status = '1,2,3,4,5,6,7';
							$status_ex = explode(',',$status);

							$status_fin = '2,4,5';
							$status_fin_ex = explode(',',$status_fin);


								$this->db->select('*');
								$this->db->from('idea_gen');
								$this->db->where_in('status', $status_fin_ex);
								//$this->db->or_where('status', 2);
								//$this->db->or_where('status', 3);
								//$this->db->where('approv_email', $viv_email);
								$this->db->order_by('id', 'DESC');
						 		$sql = $this->db->get();
								return $sql->result();

						}



				}



				/********************************
				 SUPER ADMIN - listmyideas_verifiy_iedept_ideagen
				********************************/
				public function listmyideas_verifiy_iedept_ideagen() {

					$viv_user_type = $this->session->userdata('viv_user_type');
					$viv_profile_id = $this->session->userdata('viv_profile_id');
					$viv_email = $this->session->userdata('viv_email');

					$uri5 = $this->uri->segment(5);

					if($uri5=='totalsubmitted'){
					    $status = '2,4,5,6,7';
					    $status_ex = explode(',',$status);

					    $status_iedept = '1,2,3';
					    $status_iedept_ex = explode(',',$status_iedept);
					} elseif($uri5=='totalpending') {
					    $status = '2,4,5,6,7';
					    $status_ex = explode(',',$status);

					    $status_iedept = '1';
					    $status_iedept_ex = explode(',',$status_iedept);

					} elseif($uri5=='totalapproved') {
					    $status = '2,4,5,6,7';
					    $status_ex = explode(',',$status);

					    $status_iedept = '2';
					    $status_iedept_ex = explode(',',$status_iedept);

					} elseif($uri5=='totalrejected') {

					  $status = '2,4,5,6,7';
					  $status_ex = explode(',',$status);

					  $status_iedept = '3';
					  $status_iedept_ex = explode(',',$status_iedept);

					} else {

					  $status = '2,4,5,6,7';
					  $status_ex = explode(',',$status);

					  $status_iedept = '1,2,3';
					  $status_iedept_ex = explode(',',$status_iedept);

					}


					$this->db->select('*');
					$this->db->from('idea_gen');
					$this->db->where_in('status', $status_ex);
					$this->db->where_in('iedept_status', $status_iedept_ex);
					//$this->db->where('profileid', $wl_profileid);
					$this->db->order_by('id', 'DESC');
					$sql = $this->db->get();
					return $sql->result();

				}






				/********************************
				 SUPER ADMIN - count_listmyideas_verifiy_iedept_ideagen
				********************************/
				public function count_listmyideas_verifiy_iedept_ideagen() {

					$viv_user_type = $this->session->userdata('viv_user_type');
					$viv_profile_id = $this->session->userdata('viv_profile_id');
					$viv_email = $this->session->userdata('viv_email');


					$status = '2,4,5,6,7';
					$status_ex = explode(',',$status);

					$iedept_status = '1,2,3';
					$status_iedept = explode(',',$iedept_status);


					$this->db->select('*');
					$this->db->from('idea_gen');
					$this->db->where_in('status', $status_ex);
					$this->db->where_in('iedept_status', $status_iedept);
					//$this->db->where('profileid', $wl_profileid);
					$this->db->order_by('id', 'DESC');
					$sql = $this->db->get();
					return $sql->num_rows();


				}




				/********************************
				 SUPER ADMIN - count_listmyideas_verifiy_sts_iedept_ideagen
				********************************/
				public function count_listmyideas_verifiy_sts_iedept_ideagen($status_iedept) {

					$viv_user_type = $this->session->userdata('viv_user_type');
					$viv_profile_id = $this->session->userdata('viv_profile_id');
					$viv_email = $this->session->userdata('viv_email');

					//$status = '4,5';
					//$status_ex = explode(',',$status);

					//$status_iedept = '1,2,3';
					//$status_iedept_ex = explode(',',$status_iedept);


					$this->db->select('*');
					$this->db->from('idea_gen');
					//$this->db->where_in('status', $status_ex);
					//$this->db->where_in('iedept_status', $status_iedept);

					if($status_iedept==1) {
					  $status = '2,4,6';
					  $status_ex = explode(',',$status);

					  $this->db->where_in('status', $status_ex);
					  $this->db->where_in('iedept_status', $status_iedept);
					} elseif($status_iedept==2) {
					  $status = '2,4,6';
					  $status_ex = explode(',',$status);

					  $this->db->where_in('status', $status_ex);
					  $this->db->where_in('iedept_status', $status_iedept);
					} elseif($status_iedept==3) {
					  $status = '3,5,7';
					  $status_ex = explode(',',$status);

					  $this->db->where_in('status', $status_ex);
					  $this->db->where_in('iedept_status', $status_iedept);
					}




					//$this->db->where('profileid', $wl_profileid);
					$this->db->order_by('id', 'DESC');
					$sql = $this->db->get();
					return $sql->num_rows();




				}




				/********************************
			 	SUPER ADMIN - count_listmyideas_verifiy_finance_ideagen
			  ********************************/
			  public function count_listmyideas_verifiy_finance_ideagen() {

					$viv_user_type = $this->session->userdata('viv_user_type');
 				 $viv_profile_id = $this->session->userdata('viv_profile_id');
 				 $viv_email = $this->session->userdata('viv_email');

 				 $fin_status = '1,2,3';
 				 $fin_status_ex = explode(',',$fin_status);

 				 $status = '4,6,7';
 				 $status_ex = explode(',',$status);


 				 $this->db->select('*');
 				 $this->db->from('idea_gen');
 				 $this->db->where_in('finance_status', $fin_status_ex);
 				 $this->db->where_in('status', $status_ex);
 				 $this->db->order_by('id', 'DESC');
 				 $sql = $this->db->get();
 				 return $sql->num_rows();

			  }



				/********************************
		 		 SUPER ADMIN - count_listmyideas_verifiy_sts_finance_ideagen
		 		********************************/
		 		public function count_listmyideas_verifiy_sts_finance_ideagen($status) {

					$viv_user_type = $this->session->userdata('viv_user_type');
					$viv_profile_id = $this->session->userdata('viv_profile_id');
					$viv_email = $this->session->userdata('viv_email');

					//$status = '4,6,7';
					//$status_ex = explode(',',$status);

					//$status_iedept = '1,2,3';
					//$status_iedept_ex = explode(',',$status_iedept);

					if($status==1) {
								$status_ex = 4;
					} elseif($status==2) {
								$status_ex = 6;
					} elseif($status==3) {
								$status_ex = 7;
					}

					$this->db->select('*');
					$this->db->from('idea_gen');
					//$this->db->where_in('status', $status_ex);
					$this->db->where_in('finance_status', $status);
					$this->db->where('status', $status_ex);
					$this->db->order_by('id', 'DESC');
					$sql = $this->db->get();
					return $sql->num_rows();


		 		}





					 /********************************
					 updateideastatus_ideagen
					 ********************************/
					 public function updateideastatus_ideagen() {

						 $viv_user_type = $this->session->userdata('viv_user_type');
						 $viv_profile_id = $this->session->userdata('viv_profile_id');
						 $viv_email = $this->session->userdata('viv_email');

						 $randomiduniq = $this->randomiduniq();
						 $currentdatetime = $this->currentdatetime();

						$ideaid = $this->input->post('ideaid');
						$status = $this->input->post('status');

						$finance_status = $this->input->post('finance_status');
						$iedept_status = $this->input->post('iedept_status');
						$finance_email = $this->mapi->findfinanceemail2bypid();
						$iedept_email = $this->mapi->findieemail2bypid();

						$reject_reason = $this->input->post('reject_reason'); if(empty($reject_reason)) { $reject_reason = ''; }



						if($status=='approve') {
							  $upstatus = '2';
								$hodstatus = 'Approved';
						} elseif($status=='reject') {
								$upstatus = '3';
								$hodstatus = 'Rejected';
						}

						$data = array(
											 'hod_email'=>$viv_email,
											 'hod_status'=>$hodstatus,
											 'hod_datetime'=>$currentdatetime,
											 'finance_status'=>$finance_status,
											 'iedept_status'=>$iedept_status,
											 'reject_reason'=>$reject_reason,
											 'status'=>$upstatus
					  );

						$this->db->where('idea_id', $ideaid);
						$this->db->update('idea_gen', $data);

						if($this->db->affected_rows() > 0) {
								//redirect('admin/kaizenidea/ideamang/postidea/'.$ideaid.'/mgefge1234');

								if($status=='approve') {

											if($iedept_status=='1' && $finance_status=='1'){
												//TRigger Email
							        	$this->memail->triggeridea_driappr($iedept_email,$ideaid,$currentdatetime,$randomiduniq);

											} elseif($iedept_status=='' && $finance_status=='1'){
												//TRigger Email
							        	$this->memail->triggeridea_driappr($finance_email,$ideaid,$currentdatetime,$randomiduniq);

											} elseif($iedept_status=='1' && $finance_status==''){
												//TRigger Email
							        	$this->memail->triggeridea_driappr($iedept_email,$ideaid,$currentdatetime,$randomiduniq);

											} elseif($iedept_status=='' && $finance_status==''){

											}


								}


								redirect('admin/kaizenidea/ideagen/ideaverification');

						} else {
								//redirect('admin/kaizenidea/ideamang/postidea/'.$ideaid.'/mgcd1c3922');
								redirect('admin/kaizenidea/ideagen/ideaverification');
						}



					 }






					 /********************************
					 updateideastatus_iedept
					 ********************************/
					 public function updateideastatus_iedept_ideagen() {

						 $viv_user_type = $this->session->userdata('viv_user_type');
						 $viv_profile_id = $this->session->userdata('viv_profile_id');
						 $viv_email = $this->session->userdata('viv_email');

						 $randomiduniq = $this->randomiduniq();
						 $currentdatetime = $this->currentdatetime();

						$ideaid = $this->input->post('ideaid');
						$status = $this->input->post('status');
						$iedept_reject_reason = $this->input->post('iedept_reject_reason'); if(empty($iedept_reject_reason)) { $iedept_reject_reason = ''; }

						if($status=='approve') {
								$upstatus = '4';
								$hodstatus = '2';
						} elseif($status=='reject') {
								$upstatus = '5';
								$hodstatus = '3';
						}

						$data = array(
											 'iedept_email'=>$viv_email,
											 'iedept_status'=>$hodstatus,
											 'iedept_datetime'=>$currentdatetime,
											 'iedept_reject_reason'=>$iedept_reject_reason,
											 'status'=>$upstatus
						);

						$this->db->where('idea_id', $ideaid);
						$this->db->update('idea_gen', $data);

						if($this->db->affected_rows() > 0) {
									if($status=='approve') {

											$count_finance_status_ideaid = $this->count_finance_status_ideaid_ideagen($ideaid);
											if($count_finance_status_ideaid>0){
												$finance_email = $this->mapi->findfinanceemail2bypid();
												//TRigger Email
												$this->memail->triggeridea_iedeptappr($finance_email,$ideaid,$currentdatetime,$randomiduniq);
											}
									}


								//redirect('admin/kaizenidea/ideamang/postidea/'.$ideaid.'/mgefge1234');
								redirect('admin/kaizenidea/ideagen/ideaverification');

						} else {
								//redirect('admin/kaizenidea/ideamang/postidea/'.$ideaid.'/mgcd1c3922');
								redirect('admin/kaizenidea/ideagen/ideaverification');
						}



					 }


					 /********************************
						SUPER ADMIN - count_finance_status_ideaid_ideagen
					 ********************************/
					 public function count_finance_status_ideaid_ideagen($ideaid)	 {

						 $viv_user_type = $this->session->userdata('viv_user_type');
						 $viv_profile_id = $this->session->userdata('viv_profile_id');
						 $viv_email = $this->session->userdata('viv_email');


						 $this->db->select('*');
						 $this->db->from('idea_gen');
						 $this->db->where('idea_id', $ideaid);
						 $this->db->where('finance_status', 1);
						 //$this->db->where('profileid', $wl_profileid);
						 $this->db->order_by('id', 'DESC');
						 $sql = $this->db->get();
						 return $sql->num_rows();

					 }



					 /********************************
				 	 SUPER ADMIN - listmyideas_verifiy_finance_ideagen
				 	********************************/
				 	public function listmyideas_verifiy_finance_ideagen() {

						$viv_user_type = $this->session->userdata('viv_user_type');
						$viv_profile_id = $this->session->userdata('viv_profile_id');
						$viv_email = $this->session->userdata('viv_email');

						$uri5 = $this->uri->segment(5);

						if($uri5=='totalsubmitted'){

						      $fin_status = '1,2,3';
						      $fin_status_ex = explode(',',$fin_status);

						      $status = '4,6,7';
						      $status_ex = explode(',',$status);

						} elseif($uri5=='totalpending') {

						      $fin_status = '1';
						      $fin_status_ex = explode(',',$fin_status);

						      $status = '4,6,7';
						      $status_ex = explode(',',$status);

						} elseif($uri5=='totalapproved') {

						      $fin_status = '2';
						      $fin_status_ex = explode(',',$fin_status);

						      $status = '4,6,7';
						      $status_ex = explode(',',$status);

						} elseif($uri5=='totalrejected') {

						      $fin_status = '3';
						      $fin_status_ex = explode(',',$fin_status);

						      $status = '4,6,7';
						      $status_ex = explode(',',$status);

						} else {

						      $fin_status = '1,2,3';
						      $fin_status_ex = explode(',',$fin_status);

						      $status = '4,6,7';
						      $status_ex = explode(',',$status);

						}




						$this->db->select('*');
						$this->db->from('idea_gen');
						$this->db->where_in('finance_status', $fin_status_ex);
						$this->db->where_in('status', $status_ex);
						$this->db->order_by('id', 'DESC');
						$sql = $this->db->get();
						return $sql->result();


				 	}




					/********************************
					updateideastatus_finance_ideagen
					********************************/
					public function updateideastatus_finance_ideagen() {

						$viv_user_type = $this->session->userdata('viv_user_type');
						$viv_profile_id = $this->session->userdata('viv_profile_id');
						$viv_email = $this->session->userdata('viv_email');

						$randomiduniq = $this->randomiduniq();
						$currentdatetime = $this->currentdatetime();

					 $ideaid = $this->input->post('ideaid');
					 $status = $this->input->post('status');

					 $fin_reject_reason = $this->input->post('fin_reject_reason'); if(empty($fin_reject_reason)) { $fin_reject_reason = ''; }

					 if($status=='approve') {
							 $upstatus = '6';
							 $hodstatus = '2';
					 } elseif($status=='reject') {
							 $upstatus = '7';
							 $hodstatus = '3';
					 }

					 $data = array(
											'finance_email'=>$viv_email,
											'finance_status'=>$hodstatus,
											'finance_datetime'=>$currentdatetime,
											'fin_reject_reason'=>$fin_reject_reason,
											'status'=>$upstatus
					 );

					 $this->db->where('idea_id', $ideaid);
					 $this->db->update('idea_gen', $data);

					 if($this->db->affected_rows() > 0) {
							 //redirect('admin/kaizenidea/ideamang/postidea/'.$ideaid.'/mgefge1234');
							 redirect('admin/kaizenidea/ideagen/ideaverification');

					 } else {
							 //redirect('admin/kaizenidea/ideamang/postidea/'.$ideaid.'/mgcd1c3922');
							 redirect('admin/kaizenidea/ideagen/ideaverification');
					 }



					}





						/********************************
						 SUPER ADMIN - count_listmyideasbystatus_ideagen
						********************************/
						public function count_listmyideasbystatus_ideagen($year_sub,$status) {

							$viv_user_type = $this->session->userdata('viv_user_type');
							$viv_profile_id = $this->session->userdata('viv_profile_id');
							$viv_email = $this->session->userdata('viv_email');

							$status_ex = explode(',',$status);

							if($viv_user_type=='TRMMADMIN') {

									$this->db->select('*');
									$this->db->from('idea_gen');
									$this->db->where_in('status', $status_ex);
									//$this->db->where('profileid', $wl_profileid);
									$this->db->order_by('id', 'DESC');
									$sql = $this->db->get();
									return $sql->num_rows();

							} elseif($viv_user_type=='TRMMEMP')	 {
									$this->db->select('*');
									$this->db->from('idea_gen');
									$this->db->where_in('status', $status_ex);
									$this->db->where('profile_id', $viv_profile_id);
									$this->db->like('syear', $year_sub);
									$this->db->order_by('id', 'DESC');
									$sql = $this->db->get();
									return $sql->num_rows();

							}


						}




			/********************************
			 SUPER ADMIN - count_listmyideasoutoff_ideagen
			********************************/
			public function count_listmyideasoutoff_ideagen() {

				$viv_user_type = $this->session->userdata('viv_user_type');
				$viv_profile_id = $this->session->userdata('viv_profile_id');
				$viv_email = $this->session->userdata('viv_email');

				if($viv_user_type=='TRMMADMIN') {

						$this->db->select('*');
						$this->db->from('idea_gen');
						$this->db->where('status !=', 0);
						//$this->db->where('profileid', $wl_profileid);
						$this->db->order_by('id', 'DESC');
						$sql = $this->db->get();
						return $sql->num_rows();

				} elseif($viv_user_type=='TRMMEMP')	 {
						$this->db->select('*');
						$this->db->from('idea_gen');
						$this->db->where('status !=', 0);
						$this->db->where('profile_id', $viv_profile_id);
						$this->db->order_by('id', 'DESC');
						$sql = $this->db->get();
						return $sql->num_rows();

				} elseif($viv_user_type=='TRMMFINANCE')	 {
						$this->db->select('*');
						$this->db->from('idea_gen');
						$this->db->where('status', 2);
						//$this->db->where('profile_id', $viv_profile_id);
						$this->db->order_by('id', 'DESC');
						$sql = $this->db->get();
						return $sql->num_rows();

				}


			}






						/********************************
						 SUPER ADMIN - count_listmyideasbystatus_filter_ideagen
						********************************/
						public function count_listmyideasbystatus_filter_ideagen($status,$year_sub,$domain_sub,$dept_sub) {

							$viv_user_type = $this->session->userdata('viv_user_type');
							$viv_profile_id = $this->session->userdata('viv_profile_id');
							$viv_email = $this->session->userdata('viv_email');

							if(empty($year_sub) || $year_sub =='ALL') {  $year_sub = ''; }
							if(empty($dept_sub) || $dept_sub == 'ALL') { $dept_sub = '';  }
							if(empty($domain_sub) || $domain_sub == 'ALL') { $domain_sub = '';  }

							$status_ex = explode(',',$status);

							if($viv_user_type=='TRMMADMIN') {

									$this->db->select('*');
									$this->db->from('idea_gen');
									$this->db->where_in('status', $status_ex);
									$this->db->like('syear', $year_sub);
									$this->db->like('origi_dept', $dept_sub);
									$this->db->like('origi_domain', $domain_sub);
									$this->db->order_by('id', 'DESC');
									$sql = $this->db->get();
									return $sql->num_rows();

							} elseif($viv_user_type=='TRMMEMP')	 {
									$this->db->select('*');
									$this->db->from('idea_gen');
									$this->db->where_in('status', $status_ex);
									$this->db->where('profile_id', $viv_profile_id);
									$this->db->order_by('id', 'DESC');
									$sql = $this->db->get();
									return $sql->num_rows();

							}


						}





								/********************************
								 SUPER ADMIN - count_listmyideasoutoff_filter_ideagen
								********************************/
								public function count_listmyideasoutoff_filter_ideagen($year_sub,$domain_sub,$dept_sub) {

									$viv_user_type = $this->session->userdata('viv_user_type');
									$viv_profile_id = $this->session->userdata('viv_profile_id');
									$viv_email = $this->session->userdata('viv_email');

									if(empty($year_sub) || $year_sub =='ALL') {  $year_sub = ''; }
									if(empty($dept_sub) || $dept_sub == 'ALL') { $dept_sub = '';  }
									if(empty($domain_sub) || $domain_sub == 'ALL') { $domain_sub = '';  }


									if($viv_user_type=='TRMMADMIN') {

											$this->db->select('*');
											$this->db->from('idea_gen');
											$this->db->where('status !=', 0);
											//$this->db->where('profileid', $wl_profileid);
											$this->db->like('syear', $year_sub);
											$this->db->like('origi_dept', $dept_sub);
											$this->db->like('origi_domain', $domain_sub);
											$this->db->order_by('id', 'DESC');
											$sql = $this->db->get();
											return $sql->num_rows();

									} elseif($viv_user_type=='TRMMEMP')	 {
											$this->db->select('*');
											$this->db->from('idea_gen');
											$this->db->where('status !=', 0);
											$this->db->where('profile_id', $viv_profile_id);
											$this->db->order_by('id', 'DESC');
											$sql = $this->db->get();
											return $sql->num_rows();

									}


								}




		/********************************
		 SUPER ADMIN - count_totalmonthbyyear_ideagen
		********************************/
		public function count_totalmonthbyyear_ideagen($month,$year,$domain,$dept,$type) {

			$viv_user_type = $this->session->userdata('viv_user_type');
			$viv_profile_id = $this->session->userdata('viv_profile_id');
			$viv_email = $this->session->userdata('viv_email');

			if(empty($month) || $month =='ALL') { $month = ''; }
			if(empty($year) || $year =='ALL') { $year = ''; }
			if(empty($dept) || $dept =='ALL') { $dept = ''; }
			if(empty($domain) || $domain =='ALL') { $domain = ''; }


			if($type=='approved') {

				$status = '2,4,6';
				$status_ex = explode(',',$status);

					$this->db->select('*');
					$this->db->from('idea_gen');
					$this->db->where_in('status', $status_ex);
					//$this->db->like('smonth', $month);
					//$this->db->like('syear', $year);
					$this->db->like('origi_month', $month);
					$this->db->like('origi_year', $year);
					$this->db->like('origi_dept', $dept);
					$this->db->like('origi_domain', $domain);
					$this->db->order_by('id', 'DESC');
					$sql = $this->db->get();
					return $sql->num_rows();

			}

			elseif($type=='submitted') {

				$status = '1,2,3,4,5,6,7';
				$status_ex = explode(',',$status);

					$this->db->select('*');
					$this->db->from('idea_gen');
					$this->db->where_in('status', $status_ex);
					//$this->db->like('smonth', $month);
					//$this->db->like('syear', $year);
					$this->db->like('origi_month', $month);
					$this->db->like('origi_year', $year);
					$this->db->like('origi_dept', $dept);
					$this->db->like('origi_domain', $domain);
					$this->db->order_by('id', 'DESC');
					$sql = $this->db->get();
					return $sql->num_rows();

			}

			elseif($type=='rejected') {

				$status = '3,5,7';
				$status_ex = explode(',',$status);

					$this->db->select('*');
					$this->db->from('idea_gen');
					$this->db->where_in('status', $status_ex);
					//$this->db->like('smonth', $month);
					//$this->db->like('syear', $year);
					$this->db->like('origi_month', $month);
					$this->db->like('origi_year', $year);
					$this->db->like('origi_dept', $dept);
					$this->db->like('origi_domain', $domain);
					$this->db->order_by('id', 'DESC');
					$sql = $this->db->get();
					return $sql->num_rows();

			}

			elseif($type=='pendingapproval') {

				$status = '1';
				$status_ex = explode(',',$status);

					$this->db->select('*');
					$this->db->from('idea_gen');
					$this->db->where_in('status', $status_ex);
					//$this->db->like('smonth', $month);
					//$this->db->like('syear', $year);
					$this->db->like('origi_month', $month);
					$this->db->like('origi_year', $year);
					$this->db->like('origi_dept', $dept);
					$this->db->like('origi_domain', $domain);
					$this->db->order_by('id', 'DESC');
					$sql = $this->db->get();
					return $sql->num_rows();

			}

		}









		/********************************
		 SUPER ADMIN - downloadideareportexcel
		********************************/
		public function downloadideareportexcel($statusname) {

		 // file name
				$date = date('d-M-Y')."-".date("h:i:sa");
				$filename = 'IdeaGeneration-'.$statusname.'-'.$date.'.csv';
				header("Content-Description: File Transfer");
				header("Content-Disposition: attachment; filename=$filename");
				header("Content-Type: application/csv; ");


				// file creation
				$file = fopen('php://output', 'w');


				//$header_tit = array("OverAll Activity");
				//fputcsv($file, $header_tit);

				$header = array("status","Doc No","Version No/ Date","Project Code","IDEA Ref.No","Dept.","Originated by -  Name ","Date","Approved Dept","Approved Name","Date","Confirmed by","Date","ACTIVITY","Activity Desc","Benefit Area","Plant Name","Idea Theme","Block/Line/Machine/Others","Suggested Kaizen ( Logical Correlation with root cause)","Problem Statement","Counter measure( Engineering solution)","BEFORE","AFTER","Yield","Cycle Time","Cost","Man power","Consumables","Others","Total Savings","Approved by (IE)","Approved by (Accounts)","EmpID","TeamName","Function","Root Cause ( Problem Phenomena) Type","Root Cause Explanation ","Brief explanation of present conditions","Brief explanation of Improvements done","Horizontal Deployment","In Other Machines within the cell","Within the Department in all the machine groups","In Other Dept/ Other Location","Any other Relevant Points","Scope and Plan for Horizontal Deployment","Benifits (P,Q,C,S,D,M,E)");
				fputcsv($file, $header);

				if($statusname=='allideas') { $status = '1,2,3,4,5,6,7'; }
				//else if($statusname=='hodapproved') { $status = '2'; }
				//else if($statusname=='hodrejected') { $status = '3'; }

				$listmyideasbystatus = $this->listmyideasbystatus_ideagen($status);
				foreach ($listmyideasbystatus as $listmyideasbystatusRow) {
					/*
					idea_id
					profile_id
					viv_email

					activity
					activity_desc
					benifit_area
					tepl_plant
					ktheme
					area_line_machine
					idea
					plantname
					prob_stmt
					count_measur
					cs_quality
					cs_cost
					cs_material
					cs_manpower
					cs_consumables
					cs_others
					cs_totalsavings
					cs_appr_ie
					cs_appr_acco
					cs_standardization
					cs_sopsp
					cs_drawing
					before_img
					before_img_filetype
					after_img
					after_img_filetype
					root_cause
					root_cause_exp
					brf_exp_precond
					brf_exp_impdone
					benifits
					horizontal1
					horizontal2
					horizontal3
					horizontal4
					confirm_dept
					confirm_name
					confirm_date
					status
					sub_by
					sdate
					sday
					smonth
					syear
					subdatetime
					updatedinfo
					hod_email
					hod_status
					hod_datetime
					iedept_email
					iedept_status
					iedept_datetime
					*/


					$idea_id =    $listmyideasbystatusRow->idea_id;
					$doc_no =    $listmyideasbystatusRow->doc_no;
					$version_no =    $listmyideasbystatusRow->version_no;
					$proj_code =    $listmyideasbystatusRow->proj_code;
					$ref_no =    $listmyideasbystatusRow->ref_no;
					$origi_dept =    $listmyideasbystatusRow->origi_dept;
					$origi_name =    $listmyideasbystatusRow->origi_name;
					$origi_date =    $listmyideasbystatusRow->origi_date;
					$approv_dept =    $listmyideasbystatusRow->approv_dept;
					$approv_name =    $listmyideasbystatusRow->approv_name;
					$approv_date =    $listmyideasbystatusRow->approv_date;

					$activity =    $listmyideasbystatusRow->activity;
					$activity_desc =    $listmyideasbystatusRow->activity_desc;
					$benifit_area =    $listmyideasbystatusRow->benifit_area;
					$tepl_plant =    $listmyideasbystatusRow->tepl_plant;
					$ktheme =    $listmyideasbystatusRow->ktheme;
					$ktheme =    $listmyideasbystatusRow->ktheme;
					//$area_line_machine =    $listmyideasbystatusRow->area_line_machine;
					$idea =    $listmyideasbystatusRow->idea;
					$plantname =    $listmyideasbystatusRow->plantname;
					$prob_stmt =    $listmyideasbystatusRow->prob_stmt;
					$count_measur =    $listmyideasbystatusRow->count_measur;



					$cs_yield =    $listmyideasbystatusRow->cs_yield;
					$cs_cycletime =    $listmyideasbystatusRow->cs_cycletime;
					$cs_cost =    $listmyideasbystatusRow->cs_cost;
					$cs_manpower =    $listmyideasbystatusRow->cs_manpower;
					$cs_consumables =    $listmyideasbystatusRow->cs_consumables;
					$cs_others =    $listmyideasbystatusRow->cs_others;
					$cs_totalsavings =    $listmyideasbystatusRow->cs_totalsavings;
					$cs_appr_ie =    $listmyideasbystatusRow->cs_appr_ie;
					$cs_appr_acco =    $listmyideasbystatusRow->cs_appr_acco;

					//$cs_material =    $listmyideasbystatusRow->cs_material;
					//$cs_standardization =    $listmyideasbystatusRow->cs_standardization;
					//$cs_sopsp =    $listmyideasbystatusRow->cs_sopsp;
					//$cs_drawing =    $listmyideasbystatusRow->cs_drawing;


					$before_img =    $listmyideasbystatusRow->before_img;
					$before_img_filetype =    $listmyideasbystatusRow->before_img_filetype;
					$after_img =    $listmyideasbystatusRow->after_img;
					$after_img_filetype =    $listmyideasbystatusRow->after_img_filetype;
					$root_cause =    $listmyideasbystatusRow->root_cause;
					$root_cause_exp =    $listmyideasbystatusRow->root_cause_exp;
					//$root_cause_block =    $listmyideasbystatusRow->root_cause_block;

					$brf_exp_precond =    $listmyideasbystatusRow->brf_exp_precond;
					$brf_exp_impdone =    $listmyideasbystatusRow->brf_exp_impdone;
					$benifits =    $listmyideasbystatusRow->benifits;

					$horizradio =    $listmyideasbystatusRow->horizradio;
					$horizontal1 =    $listmyideasbystatusRow->horizontal1;
					$horizontal2 =    $listmyideasbystatusRow->horizontal2;
					$horizontal3 =    $listmyideasbystatusRow->horizontal3;
					$horizontal4 =    $listmyideasbystatusRow->horizontal4;

					$status =    $listmyideasbystatusRow->status;
					if($status==1) {  $statusdata = 'Waiting for DRI Approval'; }
					elseif($status==2) {
						$statusdata_1 = 'DRI Approved';
						if(empty($cs_cycletime) && empty($cs_manpower) && $cs_cost<50000) {
							$statusdata_2 = '';
						} else {
							$statusdata_2 = ' & Waiting for';
							if(!empty($cs_cycletime) || !empty($cs_manpower)) { $statusdata_3 = 'IE Dept'; }
							if((!empty($cs_cycletime) || !empty($cs_manpower)) && $cs_cost>=50000) { $statusdata_4 =', '; }
							if($cs_cost>=50000) { $statusdata_5 = 'Finance'; }
							$statusdata_5 = 'Approval';
						}

						if(empty($statusdata_2)) { $statusdata_2 = ''; }
						if(empty($statusdata_3)) { $statusdata_3 = ''; }
						if(empty($statusdata_4)) { $statusdata_4 = ''; }
						if(empty($statusdata_5)) { $statusdata_5 = ''; }

						$statusdata = $statusdata_1."".$statusdata_2."".$statusdata_3."".$statusdata_4."".$statusdata_5;

					}
					elseif($status==3) { $statusdata = 'DRI Rejected'; }
					elseif($status==4) {
						$statusdata_1 = 'IE Department Approved';
						if($cs_cost>=50000) { $statusdata_2 = '& Waiting for Finance Approval'; }
						if(empty($statusdata_2)) { $statusdata_2 = ''; }
						$statusdata = $statusdata_1."".$statusdata_2;
					}
					elseif($status==5) { $statusdata = 'IE Department Rejected'; }
					elseif($status==6) { $statusdata = 'Finance Approved'; }
					elseif($status==7) { $statusdata = 'Finance Rejected'; }


					/*
					$listteammembersbyiid = $this->mapi->listteammembersbyiid_ideagen($idea_id);
					$teamnames = "EmpID - TeamName - Function \r";
					foreach ($listteammembersbyiid as $rowArrayTeam) {
						 $teamid = $rowArrayTeam->teamid;
						 $empid = $rowArrayTeam->empid;
						 $teamname = $rowArrayTeam->teamname;
						 $function = $rowArrayTeam->function;

						 $teamnames .= $empid." - ".$teamname." - ".$function."\r";
					}
					*/


					$listsustenancebyiid = $this->mapi->listsustenancebyiid_ideagen($idea_id);

					$listsus = "SN - M/C - Target Date - Responsibility - Status \r";
					foreach ($listsustenancebyiid as $listsustenancebyiidArray) {
						 $sus_id = $listsustenancebyiidArray->sus_id;
						 $sn = $listsustenancebyiidArray->sn;
						 $mc = $listsustenancebyiidArray->mc;
						 $targetdate = $listsustenancebyiidArray->targetdate;
						 $responsi = $listsustenancebyiidArray->responsi;
						 $sus_status = $listsustenancebyiidArray->sus_status;

						 $listsus .= $sn." - ".$mc." - ".$targetdate." - ".$responsi." - ".$sus_status."\r";
					 }


					$report = array($statusdata,$doc_no,$version_no,$proj_code,$ref_no,$origi_dept,$origi_name,$origi_date,$approv_dept,$approv_name,$approv_date,"","",$activity,$activity_desc,$benifit_area,$plantname,$ktheme,$tepl_plant,$idea,$prob_stmt,$count_measur,$before_img,$after_img,$cs_yield,$cs_cycletime,$cs_cost,$cs_manpower,$cs_consumables,$cs_others,$cs_totalsavings,$cs_appr_ie,$cs_appr_acco,"","","",$root_cause,$root_cause_exp,$brf_exp_precond,$brf_exp_impdone,$horizradio,$horizontal1,$horizontal2,$horizontal3,$horizontal4,$listsus,$benifits);

					fputcsv($file, $report);


					$listteammembersbyiid = $this->mapi->listteammembersbyiid_ideagen($idea_id);
					//$teamnames = "EmpID - TeamName - Function \r";
					foreach ($listteammembersbyiid as $rowArrayTeam) {
						 $teamid = $rowArrayTeam->teamid;
						 $empid = $rowArrayTeam->empid;
						 $teamname = $rowArrayTeam->teamname;
						 $function = $rowArrayTeam->function;

						 //$teamnames .= $empid." - ".$teamname." - ".$function."\r";
						 $report2 = array("","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","",$empid,$teamname,$function,"","","","","","","","","","","");

					  fputcsv($file, $report2);
					}
					}




				//fputcsv($file, $entityid);

				fclose($file);
				exit;




		}


		/********************************
		 SUPER ADMIN - listmyideasbystatus
		********************************/
		public function listmyideasbystatus_ideagen($status) {

			$viv_user_type = $this->session->userdata('viv_user_type');
			$viv_profile_id = $this->session->userdata('viv_profile_id');
			$viv_email = $this->session->userdata('viv_email');

			$status_ex = explode(',',$status);


					$this->db->select('*');
					$this->db->from('idea_gen');
					$this->db->where_in('status', $status_ex);
					//$this->db->where('profileid', $wl_profileid);
					$this->db->order_by('id', 'DESC');
					$sql = $this->db->get();
					//return $sql->num_rows();
					return $sql->result();



		}





		/********************************
	ajaxgetdeptbydomain
	********************************/
	public function ajaxgetdeptbydomain() {
		  $fil_domain = $this->input->post('fil_domain');

			$this->db->select('depart');
			$this->db->from('usermang');
			$this->db->where('domain', $fil_domain);
			$this->db->group_by('depart');
 			//$this->db->order_by('panel_model', 'ASC');
			$sql = $this->db->get();
			echo json_encode(array('result'=>$sql->result()));
	}





	/********************************
	 SUPER ADMIN - count_totalmonthbyyear_emp
	********************************/
	public function count_totalmonthbyyear_emp($month,$year,$type) {

		$viv_user_type = $this->session->userdata('viv_user_type');
		$viv_profile_id = $this->session->userdata('viv_profile_id');
		$viv_email = $this->session->userdata('viv_email');

		if(empty($month) || $month =='ALL') { $month = ''; }
		if(empty($year) || $year =='ALL') { $year = ''; }

		if($type=='approved') {

			$status = '2,4,6';
			$status_ex = explode(',',$status);

				$this->db->select('*');
				$this->db->from('ideas');
				$this->db->where_in('status', $status_ex);
				$this->db->where('profile_id', $viv_profile_id);
				//$this->db->like('smonth', $month);
				//$this->db->like('syear', $year);
				$this->db->like('origi_month', $month);
				$this->db->like('origi_year', $year);
				$this->db->order_by('id', 'DESC');
				$sql = $this->db->get();
				return $sql->num_rows();

		}

		elseif($type=='submitted') {

			$status = '1,2,3,4,5,6,7';
			$status_ex = explode(',',$status);

				$this->db->select('*');
				$this->db->from('ideas');
				$this->db->where_in('status', $status_ex);
				$this->db->where('profile_id', $viv_profile_id);
				//$this->db->like('smonth', $month);
				//$this->db->like('syear', $year);
				$this->db->like('origi_month', $month);
				$this->db->like('origi_year', $year);
				$this->db->order_by('id', 'DESC');
				$sql = $this->db->get();
				return $sql->num_rows();

		}

		elseif($type=='rejected') {

			$status = '3,5,7';
			$status_ex = explode(',',$status);

				$this->db->select('*');
				$this->db->from('ideas');
				$this->db->where_in('status', $status_ex);
				$this->db->where('profile_id', $viv_profile_id);
				//$this->db->like('smonth', $month);
				//$this->db->like('syear', $year);
				$this->db->like('origi_month', $month);
				$this->db->like('origi_year', $year);
				$this->db->order_by('id', 'DESC');
				$sql = $this->db->get();
				return $sql->num_rows();

		}

		elseif($type=='pendingapproval') {

			$status = '1';
			$status_ex = explode(',',$status);

				$this->db->select('*');
				$this->db->from('ideas');
				$this->db->where_in('status', $status_ex);
				$this->db->where('profile_id', $viv_profile_id);
				//$this->db->like('smonth', $month);
				//$this->db->like('syear', $year);
				$this->db->like('origi_month', $month);
				$this->db->like('origi_year', $year);
 				$this->db->order_by('id', 'DESC');
				$sql = $this->db->get();
				return $sql->num_rows();

		}

	}




		/********************************
		 SUPER ADMIN - count_totalmonthbyyear_emp_ideagen
		********************************/
		public function count_totalmonthbyyear_emp_ideagen($month,$year,$type) {

			$viv_user_type = $this->session->userdata('viv_user_type');
			$viv_profile_id = $this->session->userdata('viv_profile_id');
			$viv_email = $this->session->userdata('viv_email');

			if(empty($month) || $month =='ALL') { $month = ''; }
			if(empty($year) || $year =='ALL') { $year = ''; }

			if($type=='approved') {

				$status = '2,4,6';
				$status_ex = explode(',',$status);

					$this->db->select('*');
					$this->db->from('idea_gen');
					$this->db->where_in('status', $status_ex);
					$this->db->where('profile_id', $viv_profile_id);
					//$this->db->like('smonth', $month);
					//$this->db->like('syear', $year);
					$this->db->like('origi_month', $month);
					$this->db->like('origi_year', $year);
					$this->db->order_by('id', 'DESC');
					$sql = $this->db->get();
					return $sql->num_rows();

			}

			elseif($type=='submitted') {

				$status = '1,2,3,4,5,6,7';
				$status_ex = explode(',',$status);

					$this->db->select('*');
					$this->db->from('idea_gen');
					$this->db->where_in('status', $status_ex);
					$this->db->where('profile_id', $viv_profile_id);
					//$this->db->like('smonth', $month);
					//$this->db->like('syear', $year);
					$this->db->like('origi_month', $month);
					$this->db->like('origi_year', $year);
					$this->db->order_by('id', 'DESC');
					$sql = $this->db->get();
					return $sql->num_rows();

			}

			elseif($type=='rejected') {

				$status = '3,5,7';
				$status_ex = explode(',',$status);

					$this->db->select('*');
					$this->db->from('idea_gen');
					$this->db->where_in('status', $status_ex);
					$this->db->where('profile_id', $viv_profile_id);
					//$this->db->like('smonth', $month);
					//$this->db->like('syear', $year);
					$this->db->like('origi_month', $month);
					$this->db->like('origi_year', $year);
					$this->db->order_by('id', 'DESC');
					$sql = $this->db->get();
					return $sql->num_rows();

			}

			elseif($type=='pendingapproval') {

				$status = '1';
				$status_ex = explode(',',$status);

					$this->db->select('*');
					$this->db->from('idea_gen');
					$this->db->where_in('status', $status_ex);
					$this->db->where('profile_id', $viv_profile_id);
					//$this->db->like('smonth', $month);
					//$this->db->like('syear', $year);
					$this->db->like('origi_month', $month);
					$this->db->like('origi_year', $year);
	 				$this->db->order_by('id', 'DESC');
					$sql = $this->db->get();
					return $sql->num_rows();

			}

		}




		/********************************
		 SUPER ADMIN - count_totalmonthbyyear_mang
		********************************/
		public function count_totalmonthbyyear_mang($month,$year,$domain,$dept,$type) {

			$viv_user_type = $this->session->userdata('viv_user_type');
			$viv_profile_id = $this->session->userdata('viv_profile_id');
			$viv_email = $this->session->userdata('viv_email');

			if(empty($month) || $month =='ALL') { $month = ''; }
			if(empty($year) || $year =='ALL') { $year = ''; }
			if(empty($dept) || $dept =='ALL') { $dept = ''; }
			if(empty($domain) || $domain =='ALL') { $domain = ''; }


			if($type=='approved') {

				$status = '2,4,6';
				$status_ex = explode(',',$status);

					$this->db->select('*');
					$this->db->from('ideas');
					$this->db->where('approv_email', $viv_email);
					$this->db->where_in('status', $status_ex);
					$this->db->where('imgapprov', 2);
					//$this->db->like('smonth', $month);
					//$this->db->like('syear', $year);
					$this->db->like('origi_month', $month);
					$this->db->like('origi_year', $year);
					$this->db->like('origi_domain', $domain);
					if(empty($dept) || $dept =='ALL') {
							$this->db->like('origi_dept', $dept);
					} else {
							$this->db->where('origi_dept', $dept);
					}
					$this->db->order_by('id', 'DESC');
					$sql = $this->db->get();
					return $sql->num_rows();

			}

			elseif($type=='submitted') {

				$status = '1,2,3,4,5,6,7';
				$status_ex = explode(',',$status);

					$this->db->select('*');
					$this->db->from('ideas');
					$this->db->where('approv_email', $viv_email);
					$this->db->where_in('status', $status_ex);
					$this->db->where('imgapprov', 2);
					//$this->db->like('smonth', $month);
					//$this->db->like('syear', $year);
					$this->db->like('origi_month', $month);
					$this->db->like('origi_year', $year);
					$this->db->like('origi_domain', $domain);
					if(empty($dept) || $dept =='ALL') {
							$this->db->like('origi_dept', $dept);
					} else {
							$this->db->where('origi_dept', $dept);
					}
					$this->db->order_by('id', 'DESC');
					$sql = $this->db->get();
					return $sql->num_rows();

			}

			elseif($type=='rejected') {

				$status = '3,5,7';
				$status_ex = explode(',',$status);

					$this->db->select('*');
					$this->db->from('ideas');
					$this->db->where('approv_email', $viv_email);
					$this->db->where_in('status', $status_ex);
					$this->db->where('imgapprov', 2);
					//$this->db->like('smonth', $month);
					//$this->db->like('syear', $year);
					$this->db->like('origi_month', $month);
					$this->db->like('origi_year', $year);
					$this->db->like('origi_domain', $domain);
					if(empty($dept) || $dept =='ALL') {
							$this->db->like('origi_dept', $dept);
					} else {
							$this->db->where('origi_dept', $dept);
					}
					$this->db->order_by('id', 'DESC');
					$sql = $this->db->get();
					return $sql->num_rows();

			}

			elseif($type=='pendingapproval') {

				$status = '1';
				$status_ex = explode(',',$status);

					$this->db->select('*');
					$this->db->from('ideas');
					$this->db->where('approv_email', $viv_email);
					$this->db->where_in('status', $status_ex);
					$this->db->where('imgapprov', 2);
					//$this->db->like('smonth', $month);
					//$this->db->like('syear', $year);
					$this->db->like('origi_month', $month);
					$this->db->like('origi_year', $year);
					$this->db->like('origi_domain', $domain);
					if(empty($dept) || $dept =='ALL') {
							$this->db->like('origi_dept', $dept);
					} else {
							$this->db->where('origi_dept', $dept);
					}
					$this->db->order_by('id', 'DESC');
					$sql = $this->db->get();
					return $sql->num_rows();

			}

		}



		/********************************
		 SUPER ADMIN - count_totalmonthbyyear_mang_ideagen
		********************************/
		public function count_totalmonthbyyear_mang_ideagen($month,$year,$domain,$dept,$type) {

			$viv_user_type = $this->session->userdata('viv_user_type');
			$viv_profile_id = $this->session->userdata('viv_profile_id');
			$viv_email = $this->session->userdata('viv_email');

			if(empty($month) || $month =='ALL') { $month = ''; }
			if(empty($year) || $year =='ALL') { $year = ''; }
			if(empty($dept) || $dept =='ALL') { $dept = ''; }
			if(empty($domain) || $domain =='ALL') { $domain = ''; }


			if($type=='approved') {

				$status = '2,4,6';
				$status_ex = explode(',',$status);

					$this->db->select('*');
					$this->db->from('idea_gen');
					$this->db->where('approv_email', $viv_email);
					$this->db->where_in('status', $status_ex);
					//$this->db->like('smonth', $month);
					//$this->db->like('syear', $year);
					$this->db->like('origi_month', $month);
					$this->db->like('origi_year', $year);
					$this->db->like('origi_domain', $domain);
					if(empty($dept) || $dept =='ALL') {
								$this->db->like('origi_dept', $dept);
					} else {
							 $this->db->where('origi_dept', $dept);
					}
					$this->db->order_by('id', 'DESC');
					$sql = $this->db->get();
					return $sql->num_rows();

			}

			elseif($type=='submitted') {

				$status = '1,2,3,4,5,6,7';
				$status_ex = explode(',',$status);

					$this->db->select('*');
					$this->db->from('idea_gen');
					$this->db->where('approv_email', $viv_email);
					$this->db->where_in('status', $status_ex);
					//$this->db->like('smonth', $month);
					//$this->db->like('syear', $year);
					$this->db->like('origi_month', $month);
					$this->db->like('origi_year', $year);
					$this->db->like('origi_domain', $domain);
					if(empty($dept) || $dept =='ALL') {
								$this->db->like('origi_dept', $dept);
					} else {
							 $this->db->where('origi_dept', $dept);
					}
					$this->db->order_by('id', 'DESC');
					$sql = $this->db->get();
					return $sql->num_rows();

			}

			elseif($type=='rejected') {

				$status = '3,5,7';
				$status_ex = explode(',',$status);

					$this->db->select('*');
					$this->db->from('idea_gen');
					$this->db->where('approv_email', $viv_email);
					$this->db->where_in('status', $status_ex);
					//$this->db->like('smonth', $month);
					//$this->db->like('syear', $year);
					$this->db->like('origi_month', $month);
					$this->db->like('origi_year', $year);
					$this->db->like('origi_domain', $domain);
					if(empty($dept) || $dept =='ALL') {
								$this->db->like('origi_dept', $dept);
					} else {
							 $this->db->where('origi_dept', $dept);
					}
					$this->db->order_by('id', 'DESC');
					$sql = $this->db->get();
					return $sql->num_rows();

			}

			elseif($type=='pendingapproval') {

				$status = '1';
				$status_ex = explode(',',$status);

					$this->db->select('*');
					$this->db->from('idea_gen');
					$this->db->where('approv_email', $viv_email);
					$this->db->where_in('status', $status_ex);
					//$this->db->like('smonth', $month);
					//$this->db->like('syear', $year);
					$this->db->like('origi_month', $month);
					$this->db->like('origi_year', $year);
					$this->db->like('origi_domain', $domain);
					if(empty($dept) || $dept =='ALL') {
								$this->db->like('origi_dept', $dept);
					} else {
							 $this->db->where('origi_dept', $dept);
					}
					$this->db->order_by('id', 'DESC');
					$sql = $this->db->get();
					return $sql->num_rows();

			}

		}


		/********************************
		 SUPER ADMIN - count_listmyideas_verifiy_iedept_dashb
		********************************/
		public function count_listmyideas_verifiy_iedept_dashb($year_sub,$domain_sub,$dept_sub) {

			$viv_user_type = $this->session->userdata('viv_user_type');
			$viv_profile_id = $this->session->userdata('viv_profile_id');
			$viv_email = $this->session->userdata('viv_email');

			$status = '2,4,5,6,7';
			$status_ex = explode(',',$status);

			$status_iedept = '1,2,3';
			$status_iedept_ex = explode(',',$status_iedept);





			if(empty($year_sub) || $year_sub =='ALL') {  $year_sub = ''; }
			if(empty($dept_sub) || $dept_sub == 'ALL') { $dept_sub = '';  }
			if(empty($domain_sub) || $domain_sub == 'ALL') { $domain_sub = '';  }


			$this->db->select('*');
			$this->db->from('ideas');
			$this->db->where_in('status', $status_ex);
			$this->db->where_in('iedept_status', $status_iedept_ex);
			//$this->db->where('profileid', $wl_profileid);
			$this->db->like('syear', $year_sub);
			$this->db->like('origi_dept', $dept_sub);
			$this->db->like('origi_domain', $domain_sub);
			$this->db->order_by('id', 'DESC');
			$sql = $this->db->get();
			return $sql->num_rows();

		}




		/********************************
		 SUPER ADMIN - count_listmyideas_verifiy_sts_iedept_dashb
		********************************/
		public function count_listmyideas_verifiy_sts_iedept_dashb($status_iedept,$year_sub,$domain_sub,$dept_sub) {

			$viv_user_type = $this->session->userdata('viv_user_type');
			$viv_profile_id = $this->session->userdata('viv_profile_id');
			$viv_email = $this->session->userdata('viv_email');



			//$status_iedept = '1,2,3';
			//$status_iedept_ex = explode(',',$status_iedept);

			if(empty($year_sub) || $year_sub =='ALL') {  $year_sub = ''; }
			if(empty($dept_sub) || $dept_sub == 'ALL') { $dept_sub = '';  }
			if(empty($domain_sub) || $domain_sub == 'ALL') { $domain_sub = '';  }


			$this->db->select('*');
			$this->db->from('ideas');

			if($status_iedept==1) {
				$status = '2,4,6';
				$status_ex = explode(',',$status);

				$this->db->where_in('status', $status_ex);
				$this->db->where_in('iedept_status', $status_iedept);
			} elseif($status_iedept==2) {
				$status = '2,4,6';
				$status_ex = explode(',',$status);

				$this->db->where_in('status', $status_ex);
				$this->db->where_in('iedept_status', $status_iedept);
			} elseif($status_iedept==3) {
				$status = '3,5,7';
				$status_ex = explode(',',$status);

				$this->db->where_in('status', $status_ex);
				$this->db->where_in('iedept_status', $status_iedept);
			}

			//$this->db->where('profileid', $wl_profileid);
			$this->db->like('syear', $year_sub);
			$this->db->like('origi_dept', $dept_sub);
			$this->db->like('origi_domain', $domain_sub);
			$this->db->order_by('id', 'DESC');
			$sql = $this->db->get();
			return $sql->num_rows();


		}



		/********************************
		 SUPER ADMIN - count_totalmonthbyyear_iedept
		********************************/
		public function count_totalmonthbyyear_iedept($month,$year,$domain,$dept,$type) {

			$viv_user_type = $this->session->userdata('viv_user_type');
			$viv_profile_id = $this->session->userdata('viv_profile_id');
			$viv_email = $this->session->userdata('viv_email');

			if(empty($month) || $month =='ALL') { $month = ''; }
			if(empty($year) || $year =='ALL') { $year = ''; }
			if(empty($dept) || $dept =='ALL') { $dept = ''; }
			if(empty($domain) || $domain =='ALL') { $domain = ''; }


			if($type=='approved') {

				$status = '2,4,6';
				$status_ex = explode(',',$status);

				$status_iedept = '2';
				$status_iedept_ex = explode(',',$status_iedept);

					$this->db->select('*');
					$this->db->from('ideas');
					$this->db->where_in('status', $status_ex);
					$this->db->where_in('iedept_status', $status_iedept_ex);
					//$this->db->like('smonth', $month);
					//$this->db->like('syear', $year);
					$this->db->like('origi_month', $month);
					$this->db->like('origi_year', $year);

					$this->db->like('origi_domain', $domain);
					$this->db->like('origi_dept', $dept);
					$this->db->order_by('id', 'DESC');
					$sql = $this->db->get();
					return $sql->num_rows();

			}

			elseif($type=='submitted') {

				$status = '2,4,5,6,7';
				$status_ex = explode(',',$status);

				$status_iedept = '1,2,3';
				$status_iedept_ex = explode(',',$status_iedept);

					$this->db->select('*');
					$this->db->from('ideas');
					$this->db->where_in('status', $status_ex);
					$this->db->where_in('iedept_status', $status_iedept_ex);
					//$this->db->like('smonth', $month);
					//$this->db->like('syear', $year);
					$this->db->like('origi_month', $month);
					$this->db->like('origi_year', $year);

					$this->db->like('origi_domain', $domain);
					$this->db->like('origi_dept', $dept);
					$this->db->order_by('id', 'DESC');
					$sql = $this->db->get();
					return $sql->num_rows();

			}

			elseif($type=='rejected') {

				$status = '5,7';
				$status_ex = explode(',',$status);

				$status_iedept = '3';
				$status_iedept_ex = explode(',',$status_iedept);


					$this->db->select('*');
					$this->db->from('ideas');
					$this->db->where_in('status', $status_ex);
					$this->db->where_in('iedept_status', $status_iedept_ex);
					//$this->db->like('smonth', $month);
					//$this->db->like('syear', $year);
					$this->db->like('origi_month', $month);
					$this->db->like('origi_year', $year);

					$this->db->like('origi_domain', $domain);
					$this->db->like('origi_dept', $dept);
					$this->db->order_by('id', 'DESC');
					$sql = $this->db->get();
					return $sql->num_rows();

			}

			elseif($type=='pendingapproval') {

				$status = '2,4,6';
				$status_ex = explode(',',$status);

				$status_iedept = '1';
				$status_iedept_ex = explode(',',$status_iedept);

					$this->db->select('*');
					$this->db->from('ideas');
					$this->db->where_in('status', $status_ex);
					$this->db->where_in('iedept_status', $status_iedept_ex);
					//$this->db->like('smonth', $month);
					//$this->db->like('syear', $year);
					$this->db->like('origi_month', $month);
					$this->db->like('origi_year', $year);

					$this->db->like('origi_domain', $domain);
					$this->db->like('origi_dept', $dept);
					$this->db->order_by('id', 'DESC');
					$sql = $this->db->get();
					return $sql->num_rows();

			}

		}


		/********************************
		 SUPER ADMIN - count_listmyideas_verifiy_iedept_ideagen_dashb
		********************************/
		public function count_listmyideas_verifiy_iedept_ideagen_dashb($year_sub,$domain_sub,$dept_sub) {

			$viv_user_type = $this->session->userdata('viv_user_type');
			$viv_profile_id = $this->session->userdata('viv_profile_id');
			$viv_email = $this->session->userdata('viv_email');

			$status = '2,4,5,6,7';
			$status_ex = explode(',',$status);

			$status_iedept = '1,2,3';
			$status_iedept_ex = explode(',',$status_iedept);





			if(empty($year_sub) || $year_sub =='ALL') {  $year_sub = ''; }
			if(empty($dept_sub) || $dept_sub == 'ALL') { $dept_sub = '';  }
			if(empty($domain_sub) || $domain_sub == 'ALL') { $domain_sub = '';  }


			$this->db->select('*');
			$this->db->from('idea_gen');
			$this->db->where_in('status', $status_ex);
			$this->db->where_in('iedept_status', $status_iedept_ex);
			//$this->db->where('profileid', $wl_profileid);
			$this->db->like('syear', $year_sub);
			$this->db->like('origi_dept', $dept_sub);
			$this->db->like('origi_domain', $domain_sub);
			$this->db->order_by('id', 'DESC');
			$sql = $this->db->get();
			return $sql->num_rows();

		}


		/********************************
		 SUPER ADMIN - count_listmyideas_verifiy_sts_iedept_ideagen_dashb
		********************************/
		public function count_listmyideas_verifiy_sts_iedept_ideagen_dashb($status_iedept,$year_sub,$domain_sub,$dept_sub) {

			$viv_user_type = $this->session->userdata('viv_user_type');
			$viv_profile_id = $this->session->userdata('viv_profile_id');
			$viv_email = $this->session->userdata('viv_email');



			//$status_iedept = '1,2,3';
			//$status_iedept_ex = explode(',',$status_iedept);

			if(empty($year_sub) || $year_sub =='ALL') {  $year_sub = ''; }
			if(empty($dept_sub) || $dept_sub == 'ALL') { $dept_sub = '';  }
			if(empty($domain_sub) || $domain_sub == 'ALL') { $domain_sub = '';  }


			$this->db->select('*');
			$this->db->from('idea_gen');

			if($status_iedept==1) {
			  $status = '2,4,6';
			  $status_ex = explode(',',$status);

			  $this->db->where_in('status', $status_ex);
			  $this->db->where_in('iedept_status', $status_iedept);
			} elseif($status_iedept==2) {
			  $status = '2,4,6';
			  $status_ex = explode(',',$status);

			  $this->db->where_in('status', $status_ex);
			  $this->db->where_in('iedept_status', $status_iedept);
			} elseif($status_iedept==3) {
			  $status = '3,5,7';
			  $status_ex = explode(',',$status);

			  $this->db->where_in('status', $status_ex);
			  $this->db->where_in('iedept_status', $status_iedept);
			}

			//$this->db->where('profileid', $wl_profileid);
			$this->db->like('syear', $year_sub);
			$this->db->like('origi_dept', $dept_sub);
			$this->db->like('origi_domain', $domain_sub);
			$this->db->order_by('id', 'DESC');
			$sql = $this->db->get();
			return $sql->num_rows();


		}





				/********************************
				 SUPER ADMIN - count_totalmonthbyyear_iedept_ideagen
				********************************/
				public function count_totalmonthbyyear_iedept_ideagen($month,$year,$domain,$dept,$type) {

					$viv_user_type = $this->session->userdata('viv_user_type');
					$viv_profile_id = $this->session->userdata('viv_profile_id');
					$viv_email = $this->session->userdata('viv_email');

					if(empty($month) || $month =='ALL') { $month = ''; }
					if(empty($year) || $year =='ALL') { $year = ''; }
					if(empty($dept) || $dept =='ALL') { $dept = ''; }
					if(empty($domain) || $domain =='ALL') { $domain = ''; }


					if($type=='approved') {

						$status = '2,4,6';
				    $status_ex = explode(',',$status);

				    $status_iedept = '2';
				    $status_iedept_ex = explode(',',$status_iedept);

							$this->db->select('*');
							$this->db->from('idea_gen');
							$this->db->where_in('status', $status_ex);
							$this->db->where_in('iedept_status', $status_iedept_ex);
							//$this->db->like('smonth', $month);
							//$this->db->like('syear', $year);
							$this->db->like('origi_month', $month);
							$this->db->like('origi_year', $year);

							$this->db->like('origi_domain', $domain);
							$this->db->like('origi_dept', $dept);
							$this->db->order_by('id', 'DESC');
							$sql = $this->db->get();
							return $sql->num_rows();

					}

					elseif($type=='submitted') {

						$status = '2,4,5,6,7';
				    $status_ex = explode(',',$status);

				    $status_iedept = '1,2,3';
				    $status_iedept_ex = explode(',',$status_iedept);

							$this->db->select('*');
							$this->db->from('idea_gen');
							$this->db->where_in('status', $status_ex);
							$this->db->where_in('iedept_status', $status_iedept_ex);
							//$this->db->like('smonth', $month);
							//$this->db->like('syear', $year);
							$this->db->like('origi_month', $month);
							$this->db->like('origi_year', $year);

							$this->db->like('origi_domain', $domain);
							$this->db->like('origi_dept', $dept);
							$this->db->order_by('id', 'DESC');
							$sql = $this->db->get();
							return $sql->num_rows();

					}

					elseif($type=='rejected') {

						$status = '5,7';
						$status_ex = explode(',',$status);

						$status_iedept = '3';
						$status_iedept_ex = explode(',',$status_iedept);

							$this->db->select('*');
							$this->db->from('idea_gen');
							$this->db->where_in('status', $status_ex);
							$this->db->where_in('iedept_status', $status_iedept_ex);
							//$this->db->like('smonth', $month);
							//$this->db->like('syear', $year);
							$this->db->like('origi_month', $month);
							$this->db->like('origi_year', $year);

							$this->db->like('origi_domain', $domain);
							$this->db->like('origi_dept', $dept);
							$this->db->order_by('id', 'DESC');
							$sql = $this->db->get();
							return $sql->num_rows();

					}

					elseif($type=='pendingapproval') {

						$status = '2,4,6';
				    $status_ex = explode(',',$status);

				    $status_iedept = '1';
				    $status_iedept_ex = explode(',',$status_iedept);

							$this->db->select('*');
							$this->db->from('idea_gen');
							$this->db->where_in('status', $status_ex);
							$this->db->where_in('iedept_status', $status_iedept_ex);
							//$this->db->like('smonth', $month);
							//$this->db->like('syear', $year);
							$this->db->like('origi_month', $month);
							$this->db->like('origi_year', $year);

							$this->db->like('origi_domain', $domain);
							$this->db->like('origi_dept', $dept);
							$this->db->order_by('id', 'DESC');
							$sql = $this->db->get();
							return $sql->num_rows();

					}

				}



				/********************************
				 SUPER ADMIN - count_listmyideas_verifiy_finance_dashb
				********************************/
				public function count_listmyideas_verifiy_finance_dashb($year_sub,$domain_sub,$dept_sub) {

					$viv_user_type = $this->session->userdata('viv_user_type');
					$viv_profile_id = $this->session->userdata('viv_profile_id');
					$viv_email = $this->session->userdata('viv_email');

					$fin_status = '1,2,3';
					$fin_status_ex = explode(',',$fin_status);

					$status = '4,6,7';
					$status_ex = explode(',',$status);


					if(empty($year_sub) || $year_sub =='ALL') {  $year_sub = ''; }
					if(empty($dept_sub) || $dept_sub == 'ALL') { $dept_sub = '';  }
					if(empty($domain_sub) || $domain_sub == 'ALL') { $domain_sub = '';  }

					$this->db->select('*');
					$this->db->from('ideas');
					$this->db->where_in('finance_status', $fin_status_ex);
					$this->db->where_in('status', $status_ex);
					$this->db->like('syear', $year_sub);
					$this->db->like('origi_dept', $dept_sub);
					$this->db->like('origi_domain', $domain_sub);
					$this->db->order_by('id', 'DESC');
					$sql = $this->db->get();
					return $sql->num_rows();

				}



				/********************************
					SUPER ADMIN - count_listmyideas_verifiy_sts_finance_dasb
				 ********************************/
				 public function count_listmyideas_verifiy_sts_finance_dasb($status,$year_sub,$domain_sub,$dept_sub) {

					 $viv_user_type = $this->session->userdata('viv_user_type');
					 $viv_profile_id = $this->session->userdata('viv_profile_id');
					 $viv_email = $this->session->userdata('viv_email');

					 //$status = '4,6,7';
					 //$status_ex = explode(',',$status);

					 //$status_iedept = '1,2,3';
					 //$status_iedept_ex = explode(',',$status_iedept);

					 if(empty($year_sub) || $year_sub =='ALL') {  $year_sub = ''; }
					 if(empty($dept_sub) || $dept_sub == 'ALL') { $dept_sub = '';  }
					 if(empty($domain_sub) || $domain_sub == 'ALL') { $domain_sub = '';  }

					 if($status==1) {
								 $status_ex = 4;
					 } elseif($status==2) {
								 $status_ex = 6;
					 } elseif($status==3) {
								 $status_ex = 7;
					 }

					 $this->db->select('*');
					 $this->db->from('ideas');
					 //$this->db->where_in('status', $status_ex);
					 $this->db->where_in('finance_status', $status);
					 $this->db->where('status', $status_ex);
					 $this->db->like('syear', $year_sub);
					 $this->db->like('origi_dept', $dept_sub);
					 $this->db->like('origi_domain', $domain_sub);
					 $this->db->order_by('id', 'DESC');
					 $sql = $this->db->get();
					 return $sql->num_rows();


				 }



				 /********************************
		 		 SUPER ADMIN - count_totalmonthbyyear_finance
		 		********************************/
		 		public function count_totalmonthbyyear_finance($month,$year,$domain,$dept,$type) {

		 			$viv_user_type = $this->session->userdata('viv_user_type');
		 			$viv_profile_id = $this->session->userdata('viv_profile_id');
		 			$viv_email = $this->session->userdata('viv_email');

		 			if(empty($month) || $month =='ALL') { $month = ''; }
		 			if(empty($year) || $year =='ALL') { $year = ''; }
		 			if(empty($dept) || $dept =='ALL') { $dept = ''; }
		 			if(empty($domain) || $domain =='ALL') { $domain = ''; }


		 			if($type=='approved') {



						$status = '4,6,7';
				    $status_ex = explode(',',$status);

				    $status_finance = '2';
				    $status_finance_ex = explode(',',$status_finance);

		 					$this->db->select('*');
		 					$this->db->from('ideas');
		 					$this->db->where_in('status', $status_ex);
							$this->db->where_in('finance_status', $status_finance_ex);
							//$this->db->like('smonth', $month);
							//$this->db->like('syear', $year);
							$this->db->like('origi_month', $month);
							$this->db->like('origi_year', $year);
		 					$this->db->like('origi_domain', $domain);
		 					$this->db->like('origi_dept', $dept);
		 					$this->db->order_by('id', 'DESC');
		 					$sql = $this->db->get();
		 					return $sql->num_rows();

		 			}

		 			elseif($type=='submitted') {

						$status = '4,6,7';
				    $status_ex = explode(',',$status);

				    $status_finance = '1,2,3';
				    $status_finance_ex = explode(',',$status_finance);

		 					$this->db->select('*');
		 					$this->db->from('ideas');
		 					$this->db->where_in('status', $status_ex);
							$this->db->where_in('finance_status', $status_finance_ex);
							//$this->db->like('smonth', $month);
							//$this->db->like('syear', $year);
							$this->db->like('origi_month', $month);
							$this->db->like('origi_year', $year);
		 					$this->db->like('origi_domain', $domain);
		 					$this->db->like('origi_dept', $dept);
		 					$this->db->order_by('id', 'DESC');
		 					$sql = $this->db->get();
		 					return $sql->num_rows();

		 			}

		 			elseif($type=='rejected') {

						$status = '4,6,7';
				    $status_ex = explode(',',$status);

				    $status_finance = '3';
				    $status_finance_ex = explode(',',$status_finance);

		 					$this->db->select('*');
		 					$this->db->from('ideas');
		 					$this->db->where_in('status', $status_ex);
							$this->db->where_in('finance_status', $status_finance_ex);
							//$this->db->like('smonth', $month);
							//$this->db->like('syear', $year);
							$this->db->like('origi_month', $month);
							$this->db->like('origi_year', $year);
		 					$this->db->like('origi_domain', $domain);
		 					$this->db->like('origi_dept', $dept);
		 					$this->db->order_by('id', 'DESC');
		 					$sql = $this->db->get();
		 					return $sql->num_rows();

		 			}

		 			elseif($type=='pendingapproval') {

						$status = '4,6,7';
				    $status_ex = explode(',',$status);

				    $status_finance = '1';
				    $status_finance_ex = explode(',',$status_finance);

		 					$this->db->select('*');
		 					$this->db->from('ideas');
		 					$this->db->where_in('status', $status_ex);
							$this->db->where_in('finance_status', $status_finance_ex);
							//$this->db->like('smonth', $month);
							//$this->db->like('syear', $year);
							$this->db->like('origi_month', $month);
							$this->db->like('origi_year', $year);
		 					$this->db->like('origi_domain', $domain);
		 					$this->db->like('origi_dept', $dept);
		 					$this->db->order_by('id', 'DESC');
		 					$sql = $this->db->get();
		 					return $sql->num_rows();

		 			}

		 		}


				/********************************
			 	SUPER ADMIN - count_listmyideas_verifiy_finance_ideagen_dashb
			  ********************************/
			  public function count_listmyideas_verifiy_finance_ideagen_dashb($year_sub,$domain_sub,$dept_sub) {

					$viv_user_type = $this->session->userdata('viv_user_type');
 				 $viv_profile_id = $this->session->userdata('viv_profile_id');
 				 $viv_email = $this->session->userdata('viv_email');

 				 $fin_status = '1,2,3';
 				 $fin_status_ex = explode(',',$fin_status);

 				 $status = '4,6,7';
 				 $status_ex = explode(',',$status);

				 if(empty($year_sub) || $year_sub =='ALL') {  $year_sub = ''; }
				 if(empty($dept_sub) || $dept_sub == 'ALL') { $dept_sub = '';  }
				 if(empty($domain_sub) || $domain_sub == 'ALL') { $domain_sub = '';  }


 				 $this->db->select('*');
 				 $this->db->from('idea_gen');
 				 $this->db->where_in('finance_status', $fin_status_ex);
 				 $this->db->where_in('status', $status_ex);
				 $this->db->like('syear', $year_sub);
				 $this->db->like('origi_dept', $dept_sub);
				 $this->db->like('origi_domain', $domain_sub);
 				 $this->db->order_by('id', 'DESC');
 				 $sql = $this->db->get();
 				 return $sql->num_rows();

			  }



				/********************************
		 		 SUPER ADMIN - count_listmyideas_verifiy_sts_finance_ideagen_dasb
		 		********************************/
		 		public function count_listmyideas_verifiy_sts_finance_ideagen_dasb($status,$year_sub,$domain_sub,$dept_sub) {

					$viv_user_type = $this->session->userdata('viv_user_type');
					$viv_profile_id = $this->session->userdata('viv_profile_id');
					$viv_email = $this->session->userdata('viv_email');

					//$status = '4,6,7';
					//$status_ex = explode(',',$status);

					//$status_iedept = '1,2,3';
					//$status_iedept_ex = explode(',',$status_iedept);

					if(empty($year_sub) || $year_sub =='ALL') {  $year_sub = ''; }
					if(empty($dept_sub) || $dept_sub == 'ALL') { $dept_sub = '';  }
					if(empty($domain_sub) || $domain_sub == 'ALL') { $domain_sub = '';  }

					if($status==1) {
								$status_ex = 4;
					} elseif($status==2) {
								$status_ex = 6;
					} elseif($status==3) {
								$status_ex = 7;
					}

					$this->db->select('*');
					$this->db->from('idea_gen');
					//$this->db->where_in('status', $status_ex);
					$this->db->where_in('finance_status', $status);
					$this->db->where('status', $status_ex);
					$this->db->like('syear', $year_sub);
					$this->db->like('origi_dept', $dept_sub);
					$this->db->like('origi_domain', $domain_sub);
					$this->db->order_by('id', 'DESC');
					$sql = $this->db->get();
					return $sql->num_rows();


		 		}



				/********************************
				 SUPER ADMIN - count_totalmonthbyyear_finance_ideagen
				********************************/
				public function count_totalmonthbyyear_finance_ideagen($month,$year,$domain,$dept,$type) {

					$viv_user_type = $this->session->userdata('viv_user_type');
					$viv_profile_id = $this->session->userdata('viv_profile_id');
					$viv_email = $this->session->userdata('viv_email');

					if(empty($month) || $month =='ALL') { $month = ''; }
					if(empty($year) || $year =='ALL') { $year = ''; }
					if(empty($dept) || $dept =='ALL') { $dept = ''; }
					if(empty($domain) || $domain =='ALL') { $domain = ''; }


					if($type=='approved') {

						$status = '4,6,7';
				    $status_ex = explode(',',$status);

				    $status_finance = '2';
				    $status_finance_ex = explode(',',$status_finance);

							$this->db->select('*');
							$this->db->from('idea_gen');
							$this->db->where_in('status', $status_ex);
							$this->db->where_in('finance_status', $status_finance_ex);
							//$this->db->like('smonth', $month);
							//$this->db->like('syear', $year);
							$this->db->like('origi_month', $month);
							$this->db->like('origi_year', $year);
							$this->db->like('origi_domain', $domain);
							$this->db->like('origi_dept', $dept);
							$this->db->order_by('id', 'DESC');
							$sql = $this->db->get();
							return $sql->num_rows();

					}

					elseif($type=='submitted') {

						$status = '4,6,7';
				    $status_ex = explode(',',$status);

				    $status_finance = '1,2,3';
				    $status_finance_ex = explode(',',$status_finance);

							$this->db->select('*');
							$this->db->from('idea_gen');
							$this->db->where_in('status', $status_ex);
							$this->db->where_in('finance_status', $status_finance_ex);
							//$this->db->like('smonth', $month);
							//$this->db->like('syear', $year);
							$this->db->like('origi_month', $month);
							$this->db->like('origi_year', $year);
							$this->db->like('origi_domain', $domain);
							$this->db->like('origi_dept', $dept);
							$this->db->order_by('id', 'DESC');
							$sql = $this->db->get();
							return $sql->num_rows();

					}

					elseif($type=='rejected') {

						$status = '4,6,7';
				    $status_ex = explode(',',$status);

				    $status_finance = '3';
				    $status_finance_ex = explode(',',$status_finance);


							$this->db->select('*');
							$this->db->from('idea_gen');
							$this->db->where_in('status', $status_ex);
							$this->db->where_in('finance_status', $status_finance_ex);
							//$this->db->like('smonth', $month);
							//$this->db->like('syear', $year);
							$this->db->like('origi_month', $month);
							$this->db->like('origi_year', $year);
							$this->db->like('origi_domain', $domain);
							$this->db->like('origi_dept', $dept);
							$this->db->order_by('id', 'DESC');
							$sql = $this->db->get();
							return $sql->num_rows();

					}

					elseif($type=='pendingapproval') {

						$status = '4,6,7';
				    $status_ex = explode(',',$status);

				    $status_finance = '1';
				    $status_finance_ex = explode(',',$status_finance);

							$this->db->select('*');
							$this->db->from('idea_gen');
							$this->db->where_in('status', $status_ex);
							$this->db->where_in('finance_status', $status_finance_ex);
							//$this->db->like('smonth', $month);
							//$this->db->like('syear', $year);
							$this->db->like('origi_month', $month);
							$this->db->like('origi_year', $year);
							$this->db->like('origi_domain', $domain);
							$this->db->like('origi_dept', $dept);
							$this->db->order_by('id', 'DESC');
							$sql = $this->db->get();
							return $sql->num_rows();

					}

				}




			/********************************
				SUPER ADMIN - count_totalkaizenbydomain
			 ********************************/
			 public function count_totalkaizenbydomain($domain) {
				 //$wl_profileid = $this->session->userdata('rsa_profileid');

				  $this->db->select('id');
					$this->db->select('origi_domain');
					$this->db->from('ideas');
					$this->db->where('origi_domain', $domain);
					$this->db->group_by('id');
					$this->db->group_by('origi_domain');
					$sql = $this->db->get();
					//return $sql->result();
					return $sql->num_rows();


			 }



			 /********************************
 				SUPER ADMIN - count_totalkaizenusersdomain
 			 ********************************/
 			 public function count_totalkaizenusersdomain($domain) {
 				 //$wl_profileid = $this->session->userdata('rsa_profileid');

 				  //$this->db->select('id');
 					$this->db->select('profile_id');
 					$this->db->from('ideas');
 					$this->db->where('origi_domain', $domain);
 					//$this->db->group_by('id');
 					$this->db->group_by('profile_id');
 					$sql = $this->db->get();
 					//return $sql->result();
 					return $sql->num_rows();


 			 }


			 /********************************
				 SUPER ADMIN - count_totalkaizenbydomain
				********************************/
				public function count_totalkaizenbydomain_ideagen($domain) {
					//$wl_profileid = $this->session->userdata('rsa_profileid');

					 $this->db->select('id');
					 $this->db->select('origi_domain');
					 $this->db->from('idea_gen');
					 $this->db->where('origi_domain', $domain);
					 $this->db->group_by('id');
					 $this->db->group_by('origi_domain');
					 $sql = $this->db->get();
					 //return $sql->result();
					 return $sql->num_rows();


				}



				/********************************
					 SUPER ADMIN - count_totalkaizenusersdomain
					********************************/
					public function count_totalkaizenusersdomain_ideagen($domain) {
						//$wl_profileid = $this->session->userdata('rsa_profileid');

						 //$this->db->select('id');
						 $this->db->select('profile_id');
						 $this->db->from('idea_gen');
						 $this->db->where('origi_domain', $domain);
						 //$this->db->group_by('id');
						 $this->db->group_by('profile_id');
						 $sql = $this->db->get();
						 //return $sql->result();
						 return $sql->num_rows();


					}



					/********************************
						SUPER ADMIN - count_totalkaizenbydepart
					 ********************************/
					 public function count_totalkaizenbydepart($domain,$depart) {
						 //$wl_profileid = $this->session->userdata('rsa_profileid');

						  $this->db->select('id');
							$this->db->select('origi_domain');
							$this->db->select('origi_dept');
							$this->db->from('ideas');
 							$this->db->where('origi_domain', $domain);
							$this->db->where('origi_dept', $depart);
							$this->db->group_by('id');
							$this->db->group_by('origi_domain');
							$this->db->group_by('origi_dept');
							$sql = $this->db->get();
							//return $sql->result();
							return $sql->num_rows();


					 }



					 /********************************
		 				SUPER ADMIN - count_totalkaizenusersdomain
		 			 ********************************/
		 			 public function count_totalkaizenusersdepart($domain,$depart) {
		 				 //$wl_profileid = $this->session->userdata('rsa_profileid');

		 				  //$this->db->select('id');
		 					$this->db->select('profile_id');
		 					$this->db->from('ideas');
							$this->db->where('origi_domain', $domain);
		 					$this->db->where('origi_dept', $depart);
		 					//$this->db->group_by('id');
		 					$this->db->group_by('profile_id');
		 					$sql = $this->db->get();
		 					//return $sql->result();
		 					return $sql->num_rows();


		 			 }






					 /********************************
							 SUPER ADMIN - count_empbydepart
							********************************/
							public function count_empbydepart($domain,$depart) {
								//$wl_profileid = $this->session->userdata('rsa_profileid');

								 $this->db->select('*');
								 $this->db->from('usermang');
								 $this->db->where('domain', $domain);
								 $this->db->where('depart', $depart);
								 $sql = $this->db->get();
								 //return $sql->result();
								 return $sql->num_rows();


							}





							/********************************
								SUPER ADMIN - count_totalkaizenbydepart_ideagen
							 ********************************/
							 public function count_totalkaizenbydepart_ideagen($domain,$depart) {
								 //$wl_profileid = $this->session->userdata('rsa_profileid');

								  $this->db->select('id');
									$this->db->select('origi_domain');
									$this->db->select('origi_dept');
									$this->db->from('idea_gen');
		 							$this->db->where('origi_domain', $domain);
									$this->db->where('origi_dept', $depart);
									$this->db->group_by('id');
									$this->db->group_by('origi_domain');
									$this->db->group_by('origi_dept');
									$sql = $this->db->get();
									//return $sql->result();
									return $sql->num_rows();


							 }


							 /********************************
							 SUPER ADMIN - count_totalkaizenusersdepart_ideagen
							********************************/
							public function count_totalkaizenusersdepart_ideagen($domain,$depart) {
								//$wl_profileid = $this->session->userdata('rsa_profileid');

								 //$this->db->select('id');
								 $this->db->select('profile_id');
								 $this->db->from('idea_gen');
								 $this->db->where('origi_domain', $domain);
								 $this->db->where('origi_dept', $depart);
								 //$this->db->group_by('id');
								 $this->db->group_by('profile_id');
								 $sql = $this->db->get();
								 //return $sql->result();
								 return $sql->num_rows();


							}






		 /********************************
			WEBSITE - managereditstatuszero
			********************************

		 public function managereditstatuszero($ideaid) {
			 			$status = 0;
						$data = array(
 			 		             'status'=>$status
 			 	             );
 			 			$this->db->where('idea_id', $ideaid);
			 	    $this->db->update('ideas',$data);


			 		 	if($this->db->affected_rows() > 0) {
 			  	      redirect('admin/kaizenidea/ideamang/postidea/'.$ideaid.'');
			 		 	} else {
 			 		 		  redirect('admin/kaizenidea/ideamang/postidea/'.$ideaid.'');
			 		 	}
			 }
			 */




		 	/********************************
		 	 WEBSITE - updateidea_manageredit
		 	 ********************************/

		 	public function updateidea_manageredit() {

		 			$randomiduniq = $this->randomiduniq();
		 		 	$currentdatetime = $this->currentdatetime();

		 			$viv_profile_id = $this->session->userdata('viv_profile_id');

		 			$sday=date('d');
		 			$smonth=date('m');
		 			$syear=date('Y');

		 			$ideaid        = $this->input->post('ideaid');
		 			$activity        = $this->input->post('activity');
		 			$activity_desc        = $this->input->post('activity_desc');
		 			$version_no        = $this->input->post('version_no');
		 			$proj_code        = $this->input->post('proj_code');
		 			$doc_no        = $this->input->post('doc_no');



		 			$benifit_area        = $this->input->post('benifit_area');
		 			$ref_no        = $this->input->post('ref_no');
		 			$tepl_plant        = $this->input->post('tepl_plant');
		 			$ktheme        = $this->input->post('ktheme');
		 			$idea        = $this->input->post('idea');
		 			$plantname        = $this->input->post('plantname');
		 			$prob_stmt        = $this->input->post('prob_stmt');
		 			$count_measur        = $this->input->post('count_measur');

		 			//$cs_quality = $this->input->post('cs_quality');
		 			$cs_yield = $this->input->post('cs_yield');
		 			$cs_cycletime = $this->input->post('cs_cycletime');
		 			if(empty($cs_cycletime) || $cs_cycletime=='0') { $cs_cycletime = ''; }

		 			$cs_cost = $this->input->post('cs_cost');
		 			//$cs_material = $this->input->post('cs_material');
		 			$cs_manpower = $this->input->post('cs_manpower');
		 			if(empty($cs_manpower) || $cs_manpower=='0') { $cs_manpower = ''; }



		 			$cs_consumables = $this->input->post('cs_consumables');
		 			$cs_others = $this->input->post('cs_others');
		 			$cs_totalsavings = $this->input->post('cs_totalsavings');
		 			$cs_appr_ie = $this->input->post('cs_appr_ie');
		 			$cs_appr_acco = $this->input->post('cs_appr_acco');
		 			//$cs_standardization = $this->input->post('cs_standardization');
		 			//$cs_sopsp = $this->input->post('cs_sopsp');
		 			//$cs_drawing = $this->input->post('cs_drawing');


		 			$root_cause = $this->input->post('root_cause');

		 			if(empty($activity)) {
		 					$root_cause_im = '';
		 			}	else {
		 				$root_cause_im = implode(",",$root_cause);
		 			}


		 			//$root_cause_exp = $this->input->post('root_cause_exp');
		  			$root_cause_block = $this->input->post('root_cause_block');

		 			$brf_exp_precond = $this->input->post('brf_exp_precond');
		 			$brf_exp_impdone = $this->input->post('brf_exp_impdone');
		 			$benifits = $this->input->post('benifits');


		 			$horizradio = $this->input->post('horizradio');
		 			$horizontal1 = $this->input->post('horizontal1');
		 			$horizontal2 = $this->input->post('horizontal2');
		 			$horizontal3 = $this->input->post('horizontal3');
		 			$horizontal4 = $this->input->post('horizontal4');

		 			$origi_domain = $this->input->post('origi_domain');
		 			$origi_dept = $this->input->post('origi_dept');
		 			$origi_name = $this->input->post('origi_name');
		 			$origi_date = $this->input->post('origi_date');
		 			$origi_date_ex = explode("-",$origi_date);
		 			$origi_day = $origi_date_ex[2];
		 			$origi_month = $origi_date_ex[1];
		 			$origi_year = $origi_date_ex[0];

		 			$approv_dept = $this->input->post('approv_dept');
		 			$approv_name = $this->input->post('approv_name');
		 			$approv_email = $this->input->post('approv_email');
		 			$approv_email2 = $this->input->post('approv_email2');

		 			$approv_date = $this->input->post('approv_date');



		 			$confirm_dept = $this->input->post('confirm_dept');
		 			$confirm_name = $this->input->post('confirm_name');
		 			$confirm_date = $this->input->post('confirm_date');

		 			if(empty($activity)) {
		 					$activity_im = '';
		 			}	else {
		 				$activity_im = implode(",",$activity);
		 			}

		 			if(empty($benifit_area)) {
		 					$benifit_area_im = '';
		 			}	else {
		 			$benifit_area_im = implode(",",$benifit_area);
		 			}


		 			$status = 1;






		 			$data = array(
		 								 'activity'=>$activity_im,
		  	             'activity_desc'=>$activity_desc,

		 	               'version_no'=>$version_no,
		 	 							 'proj_code'=>$proj_code,
		 								 'doc_no'=>$doc_no,
		 								 'benifit_area'=>$benifit_area_im,
		 								 'ref_no'=>$ref_no,
		 								 'tepl_plant'=>$tepl_plant,
		 								 'ktheme'=>$ktheme,
		 								 'idea'=>$idea,
		 								 'plantname'=>$plantname,
		 								 'prob_stmt'=>$prob_stmt,
		 								 'count_measur'=>$count_measur,

		 								//'cs_quality'=>$cs_quality,
		 								'cs_yield'=>$cs_yield,
		 								'cs_cycletime'=>$cs_cycletime,
		 					 		 	'cs_cost'=>$cs_cost,
		 					 			//'cs_material'=>$cs_material,
		 								//'cs_consumable'=>$cs_consumable,
		 					 			'cs_manpower'=>$cs_manpower,
		 					 			'cs_consumables'=>$cs_consumables,
		 					 			'cs_others'=>$cs_others,
		 					 			'cs_totalsavings'=>$cs_totalsavings,
		 					 			'cs_appr_ie'=>$cs_appr_ie,
		 					 			'cs_appr_acco'=>$cs_appr_acco,
		 					 			//'cs_standardization'=>$cs_standardization,
		 					 			//'cs_sopsp'=>$cs_sopsp,
		 								//'cs_drawing'=>$cs_drawing,

		 								'root_cause'=>$root_cause_im,
		 								//'root_cause_exp'=>$root_cause_exp,
		 								'root_cause_block'=>$root_cause_block,
		 								'brf_exp_precond'=>$brf_exp_precond,
		 								'brf_exp_impdone'=>$brf_exp_impdone,
		 					 			'benifits'=>$benifits,

		 								'horizradio'=>$horizradio,
		 								'horizontal1'=>$horizontal1,
		 								'horizontal2'=>$horizontal2,
		 								'horizontal3'=>$horizontal3,
		 								'horizontal4'=>$horizontal4,
		 								'origi_domain'=>$origi_domain,
		 								'origi_dept'=>$origi_dept,
		 								'origi_name'=>$origi_name,
		 								'origi_date'=>$origi_date,

		 								'origi_day'=>$origi_day,
		 								'origi_month'=>$origi_month,
		 								'origi_year'=>$origi_year,

		 								'approv_dept'=>$approv_dept,
		 								'approv_name'=>$approv_name,
		 								'approv_email'=>$approv_email,
		 								'approv_email2'=>$approv_email2,

		  							'approv_date'=>$approv_date,
		 								'confirm_dept'=>$confirm_dept,
		 								'confirm_name'=>$confirm_name,
		 								'confirm_date'=>$confirm_date,

		 		             'status'=>$status,
		 		   					 'sday'=>$sday,
		 								 'smonth'=>$smonth,
		 								 'syear'=>$syear,
		 	               'subdatetime'=>$currentdatetime
		 	             );


		 			 $this->db->where('idea_id', $ideaid);
		 	     $this->db->update('ideas',$data);


		 		 	if($this->db->affected_rows() > 0) {

		  	      redirect('admin/kaizenidea/ideamang/postidea/'.$ideaid.'');
		 		 	} else {

		 		 		redirect('admin/kaizenidea/ideamang/postidea/'.$ideaid.'');
		 		 	}

		 	}





					/********************************
					 WEBSITE - updateidea_ideagen_manageredit
					 ********************************/

					public function updateidea_ideagen_manageredit() {

							$randomiduniq = $this->randomiduniq();
						 	$currentdatetime = $this->currentdatetime();

							$viv_profile_id = $this->session->userdata('viv_profile_id');

							$sday=date('d');
							$smonth=date('m');
							$syear=date('Y');

							$ideaid        = $this->input->post('ideaid');
							$activity        = $this->input->post('activity');
							$activity_desc        = $this->input->post('activity_desc');
							$version_no        = $this->input->post('version_no');
							$proj_code        = $this->input->post('proj_code');
							$doc_no        = $this->input->post('doc_no');



							$benifit_area        = $this->input->post('benifit_area');
							$ref_no        = $this->input->post('ref_no');
							$tepl_plant        = $this->input->post('tepl_plant');
							$ktheme        = $this->input->post('ktheme');
							$idea        = $this->input->post('idea');
							$plantname        = $this->input->post('plantname');
							$prob_stmt        = $this->input->post('prob_stmt');
							$count_measur        = $this->input->post('count_measur');

							//$cs_quality = $this->input->post('cs_quality');
							$cs_yield = $this->input->post('cs_yield');
							$cs_cycletime = $this->input->post('cs_cycletime');
							if(empty($cs_cycletime) || $cs_cycletime=='0') { $cs_cycletime = ''; }

							$cs_cost = $this->input->post('cs_cost');
							//$cs_material = $this->input->post('cs_material');
							$cs_manpower = $this->input->post('cs_manpower');
							if(empty($cs_manpower) || $cs_manpower=='0') { $cs_manpower = ''; }

							$cs_consumables = $this->input->post('cs_consumables');
							$cs_others = $this->input->post('cs_others');
							$cs_totalsavings = $this->input->post('cs_totalsavings');
							$cs_appr_ie = $this->input->post('cs_appr_ie');
							$cs_appr_acco = $this->input->post('cs_appr_acco');
							//$cs_standardization = $this->input->post('cs_standardization');
							//$cs_sopsp = $this->input->post('cs_sopsp');
							//$cs_drawing = $this->input->post('cs_drawing');


							$root_cause = $this->input->post('root_cause');
							$root_cause_im = implode(",",$root_cause);
							//$root_cause_exp = $this->input->post('root_cause_exp');
				 			$root_cause_block = $this->input->post('root_cause_block');

							$brf_exp_precond = $this->input->post('brf_exp_precond');
							$brf_exp_impdone = $this->input->post('brf_exp_impdone');
							$benifits = $this->input->post('benifits');


							$horizradio = $this->input->post('horizradio');
							$horizontal1 = $this->input->post('horizontal1');
							$horizontal2 = $this->input->post('horizontal2');
							$horizontal3 = $this->input->post('horizontal3');
							$horizontal4 = $this->input->post('horizontal4');
							$origi_domain = $this->input->post('origi_domain');
							$origi_dept = $this->input->post('origi_dept');
							$origi_name = $this->input->post('origi_name');
							$origi_date = $this->input->post('origi_date');
							$origi_date_ex = explode("-",$origi_date);
							$origi_day = $origi_date_ex[2];
							$origi_month = $origi_date_ex[1];
							$origi_year = $origi_date_ex[0];

							$approv_dept = $this->input->post('approv_dept');
							$approv_name = $this->input->post('approv_name');
							$approv_email = $this->input->post('approv_email');
							$approv_email2 = $this->input->post('approv_email2');

							$approv_date = $this->input->post('approv_date');



							$confirm_dept = $this->input->post('confirm_dept');
							$confirm_name = $this->input->post('confirm_name');
							$confirm_date = $this->input->post('confirm_date');


							$activity_im = implode(",",$activity);
				 			$benifit_area_im = implode(",",$benifit_area);



							$status = 1;


							$data = array(
													'activity'=>$activity_im,
				 	               'activity_desc'=>$activity_desc,

					               'version_no'=>$version_no,
					 							 'proj_code'=>$proj_code,
												 'doc_no'=>$doc_no,
												 'benifit_area'=>$benifit_area_im,
												 'ref_no'=>$ref_no,
												 'tepl_plant'=>$tepl_plant,
												 'ktheme'=>$ktheme,
												 'idea'=>$idea,
												 'plantname'=>$plantname,
												 'prob_stmt'=>$prob_stmt,
												 'count_measur'=>$count_measur,

												//'cs_quality'=>$cs_quality,
												'cs_yield'=>$cs_yield,
												'cs_cycletime'=>$cs_cycletime,
									 		 	'cs_cost'=>$cs_cost,
									 			//'cs_material'=>$cs_material,
												//'cs_consumable'=>$cs_consumable,
									 			'cs_manpower'=>$cs_manpower,
									 			'cs_consumables'=>$cs_consumables,
									 			'cs_others'=>$cs_others,
									 			'cs_totalsavings'=>$cs_totalsavings,
									 			'cs_appr_ie'=>$cs_appr_ie,
									 			'cs_appr_acco'=>$cs_appr_acco,
									 			//'cs_standardization'=>$cs_standardization,
									 			//'cs_sopsp'=>$cs_sopsp,
												//'cs_drawing'=>$cs_drawing,

												'root_cause'=>$root_cause_im,
												//'root_cause_exp'=>$root_cause_exp,
												'root_cause_block'=>$root_cause_block,
												'brf_exp_precond'=>$brf_exp_precond,
												'brf_exp_impdone'=>$brf_exp_impdone,
									 			'benifits'=>$benifits,

												'horizradio'=>$horizradio,
												'horizontal1'=>$horizontal1,
												'horizontal2'=>$horizontal2,
												'horizontal3'=>$horizontal3,
												'horizontal4'=>$horizontal4,

												'origi_domain'=>$origi_domain,
												'origi_dept'=>$origi_dept,
												'origi_name'=>$origi_name,
												'origi_date'=>$origi_date,
												'origi_day'=>$origi_day,
												'origi_month'=>$origi_month,
												'origi_year'=>$origi_year,

												'approv_dept'=>$approv_dept,
												'approv_name'=>$approv_name,
												'approv_email'=>$approv_email,
												'approv_email2'=>$approv_email2,

				 								'approv_date'=>$approv_date,
												'confirm_dept'=>$confirm_dept,
												'confirm_name'=>$confirm_name,
												'confirm_date'=>$confirm_date,

						             'status'=>$status,
						   					 'sday'=>$sday,
												 'smonth'=>$smonth,
												 'syear'=>$syear,
					               'subdatetime'=>$currentdatetime
					             );


							 $this->db->where('idea_id', $ideaid);
					     $this->db->update('idea_gen',$data);


						 	if($this->db->affected_rows() > 0) {


				 	      redirect('admin/kaizenidea/ideagen/postidea/'.$ideaid.'');
						 	} else {

						 		redirect('admin/kaizenidea/ideagen/postidea/'.$ideaid.'');
						 	}

					}







					 /********************************
							SUPER ADMIN - downloadpdf_kaizenidea_byid
						 ********************************/
						 public function downloadpdf_kaizenidea_byid($idea_id) {

												/*
							 					header("Content-Type: application/octet-stream");

												$file = $idea_id."-file.pdf";

												header("Content-Disposition: attachment; filename=" . urlencode($file));
												header("Content-Type: application/download");
												header("Content-Description: File Transfer");
												header("Content-Length: " . filesize($file));

												flush(); // This doesn't really matter.

												$fp = fopen($file, "r");
												while (!feof($fp)) {
												    echo fread($fp, 65536);
												    flush(); // This is essential for large downloads
												}

												fclose($fp);
												*/


												$listmyideasbyiid = $this->listmyideasbyiid($idea_id);
												 foreach ($listmyideasbyiid as $rowArray) {
																$idea_id = $rowArray->idea_id;
																$activity = $rowArray->activity;
																$activity_desc = $rowArray->activity_desc;
																$activity_ex = explode(",",$activity);

																$version_no = $rowArray->version_no;
																$proj_code = $rowArray->proj_code;
																$doc_no = $rowArray->doc_no;
																$benifit_area = $rowArray->benifit_area;
																$benifit_area_ex = explode(",",$benifit_area);
																$ref_no = $rowArray->ref_no;
																$tepl_plant = $rowArray->tepl_plant;
																$ktheme = $rowArray->ktheme;
																$idea = $rowArray->idea;
																$status = $rowArray->status;
																$subdatetime = $rowArray->subdatetime;
																$root_cause = $rowArray->root_cause;
																$status = $rowArray->status;
													}

													//print_r($listmyideasbyiid);



													/*
													//namespace Dompdf;
													require_once 'assets/lib/dompdf/autoload.inc.php';


													$dompdf = new Dompdf();
													$dompdf->loadHtml('
													<table border=1 align=center width=400>
													<tr><td>Name : </td><td>fsdsdf</td></tr>
													<tr><td>Email : </td><td>sdfsdfsdfsdf</td></tr>
													<tr><td>Age : </td><td>sdfsdfsdf</td></tr>
													<tr><td>Country : </td><td>sdfsdfdsfsdf</td></tr>
													</table>
													');
													$dompdf->setPaper('A4', 'landscape');
													$dompdf->render();
													$dompdf->stream("",array("Attachment" => false));
													exit(0);
													*/






							 }





  	/********************************
  	 SUPER ADMIN - listuseremailbydomain
  	********************************/
  	public function listuseremailbydomain($ifcond) {

  		$viv_user_type = $this->session->userdata('viv_user_type');
  		$viv_profile_id = $this->session->userdata('viv_profile_id');
  		$viv_email = $this->session->userdata('viv_email');


 				$emaildomain = '@tataelectronics.co.in';

  				$this->db->select('*');
  				$this->db->from('usermang');

 				if($ifcond=='equal') {
  						$this->db->like('email2', $emaildomain);
 				} elseif($ifcond=='notequal') {
 						$this->db->not_like('email2', $emaildomain);
 				}
  				//$this->db->where('profileid', $wl_profileid);
  				//$this->db->order_by('id', 'DESC');
  				$sql = $this->db->get();
  				//return $sql->num_rows();
					return $sql->result();




  	}




 	/********************************
 	 SUPER ADMIN - count_listuseremailbydomain
 	********************************/
 	public function count_listuseremailbydomain($ifcond) {

 		$viv_user_type = $this->session->userdata('viv_user_type');
 		$viv_profile_id = $this->session->userdata('viv_profile_id');
 		$viv_email = $this->session->userdata('viv_email');


				$emaildomain = '@tataelectronics.co.in';

 				$this->db->select('*');
 				$this->db->from('usermang');

				if($ifcond=='equal') {
 						$this->db->like('email2', $emaildomain);
				} elseif($ifcond=='notequal') {
						$this->db->not_like('email2', $emaildomain);
				}
 				//$this->db->where('profileid', $wl_profileid);
 				//$this->db->order_by('id', 'DESC');
 				$sql = $this->db->get();
 				return $sql->num_rows();




 	}



			/********************************
			SUPER ADMIN - countlistactiveusers
			 ********************************/
			 public function countlistactiveusers() {



						$this->db->select('*');
						$this->db->from('usermang');
						$this->db->where('status',1);
 				 		//$this->db->where('courseid',$courseid);
						$sql = $this->db->get();
						//return $sql->result();
						return $sql->num_rows();
				}







							/********************************
							 SUPER ADMIN - downloaduseremailsexcel
							********************************/
							public function downloaduseremailsexcel($condi) {

									if($condi=='equal') { $condi_name = 'With';  }
									elseif($condi=='notequal') { $condi_name = 'With-Out';  }

							 // file name
									$date = date('d-M-Y')."-".date("h:i:sa");
									$filename = 'Employee-'.$condi_name.'-Email'.'-'.$date.'.csv';
									header("Content-Description: File Transfer");
									header("Content-Disposition: attachment; filename=$filename");
									header("Content-Type: application/csv; ");


									// file creation
									$file = fopen('php://output', 'w');


									//$header_tit = array("OverAll Activity");
									//fputcsv($file, $header_tit);

									$header = array("Name","Emp ID","Email","Domain","Department");
									fputcsv($file, $header);

 									$count_listuseremailbydomain = $this->listuseremailbydomain($condi);
									foreach ($count_listuseremailbydomain as $count_listuseremailbydomainRow) {


										$fname =    $count_listuseremailbydomainRow->fname;
										$empid =    $count_listuseremailbydomainRow->email;
										$email =    $count_listuseremailbydomainRow->email2;
										$domain =    $count_listuseremailbydomainRow->domain;
										$depart =    $count_listuseremailbydomainRow->depart;

 										$report = array($fname,$empid,$email,$domain,$depart);

										fputcsv($file, $report);

										}



									//fputcsv($file, $entityid);

									fclose($file);
									exit;




							}



			 /********************************
			 updempimgapprovalcheckbyid
			 ********************************/
			 public function updempimgapprovalcheckbyid() {

			 	$profile_id = $this->input->post('profile_id');
			 	$sub_by = $this->input->post('sub_by');
			 	$status = $this->input->post('status');



			 	$data = array(
			 					'imgapprov'=>$status
			 	);
			  $this->db->where('profile_id', $profile_id);
			  $this->db->update('usermang',$data);




			  if($this->db->affected_rows() > 0) {
			 		$data['mstatus'] = '1';
			 		$data['msgid'] = '';
			 		$data['message'] = 'Updated Successfully';
			 		$json = json_encode($data);
			 		echo $json;
			 	} else {
			 		$data['mstatus'] = '0';
			 		$data['msgid'] = '';
			 		$data['message'] = 'Sorry! Please Try Again...';
			 		$json = json_encode($data);
			 		echo $json;
			  }


			 }




			 /********************************
				SUPER ADMIN - findimageaprrovestatusbyprofileid
			 ********************************/
			 public function findimageaprrovestatusbyprofileid($profileid) {
				 //$wl_profileid = $this->session->userdata('rsa_profileid');

					$this->db->select('*');
					$this->db->from('usermang');
			 		$this->db->where('profile_id', $profileid);
					$sql = $this->db->get();
					//return $sql->result();
					//return $sql->num_rows();
					foreach ($sql->result() as $listtopicsbyidsRow) {
						$imgapprov = $listtopicsbyidsRow->imgapprov;
	 					//$fullname = $listtopicsbyidsRow->rname;
 						return $imgapprov;
					}

			 }






			 		/********************************
			 		 SUPER ADMIN - count_listmyideas_imgapprov_emp
			 		********************************/
			 		public function count_listmyideas_imgapprov_emp() {

			 			$viv_user_type = $this->session->userdata('viv_user_type');
			 			$viv_profile_id = $this->session->userdata('viv_profile_id');
			 			$viv_email = $this->session->userdata('viv_email');


	 					$this->db->select('*');
	 					$this->db->from('ideas');
						$this->db->where('status', 1);
	 					$this->db->where('imgapprov', 1);
	 					//$this->db->where('profile_id', $viv_profile_id);
	 					$this->db->order_by('id', 'DESC');
	 					$sql = $this->db->get();
	 					return $sql->num_rows();


			 		}


					/********************************
					 SUPER ADMIN - count_listmyideas_imgapprov_mng
					********************************/
					public function count_listmyideas_imgapprov_mng() {

						$uri5 = $this->uri->segment(5);
					  $uri6 = $this->uri->segment(6);
					  $viv_user_type = $this->session->userdata('viv_user_type');
					  $viv_profile_id = $this->session->userdata('viv_profile_id');

					  $viv_email = $this->session->userdata('viv_email');


						$this->db->select('*');
		        $this->db->from('ideas');
		        $this->db->where('status', 1);


		        if($uri5=='pending') {
		          $this->db->where('imgapprov', 1);

		        } else if($uri5=='rejected') {
		          $this->db->where('imgapprov', 3);
		          $this->db->where('imgapprov_by', $viv_profile_id);

		        } else if($uri5=='approved') {
		          $this->db->where('imgapprov', 2);
		          $this->db->where('imgapprov_by', $viv_profile_id);

		        }

 		        $this->db->order_by('id', 'DESC');
		        $sql = $this->db->get();
						return $sql->num_rows();


					}



					/********************************
					 SUPER ADMIN - count_listmyideas_imgapprov_mng_val
					********************************/
					public function count_listmyideas_imgapprov_mng_val($uri5) {


					  $viv_user_type = $this->session->userdata('viv_user_type');
					  $viv_profile_id = $this->session->userdata('viv_profile_id');

					  $viv_email = $this->session->userdata('viv_email');


						$this->db->select('*');
		        $this->db->from('ideas');
		        $this->db->where('status', 1);


		        if($uri5=='pending') {
		          $this->db->where('imgapprov', 1);

		        } else if($uri5=='rejected') {
		          $this->db->where('imgapprov', 3);
		          $this->db->where('imgapprov_by', $viv_profile_id);

		        } else if($uri5=='approved') {
		          $this->db->where('imgapprov', 2);
		          $this->db->where('imgapprov_by', $viv_profile_id);

		        }

 		        $this->db->order_by('id', 'DESC');
		        $sql = $this->db->get();
						return $sql->num_rows();


					}


					/********************************
			 		 SUPER ADMIN - count_listmyideas_imgapprov_emp
			 		********************************/
			 		public function count_listmyideas_imgapprov_emp_ideagen() {

			 			$viv_user_type = $this->session->userdata('viv_user_type');
			 			$viv_profile_id = $this->session->userdata('viv_profile_id');
			 			$viv_email = $this->session->userdata('viv_email');


	 					$this->db->select('*');
	 					$this->db->from('idea_gen');
						$this->db->where('status', 1);
	 					$this->db->where('imgapprov', 1);
	 					//$this->db->where('profile_id', $viv_profile_id);
	 					$this->db->order_by('id', 'DESC');
	 					$sql = $this->db->get();
	 					return $sql->num_rows();


			 		}





						/********************************
						 SUPER ADMIN - listmyideas_imgapprov
						********************************/
						public function listmyideas_imgapprov() {




							$uri5 = $this->uri->segment(5);
							$uri6 = $this->uri->segment(6);
 							$viv_user_type = $this->session->userdata('viv_user_type');
							$viv_profile_id = $this->session->userdata('viv_profile_id');

							$viv_email = $this->session->userdata('viv_email');

 									 /*** PAGINATION ****/
										$config = array();
										$config["base_url"] = site_url('admin/kaizenidea/ideamang/myidea_imgapproval/'.$uri5.'/'.$uri6.'');
										$config["total_rows"] = $this->count_listmyideas_imgapprov_mng();
										$config["per_page"] = 20;
										$config["uri_segment"] = 6;
										$this->pagination->initialize($config);
										$pagestart = ($this->uri->segment(6)) ? $this->uri->segment(6) : 0;
										/*** PAGINATION ****/


										$this->db->select('*');
										$this->db->from('ideas');
										$this->db->where('status', 1);


										if($uri5=='pending') {
											$this->db->where('imgapprov', 1);

										} else if($uri5=='rejected') {
											$this->db->where('imgapprov', 3);
											$this->db->where('imgapprov_by', $viv_profile_id);

										} else if($uri5=='approved') {
											$this->db->where('imgapprov', 2);
											$this->db->where('imgapprov_by', $viv_profile_id);

										}

										$this->db->limit($config["per_page"], $pagestart);
										$this->db->order_by('id', 'DESC');
								 		$sql = $this->db->get();
										return $sql->result();

					 	}





						/********************************
						 SUPER ADMIN - listmyideas_imgapprov_ideagen
						********************************/
						public function listmyideas_imgapprov_ideagen() {




							$uri5 = $this->uri->segment(5);
 							$viv_user_type = $this->session->userdata('viv_user_type');
							$viv_profile_id = $this->session->userdata('viv_profile_id');

							$viv_email = $this->session->userdata('viv_email');

 									 /*** PAGINATION ****/
										$config = array();
										$config["base_url"] = site_url('admin/kaizenidea/ideagen/myidea_imgapproval'.$uri5.'');
										$config["total_rows"] = $this->count_pagi_listmyideas();
										$config["per_page"] = 20;
										$config["uri_segment"] = 5;
										$this->pagination->initialize($config);
										$pagestart = ($this->uri->segment(5)) ? $this->uri->segment(5) : 0;
										/*** PAGINATION ****/


										$this->db->select('*');
										$this->db->from('idea_gen');
										$this->db->where('status', 1);
										$this->db->where('imgapprov', 1);
										$this->db->limit($config["per_page"], $pagestart);
										$this->db->order_by('id', 'DESC');
								 		$sql = $this->db->get();
										return $sql->result();

					 	}





									 /********************************
									 update_imgapprovalsts
									 ********************************/
									 public function update_imgapprovalsts() {

									 	$profile_id = $this->input->post('profile_id');
									 	$ideaidurl = $this->input->post('ideaidurl');
										$profile_id = $this->input->post('profile_id');
										$datavalue = $this->input->post('datavalue');
									 	$img_reject_reason = $this->input->post('img_reject_reason');

										if(empty($img_reject_reason) || $img_reject_reason=='-') {
												$img_reject_reason = '';
										}


										if($datavalue=='yes') {
											$status = '2';
											$emp_edit_status = '0';
										} elseif($datavalue=='no') {
											$status = '3';
											$emp_edit_status = '1';
										}


										$checkimgapprov_auth = $this->checkimgapprov_auth($profile_id);

										if($checkimgapprov_auth>0) {
												 	$data = array(
																	'imgapprov'=>$status,
																	'imgapprov_by'=>$profile_id,
																	'img_reject_reason'=>$img_reject_reason,
												 					'emp_edit_status'=>$emp_edit_status
 												 	);
												  $this->db->where('idea_id', $ideaidurl);
												  $this->db->update('ideas',$data);
										}



									  if($this->db->affected_rows() > 0) {
									 		$data['mstatus'] = '1';
									 		$data['msgid'] = '';
									 		$data['message'] = 'Updated Successfully';
									 		$json = json_encode($data);
									 		echo $json;
									 	} else {
									 		$data['mstatus'] = '0';
									 		$data['msgid'] = '';
									 		$data['message'] = 'Sorry! Please Try Again...';
									 		$json = json_encode($data);
									 		echo $json;
									  }


									 }


					 /********************************
					 update_shortlistedsts
					 ********************************/
					 public function update_shortlistedsts() {

					  $kaizenid = $this->input->post('kaizenid');
					  $kaizensortlistname = $this->input->post('kaizensortlistname');
					  $kaizensortlistcomment = $this->input->post('kaizensortlistcomment');


					 			 $data = array(
					 							 'shortlisted'=>$kaizensortlistname,
					 							 'shortlisteddesc'=>$kaizensortlistcomment
 					 			 );
					 			 $this->db->where('idea_id', $kaizenid);
					 			 $this->db->update('ideas',$data);




					  if($this->db->affected_rows() > 0) {
					 	 $data['mstatus'] = '1';
					 	 $data['msgid'] = '';
					 	 $data['message'] = 'Updated Successfully';
					 	 $json = json_encode($data);
					 	 echo $json;
					  } else {
					 	 $data['mstatus'] = '0';
					 	 $data['msgid'] = '';
					 	 $data['message'] = 'Sorry! Please Try Again...';
					 	 $json = json_encode($data);
					 	 echo $json;
					  }


					 }





					 /********************************
 					update_imgapprovalsts_ideagen
 					********************************/
 					public function update_imgapprovalsts_ideagen() {

 					 $profile_id = $this->input->post('profile_id');
 					 $ideaidurl = $this->input->post('ideaidurl');
 					 $profile_id = $this->input->post('profile_id');
 					 $datavalue = $this->input->post('datavalue');

 					 if($datavalue=='yes') {
 						 $status = '2';
 					 } elseif($datavalue=='no') {
 						 $status = '3';
 					 }


 					 $checkimgapprov_auth = $this->checkimgapprov_auth($profile_id);

 					 if($checkimgapprov_auth>0) {
 								 $data = array(
 												 'imgapprov'=>$status,
 												 'imgapprov_by'=>$profile_id,
 								 );
 								 $this->db->where('idea_id', $ideaidurl);
 								 $this->db->update('idea_gen',$data);
 					 }



 					 if($this->db->affected_rows() > 0) {
 						 $data['mstatus'] = '1';
 						 $data['msgid'] = '';
 						 $data['message'] = 'Updated Successfully';
 						 $json = json_encode($data);
 						 echo $json;
 					 } else {
 						 $data['mstatus'] = '0';
 						 $data['msgid'] = '';
 						 $data['message'] = 'Sorry! Please Try Again...';
 						 $json = json_encode($data);
 						 echo $json;
 					 }


 					}



				 /********************************
	 			 SUPER ADMIN - checkimgapprov_auth
	 			********************************/
	 			public function checkimgapprov_auth($profileid) {
	 				//$wl_profileid = $this->session->userdata('rsa_profileid');

	 				 $this->db->select('*');
	 				 $this->db->from('usermang');
					 $this->db->where('profile_id', $profileid);
	 				 $this->db->where('imgapprov', 1);
	 				 $sql = $this->db->get();
	 				 //return $sql->result();
	 				 return $sql->num_rows();


	 			}





						/********************************
						 SUPER ADMIN - count_listmyideas_imgapprov_filter
						********************************/
						public function count_listmyideas_imgapprov_filter($stsimgapp,$year_sub,$domain_sub,$dept_sub) {

							$viv_user_type = $this->session->userdata('viv_user_type');
							$viv_profile_id = $this->session->userdata('viv_profile_id');
							$viv_email = $this->session->userdata('viv_email');

							if(empty($year_sub) || $year_sub =='ALL') {  $year_sub = ''; }
							if(empty($dept_sub) || $dept_sub == 'ALL') { $dept_sub = '';  }
							if(empty($domain_sub) || $domain_sub == 'ALL') { $domain_sub = '';  }

							//$status_ex = explode(',',$status);
							$stsimgapp_ex = explode(',',$stsimgapp);

							$this->db->select('*');
							$this->db->from('ideas');
							//$this->db->where_in('status', $status_ex);
							$this->db->where_in('imgapprov', $stsimgapp_ex);
							$this->db->like('syear', $year_sub);
							$this->db->like('origi_dept', $dept_sub);
							$this->db->like('origi_domain', $domain_sub);
							$this->db->order_by('id', 'DESC');
							$sql = $this->db->get();
							return $sql->num_rows();

						}



						/********************************
						 SUPER ADMIN - count_listmyideas_imgapprov_filter
						********************************/
						public function count_listmyideas_imgapprov_filter_month($stsimgapp,$year_sub,$month,$domain_sub,$dept_sub) {

							$viv_user_type = $this->session->userdata('viv_user_type');
							$viv_profile_id = $this->session->userdata('viv_profile_id');
							$viv_email = $this->session->userdata('viv_email');

							if(empty($year_sub) || $year_sub =='ALL') {  $year_sub = ''; }
							if(empty($month) || $month =='ALL') {  $month = ''; }
							if(empty($dept_sub) || $dept_sub == 'ALL') { $dept_sub = '';  }
							if(empty($domain_sub) || $domain_sub == 'ALL') { $domain_sub = '';  }

							//$status_ex = explode(',',$status);
							$stsimgapp_ex = explode(',',$stsimgapp);

							$this->db->select('*');
							$this->db->from('ideas');
							//$this->db->where_in('status', $status_ex);
							$this->db->where_in('imgapprov', $stsimgapp_ex);
							$this->db->like('syear', $year_sub);
							$this->db->like('origi_month', $month);
							$this->db->like('origi_dept', $dept_sub);
							$this->db->like('origi_domain', $domain_sub);
							$this->db->order_by('id', 'DESC');
							$sql = $this->db->get();
							return $sql->num_rows();

						}






						/********************************
						 SUPER ADMIN - count_listmyideasgen_imgapprov_filter
						********************************/
						public function count_listmyideasgen_imgapprov_filter($stsimgapp,$year_sub,$domain_sub,$dept_sub) {

							$viv_user_type = $this->session->userdata('viv_user_type');
							$viv_profile_id = $this->session->userdata('viv_profile_id');
							$viv_email = $this->session->userdata('viv_email');

							if(empty($year_sub) || $year_sub =='ALL') {  $year_sub = ''; }
							if(empty($dept_sub) || $dept_sub == 'ALL') { $dept_sub = '';  }
							if(empty($domain_sub) || $domain_sub == 'ALL') { $domain_sub = '';  }

							//$status_ex = explode(',',$status);
							$stsimgapp_ex = explode(',',$stsimgapp);

							$this->db->select('*');
							$this->db->from('idea_gen');
							//$this->db->where_in('status', $status_ex);
							$this->db->where_in('imgapprov', $stsimgapp_ex);
							$this->db->like('syear', $year_sub);
							$this->db->like('origi_dept', $dept_sub);
							$this->db->like('origi_domain', $domain_sub);
							$this->db->order_by('id', 'DESC');
							$sql = $this->db->get();
							return $sql->num_rows();

						}





						/********************************
						temp_updateusers_addinfo
						********************************/
						public function temp_updateusers_addinfo() {

							$this->db->select('*');
							$this->db->from('usermang_temp');
							//$this->db->where('profile_id', $profileid);
							$sql = $this->db->get();
							//return $sql->result();
							//return $sql->num_rows();
							foreach ($sql->result() as $listtopicsbyidsRow) {
								$id = $listtopicsbyidsRow->id;
								$empid = $listtopicsbyidsRow->empid;
								$plant = $listtopicsbyidsRow->plant;
								$area = $listtopicsbyidsRow->area;
								$status = $listtopicsbyidsRow->status;



								$data = array(
												'plant'=>$plant,
												'area'=>$area,
								);
								$this->db->where('email', $empid);
								$this->db->update('usermang',$data);

								if($this->db->affected_rows() > 0) {
 													$data_temp = array(
				 													'status'=>1
													);
													$this->db->where('empid', $empid);
													$this->db->update('usermang_temp',$data_temp);
 								}

									echo $status." - ".$id." - ".$empid."<br/>";

							}


						}








 		 /********************************
  			SUPER ADMIN - ajaxaddimage_multiple
  		 ********************************/
  		 public function ajaxaddimage_multiple() {
  			 $randomiduniq = $this->randomiduniq();
  			 $currentdatetime = $this->currentdatetime();


  			 $sday=date('d');
  			 $smonth=date('m');
  			 $syear=date('Y');

  			 $postid = $this->input->post('postid');
  			 $profileid = $this->input->post('profileid');


  			 // var_dump($uniqueurlid);exit;

  			 // ***Multiple FILE UPLOAD****
  			 $new_image_name = time() . str_replace(str_split(' ()\\/,:*?"<>|-.'), '',$_FILES['files_multi']['name']);
  			 //  $new_image_name = preg_replace('/\.*/', '', $new_image_name1);
  			 $new_filetype = pathinfo($_FILES['files_multi']['name'], PATHINFO_EXTENSION);
  			 $new_image_name = $new_image_name.".".$new_filetype;

  			 $config['upload_path'] = 'assets/images/kaizenattachments/';
  			 //$config['allowed_types'] = 'gif|jpg|png|jpeg|pdf|ppt|docx|pptx|xlsx|xls|doc';
  			 $config['allowed_types'] = 'jpg|png|jpeg';
  			 /* PDF, DOCx, JPEG, PNG, GIF, PPTX, XLXx */
  			 $config['file_name'] = $new_image_name;
  			 $config['max_size']  = '0';
  			 $config['max_width']  = '0';
  			 $config['max_height']  = '0';
  			 $config['$min_width'] = '0';
  			 $config['min_height'] = '0';

  			 $this->upload->initialize($config);
  			 $this->load->library('upload', $config);
  			 // $upload = $this->upload->do_upload('files');
  			 /***** END Multiple FILE UPLOAD************/


  			 if (!$this->upload->do_upload('files_multi'))
  			 {

  			 $error =$this->upload->display_errors();

  			 if(!empty($error)){
  			 echo 2;
  			 }

  			 }
  			    else {


  			    $data = array(
  			             'imgid'=>$randomiduniq,
										 'idea_id'=>$postid,
										 'img_name'=>$new_image_name,
										 'img_filetype'=>$new_filetype,
  			             'status'=>1
  			             );
  			     //$this->db->where('idea_id', $postid);
  			     $this->db->insert('ideas_attachment',$data);

  			     if($this->db->affected_rows() > 0) {
  			             echo 1;
  			    } else {
  			             echo 2;
  			      }

  			    }

  			 exit();

  		 }



 			 /********************************
			 listideasmultiimgbyiid
			********************************/
			public function listideasmultiimgbyiid($idea_id) {
				//$wl_profileid = $this->session->userdata('rsa_profileid');

				 $this->db->select('*');
				 $this->db->from('ideas_attachment');
				 $this->db->where('idea_id', $idea_id);
 				 $sql = $this->db->get();
				 return $sql->result();
				 //return $sql->num_rows();


			}


			/********************************
			listideasmultiimgbyiid_count
		 ********************************/
		 public function listideasmultiimgbyiid_count($idea_id) {
			 //$wl_profileid = $this->session->userdata('rsa_profileid');
 				$this->db->select('*');
				$this->db->from('ideas_attachment');
				$this->db->where('idea_id', $idea_id);
				$sql = $this->db->get();
				//return $sql->result();
				return $sql->num_rows();
 		 }




		 /********************************
		 SUPER ADMIN - findkaizenimagename_multi
		********************************/
		public function findkaizenimagename_multi($dataiid,$dataimgid) {
			//$wl_profileid = $this->session->userdata('rsa_profileid');

			 $this->db->select('*');
			 $this->db->from('ideas_attachment');
			 $this->db->where('idea_id', $dataiid);
			 $this->db->where('imgid', $dataimgid);
			 $sql = $this->db->get();
			 //return $sql->result();
			 //return $sql->num_rows();


			 foreach ($sql->result() as $listtopicsbyidsRow) {
						 $img = $listtopicsbyidsRow->img_name;
			 }


					 //$fullname = $listtopicsbyidsRow->rname;
				 return $img;


		}




				 /********************************
		 		deletekaizenimg_multi
		 		********************************/
		 		public function deletekaizenimg_multi() {

				 $dataiid = $this->input->post('dataiid');
		 		 $dataimgid = $this->input->post('dataimgid');


				 $findkaizenimagename = $this->findkaizenimagename_multi($dataiid,$dataimgid);
				 $file_to_delete = 'assets/images/kaizenattachments/'.$findkaizenimagename.'';
				 unlink($file_to_delete);



				 $this->db->where('idea_id', $dataiid);
		 		 $this->db->where('imgid', $dataimgid);
		 		 $this->db->delete('ideas_attachment');





		 		 if($this->db->affected_rows() > 0) {
		 				$data['mstatus'] = '1';
		 				$data['msgid'] = '';
		 				$data['message'] = 'Image Deleted Successfully';
		 				$json = json_encode($data);
		 				echo $json;
		 			} else {
		 				$data['mstatus'] = '0';
		 				$data['msgid'] = $dataitype;
		 				$data['message'] = 'Sorry! Please Try Again...';
		 				$json = json_encode($data);
		 				echo $json;
		 		 }



		 	 	}





				/********************************
	 		 SUPER ADMIN - temp_totalemp
	 		********************************/
	 		public function temp_totalemp() {
	 			//$wl_profileid = $this->session->userdata('rsa_profileid');

	 			 $this->db->select('*');
	 			 $this->db->from('usermang');
 	 			 $sql = $this->db->get();
	 			 //return $sql->result();
	 			 return $sql->num_rows();
 	 		}


			/********************************
		 SUPER ADMIN - temp_totalemptemp
		********************************/
		public function temp_totalemptemp() {
			//$wl_profileid = $this->session->userdata('rsa_profileid');

			 $this->db->select('*');
			 $this->db->from('usermang_temp');
			 $sql = $this->db->get();
			 //return $sql->result();
			 return $sql->num_rows();
 		}




		/********************************
		temp_addusersfrom_newlist
		********************************/
		public function temp_addusersfrom_newlist() {

			$this->db->select('*');
			$this->db->from('usermang_temp');
			//$this->db->where('profile_id', $profileid);
			$sql = $this->db->get();
			//return $sql->result();
			//return $sql->num_rows();
			foreach ($sql->result() as $listtopicsbyidsRow) {
				$id = $listtopicsbyidsRow->id;
				$empid = $listtopicsbyidsRow->empid;
				$name = $listtopicsbyidsRow->name;
				$gender = $listtopicsbyidsRow->gender;
				$emailid = $listtopicsbyidsRow->emailid;
				$domain = $listtopicsbyidsRow->domain;
				$department = $listtopicsbyidsRow->department;
				$plant = $listtopicsbyidsRow->plant;
				$area = $listtopicsbyidsRow->area;
				$status = $listtopicsbyidsRow->status;


				/*
				$data = array(
								'plant'=>$plant,
								'area'=>$area,
				);
				$this->db->where('email', $empid);
				$this->db->update('usermang',$data);
 				*/

				$this->db->select('*');
				$this->db->from('usermang');
				$this->db->where('email', $empid);
				$sql_us = $this->db->get();
 				$sql_us_rows = $sql_us->num_rows();

				if($sql_us_rows>0) {
						echo "Old-".$empid."<br/>";
				} else {

					$randomiduniq = $this->randomiduniq();
					$currentdatetime = $this->currentdatetime();
					$password = md5('123');


				 $data_in = array(
					 'profile_id' => 'USER-'.$randomiduniq,
					 'email' => $empid,
					 'password' => $password,
					 'fname' => $name,
					 'gender' => $gender,
					 'domain' => $domain,
					 'depart' => $department,
					 'email2' => $emailid,
					 'user_type' => 'TRMMEMP',
					 'status' => 1,
					 'profile_pic' => 0,
					 'sub_by' => '',
					 'sub_time' => $currentdatetime
					 );
			 $this->db->insert('usermang', $data_in);

						echo "----------New-".$empid."<br/>";
				}



			}
 		}




		/********************************
	 SUPER ADMIN - temp_totalemptemp
	********************************/
	public function findholdlist($type,$uri5) {
		//$wl_profileid = $this->session->userdata('rsa_profileid');

		 $this->db->select('*');
		 $this->db->from('idea_hold_status');
		 $this->db->where('idea_type', $type);
		 $this->db->where('idea_id', $uri5);
		 $this->db->order_by('id', 'ASC');
		 $sql = $this->db->get();
		 return $sql->result();
		 //return $sql->num_rows();
	}


	/********************************
 SUPER ADMIN - count_findholdlist
********************************/
public function count_findholdlist($type,$uri5) {
	//$wl_profileid = $this->session->userdata('rsa_profileid');

	 $this->db->select('*');
	 $this->db->from('idea_hold_status');
	 $this->db->where('idea_type', $type);
	 $this->db->where('idea_id', $uri5);
	 $this->db->order_by('id', 'ASC');
	 $sql = $this->db->get();
	 //return $sql->result();
	 return $sql->num_rows();
}




/********************************
SUPER ADMIN - temp_update_datetimestamp
********************************/
public function temp_update_datetimestamp() {
//$wl_profileid = $this->session->userdata('rsa_profileid');

$randomiduniq = $this->randomiduniq();
$currentdatetime = $this->currentdatetime();
/*
$date_today=date('d-m-Y');
$timestamp = strtotime("now");
$datestamp = strtotime($date_today);
*/

 $this->db->select('*');
 $this->db->from('ideas');
 //$this->db->order_by('id', 'ASC');
 $sql = $this->db->get();
 //return $sql->result();
 //return $sql->num_rows();
 foreach ($sql->result() as $listtopicsbyidsRow) {
	 $id = $listtopicsbyidsRow->id;
	 $idea_id = $listtopicsbyidsRow->idea_id;
	 $sday = $listtopicsbyidsRow->sday;
	 $smonth = $listtopicsbyidsRow->smonth;
	 $syear = $listtopicsbyidsRow->syear;

	 $date_now = $sday."-".$smonth."-".$syear;
	 $datestamp = strtotime($date_now);


	 $data = array(
						'datetimestamp'=>$datestamp
					 );
	 $this->db->where('idea_id', $idea_id);
	 $this->db->update('ideas',$data);

	 if($this->db->affected_rows() > 0) {
 			echo "Yes-".$id."<br/>";
		} else {
 			echo "Yes-".$id."<br/>";
	 }



	}
}





/********************************
 SUPER ADMIN - listkaizenbyhalfmonth
********************************/
public function listkaizenbyhalfmonth($date1_1,$date1_2) {

	$viv_user_type = $this->session->userdata('viv_user_type');
	$viv_profile_id = $this->session->userdata('viv_profile_id');
	$viv_email = $this->session->userdata('viv_email');


	$date1_1_stamp = strtotime($date1_1);
 	$date1_2_stamp = strtotime($date1_2);

	$status = '1,2,3,4,5,6,7';
	$status_ex = explode(',',$status);


	$this->db->select('*');
	$this->db->from('ideas');
	//$this->db->where_in('status', $status_ex);
	$this->db->where('datetimestamp >=', $date1_1_stamp);
	$this->db->where('datetimestamp <=', $date1_2_stamp);
	$this->db->where_in('status', $status_ex);
	$this->db->order_by('id', 'DESC');
	$sql = $this->db->get();
	return $sql->num_rows();


}




/********************************
 SUPER ADMIN - viewkaizenbyhalfmonth
********************************/
public function viewkaizenbyhalfmonth($date1_1,$date1_2) {

	$viv_user_type = $this->session->userdata('viv_user_type');
	$viv_profile_id = $this->session->userdata('viv_profile_id');
	$viv_email = $this->session->userdata('viv_email');


	$date1_1_stamp = strtotime($date1_1);
 	$date1_2_stamp = strtotime($date1_2);

	$status = '1,2,3,4,5,6,7';
	$status_ex = explode(',',$status);


	$this->db->select('*');
	$this->db->from('ideas');
	//$this->db->where_in('status', $status_ex);
	$this->db->where('datetimestamp >=', $date1_1_stamp);
	$this->db->where('datetimestamp <=', $date1_2_stamp);
	$this->db->where_in('status', $status_ex);
	$this->db->order_by('id', 'DESC');
	$sql = $this->db->get();
	return $sql->result();


}



/********************************
addcatg
********************************/
public function addcatg() {

$domainname = $this->input->post('domainname');
$randomiduniq = $this->randomiduniq();

$this->db->select('*');
$this->db->from('domian');
$this->db->where('domain', $domainname);
$sql_check = $this->db->get();
//return $sql->result();
$rows = $sql_check->num_rows();


if($rows>0) {
			redirect('admin/kaizenidea/domaindepartment/viewdomaindepartment/dmae1');
} else {
			$data = array(
							'domainid'=>$randomiduniq,
							'domain'=>$domainname,
							'status'=>1,
			);
 			$this->db->insert('domian',$data);
}



if($this->db->affected_rows() > 0) {
	redirect('admin/kaizenidea/domaindepartment/viewdomaindepartment/dms1');
} else {
	redirect('admin/kaizenidea/domaindepartment/viewdomaindepartment/dmf1');
}


}




/********************************
 SUPER ADMIN - listdomains
********************************/
public function listdomains() {

	$viv_user_type = $this->session->userdata('viv_user_type');
	$viv_profile_id = $this->session->userdata('viv_profile_id');
	$viv_email = $this->session->userdata('viv_email');


	$this->db->select('*');
	$this->db->from('domian');
	//$this->db->where_in('status', $status_ex);
	$this->db->order_by('domain', 'ASC');
	$sql = $this->db->get();
	return $sql->result();


}


/********************************
 SUPER ADMIN - count_listdomains
********************************/
public function count_listdomains() {

	$viv_user_type = $this->session->userdata('viv_user_type');
	$viv_profile_id = $this->session->userdata('viv_profile_id');
	$viv_email = $this->session->userdata('viv_email');


	$this->db->select('*');
	$this->db->from('domian');
	//$this->db->where_in('status', $status_ex);
	$this->db->order_by('domain', 'ASC');
	$sql = $this->db->get();
	return $sql->num_rows();


}



/********************************
adddepartment
********************************/
public function adddepartment() {

$domainname = $this->input->post('domainname');
$departmentname = $this->input->post('departmentname');
$randomiduniq = $this->randomiduniq();

$this->db->select('*');
$this->db->from('department');
$this->db->where('domain', $domainname);
$this->db->where('department', $departmentname);
$sql_check = $this->db->get();
//return $sql->result();
$rows = $sql_check->num_rows();


if($rows>0) {
			redirect('admin/kaizenidea/domaindepartment/viewdomaindepartment/dpae1');
} else {
			$data = array(
							'deptid'=>$randomiduniq,
							'domain'=>$domainname,
							'department'=>$departmentname,
							'status'=>1,
			);
 			$this->db->insert('department',$data);
}



if($this->db->affected_rows() > 0) {
	redirect('admin/kaizenidea/domaindepartment/viewdomaindepartment/dps1');
} else {
	redirect('admin/kaizenidea/domaindepartment/viewdomaindepartment/dpf1');
}


}




/********************************
 SUPER ADMIN - listdepartment
********************************/
public function listdepartment() {

	$this->db->select('*');
	$this->db->from('department');
	//$this->db->where_in('status', $status_ex);
	$this->db->order_by('domain', 'ASC');
	$sql = $this->db->get();
	return $sql->result();


}


/********************************
 SUPER ADMIN - listdepartment
********************************/
public function listdepartmentbydid($db_domain) {

	$this->db->select('*');
	$this->db->from('department');
	$this->db->where('domain', $db_domain);
	$this->db->order_by('domain', 'ASC');
	$sql = $this->db->get();
	return $sql->result();


}


/********************************
 SUPER ADMIN - count_listdepartment
********************************/
public function count_listdepartment() {

	$this->db->select('*');
	$this->db->from('department');
	//$this->db->where_in('status', $status_ex);
	//$this->db->order_by('department', 'ASC');
	$sql = $this->db->get();
	return $sql->num_rows();


}




/********************************
 SUPER ADMIN - totalusersbydomain
********************************/
public function totalusersbydomain($domainn) {

	$this->db->select('*');
	$this->db->from('usermang');
	$this->db->where('domain', $domainn);
	//$this->db->order_by('department', 'ASC');
	$sql = $this->db->get();
	return $sql->num_rows();


}


/********************************
 SUPER ADMIN - totalusersbydomain
********************************/
public function totalusersbydomaindepart($dep_domainname,$dep_departmentname) {

	$this->db->select('*');
	$this->db->from('usermang');
	$this->db->where('domain', $dep_domainname);
	$this->db->where('depart', $dep_departmentname);
	//$this->db->order_by('department', 'ASC');
	$sql = $this->db->get();
	return $sql->num_rows();


}



/********************************
deleteuser
********************************/
public function upddmstatus($domainid,$status) {


 $data = array(
					'status'=>$status
				 );
 $this->db->where('domainid', $domainid);
 $this->db->update('domian',$data);

 if($this->db->affected_rows() > 0) {
		redirect('admin/kaizenidea/domaindepartment/viewdomaindepartment');
	} else {
		redirect('admin/kaizenidea/domaindepartment/viewdomaindepartment');
 }


}


/********************************
upddpstatus
********************************/
public function upddpstatus($deptid,$status) {


 $data = array(
					'status'=>$status
				 );
 $this->db->where('deptid', $deptid);
 $this->db->update('department',$data);

 if($this->db->affected_rows() > 0) {
		redirect('admin/kaizenidea/domaindepartment/viewdomaindepartment');
	} else {
		redirect('admin/kaizenidea/domaindepartment/viewdomaindepartment');
 }


}




/********************************
deletedomain
********************************/
public function deletedomain($domainid) {


 $this->db->where('domainid', $domainid);
 $this->db->delete('domian');

 if($this->db->affected_rows() > 0) {
		redirect('admin/kaizenidea/domaindepartment/viewdomaindepartment');
	} else {
		redirect('admin/kaizenidea/domaindepartment/viewdomaindepartment');
 }


}




/********************************
deletedepart
********************************/
public function deletedepart($deptid) {


 $this->db->where('deptid', $deptid);
 $this->db->delete('department');

 if($this->db->affected_rows() > 0) {
		redirect('admin/kaizenidea/domaindepartment/viewdomaindepartment');
	} else {
		redirect('admin/kaizenidea/domaindepartment/viewdomaindepartment');
 }


}




	/********************************
 WEBSITE - addwinner
 ********************************/

public function addwinner() {

		$randomiduniq = $this->randomiduniq();
		$currentdatetime = $this->currentdatetime();

		$viv_profile_id = $this->session->userdata('viv_profile_id');
		//$viv_email = $this->session->userdata('viv_email');


		$g_empid = $this->input->post('empid');
		$g_name = $this->input->post('fname');
		$g_domain = $this->input->post('domain');
		$g_depart = $this->input->post('depart');

		$s_empid = $this->input->post('empid2');
		$s_name = $this->input->post('fname2');
		$s_domain = $this->input->post('domain2');
		$s_depart = $this->input->post('depart2');

		$b_empid = $this->input->post('empid3');
		$b_name = $this->input->post('fname3');
		$b_domain = $this->input->post('domain3');
		$b_depart = $this->input->post('depart3');

		$startdate = $this->input->post('startdate');


		$startdate_ex = explode("-",$startdate);
		$startdate_day = $startdate_ex[2];
		$startdate_month = $startdate_ex[1];
		$startdate_year = $startdate_ex[0];
		$startdate_now = $startdate_day."-".$startdate_month."-".$startdate_year;
		$stimestamp = strtotime($startdate_now);

		$enddate = $this->input->post('enddate');
		$enddate_ex = explode("-",$enddate);
		$enddate_day = $enddate_ex[2];
		$enddate_month = $enddate_ex[1];
		$enddate_year = $enddate_ex[0];
		$enddate_now = $enddate_day."-".$enddate_month."-".$enddate_year;
		$etimestamp = strtotime($enddate_now);

		$todaydate = date('d-m-Y');
		$todaydate_timestamp = strtotime($todaydate);
		if($todaydate_timestamp>$etimestamp) {
				$status = 2;
			} else {
				$status = 1;
				}

 		$sday=date('d');
		$smonth=date('m');
		$syear=date('Y');


		$winnerid     = 'WIN'.$randomiduniq;
		$uniqueurlid     = uniqid();



		$data = array(
							 'winnerid'=>$winnerid,
							 'g_empid'=>$g_empid,
							 'g_name'=>$g_name,
							 'g_domain'=>$g_domain,
							 'g_depart'=>$g_depart,

							 's_empid'=>$s_empid,
							 's_name'=>$s_name,
							 's_domain'=>$s_domain,
							 's_depart'=>$s_depart,

							 'b_empid'=>$b_empid,
							 'b_name'=>$b_name,
							 'b_domain'=>$b_domain,
							 'b_depart'=>$b_depart,

							 'startdate'=>$startdate_now,
							 'stimestamp'=>$stimestamp,
							 'enddate'=>$enddate_now,
							 'etimestamp'=>$etimestamp,
						   'status'=>$status,
							 'subby'=>$viv_profile_id,
 							 'subdate'=>$currentdatetime
 						 );

		 $this->db->insert('winnerslist',$data);



			if($this->db->affected_rows() > 0) {
				redirect('admin/kaizenidea/winners/winnerslist');
			} else {
				redirect('admin/kaizenidea/winners/winnerslist');
			}




}


/********************************
 SUPER ADMIN - listwinners
********************************/
public function listwinners() {

	$this->db->select('*');
	$this->db->from('winnerslist');
 	$this->db->order_by('id', 'DESC');
	$sql = $this->db->get();
	return $sql->result();

}


/********************************
 SUPER ADMIN - listwinners
********************************/
public function count_listwinners() {

	$this->db->select('*');
	$this->db->from('winnerslist');
 	$this->db->order_by('id', 'DESC');
	$sql = $this->db->get();
	return $sql->num_rows();

}


/********************************
 SUPER ADMIN - listwinners
********************************/
public function findlastidofwinner() {

	$this->db->select('*');
	$this->db->from('winnerslist');
	$this->db->order_by('id', 'DESC');
 	$this->db->limit(1);
	$sql = $this->db->get();
	foreach ($sql->result() as $rowArray) {
				$id = $rowArray->id;
	}
	if(empty($id)) { $id = 0; }
	return $id;

}



	/********************************
	updwinnerstatus
	********************************/
	public function updwinnerstatus($winnerid,$status) {


		$dataup = array(
						'status'=>0
					 );
		$this->db->where('status', 1);
		$this->db->update('winnerslist',$dataup);



	 $data = array(
						'status'=>$status
					 );
	 $this->db->where('winnerid', $winnerid);
	 $this->db->update('winnerslist',$data);

	 if($this->db->affected_rows() > 0) {
			redirect('admin/kaizenidea/winners/winnerslist');
		} else {
			redirect('admin/kaizenidea/winners/winnerslist');
	 }


	}


	/********************************
	load_update_expiry
	********************************/
	public function load_update_expiry() {

		$todaydate = date('d-m-Y');
		$todaydate_timestamp = strtotime($todaydate);


		$dataup = array(
						'status'=>2
					 );
	  $this->db->where('etimestamp <', $todaydate_timestamp);
		//$this->db->where('status', 1);
		//$this->db->or_where('status', 0);
		$this->db->update('winnerslist',$dataup);

		/*
		if($this->db->affected_rows() > 0) {
 			redirect('admin/kaizenidea/winners/winnerslist');
 		} else {
 			redirect('admin/kaizenidea/winners/winnerslist');
 	  }
		*/

		}

		/********************************
		findwinnerimagename
		********************************/
		public function findwinnerimagename($winnerid) {

			$this->db->select('*');
			$this->db->from('winnerslist');
			$this->db->where('winnerid', $winnerid);
			$sql = $this->db->get();
			//return $sql->result();
			//return $sql->num_rows();


				foreach ($sql->result() as $rowArray) {
							$banner = $rowArray->banner;
				}
				return $banner;

		}

		/********************************
		deletewinner
		********************************/
		public function deletewinner($winnerid) {

		$findwinnerimagename = $this->findwinnerimagename($winnerid);
		$file_to_delete = 'assets/images/winners/'.$findwinnerimagename.'';
		unlink($file_to_delete);


		 $this->db->where('winnerid', $winnerid);
		 $this->db->delete('winnerslist');


		 if($this->db->affected_rows() > 0) {
				redirect('admin/kaizenidea/winners/winnerslist');
				} else {
					redirect('admin/kaizenidea/winners/winnerslist');
			 }
		 }



 		 /********************************
		  SUPER ADMIN - listdepartment
		 ********************************/
		 public function listactivewinners() {

		 	$this->db->select('*');
		 	$this->db->from('winnerslist');
			$this->db->where('status', 1);
			$this->db->order_by('id','DESC');
		 	$this->db->limit(1);
 		 	$sql = $this->db->get();
		 	return $sql->result();

		 }


		 /********************************
		  SUPER ADMIN - count_listactivewinners
		 ********************************/
		 public function count_listactivewinners() {

		 	$this->db->select('*');
		 	$this->db->from('winnerslist');
		 	$this->db->where('status', 1);
 		 	$sql = $this->db->get();
		 	return $sql->num_rows();;

		 }


		 /********************************
		  SUPER ADMIN - count_listactivewinners_popup
		 ********************************/
		 public function count_listactivewinners_popup() {

			 $todaydate = date('d-m-Y');
			 $todaydate_timestamp = strtotime($todaydate);
			 //if($todaydate_timestamp>$etimestamp) {

		 	$this->db->select('*');
			$this->db->from('winnerslist');
			$this->db->where('status', 1);
			$this->db->where('stimestamp <=', $todaydate_timestamp);
 		 	$this->db->where('etimestamp >=', $todaydate_timestamp);
 		 	$sql = $this->db->get();
		 	return $sql->num_rows();;

		 }



		 /**********************************
		 Only	get_dept_bydomain Emails
 **********************************/

 public function get_dept_bydomain(){
		 $team = $this->input->post('team');

		 $this->db->select('department');
		 $this->db->from('department');
		 $this->db->where('domain',$team);
		 //$this->db->where('status', 1);
		 $sql = $this->db->get();
		 $result =  $sql->result();

		 $users_arr = array();
		 foreach ($result as $val) {
			 $department = $val->department;
				$users_arr[] = array("department" => $department);
		 }
		 //echo $result;
		 echo json_encode($users_arr);
 }



	/********************************
			mforgotpassword_user
  ********************************/

	public function mforgotpassword_user()
	{
			$email = $this->input->post('email');

			$randomiduniq = $this->randomiduniq();
			$currentdatetime = $this->currentdatetime();

			$this->db->select('*');
			$this->db->from('usermang');
			$this->db->where('email', $email);
			$sql_check = $this->db->get();
			//return $sql->result();
			$row = $sql_check->num_rows();
			if ($row > 0) {
					$newpassid = MD5($randomiduniq);

					$data = [
							'password' => $newpassid,
					];
					$this->db->where('email', $email);
					$this->db->update('usermang', $data);

					if ($this->db->affected_rows() > 0) {
							$fname = $this->findnamebyemail($email);
							$profileid = $this->findprofileidbyemail($email);
							$email2 = $this->findemail2byemail($email);
							//TRigger Email
							$this->memail->js_forgotpassword($fname, $email2, $currentdatetime, $profileid, $newpassid);
							redirect('admin/index/msgsus');
					} else {
							redirect('admin/index/mgcd1c3922');
					}
			} else {
					    redirect('admin/index/msgfail');
			}
	}







}
?>
