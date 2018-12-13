

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?= $pneus; ?></h3>

              <p>Total pneus</p>
            </div>
            <div class="icon">
              <i class="fa fa-road"></i>
            </div>
            <a href="<?= base_url('admin/pneus');?>" class="small-box-footer">Mais informações <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?= $marcas ?></h3>

              <p>Total marcas</p>
            </div>
            <div class="icon">
              <i class="fa fa-bandcamp"></i>
            </div>
            <a href="<?= base_url('admin/marcas');?>" class="small-box-footer">Mais informações <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>xx</h3>

              <p>Total jantes</p>
            </div>
            <div class="icon">
              <i class="fa fa-road"></i> 
            </div>
            <a href="<?= base_url('admin/jantes');?>" class="small-box-footer">Mais informações <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable">
        


          <!-- TO DO List -->
          <div class="box box-primary">
            <div class="box-header">
              <i class="ion ion-clipboard"></i>

              <h3 class="box-title">To Do List</h3>

            </div>
            <!-- /.box-header -->
            <div class="box-body">
              some contente
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix no-border">
              <button type="button" class="btn btn-default pull-right"><i class="fa fa-plus"></i> xpto</button>
            </div>
          </div>
          <!-- /.box -->

         

        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">

            <div class="box box-primary">
                <div class="box-header">
                  <i class="ion ion-clipboard"></i>
    
                  <h3 class="box-title">To Do List</h3>
    
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  some contente
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix no-border">
                  <button type="button" class="btn btn-default pull-right"><i class="fa fa-plus"></i> xpto</button>
                </div>
              </div>

        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

  
