<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class Auth extends BaseController
{
  /**
   * This is default constructor of the class
   */
  public function __construct()
  {
    parent::__construct();
    $this->load->model('auth_model');
    $this->load->library('form_validation');
  }

  /**
   * Index Page for this controller.
   */
  public function index()
  {
    $this->isLoggedIn();
  }
  
  /**
   * This function used to check the user is logged in or not
   */
  function isLoggedIn()
  {
    $isLoggedIn = $this->session->userdata('isLoggedIn');
    
    if(!isset($isLoggedIn) || $isLoggedIn != TRUE)
    {
      $this->global['pageTitle'] = 'Rekrutmen Mirota KSM';
      
      $this->loadViews("login/login", $this->global, NULL, NULL);
    }
    else
    {

      $loginType = $this->session->userdata('loginType');
      if($loginType == 'user'){
        redirect('halaman-pelamar');
      }else{
        redirect('dashboard');
      }
    }
  }
  
  /**
   * This function used to logged in user
   */
  public function login()
  {
    
    $this->load->library('form_validation');
    
    $this->form_validation->set_rules('username', 'username', 'required|max_length[128]|trim',
      array(
        'required' => 'Form harus diisi',
      )
    );
    $this->form_validation->set_rules('password', 'Password', 'required|max_length[32]');
    
    if($this->form_validation->run() == FALSE)
    {
      $this->index();
    }
    else
    {
      $username = $this->input->post('username');
      $password = $this->input->post('password');
      
      $result = $this->auth_model->loginMe($username, $password);
        
      if(count($result) > 0)
      {
        foreach ($result as $res)
        {
          $roleId = $res->roleId;

          $sessionArray = array(
            'userId'=>$res->userId,
            'nama_lengkap'=>$res->nama_lengkap,
            'kandidat_id'=>$res->kandidat_id,
            'roleId'=>$res->roleId,
            'isLoggedIn' => TRUE
          );
                            
            $this->session->set_userdata($sessionArray);

            if($roleId != 1){
              redirect('halaman-pelamar');
            }else{
              redirect('halaman-admin');
            }
        }
      }
      else
      {
        $this->set_notifikasi_swal('error','Gagal','username atau password salah');
        
        redirect('login');
      }
    }
  }

  public function authgoogle(){
    $profile    = $this->userlogin->oauth2_google()['profile'];
    $email      = $profile['email'];
    $result     = $this->Login_model->authgoogle($email);
    if(isset($result->error)){
        $response = $result->error;
        $this->index($response);
    }else{
        redirect('halaman-pelamar');
    }
  }

  public function insert_authGoogle(){
    $post    = $this->userlogin->register_oauth2_google()['profile'];
    $response = $this->Register_model->insert_authGoogle($post);
    return $this->index($response);
  }

  public function loginAdmin()
  {
    
    $this->load->library('form_validation');
    
    $this->form_validation->set_rules('username', 'username', 'required|max_length[128]|trim',
      array(
        'required' => 'Form harus diisi',
      )
    );
    $this->form_validation->set_rules('password', 'Password', 'required|max_length[32]');
    
    if($this->form_validation->run() == FALSE)
    {
      $this->index();
    }
    else
    {
      $username = $this->input->post('username');
      $password = $this->input->post('password');
      
      $result = $this->auth_model->loginAdmin($username, $password);

      var_dump($result);
        
      // if(count($result) > 0)
      // {
      //   foreach ($result as $res)
      //   {
      //     $sessionArray = array(
      //       'userId'=>$res->userId,
      //       'nama_lengkap'=>$res->nama_lengkap,
      //       'kandidat_id'=>$res->kandidat_id,
      //       'roleId'=>$res->roleId,
      //       'isLoggedIn' => TRUE
      //     );
                            
      //       $this->session->set_userdata($sessionArray);

      //       redirect('admin/dashboard');
      //   }
      // }
      // else
      // {
      //   $this->set_notifikasi_swal('error','Gagal','username atau password salah');
        
      //   redirect('loginAdmin');
      // }
    }
  }

  public function forgotPassword()
  {
    $this->load->model('auth_model');

    if($_SERVER['REQUEST_METHOD']=='POST')
    {
      $this->form_validation->set_rules('email','email','required');
      if($this->form_validation->run()==TRUE)
      {
        $email  = $this->input->post('email');
        $validateEmail = $this->auth_model->validateEmail($email);

        if($validateEmail!=false)
        {
          $row = $validateEmail;
          $user_id = $row->userId;
          $user_name = $row->username;

          $string = time().$user_id.$email;
          $hash_string = hash('sha256',$string);
          $currentDate = date('Y-m-d H:i');
          $hash_expiry = date('Y-m-d H:i',strtotime($currentDate. ' + 1 days'));
          $data = array(
              'hash_key'=>$hash_string,
              'hash_expiry'=>$hash_expiry,
          );

          $resetLink = base_url().'login/reset-password/'.$hash_string;
          $message = 
          '<img class="img-logo" src="http://localhost/recruitment/assets/dist/images/logo-mirota.png?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="" srcset=""></img>
          <h3><b>Halo '.$user_name.',</b></h3>
          <p>Kamu baru saja mengirimkan permintaan reset password akun.<br><br>
          Untuk lanjut, klik tombol di bawah ini:</p><br>
          <a href="'.$resetLink.'"><img class="img-logo" src="http://localhost/recruitment/assets/dist/images/logo-mirota.png?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="" srcset=""></img></a>
          <p>atau klik link ini: <a href="'.$resetLink.'">link</a></p><br>'
          ;
          $subject = "Reset Password Akun Rekrutmen Mirota KSM";
          $sentStatus = $this->sendEmail($email,$subject,$message);
          if($sentStatus==true)
          {
            $this->auth_model->updatePasswordhash($data,$email);
            $this->set_notifikasi_swal('success','Berhasil','Reset password berhasil dikirim ke emailmu');
          }
          else
          {
            $this->set_notifikasi_swal('error','Gagal','Reset password Gagal Dikirim');
          }

        }	
        else
        {
          $this->set_notifikasi_swal('warning','Gagal','Email Tidak terdaftar');
        }

      }
    }

    $this->loadViews("login/forgotPassword", $this->global, NULL, NULL);   
  }


  /*user this email sending code */
  public function sendEmail($email,$subject,$message)
  {   
    /*This email configuration for sending email by Google Email(Gmail Acccount) from localhost */
    $config = Array(
    'mailtype' => 'html',
    'charset'   => 'utf-8',
    'protocol' => 'smtp',
    'smtp_host' => 'mirota.id',
    'smtp_user' => 'recruitment@mirota.id',  //gmail id
    'smtp_pass' => 'mirotaksm',   //gmail password
    'smtp_crypto' => 'ssl',
    'smtp_port' => 465,
    'crlf'    => "\r\n",
    'newline' => "\r\n"
    );



    $this->load->library('email', $config);
    $this->email->from('no-replyrecruitment@mirota.id', 'Rekrutmen PT. Mirota KSM');
    $this->email->to($email);
    $this->email->subject($subject);
    $this->email->message($message);
    
    if($this->email->send())
    {
      return true;
    }
    else
    {
        return false;
    }
  }


  function resetpassword()
  {
    $this->load->model('auth_model');

      if($this->uri->segment(3))
      {
          $hash = $this->uri->segment(3);
          $this->data['hash']=$hash;
          $getHashDetails = $this->auth_model->getHashDetails($hash);
          if($getHashDetails!=false)
          {
              $hash_expiry = $getHashDetails->hash_expiry;
              $currentDate = date('Y-m-d H:i');
              if($currentDate < $hash_expiry)
              {
                  if($_SERVER['REQUEST_METHOD']=='POST')
                  {
                      $this->form_validation->set_rules('password','New Password','required');
                      $this->form_validation->set_rules('cpassword','Confirm New Password','required|matches[password]');
                      if($this->form_validation->run()==TRUE)
                      {
                          $newPassword = $this->input->post('password');
                          $newPassword =getHashedPassword($newPassword);
                          $data = array(
                              'password'=>$newPassword,
                              'hash_key'=>null,
                              'hash_expiry'=>null
                          );
                          $this->auth_model->updateNewPassword($data,$hash);
                          $this->set_notifikasi_swal('success','Berhasil','Password berhasil diubah');
                          redirect('login');
                      }
                      else
                      {
                          $this->set_notifikasi_swal('error','Gagal','Password Salah');
                          $this->loadViews("login/resetPassword", $this->global, $this->data, NULL);

                      }
                  }
                  else
                  {
                    $this->loadViews("login/resetPassword", $this->global, $this->data, NULL);

                  }
              }
              else
              {
                  $this->set_notifikasi_swal('error','Gagal','Waktu habis');
                  redirect(base_url('login'));
              }
          }
          else
          {
              echo 'invalid link';exit;
          }
      }
      else
      {
        $this->set_notifikasi_swal('success','Berhasil','Password Berhasil Diubah');
        redirect('login');
      }
  }

  /**
  * This function is used to logged out user from system
  */
	function logout() {
		$this->session->sess_destroy ();
		
		redirect ( 'login' );
	}
}

?>