<!-- Main content -->
<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-warning">
            <div class="box-header">
              <h3 class="box-title">Marca Veiculos</h3>
              <small class="pull-right">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-marca-veiculo">
                    Nova
                </button>    
              </small>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="marca-veiculo" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Nome</th>
                  <th>Criada</th>
                  <th>Opções</th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach ($marcaVeiculo as $row)
                    { ?>
                        <tr>
                            <td><?= $row->id_marca_veiculo?></td>
                            <td><?= htmlspecialchars($row->marca_veiculo)?></td>
                            <td><?= $row->created_at?></td>
                            
                            <td><button class="btn btn-warning" data-toggle="modal" data-target="#updateMarcaVeiculo" 
                                data-id="<?= $row->id_marca_veiculo?>"
                                data-nome="<?= htmlspecialchars($row->marca_veiculo)?>"
                                >Editar</button> <a href="deleteMarcaVeiculo/<?= $row->id_marca_veiculo ?>">
                                <button class="btn btn-danger" >Apagar</button></a>
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

     <div class="modal fade" id="modal-marca-veiculo">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Criar Marca Veiculo</h4>
              </div>
              <div class="modal-body">
              <form action="<?= base_url('admin/criarMarcaVeiculo');?>" method="POST" class="form-horizontal">
                  <div class="form-group">
                    <label for="inputName" name="marcaVeiculo" class="col-sm-3 control-label">Marca Veiculo </label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="marcaVeiculo" id="marcaVeiculo" placeholder="Marca Veiculo">
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


         <div class="modal fade" id="updateMarcaVeiculo">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Atualizar Marca Veiculo</h4>
              </div>
              <div class="modal-body">
              <form action="<?= base_url('admin/updateMarcaVeiculo');?>" method="POST" class="form-horizontal">
                <div class="form-group">
                    <div class="col-sm-10">
                      <input type="hidden" class="form-control" name="id" id="id" placeholder="id">
                    </div>
                  </div> 
                  <div class="form-group">
                    <label for="marcaVeiculo" name="larguralabel" class="col-sm-3 control-label">Marca Veiculo </label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="marcaVeiculo" id="marcaVeiculo" placeholder="Marca Veiculo">
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