<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LeaveRequest $leaveRequest
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Leave Request'), ['action' => 'edit', $leaveRequest->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Leave Request'), ['action' => 'delete', $leaveRequest->id], ['confirm' => __('Are you sure you want to delete # {0}?', $leaveRequest->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Leave Requests'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Leave Request'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="leaveRequests view content">
            <h3><?= h($leaveRequest->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $leaveRequest->hasValue('user') ? $this->Html->link($leaveRequest->user->fullname, ['controller' => 'Users', 'action' => 'view', $leaveRequest->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Leaves Type') ?></th>
                    <td><?= h($leaveRequest->leaves_type) ?></td>
                </tr>
                <tr>
                    <th><?= __('State') ?></th>
                    <td><?= h($leaveRequest->state) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reason') ?></th>
                    <td><?= h($leaveRequest->reason) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($leaveRequest->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Start Date') ?></th>
                    <td><?= h($leaveRequest->start_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('End Date') ?></th>
                    <td><?= h($leaveRequest->end_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Requested Date') ?></th>
                    <td><?= h($leaveRequest->requested_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Approval Date') ?></th>
                    <td><?= h($leaveRequest->approval_date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>