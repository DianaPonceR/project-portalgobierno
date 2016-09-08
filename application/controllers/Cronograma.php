<?php
class Cronograma extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('cronograma_lapse');
                $this->load->helper('url_helper');
        }

        public function dates()
        {
                $data['news_date'] = $this->cronograma_lapse->get_dates();

                $data['title'] = 'Periodos Creados';

                $this->load->view('templates/header', $data);
                $this->load->view('cronograma/dates', $data);
                $this->load->view('templates/footer');
        }

        public function createdate()
        {
            $this->load->helper('form');
            $this->load->library('form_validation');

            $data['title'] = 'Seleccione la fecha de inicio y la fecha final para la implementación del proceso';

            $this->form_validation->set_rules('date', 'Fecha Inicio', 'required');
            $this->form_validation->set_rules('datef', 'Fecha Final', 'required');

            if ($this->form_validation->run() === FALSE)
            {
                $this->load->view('templates/header', $data);
                $this->load->view('cronograma/createdate');
                $this->load->view('templates/footer');
            }
            else
            {
                $this->cronograma_lapse->set_newsdate();
                $this->load->view('cronograma/success');
            }
        }
}