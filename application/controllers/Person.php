<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Person extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();

		if(!$this->session->connected)
		{
			redirect('compte');
		}

		//======================================================
		$this->load->model('Crud');
		//======================================================
		$this->load->view('layout/admin/head');       
	}  

    public function donneur()
    {
        $this->load->view('layout/admin/sidebar');
        $this->load->view('layout/admin/topbar');

        $donneur = $this->Crud->get_data('person',['type'=>'donneur']);
        
        foreach($donneur as $d)
        {
            $d->groupe = $this->Crud->get_data('groupe',['id'=>$d->groupe_id])[0]->name;
        }

        $data['donneur'] = $donneur;

        $this->load->view('donneur/index',$data);
        $this->load->view('layout/admin/js');
    }

    public function new_donneur()
    {
        if(count($_POST) <= 0)
        {
            $this->load->view('layout/admin/sidebar');
            $this->load->view('layout/admin/topbar');

            $d['groupe_sanguin'] = $this->Crud->get_data('groupe');

            $this->load->view('donneur/new_donneur',$d);

            $this->load->view('layout/admin/js');
        }else{

            $this->db->trans_start();

            $data = array(
                'nomcomplet' => $this->input->post('nomcomplet'),
                'adresse' => $this->input->post('adresse'),
                'phone' => $this->input->post('phone'),
                'email' => $this->input->post('email'),
                'genre' => $this->input->post('genre'),
                'weight' => $this->input->post('weight'),
                'date_naissence' => $this->input->post('date_naissence'),
                'groupe_id' => $this->input->post('groupe_sanguin'),
                'type' => 'donneur'
            );
            
            //insertion de la personne
            $this->Crud->add_data('person',$data);

            //===--Fin transition--===
			$this->db->trans_commit();

            $this->session->set_flashdata(['donneur_saved'=>true]);
            redirect('person/donneur');
        }
    }

    public function delete_donneur()
    {
        $donneur_id = $this->input->post('donneur_id');

        $this->Crud->delete_data('person',['id'=>$donneur_id]);

        $this->session->set_flashdata(['donneur_deleted'=>true]);
        redirect('person/donneur');
    }   

    //======Beneficiaire===============

    public function beneficiaire()
    {
        $this->load->view('layout/admin/sidebar');
        $this->load->view('layout/admin/topbar');

        $benef = $this->Crud->get_data('person',['type'=>'beneficiaire']);
        
        foreach($benef as $b)
        {
            $b->groupe = $this->Crud->get_data('groupe',['id'=>$b->groupe_id])[0]->name;
        }

        $data['benef'] = $benef;

        $this->load->view('beneficiaire/index',$data);
        $this->load->view('layout/admin/js');
    }

    public function new_benef()
    {
        if(count($_POST) <= 0)
        {
            $this->load->view('layout/admin/sidebar');
            $this->load->view('layout/admin/topbar');

            $d['groupe_sanguin'] = $this->Crud->get_data('groupe');

            $this->load->view('beneficiaire/new_benef',$d);

            $this->load->view('layout/admin/js');
        }else{

            $this->db->trans_start();

            $data = array(
                'nomcomplet' => $this->input->post('nomcomplet'),
                'adresse' => $this->input->post('adresse'),
                'phone' => $this->input->post('phone'),
                'email' => $this->input->post('email'),
                'genre' => $this->input->post('genre'),
                'weight' => $this->input->post('weight'),
                'date_naissence' => $this->input->post('date_naissence'),
                'groupe_id' => $this->input->post('groupe_sanguin'),
                'type' => 'beneficiaire'
            );
            
            //insertion de la personne
            $this->Crud->add_data('person',$data);

            //===--Fin transition--===
			$this->db->trans_commit();

            $this->session->set_flashdata(['beneficiaire_saved'=>true]);
            redirect('person/beneficiaire');
        }
    }

    public function delete_benef()
    {
        $benef_id = $this->input->post('benef_id');

        $this->Crud->delete_data('person',['id'=>$benef_id]);

        $this->session->set_flashdata(['beneficiaire_deleted'=>true]);
        redirect('person/beneficiaire');
    }   
}
