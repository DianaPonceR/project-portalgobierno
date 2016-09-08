<?php
class Cronograma_lapse extends CI_Model {

    public function __construct()
    {
        $this->load->database();
	}

	public function get_dates()
    {
        $query = $this->db->get('cronograma');
        return $query->result_array();

    }


    public function set_newsdate()
    {
        $this->load->helper('url');

        $slug = url_title($this->input->post('title'), 'dash', TRUE);

        $data = array(
            'fecha_inicio' => $this->input->post('date'),
            'fecha_fin' => $this->input->post('datef')
        );

        return $this->db->insert('cronograma', $data);
    }
}