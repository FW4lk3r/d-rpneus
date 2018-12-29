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
                <?php foreach($definicoes as $row){?>
                <div class="form-group">
                  <label for="<?= $row->slug?>" class="col-sm-2 control-label"><?= $row->nome?></label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="<?= $row->slug?>" value="<?= $row->valor?>" id="<?= $row->slug?>" placeholder="<?= $row->nome?>">
                  </div>
                </div>
                <?php }?>
               
                
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