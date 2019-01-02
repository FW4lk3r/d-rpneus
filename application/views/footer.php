<div class="clearfix"></div>

<footer>
<div class="main-footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <img src="<?= base_url('/assets/img/logo.png');?>" width="300" class="margin-bottom-10">
                    <p><?= htmlspecialchars($definicoes['texto']);  ?></p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-8 col-lg-7 ">
                    <div class="row">
                     
                
                        <div class="col-xs-12 col-sm-offset-6 col-sm-6">
                            <h4 class="text-white text-uppercase"><?= htmlspecialchars($definicoes['apoio_cliente']);  ?></h4>
                            <ul class="list-unstyled">
                                <li>
                                    <i class="fa fa-fw fa-mobile bigger-140 padding-left-5 padding-right-5"></i> (+351) <?= htmlspecialchars($definicoes['telemovel']);  ?>
                                </li>
                                <li>
                                    <i class="fa fa-fw fa-envelope"></i> <?= htmlspecialchars($definicoes['email']);  ?>
                                </li>
                                <li>
                                    <a href="<?= htmlspecialchars($definicoes['facebook']);  ?>" class="link-animated" target="_blank"><i class="fab fa-fw fa-facebook"></i> Facebook</a>
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
                <div class="col-xs-5 col-sm-6 col-md-8">
                    ©2018. <?= $definicoes['titulo'];  ?>.
                </div>
                <div class="col-xs-7 col-sm-6 col-md-4">
                    <div class="poweredby pull-right">
                        Desenvolvido por
                        <a href="https://www.megatec.pt" target="_blank" alt="Megatec">Megatec</a>
                     </div>
                </div>
            </div>
        </div>

    </div>
  

    
       
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
         
        <script src="<?php echo base_url('assets/js/custom.js');?>"></script>   
        <script src="<?php echo base_url('assets/css3-animate-it-master/js/css3-animate-it.js');?>"></script>

        <script src="<?php echo base_url('assets/js/myjs.js');?>"></script>   
</body>

</html>