<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Userapi $userapi
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $userapi->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $userapi->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Userapi'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="userapi form content">
            <?= $this->Form->create($userapi) ?>
            <fieldset>
                <legend><?= __('Edit Userapi') ?></legend>
                <?php
                    echo $this->Form->control('username');
                    echo $this->Form->control('password');
                    echo $this->Form->control('role');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
