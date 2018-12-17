<!-- Main content -->
<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-warning">
            <div class="box-header">
              <h3 class="box-title">Lista Pneus</h3>
              <small class="pull-right">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-pneu">
                    Nova
                </button>    
              </small>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="pneus" class="text-center table table-bordered table-hover">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Fotográfia</th>
                  <th>Nome</th>
                  <th>Preço</th>
                  <th>Largura</th>
                  <th>Altura</th>
                  <th>Diametro</th>
                  <th>Marca</th>
                  <th>Tipo</th>
                  <th>Ativo</th>
                  <th>Opções</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                foreach ($pneusListados as $row)
                    {  ?>
                    
                        <tr>
                            <td style=" vertical-align: middle!important;"><?= $row->id_pneu?></td>
                            <td style=" vertical-align: middle!important;"><img src="<?= base_url('assets/uploads/'.$row->foto_pneu); ?>" width="40" alt="<?= $row->nome_pneu?>"></td>
                            <td style=" vertical-align: middle!important;"><?= htmlspecialchars($row->nome_pneu)?></td>
                            <td style=" vertical-align: middle!important;"><?= $row->preco; ?> €</td>
                            <td style=" vertical-align: middle!important;"><?= $row->largura?></td>
                            <td style=" vertical-align: middle!important;"><?= $row->altura?></td>
                            <td style=" vertical-align: middle!important;"><?= $row->diametro?></td>
                            <td style=" vertical-align: middle!important;"><?= $row->marca?></td>
                            <td>XXX</td>
                            <td style=" vertical-align: middle!important;"><?php 
                                  if($row->ativo == 0){ ?>
                                    <a href="AtivarPneu/<?= $row->id_pneu ?>">
                               
                                    <button class="btn btn-success">Ativar</button>
                                 <?php } else { ?>
                                    <a href="DesativarPneu/<?= $row->id_pneu ?>">
                                    <button class="btn btn-danger">Desativar</button>
                                <?php }
                                ?>
                               </a></td>
                            
                            <td style=" vertical-align: middle!important;">
                              
                                <button class="btn btn-warning" data-toggle="modal" data-target="#updatePneus" 
                                data-id="<?= $row->id_pneu?>"
                                data-nome="<?= htmlspecialchars($row->nome_pneu)?>"
                                data-preco="<?= htmlspecialchars($row->preco)?>"
                                data-largura="<?= htmlspecialchars($row->id_largura)?>"
                                data-altura="<?= htmlspecialchars($row->id_altura)?>"
                                data-diametro="<?= htmlspecialchars($row->id_diametro)?>"
                                data-marca="<?= htmlspecialchars($row->id_marca)?>"
                                data-foto="<?= htmlspecialchars($row->foto_pneu)?>"
                                >Editar</button> <a href="deletePneu/<?= $row->id_pneu ?>">
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

      <div class="modal fade" id="modal-pneu">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Criar pneu</h4>
              </div>
              <div class="modal-body">
                  <form action="<?= base_url('admin/criarPneus');?>" method="POST" class="form-horizontal" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="inputName" name="pneu" class="col-sm-2 control-label">Nome </label>
    
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="nome_pneu" id="inputName" placeholder="Nome pneu">
                        </div>
                       
                      </div>
                      <div class="form-group">
                        <label for="inputName" name="pneu" class="col-sm-2 control-label">Preço </label>
    
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="preco" id="inputName" placeholder="Preço (0.00)">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputName" name="pneu" class="col-sm-2 control-label">Largura </label>
    
                        <div class="col-sm-10">
                            <select class="form-control select2" name="largura" style="width: 100%;">
                                <?php foreach ($largura as $row)
                                { ?>
                                    <option value="<?= $row->id_largura?>"><?= $row->largura ?></option>
                                <?php } ?>
                            </select>
                        </div>
                      </div>  
                      <div class="form-group">
                        <label for="inputName" name="pneu" class="col-sm-2 control-label">Altura </label>
    
                        <div class="col-sm-10">
                            <select class="form-control select2" name="altura" style="width: 100%;">
                                <?php foreach ($altura as $row)
                                { ?>
                                    <option value="<?= $row->id_altura ?>"><?= $row->altura ?></option>
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
                        <label for="inputName" name="pneu" class="col-sm-2 control-label">Marca </label>
    
                        <div class="col-sm-10">
                            <select class="form-control select2" name="marca" style="width: 100%;">
                                <?php foreach ($marcas as $row)
                                { ?>
                                    <option value="<?= $row->id_marca ?>"><?= $row->marca ?></option>
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


         <div class="modal fade" id="updatePneus">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Atualizar pneu</h4>
              </div>
              <div class="modal-body">
                <form action="<?= base_url('admin/updatePneus');?>" method="POST" class="form-horizontal" enctype="multipart/form-data">
                <input type="hidden" class="form-control" name="id" id="id" placeholder="id">
                <div class="form-group">
                    <label for="inputName" name="pneu" class="col-sm-2 control-label">Nome </label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nome_pneu" id="inputName" placeholder="Nome pneu">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" name="pneu" class="col-sm-2 control-label">Preço </label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="preco" id="inputPreco" placeholder="Preço (0.00)">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" name="pneu" class="col-sm-2 control-label">Largura </label>

                    <div class="col-sm-10">
                        <select class="form-control select2" name="largura" id="largura" style="width: 100%;">
                            <?php foreach ($largura as $row)
                            { ?>
                                <option value="<?= $row->id_largura?>"><?= $row->largura ?></option>
                            <?php } ?>
                        </select>
                    </div>
                  </div>  
                  <div class="form-group">
                    <label for="inputName" name="pneu" class="col-sm-2 control-label">Altura </label>

                    <div class="col-sm-10">
                        <select class="form-control select2" name="altura" id="altura" style="width: 100%;">
                            <?php foreach ($altura as $row)
                            { ?>
                                <option value="<?= $row->id_altura ?>"><?= $row->altura ?></option>
                            <?php } ?>
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
                            <?php foreach ($marcas as $row)
                            { ?>
                                <option value="<?= $row->id_marca ?>"><?= $row->marca ?></option>
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