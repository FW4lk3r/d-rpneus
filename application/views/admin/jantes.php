<!-- Main content -->
<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-warning">
            <div class="box-header">
              <h3 class="box-title">Lista Jantes</h3>
              <small class="pull-right">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-jante">
                    Nova
                </button>    
              </small>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="jantes" class="text-center table table-bordered table-hover">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Fotografia</th>
                  <th>Nome</th>
                  <th>Preço</th>
                  <th>Diametro</th>
                  <th>Marca</th>
                  <th>Tipo</th>
                  <th>Ativo</th>
                  <th>Opções</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                foreach ($jantes as $row)
                    {  ?>
                    
                        <tr>
                            <td style=" vertical-align: middle!important;"><?= $row->id_jante?></td>
                            <td style=" vertical-align: middle!important;"><img src="<?= base_url('assets/uploads/'.$row->foto_jante); ?>" width="40" alt="<?= $row->nome_jante?>"></td>
                            <td style=" vertical-align: middle!important;"><?= htmlspecialchars($row->nome_jante)?></td>
                            <td style=" vertical-align: middle!important;"><?= $row->preco; ?> €</td>
                            <td style=" vertical-align: middle!important;"><?= $row->diametro?></td>
                            <td style=" vertical-align: middle!important;"><?= $row->marca_veiculo?></td>
                            <td style=" vertical-align: middle!important;"><?php
                              if($row->tipo == 1) echo 'Carro'; elseif($row->tipo == 2) echo 'Moto'; else echo 'Indefinido';
                            ?></td>
                            <td style=" vertical-align: middle!important;"><?php 
                                  if($row->ativo == 0){ ?>
                                    <a href="AtivarJante/<?= $row->id_jante ?>">
                               
                                    <button class="btn btn-success">Ativar</button>
                                 <?php } else { ?>
                                    <a href="DesativarJante/<?= $row->id_jante ?>">
                                    <button class="btn btn-danger">Desativar</button>
                                <?php }
                                ?>
                               </a></td>
                            
                            <td style=" vertical-align: middle!important;">
                              
                                <button class="btn btn-warning" data-toggle="modal" data-target="#updateJante" 
                                data-id="<?= $row->id_jante?>"
                                data-nome="<?= htmlspecialchars($row->nome_jante)?>"
                                data-preco="<?= htmlspecialchars($row->preco)?>"
                                data-diametro="<?= htmlspecialchars($row->id_diametro)?>"
                                data-marca="<?= htmlspecialchars($row->id_marca_veiculo)?>"
                                data-foto="<?= htmlspecialchars($row->foto_jante)?>"
                                data-tipo="<?=  htmlspecialchars($row->tipo)?>"
                                >Editar</button> <a href="deleteJante/<?= $row->id_jante ?>">
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

      <div class="modal fade" id="modal-jante">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Criar jante</h4>
              </div>
              <div class="modal-body">
                  <form action="<?= base_url('admin/criarJante');?>" method="POST" class="form-horizontal" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="inputName" name="pneu" class="col-sm-2 control-label">Nome </label>
    
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="nome_jante" id="inputName" placeholder="Nome jante">
                        </div>
                       
                      </div>
                      <div class="form-group">
                        <label for="inputName" name="pneu" class="col-sm-2 control-label">Preço </label>
    
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="preco" id="inputName" placeholder="Preço (0.00)">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputName" name="pneu" class="col-sm-2 control-label">Tipo </label>
    
                        <div class="col-sm-10">
                            <select class="form-control select2" name="tipo" style="width: 100%;">
                              <option value="1">Carro</option>
                              <option value="2">Moto</option>
                            </select>
                        </div>
                      </div>  
                      
                      <div class="form-group">
                        <label for="inputName" name="pneu" class="col-sm-2 control-label">Marca </label>
    
                        <div class="col-sm-10">
                            <select class="form-control select2" name="marcaVeiculo" style="width: 100%;">
                                <?php foreach ($marca_veiculo as $row)
                                { ?>
                                    <option value="<?= $row->id_marca_veiculo ?>"><?= $row->marca_veiculo ?></option>
                                <?php } ?>
                            </select>
                        </div>
                      </div>  
                      <div class="form-group">
                        <label for="inputName" name="pneu" class="col-sm-2 control-label">Diametro </label>
    
                        <div class="col-sm-10">
                            <select class="form-control select2" name="diametro" style="width: 100%;">
                                <?php foreach ($diametro as $row)
                                { ?>
                                    <option value="<?= $row->id_diametro ?>"><?= $row->diametro ?></option>
                                <?php } ?>
                            </select>
                        </div>
                      </div>  
                      <div class="form-group">
                        <div class="col-sm-5" ><img src="" alt="" class="showIMG img-responsive" id="showIMG"></div>

                        <div class="col-sm-7">
                          <input type="file" name="userfile" id="userfile"  onchange="readURL(this);">
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


         <div class="modal fade" id="updateJante">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Atualizar jante</h4>
              </div>
              <div class="modal-body">
                <form action="<?= base_url('admin/updateJante');?>" method="POST" class="form-horizontal" enctype="multipart/form-data">
                <input type="hidden" class="form-control" name="id" id="id" placeholder="id">
                <div class="form-group">
                    <label for="inputName" name="pneu" class="col-sm-2 control-label">Nome </label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nome_jante" id="inputName" placeholder="Nome jante">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" name="pneu" class="col-sm-2 control-label">Preço </label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="preco" id="inputPreco" placeholder="Preço (0.00)">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" name="pneu" class="col-sm-2 control-label">Tipo </label>

                    <div class="col-sm-10">
                        <select class="form-control select2" name="tipo" id="tipo" style="width: 100%;"> 
                          <option value="0">Indefinido</option> 
                          <option value="1">Carro</option> 
                          <option value="2">Moto</option>    
                        </select>
                    </div>
                  </div>  
                
                  <div class="form-group">
                    <label for="inputName" name="pneu" class="col-sm-2 control-label">Diametro </label>

                    <div class="col-sm-10">
                        <select class="form-control select2" name="diametro" id="diametro" style="width: 100%;">
                            <?php foreach ($diametro as $row)
                            { ?>
                                <option value="<?= $row->id_diametro ?>"><?= $row->diametro ?></option>
                            <?php } ?>
                        </select>
                    </div>
                  </div>  
                  <div class="form-group">
                    <label for="inputName" name="pneu" class="col-sm-2 control-label">Marca </label>

                    <div class="col-sm-10">
                        <select class="form-control select2" name="marca" id="marca" style="width: 100%;">
                            <?php foreach ($marca_veiculo as $row)
                            { ?>
                                <option value="<?= $row->id_marca_veiculo ?>"><?= $row->marca_veiculo ?></option>
                            <?php } ?>
                        </select>
                    </div>
                  </div> 
                  <div class="form-group">
                        <div class="col-sm-5" ><img src="" alt="" class="showIMG img-responsive" id="showIMG"></div>

                        <div class="col-sm-7">
                          <input type="file" name="userfile" id="userfile" value="" onchange="readURL(this);">
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