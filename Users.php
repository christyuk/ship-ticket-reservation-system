<?php
$user=$conn->query("SELECT*FROMuserswhereid='".$_settings->userdata('id')."'");
foreach($user->fetch_array()as $k=>$v){
    $meta[$k]=$v;
}
?>
<?phpif($_settings->chk_flashdata('success')):?>
<script>
    alert_toast("<?phpecho$_settings->flashdata('success')?>",'success')
</script>
<?phpendif;?>
<divclass="cardcard-outlinecard-primary">
    <divclass="card-body">
        <divclass="container-fluid">
            <divid="msg"></div>
            <formaction=""id="manage-user">
<inputtype="hidden"name="id"value="<?phpecho$_settings->userdata('id')?>">
<divclass="form-group">
    <labelfor="name">First Name</label>
    <inputtype="text"name="firstname"id="firstname" 
           class="form-control"value="<?phpechoisset($meta['firstname'])?$meta['firstname']:''?>"required>
</div>
<divclass="form-group">
    <labelfor="name">LastName</label>
    <input type="text" name="lastname" id="lastname"class="form-control"value="<?phpechoisset($meta['lastname'])?$meta['lastname']:''?>"required>
</div>
<divclass="form-group">
    <labelfor="username">Username</label>
    <input type="text" name="username"
id="username"class="form-control" value="<?php echo isset($meta['username'])?$meta['username']: ''?>"requiredautocomplete="off">
</div>
<divclass="form-group">
    <labelfor="password">Password</label>
    <inputtype="password"name="password"id="password"class="form-control"value=""autocomplete="off">
    <small><i>Leave this blank if you don't want to change the password</i></small>
</div>
<divclass="form-group">
    <labelfor="class="control-label">Avatar</label>
    <divclass="custom-file">
        <inputtype="file"class="custom-file-inputrounded-circle"id="customFile"name="img"onchange="displayImg(this,$(this))">
        <labelclass="custom-file-label"for="customFile">Choose file</label></div>
</div>
</div>
<divclass="form-groupd-flexjustify-content-center">
    <img src="<?php echovalidate_image(isset($meta['avatar']) ? $meta['avatar']:'')?>"alt="" id="cimg" 
         class="img-fluidimg-thumbnail">
</div>
</form>
</div> 
</div> 
<divclass="card-footer">
    <divclass="col-md-12">
        <divclass="row">
            <buttonclass="btnbtn-smbtn-primary"form="manage-user">Update</button>
        </div>
    </div>
</div>
