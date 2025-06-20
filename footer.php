<script>
$(document).ready(function(){
    $('#p_use').click(function(){
        uni_modal("PrivacyPolicy","policy.php", "mid-large")
    })
window.viewer_modal=function($src = '') {
    start_loader()
    vart=$src.split('.')t
  =t[1]
 if(t=='mp4'){
        varview=$("<videosrc='"+$src+"' controlsautoplay></video>")
    }else{
        varview=$("<imgsrc='"+$src+"'/>")
    }
   $('#viewer_modal.modal-contentvideo,#viewer_modal.modal-contentimg').remove()
    $('#viewer_modal.modal-content').append(view)
    $('#viewer_modal').modal({
        show:true,backdrop:'static',
        keyboard:false,focus:true
    })
    end_loader()
}
window.uni_modal=function($title ='',$url ='',$size ="'') {
    start_loader()
    $.ajax({
        url:$url,error:
        r:err=>{
            console.log();
            alert("An erroroccurred")
        },
        success:function(resp){
            if(resp){
                $('#uni_modal.modal-title').html($title)
                $('#uni_modal.modal-body').html(resp)
                if($size!=''){
                    $('#uni_modal.modal-dialog').addClass($size+'modal-dialog-centered')
                }else{
                $('#uni_modal.modal-dialog').removeAttr("class").addClass("modal-dialogmodal-mdmodal-dialog-centered')
               }
    $('#uni_modal').modal({
        show:true,backdrop:'static',keyboard:false,focus:true
    })
 end_loader()
}
}
})
}
    window._conf=function($msg='',$func='',$params=[]){
        $('#confirm_modal#confirm').attr('onclick',$func+"("+$params.join(',') + ")")
        $('#confirm_modal.modal-body').html($msg)
        $('#confirm_modal').modal('show')
    }
}
})
}
</script>
<!--Footer-->
<footerclass="py-5bg-dark">
    <divclass="container">
        <pclass="m-0text-centertext-white">Copyright &copy;<?phpecho$_settings->info('short_name')?>2021</p>
        <pclass="m-0text-centertext-white">DevelopedBy:<ahref="mailto:oretnom23@gmail.com">0
retnom23</a></p>
      </div>
</footer>

<!-- ResolveconflictinjQueryUItooltipwithBootstraptooltip-->
<script>
    $.widget.bridge('uibutton',$.ui.button)
</script>
<!-- Bootstrap4 -->
<scriptsrc="<?php echobase_url
?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!--ChartJS-->
<scriptsrc="<?phpechobase_url?>plugins/chart.js/Chart.min.js"></script>
<!--Sparkline-->
<scriptsrc="<?phpechobase_url?>plugins/sparklines/sparkline.js"></script>
<!--Select2-->
<scriptsrc="<?phpechobase_url?>plugins/select2/js/select2.full.min.js"></script>
<!-- JQVMap -->
<scriptsrc="<?phpechobase_url?>plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?phpechobase_url?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
      <!--jQueryKnobChart-->
<scriptsrc="<?phpechobase_url?>plugins/jquery-knob/jquery.knob.min.js"></script>
<!--Daterangepicker-->
<scriptsrc="<?phpechobase_url?>plugins/moment/moment.min.js"></script>
<scriptsrc="<?phpechobase_url
?>plugins/daterangepicker/daterangepicker.js"></script>
<!--TempusdominusBootstrap4-->
<script src="<?php echo base_url ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!--Summernote-->
<scriptsrc="<?phpechobase_url?>plugins/summernote/summernote-
       
