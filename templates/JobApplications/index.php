<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\JobApplication> $jobApplications
 */
?>
<div class="jobApplications index content">
    <?= $this->Html->link(__('New Job Application'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Job Applications') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('jobs_id') ?></th>
                    <th><?= $this->Paginator->sort('condidate_name') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('resume') ?></th>
                    <th><?= $this->Paginator->sort('cover_letter') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($jobApplications as $jobApplication): ?>
                <tr>
                    <td><?= $this->Number->format($jobApplication->id) ?></td>
                    <td><?= $jobApplication->hasValue('job') ? $this->Html->link($jobApplication->job->title, ['controller' => 'Jobs', 'action' => 'view', $jobApplication->job->id]) : '' ?></td>
                    <td><?= h($jobApplication->condidate_name) ?></td>
                    <td><?= h($jobApplication->email) ?></td>
                    <td><?= h($jobApplication->resume) ?></td>
                    <td><?= h($jobApplication->cover_letter) ?></td>
                    <td><?= h($jobApplication->status) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $jobApplication->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $jobApplication->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $jobApplication->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $jobApplication->id),
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