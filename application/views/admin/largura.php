<!-- Main content -->
<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-warning">
            <div class="box-header">
              <h3 class="box-title">Lista Largura</h3>
              <small class="pull-right">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-largura">
                    Nova
                </button>    
              </small>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="largura" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Nome</th>
                  <th>Criada</th>
                  <th>Opções</th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach ($largura as $row)
                    { ?>
                        <tr>
                            <td><?= $row->id_largura?></td>
                            <td><?= htmlspecialchars($row->largura)?></td>
                            <td><?= $row->created_at?></td>
                            
                            <td><button class="btn btn-warning" data-toggle="modal" data-target="#updateLargura" 
                                data-id="<?= $row->id_largura?>"
                                data-nome="<?= htmlspecialchars($row->largura)?>"
                                >Editar</button> <a href="deleteLargura/<?= $row->id_largura ?>">
                                <button class="btn btn-danger">Apagar</button></a>
                            </td>
                        </tr>
                   <?php }?>
                
               
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

         
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->

     <div class="modal fade" id="modal-largura">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Criar Largura</h4>
              </div>
              <div class="modal-body">
              <form action="<?= base_url('admin/criarLargura');?>" method="POST" class="form-horizontal">
                  <div class="form-group">
                    <label for="inputName" name="largura" class="col-sm-2 control-label">Largura </label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="largura" id="inputLargura" placeholder="Largura">
                    </div>
                  </div>  
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Fechar</button>
                <button type="submit" name="submit" class="btn btn-success">Guardar</button>
                </form>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->


         <div class="modal fade" id="updateLargura">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Atualizar largura</h4>
              </div>
              <div class="modal-body">
              <form action="<?= base_url('admin/updateLargura');?>" method="POST" class="form-horizontal">
                <div class="form-group">
                    <div class="col-sm-10">
                      <input type="hidden" class="form-control" name="id" id="id" placeholder="id">
                    </div>
                  </div> 
                  <div class="form-group">
                    <label for="inputName" name="larguralabel" class="col-sm-2 control-label">Largura </label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="largura" id="largurainput" placeholder="Largura">
                    </div>
                  </div>  
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Fechar</button>
                <button type="submit" name="submit" class="btn btn-success">Guardar</button>
                </form>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->