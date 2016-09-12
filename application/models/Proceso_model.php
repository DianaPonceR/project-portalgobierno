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
    
}