<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agenda extends MY_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('agenda_model', 'agm');

    }

    public function index(){
        $data['agenda'] = $this->agm->Busca_Prontos();
        $data['view'] = 'agenda/index';
        $this->load->view('admin/layout', $data);
    }

    public function pendencias(){
        $data['agenda'] = $this->agm->Busca_Agenda();
        $data['view'] = 'agenda/pendencias';
        $this->load->view('admin/layout', $data);
    }

    public function editcontrato($id){
        $data['dadoscli'] = $this->agm->Edit_Cliente($id);
        $data['view'] = 'agenda/editar_contrato';
        $this->load->view('admin/layout', $data);
    }

    public function salvarcontrato($id=null){
        if (isset($id)){
//            var_dump($this->input->post());
            $this->agm->Salvar_Contrato($id);
            redirect("agenda/editcontrato/$id");
        }
    }

 

}

?>