<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\JobApplication $jobApplication
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Job Application'), ['action' => 'edit', $jobApplication->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Job Application'), ['action' => 'delete', $jobApplication->id], ['confirm' => __('Are you sure you want to delete # {0}?', $jobApplication->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Job Applications'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Job Application'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="jobApplications view content">
            <h3><?= h($jobApplication->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Job') ?></th>
                    <td><?= $jobApplication->hasValue('job') ? $this->Html->link($jobApplication->job->title, ['controller' => 'Jobs', 'action' => 'view', $jobApplication->job->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Condidate Name') ?></th>
                    <td><?= h($jobApplication->condidate_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($jobApplication->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Resume') ?></th>
                    <td><?= h($jobApplication->resume) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cover Letter') ?></th>
                    <td><?= h($jobApplication->cover_letter) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= h($jobApplication->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($jobApplication->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>