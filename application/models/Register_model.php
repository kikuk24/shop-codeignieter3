<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Register_model extends MY_Model
{
  protected $table = 'user';
  /**
   * Tampilan default pada form
   */
  public function getDefaultValues()
  {
    return [
      'name'    => '',
      'email'    => '',
      'password'  => '',
      'role'    => '',
      'is_active'  => ''
    ];
  }
  /**
   * Aturan mengisi data
   */
  public function getValidationRules()
  {
    $validationRules =  [
      [
        'field' => 'nama',
        'label' => 'Name',
        'rules' => 'trim|required'
      ],
      [
        'field' => 'email',
        'label' => 'Email',
        'rules' => 'trim|required|valid_email|is_unique[user.email]',
        'errors' => [
          'is_unique' => 'Email already registered',
        ]
      ],
      [
        'field' => 'password',
        'label' => 'Password',
        'rules' => 'required|min_length[8]'
      ],
      [
        'field' => 'role',
        'label' => 'Role',
        'rules' => 'trim|required'
      ],
    ];
    return $validationRules;
  }
/**
 * menyimpan data yang sudah di inputkan
 */
  public function run($input)
  {
    $data = [
      'name' => $input->name,
      'email' => strtolower($input->email),
      'password' => hashEncrypt($input->password),
      'role' => 'member',
    ];
    $user = $this->create($data);
    $sess_data = [
      'id' => $user,
      'name' => $data['name'],
      'email' => $data['email'],
      'role' => $data['role'],
      'is_active' => true
    ];
    $this->session->set_userdata($sess_data);
  }
}

/* End of file Register.php */
