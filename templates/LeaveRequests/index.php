<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\LeaveRequest> $leaveRequests
 */
?>
<div class="leaveRequests index content">
    <?= $this->Html->link(__('New Leave Request'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Leave Requests') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('leaves_type') ?></th>
                    <th><?= $this->Paginator->sort('start_date') ?></th>
                    <th><?= $this->Paginator->sort('end_date') ?></th>
                    <th><?= $this->Paginator->sort('state') ?></th>
                    <th><?= $this->Paginator->sort('requested_date') ?></th>
                    <th><?= $this->Paginator->sort('approval_date') ?></th>
                    <th><?= $this->Paginator->sort('reason') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($leaveRequests as $leaveRequest): ?>
                <tr>
                    <td><?= $this->Number->format($leaveRequest->id) ?></td>
                    <td><?= $leaveRequest->hasValue('user') ? $this->Html->link($leaveRequest->user->fullname, ['controller' => 'Users', 'action' => 'view', $leaveRequest->user->id]) : '' ?></td>
                    <td><?= h($leaveRequest->leaves_type) ?></td>
                    <td><?= h($leaveRequest->start_date) ?></td>
                    <td><?= h($leaveRequest->end_date) ?></td>
                    <td><?= h($leaveRequest->state) ?></td>
                    <td><?= h($leaveRequest->requested_date) ?></td>
                    <td><?= h($leaveRequest->approval_date) ?></td>
                    <td><?= h($leaveRequest->reason) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $leaveRequest->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $leaveRequest->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $leaveRequest->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $leaveRequest->id),
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