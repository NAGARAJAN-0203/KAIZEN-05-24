<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Memail extends CI_Model {
	function __construct() {
		parent::__construct();
		//$this->load->model('mapi');
	}




	/********************************
	triggermail
	********************************/
	public function triggermail($to,$cc,$subject,$message) {


					$this->load->library('email');
					 $config = array (
						 'mailtype' => 'html',
 						'wordwrap' => 'TRUE',
 						'charset' => 'iso-8859-1',
 						'protocol' => 'smtp',
 						'isHTML' => 'TRUE',


						'smtp_host' => 'webmail.vivartha.com',
						'smtp_port' => 587,
						'smtp_user' => 'developer@vivartha.com',
						'smtp_pass' => 'Developer@123'



						/*
						'smtp_crypto' => 'tls',
  					'smtp_host' => 'smtp.office365.com',
						'smtp_port' => 587,
						'smtp_user' => 'chandrasekar.m@canopusgbs.com',
						'smtp_pass' => 'Chandru@@1989',
  					'newline' => '\r\n',
						'crlf' => '\r\n'
						*/




						 );
					 $this->email->initialize($config);
					 $this->email->set_newline('\r\n');
					 $this->email->from('developer@vivartha.com', 'Noreply Kaizen');
					 $this->email->to($to);
					 //$this->email->to('chandru5452@gmail.com');
					 $this->email->cc($cc);
					 //$this->email->bcc('chandru5452@gmail.com');
					 $this->email->subject($subject);
					 $this->email->message($message);
					 //$this->email->send();
					 //echo $this->email->print_debugger();

}




/********************************
MESSAGES - triggerkaizensubmit
********************************/

public function triggerkaizensubmit($approv_email,$ideaid,$currentdatetime,$randomiduniq) {

		$emailid = $this->mapi->findemail2byemail($approv_email);
		$fname = $this->mapi->findnamebyemail($approv_email);

		$listmyideasbyiid = $this->mapi->listmyideasbyiid($ideaid);
	   foreach ($listmyideasbyiid as $rowArray) {

	 		$doc_no = $rowArray->doc_no;
			$ref_no = $rowArray->ref_no;
			$version_no = $rowArray->version_no;
	 		$proj_code = $rowArray->proj_code;

		}


		//$username=explode('@',$email_addr);

		/****************** MAIL TEMPLATE*************/
			 $message = '<!DOCTYPE html><head>';
			 $message .= '</head><body>';

			 $message .= '<div><tr>
			 <td>
				<div>
				 <div style="width:97% !important; padding:10px 10px 10px 10px !important; float:left; text-align:left !important;
					position:relative; bottom:0px !important; font-weight:lighter;    font-family:Geneva, Arial, Helvetica, sans-serif; font-size:14px;">
					<table style="max-width:550px;border:1px solid #1b9de0;border-top:4px solid #1b9de0;border-bottom:4px solid #1b9de0;font-family:Arial,Helvetica,sans-serif" width="100%" align="center" cellspacing="0" cellpadding="0" border="0">
						 <tbody>
							<tr>
							 <td style="padding-top:15px" align="center"><a style="outline:none;border:0px" href=""><img style="display:block;max-width:217px" alt="" width="100%" align="absbottom" border="0" src="" class="CToWUd"></a></td>
							</tr>
							<tr>
							 <td style="padding:20px">
								<table width="100%" cellspacing="0" cellpadding="0" border="0">
									 <tbody>


										<tr>
										 <td style="font-size:14px;text-align:left;">
										 <img src="'.base_url().'/assets/images/tatalogo.png" height="70" />
										 <br /><br />
										 Hi! '.$fname.'...
										 <br /><br />
										 Kaizen form has been submitted to you. Please find the details below
										 <br /><br /><br />

										 Doc No : '.$doc_no.'<br />
										 Version No/Date : '.$version_no.' <br />
										 Project Code : '.$proj_code.' <br />
										 KAIZEN Ref.No : '.$ref_no.'

										 <br /><br /><br />

										 <a style="text-decoration:none;font-size:18px;font-weight:bold;color:#ffffff;outline:none" href="'.site_url('admin/kaizenidea/ideamang/postidea/'.$ideaid.'').'" target="_blank" data-saferedirecturl=""><span style="color: #002a2c;
background-color: #1b9de0;border-bottom: 3px solid #1b9de0;padding: 10px 34px;margin-top: 10px !important;border: 1px solid #1b9de0;  border-radius: 2px !important;  font-size: 17px;">Open Kaizen App</span></a>
										 <br /><br />


										 <br /><br />
 If you received this email by mistake, you can safely ignore it. You don&#39;t need to take any further action. <br /><br />

										 </td>
										</tr>


										<tr>
								<td><a style="color:#9a9a9a">TEPL KAIZEN IDEA</a> <br/></td>
								 </tr>



										<tr>
										 <td>&nbsp;</td>
										</tr>



									 </tbody>
								</table>
							 </td>
							</tr>
						 </tbody>
					</table>
					<p>&nbsp;</p>
				 </div>
				</div>
			 </td>
		</tr></div></body></html>';
		//$to = $emailid;
		$to = 'chandru5452@gmail.com';
		//$to = 'deepika.singh@tataelectronics.co.in';

		$cc = '';
		$subject = 'Kaizen Form has been Submitted at'.$currentdatetime.'';
		$this->triggermail($to,$cc,$subject,$message);
			/****************** MAIL TEMPLATE*************/
}



/********************************
MESSAGES - triggerkaizensubmit
********************************/

public function triggerkaizen_driappr($approv_email,$ideaid,$currentdatetime,$randomiduniq) {

		$emailid = $this->mapi->findemail2byemail($approv_email);
		$fname = $this->mapi->findnamebyemail($approv_email);

		$listmyideasbyiid = $this->mapi->listmyideasbyiid($ideaid);
	   foreach ($listmyideasbyiid as $rowArray) {

	 		$doc_no = $rowArray->doc_no;
			$ref_no = $rowArray->ref_no;
			$version_no = $rowArray->version_no;
	 		$proj_code = $rowArray->proj_code;

		}


		//$username=explode('@',$email_addr);

		/****************** MAIL TEMPLATE*************/
			 $message = '<!DOCTYPE html><head>';
			 $message .= '</head><body>';

			 $message .= '<div><tr>
			 <td>
				<div>
				 <div style="width:97% !important; padding:10px 10px 10px 10px !important; float:left; text-align:left !important;
					position:relative; bottom:0px !important; font-weight:lighter;    font-family:Geneva, Arial, Helvetica, sans-serif; font-size:14px;">
					<table style="max-width:550px;border:1px solid #1b9de0;border-top:4px solid #1b9de0;border-bottom:4px solid #1b9de0;font-family:Arial,Helvetica,sans-serif" width="100%" align="center" cellspacing="0" cellpadding="0" border="0">
						 <tbody>
							<tr>
							 <td style="padding-top:15px" align="center"><a style="outline:none;border:0px" href=""><img style="display:block;max-width:217px" alt="" width="100%" align="absbottom" border="0" src="" class="CToWUd"></a></td>
							</tr>
							<tr>
							 <td style="padding:20px">
								<table width="100%" cellspacing="0" cellpadding="0" border="0">
									 <tbody>


										<tr>
										 <td style="font-size:14px;text-align:left;">
										 <img src="'.base_url().'/assets/images/tatalogo.png" height="70" />
										 <br /><br />
										 Hi! '.$fname.'...
										 <br /><br />
										 DRI Approved the Kaizen Form. Please find the details below
										 <br /><br /><br />

										 Doc No : '.$doc_no.'<br />
										 Version No/Date : '.$version_no.' <br />
										 Project Code : '.$proj_code.' <br />
										 KAIZEN Ref.No : '.$ref_no.'

										 <br /><br /><br />

										 <a style="text-decoration:none;font-size:18px;font-weight:bold;color:#ffffff;outline:none" href="'.site_url('admin/kaizenidea/ideamang/postidea/'.$ideaid.'').'" target="_blank" data-saferedirecturl=""><span style="color: #002a2c;
background-color: #1b9de0;border-bottom: 3px solid #1b9de0;padding: 10px 34px;margin-top: 10px !important;border: 1px solid #1b9de0;  border-radius: 2px !important;  font-size: 17px;">Open Kaizen App</span></a>
										 <br /><br />


										 <br /><br />
 If you received this email by mistake, you can safely ignore it. You don&#39;t need to take any further action. <br /><br />

										 </td>
										</tr>


										<tr>
								<td><a style="color:#9a9a9a">TEPL KAIZEN IDEA</a> <br/></td>
								 </tr>



										<tr>
										 <td>&nbsp;</td>
										</tr>



									 </tbody>
								</table>
							 </td>
							</tr>
						 </tbody>
					</table>
					<p>&nbsp;</p>
				 </div>
				</div>
			 </td>
		</tr></div></body></html>';
		//$to = $emailid;
		$to = 'chandru5452@gmail.com';
		//$to = 'deepika.singh@tataelectronics.co.in';
		$cc = '';
		$subject = 'Kaizen Form - DRI Approved'.$currentdatetime.'';
		$this->triggermail($to,$cc,$subject,$message);
			/****************** MAIL TEMPLATE*************/
}


/********************************
MESSAGES - triggerkaizen_iedeptappr
********************************/

public function triggerkaizen_iedeptappr($approv_email,$ideaid,$currentdatetime,$randomiduniq) {

		$emailid = $this->mapi->findemail2byemail($approv_email);
		$fname = $this->mapi->findnamebyemail($approv_email);

		$listmyideasbyiid = $this->mapi->listmyideasbyiid($ideaid);
	   foreach ($listmyideasbyiid as $rowArray) {

	 		$doc_no = $rowArray->doc_no;
			$ref_no = $rowArray->ref_no;
			$version_no = $rowArray->version_no;
	 		$proj_code = $rowArray->proj_code;

		}


		//$username=explode('@',$email_addr);

		/****************** MAIL TEMPLATE*************/
			 $message = '<!DOCTYPE html><head>';
			 $message .= '</head><body>';

			 $message .= '<div><tr>
			 <td>
				<div>
				 <div style="width:97% !important; padding:10px 10px 10px 10px !important; float:left; text-align:left !important;
					position:relative; bottom:0px !important; font-weight:lighter;    font-family:Geneva, Arial, Helvetica, sans-serif; font-size:14px;">
					<table style="max-width:550px;border:1px solid #1b9de0;border-top:4px solid #1b9de0;border-bottom:4px solid #1b9de0;font-family:Arial,Helvetica,sans-serif" width="100%" align="center" cellspacing="0" cellpadding="0" border="0">
						 <tbody>
							<tr>
							 <td style="padding-top:15px" align="center"><a style="outline:none;border:0px" href=""><img style="display:block;max-width:217px" alt="" width="100%" align="absbottom" border="0" src="" class="CToWUd"></a></td>
							</tr>
							<tr>
							 <td style="padding:20px">
								<table width="100%" cellspacing="0" cellpadding="0" border="0">
									 <tbody>


										<tr>
										 <td style="font-size:14px;text-align:left;">
										 <img src="'.base_url().'/assets/images/tatalogo.png" height="70" />
										 <br /><br />
										 Hi! '.$fname.'...
										 <br /><br />
										 IE Dept Approved the Kaizen Form. Please find the details below
										 <br /><br /><br />

										 Doc No : '.$doc_no.'<br />
										 Version No/Date : '.$version_no.' <br />
										 Project Code : '.$proj_code.' <br />
										 KAIZEN Ref.No : '.$ref_no.'

										 <br /><br /><br />

										 <a style="text-decoration:none;font-size:18px;font-weight:bold;color:#ffffff;outline:none" href="'.site_url('admin/kaizenidea/ideamang/postidea/'.$ideaid.'').'" target="_blank" data-saferedirecturl=""><span style="color: #002a2c;
background-color: #1b9de0;border-bottom: 3px solid #1b9de0;padding: 10px 34px;margin-top: 10px !important;border: 1px solid #1b9de0;  border-radius: 2px !important;  font-size: 17px;">Open Kaizen App</span></a>
										 <br /><br />


										 <br /><br />
 If you received this email by mistake, you can safely ignore it. You don&#39;t need to take any further action. <br /><br />

										 </td>
										</tr>


										<tr>
								<td><a style="color:#9a9a9a">TEPL KAIZEN IDEA</a> <br/></td>
								 </tr>



										<tr>
										 <td>&nbsp;</td>
										</tr>



									 </tbody>
								</table>
							 </td>
							</tr>
						 </tbody>
					</table>
					<p>&nbsp;</p>
				 </div>
				</div>
			 </td>
		</tr></div></body></html>';
		//$to = $emailid;
		$to = 'chandru5452@gmail.com';
		//$to = 'deepika.singh@tataelectronics.co.in';
		$cc = '';
		$subject = 'Kaizen Form - IE Dept Approved'.$currentdatetime.'';
		$this->triggermail($to,$cc,$subject,$message);
			/****************** MAIL TEMPLATE*************/
}





/********************************
MESSAGES - triggerideagensubmit
********************************/

public function triggerideagensubmit($approv_email,$ideaid,$currentdatetime,$randomiduniq) {

		$emailid = $this->mapi->findemail2byemail($approv_email);
		$fname = $this->mapi->findnamebyemail($approv_email);

		$listmyideasbyiid_ideagen = $this->mapi->listmyideasbyiid_ideagen($ideaid);
	   foreach ($listmyideasbyiid_ideagen as $rowArray) {

	 		$doc_no = $rowArray->doc_no;
			$ref_no = $rowArray->ref_no;
			$version_no = $rowArray->version_no;
	 		$proj_code = $rowArray->proj_code;

		}


		//$username=explode('@',$email_addr);

		/****************** MAIL TEMPLATE*************/
			 $message = '<!DOCTYPE html><head>';
			 $message .= '</head><body>';

			 $message .= '<div><tr>
			 <td>
				<div>
				 <div style="width:97% !important; padding:10px 10px 10px 10px !important; float:left; text-align:left !important;
					position:relative; bottom:0px !important; font-weight:lighter;    font-family:Geneva, Arial, Helvetica, sans-serif; font-size:14px;">
					<table style="max-width:550px;border:1px solid #1b9de0;border-top:4px solid #1b9de0;border-bottom:4px solid #1b9de0;font-family:Arial,Helvetica,sans-serif" width="100%" align="center" cellspacing="0" cellpadding="0" border="0">
						 <tbody>
							<tr>
							 <td style="padding-top:15px" align="center"><a style="outline:none;border:0px" href=""><img style="display:block;max-width:217px" alt="" width="100%" align="absbottom" border="0" src="" class="CToWUd"></a></td>
							</tr>
							<tr>
							 <td style="padding:20px">
								<table width="100%" cellspacing="0" cellpadding="0" border="0">
									 <tbody>


										<tr>
										 <td style="font-size:14px;text-align:left;">
										 <img src="'.base_url().'/assets/images/tatalogo.png" height="70" />
										 <br /><br />
										 Hi! '.$fname.'...
										 <br /><br />
										 Idea Generation has been submitted to you. Please find the details below
										 <br /><br /><br />

										 Doc No : '.$doc_no.'<br />
										 Version No/Date : '.$version_no.' <br />
										 Project Code : '.$proj_code.' <br />
										 Idea Ref.No : '.$ref_no.'

										 <br /><br /><br />

										 <a style="text-decoration:none;font-size:18px;font-weight:bold;color:#ffffff;outline:none" href="'.site_url('admin/kaizenidea/ideamang/postidea/'.$ideaid.'').'" target="_blank" data-saferedirecturl=""><span style="color: #002a2c;
background-color: #1b9de0;border-bottom: 3px solid #1b9de0;padding: 10px 34px;margin-top: 10px !important;border: 1px solid #1b9de0;  border-radius: 2px !important;  font-size: 17px;">Open Kaizen App</span></a>
										 <br /><br />


										 <br /><br />
 If you received this email by mistake, you can safely ignore it. You don&#39;t need to take any further action. <br /><br />

										 </td>
										</tr>


										<tr>
								<td><a style="color:#9a9a9a">TEPL KAIZEN IDEA</a> <br/></td>
								 </tr>



										<tr>
										 <td>&nbsp;</td>
										</tr>



									 </tbody>
								</table>
							 </td>
							</tr>
						 </tbody>
					</table>
					<p>&nbsp;</p>
				 </div>
				</div>
			 </td>
		</tr></div></body></html>';
		//$to = $emailid;
		$to = 'chandru5452@gmail.com';
		//$to = 'deepika.singh@tataelectronics.co.in';
		$cc = '';
		$subject = 'Idea Generation has been Submitted at'.$currentdatetime.'';
		$this->triggermail($to,$cc,$subject,$message);
			/****************** MAIL TEMPLATE*************/
}




/********************************
MESSAGES - triggeridea_driappr
********************************/

public function triggeridea_driappr($approv_email,$ideaid,$currentdatetime,$randomiduniq) {

		$emailid = $this->mapi->findemail2byemail($approv_email);
		$fname = $this->mapi->findnamebyemail($approv_email);

		$listmyideasbyiid = $this->mapi->listmyideasbyiid_ideagen($ideaid);
	   foreach ($listmyideasbyiid as $rowArray) {

	 		$doc_no = $rowArray->doc_no;
			$ref_no = $rowArray->ref_no;
			$version_no = $rowArray->version_no;
	 		$proj_code = $rowArray->proj_code;

		}


		//$username=explode('@',$email_addr);

		/****************** MAIL TEMPLATE*************/
			 $message = '<!DOCTYPE html><head>';
			 $message .= '</head><body>';

			 $message .= '<div><tr>
			 <td>
				<div>
				 <div style="width:97% !important; padding:10px 10px 10px 10px !important; float:left; text-align:left !important;
					position:relative; bottom:0px !important; font-weight:lighter;    font-family:Geneva, Arial, Helvetica, sans-serif; font-size:14px;">
					<table style="max-width:550px;border:1px solid #1b9de0;border-top:4px solid #1b9de0;border-bottom:4px solid #1b9de0;font-family:Arial,Helvetica,sans-serif" width="100%" align="center" cellspacing="0" cellpadding="0" border="0">
						 <tbody>
							<tr>
							 <td style="padding-top:15px" align="center"><a style="outline:none;border:0px" href=""><img style="display:block;max-width:217px" alt="" width="100%" align="absbottom" border="0" src="" class="CToWUd"></a></td>
							</tr>
							<tr>
							 <td style="padding:20px">
								<table width="100%" cellspacing="0" cellpadding="0" border="0">
									 <tbody>


										<tr>
										 <td style="font-size:14px;text-align:left;">
										 <img src="'.base_url().'/assets/images/tatalogo.png" height="70" />
										 <br /><br />
										 Hi! '.$fname.'...
										 <br /><br />
										 DRI Approved the Idea Form. Please find the details below
										 <br /><br /><br />

										 Doc No : '.$doc_no.'<br />
										 Version No/Date : '.$version_no.' <br />
										 Project Code : '.$proj_code.' <br />
										 KAIZEN Ref.No : '.$ref_no.'

										 <br /><br /><br />

										 <a style="text-decoration:none;font-size:18px;font-weight:bold;color:#ffffff;outline:none" href="'.site_url('admin/kaizenidea/ideamang/postidea/'.$ideaid.'').'" target="_blank" data-saferedirecturl=""><span style="color: #002a2c;
background-color: #1b9de0;border-bottom: 3px solid #1b9de0;padding: 10px 34px;margin-top: 10px !important;border: 1px solid #1b9de0;  border-radius: 2px !important;  font-size: 17px;">Open Kaizen App</span></a>
										 <br /><br />


										 <br /><br />
 If you received this email by mistake, you can safely ignore it. You don&#39;t need to take any further action. <br /><br />

										 </td>
										</tr>


										<tr>
								<td><a style="color:#9a9a9a">TEPL KAIZEN IDEA</a> <br/></td>
								 </tr>



										<tr>
										 <td>&nbsp;</td>
										</tr>



									 </tbody>
								</table>
							 </td>
							</tr>
						 </tbody>
					</table>
					<p>&nbsp;</p>
				 </div>
				</div>
			 </td>
		</tr></div></body></html>';
		//$to = $emailid;
		$to = 'chandru5452@gmail.com';
		//$to = 'deepika.singh@tataelectronics.co.in';
		$cc = '';
		$subject = 'Idea Form - DRI Approved'.$currentdatetime.'';
		$this->triggermail($to,$cc,$subject,$message);
			/****************** MAIL TEMPLATE*************/
}




/********************************
MESSAGES - triggeridea_iedeptappr
********************************/

public function triggeridea_iedeptappr($approv_email,$ideaid,$currentdatetime,$randomiduniq) {

		$emailid = $this->mapi->findemail2byemail($approv_email);
		$fname = $this->mapi->findnamebyemail($approv_email);

		$listmyideasbyiid = $this->mapi->listmyideasbyiid_ideagen($ideaid);
	   foreach ($listmyideasbyiid as $rowArray) {

	 		$doc_no = $rowArray->doc_no;
			$ref_no = $rowArray->ref_no;
			$version_no = $rowArray->version_no;
	 		$proj_code = $rowArray->proj_code;

		}


		//$username=explode('@',$email_addr);

		/****************** MAIL TEMPLATE*************/
			 $message = '<!DOCTYPE html><head>';
			 $message .= '</head><body>';

			 $message .= '<div><tr>
			 <td>
				<div>
				 <div style="width:97% !important; padding:10px 10px 10px 10px !important; float:left; text-align:left !important;
					position:relative; bottom:0px !important; font-weight:lighter;    font-family:Geneva, Arial, Helvetica, sans-serif; font-size:14px;">
					<table style="max-width:550px;border:1px solid #1b9de0;border-top:4px solid #1b9de0;border-bottom:4px solid #1b9de0;font-family:Arial,Helvetica,sans-serif" width="100%" align="center" cellspacing="0" cellpadding="0" border="0">
						 <tbody>
							<tr>
							 <td style="padding-top:15px" align="center"><a style="outline:none;border:0px" href=""><img style="display:block;max-width:217px" alt="" width="100%" align="absbottom" border="0" src="" class="CToWUd"></a></td>
							</tr>
							<tr>
							 <td style="padding:20px">
								<table width="100%" cellspacing="0" cellpadding="0" border="0">
									 <tbody>


										<tr>
										 <td style="font-size:14px;text-align:left;">
										 <img src="'.base_url().'/assets/images/tatalogo.png" height="70" />
										 <br /><br />
										 Hi! '.$fname.'...
										 <br /><br />
										 IE Dept Approved the Idea Form. Please find the details below
										 <br /><br /><br />

										 Doc No : '.$doc_no.'<br />
										 Version No/Date : '.$version_no.' <br />
										 Project Code : '.$proj_code.' <br />
										 IDEA Ref.No : '.$ref_no.'

										 <br /><br /><br />

										 <a style="text-decoration:none;font-size:18px;font-weight:bold;color:#ffffff;outline:none" href="'.site_url('admin/kaizenidea/ideamang/postidea/'.$ideaid.'').'" target="_blank" data-saferedirecturl=""><span style="color: #002a2c;
background-color: #1b9de0;border-bottom: 3px solid #1b9de0;padding: 10px 34px;margin-top: 10px !important;border: 1px solid #1b9de0;  border-radius: 2px !important;  font-size: 17px;">Open Kaizen App</span></a>
										 <br /><br />


										 <br /><br />
 If you received this email by mistake, you can safely ignore it. You don&#39;t need to take any further action. <br /><br />

										 </td>
										</tr>


										<tr>
								<td><a style="color:#9a9a9a">TEPL KAIZEN IDEA</a> <br/></td>
								 </tr>



										<tr>
										 <td>&nbsp;</td>
										</tr>



									 </tbody>
								</table>
							 </td>
							</tr>
						 </tbody>
					</table>
					<p>&nbsp;</p>
				 </div>
				</div>
			 </td>
		</tr></div></body></html>';
		//$to = $emailid;
		$to = 'chandru5452@gmail.com';
		//$to = 'deepika.singh@tataelectronics.co.in';
		$cc = '';
		$subject = 'Idea Form - IE Dept Approved'.$currentdatetime.'';
		$this->triggermail($to,$cc,$subject,$message);
			/****************** MAIL TEMPLATE*************/
}







}
?>
