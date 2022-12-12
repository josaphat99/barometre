<style>
    th{
        text-align: center;
    }

    /* div.progress-bar{
        background-color: rgba(255,0,0,0.5);
    } */
</style>

<?php
    if(($this->session->produit_sanguin_saved))
    {
?>
        <script>
            Swal.fire({            
            icon: 'success',
            title: 'Produit sanguin ajouté',
            showConfirmButton: false,
            timer: 3000
            })
        </script>
<?php
    }
    if(($this->session->produit_sanguin_deleted))
    {
?>
        <script>
            Swal.fire({            
            icon: 'success',
            title: 'Produit sanguin Supprimé',
            showConfirmButton: false,
            timer: 3000
            })
        </script>
<?php
    }
?>

<section class="content">
    <header class="content__title">
        <h1 class="animated"><b>Produits sanguins</b></h1>
    </header>

    <div class="card animated zoomIn">
        <div class="card-body">
            <header class="content__title">
                <div class="row">
                    <div class="col-md-6">
                    </div>
                    <!-- <div class="col-md-3 offset-md-3">
                        <a href="<site_url('produitSanguin/new_produit')?>" class="btn btn-outline-dark"><i class="zmdi zmdi-plus zmdi-hc-fw"></i> Nouveau Produit sanguin</a>
                    </div> -->
                </div>
            </header>
            <div class="table-responsive">
                <table id="data-table" class="table  table-borderd table-striped table-hover">
                    <thead class="thead-default alert alert-danger text-white">
                        <tr>
                            <th style="width: 20px;">No</th>
                            <th>Produit</th>                         
                            <th>Symbole</th>
                            <th>Duree conservation</th>
                            <!-- <th style="width: 180px;">Actions</th> -->
                        </tr>
                    </thead>                    
                    <tbody id="t-body">
                        <?php
                            $num = 0;
                            foreach($produit_sanguin as $p)
                            { 
                                $num++;
                            ?> 
                                <tr>
                                <td style="text-align: center;"><?=$num?></td> 
                                    <td style="text-align: center;"><?=$p->type?></td>                  
                                    <td style="text-align: center;"><?=$p->symbol?></td>
                                    <td style="text-align: center;"><?=$p->duree?></td>
                                    <!-- <td>
                                        <button class="btn btn-light btn--raised"><i class="zmdi zmdi-edit zmdi-hc-fw"></i></button>
                                        <form id="form-delete" onclick='javascript:confirmation($(this));return false;'action="<site_url("produitSanguin/delete_produit_sanguin")?>" method="post" style="float:right;">                                
                                            <input type="hidden" value="<=$p->id?>" name="produit_sanguin_id">
                                            <button id="delete" class="btn btn-light btn--raised" title="Delete">
                                                <i class="zmdi zmdi-delete zmdi-hc-fw"></i>
                                            </button>
                                        </form>                                                                                 
                                    </td> -->
                                </tr>
                        <?php
                            }
                        ?>                                                          
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="card animated zoomIn">
        <div class="card-body">
            <header class="content__title">
                <div class="row">
                    <div class="col-md-6">
                        <p>Selectionnez un produit sanguin dans la ci-dessous et visualiser les differentes quantités disponibles</p>
                    </div>
                </div>
            </header>

            <div class="row">
                <div class="col-md-4 offset-md-4">
                    <div class="form-group form-group--float">
                        <label style="margin-top:-9px"></label>
                        <div class="select">
                            <select class="form-control" id="produit_id" required>
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
                </div>
            </div>

            <div class="row animated fadeIn" id="groupe_area">
                <?php
                $color = 'rgba(255,0,0,0.6)';
                foreach($groupe as $g)
                {
                    if($g->quantite_percent < 2)
                    {
                        $g->quantite_percent = 2;
                    }
                    if($g->quantite_percent < 30)
                    {
                        $color = 'rgba(255,0,0,0.6)';
                    }elseif($g->quantite_percent < 60){                
                        $color = 'rgba(0,255,0,0.5)';
                    }else{
                        $color = 'rgba(0,0,255,0.5)';
                    }
                ?>  
                <div class="col-md-6 animated fadeIn">
                                    
                        <a href="#" class="listview__item">
                            <div class="listview__content">
                                <div class="listview__heading mb-2"><?=$g->name?></div>

                                <div class="progress">
                                    <div class="progress-bar" style="background-color:<?=$color?> ;width: <?=$g->quantite_percent?>%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="text-dark"><?=$g->etat?></span>
                            </div>
                        </a>                   
                </div>
                <?php
                    }
                ?>
            </div>
        </div>
    </div>
</section>

<script src=<?= base_url('assets/vendors/jquery/jquery.min.js')?>></script>

<script>
    var del = document.getElementById('delete');
    var form = document.getElementById('form-delete');

    del.addEventListener('click',function(e){
        e.preventDefault();
        form.click();
    }); 

    function confirmation(anchor)
    {
        Swal.fire({
        title: 'Voulez-vous vraiment supprimer ce prduit?',
        text: "Vous serez plus capable d'annuler cette action!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Supprimer',
        cancelButtonText: 'Annuler',
        }).then((result) => {
            if (result.value) {
                Swal.fire(
                'Supprimé!',
                'Produit supprimé.',
                'success'
                )
                anchor.submit();
            }
        })
    }
</script>

<script>
    $(function(){
        $("#produit_id").change(function(e){
            e.preventDefault();
            var prod_id = $("#produit_id").val();

            $.post("<?=site_url('ajax/produit_sanguin')?>",{produit_id:prod_id},function(data){
                $("#groupe_area").html(data);
            });
        })
    })
</script>