<?php

Class Email extends CI_Controller
{
    function __construct()
    {
        parent::Controller();
    }

    function index()
    {
        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' =>'ssl://smtp.goglemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'benoats@gmail.com',
            'smpt_pass' => 'Playmouth.09'
        );

        $this->load->library('email', $config);

        $this->email->set_newline("\r\n");

        $this->email->from('benoats@gmail.com', 'ben oats');
        $this->email->to('benoats@gmail.com');
        $this->email->subject('this is a test');
        $this->email->message('working');

        if($this->email->send())
        {
            echo "success";
        }

        else {
            show_error($this->email->print_debugger());
        }
    }
}