<?php
//    echo '<pre>';print_r($owner);die();
?>
<h4>Edit Owner Details</h4>
<?php
echo $this->Form->create($owner);
echo $this->Form->control('oid');
echo $this->Form->control('name');
?>
<label>Select Car Model</label>
<select name="fid" id="fid">

    <?php foreach ($model as $val): ?>
        <option value="<?= $val->cid ?>"><?php echo $val->model ?></option>
    <?php endforeach; ?>
</select>
<?php
echo $this->Form->button(__('Update'));
echo $this->Form->end();
?>
