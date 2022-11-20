<?php 
    class aset extends CI_Controller {
        public function __construct(){
            parent::__construct();
            $this->load->model("AsetModel");
        }
        
        public function tampilkan(){
            $data['aset'] = $this->AsetModel->getAll();
            $this->load->view("aset/v_aset", $data);
        }

        public function tambah(){
            $this->load->view('aset/v_tambah');
        }

        public function simpanTambah(){
            $this->load->view();
        }
    }
?>