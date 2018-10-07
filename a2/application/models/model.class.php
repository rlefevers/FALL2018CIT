<?php
abstract class Model {
  protected $userID;
  protected $first;
  protected $last;
  protected $email;
  protected $role;

  public function __construct() {
    //we will revist this later

  }
  public function __set($name, $value) {
    $this->$name = $value;
    return;
  }
  public function __get($name) {
    return $this->$name;
  }
  public function __destruct() {

  }

}
?>
