<?php
    if(($this->session->don_failed))
    {
?>
        <script>
            Swal.fire({            
            icon: 'warning',
            title: 'Le groupe selectioné ne correspond pas à celui du donneur selectioné',
            showConfirmButton: true,
            timer: 30000
            })
        </script>
<?php
    }
?>
<section class="content">
    <header class="content__title">
        <h1 class="animated"><b>Nouveau don</b></h1>
    </header>

    <div class="card animated fadeIn" id="add_agent">
        <div class="card-body">
            <header class="content__title">
                <h1><b>Ajouter un nouveau don</b></h1>
            </header>            
            <form class="row" action="<?=site_url('don/new_don')?>" method="post">
                <div class="col-md-6 offset-md-3">
                    <div class="form-group form-group--float">
                        <label style="margin-top:-9px">Donneur</label>
                        <div class="select">
                            <select class="form-control" name="donneur_id" id="donneur" required>
                                <option value=""></option> 
                                <?php
                                    foreach($donneur as $d)
                                    {
                                ?>
                                    <option value="<?=$d->id?>"><?=$d->nomcomplet?></option>
                                <?php
                                    }
                                ?> 
                            </select>
                            <i class="form-group__bar"></i>
                        </div>            
                        <i class="form-group__bar"></i>
                    </div>                    
                    
                    <div class="form-group form-group--float">
                        <label style="margin-top:-9px">Produit sanguin</label>
                        <div class="select">
                            <select class="form-control" name="produit_sanguin_id" id="groupe_saguin" required>
                                <option value=""></option> 
                                <?php
                                    foreach($produit_sanguin as $p)
                                    {
                                ?>
                                    <option value="<?=$p->id?>"><?=$p->type?></option>
                                <?php
                                    }
                                ?>
                            </select>
                            <i class="form-group__bar"></i>
                        </div>            
                        <i class="form-group__bar"></i>
                    </div> 

                    <div class="form-group form-group--float">
                        <label style="margin-top:-9px">Groupe sanguin</label>
                        <div class="select">
                            <select class="form-control" name="groupe_id" id="groupe_saguin" required>
                                <option value=""></option> 
                                <?php
                                    foreach($groupe_sanguin as $g)
                                    {
                                ?>
                                    <option value="<?=$g->id?>"><?=$g->name?></option>
                                <?php
                                    }
                                ?>
                            </select>
                            <i class="form-group__bar"></i>
                        </div>            
                        <i class="form-group__bar"></i>
                    </div> 

                    <div class="form-group form-group--float">
                        <div class="input-group">                            
                            <input type="number" class="form-control" name="quantite" id="quantite" placeholder="Quantite" required>                                             
                            <div class="input-group-append">
                                <span class="input-group-text">Litres</span>                               
                            </div>
                        </div>
                        <i class="form-group__bar"></i>
                    </div>                               
                    
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <p id="error_connexion" class="text-red animated fadeInUp" hidden>Veuillez remplir tous les champs svp!</p>
                            <button class="btn btn-outline-danger btn-lg" style="border-radius:5px;" id="submit" type="submit">Ajouter</button>
                        </div>  
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>