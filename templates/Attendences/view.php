<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Attendence $attendence
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Attendence'), ['action' => 'edit', $attendence->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Attendence'), ['action' => 'delete', $attendence->id], ['confirm' => __('Are you sure you want to delete # {0}?', $attendence->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Attendences'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Attendence'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="attendences view content">
            <h3><?= h($attendence->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $attendence->hasValue('user') ? $this->Html->link($attendence->user->fullname, ['controller' => 'Users', 'action' => 'view', $attendence->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= h($attendence->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($attendence->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($attendence->date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Check In Time') ?></th>
                    <td><?= h($attendence->check_in_time) ?></td>
                </tr>
                <tr>
                    <th><?= __('Check Out Time') ?></th>
                    <td><?= h($attendence->check_out_time) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>