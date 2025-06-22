<?phpif($_settings->chk_flashdata('success')):?>
<script>
    alert_toast("<?phpecho$_settings->flashdata('success')?>",'success')
</script>
<?phpendif;?>
<divclass="cardcard-outlinecard-primary">
    <divclass="card-header">
        <h3class="card-title">ListofPorts</h3>
        <divclass="card-tools">
            <a href="javascript:void(0)" id="create_new" class="btn btn-flat btn-primary">
                <spanclass="fas fa-plus"></span>Add New</a>
        </div>
    </div>
    <divclass="card-body">
        <divclass="container-fluid">
            <tableclass="tabletable-borderedtable-stripped">
                <colgroup>
                    <colwidth="5%">
                    <colwidth="25%">
                    <colwidth="25%">
                    <colwidth="25%">
                    <colwidth="20%">
                </colgroup>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>DateCreated</th>
                        <th>Name</th>
                        <th>Location</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $i=1;
                        $qry=$conn-orderby'name'asc"
               >query("SELECT * FROM`port_list`while($row=$q?>ry->fetch_assoc()):
              <tr>
          <tdclass="text-center"><?phpecho$i++;?></td>
                        <td><?phpechodate("Y-m-d H:i",strtotime($row['date_created']))?></td>
                        <td><?phpecho$row['name'] ?></td>
                        <td><?phpecho$row['location']?></td>
                        <tdalign="center">
                            <buttontype="button"class="btn btn-flatbtn-smdropdown-toggledropdown-icon"data-toggle="dropdown">
                                Action
                                <spanclass="sr-only">ToggleDropdown</span>
                            </button>
                            <divclass="dropdown-menu"role="menu">
                                <a class="dropdown-item edit_data"href="javascript:void(0)" data-id="<?php echo $row['id'] ?>">
                                    <span class="fa fa-edit text-primary"></span> Edit</a>
                                <divclass="dropdown-divider"></div>
                                <a class="dropdown-item 
                             delete_data"href="javascript:void(0)"data-id="<?phpecho$row['id']?>"><spanclass="fafa-trashtext-danger"></span>Delete</a>
                            </div>
                        </td>
                    </tr>
                    <?phpendwhile;?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
$(document).ready(function(){
    $('.delete_data').click(function(){
        _conf("AreyousuretodeletethisPortpermanently?","delete_category",[$(this).attr('data-id')])
    })
  $('#create_new').click(function(){
        uni_modal("<iclass='fafa-plus'></i> AddNewPort","maintenance/manage_port.php","mid-large")
})
$('.edit_data').click(function(){
uni_modal("<i class-'fa fa-plus'></i> Add NewPort","maintenance/manage_port.php?id="+$(this).attr('data-id')," "mid-large")
   })
$('.table').dataTable();
})
function
delete_category($id)
{
start_loader();
     $.ajax({
        url:_base_url_+"classes/Master.php?f=delete_port",method:"POST",
        data:{id:$id},
        dataType:"json",
        error:err =>
            {
            console.log(err);
            alert_toast("Anerroroccurred.","error');
            end_loader();
        },
        success:function(resp){
            if(typeofresp=='object'&&resp.status=='success') 
            {location.reload();
            }else{
                alert_toast("Anerroroccurred.",'error');
                end_loader();
            }
        }
    })
}
</script>
