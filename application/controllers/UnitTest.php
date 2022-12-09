<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UnitTest extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();

		//======================================================
		$this->load->model('Crud');
	}   

    public function unitTest()
    {        
        //Chargement de la librairie des  tests
        $this->load->library('unit_test');

        //Test de la fonction de recuperation des donnees
        $data = $this->Crud->get_data('don');        
        echo $this->unit->run(count($data),'is_int');

        //Test de la fonction get_donneur_group
        $groupe = $this->Cud->get_donneur_group(1);
        echo $this->unit->run($groupe, 'is_string');        
    }
}
