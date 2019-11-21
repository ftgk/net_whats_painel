<!-- Content Header (Page header) -->
<link rel="stylesheet" href="<?= base_url() ?>public/plugins/datatables/dataTables.bootstrap.css">
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

    <!-- Default box -->

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Lista de Agendamento</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Contrato</th>
                    <th>Endereço</th>
                    <th>Nome Cliente</th>
                    <th>Tel 1</th>
                    <th>Tel 2</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                <?php  foreach ($agenda as $ag){ ?>
                <tr>
                    <td><?= $ag['contrato'] ?></td>
                    <td><?= $ag['endereco'] ?></td>
                    <td><?= $ag['nome_cliente'] ?></td>
                    <td><?= $ag['telefone'] ?></td>
                    <td><?= $ag['celular'] ?></td>
                    <td>AGUARDANDO</td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
        <!-- /.box-body -->
    </div>

    <!-- /.box -->

</section>
<!-- /.content -->

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
    $("#agpendencias").addClass('active');
    $("#agpendencias1").addClass('active');
</script>
