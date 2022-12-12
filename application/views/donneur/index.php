<style>
    th{
        text-align: center;
    }
</style>

<?php
    if(($this->session->donneur_saved))
    {
?>
        <script>
            Swal.fire({            
            icon: 'success',
            title: 'Donneur ajouté',
            showConfirmButton: false,
            timer: 3000
            })
        </script>
<?php
    }
    if(($this->session->donneur_deleted))
    {
?>
        <script>
            Swal.fire({            
            icon: 'success',
            title: 'Donneur Supprimé',
            showConfirmButton: false,
            timer: 3000
            })
        </script>
<?php
    }
?>

<section class="content">
    <header class="content__title">
        <h1 class="animated"><b>Donneurs</b></h1>
    </header>

    <div class="card animated zoomIn">
        <div class="card-body">
        <header class="content__title">
            <div class="row">
                <div class="col-md-6">
                    <h6><b>Voici la liste de tous les donneurs enregistrés dans le système</b></h6>
                </div>
                <!-- <div class="col-md-3 offset-md-3">
                    <a href="<site_url('person/new_donneur')?>" class="btn btn-secondary"><i class="zmdi zmdi-plus zmdi-hc-fw"></i> Nouveau donneur</a>
                </div> -->
            </div>
        </header>
            <div class="table-responsive">
                <table id="data-table" class="table table-borderd table-striped">
                    <thead class="thead-default alert alert-danger text-white">
                        <tr>
                            <th style="width: 20px;">No</th>
                            <th>Nom complet</th>                         
                            <th>Adresse</th>
                            <th>Telephone</th>
                            <th>Email</th>
                            <th>Masse</th>
                            <th>Age</th>
                            <th>Groupe</th>
                            <th>Actions</th>
                        </tr>
                    </thead>                    
                    <tbody id="t-body">
                        <?php
                            $num = 0;
                            foreach($donneur as $d)
                            { 
                                $num++;

                                $timestamp = strtotime($d->date_naissence); 
                                $year = date('Y',$timestamp);

                                $current_year = date('Y',time());

                                $age = $current_year - $year;
                            ?> 
                                <tr>
                                    <td style="text-align: center;"><?=$num?></td>
                                    <td style="text-align: center;"><?=$d->nomcomplet?></td>                  
                                    <td style="text-align: center;"><?=$d->adresse?></td>
                                    <td style="text-align: center;"><?=$d->phone?></td>
                                    <td style="text-align: center;"><?=$d->email?></td>
                                    <td style="text-align: center;"><?=$d->weight?> Kg</td>
                                    <td style="text-align: center;"><?=$age?> ans</td>
                                    <td style="text-align: center;"><?=$d->groupe?></td>
                                    <td>
                                        <!-- <button class="btn btn-s btn--raised"><i class="zmdi zmdi-edit zmdi-hc-fw"></i></button> -->
                                        <form id="form-delete" onclick='javascript:confirmation($(this));return false;'action="<?=site_url("person/delete_donneur")?>" method="post">                                
                                            <input type="hidden" value="<?=$d->id?>" name="donneur_id">
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
        title: 'Voulez-vous vraiment supprimer ce donneur?',
        text: "Vous serez plus capable d'annuler cette action!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Delete',
        cancelButtonText: 'Cancel',
        }).then((result) => {
            if (result.value) {
                Swal.fire(
                'Supprimé!',
                'Donneur supprimé.',
                'success'
                )
                anchor.submit();
            }
        })
    }  

    
</script>