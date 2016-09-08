<?php
class Proceso extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('proceso_model');
                $this->load->helper('url_helper');
        }


        public function createproceso()
        {
            $this->load->helper('form');
            $this->load->library('form_validation');

            $data['title'] = 'Llene el siguiente formulario';

            $this->form_validation->set_rules('date', 'Fecha Inicio', 'required');
            $this->form_validation->set_rules('datef', 'Fecha Final', 'required');

            if ($this->form_validation->run() === FALSE)
            {
                $this->load->view('templates/header', $data);
                $this->load->view('proceso/createdate');
                $this->load->view('templates/footer');
            }
            else
            {
                $this->cronograma_lapse->set_newsdate();
                $this->load->view('proceso/success');
            }
        }
}