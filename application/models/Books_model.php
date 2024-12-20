<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Book_model extends CI_Model
{
    private $table = 'gso.books';

    public function get_all_books()
    {
        return $this->db->get($this->table)->result_array();
    }

    public function get_book($id)
    {
        return $this->db->get_where($this->table, ['id' => $id])->row_array();
    }

    public function insert_book($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function update_book($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update($this->table, $data);
    }

    public function delete_book($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete($this->table);
    }
}
