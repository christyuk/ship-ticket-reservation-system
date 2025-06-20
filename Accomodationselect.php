<?php require_once('../../config.php');?>
<tableclass="tabletable-borderedtable-stripedtable-hovered">
    <colgroup>
        <colwidth="5%">
        <colwidth="40%">
        <colwidth="40%">
        <colwidth="15%">
    </colgroup>
    <thead>
        <tr>
            <th></th>
            <thclass="py-1px-2text-center">Accommodation</th>
            <thclass="py-1px-2text-center">Description</th>
            <thclass="py-1px-2text-center">Net Fare</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $accom_qry =$conn->query("SELECT sa.*,a.accommodation,a.description 
            FROMsched_accom sa inner join 'accommodations a on sa.accommodation_id = a.id 
            wheresa.schedule_id ='{$_GET['id']}' orderby 'id, asc");
        ");
        while ($row = $accom_qry->fetch_assoc()):
        ?>
        <tr>
            <tdclass="text-centerpy-1 px-2">
                <divclass="icheck-primaryd-inline">
                    <input type="radio" id="accom_<?php echo $row['id']
                   ?>"name="accommodation_id"value="<?phpecho$row['accommodation_id']?>"required>
                    <labelfor="accom_<?phpecho$row['id']?>">
                 </label>
                </div>
            </td>
            <tdclass="py-1 px-2"><?phpecho$row['accommodation']?></td>
            <tdclass="py-1 px-2"><?phpecho$row['description']?></td>
            <tdclass="text-rightpy-1px-2"><?phpechonumber_format($row['net_fare'])
           ?></td>
        </tr>
        <?phpendwhile; ?>
    </tbody>
</table>
