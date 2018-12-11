<!-- Main content -->
<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-warning">
            <div class="box-header">
              <h3 class="box-title">Lista Alturas</h3>
              <small class="pull-right">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-altura">
                    Nova
                </button>    
              </small>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="altura" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Nome</th>
                  <th>Criada</th>
                  <th>Opções</th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach ($altura as $row)
                    { ?>
                        <tr>
                            <td><?= $row->id_altura?></td>
                            <td><?= htmlspecialchars($row->altura)?></td>
                            <td><?= $row->created_at?></td>
                            
                            <td><button class="btn btn-warning" data-toggle="modal" data-target="#updateAltura" 
                                data-id="<?= $row->id_altura?>"
                                data-nome="<?= htmlspecialchars($row->altura)?>"
                                >Editar</button> <a href="deleteAltura/<?= $row->id_altura ?>">
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

     <div class="modal fade" id="modal-altura">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Criar Altura</h4>
              </div>
              <div class="modal-body">
              <form action="<?= base_url('admin/criarAltura');?>" method="POST" class="form-horizontal">
                  <div class="form-group">
                    <label for="inputName" name="altura" class="col-sm-2 control-label">Altura </label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="altura" id="inputAltura" placeholder="Altura">
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


         <div class="modal fade" id="updateAltura">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Atualizar Altura</h4>
              </div>
              <div class="modal-body">
              <form action="<?= base_url('admin/updateAltura');?>" method="POST" class="form-horizontal">
                <div class="form-group">
                    <div class="col-sm-10">
                      <input type="hidden" class="form-control" name="id" id="id" placeholder="id">
                    </div>
                  </div> 
                  <div class="form-group">
                    <label for="inputName" name="alturalabel" class="col-sm-2 control-label">Altura </label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="altura" id="alturainput" placeholder="Altura">
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