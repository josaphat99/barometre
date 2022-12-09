<section class="content">
    <header class="content__title">
        <h1 class="animated"><b>Nouvel agent</b></h1>
    </header>

    <div class="card animated fadeIn" id="add_agent">
        <div class="card-body">
            <header class="content__title">
                <h1><b>Ajouter un nouvel agent</b></h1>
            </header>            
            <form class="row" action="<?=site_url('compte/new_agent')?>" method="post">
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
                        <input type="text" class="form-control" name="username" required>
                        <label>User name</label>
                        <i class="form-group__bar"></i>
                    </div>

                    <div class="form-group form-group--float">                        
                        <input type="password" class="form-control" name="password" required>
                        <label>Password</label>
                        <i class="form-group__bar"></i>
                    </div>                
                    
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <p id="error_connexion" class="text-red animated fadeInUp" hidden>Please give all the informations needed!!</p>
                            <button class="btn btn-outline-primary btn-lg" style="border-radius:5px;" id="submit" type="submit">Ajouter</button>
                        </div>  
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>