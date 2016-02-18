<?php

class Login extends CI_Controller
{
    function index()
    {
        $data['main_content'] = 'login_form';
        $this->load->view('includes/template', $data);
    }

    function validate_credentials()
    {
        $this->load->model('member_model');
        $query = $this->member_model->validate();

        if ($query) // if user cred validate the user session start
        {
            $data = array(
                'username' => $query->username,
                'password' => $query->password,
                'first_name'=>$query->first_name,
        'is_logged_in' => true
    );

    $this->session->set_userdata($data);

    redirect('members/members_area');
 } else {
            $this->index();
            echo 'Incorrect Password or Username';
        }
    }

    function signup()
    {
        $data['main_content'] = 'signup_form';
        $this->load->view('includes/template', $data);
    }

    function create_member()
    {
        $this->load->library('form_validation');
        // field name, error message, validation rules

        $this->form_validation->set_rules('first_name', 'Name', 'trim|required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
        $this->form_validation->set_rules('email_address', 'Email Address', 'trim|required|valid_email');

        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
        $this->form_validation->set_rules('password2', 'Password Confirmation', 'trim|required|matches[password]');

        if ($this->form_validation->run() == FALSE) {
//            $this->signup();
            $this->load->view('signup_form');
        } else {
            $this->load->model('member_model');

            if ($query = $this->member_model->create_member()) {
                $data['main_content'] = 'signup_successfull';
                $this->load->view('includes/template', $data);
            } else {
                $this->load->view('signup_form');
            }
        }
    }

    function logout()
    {
        $this->session->sess_destroy();
        $this->index();
    }

}