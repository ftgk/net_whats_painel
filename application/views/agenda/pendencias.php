<!-- DataTables -->
<link rel="stylesheet" href="<?= base_url() ?>public/plugins/datatables/dataTables.bootstrap.css">

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        <br>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li><a href="#">Agenda</a></li>
        <li class="active">Agenda Futura</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Agenda futura</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Contrato</th>
                            <th>Nome do Cliente</th>
                            <th>Telefone 1</th>
                            <th>Telefone 2</th>
                            <th>Status</th>
                            <th>Opções</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php   foreach ($agenda as $agenda) { ?>
                            <tr>
                                <td><?= $agenda['id'] ?></td>
                                <td><?= $agenda['contrato'] ?></td>
                                <td><?= $agenda['nome_cliente'] ?></td>
                                <td><?= $agenda['telefone'] ?></td>
                                <td><?= $agenda['celular'] ?></td>
                                <td><?php
                                    if ($agenda['ok'] == 1){
                                        echo 'PRONTO';
                                    }else{
                                        echo 'INDISPONIVEL';
                                    } ?></td>
                                <td><a href="<?php site_url('') ?>editcontrato/<?= $agenda['id'] ?>">Editar</a></td>
                            </tr>
                       <?php } ?>
                        </tbody>
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


<!-- DataTables -->
<script src="<?= base_url() ?>public/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>public/plugins/datatables/dataTables.bootstrap.min.js"></script>
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
    $("#tables").addClass('active');
    $("#data-tables").addClass('active');
</script>
