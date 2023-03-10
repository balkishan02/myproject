<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
//echo '<pre>';
//print_r($type);die();
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $user->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List User'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="user form content">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend><?= __('Edit User') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('email');
                    echo $this->Form->control('addr');
//                    echo $this->Form->control('type_id');
                ?>
                <label>Type</label>
                <select name="type_id" id="type-id">
                    <option value="">Select</option>
                    <?php foreach ($type as $val): ?>
                    <option value="<?= $val->id ?>"><?= $val->name ?></option>
                    <?php endforeach; ?>
                </select>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
