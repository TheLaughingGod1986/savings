<?php
Class Data_model extends CI_Model {

//    function getAll() {
//        $q = $this->db->query("SELECT * FROM data");
//        if ($q->num_rows() > 0) {
//            foreach($q->result() as $row) {
//                $data[] = $row;
//            }
//            return $data;
//        }
//    }

function getAll() {
    $q = $this->db->get('data');

    if($q->num_rows() > 0) {
        foreach ($q->results as $row) {
            $data[] = $row;
        }
        return $data;

        }
    }
}
