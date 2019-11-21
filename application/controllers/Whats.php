<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Whats extends MY_Controller {
    public function __construct(){
        parent::__construct();

    }

    public function index(){
        $data['view'] = '';
        $this->load->view('admin/layout', $data);
    }

    public function lc(){
        $data['view'] = 'whats/lercodigo';
        $this->load->view('admin/layout', $data);
    }
}

?>