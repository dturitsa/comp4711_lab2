<?php
class Images extends CI_Model {
    function _construct()
    {
        parent::_construct();
    }

    function all()
    {
        $this->db->order_by('id', 'desc');
        $query = $this->db->get('images');
        return $query->result_array();
    }
}