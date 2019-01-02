
    </section>
    <!-- /.content -->
  </div>

<!-- /.content-wrapper -->
<footer class="main-footer">
    
    <strong>Copyright &copy; 2018 <a href="https://filipesferreira.com">Filipe Ferreira & Ana Silva</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url('assets/bower_components/jquery/dist/jquery.min.js');?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url('assets/bower_components/jquery-ui/jquery-ui.min.js');?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('assets/bower_components/bootstrap/dist/js/bootstrap.min.js');?>"></script>
<!-- DataTables -->
<script src="<?php echo base_url('assets/bower_components/datatables.net/js/jquery.dataTables.min.js');?>"></script>
<script src="<?php echo base_url('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js');?>"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url('assets/bower_components/raphael/raphael.min.js');?>"></script>
<script src="<?php echo base_url('assets/bower_components/morris.js/morris.min.js');?>"></script>
<!-- Sparkline -->
<script src="<?php echo base_url('assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js');?>"></script>
<!-- jvectormap -->
<script src="<?php echo base_url('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js');?>"></script>
<script src="<?php echo base_url('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js');?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url('assets/bower_components/jquery-knob/dist/jquery.knob.min.js');?>"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url('assets/bower_components/moment/min/moment.min.js');?>"></script>
<script src="<?php echo base_url('assets/bower_components/bootstrap-daterangepicker/daterangepicker.js');?>"></script>
<!-- datepicker -->
<script src="<?php echo base_url('assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js');?>"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js');?>"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url('assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js');?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url('assets/bower_components/fastclick/lib/fastclick.js');?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/dist/js/adminlte.min.js');?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url('assets/dist/js/pages/dashboard.js');?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/dist/js/demo.js');?>"></script>

<?php 
if(current_url() == base_url('admin/pneus')){?>
  <script>
  
  $(function () {
    $('#pneus').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : false,
      'autoWidth'   : false,
      "pageLength"  : 6,
      "columnDefs": [ {
            "searchable": false,
            "orderable": false,
            "targets": [1,8]
      } ],
      "language": {
        "url": "https://cdn.datatables.net/plug-ins/1.10.19/i18n/Portuguese.json"
      }
    })
   
  })

  $('#updatePneus').on('show.bs.modal',function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var id = button.data('id') // Extract info from data-* attributes
    var nome = button.data('nome')
    var preco = button.data('preco')
    var largura = button.data('largura')
    var altura = button.data('altura')
    var diametro = button.data('diametro') 
    var marca = button.data('marca') 
    var foto = button.data('foto')
    var tipo = button.data('tipo')
    var modal = $(this)
    modal.find('.modal-title').text('Pneu nº: [' + id + ']')
    modal.find('#id').val(id)
    modal.find('#inputName').val(nome)
    modal.find('#inputPreco').val(preco)
    modal.find('#largura option').removeAttr('selected').filter('[value=' + largura + ']').attr('selected', true);
    modal.find('#tipo option').removeAttr('selected').filter('[value=' + tipo + ']').attr('selected', true);
    modal.find('#altura option').removeAttr('selected').filter('[value=' + altura + ']').attr('selected', true);
    modal.find('#diametro option').removeAttr('selected').filter('[value=' + diametro + ']').attr('selected', true);
    modal.find('#marca option').removeAttr('selected').filter('[value=' + marca + ']').attr('selected', true);
    modal.find('#showIMG').attr("src","http://localhost:8888/pneus/assets/uploads/"+ foto);
 
  })

  
  
</script>
<?php } ?>
<?php 
if(current_url() == base_url('admin/jantes')){?>
  <script>
  $(function () {
    $('#jantes').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : false,
      'autoWidth'   : false,
      "pageLength"  : 6,
      "columnDefs": [ {
            "searchable": false,
            "orderable": false,
            "targets": [1,8]
      } ],
      "language": {
        "url": "https://cdn.datatables.net/plug-ins/1.10.19/i18n/Portuguese.json"
      }
    })
   
  })

  $('#updateJante').on('show.bs.modal',function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var id = button.data('id') // Extract info from data-* attributes
    var nome = button.data('nome')
    var preco = button.data('preco')
    var diametro = button.data('diametro') 
    var marca = button.data('marca') 
    var foto = button.data('foto')
    var tipo = button.data('tipo')
    var modal = $(this)
    modal.find('.modal-title').text('Jante nº: [' + id + ']')
    modal.find('#id').val(id)
    modal.find('#inputName').val(nome)
    modal.find('#inputPreco').val(preco)
    modal.find('#tipo option').removeAttr('selected').filter('[value=' + tipo + ']').attr('selected', true);
    modal.find('#diametro option').removeAttr('selected').filter('[value=' + diametro + ']').attr('selected', true);
    modal.find('#marca option').removeAttr('selected').filter('[value=' + marca + ']').attr('selected', true);
    modal.find('#showIMG').attr("src","http://localhost:8888/pneus/assets/uploads/"+ foto);
 
  })
  
</script>
<?php } ?>
<?php 
if(current_url() == base_url('admin/marcas')){?>
  <script>
  $(function () {
    $('#marca').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : false,
      'autoWidth'   : false,
      "pageLength"  : 6,
      "columnDefs": [ {
            "searchable": false,
            "orderable": false,
            "targets": [2,3]
      } ],
      "language": {
        "url": "https://cdn.datatables.net/plug-ins/1.10.19/i18n/Portuguese.json"
      }
    })
   
  })

  $('#update').on('show.bs.modal',function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var id = button.data('id') // Extract info from data-* attributes
    var nome = button.data('nome') 
    var modal = $(this)
    modal.find('.modal-title').text('Marca nº: [' + id + ']')
    modal.find('#id').val(id)
    modal.find('#marcainput').val(nome)
  })
  
</script>
<?php } ?>
<?php 
if(current_url() == base_url('admin/marcaVeiculo')){?>
  <script>
  $(function () {
    $('#marca-veiculo').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : false,
      'autoWidth'   : false,
      "pageLength"  : 6,
      "columnDefs": [ {
            "searchable": false,
            "orderable": false,
            "targets": [2,3]
      } ],
      "language": {
        "url": "https://cdn.datatables.net/plug-ins/1.10.19/i18n/Portuguese.json"
      }
    })
   
  })

  $('#updateMarcaVeiculo').on('show.bs.modal',function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var id = button.data('id') // Extract info from data-* attributes
    var nome = button.data('nome') 
    var modal = $(this)
    modal.find('.modal-title').text('Marca veiculo nº: [' + id + ']')
    modal.find('#id').val(id)
    modal.find('#marcaVeiculo').val(nome)
  })
  
</script>
<?php } ?>
<?php 
if(current_url() == base_url('admin/largura')){?>
  <script>
  $(function () {
    $('#largura').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : false,
      'autoWidth'   : false,
      "pageLength"  : 6,
      "columnDefs": [ {
            "searchable": false,
            "orderable": false,
            "targets": [2,3]
      } ],
      "language": {
        "url": "https://cdn.datatables.net/plug-ins/1.10.19/i18n/Portuguese.json"
      }
    })
   
  })

  $('#updateLargura').on('show.bs.modal',function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var id = button.data('id') // Extract info from data-* attributes
    var nome = button.data('nome') 
    var modal = $(this)
    modal.find('.modal-title').text('Largura nº: [' + id + ']')
    modal.find('#id').val(id)
    modal.find('#largurainput').val(nome)
  })
  
</script>
<?php } ?>
<?php 
if(current_url() == base_url('admin/altura')){?>
  <script>
  $(function () {
    $('#altura').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : false,
      'autoWidth'   : false,
      "pageLength"  : 6,
      "columnDefs": [ {
            "searchable": false,
            "orderable": false,
            "targets": [2,3]
      } ],
      "language": {
        "url": "https://cdn.datatables.net/plug-ins/1.10.19/i18n/Portuguese.json"
      }
    })
   
  })

  $('#updateAltura').on('show.bs.modal',function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var id = button.data('id') // Extract info from data-* attributes
    var nome = button.data('nome') 
    var modal = $(this)
    modal.find('.modal-title').text('Altura nº: [' + id + ']')
    modal.find('#id').val(id)
    modal.find('#alturainput').val(nome)
  })
  
</script>
<?php } ?>
<?php 
if(current_url() == base_url('admin/diametro')){?>
  <script>
  $(function () {
    $('#diametro').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : false,
      'autoWidth'   : false,
      "pageLength"  : 6,
      "columnDefs": [ {
            "searchable": false,
            "orderable": false,
            "targets": [2,3]
      } ],
      "language": {
        "url": "https://cdn.datatables.net/plug-ins/1.10.19/i18n/Portuguese.json"
      }
    })
   
  })

  $('#updateDiametro').on('show.bs.modal',function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var id = button.data('id') // Extract info from data-* attributes
    var nome = button.data('nome') 
    var modal = $(this)
    modal.find('.modal-title').text('Diametro nº: [' + id + ']')
    modal.find('#id').val(id)
    modal.find('#diametroinput').val(nome)
  })
  
</script>
<?php } ?>
<script>
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('.showIMG')
                .attr('src', e.target.result)
                .width('100%');
        };

        reader.readAsDataURL(input.files[0]);
    }
}
</script>

</body>
</html>