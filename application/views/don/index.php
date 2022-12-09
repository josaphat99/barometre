<style>
    th{
        text-align: center;
    }
</style>

<?php
    if(($this->session->don_saved))
    {
?>
        <script>
            Swal.fire({            
            icon: 'success',
            title: 'Don ajouté',
            showConfirmButton: false,
            timer: 3000
            })
        </script>
<?php
    }
    if(($this->session->don_deleted))
    {
?>
        <script>
            Swal.fire({            
            icon: 'success',
            title: 'Don Supprimé',
            showConfirmButton: false,
            timer: 3000
            })
        </script>
<?php
    }
?>

<section class="content">
    <header class="content__title">
        <h1 class="animated"><b>Dons</b></h1>
    </header>

    <div class="card animated zoomIn">
        <div class="card-body">
        <header class="content__title">
            <div class="row">
                <div class="col-md-6">
                    <h6><b>Voici la liste de tous les dons enregistrés dans le système</b></h6>
                </div>
                <div class="col-md-3 offset-md-3">
                    <a href="<?=site_url('don/new_don')?>" class="btn btn-secondary"><i class="zmdi zmdi-plus zmdi-hc-fw"></i> Nouveau don</a>
                </div>
            </div>
        </header>
            <div class="table-responsive">
                <table id="data-table" class="table table-bordered table-hover">
                    <thead class="thead-default">
                        <tr>
                            <th style="width: 20px;">No</th>
                            <th>Date</th>                         
                            <th>Donneur</th>
                            <th>Produit sanguin</th>
                            <th>Groupe</th>
                            <th>Quantite</th>
                            <th style="width: 180px;">Actions</th>
                        </tr>
                    </thead>                    
                    <tbody id="t-body">
                        <?php
                            $num = 0;
                            foreach($don as $d)
                            { 
                                $num++;
                            ?> 
                                <tr>
                                    <td style="text-align: center;"><?=$num?></td>
                                    <td style="text-align: center;"><?=$d->date?></td>                  
                                    <td style="text-align: center;"><?=$d->donneur?></td>
                                    <td style="text-align: center;"><?=$d->produit_sanguin?></td>
                                    <td style="text-align: center;"><?=$d->groupe?></td>
                                    <td style="text-align: center;"><?=$d->quantite?> littres</td>
                                    <td>
                                        <button class="btn btn-success btn--raised"><i class="zmdi zmdi-edit zmdi-hc-fw"></i></button>
                                        <form id="form-delete" onclick='javascript:confirmation($(this));return false;'action="<?=site_url("don/delete_don")?>" method="post" style="float:right;">                                
                                            <input type="hidden" value="<?=$d->id?>" name="don_id">
                                            <button id="delete" class="btn btn-danger btn--raised" title="Delete">
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
        title: 'Voulez-vous vraiment supprimer ce don?',
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
                'Don supprimé.',
                'success'
                )
                anchor.submit();
            }
        })
    }  

    
</script>