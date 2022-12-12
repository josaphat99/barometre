<section class="content">
    <header class="content__title">
        <h1 class="animated"><b>Nouveau Beneficiaire</b></h1>
    </header>

    <div class="card animated fadeIn">
        <div class="card-body">
            <header class="content__title">
                <h1><b>Ajouter un nouveau beneficiaire du sang</b></h1>
            </header>            
            <form class="row" action="<?=site_url('person/new_benef')?>" method="post">
                <div class="col-md-6 offset-md-3">
                    <div class="form-group form-group--float">                        
                        <input type="text" class="form-control" name="nomcomplet" required>
                        <label>Nom complet</label>
                        <i class="form-group__bar"></i>
                    </div>    

                    <div class="form-group form-group--float">                        
                        <input type="text" class="form-control" name="adresse" required>
                        <label>Adresse</label>
                        <i class="form-group__bar"></i>
                    </div> 

                    <div class="form-group form-group--float">                        
                        <input type="email" class="form-control" name="email">
                        <label>Email</label>
                        <i class="form-group__bar"></i>
                    </div>

                    <div class="form-group form-group--float">                        
                        <input type="text" class="form-control" name="phone" required>
                        <label>Phone number</label>
                        <i class="form-group__bar"></i>
                    </div>

                    <div class="form-group form-group--float">
                        <label style="margin-top:-9px">Gender</label>
                        <div class="select">
                            <select class="form-control" name="genre" id="genre" required>
                                <option value=""></option> 
                                <option value="Male">Male</option>   
                                <option value="Female">Female</option>   
                            </select>
                            <i class="form-group__bar"></i>
                        </div>            
                        <i class="form-group__bar"></i>
                    </div> 

                    <div class="form-group form-group--float">
                        <label style="margin-top:-9px">Groupe sanguin</label>
                        <div class="select">
                            <select class="form-control" name="groupe_sanguin" id="groupe_saguin" required>
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
                            <input type="number" class="form-control" name="weight" id="weight" placeholder="Masse" required>                                             
                            <div class="input-group-append">
                                <span class="input-group-text">Kg</span>                               
                            </div>
                        </div>
                        <i class="form-group__bar"></i>
                    </div>

                    <div class="form-group form-group--float"> 
                        <span>Date de naissence</span>                       
                        <input type="date" class="form-control" name="date_naissence" required>
                        
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