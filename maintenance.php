<?phpif($_settings->chk_flashdata('success'):?>
<script>
alert_toast("<?phpecho$_settings->flashdata('success')?>",'success')
</script>
<?phpendif;?>
<divclass="cardcard-outlinecard-primary">
<divclass="card-header">
<h3class="card-title">List of Vessels</h3>
<divclass="card-tools">
<a href="javascript:void(0)"id="create_new" class="btn btn-flat btn-primary"><spanclass="fas fa-plus"></span>CreateNew</a>
        </div>
    </div>
    <divclass="card-body">
    <divclass="container-fluid">
    <tableclass="tabletable-borderedtable-stripped">
    <colgroup>
          <colwidth="5%">
          <colwidth="15%">
          <colwidth="15%">
          <colwidth="20%">
          <colwidth="25%">
          <colwidth="10%">
          <colwidth="10%">
      </colgroup>
      <thead>
           <tr>
                  <th>#</th>
                  <th>DateCreated</th>
                  <th>ID Code</th>
                  <th>Name</th>
        <th>Description</th>
        <th>Status</th>
         <th>Action</th>
        </tr>
        </thead>
        <tbody>
                 <?php
                  $i = 1;
                        $qry=$conn->query("SELECT * from orderby `name`asc ");
                        'ship_list' while($row=$qry->fetch_assoc()):
                    ?>
                    <tr>
                        <tdclass="text-center"><?phpecho$i++;?></td>
                        <td><?phpechodate("Y-m-d"H:i",strtotime($row['date_created']))?></td>
                        <td><?phpecho$row['id_code']?></td>
                        <td><?phpecho$row['name']?></td>
                        <td><pclass="truncate-1 m-0"><?php echo$row['description']?></p></td>
                        <tdclass="text-center">
                            <?phpif($row['status']== 1):?>
                                <spanclass="badgebadge-success">Active</span>
                            <?phpelse:?>
                                <spanclass="badgebadge-danger">Inactive</span>
                            <?phpendif;?>
                        </td>
                        <tdalign="center">
                            <button type="button" class="btnbtn-flatbtn-defaultbtn-smdropdown-toggledropdown-icon"data-toggle="dropdown">
                                Action
                                <spanclass="sr-only">ToggleDropdown</span>
                            </button>
                            <divclass="dropdown-menu"role="menu">
                                <a class="dropdown-item edit_data"href="javascript:void(0)" data-id="<?php echo $row['id'] ?>">
                                    <span class="fa fa-edit text-primary"></span>Edit</a>
                            <divclass="dropdown-divider"></div>
                            <a class="dropdown-item delete_data"href="javascript:void(0)"data-id="<?phpecho$row['id'] ?>">
                                    <spanclass="fafa-trashtext-danger"></span> Delete</a>
                            </div>
                        </td>
                    </tr>
                 <?phpendwhile; ?>
                </tbody>
                </table>
                    <?php endwhile; ?>
                  <div>
                 </div>
          </div>
    </div>
                
