<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Recruitment> $recruitments
 */
?>
<div class="recruitments index content">
    <?= $this->Html->link(__('New Recruitment'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Recruitments') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('jobs_id') ?></th>
                    <th><?= $this->Paginator->sort('departments_id') ?></th>
                    <th><?= $this->Paginator->sort('recruitment_type') ?></th>
                    <th><?= $this->Paginator->sort('available_profile_nbr') ?></th>
                    <th><?= $this->Paginator->sort('state') ?></th>
                    <th><?= $this->Paginator->sort('users_id') ?></th>
                    <th><?= $this->Paginator->sort('posted_date') ?></th>
                    <th><?= $this->Paginator->sort('deadline_date') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($recruitments as $recruitment): ?>
                <tr>
                    <td><?= $this->Number->format($recruitment->id) ?></td>
                    <td><?= $recruitment->hasValue('job') ? $this->Html->link($recruitment->job->title, ['controller' => 'Jobs', 'action' => 'view', $recruitment->job->id]) : '' ?></td>
                    <td><?= $recruitment->hasValue('department') ? $this->Html->link($recruitment->department->name, ['controller' => 'Departments', 'action' => 'view', $recruitment->department->id]) : '' ?></td>
                    <td><?= h($recruitment->recruitment_type) ?></td>
                    <td><?= h($recruitment->available_profile_nbr) ?></td>
                    <td><?= h($recruitment->state) ?></td>
                    <td><?= $recruitment->hasValue('user') ? $this->Html->link($recruitment->user->fullname, ['controller' => 'Users', 'action' => 'view', $recruitment->user->id]) : '' ?></td>
                    <td><?= h($recruitment->posted_date) ?></td>
                    <td><?= h($recruitment->deadline_date) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $recruitment->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $recruitment->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $recruitment->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $recruitment->id),
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