<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        <br>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li><a href="#">Agenda</a></li>
        <li class="active">Editar Contrato</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box ">
        <div class="box-header with-border">
            <h3 class="box-title">Editar Contrato</h3>

        </div>
        <div class="box-body">
            <?php if (isset($msg) || validation_errors() !== ''): ?>
                <div class="alert alert-warning alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-warning"></i> Alert!</h4>
                    <?= validation_errors(); ?>
                    <?= isset($msg) ? $msg : ''; ?>
                </div>
            <?php endif; ?>

            <?php echo form_open(base_url('agenda/salvarcontrato/' . $dadoscli[0]['id']), 'class="form-horizontal"') ?>
            <div class="row">
                <div class="form col-sm-12">
                    <label for="Nome do Cliente">Nome do Cliente</label>
                    <input type="text" class="form-control" name="nome_cliente"  id="nome_cliente" value="<?= $dadoscli[0]['nome_cliente'] ?>" placeholder="Nome do Cliente">
                </div>
            </div>
            <div class="row">
            <div class="form col-sm-3">
                <label for="Id">ID</label>
                <input type="text" class="form-control" name="id"  id="id" value="<?= $dadoscli[0]['id'] ?>" placeholder="Id" readonly>
            </div>
            <div class="form col-sm-3">
                <label for="Contrato">Contrato</label>
                <input type="text" class="form-control" name="contrato"  id="contrato" value="<?= $dadoscli[0]['contrato'] ?>" placeholder="Contrato">
            </div>
            <div class="form col-sm-3">
                <label for="Data">Data</label>
                <input type="text" class="form-control" name="data"  id="data" value="<?= date("d/m/Y", strtotime($dadoscli[0]['data'])) ?>" placeholder="Data">
            </div>
            <div class="form col-sm-3">
                <label for="Horario">Horario</label>
                <input type="text" class="form-control" name="horario"  id="horario" value="<?= $dadoscli[0]['horario'] ?>" placeholder="Horario">
            </div>
            <div class="form col-sm-8">
                <label for="Endereço">Endereço</label>
                <input type="text" class="form-control" name="endereço"  id="endereço" value="<?= $dadoscli[0]['endereco'] ?>" placeholder="Endereço">
            </div>
            <div class="form col-sm-4">
                <label for="Bairro">Bairro</label>
                <input type="text" class="form-control" name="bairro"  id="bairro" value="<?= $dadoscli[0]['bairro'] ?>" placeholder="Bairro">
            </div>
            <div class="form col-sm-6">
                <label for="Telefone 1">Telefone 1</label>
                <input type="text" class="form-control" name="telefone1" id="telefone1" value="<?= $dadoscli[0]['telefone'] ?>" placeholder="Telefone 1">
            </div>
            <div class="form col-sm-6">
                <label for="Telefone 2">Telefone 2</label>
                <input type="text" class="form-control" name="telefone2" id="telefone2" value="<?= $dadoscli[0]['celular'] ?>" placeholder="Telefone 2">
            </div>
            <div class="col-sm-4">
                <input type="checkbox" class="form-check-input" name="iniciarenvio" id="iniciarenvio" value="1"
                <?php if ($dadoscli[0]['ok'] == 1){ echo "checked"; }; ?> >
                <label class="form-check-label" for="iniciarenvio">Pode Iniciar o Envio</label>
            </div>
            </div>
        <div class="form">
            <div class="col-md-11">
                <input type="submit" name="submit" value="Atualizar Contrato" class="btn btn-info pull-right">
            </div>
        </div>
        </div>
        <?php echo form_close(); ?>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
    </div>

</section>
<!-- /.content -->


<script>
    $("#examples").addClass('active');
    $("#blank-page").addClass('active');
</script>
