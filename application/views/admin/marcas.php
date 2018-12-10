<!-- Main content -->
<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-warning">
            <div class="box-header">
              <h3 class="box-title">Lista Marcas</h3>
              <small class="pull-right">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">
                    Nova
                </button>    
              </small>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="marca" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Nome</th>
                  <th>Criada</th>
                  <th>Opções</th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach ($marcas as $row)
                    { ?>
                        <tr>
                            <td><?= $row->id_marca?></td>
                            <td><?= htmlspecialchars($row->marca)?></td>
                            <td><?= $row->created_at?></td>
                            
                            <td><button class="btn btn-warning" data-toggle="modal" data-target="#update" 
                                data-id="<?= $row->id_marca?>"
                                data-nome="<?= htmlspecialchars($row->marca)?>"
                                >Editar</button> <a href="deleteMarca/<?= $row->id_marca ?>">
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

     <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Criar marca</h4>
              </div>
              <div class="modal-body">
              <form action="<?= base_url('admin/criarMarca');?>" method="POST" class="form-horizontal">
                  <div class="form-group">
                    <label for="inputName" name="marca" class="col-sm-2 control-label">Nome </label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="marca" id="inputName" placeholder="Nome marca">
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


         <div class="modal fade" id="update">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Atualizar marca</h4>
              </div>
              <div class="modal-body">
              <form action="<?= base_url('admin/updateMarca');?>" method="POST" class="form-horizontal">
                <div class="form-group">
                    <div class="col-sm-10">
                      <input type="hidden" class="form-control" name="id" id="id" placeholder="id">
                    </div>
                  </div> 
                  <div class="form-group">
                    <label for="inputName" name="marca" class="col-sm-2 control-label">Nome </label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="marca" id="marcainput" placeholder="Nome marca">
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