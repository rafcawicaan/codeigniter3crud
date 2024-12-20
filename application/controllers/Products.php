<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->           model('Product_model');
        $this->load->           helper('url');
    }

    public function index() {
        // dd('products here');
        $data['products'] = $this->Product_model->get_all();
        $this->load->view('products/index', $data);
    }

    public function create() {
        $this->load->view('products/create');
    }

    public function store() {
        $data = array(
            'name' =>               $this->input->post('name'),
            'description' =>        $this->input->post('description'),
            'price' =>              $this->input->post('price')
        );
        $this->Product_model->insert($data);
        // print_r($data);
        var_dump($data);
        redirect('products/index');
    }

    public function edit($id) {
        $data['product'] =          $this->Product_model->get_by_id($id);
        $this->load->view('products/edit', $data);
    }

    public function update($id) {
        $data = array(
            'name' =>               $this->input->post('name'),
            'description' =>        $this->input->post('description'),
            'price' =>              $this->input->post('price')
        );
        $this->Product_model->update($id, $data);
        // print_r($data);
        var_dump($data);
        redirect('products/index');
    }

    public function delete($id) {
        $this->Product_model->delete($id);
        redirect('products/index');
    }
}
