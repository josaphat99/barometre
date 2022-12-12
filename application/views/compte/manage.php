<style>
    th{
        text-align: center;
    }
</style>

<?php
    if(($this->session->agent_saved))
    {
?>
        <script>
            Swal.fire({            
            icon: 'success',
            title: 'Agent ajouté',
            showConfirmButton: false,
            timer: 3000
            })
        </script>
<?php
    }
    if(($this->session->agent_deleted))
    {
?>
        <script>
            Swal.fire({            
            icon: 'success',
            title: 'Agent Supprimé',
            showConfirmButton: false,
            timer: 3000
            })
        </script>
<?php
    }
?>

<section class="content">
    <header class="content__title">
        <h1 class="animated"><b>Agents</b></h1>
    </header>

    <div class="card animated zoomIn">
        <div class="card-body">
        <header class="content__title">
            <div class="row">
                <div class="col-md-6">
                    <h6><b>Voici la liste de tous les agents enregistrés dans le système</b></h6>
                </div>
                <div class="col-md-2 offset-md-4">
                    <a href="<?=site_url('compte/new_agent')?>" class="btn btn-secondary"><i class="zmdi zmdi-plus zmdi-hc-fw"></i> Nouvel agent</a>
                </div>
            </div>
        </header>
            <div class="table-responsive">
                <table id="data-table" class="table table-bordere table-striped">
                    <thead class="thead-default alert alert-danger text-white">
                        <tr>
                            <th style="width: 180px;">No</th>
                            <th>Nom complet</th>                         
                            <th style="width: 250px;">Adresse</th>
                            <th>Telephone</th>
                            <th style="width: 180px;">Actions</th>
                        </tr>
                    </thead>                    
                    <tbody id="t-body">
                        <?php
                            $num = 0;
                            foreach($agent as $a)
                            { $num++?> 
                                <tr>
                                    <td style="text-align: center;"><?=$num?></td>
                                    <td style="text-align: center;"><?=$a->nomcomplet?></td>                  
                                    <td style="text-align: center;"><?=$a->adresse?></td>
                                    <td style="text-align: center;"><?=$a->phone?></td>
                                    <td>
                                        <button class="btn btn-light btn--raised"><i class="zmdi zmdi-edit zmdi-hc-fw"></i></button>
                                        <form id="form-delete" onclick='javascript:confirmation($(this));return false;'action="<?=site_url("compte/delete_agent")?>" method="post" style="float:right;">                                
                                            <input type="hidden" value="<?=$a->id?>" name="agent_account_id">
                                            <input type="hidden" value="<?=$a->person_id?>" name="agent_person_id">
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
        title: 'Voulez-vous vraiement supprimer cet agent?',
        text: "vous pourrez plus le recuperer!",
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
                'Agent supprimé.',
                'success'
                )
                anchor.submit();
            }
        })
    }  

    $(function()
    {
        // var sec = 0;
        // function pad ( val ) { return val > 9 ? val : "0" + val; }

        // setInterval( function(){
        //     // $("#seconds").html(10%3);
        //     var s = ++sec;
        //     $("#seconds").html(pad(s%60));
        //     $("#minutes").html(pad(parseInt(sec/60,10)));   
        //     if(s%60 == 5)
        //     {
        //         console.log("vous avez epuisé tout votre temps!!!");                
        //     }
        // }, 1000);
    })
</script>