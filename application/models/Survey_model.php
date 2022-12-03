<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Survey_model extends MY_Model
{
    public function lists()
    {
        // $this->db->select('hostel_rooms.*,b.hostel_name,c.room_type');
        // $this->db->from('hostel_rooms');
        // $this->db->join('hostel b', 'b.id=hostel_rooms.hostel_id');
        // $this->db->join('room_types c', 'c.id=hostel_rooms.room_type_id');

        $query = $this->db->get('instanthire');

        // $listroomtype = $this->db->get();
        return $query->result_array();
    }

    public function add_survey($table,$data,$data1)
    {
           $this->db->insert($table,$data);
           // print_r($this->db->last_query());exit;
           $insert_id = $this->db->insert_id();
           // echo $insert_id;exit;
           $daata1 = (implode(',',$data1));

        $sql = "insert into survey_assign (survey_id, assign_to) values ('$insert_id', '$daata1')";
        $this->db->query($sql);
        // print_r($this->db->last_query());exit;
           return true;
    }

 }
 ?>