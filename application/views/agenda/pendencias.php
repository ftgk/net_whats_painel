<link rel="stylesheet" href="<?= base_url() ?>public/plugins/datatables/dataTables.bootstrap.css">
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        <div class="float-right"><a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#Modal_Add"><span class="fa fa-plus"></span> Add Nova</a></div>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li><a href="#">Agenda</a></li>
        <li class="active">Agenda Futura</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

  <!-- Default box -->
  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Agendas Pendentes</h3>

  </div>
  <div class="box-body">

    <table class="table table-striped" id="mydata">
        <thead>
            <tr>
                <th>ID</th>
                <th>Contrato</th>
                <th>Nome do Cliente</th>
                <th>Telefone 1</th>
                <th>Telefone 2</th>
                <th style="text-align: right;">Ações</th>
            </tr>
        </thead>
        <tbody id="show_data">

        </tbody>
    </table>

</div>
<!-- /.box -->

</section>
<!-- /.content -->

<!-- MODAL ADD -->
<form>
    <div class="modal fade" id="Modal_Add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Nova Agenda</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
        <div class="form-group row">
            <label class="col-md-2 col-form-label">Id Cliente</label>
            <div class="col-md-10">
              <input type="text" name="id" id="id" class="form-control" placeholder="Id Cliente">
          </div>
      </div>
      <div class="form-group row">
        <label class="col-md-2 col-form-label">Contrato</label>
        <div class="col-md-10">
          <input type="text" name="contrato" id="contrato" class="form-control" placeholder="Contrato">
      </div>
  </div>
  <div class="form-group row">
    <label class="col-md-2 col-form-label">Nome do Cliente</label>
    <div class="col-md-10">
      <input type="text" name="nome_cliente" id="nome_cliente" class="form-control" placeholder="Nome do Cliente">
  </div>
</div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
    <button type="button" type="submit" id="btn_save" class="btn btn-primary">Salvar</button>
</div>
</div>
</div>
</div>
</form>
<!--END MODAL ADD-->

<!-- MODAL EDIT -->
<form>
    <div class="modal fade" id="Modal_Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Editar Cliente</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
        <div class="form-group row">
            <label class="col-md-2 col-form-label">Id Cliente</label>
            <div class="col-md-10">
              <input type="text" name="id_edit" id="id_edit" class="form-control" placeholder="Id Cliente" readonly>
          </div>
      </div>
      <div class="form-group row">
        <label class="col-md-2 col-form-label">Contrato</label>
        <div class="col-md-8">
          <input type="text" name="contrato_edit" id="contrato_edit" class="form-control" placeholder="Contrato">
      </div>
    <label class="col-md-1 col-form-label">Pronto ?</label>
    <div class="col-md-1">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
  </div>
</div>
<div class="form-group row">
    <label class="col-md-2 col-form-label">Nome Cliente</label>
    <div class="col-md-10">
      <input type="text" name="nome_edit" id="nome_edit" class="form-control" placeholder="Nome Cliente">
  </div>
</div>
<div class="form-group row">
    <label class="col-md-2 col-form-label">Telefone 1</label>
    <div class="col-md-4">
      <input type="text" name="telefone_edit" id="telefone_edit" class="form-control" placeholder="Telefone 1">
  </div>
  <label class="col-md-2 col-form-label">Telefone 2</label>
  <div class="col-md-4">
      <input type="text" name="celular_edit" id="celular_edit" class="form-control" placeholder="Telefone 2">
  </div>
</div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
    <button type="button" type="submit" id="btn_update" class="btn btn-primary">Atualizar</button>
</div>
</div>
</div>
</div>
</form>
<!--END MODAL EDIT-->

<!--MODAL DELETE-->
<form>
    <div class="modal fade" id="Modal_Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Excluir Agenda</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
         <strong>Tem certeza de que deseja excluir este registro?</strong>
     </div>
     <div class="modal-footer">
        <input type="hidden" name="agendap_id_excluir" id="agendap_id_excluir" class="form-control">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
        <button type="button" type="submit" id="btn_delete" class="btn btn-primary">Sim</button>
    </div>
</div>
</div>
</div>
</form>
<!--END MODAL DELETE-->


<script src="<?= base_url() ?>public/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>public/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        show_product(); //call function show all product
        
        $('#mydata').dataTable();

        //function show all product
        function show_product(){
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo site_url('agenda/agendap_data')?>',
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                        '<td>'+data[i].id+'</td>'+
                        '<td>'+data[i].contrato+'</td>'+
                        '<td>'+data[i].nome_cliente+'</td>'+
                        '<td>'+data[i].telefone+'</td>'+
                        '<td>'+data[i].celular+'</td>'+
                        '<td style="text-align:right;">'+
                        '<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit" data-id="'+data[i].id+'" data-contrato="'+data[i].contrato+'" data-nome_cliente="'+data[i].nome_cliente+'" data-telefone="'+data[i].telefone+'" data-celular="'+data[i].celular+'">Editar</a>'+' '+
                        '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-id="'+data[i].id+'">Excluir</a>'+
                        '</td>'+
                        '</tr>';
                    }
                    $('#show_data').html(html);
                }

            });
        }

        //Save product
        $('#btn_save').on('click',function(){
            var id = $('#id').val();
            var contrato = $('#contrato').val();
            var nome_cliente        = $('#nome_cliente').val();
            var telefone        = $('#telefone').val();
            var celular        = $('#celular').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('agenda/agendap_save')?>",
                dataType : "JSON",
                data : {id:id , contrato:contrato, nome_cliente:nome_cliente, telefone:telefone, celular:celular},
                success: function(data){
                    $('[name="id"]').val("");
                    $('[name="contrato"]').val("");
                    $('[name="nome_cliente"]').val("");
                    $('[name="telefone"]').val("");
                    $('[name="celular"]').val("");
                    $('#Modal_Add').modal('hide');
                    show_product();
                }
            });
            return false;
        });

        //get data for update record
        $('#show_data').on('click','.item_edit',function(){
            var id = $(this).data('id');
            var contrato = $(this).data('contrato');
            var nome_cliente        = $(this).data('nome_cliente');
            var telefone        = $(this).data('telefone');
            var celular        = $(this).data('celular');

            $('#Modal_Edit').modal('show');
            $('[name="id_edit"]').val(id);
            $('[name="contrato_edit"]').val(contrato);
            $('[name="nome_edit"]').val(nome_cliente);
            $('[name="telefone_edit"]').val(telefone);
            $('[name="celular_edit"]').val(celular);
        });

        //update record to database
        $('#btn_update').on('click',function(){
            var id = $('#id_edit').val();
            var contrato = $('#contrato_edit').val();
            var nome_cliente        = $('#nome_edit').val();
            var telefone        = $(this).data('telefone_edit');
            var celular        = $(this).data('celular_edit');
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('agenda/agendap_update')?>",
                dataType : "JSON",
                data : {id:id , contrato:contrato, nome_cliente:nome_cliente, telefone:telefone, celular:celular},
                success: function(data){
                    $('[name="id_edit"]').val("");
                    $('[name="contrato_edit"]').val("");
                    $('[name="nome_edit"]').val("");
                    $('[name="telefone_edit"]').val("");
                    $('[name="celular_edit"]').val("");
                    $('#Modal_Edit').modal('hide');
                    show_product();
                }
            });
            return false;
        });

        //get data for delete record
        $('#show_data').on('click','.item_delete',function(){
            var id = $(this).data('id');
            
            $('#Modal_Delete').modal('show');
            $('[name="agendap_id_excluir"]').val(id);
        });

        //delete record to database
        $('#btn_delete').on('click',function(){
            var id = $('#agendap_id_excluir').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('agenda/agendap_delete')?>",
                dataType : "JSON",
                data : {id:id},
                success: function(data){
                    $('[name="agendap_id_excluir"]').val("");
                    $('#Modal_Delete').modal('hide');
                    show_product();
                }
            });
            return false;
        });

    });

</script>

<script>
    $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false
        });
    });
</script>
<script>
    $("#agpendencias").addClass('active');
    $("#agpendencias1").addClass('active');
</script>
