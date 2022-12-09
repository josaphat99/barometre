<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProduitSanguin extends CI_Controller
{	
	public function __construct()
	{
		parent::__construct();

		if(!$this->session->connected || $this->session->type != 'agent')
		{
			redirect('compte');
		}

		//======================================================
		$this->load->model('Crud');
		//======================================================
		$this->load->view('layout/admin/head');
        $this->load->view('layout/admin/sidebar');
        $this->load->view('layout/admin/topbar');
	}  

    public function index()
    {
        $produit_sanguin = $this->Crud->get_data('produit_sanguin');
        $groupe = $this->Crud->get_data('groupe');

        $data['produit_sanguin'] = $produit_sanguin;
        $data['groupe'] = $groupe;

        $this->load->view('produitSanguin/index',$data);
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
}
