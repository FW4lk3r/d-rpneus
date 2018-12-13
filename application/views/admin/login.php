

 </head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="<?php echo base_url('admin') ?>"><img src="<?= base_url('assets/img/logo.png');?>" width="300" alt="Logotipo"></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Efectue o Login</p>
    
    <form action="<?php echo base_url('admin/proc_login')?>" method="post">
      
          <div class="row">
              <div class="form-group">
                  <label class="col-md-12">
                      <?php if($msg !== NULL){?>
                          <div class="alert <?php echo $ClassMsg;?>" role="alert">
                              <?= $msg;?>
                          </div>
                      <?php }?>
                  </label> 
              </div>
          </div>
      <?php echo form_error('email'); ?>
      <div class="form-group has-feedback">  
        <input type="email" name="email" class="form-control" value="<?php echo set_value('email'); ?>"  placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <?php echo form_error('password'); ?>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-lg-offset-4 col-lg-4 ">
          <button type="submit" name="submit" class="btn btn-success btn-block btn-flat">Entrar</button>
        </div>
        
        <!-- /.col -->
      </div>
      <hr>
      <div class="row">
        <div class="col-lg-offset-4 col-lg-4 ">
          <a href="<?= base_url(); ?>" class="btn btn-warning btn-block btn-flat">Voltar</a>
        </div>
      </div>
    </form>

    

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

