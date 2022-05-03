<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mapi');
  	$this->load->model('messages');

	}



	/*****************
	MODEL
	*****************/
	public function login() { $this->mapi->biz_login(); }
	public function register() { $this->mapi->register(); }

	public function deleteuser() { $this->mapi->deleteuser(); }
	public function ajaxaddimagebefore() { $this->mapi->ajaxaddimagebefore(); }
	public function ajaxaddimageafter() { $this->mapi->ajaxaddimageafter(); }
	public function ajaxaddimagerootcause() { $this->mapi->ajaxaddimagerootcause(); }

	public function ajaxaddimagebefore_ideagen() { $this->mapi->ajaxaddimagebefore_ideagen(); }
	public function ajaxaddimageafter_ideagen() { $this->mapi->ajaxaddimageafter_ideagen(); }
	public function ajaxaddimagerootcause_ideagen() { $this->mapi->ajaxaddimagerootcause_ideagen(); }

	public function ajaxaddteammembnames() { $this->mapi->ajaxaddteammembnames(); }
	public function deletekaizenimg() { $this->mapi->deletekaizenimg(); }
	public function deletekaizenimg_rootcause() { $this->mapi->deletekaizenimg_rootcause(); }
	public function deleteteammember() { $this->mapi->deleteteammember(); }
	public function deletekaizenimg_rootcause_ideagen() { $this->mapi->deletekaizenimg_rootcause_ideagen(); }

	public function addsustenance() { $this->mapi->addsustenance(); }
	public function deletesustenance() { $this->mapi->deletesustenance(); }
 	public function getempinfobyempid() { $this->mapi->getempinfobyempid(); }


	public function ajaxgetdeptnamebyempid() { $this->mapi->ajaxgetdeptnamebyempid(); }
	public function ajaxgetdeptbydomain() { $this->mapi->ajaxgetdeptbydomain(); }



	public function deleteteammember_ideagen() { $this->mapi->deleteteammember_ideagen(); }
 	public function ajaxaddteammembnames_ideagen() { $this->mapi->ajaxaddteammembnames_ideagen(); }
 	public function deletekaizenimg_ideagen() { $this->mapi->deletekaizenimg_ideagen(); }
	public function addsustenance_ideagen() { $this->mapi->addsustenance_ideagen(); }
	public function deletesustenance_ideagen() { $this->mapi->deletesustenance_ideagen(); }


}
