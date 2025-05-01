<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Attendence> $attendences
 */
?>
<div class="attendences index content">
    <?= $this->Html->link(__('New Attendence'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Attendences') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('users_id') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th><?= $this->Paginator->sort('check_in_time') ?></th>
                    <th><?= $this->Paginator->sort('check_out_time') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($attendences as $attendence): ?>
                <tr>
                    <td><?= $this->Number->format($attendence->id) ?></td>
                    <td><?= $attendence->hasValue('user') ? $this->Html->link($attendence->user->fullname, ['controller' => 'Users', 'action' => 'view', $attendence->user->id]) : '' ?></td>
                    <td><?= h($attendence->date) ?></td>
                    <td><?= h($attendence->check_in_time) ?></td>
                    <td><?= h($attendence->check_out_time) ?></td>
                    <td><?= h($attendence->status) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $attendence->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $attendence->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $attendence->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $attendence->id),
                            ]
                        ) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>