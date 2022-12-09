<aside class="sidebar">
    <div class="scrollbar-inner">
        <div class="user">
            <div class="user__info" data-toggle="dropdown">
                <img class="user__img" src="<?=base_url('assets/demo/img/profile-pics/2.jpg')?>" alt="">
                <div>
                    <div class="user__name"><?=$this->session->nomcomplet?></div>
                    <div class="user__email"><?=$this->session->email?></div>
                </div>
            </div>
        </div>
       
        <ul class="navigation">
            <?php
                if($this->session->type == 'admin')
                {
            ?> 
            <li><a href="<?=site_url('compte/manage')?>"><i class="zmdi zmdi-accounts"></i> Utilisateurs</a></li>
            <li><a href="<?=site_url('compte/new_agent')?>"><i class="zmdi zmdi-account-add zmdi-hc-fw"></i> Nouvel agent</a></li>
            <?php
            }
            ?>

            <?php
                if($this->session->type == 'agent')
                {
            ?>                   
            <li><a href="<?=site_url("person/donneur")?>"><i class="zmdi zmdi-assignment-account zmdi-hc-fw"></i>Donneurs</a></li>
            <li><a href="<?=site_url("person/new_donneur")?>"><i class="zmdi zmdi-card-membership zmdi-hc-fw"></i>Nouveau donneur</a></li>
            <li><a href="<?=site_url("person/beneficiaire")?>"><i class="zmdi zmdi-assignment-account zmdi-hc-fw"></i>Beneficiaire</a></li>
            <li><a href="<?=site_url("don/index")?>"><i class="zmdi zmdi-card-giftcard zmdi-hc-fw"></i>Dons</a></li>
            <li><a href="<?=site_url("transfusion/index")?>"><i class="zmdi zmdi-local-drink zmdi-hc-fw"></i>Transfusions</a></li>
            <li><a href="<?=site_url("produitSanguin/index")?>"><i class="zmdi zmdi-invert-colors zmdi-hc-fw"></i>Produits sanguins</a></li>
            
            <?php
                }
            ?>
        </ul>
    </div>
</aside>