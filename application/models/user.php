<?php

class User extends CI_Model
{
    function allUser()
    {
        return "Hello";
    }
    
    function fetchallUser()
    {
        $this->load->database();
        $sql="select * from usermaster";
        $q=$this->db->query($sql);
        if($q->num_rows()>0)
        {
            return $q->result();
        }
        else
        {
            return false;
        }
    }
}

?>