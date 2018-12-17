<!-- Main content -->
<section class="content">
      <div class="row">
        <div class="col-xs-12">
        <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Definições</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST" action="updateDefinicoes">
              <div class="box-body">
                <div class="form-group">
                  <label for="telefoneFixo" class="col-sm-2 control-label">Telefone fixo</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="telefoneFixo" value="<?= $definicoes[0]->fixo?>" id="telefoneFixo" placeholder="Telefone fixo">
                  </div>
                </div>
                <div class="form-group">
                  <label for="telemovel" class="col-sm-2 control-label">Telemóvel</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="telemovel" value="<?= $definicoes[0]->telemovel?>" id="telemovel" placeholder="Telemóvel">
                  </div>
                </div>
                <div class="form-group">
                  <label for="email" class="col-sm-2 control-label">E-mail</label>

                  <div class="col-sm-10">
                    <input type="email" class="form-control" name="email" value="<?= $definicoes[0]->email?>" id="email" placeholder="E-mail">
                  </div>
                </div>
                <div class="form-group">
                  <label for="facebook" class="col-sm-2 control-label">Facebook</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="facebook" value="<?= $definicoes[0]->facebook?>" id="facebook" placeholder="Facebook">
                  </div>
                </div>
                <div class="form-group">
                  <label for="texto" class="col-sm-2 control-label">Texto descritivo</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="texto" id="texto" value="<?= $definicoes[0]->texto?>" placeholder="Texto descritivo">
                  </div>
                </div>
                <div class="form-group">
                  <label for="empresa" class="col-sm-2 control-label">Nome empresa</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="empresa" id="empresa" value="<?= $definicoes[0]->nome_empresa?>" placeholder="Nome empresa">
                  </div>
                </div>
                <div class="form-group">
                  <label for="desc_contactos" class="col-sm-2 control-label">Descrição contactos</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="desc_contactos" id="desc_contactos" value="<?= $definicoes[0]->desc_contactos?>" placeholder="Descrição contactos">
                  </div>
                </div>
                <div class="form-group">
                  <label for="morada" class="col-sm-2 control-label">Morada</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="morada" id="morada" value="<?= $definicoes[0]->morada?>" placeholder="Morada">
                  </div>
                </div>
                
              </div>
              <!-- /.box-body -->
              <div class="box-footer text-center">
                
                <button type="submit" name="submit" class="btn btn-success ">Guardar</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>

         
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->