<?php
if(isset($_GET['id'])&&$_GET['id']>0){
    $user=$conn->query("SELECT * FROM users where id 
='{$_GET['id']}'");
    foreach($user->fetch_array()as $k=>$v){
        $meta[$k]=$v;
    }
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
                <input type="hidden" name="id" value="<?php echoisset($meta['id']) ?$meta['id'] : '' ?>">
            <divclass="form-group col-6">
                    <labelfor="name">FirstName</label>
                    <input type="text" name="firstname" id="firstname"class="form-control"
                           value="<?phpechoisset($meta['firstname'])?$meta['firstname']:'' ?>" required>
                </div>
            <divclass="form-group col-6">
                    <labelfor="name">LastName</label>
                    <input type="text" name="lastname" id="lastname"class="form-control"
                           value="<?phpechoisset($meta['lastname'])?$meta['lastname']:''?>"required>
                </div>
               <divclass="form-group col-6">
                    <labelfor="username">Username</label>
                    <input type="text" name="username" id="username"class="form-control"
                           value="<?php echo isset($meta['username']) ? $meta['username']:'' ?>"requiredautocomplete="off">
                </div>
                <div class="form-group col-6">
                <labelfor="password">Password</label>
                    <inputtype="password"name="password"id="password"class="form-control" value="" autocomplete="off"
                           <?php echo isset($meta['id']) ?"'':'required'?>>
               <?phpif(isset($_GET['id'])):?>
    <small><i>Leavethisblankif you don't want to changethe password.</i></small>
<?phpendif; ?>
</div>
</divclass="form-group col-6">
    <labelfor="type">LoginType</label>
    <selectname="type"id="type"class="custom-select">
        <optionvalue="1"<?phpechoisset($meta['type'])&&$meta['type']==1?'selected':''?>>Administrator</option>
        <optionvalue="2"<?phpechoisset($meta['type'])&&$meta['type']==2?'selected':'' ?>>Staff</option>
    </select>
</div>
