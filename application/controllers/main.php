<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller
{
    function index()
    {
        $this->load->model('user');
        $data['hello']=$this->user->allUser();
         $data['getallUser']=$this->user->fetchallUser();
        $data['userfetch']=$this->user->getuserbyid(2);
        $this->load->view('hello',$data);
        
       
        
       
    }
}

?>