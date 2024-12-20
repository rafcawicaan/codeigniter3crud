<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model {

    private $table = 'gso.products'; // Specify the schema and table name

    public function __construct() {
        parent::__construct();
        $this->load->database(); // Explicitly load the database
    }
    
    public function get_all() {
        return $this->db->get($this->table)->result_array(); // Use the full table name
    }

    public function get_by_id($id) {
        return $this->db->get_where($this->table, array('id' => $id))->row_array();
    }

    public function insert($data) {
        return $this->db->insert($this->table, $data);
    }

    public function update($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update($this->table, $data);
    }

    public function delete($id) {
        return $this->db->delete($this->table, array('id' => $id));
    }
}
