<?php
class News_model extends CI_Model {

    private $table = 'gso.news'; // Specify the schema and table name

        public function __construct()
        {
                $this->load->database();
        }
        public function get_news($slug = FALSE)
        {
                if ($slug === FALSE)
                {
                        $query = $this->db->get('gso.news');
                        return $query->result_array();
                }

                $query = $this->db->get_where('gso.news', array('slug' => $slug));
                return $query->row_array();
        }
        public function set_news()
        {
        $this->load->helper('url');

        $slug = url_title($this->input->post('title'), 'dash', TRUE);

        $data = array(
                'title' => $this->input->post('title'),
                'slug' => $slug,
                'text' => $this->input->post('text')
        );

        return $this->db->insert('gso.news', $data);
        }
}