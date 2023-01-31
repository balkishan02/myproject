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
            <?= $this->Html->link(__('Edit Userapi'), ['action' => 'edit', $userapi->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Userapi'), ['action' => 'delete', $userapi->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userapi->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Userapi'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Userapi'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="userapi view content">
            <h3><?= h($userapi->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Username') ?></th>
                    <td><?= h($userapi->username) ?></td>
                </tr>
                <tr>
                    <th><?= __('Role') ?></th>
                    <td><?= h($userapi->role) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($userapi->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
