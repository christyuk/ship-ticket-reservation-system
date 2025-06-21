<?php
//require_once('sess_auth.php'); 

?>
<head>
  <metacharset="utf-8">
  <metaname="viewport"content="width=device-width,initial-scale=1">
<title><?phpecho$_settings->info('title')!=false?$_settings->info('title').'|':"
  ?><?phpecho$_settings->info('name')?></title>
  <linkrel="icon"href="<?phpechovalidate_image($_settings->info('logo'))?>"/>
<!--GoogleFont:SourceSansPro-->
  <!--<link
  rel="stylesheet"href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">-->
 <!--FontAwesome-->
  <link rel="stylesheet" href="<?php echo base_url ?>plugins/fontawesome-free/css/all.min.css">
  <!--Ionicons-->
  <!--<link rel="stylesheet"href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">-->
  <!--TempusdominusBootstrap4-->
  <link rel="stylesheet" href="<?php echo base_url ?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Data Tables -->
  <link rel="stylesheet" href="<?php echo base_url ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url ?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url ?>plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Select2 -->
  <linkrel="stylesheet" href="<?phpechobase_url?>plugins/select2/css/select2.min.css">
  <linkrel="stylesheet" href="<?php echo base_url ?>plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
<!--icheck-->
<link rel="stylesheet" href="<?php echo base_url ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<!--JQVMap-->
<linkrel="stylesheet" href="<?phpechobase_url?>plugins/jqvmap/jqvmap.min.css">
<!--Themestyle-->
<linkrel="stylesheet" href="<?phpechobase_url?>dist/css/adminlte.min.css">
<linkrel="stylesheet" href="<?phpechobase_url?>dist/css/custom.css">
<linkrel="stylesheet" href="<?phpechobase_url ?>assets/css/styles.css">
<!--overlayScrollbars-->
<linkrel="stylesheet" href="<?phpechobase_url ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
<!--daterangepicker-->
<linkrel="stylesheet" href="<?phpechobase_url ?>plugins/daterangepicker/daterangepicker.css">
<!--summernote-->
<link rel="stylesheet" href="<?php echo base_url ?>plugins/summernote/summernote-bs4.min.css">
<!--SweetAlert2-->
<linkrel="stylesheet"href="<?phpechobase_url ?>plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
<styletype="text/css">/*Chart.js*/
@keyframes chartjs-render-animation{from {opacity:99}to{opacity:1}}.chartjs-render-monitor{animation:chartjs-render-animation 1ms}.chartjs-size-monitor,.chartjs-size-monitor-expand,
.chartjs-size-monitor-shrink{position:absolute;direction:ltr;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none:visibility:hidden;z-index:-1}.chartjs-size-monitor-expand>
div{position:absolute;width:1000000px;height:1000000px;left:0;top:0}. chartjs-size-monitor-shrink>div{position:absolute;width:200%;height:200%;left:0;top:0}
</style>
