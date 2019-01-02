
      
<div class="container">
    <div class="row">
        <div class="col-md-12 text_desc">
            <?= $info_pneu[0]->nome_pneu ?> | <?= $info_pneu[0]->altura?>/<?= $info_pneu[0]->largura?> R<?= $info_pneu[0]->raio?> <?= $info_pneu[0]->indice?> T
        </div>
    </div>
    <div class="row">

        <div class="col-md-3">
               
            <div class="row">
                <div class="col-md-12">
                    <div class="thumbnail" style="padding: 0px;">
                        <img src="<?= base_url('assets/uploads/'.$info_pneu[0]->foto_pneu);?>" alt="<?= $info_pneu[0]->nome_pneu?>" class="pneu_img"/>
                        <div class="row_text">
                            <?= $info_pneu[0]->marca ?>
                        </div>
                    </div>
                </div>
            
            </div>
                
        </div>
        <div class="col-md-6">
            <div class="row">
                
                <div class="col-md-12">
                    <div>
                        <div class="home_text">
                            <?= $info_pneu[0]->descricao?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="thumbnail" style="padding: 0px;" >
                <div class="retangulo">
                    <?= $info_pneu[0]->preco?> CHF
                </div>
                <div class="caption">
                    <div data-toggle="tooltip" data-placement="bottom" title="Consumo de Comustível" style="text-align: center;margin: 15px 0px">
                        <span class="fa-stack"  >
                            <i class="fas fa-gas-pump gaspump fa-stack-2x"></i>
                        </span>
                        
                        <span class="fa-stack">
                            <i class="fas fa-bookmark fa-stack-2x bookmark-<?= $info_pneu[0]->consumo?>"></i>
                            <strong class="fa-stack-1x calendar-text"><?= $info_pneu[0]->consumo?></strong>
                        </span>
                    </div>
                    <div data-toggle="tooltip" data-placement="bottom" title="Aderência à chuva" style="text-align: center;margin: 15px 0px">
                        <span class="fa-stack" >
                                <i class="fas fa-cloud-rain gaspump fa-stack-2x"></i>
                        </span>
        
                        <span class="fa-stack">
                            <i class="fas fa-bookmark fa-stack-2x bookmark-<?= $info_pneu[0]->aderencia?>"></i>
                            <strong class="fa-stack-1x calendar-text"><?= $info_pneu[0]->aderencia?></strong>
                        </span>
                    </div>
                                                
                    <div data-toggle="tooltip" data-placement="bottom" title="ruído externo em decibéis" style="text-align: center;margin: 15px 0px">
                        <span class="fa-stack" >
                            <i class="fas fa-volume-up  gaspump fa-stack-2x"></i>
                        </span>
        
                        <span class="fa-stack">
                            <i class="fas fa-square fa-stack-2x"></i>
                            <strong class="fa-stack-1x square"><?= $info_pneu[0]->ruido?>dB</strong>
                        </span>
                    </div>
                </div>
            </div>           
    
                                 
                               
        </div>
    </div>
    <div class="clearfix spacing-30"></div>
    <div class="row">
        <div class="col-md-12">
            <h3>Voir aussi</h3>
        </div>

        <?php 
        if($veja_tambem == null){
           echo 'Aucun résultat similaire';
        } else {
        foreach($veja_tambem as $row){?>
            <div class="col-md-3">
                <a href="<?= base_url('descricao/pneu/'.$row->id_pneu);?>" class="thumbnail" style="padding: 0; text-decoration:none; color: inherit">
                    <img src="<?= base_url('assets/uploads/'.$row->foto_pneu);?>" style="max-width:100%; " alt="">
                    <div class="row_text"><?= $row->nome_pneu ?> | <?= $row->altura?>/<?= $row->largura?> R<?= $row->raio?> <?= $row->indice?> T</div>
                </a>
            </div>
        <?php }
        }?>
    </div>
</div>
<div class="spacing-20"></div>
           
    
