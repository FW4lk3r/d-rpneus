<div class="clearfix"></div>

<footer>
<div class="main-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 hidden-xs hidden-sm">
                    <img src="http://localhost:8888/pneus/assets/img/logo.png" width="300" style="margin-left: -15px" class="margin-bottom-10">
                    <p><?= $definicoes[0]->texto?></p>
                </div>
                <div class="col-sm-12 col-md-8 col-lg-7 ">
                    <div class="row">
                     
                
                <div class="col-sm-offset-8 col-sm-4">
                    <h4 class="text-white text-uppercase">Apoio ao cliente</h4>
                    <ul class="list-unstyled">
                        <li>
                            <i class="fa fa-fw fa-phone"></i> (+351) <?= $definicoes[0]->fixo?>
                        </li>
                        <li>
                            <i class="fa fa-fw fa-mobile bigger-140 padding-left-5 padding-right-5"></i> (+351) <?= $definicoes[0]->telemovel?>
                        </li>
                        <li>
                            <i class="fa fa-fw fa-envelope"></i> <?= $definicoes[0]->email?>
                        </li>
                        <li>
                            <a href="<?= $definicoes[0]->facebook?>" class="link-animated" target="_blank"><i class="fab fa-fw fa-facebook"></i> Facebook</a>
                        </li>
                    </ul>
                </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <div class="credits">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    ©2018. <?= $definicoes[0]->nome_empresa?>.
                </div>
                <div class="col-md-4">
                    <div class="poweredby pull-right">
                        Desenvolvido por
                        <a href="https://www.facebook.com/megatecviseu/" target="_blank" alt="Megatec">Megatec</a>
                        <a href="https://www.filipesferreira.com" target="_blank" alt="Megatec">Filipe Ferreira</a>
                        <a href="https://www.facebook.com/profile.php?id=100011441901442" target="_blank" alt="Megatec">Ana Silva</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
  

    
       
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>   
        <script src="<?php echo base_url('assets/js/custom.js');?>"></script>   
</body>

</html>