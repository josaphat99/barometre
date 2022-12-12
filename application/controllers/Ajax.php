<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {

	
	public function produit_sanguin()
	{
		$this->load->model("Crud");

        $produit_id = $this->input->post('produit_id');

        $groupe = $this->quantite_groupe($produit_id);

        $html = '';
        $color = 'rgba(255,0,0,0.6)';
        
        foreach($groupe as $g)
        {
            if($g->quantite_percent < 2)
            {
                $g->quantite_percent = 2;
                $color = 'rgba(255,0,0,0.6)';
            }
            if($g->quantite_percent < 30)
            {
                $color = 'rgba(255,0,0,0.6)';
            }elseif($g->quantite_percent < 60){                
                $color = 'rgba(0,255,0,0.5)';
            }else{
                $color = 'rgba(0,0,255,0.5)';
            }
         
            $html .= '<div class="col-md-6 animated fadeIn">
                            
                    <a href="#" class="listview__item">
                        <div class="listview__content">
                            <div class="listview__heading mb-2">'.$g->name.'</div>

                            <div class="progress">
                                <div class="progress-bar" style="background-color:'.$color.';width: '.$g->quantite_percent.'%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="text-dark">'.$g->etat.'</span>
                        </div>
                    </a>                   
                </div>';
        }

        echo $html;
	}

    private function quantite_groupe($produit_id)
    {
        $this->load->model("Crud");

        $groupe = $this->Crud->get_data('groupe');

        foreach($groupe as $g)
        {
            $don = $this->Crud->get_data('don',['groupe_id'=>$g->id,'produit_sanguin_id'=>$produit_id]);
            $trans = $this->Crud->get_data('transfusion',['groupe_id'=>$g->id,'produit_sanguin_id'=>$produit_id]);

            if(count($don) >= 1)
            {
               $quantite_don = 0;
                
                foreach ($don as $d)
                {
                    $quantite_don = $quantite_don + $d->quantite;
                }
            }else{
                $quantite_don = 0;
            }

            if(count($trans) >= 1)
            {
                $quantite_trans = 0;
                
                foreach ($trans as $t)
                {
                    $quantite_trans = $quantite_trans + $t->quantite;
                }
            }else{
                $quantite_trans = 0;
            }

            $g->quantite = $quantite_don - $quantite_trans;
            $g->quantite_percent = ($g->quantite * 100) / 500;

            if($g->quantite_percent > 60){
                $g->etat = 'Disponible';
            }else if($g->quantite_percent >= 30)
            {
                $g->etat = 'Suffisant';
            }else{
                $g->etat = 'Critique';
            }
        }

        return $groupe;
    }
}
