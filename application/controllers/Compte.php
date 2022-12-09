<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Compte extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();

		// if(!$this->session->connected)
		// {
		// 	redirect('sign');
		// }
		//======================================================
		$this->load->model('Crud');
		//======================================================
		$this->load->view('layout/admin/head');
		

	}

    public function index()
    {
      $this->login();
    }

    public function login()
    {
        if(count($_POST)<=0)
        {
            $this->session->sess_destroy();

            $this->load->view('compte/login');
            $this->load->view('layout/admin/js');
        }else{

            $data = array(
                "username" => strtolower(trim($this->input->post("username"))),
                "password" => trim($this->input->post("password"))
            );

            $res = $this->Crud->get_data('compte',$data);
    
            if(count($res) > 0)
            {
                $nomcomplet = $this->Crud->get_data('person',['id'=>$res[0]->person_id])[0]->nomcomplet;
                $email = $this->Crud->get_data('person',['id'=>$res[0]->person_id])[0]->email;

                //creation de la session
                $session = [
                    "id"=>$res[0]->id,                    
                    "username"=>$res[0]->username,
                    "nomcomplet"=>$nomcomplet,
                    "type"=>$res[0]->type,
                    "email"=>$email,
                    "connected"=>true,                    
                ];
    
                $this->session->set_userdata($session);
    
                //gestion des interfaces selon les differents utilisateurs
                if(trim($res[0]->type) == trim("agent"))
                {
                    redirect('person/donneur');                    
                }               
                else if(trim($res[0]->type) == trim("admin"))
                {
                    redirect('compte/manage'); 
                }
                else{				
                    $login_error = array("error_login" => "The username or the password is wrong!! Retry please");
                    $this->session->set_flashdata($login_error);
                    redirect('compte'); 
                }
            }
            else{
                $login_error = array("error_login" => "The username or the password is wrong!! Retry please");
                $this->session->set_flashdata($login_error);
                redirect("compte");
            }
        }
        
    }

    public function manage()
    {
        $this->load->view('layout/admin/sidebar');
        $this->load->view('layout/admin/topbar');

        $agent = $this->Crud->get_data('compte',['type'=>'agent']);

        foreach($agent as $a)
        {
            $person = $this->Crud->get_data('person',['id'=>$a->person_id])[0];

            $a->nomcomplet = $person->nomcomplet;
            $a->adresse = $person->adresse;
            $a->phone = $person->phone;
            $a->person_id =$person->id;
        }

        $d['agent'] = $agent;

        $this->load->view('compte/manage',$d);
        $this->load->view('layout/admin/js');
    }

    public function new_agent()
    {
        if(count($_POST) <= 0)
        {
            $this->load->view('layout/admin/sidebar');
            $this->load->view('layout/admin/topbar');

            $this->load->view('compte/new_agent');

            $this->load->view('layout/admin/js');
        }else{

            $this->db->trans_start();

            $person_data = array(
                'nomcomplet' => $this->input->post('nomcomplet'),
                'adresse' => $this->input->post('adresse'),
                'phone' => $this->input->post('phone'),
                'email' => $this->input->post('email'),
                'genre' => $this->input->post('genre'),
            );
            
            //insertion de la personne
            $this->Crud->add_data('person',$person_data);

            //recuperation de son id
            $person_id = $this->Crud->get_data_desc('person')[0]->id;

            //creation du compte
            $account_data = array(
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                'type' => 'agent',
                'person_id' => $person_id
            );

            
            $this->Crud->add_data('compte',$account_data);

            //===--Fin transition--===
			$this->db->trans_commit();

            $this->session->set_flashdata(['agent_saved'=>true]);
            redirect('compte/manage');
        }
    }

    public function delete_agent()
    {
        $agent_person_id = $this->input->post('agent_person_id');
        $agent_account_id = $this->input->post('agent_account_id');

        $this->Crud->delete_data('person',['id'=>$agent_person_id]);
        $this->Crud->delete_data('compte',['id'=>$agent_account_id]);

        $this->session->set_flashdata(['agent_deleted'=>true]);
        redirect('compte/manage');
    }

    public function logout(){
        $this->session->sess_destroy();
		redirect("compte");
    }
}
