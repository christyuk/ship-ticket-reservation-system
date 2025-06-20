<?php
if(isset($_GET['id'])&&$_GET['id'] > 0){
    $qry = $conn->query("SELECT * from 'reservations' where id='{$_GET['id']}'");
    if($qry->num_rows>0) {
  $sched_qry=$conn->query("SELECT * FROM 'schedules' where date(departure_datetime)>'" .date('Y-m-d') . "' order byunix_timestamp(departure_datetime) asc");
while($row=$sched_qry->fetch_assoc()):
?>
    <optionvalue="<?phpecho$row['id']?>"
        <?phpechoisset($schedule_id)&&$schedule_id==$row['id']?'selected':''?>>
      <div><?php echo date("M d, Y h:iA",strtotime($row['departure_datetime']))?></div>
    <div>[Route:<?php echo
        $routes[$row['port_from_id']] .'-'. $routes[$row['port_to_id']]?>]</div>
       <div>[Vessel:<?phpecho echo$vessels[$row['ship_id']] 
        ?>]</div>
    </option>
<?php endwhile; ?>
</select>
</div>
<divclass="form-groupcol-md-8"id="accom-field">
</div>
    <h4>class=Passenger/sDetails</h4>
    <hrclass="border-light">
    <divclass="rowmb-2border-bottomp-item">
        <divclass="col-md-6">
            <divclass="form-group">
                <labelfor=""class="control-label">Name</label>
                <input type="text" class="form-control form-control-smrounded-0"name="name[]" value="<?phpechoisset($name:"?>" required>
            </div>
         <divclass="form-group">
            <labelfor=""class="control-label">Gender</label>
            <selectname="gender[]"id="gender"class="form-controlform-control-sm"required>
                <option<?phpechoisset($gender)&&$gender=="Male"?'selected':'';?>>Male</option>
                <option<?phpechoisset($gender)&&$gender=="Female"?'selected':''?>>Female</option>
            </select>
        </div>
        <divclass="form-group">
            <labelfor=""class="control-label">Date of Birth</label>
            <inputtype="date"class="form-controlform-control-sm rounded-0" name="dob[]" value="<?php echo isset($dob) ? date('Y-m-d',strtotime($dob)):"?>" required>
        </div>
        </div>
        <divclass="col-md-6">
            <divclass="form-group">
                <labelfor=""class="control-label">Contact#</label>
                <inputtype="text"class="form-controlform-control-smrounded-0"name="contact[]"value="<?phpechoisset($contact)?$contact:''?>"required>
            </div>
        <divclass="form-group">
            <labelfor=""class="control-label">Address</label>
            <textarearows="3"class="form-controlform-control-smrounded-0"name="address[]"value=""required><?php echoisset($address)?$address:''"?></textarea>
        </div>
        <divclass="form-grouprowjustify-content-center">
            <buttonclass="btnbtn-dangerbtn-smbtn-flatrem_item" type="button" onclick="rem_item($(this))"><i class="fa fa-trash"></i>Remove</button>
        </div>
    </div>
</div>
<divclass="w-100d-flexjustify-content-centerpy-1">
    <button class="btn btn-primary btn-sm btn-flat"
type="button"id="add_passenger">AddPassenger</button>
</div>
<?phpif(isset($status)):?>
    <divclass="form-groupcol-md-6">
        <labelfor=""class="control-label">Status</label>
        <selectname="status"id="status" class="form-control form-control-sm" required>
            <option value="0"<?php echoisset($status)&&$status==0?'selected':''?>>Pending</option>
            <option value="1"<?php echoisset($status)&&$status==1?'selected':''?>>Confirmed</option>
            <option value="2"<?php echoisset($status)&&$status==2?'selected':''?>>Cancelled</option>
        </select>
    </div>
<?phpendif;?>
</form>
</div>
<divclass="card-footer">
    <buttonclass="btnbtn-flatbtn-primary"form="reservation-form">Save</button>
    <aclass="btnbtn-flatbtn-default"href="?page=reservations">Cancel</a>
</div>

