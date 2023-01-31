<?php //echo '<pre>';print_r($owner);die();?>

<h4>Cars Owner Info's</h4>
<?php echo $this->Html->link('Add', ['action' => 'add'])?>
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Model</th>
        <th>Action</th>
    </tr>
    <?php foreach ($owner as $val): ?>
    <tr>
        <td><?php echo $val->oid?></td>
        <td><?php echo $val->name?></td>
        <td><?php echo $val->car->model?></td>
        <td>
            <?php echo $this->Html->link('View /', ['action' => 'view', $val->oid])?>
            <?php echo $this->Html->link('Edit /', ['action' => 'edit', $val->oid])?>
            <?php echo $this->Form->postlink('Delete', ['action' => 'delete', $val->oid], ['confirm' => 'Are You Sure'])?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

