<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends MY_Model {

  protected $table='user';
  public function getDefaultValues(){

    return [
      'email'=>'',
      'password'=>'',
    ];
  }

}

/* End of file Login_model.php */
