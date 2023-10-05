<?php

defined('BASEPATH') or exit('No direct script access allowed');

class MY_Model extends CI_Model
{

  protected $table = '';


  public function __construct()
  {
    parent::__construct();

    if (!$this->table) {
      $this->table = strtolower(
        str_replace('_model', '', get_class($this))
      );
    }
  }
  /**
   * Funsi untuk validasi input
   * Rules : dideklarasikan di masing masing model
   * 
   * @return void
   */
  public function validate()
  {
    $this->load->library('form_validation');

    $this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');

    $getValidationRules = $this->getValidationRules();

    $this->form_validation->set_rules($getValidationRules);

    return $this->form_validation->run();
  }


  public function select($columns)
  {
    $this->db->select($columns);
    return $this;
  }

  public function where($columns, $condition)
  {
    $this->db->where($columns, $condition);
    return $this;
  }

  public function like($columns, $condition)
  {
    $this->db->like($columns, $condition);
    return $this;
  }

  public function orLike($columns, $condition)
  {
    $this->db->or_like($columns, $condition);
    return $this;
  }

  public function join($table, $type = 'left')
  {
    $this->db->join($table, '$this->table.id_$table=$this->table.id', $type);
    return $this;
  }

  public function orderBy($columns, $direction = 'asc')
  {
    $this->db->order_by($columns, $direction);
    return $this;
  }

  public function first()
  {
    return $this->db->get($this->table)->row();
  }

  public function get()
  {
    return $this->db->get($this->table)->result();
  }

  public function count()
  {
    return $this->db->count_all_results($this->table);
  }
  public function create($data)
  {
    $this->db->insert($this->table, $data);
    return $this->db->insert_id();
  }

  public function update($data)
  {
    return $this->db->update($this->table, $data);
  }

  public function delete()
  {
    $this->db->delete($this->table);
    return $this->db->affected_rows();
  }

  public function paginate($page)
  {
    $this->db->limit(
      $this->perPage,
      $this->calculateRealOffset($page)
    );
  }

  public function calculateRealOffset($page)
  {
    if (is_null($page) || empty($page)) {
      $offset = 0;
    } else {
      $offset = ($page * $this->perPage) - $this->perPage;
    }
    return $offset;
  }
  public function makePagination($baseUrl, $urlSegment, $totalRows = 'null')
  {
    $this->load->library('pagination');
    $config['base_url'] = $baseUrl;
    $config['total_rows'] = $totalRows;
    $config['uri_segment'] = $urlSegment;
    $config['per_page'] = $this->perPage;
    $config['use_page_numbers'] = TRUE;

    $config['full_tag_open'] = '<ul class="pagination">';
    $config['full_tag_close'] = '</ul>';
    $config['atributes'] = array('class' => 'pagination');
    $config['first_link'] = false;
    $config['last_link'] = false;
    $config['first_tag_open'] = '<li class="page-item">';
    $config['first_tag_close'] = '</li>';
    $config['prev_link'] = '&laquo';
    $config['prev_tag_open'] = '<li class="page-item">';
    $config['prev_tag_close'] = '</li>';
    $config['next_link'] = '&raquo';
    $config['next_tag_open'] = '<li class="page-item">';
    $config['next_tag_close'] = '</li>';
    $config['last_tag_open'] = '<li class="page-item">';
    $config['last_tag_close'] = '</li>';
    $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link">';
    $config['cur_tag_close'] = '</a></li>';
    $config['num_tag_open'] = '<li class="page-item">';
    $config['num_tag_close'] = '</li>';


    $this->pagination->initialize($config);
    return $this->pagination->create_links();
  }
}

/* End of file MY_Model.php */
