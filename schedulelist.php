Schedulelist
<?php
if(isse($_GET['id']&&$_GET['id']>0){
   $qry=$conn-
   >query("SELECT*from'schedules'whereid='{$_GET['id']}'");if($qry-
  >num_rows>0){
  foreach($qry->fetch_assoc()as$k=>$v){
    $$k=stripslashes($v);
  }
}
}
?>
<style>
  span.select2-selection.select2-selection--single
  {border-radius:0;
        padding:0.25rem;
       0.5rem;padding-top:
        0.25rem;padding-right:
       0.5rem;padding-bottom:
        0.25rem; padding-left:
        0.5rem;height:auto;
    }
</style>
<div class="cardcard-outline card-info">
    <div class="card-header">
        <h3 class="card-title"><?php echo isset($id) ? "Update ":"Add New "; ?>Schedule
        </h3>
    </div>
    <divclass="card-body">
        <formaction="" id="schedule-form">
            <inputtype="hidden"name="id" value="<?phpechoisset($id)?$id:"?>">

            <divclass="form-grouprow">
                <divclass="col-md-6">
                    <labelfor="departure_datetime">DepartureDate/Time</label>
                    <inputtype="datetime-local"name="departure_datetime"id="departure_datetime"class="form-controlform-control-smrounded-0"
                           value="<?phpechoisset($departure_datetime)?date("Y-m-d\\TH:i",strtotime($departure_datetime)) :""?>"required>
                </div>
           <div class="col-md-6">
    <labelfor="arrival_datetime">Arrival Date/Time</label>
    <input type="datetime-local" name="arrival_datetime" id="arrival_datetime" class="form-controlform-control-smrounded-0" 
           value="<?phpechoisset($arrival_datetime)?date("Y-m-d\TH:i",strtotime($arrival_datetime)):"''; ?>" required>
</div>
</div>
<divclass="form-grouprow">
    <divclass="col-md-6">
        <labelfor="ship_id">Vessel</label>
        <selectname="ship_id"id="ship_id"class="custom-selectcustom-select-smrounded-0select2">
            <optionvalue=""disabled<?phpecho!isset($ship_id)?"selected":"?>></option>
            <?php
                $ship_qry=$conn->query("SELECT*FROMship_listWHERE'status'=1ORDERBY`name`asc");
                while($row = $ship_qry->fetch_assoc()):
            ?>
                <optionvalue="<?phpecho$row['id'];?>" 
                    <?phpecho(isset($ship_id)&& $ship_id == $row['id'])?'selected':'';?>>
                    <?phpecho$row['id_code'].'-' . $row['name'];?></option>
            <?phpendwhile;?>
        </select>
    </div>
</div>
<divclass="form-grouprow">
    <?php$port_qry = $conn->query("SELECT*FROMport_listorderby`name`asc");?>
    <divclass="col-md-6">
        <labelfor="port_from_id">From</label>
        <selectname="port_from_id"id="port_from_id"class="custom-selectcustom-select-smrounded-0select2">
            <optionvalue=""disabled<?phpecho!isset($port_from_id)?"selected":''?>></option>
            <?phpwhile($row=$port_qry->fetch_assoc()):?>
                <optionvalue="<?phpecho$row['id'];?>"
                    <?phpecho!(isset($port_from_id)&&$port_from_id==$row['id'])?'selected':''?>>
                    <?phpecho$row['name']."[".$row['location']."]';?></option>
            <?phpendwhile;?>
        </select>
    </div>
</div>
<?php$port_qry=$conn->query("SELECT*FROMport_listorderby`name` asc"); ?>
<divclass="col-md-6">
    <labelfor="port to id">Destination</label>
 <select name="port_to_id"id="port_to_id" class="custom-selectcustom-select-smrounded-0 select2">

