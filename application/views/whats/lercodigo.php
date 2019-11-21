<head>
    <style type="text/css">
        .style1 {
            text-align: center;
        }
    </style>
</head>
<!-- Content Header (Page header) -->
<section class="content-header">
    <br>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li><a href="#">Whatsapp</a></li>
        <li class="active">Ler Código</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Ler Código Whatstapp</h3>
        </div>
        <div class="box-body">


            <div class="style1">
                <IMG src="http://dev.servtv.com.br/whats/assets/img/whats.jpg" border="1" name="refresh">
                <SCRIPT language="JavaScript" type="text/javascript">
                    var t = 3 // Interval in Seconds
                    image = "http://dev.servtv.com.br/whats/assets/img/whats.jpg" //URL of the Image
                    function Start() {
                        tmp = new Date();
                        tmp = "?"+tmp.getTime()
                        document.images["refresh"].src = image+tmp
                        setTimeout("Start()", t*1000)
                    }
                    Start();
                </SCRIPT>
            </div>

        </div>
        <!-- /.box-footer-->
    </div>
    <!-- /.box -->

</section>
<!-- /.content -->


<script>
    $("#whatsapp").addClass('active');
    $("#whatsapp1").addClass('active');
</script>
