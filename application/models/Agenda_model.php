<?php
class Agenda_model extends CI_Model{


    function Busca_Agenda(){
        $hasil=$this->db->get('grota_agenda_futura');
        return $hasil->result_array();
    }

    function Busca_Prontos(){
        $query = $this->db->get_where('grota_agenda_futura', array('ok' => 1));
        return $result = $query->result_array();
    }

    function Edit_Cliente($id){
        $query = $this->db->get_where('grota_agenda_futura', array('id' => "$id"));
        return $result = $query->result_array();
    }

    function Salvar_Contrato($id=null){
        if (isset($id)){
            $dados = array(
                'nome_cliente' => $this->input->post('nome_cliente'),
                'telefone' => $this->input->post('telefone1'),
                'celular' => $this->input->post('telefone2'),
                'ok' => $this->input->post('iniciarenvio'),
            );
            $this->db->where('id', $this->input->post('id'));
            $result = $this->db->update('grota_agenda_futura', $dados);
            return $result;
        }
    }

    
}

?>