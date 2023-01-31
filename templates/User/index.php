<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\User> $user
 */
?>
<div class="user index content">
    <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('User') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('addr') ?></th>
                    <th><?= $this->Paginator->sort('type_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($user as $users): ?>
<!--                --><?php //echo '<pre>';print_r($users->type->name);die();?>
                <tr>
                    <td><?= $this->Number->format($users->id) ?></td>
                    <td><?= h($users->name) ?></td>
                    <td><?= h($users->email) ?></td>
                    <td><?= h($users->addr) ?></td>
                    <td><?= $users->type_id === null ? '' : $users->type->name ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $users->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $users->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<!--    <div class="paginator">-->
<!--        <ul class="pagination">-->
<!--            --><?php //= $this->Paginator->first('<< ' . __('first')) ?>
<!--            --><?php //= $this->Paginator->prev('< ' . __('previous')) ?>
<!--            --><?php //= $this->Paginator->numbers() ?>
<!--            --><?php //= $this->Paginator->next(__('next') . ' >') ?>
<!--            --><?php //= $this->Paginator->last(__('last') . ' >>') ?>
<!--        </ul>-->
<!--        <p>--><?php //= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?><!--</p>-->
<!--    </div>-->
</div>
