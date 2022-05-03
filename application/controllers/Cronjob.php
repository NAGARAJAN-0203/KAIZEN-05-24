<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cronjob extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mapi');

	}



	/**********************************
	onceperminute
	**********************************/
	public function onceperminute()
	{
		//$this->mapi->testcronjob();
		//$this->mapi->cronjob_returnstatement_month();
		//$this->mapi->cronjob_feesentry_month();
 	}



	/**********************************
	oncepermonthstart
	**********************************/
	public function oncepermonthstart()
	{
		//$this->mapi->testcronjob();
		$this->mapi->cronjob_returnstatement_month();
		$this->mapi->cronjob_feesentry_month();
 	}





}
