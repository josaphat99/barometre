<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Don extends CI_Controller
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
     * Afficher la liste de tous les dons
    */
	public function index()
    {
        $don = $this->Crud->get_data_desc('don');

        foreach($don as $d)
        {
            $d->donneur = $this->Crud->get_data('person',['id'=>$d->donneur_id])[0]->nomcomplet;
            $d->groupe = $this->Crud->get_data('groupe',['id'=>$d->groupe_id])[0]->name;
            $d->produit_sanguin = $this->Crud->get_data('produit_sanguin',['id'=>$d->produit_sanguin_id])[0]->type;
        }

        $data['don'] = $don;

        $this->load->view('don/index',$data);
        $this->load->view('layout/admin/js');
    }
    
    /**
    * Enregistrer un nouveau don
    */
    public function new_don()
    {
        if(count($_POST) <= 0)
        {
            $d['groupe_sanguin'] = $this->Crud->get_data('groupe');
            $d['donneur'] = $this->Crud->get_data('person',['type'=>'donneur']);
            $d['produit_sanguin'] = $this->Crud->get_data('produit_sanguin');

            $this->load->view('don/new_don',$d);

            $this->load->view('layout/admin/js');
        }else{

            $donneur_id = $this->input->post('donneur_id');
            $groupe_id = $this->input->post('groupe_id');

            if($this->check_groupe($donneur_id,$groupe_id))
            {
                $data = array(
                    'date' => date('d-m-Y H:i',time()),
                    'donneur_id' => $donneur_id,
                    'groupe_id' => $groupe_id,
                    'produit_sanguin_id' => $this->input->post('produit_sanguin_id'),
                    'quantite' => $this->input->post('quantite'),                
                );
                
                //insertion du don
                $this->Crud->add_data('don',$data);
    
                $this->session->set_flashdata(['don_saved'=>true]);
                redirect('don/index');
            }else{
                $this->session->set_flashdata(['don_failed'=>true]);
                redirect('don/new_don');
            }            
        }
    }

    public function check_groupe($donneur_id,$groupe_id)
    {
        $donneur_groupe = $this->Crud->get_data('person',['id'=>$donneur_id]);

        if(count($donneur_groupe) >=1)
        {
            $donneur_groupe_id = $donneur_groupe[0]->groupe_id;
        }else{
            $donneur_groupe_id = null;
        }

        if($donneur_groupe_id == $groupe_id)
        {
            return true;
        }else{
            return false;
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
