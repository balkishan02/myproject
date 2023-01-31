<h4>Add Owner Details</h4>
<?php //echo '<pre>';print_r($model);die(); ?>
<?php
    echo $this->Form->create($owner);
    echo $this->Form->control('oid');
    echo $this->Form->control('name');
?>
    <label>Select Car Model</label>
    <select name="fid" id="fid">
        <option>Select Model</option>
        <?php foreach ($model as $val): ?>

        <option value="<?= $val->cid ?>"><?php echo $val->model ?></option>
        <?php endforeach; ?>
    </select>
<?php
    echo $this->Form->button(__('Submit'));
    echo $this->Form->end();
?>
