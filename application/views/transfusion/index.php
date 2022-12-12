<style>
    th{
        text-align: center;
    }
</style>

<?php
    if(($this->session->transfusion_saved))
    {
?>
        <script>
            Swal.fire({            
            icon: 'success',
            title: 'Transfusion ajouté',
            showConfirmButton: false,
            timer: 3000
            })
        </script>
<?php
    }
    if(($this->session->transfusion_deleted))
    {
?>
        <script>
            Swal.fire({            
            icon: 'success',
            title: 'Transfusion Supprimé',
            showConfirmButton: false,
            timer: 3000
            })
        </script>
<?php
    }
?>

<section class="content">
    <header class="content__title">
        <h1 class="animated"><b>Transfusions</b></h1>
    </header>

    <div class="card animated zoomIn">
        <div class="card-body">
        <header class="content__title">
            <div class="row">
                <div class="col-md-6">
                    <h6><b>Voici la liste de toutes les transfusions enregistrées dans le système</b></h6>
                </div>
                <div class="col-md-3 offset-md-3">
                    <a href="<?=site_url('transfusion/new_transfusion')?>" class="btn btn-outline-dark"><i class="zmdi zmdi-plus zmdi-hc-fw"></i> Nouvelle transfusion</a>
                </div>
            </div>
        </header>
            <div class="table-responsive">
                <table id="data-table" class="table table-borderd table-striped table-hover">
                    <thead class="thead-default alert alert-danger text-white">
                        <tr>
                            <th style="width: 20px;">No</th>
                            <th>Date</th>                         
                            <th>Beneficiaire</th>
                            <th>Produit sanguin</th>
                            <th>Groupe</th>
                            <th>Quantite</th>
                            <th>Actions</th>
                        </tr>
                    </thead>                    
                    <tbody id="t-body">
                        <?php
                            $num = 0;
                            foreach($transfusion as $t)
                            { 
                                $num++;
                            ?> 
                                <tr>
                                    <td style="text-align: center;"><?=$num?></td>
                                    <td style="text-align: center;"><?=$t->date?></td>                  
                                    <td style="text-align: center;"><?=$t->donneur?></td>
                                    <td style="text-align: center;"><?=$t->produit_sanguin?></td>
                                    <td style="text-align: center;"><?=$t->groupe?></td>
                                    <td style="text-align: center;"><?=$t->quantite?> littres</td>
                                    <td>
                                        <!-- <button class="btn btn-light btn--raised"><i class="zmdi zmdi-edit zmdi-hc-fw"></i></button> -->
                                        <form id="form-delete" onclick='javascript:confirmation($(this));return false;'action="<?=site_url("transfusion/delete_transfusion")?>" method="post"">                                
                                            <input type="hidden" value="<?=$t->id?>" name="transfusion_id">
                                            <button id="delete" class="btn btn-light btn--raised" title="Delete">
                                                <i class="zmdi zmdi-delete zmdi-hc-fw"></i>
                                            </button>
                                        </form>                                                                                 
                                    </td>
                                </tr>
                        <?php
                            }
                        ?>                                                          
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

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
        title: 'Voulez-vous vraiment supprimer cette transfusion?',
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
                'Transfusion supprimé.',
                'success'
                )
                anchor.submit();
            }
        })
    }
</script>