<!-- Main content -->
<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-warning">
            <div class="box-header">
              <h3 class="box-title">Lista Diametro</h3>
              <small class="pull-right">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-diametro">
                    Nova
                </button>    
              </small>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="diametro" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Nome</th>
                  <th>Criada</th>
                  <th>Opções</th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach ($diametro as $row)
                    { ?>
                        <tr>
                            <td><?= $row->id_diametro?></td>
                            <td><?= htmlspecialchars($row->diametro)?></td>
                            <td><?= $row->created_at?></td>
                            
                            <td><button class="btn btn-warning" data-toggle="modal" data-target="#updateDiametro" 
                                data-id="<?= $row->id_diametro?>"
                                data-nome="<?= htmlspecialchars($row->diametro)?>"
                                >Editar</button> <a href="deleteDiametro/<?= $row->id_diametro ?>">
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

     <div class="modal fade" id="modal-diametro">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Criar Diametro</h4>
              </div>
              <div class="modal-body">
              <form action="<?= base_url('admin/criarDiametro');?>" method="POST" class="form-horizontal">
                  <div class="form-group">
                    <label for="inputName" name="diametro" class="col-sm-2 control-label">Diametro </label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="diametro" id="inputDiametro" placeholder="Diametro">
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


         <div class="modal fade" id="updateDiametro">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Atualizar Diametro</h4>
              </div>
              <div class="modal-body">
              <form action="<?= base_url('admin/updateDiametro');?>" method="POST" class="form-horizontal">
                <div class="form-group">
                    <div class="col-sm-10">
                      <input type="hidden" class="form-control" name="id" id="id" placeholder="id">
                    </div>
                  </div> 
                  <div class="form-group">
                    <label for="inputName" name="diametrolabel" class="col-sm-2 control-label">Altura </label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="diametro" id="diametroinput" placeholder="Diametro">
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