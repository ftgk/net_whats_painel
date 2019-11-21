<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agenda extends MY_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('agenda_model', 'agm');

    }

    public function index(){
        $data['agenda'] = $this->agm->Busca_Agenda();
        $data['view'] = 'agenda/index';
        $this->load->view('admin/layout', $data);
    }

    public function pendencias(){
        $data['agenda'] = $this->agm->Busca_Agenda();
        $data['view'] = 'agenda/pendencias';
        $this->load->view('admin/layout', $data);
    }

    function agendap_data(){
        $data=$this->agm->lista_agendas();
        echo json_encode($data);
    }
 
    function agendap_save(){
        $data=$this->agm->save_product();
        echo json_encode($data);
    }
 
    function agendap_update(){
        $data=$this->agm->update_product();
        echo json_encode($data);
    }
 
    function agendap_delete(){
        $data=$this->agm->delete_product();
        echo json_encode($data);
    }
 

}

?>