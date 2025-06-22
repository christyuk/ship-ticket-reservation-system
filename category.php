<?phpif($_settings->chk_flashdata('success')):?>
<script>
    alert_toast("<?phpecho$_settings->flashdata('success')?>",'success')
</script>
<?phpendif;?>
<divclass="cardcard-outlinecard-primary">
    <divclass="card-header">
        <h3class="card-title">ListofCategories</h3>
        <divclass="card-tools">
            <a href=?page=maintenance/manage_category" class="btn btn-flat btn-primary">
                <spanclass="fas fa-plus"></span>CreateNew</a>
        </div>
    </div>
    <divclass="card-body">
        <divclass="container-fluid">
            <tableclass="tabletable-borderedtable-stripped">
                <colgroup>
                    <colwidth="5%">
                    <colwidth="15%">
                    <colwidth="20%">
                    <colwidth="35%">
                    <colwidth="10%">
                    <colwidth="15%">
                </colgroup>
      <thead>
    <tr>
        <th>#</th>
        <th>DateCreated</th>
        <th>Category</th>
        <th>Description</th>
        <th>Status</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>
<?php
$i=1;
$qry=$conn->query("SELECT*from'categories'orderbyunix_timestamp(date_created)desc");
while($row=$qry->fetch_assoc()):
$row['description']
=strip_tags(stripslashes(html_entity_decode($row['description'])));
?>
    <tr>
        <tdclass="text-center"><?phpecho$i++;?></td>
        <td><?phpechodate("Y-m-d H:i",strtotime($row['date_created']))?></td>
        <td><?phpecho$row['category']?></td>
        <td><pclass='truncate-1 m-o"><?php echo $row['description']?></p/></td>
        <tdclass="text-center">
            <?phpif($row['status']==1):?>
                <spanclass="badgebadge-success">Active</span>
            <?phpelse:?>
                <spanclass="badgebadge-danger">Inactive</span>
            <?phpendif;?>
        </td>
        <tdalign="center">
            <button type="button" 
        class="btnbtn-flatbtn-defaultbtn-smdropdown-toggledropdown-icon"data-toggle="dropdown">
                Action
                <spanclass="sr-only">ToggleDropdown</span>
            </button>
            <divclass="dropdown-menu"role="menu">
                <a class="dropdown-item"href="?page=maintenance/manage_category&id=<?phpecho$row['id']?>"<spanclass="fafa-edittext-primary"></span>Edit</a>
                <divclass="dropdown-divider"></div>
                <a class="dropdown-item 
                delete_data"href="javascript:void(0)"data-id="<?phpecho$row['id']?>"><span class="fa fa-trashtext-danger"></span> Delete</a>
            </div>
        </td>
    </tr>
<?phpendwhile; ?>
</tbody>
</table>
</div>
</div>
</div>
</div>
<script>
$(document).ready(function(){
    $('.delete_data').click(function(){
        _conf("Areyousuretodeletethiscategorypermanently?","delete_category",[$(this).attr('data-id')])
    });
$('.table').dataTable();
})
functiondelete_category($id) {
    start_loader();
    $.ajax({
        url:_base_url_+"classes/Master.php?f=delete_category",method:"POST",
        data:{id:$id },
        dataType:"json",
        error:error:err=> 
        {
            console.log(err);
            alert_toast("Anerroroccurred.",'error');
            end_loader();
        },
        success:function(resp){
            if(typeofresp=='object'&&resp.status=='success'){location.reload();
            }else{
                alert_toast("Anerroroccurred.",'error');
                end_loader();
            }
        }
    })
}
</script>
