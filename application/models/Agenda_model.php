<?php
class Agenda_model extends CI_Model{


    public function Busca_Agenda(){
        $query = $this->db->get_where('grota_agenda_futura', array('ok' => 1));
        return $result = $query->result_array();
    }


    function lista_agendas(){
        $hasil=$this->db->get('grota_agenda_futura');
        return $hasil->result();
    }
 
    function save_product(){
        $data = array(
                'product_code'  => $this->input->post('product_code'), 
                'product_name'  => $this->input->post('product_name'), 
                'product_price' => $this->input->post('price'), 
            );
        $result=$this->db->insert('product',$data);
        return $result;
    }
 
    function update_product(){
        $product_code=$this->input->post('product_code');
        $product_name=$this->input->post('product_name');
        $product_price=$this->input->post('price');
 
        $this->db->set('product_name', $product_name);
        $this->db->set('product_price', $product_price);
        $this->db->where('product_code', $product_code);
        $result=$this->db->update('product');
        return $result;
    }
 
    function delete_product(){
        $product_code=$this->input->post('product_code');
        $this->db->where('product_code', $product_code);
        $result=$this->db->delete('product');
        return $result;
    }

    
}

?>