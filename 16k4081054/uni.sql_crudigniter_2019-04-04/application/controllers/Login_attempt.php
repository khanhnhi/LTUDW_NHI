<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Login_attempt extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Login_attempt_model');
    } 

    /*
     * Listing of login_attempts
     */
    function index()
    {
        $data['login_attempts'] = $this->Login_attempt_model->get_all_login_attempts();
        
        $data['_view'] = 'login_attempt/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new login_attempt
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'ip_address' => $this->input->post('ip_address'),
				'login' => $this->input->post('login'),
				'time' => $this->input->post('time'),
            );
            
            $login_attempt_id = $this->Login_attempt_model->add_login_attempt($params);
            redirect('login_attempt/index');
        }
        else
        {            
            $data['_view'] = 'login_attempt/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a login_attempt
     */
    function edit($id)
    {   
        // check if the login_attempt exists before trying to edit it
        $data['login_attempt'] = $this->Login_attempt_model->get_login_attempt($id);
        
        if(isset($data['login_attempt']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'ip_address' => $this->input->post('ip_address'),
					'login' => $this->input->post('login'),
					'time' => $this->input->post('time'),
                );

                $this->Login_attempt_model->update_login_attempt($id,$params);            
                redirect('login_attempt/index');
            }
            else
            {
                $data['_view'] = 'login_attempt/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The login_attempt you are trying to edit does not exist.');
    } 

    /*
     * Deleting login_attempt
     */
    function remove($id)
    {
        $login_attempt = $this->Login_attempt_model->get_login_attempt($id);

        // check if the login_attempt exists before trying to delete it
        if(isset($login_attempt['id']))
        {
            $this->Login_attempt_model->delete_login_attempt($id);
            redirect('login_attempt/index');
        }
        else
            show_error('The login_attempt you are trying to delete does not exist.');
    }
    
}
