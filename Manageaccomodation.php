<?phprequire_once('../../config.php');
if(isset($_GET['id'])&&$_GET['id']>0){
    $qry=$conn-
>query("SELECT*from`accommodations`whereid='{$_GET['id']}'");
    if($qry->num_rows>0){
        foreach($qry->fetch_assoc()as$k=>$v){
            $$k = $v;
        }
    }
}
?>
<divclass="container-fluid">
    <formaction=""id="accommodation-form">
        <inputtype="hidden"name="id"value="<?phpecho isset($id)?$id:''?>">
      <divclass="form-group">
            <label for="accommodation" class="control-label">Accommodation</label>
            <textarea name="accommodation" id="" cols="30" rows="2"class="form-controlform-no-resize"><?phpechoisset($accommodation)?$accommodation:'';?></textarea>
        </div>
        <divclass="form-group">
            <labelfor="description"class="control-label">Description</label>
            <textarea name="description" id="" cols="30" rows="3" class="form-controlformno-resize"><?phpechoisset($description)?$description:'';?></textarea>
        </div>
        </div>
    </form>
</div>
<script>
$(document).ready(function() {
    $('select2').select2({placeholder:"PleaseSelecthere",width:"relative"})
$('#accommodation-form').submit(function(e){
 e.preventDefault();
    var_this=$(this)
    $('.err-
   msg').remove();start_loader();
    $.ajax({
        url:_base_url +"classes/Master.php?f=save_accommodation",data: newFormData($this[0]),
        cache: false,
        contentType:false,
        processData:false,
        method: 'POST',
        type: 'POST',dataType:'json',
        error:err=>{
            console.log(err);
            alert_toast("Anerroroccurred.",'error');end_loader();
        },
        success:function(resp){
            if(typeof resp =='object'&&resp.status=='success'){location.reload();
            }elseif(resp.status=='failed'&&!!resp.msg){
                varel=$('<div>')
                el.addClass("alertalert-dangererr-msg").text(resp.msg);
                _this.prepend(el)
                el.show('slow')
                end_loader()
            }else{
                alert_toast("Anerroroccurred.",'error');
                end_loader();
                console.log(resp)
            }
        }
    })
 })
})
</script>
