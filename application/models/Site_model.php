<?php

class Site_model extends CI_Model
{

    function getAll()
    {
        $q = $this->db->get('test');

        if ($q->num_rows() > 0) {
            foreach ($q->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }

    function get_records()
    {
        $query = $this->db->get('data');
        return $query->results();
    }

    function add_record ($data)
    {
        $this->db->insert('data', $data);
        return;
    }

    function update_record($data)
    {
        $this->db->where('id', 2);
        $this->update('data', $data);
    }

    function delete_record()
    {
        $this->db->where('id', $this->uri->segment(3));
        $this->delete('data');
    }
}