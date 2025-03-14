<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * @author : Tri Cahya Wibawa
 * @version : 1.0
 * @since : 11 Februari 2024
 */
class User extends BaseController
{
  /**
   * This is default constructor of the class
   */
  public function __construct()
  {
    parent::__construct();
    $this->load->model('auth_model');
    $this->load->library('form_validation');
    $this->isLoggedIn();
  }

  public function dashboardUser(){
    $this->global['pageTitle'] = 'Rekrutmen Mirota KSM';

		$this->loadViews("pelamar/dashboard", $this->global, NULL, NULL);
  }

  public function dashboardAdmin(){
    $this->global['pageTitle'] = 'Rekrutmen Mirota KSM';

		$this->loadViewsAdmin("admin/dashboard", $this->global, NULL, NULL);
  }
}