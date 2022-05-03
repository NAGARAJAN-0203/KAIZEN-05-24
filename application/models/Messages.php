<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Messages extends CI_Model {
	function __construct()
	{
		parent::__construct();
	}

	/********************************
	MESSAGES
	********************************/
	public function msg_text($mssg) {


	  	$mgce926289 = array('User account already exist', '0');
	   	$mg53242 = array('Access Denined', '0');
 			$mgcd1c3922 = array('Sorry.. Please Try again!', '0');
			$mge292d7e3 = array('User deleted successfully', '1');
			$mge182d7f3 = array('Deleted successfully','1');
			$mgc1619f66 = array('Submitted successfully', '1');
			$mgcf2f4d4a = array('', '1');

			$mg76ea943a = array('', '1');
			$mg23se765u = array('','1');
			$mga3a6937e = array('', '1');
			$mga0048a1f = array('', '1');
			$mg338f23c6 = array('', '0');

			$mg4509fd49 = array('', '1');
			$mga172fb4a = array('', '1');
			$mga170ad38 = array('Your Account Created Successfully, Please Check Email and Verify', '1');
			$mg75ebec60 = array('Successfully Logged out', '1');

			$mg1130c3b5 = array('Invalid Login Credentials', '0');
			$mg7fa422eb = array('', '1');
			$mga4af65fe = array('', '0');
			$mgc3db7600 = array('Updated Successfully', '1');
			$mg58975bd3 = array('', '1');
			$mg98985bd3 = array('', '1');

			$mg5db86fc7 = array('', '1');
			$mg3bbc300e = array('', '1');
			$mg3bbc100a = array('', '1');

			$mgcdfe7da0 = array('', '1');
			$mgec27ae28 = array('', '1');

			$mgsomeouvv = array('', '1');
			$mgsomeoccc = array('', '0');
			$mgsomeobbv = array('New password sent to your email', '1');

			$mgsomeabcd = array('', '1');
			$mgsomedcba = array('', '0');

			$mg4b7cf9ac = array('', '1');
			$mg4b7cf7ac = array('Your password updated successfully', '1');
			$mg488cf7ac = array('Your queries has been submitted successfully', '1');

			$mgsome1234 = array('Status updated Successfully', '1');
			$mgsomebloc = array('Your account has been blocked, Please contact support team', '0');
			$mgsomeinac = array('Your account has been inactive, Please contact support team', '0');

			$mgefge1234 = array('Account Created Successfully', '1');

			$mgpr465748 = array('Profile Updated Successfully', '1');
			$mgpr657483 = array('','1');
			$mgpr347890 = array('', '1');
			$mgpr347896 = array('', '1');

			$mgfc876765 = array('', '1');



			$mgsave465748 = array('', '1');
			$mgsave657483 = array('','1');
			$mgsave347890 = array('', '1');

			$mgpass987432 = array('', '1');
			$mgpass347432 = array('', '1');
			$mgpass347234 = array('Password Not Matching', '0');
			$mgpass349834 = array('Please Use Different Password', '0');










			//$mssg = $this->uri->segment(3);

			switch ($mssg) {
				case 'mgcd1c3922':
					return $mgcd1c3922;
					break;

				case 'mge292d7e3':
						return $mge292d7e3;
						break;

			    case 'mge182d7f3':
			            return 	$mge182d7f3;
			            break;

				case 'mgce926289':
						return $mgce926289;
						break;

				case 'mgc1619f66':
						return $mgc1619f66;
						break;

				case 'mgcf2f4d4a':
						return $mgcf2f4d4a;
						break;

				case 'mg23se765u':
				       return $mg23se765u;
				       break;

				case 'mg76ea943a':
						return $mg76ea943a;
						break;

				case 'mga3a6937e':
						return $mga3a6937e;
						break;

				case 'mga0048a1f':
						return $mga0048a1f;
						break;

				case 'mg338f23c6':
						return $mg338f23c6;
						break;

				case 'mg4509fd49':
						return $mg4509fd49;
						break;
			case 'mga172fb4a':
						return $mga172fb4a;
						break;

			case 'mga170ad38':
						return $mga170ad38;
						break;

			case 'mg75ebec60':
						return $mg75ebec60;
						break;

			case 'mg1130c3b5':
						return $mg1130c3b5;
						break;

			case 'mg7fa422eb':
						return $mg7fa422eb;
						break;

			case 'mga4af65fe':
						return $mga4af65fe;
						break;

			case 'mgc3db7600':
						return $mgc3db7600;
						break;

			case 'mg58975bd3':
						return $mg58975bd3;
						break;

			case 'mg5db86fc7':
						return $mg5db86fc7;
						break;

			case 'mg3bbc300e':
						return $mg3bbc300e;
						break;

			case 'mgcdfe7da0':
						return $mgcdfe7da0;
						break;

			case 'mgec27ae28':
						return $mgec27ae28;
						break;

			case 'mgsomeouvv':
						return $mgsomeouvv;
						break;

			case 'mgsomeoccc':
						return $mgsomeoccc;
						break;

			case 'mgsomeobbv':
						return $mgsomeobbv;
						break;

			case 'mgsomeabcd':
						return $mgsomeabcd;
						break;

			case 'mgsomedcba':
						return $mgsomedcba;
						break;
			case 'mg53242':
						return $mg53242;
						break;

			case 'mg4b7cf9ac':
						return $mg4b7cf9ac;
						break;

			case 'mg4b7cf7ac':
						return $mg4b7cf7ac;
						break;

			case 'mg488cf7ac':
						return $mg488cf7ac;
						break;

			case 'mgsome1234':
						return $mgsome1234;
						break;

			case 'mgsomebloc':
						return $mgsomebloc;
						break;

			case 'mgsomeinac':
						return $mgsomeinac;
						break;

			case 'mg98985bd3':
						return $mg98985bd3;
						break;

			case 'mg3bbc100a':
						return $mg3bbc100a;
						break;

			case 'mgefge1234':
						return $mgefge1234;
						break;
			case 'mgpr465748':
						return $mgpr465748;
						break;

			case 'mgpr657483':
						return $mgpr657483;
						break;

			case 'mgpr347890':
						return $mgpr347890;
						break;

			case 'mgpr347896':
						return $mgpr347896;
						break;


			case 'mgsave465748':
						return $mgsave465748;
						break;

			case 'mgsave657483':
						return $mgsave657483;
						break;

			case 'mgsave347890':
						return $mgsave347890;
						break;

			case 'mgpass347432':
						return $mgpass347432;
						break;

			case 'mgpass347234':
						return $mgpass347234;
						break;

			case 'mgpass349834':
						return $mgpass349834;
						break;

			case 'mgpass987432':
						return $mgpass987432;
						break;

		 case 'mgfc876765':
					return $mgfc876765;
					break;



			}
	}
}
?>
