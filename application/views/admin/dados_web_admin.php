<section class="content">
    <div class="row">
        <!-- Left col -->
        <section class="col-lg-12">
            <div class="box box-primary">
                <div class="box-header">
                    <i class="ion ion-clipboard"></i>

                    <h3 class="box-title">Informações website</h3>

                </div>
                <!-- /.box-header -->
                <div class="box-body">
                     <!-- form start -->
                    <form role="form" action="proc_website" method="post">
                    <div class="box-body">
                        <?php echo form_error($dados[0]->dados_nome); ?>
                        <div class="form-group">
                        <label for="<?= $dados[0]->dados_nome ?>"><?= $dados[0]->dados_nome ?></label>
                        <input type="text" name="<?= $dados[0]->dados_nome ?>" class="form-control" value="<?php echo $dados[0]->descricao_dados;  ?>" id="<?= $dados[0]->dados_nome ?>" placeholder="<?= $dados[0]->dados_nome ?>">
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" name="submit" class="btn btn-primary">Validar</button>
                    </div>
                    </form>
                </div>
                
            </div>
                <!-- /.box -->
        </section>
    </div>