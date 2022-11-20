<?php 
    class kelasmodel extends CI_Model{
            private $table = 'tabel_210106002';

            public function getAll(){
                return $this->db->get($this->table)->result();
            }
    }
?>