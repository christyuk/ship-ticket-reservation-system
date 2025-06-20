<?php
if(isset($_GET['id'])&&$_GET['id']>0){
    $qry=$conn->query("SELECT * from'reservations'where id ='{$_GET['id']}'");
    if($qry->num_rows>0) {
        foreach($qry->fetch_assoc()as$k=>$v){
            $$k=$v;
        }
    }
}
?>
<style>
    span.select2-selection.select2-selection--single
{border-radius:0;
  padding: 0.25rem
 0.5rem;padding-top:
  0.25rem;padding-right:
  0.5rem;padding-bottom: 
  0.25rem;padding-left: 
  0.5rem;height:auto;
    }
</style>
<div class="cardcard-outlinecard-info">
    <divclass="card-header">
        <h3 class="card-title"><?php echo isset($id) ? "Update ": "Create New "?>Reservation</h3>
    </div>
    <divclass="card-body">
        <formaction=""id="reservation-form">
            <input type="hidden" name="id" value="<?php echo isset($id) ? $id : ''; ?>">

            <?php if (isset($status)): ?>
                <inputtype="hidden"name="status"value="<?phpechoisset($status)? $status :1?>">
            <?phpendif;?>
           <div class="form-grouprow">
                <divclass="col-md-6">
                    <labelfor="schedule_id">Schedule</label>
                    <select name="schedule_id" id="schedule_id" class="custom-select custom-select-smrounded-0 select2">
                        <option value="" disabled<?phpecho !isset($schedule_id)?"selected":''?>></option>
                        <?php
$port=$conn->query("SELECTid,concat(`name`,'[', location',']')as`route` FROM port_list");
$routes=array_column($port->fetch_all(MYSQLI_ASSOC),'route','id');
$vessel=$conn->query("SELECTid,concat(`id_code`,' -'','name)as`vessel`FROM'ship_list");
$vessels=array_column($vessels->fetch_all(MYSQLI_ASSOC),'vessel','id');
$sched_qry=$conn->query("SELECT * FROM'schedules'where date(departure_datetime)>= '".date('Y-m-d') "' order byunix_timestamp(departure_datetime)asc");
while ($row=$sched_qry->fetch_assoc()):
?>
    <optionvalue="<?phpecho$row['id']?>"<?phpechoisset($schedule_id)&&$schedule_id==$row['id'])?'selected':"?>>
        <div><?php echo date("M, d, Y, h:i A",strtotime($row['departure_datetime']))?></div> 
           <div><[Route:<?php echo$routes[$row['port_from_id']].'-'.$routes[$row['port_to_id']]?>]</div>
            <div>[Vessel:$Vessel:<?phpecho$vessels[$row['ship_id']]
?>]</div>
    </option>
<?phpendwhile; ?>
</select>
</div>
</div>
<divclass="form-groupcol-md-8"id="accom-field">
</div>
    <h4>class=Passenger/sDetails</h4>
     <hrclass="border-light">
    <divclass="rowmb-2border-bottomp-item">
        <divclass="col-md-6">
            <divclass="form-group">
                <labelfor=""class="control-laberl">Name</label>
                <input type="text"class="form-control form-control-smrounded-0"name="name[]"value="<?phpechoisset($name)?$name:''?>"required>
            </div>
           <divclass="form-group">
            <labelfor="control-label">Gender</label>
            <selectname="gender[]"id="gender"class="form-controlform-control-sm"required>
                <option<?phpechoisset($gender)&&$gender=="Male"?'selected':''?>>Male</option>
                <option<?phpechoisset($gender)&&$gender=="Female"?'selected':''?>>Female</option>
            </select>
        </div>
<divclass="form-group">
    <labelfor=""class="control-label">DateofBirth</label>
    <inputtype="date"class="form-controlform-control-sm rounded-0"name="dob[]" value="<?php echo isset($dob) ? date('Y-m-d',strtotime($dob)): ''?>"required>
</div>
</div>
<divclass="col-md-6">
    <divclass="form-group">
        <labelfor=""class="control-label">Contact#</label>
        <inputtype="text"class="form-control form-control-smrounded-0" 
               name="contact[]"value="<?phpechoisset($contact)?$contact:''?>"required>
    </div>
   <divclass="form-group">
    <labelfor=""class="control-label">Address</label>
    <textarearows="3"class="form-controlform-control-smrounded-0"name="address[]"value=""required><?php echoisset($address)?$address:''?></textarea>
</div>
<divclass="form-grouprowjustify-content-center">
    <buttonclass="btnbtn-dangerbtn-smbtn-flatrem_item" type="button" onclick="rem_item($(this))"><i class="fa fa-trash"></i>Remove</button>
</div>
</div>
</div>
<divclass="w-100 d-flexjustify-content-centerpy-1">
    <buttonclass="btn btn-primary btn-sm btn-flat" 
            type="button"id="add_passenger">Add Passenger</button>
</div>
<?phpif(isset($status)):?>
<divclass="form-groupcol-md-6">
    <labelfor=""class="control-label">Status</label>
    <selectname="status"id="status"class="form-control form-control-sm" required>
        <optionvalue="0"<?php echoisset($status)&&$status==0?'selected':''?>>Pending</option>
        <optionvalue="1"<?php echoisset($status)&&$status==1?'selected':''?>>Confirmed</option>
        <optionvalue="2"<?php echoisset($status)&&$status==2?'selected':''?>>Cancelled</option>
    </select>
</div>
<?php endif;?>
</form>
<div>
<divclass="card-footer">
