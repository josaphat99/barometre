<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transfusion extends CI_Controller
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
        //==========================================================
        $this->load->view('layout/admin/head');
        $this->load->view('layout/admin/sidebar');
        $this->load->view('layout/admin/topbar');
    }

    /**
     * Afficher la liste de toutes les transfusion
    */
	public function index()
    {
        $trans = $this->Crud->get_data_desc('transfusion');

        foreach($trans as $t)
        {
            $t->donneur = $this->Crud->get_data('person',['id'=>$t->person_id])[0]->nomcomplet;
            $t->groupe = $this->Crud->get_data('groupe',['id'=>$t->groupe_id])[0]->name;
            $t->produit_sanguin = $this->Crud->get_data('produit_sanguin',['id'=>$t->produit_sanguin_id])[0]->type;
        }

        $data['transfusion'] = $trans;

        $this->load->view('transfusion/index',$data);
        $this->load->view('layout/admin/js');
    }
    
    /**
    * Enregistrer un nouveau don
    */
    public function new_transfusion()
    {
        if(count($_POST) <= 0)
        {
            $d['groupe_sanguin'] = $this->Crud->get_data('groupe');
            $d['beneficiaire'] = $this->Crud->get_data('person',['type'=>'beneficiaire']);
            $d['produit_sanguin'] = $this->Crud->get_data('produit_sanguin');

            $this->load->view('transfusion/new_transfusion',$d);

            $this->load->view('layout/admin/js');
        }else{

            $this->db->trans_start();

            $data = array(
                'date' => date('d-m-Y H:i',time()),
                'person_id' => $this->input->post('beneficiaire_id'),
                'groupe_id' => $this->input->post('groupe_id'),
                'produit_sanguin_id' => $this->input->post('produit_sanguin_id'),
                'quantite' => $this->input->post('quantite'),                
            );
            
            //insertion de la transfusion
            $this->Crud->add_data('transfusion',$data);

            //===--Fin transition--===
			$this->db->trans_commit();

            $this->session->set_flashdata(['transfusion_saved'=>true]);
            redirect('transfusion/index');
        }
    }

    public function delete_don()
    {
        $don_id = $this->input->post('don_id');

        $this->Crud->delete_data('don',['id'=>$don_id]);

        $this->session->set_flashdata(['don_deleted'=>true]);
        redirect('don/index');
    }
}
