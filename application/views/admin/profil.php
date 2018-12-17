

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive" style="object-fit: cover;" src="<?php echo base_url('assets/uploads/'. $perfil[0]->path_image);?>" alt="User profile picture">

              <h3 class="profile-username text-center"><?= $_SESSION['nome']?></h3>

              <p class="text-muted text-center"><?php 
                if($_SESSION['cargo'] == 1)
                    echo 'Membro';
                else if($_SESSION['cargo'] == 2)
                    echo 'Fundador';
                else if($_SESSION['cargo'] == 3)
                    echo 'Administrador';
                else
                    echo 'Quem és tu ?';
              ?></p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Fotografia</b> <a href="#" class="pull-right">
                  <button class="btn btn-info" data-toggle="modal" data-target="#updateFoto" >Mudar</button></a>
                </li>
                <li class="list-group-item">
                  <b>Palavra-passe</b> <a href="#" class="pull-right">
                  <button class="btn btn-info" data-toggle="modal" data-target="#updatePass" >Mudar</button></a>
                </li>
                <li class="list-group-item">
                  <b>Dados inseridos</b> <a class="pull-right"><?= $inseridos ?></a>
                </li>
              </ul>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#timeline" data-toggle="tab">Últimos passos</a></li>
            </ul>
            <div class="tab-content">
            
              <!-- /.tab-pane -->
              <div class="active tab-pane" id="timeline">
                <!-- The timeline -->
                <ul class="timeline timeline-inverse">
                  <!-- timeline time label -->
                  <?php 
                  
              
                  foreach($accaoDia as $row){ 
                   
                    ?>
                    
                    <li class="time-label">
                      <span class="bg-red">
                        <?= date('d-m-Y', strtotime($row->created_at)); ?>
                      </span>
                    </li>
                    <?php                    
                     foreach($row->accao as $dados){
                        
                        if(date("Y-m-d",strtotime($row->created_at)) == date("Y-m-d", strtotime($dados->created_at)) )
                        { 
                         ?>
                        <li>
                          <i class="fa fa-envelope bg-blue"></i>

                          <div class="timeline-item">
                            <span class="time"><i class="fa fa-clock-o"></i> <?= date("H:i", strtotime($dados->created_at))?></span>

                            <h3 class="timeline-header"><?= $dados->accao;?> <?= $dados->tipo;?></h3>
                          </div>
                        </li>
                        <?php } 
                      ?>
                  <?php 
                  }
                }
                  ?>
                  
                  <li>
                    <i class="fa fa-clock-o bg-gray"></i>
                  </li>
                </ul>
              </div>
              <!-- /.tab-pane -->

            
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->


    <div class="modal fade" id="updateFoto">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Upload Fotografia</h4>
          </div>
          <div class="modal-body">
            <form action="<?= base_url('admin/do_upload');?>" method="POST" class="form-horizontal" enctype="multipart/form-data">
            <input type="hidden" class="form-control" name="id" id="id" placeholder="id">
            <div class="form-group">
                <div class="col-sm-5" ><img src="<?= base_url('assets/uploads/'.$_SESSION['profil-img']);?>" alt="" class="showIMG img-responsive" id="showIMG"></div>

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

    <div class="modal fade" id="updatePass">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title text-center">Atualizar Palavra-passe</h4>
          </div>
          <div class="modal-body">
            <form action="<?= base_url('admin/EditPassword');?>" method="POST" class="form-horizontal">
            <div class="form-group">
              <label for="old-password" name="password" class="col-sm-4 control-label">Antiga Palavra-passe </label>

              <div class="col-sm-8">
                <input type="password" class="form-control" name="old-password" id="old-password" placeholder="Antiga palavra-passe">
              </div>
              
            </div>
            <div class="form-group">
              <label for="password" name="password" class="col-sm-4 control-label">Palavra-passe </label>

              <div class="col-sm-8">
                <input type="password" class="form-control" name="password" id="password" placeholder="Nova palavra-passe">
              </div>
              
            </div>
            <div class="form-group">
              <label for="password-repeat" name="password-repeat" class="col-sm-4 control-label">Confirmar palavra-passe </label>

              <div class="col-sm-8">
                <input type="password" class="form-control" name="password-repeat" id="password-repeat" placeholder="Repetir nova palavra-passe">
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