🔹 HOME
<h1class="text-light">Welcometo<?phpecho$_settings->info('name')?></h1>
<hrclass="border-light">
<divclass="row">
  <divclass="col-12col-sm-6col-md-3">
    <divclass="info-box">
      <spanclass="info-box-iconbg-lightelevation-1"><iclass="fasfa-clipboard-list"></i></span>
      <divclass="info-box-content">
        <spanclass="info-box-text">Active Reservations</span>
        <spanclass="info-box-number">
          <?php 
            echonumber_format($reserve);
          ?>
         <?php?>
        </span>
      </div>
     <!--/.info-box-content-->
    </div>
    <!--/.info-box-->
  </div>
  <!--/.col-->
  <divclass="col-12col-sm-6col-md-3">
    <divclass="info-boxmb-3">
      <spanclass="info-box-iconbg-infoelevation-1"><iclass="fasfa-calendar-day"></i></span>
        
      <divclass="info-box-content">
        <spanclass="info-box-text">Active Schedules</span>
        <spanclass="info-box-number">
          <?php
            $sched=$conn->
              query("SELECTsum(id)astotalFROM`schedules`wheredate(departure_datetime) >'".
            echonumber_format($sched);
          ?>
        </span>
      </div>
      <!--/.info-box-content-->
    </div>
   <!--/.info-box-->
      </div>           
</--/.col-->
        </div>
          <divclass="container">

          </div>

🔹INDEX
<?phprequire_once('./config.php');?>
<!DOCTYPEhtml>
<htmllang="en"class=""style="height:auto;">
<?phprequire_once('inc/header.php')?>
<body class="sidebar-mini layout-fixed control-sidebar-slide-open layout-navbar-fixed dark-mode sidebar-mini-md sidebar-mini-xs"data-new-gr-c-s-check-loaded="14.991.0"data-gr-ext-installed=""style="height:auto;">
  <div class="wrapper">
    <?phprequire_once('inc/topBarNav.php')?>
    <?phprequire_once('inc/navigation.php')?>

    <?php$page=isset($_GET['page']) ?$_GET['page']:'home';?
    <!-- ContentWrapper.Containspagecontent-->
    <divclass="content-wrapperbg-darkpt-3" style="min-height:567.854px;"> 
            
      <!--Main content-->
      <section class="contenttext-dark">
        <divclass="container-fluid">
          <?php
            if(!file_exists($page .".php")&&!is_dir($page)) {
              include'404.html';
            }else{
              if(is_dir($page))
                include 
            $page.'/index.php';
              else 
                include$page .'.php';
              }
          ?>
        </div>
     </section>
    <!--/.content-->
    <divclass="modalfade"id="confirm_modal"role="dialog">
      <divclass="modal-dialogmodal-mdmodal-dialog-centered"role="document">
        <divclass="modal-content">
          <divclass="modal-header">
            <h5class="modal-title">Confirmation</h5>
          </div>
          <divclass="modal-body">
            <divid="delete_content"></div>
          </div>
          <divclass="modal-footer">
            <buttontype="button"class="btnbtn-primary"id="confirm"onclick="">Continue</button>
            <buttontype="button"class="btn btn-secondary"data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

              
🔹 login.php
<?phprequire_once('../config.php')?>
<!DOCTYPEhtml>
<htmllang="en"class="" style="height:auto;">
<?phprequire_once('inc/header.php') ?>
<bodyclass="hold-transitionlogin-pagedark-mode">
<script>
  start_loader()
</script>
<style>
  body {
    background-image:url("<?phpechovalidate_image($_settings->info('cover')) ?>");
    background-size:cover;
    background-repeat:no-repeat;
  }
  .login-title{
    text-shadow:1px1px black
  }
</style>
<h1 class="text-centerpy-5login-title">
  <b><?phpecho$_settings->info('name')?></b>
</h1>
<divclass="login-box">
  <!--/.login-logo -->
  <div class="cardcard-outlinecard-primary">
    <divclass="card-headertext-center">
      <ahref="./"class="h1"><b>Login</b></a>
    </div>
    <divclass="card-body">
      <pclass="login-box-msg">Signintostartyoursession</p>
      <formid="login-form"action=""method="post">
        <divclass="input-groupmb-3">
          <input type="text"class="form-control"name="username"placeholder="Username">
          <divclass="input-group-append">
            <divclass="input-group-text">
              <spanclass="fasfa-user"></span>
            </div>
          </div>
        </div>
        <divclass="input-groupmb-3">
          <inputtype="password"class="form-control"name="password"placeholder="Password">
          <divclass="input-group-append">
            <divclass="input-group-text">
              <spanclass="fasfa-lock"></span>
            </div>
          </div>
        </div>

    

