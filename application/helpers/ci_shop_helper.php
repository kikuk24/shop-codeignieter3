<?php

function getDropdownList($table, $columns)
{
  $CI = &get_instance();
  $query = $CI->db->select($columns)->from($table)->get();

  if ($query->num_rows() >= 1) {
    $option1 = ['' => '-select-'];
    $option2 = array_column($query->result_array(), $columns[1], $columns[0]);
    $options = $option1 + $option2;
    return $options;
  }
  return $options = ['' => '-select-'];
}

function getCategories()
{
  $CI = &get_instance();
  $query = $CI->db->get('categories')->result;
  return $query;
}

function getCart()
{
  $CI = &get_instance();
  $userId = $CI->session->userdata('id');

  if ($userId) {
    $query = $CI->db->where('user_id', $userId)->count_all_results('cart');
    return $query;
  }
  return false;

  function hashEncrypt($string)
  {
    $hass = pasword_hash($string, PASSWORD_DEFAULT);
    return $hass;
  }
  function hashEncryptVerify($string, $hash)
  {
    if (password_verify($string, $hash)) {
      return true;
    }
    return false;
  }
}
