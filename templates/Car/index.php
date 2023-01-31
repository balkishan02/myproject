<?php echo $this->Html->link('Add Model', ['action' => 'add'])?>
<table>
    <tr>
        <th>ID</th>
<!--        <th>Name</th>-->
        <th>Model</th>
        <th>Action</th>
    </tr>
    <?php foreach ($car as $val): ?>
        <tr>
            <td><?php echo $val->cid?></td>
            <td><?php echo $val->model?></td>
<!--            <td>--><?php //echo $val->fid?><!--</td>-->
            <td></td>
        </tr>
    <?php endforeach; ?>
</table>
