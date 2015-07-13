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
    
    function getuserbyid($id)
    {
        $this->load->database();
        $sql="select * from usermaster where id=?";
        $q=$this->db->query($sql,array($id));
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