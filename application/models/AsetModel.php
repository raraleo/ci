<?php 
    class asetmodel extends CI_Model{
            private $table = 'tabel_aset';

            public function getAll(){
                return $this->db->get($this->table)->result();
            }
    }
?>