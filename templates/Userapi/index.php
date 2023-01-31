<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Userapi> $userapi
 */
?>
<div class="userapi index content">
    <?= $this->Html->link(__('New Userapi'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Userapi') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('username') ?></th>
                    <th><?= $this->Paginator->sort('role') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($userapi as $userapi): ?>
                <tr>
                    <td><?= $this->Number->format($userapi->id) ?></td>
                    <td><?= h($userapi->username) ?></td>
                    <td><?= h($userapi->role) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $userapi->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $userapi->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $userapi->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userapi->id)]) ?>
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
