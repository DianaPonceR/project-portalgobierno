<?php
class Proceso_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
	}

    public function get_reglas_proceso() {
        $query = $this->db->get('proceso');
        return $query->result_array();
    }

    public function set_reglas() {
        $this->load->helper('url');

        $data['cumplido'] = $this->input->post('opcion');
        $data['descripcion'] = $this->input->post('descripcion');

        #$data = array('cumplido','descripcion');
        

        return $this->db->insert('proceso', $data);
    }
    
}