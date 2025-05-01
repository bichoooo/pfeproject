<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Recruitment $recruitment
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Recruitment'), ['action' => 'edit', $recruitment->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Recruitment'), ['action' => 'delete', $recruitment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $recruitment->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Recruitments'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Recruitment'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="recruitments view content">
            <h3><?= h($recruitment->recruitment_type) ?></h3>
            <table>
                <tr>
                    <th><?= __('Job') ?></th>
                    <td><?= $recruitment->hasValue('job') ? $this->Html->link($recruitment->job->title, ['controller' => 'Jobs', 'action' => 'view', $recruitment->job->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Department') ?></th>
                    <td><?= $recruitment->hasValue('department') ? $this->Html->link($recruitment->department->name, ['controller' => 'Departments', 'action' => 'view', $recruitment->department->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Recruitment Type') ?></th>
                    <td><?= h($recruitment->recruitment_type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Available Profile Nbr') ?></th>
                    <td><?= h($recruitment->available_profile_nbr) ?></td>
                </tr>
                <tr>
                    <th><?= __('State') ?></th>
                    <td><?= h($recruitment->state) ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $recruitment->hasValue('user') ? $this->Html->link($recruitment->user->fullname, ['controller' => 'Users', 'action' => 'view', $recruitment->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($recruitment->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Posted Date') ?></th>
                    <td><?= h($recruitment->posted_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deadline Date') ?></th>
                    <td><?= h($recruitment->deadline_date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>