<?php
$cur_tab = $this->uri->segment(2) == '' ? 'dashboard' : $this->uri->segment(2);
?>

<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= base_url() ?>public/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?= ucwords($this->session->userdata('name')); ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Buscar...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li id="dashboard" class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Painel de Controle</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li id="dashboard1"><a href="<?= base_url('admin/dashboard'); ?>"><i class="fa fa-circle-o"></i>
                            Inicio</a></li>
                </ul>
            </li>
        </ul>
        <ul class="sidebar-menu">
            <li id="whatsapp" class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Whatsapp</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li id="whatsapp1"><a href="<?= base_url('whats/lc'); ?>"><i class="fa fa-circle-o"></i>
                            Ler Código</a></li>
                </ul>
            </li>
        </ul>
        <ul class="sidebar-menu">
            <li id="agpendencias" class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Agenda</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li id="agpendencias1"><a href="<?= base_url('agenda/pendencias'); ?>"><i class="fa fa-circle-o"></i>
                            Agenda Futura</a></li>
                </ul>
                <ul class="treeview-menu">
                    <li id="agpendencias1"><a href="<?= base_url('agenda'); ?>"><i class="fa fa-circle-o"></i>
                            Pronto Envio</a></li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>


<script>
    $("#<?= $cur_tab; ?>").addClass('active');
</script>
