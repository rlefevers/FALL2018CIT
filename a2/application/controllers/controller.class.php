<?php
class controller {
  public $load;
  public $user;

  function __construct() {
    $this->load = new Load();
    $this->user = new User();
    $this->home();
  }

  function home() {
    $this->user->userID = 'rlefever';
    $this->user->first ='Rebecca';
    $this->user->last ='Lefevers';
    $this->user->email ='rlefever@iu.edu';
    $this->user->role ='user';

    $data = $this->user->getName();

    $this->load->view('view.php',$data);

  }

}
?>
