<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Paro x Paro</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="vistas/assets/images/favicon.png">
    <title></title>
    <!-- Bootstrap Core CSS -->
    <link href="vistas/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="vistas/css/personalizados.css">



    <!-- PLUGINS CSS -->
    <link href="vistas/assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="vistas/assets/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href="vistas/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <link href="vistas/assets/plugins/css-chart/css-chart.css" rel="stylesheet">
    <!-- Vector CSS -->
    <link href="vistas/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="vistas/css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="vistas/css/colors/green-dark.css" id="theme" rel="stylesheet">

    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <script src="vistas/assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="vistas/assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="vistas/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="vistas/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="vistas/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="vistas/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="vistas/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="vistas/assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!--stickey kit -->
    <script src="vistas/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="vistas/assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <script src="vistas/assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="vistas/js/custom.min.js"></script>
    <script src="vistas/assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>

</head>

<body class="fix-header fix-sidebar card-no-border mini-sidebar">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">

        <?php

include "modulos/cabezote.php";

include "modulos/menu.php";
include "modulos/inicio.php";

if (isset($_GET["ruta"])) {
    if ($_GET["ruta"] == "inicio" ||
        $_GET["ruta"] == "usuarios" ||
        $_GET["ruta"] == "categorias" ||
        $_GET["ruta"] == "productos" ||
        $_GET["ruta"] == "clientes" ||
        $_GET["ruta"] == "venta" ||
        $_GET["ruta"] == "crear-venta" ||
        $_GET["ruta"] == "reportes" ) {
        include "modulos/".$_GET["ruta"].".php";
    }
}


include "modulos/footer.php";

?>



    </div>

    <script src="vistas/js/plantilla.js"></script>
</body>

</html>