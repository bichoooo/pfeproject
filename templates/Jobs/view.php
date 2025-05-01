<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Job $job
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Job'), ['action' => 'edit', $job->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Job'), ['action' => 'delete', $job->id], ['confirm' => __('Are you sure you want to delete # {0}?', $job->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Jobs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Job'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="jobs view content">
            <h3><?= h($job->title) ?></h3>
            <table>
                <tr>
                    <th><?= __('Department') ?></th>
                    <td><?= $job->hasValue('department') ? $this->Html->link($job->department->name, ['controller' => 'Departments', 'action' => 'view', $job->department->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Title') ?></th>
                    <td><?= h($job->title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Code') ?></th>
                    <td><?= h($job->code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Qualification Required') ?></th>
                    <td><?= h($job->qualification_required) ?></td>
                </tr>
                <tr>
                    <th><?= __('Job State') ?></th>
                    <td><?= h($job->job_state) ?></td>
                </tr>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($job->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Salary') ?></th>
                    <td><?= h($job->salary) ?></td>
                </tr>
                <tr>
                    <th><?= __('Benifits') ?></th>
                    <td><?= h($job->benifits) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($job->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Users') ?></h4>
                <?php if (!empty($job->users)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Full Name') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Password') ?></th>
                            <th><?= __('Adress') ?></th>
                            <th><?= __('Phone Number') ?></th>
                            <th><?= __('Birth Date') ?></th>
                            <th><?= __('Profile Picture') ?></th>
                            <th><?= __('Created At') ?></th>
                            <th><?= __('Updated At') ?></th>
                            <th><?= __('State') ?></th>
                            <th><?= __('Gender') ?></th>
                            <th><?= __('Hire Date') ?></th>
                            <th><?= __('Job Id') ?></th>
                            <th><?= __('Departments Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($job->users as $user) : ?>
                        <tr>
                            <td><?= h($user->id) ?></td>
                            <td><?= h($user->full_name) ?></td>
                            <td><?= h($user->email) ?></td>
                            <td><?= h($user->password) ?></td>
                            <td><?= h($user->adress) ?></td>
                            <td><?= h($user->phone_number) ?></td>
                            <td><?= h($user->birth_date) ?></td>
                            <td><?= h($user->profile_picture) ?></td>
                            <td><?= h($user->created_at) ?></td>
                            <td><?= h($user->updated_at) ?></td>
                            <td><?= h($user->state) ?></td>
                            <td><?= h($user->gender) ?></td>
                            <td><?= h($user->hire_date) ?></td>
                            <td><?= h($user->job_id) ?></td>
                            <td><?= h($user->departments_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $user->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $user->id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'Users', 'action' => 'delete', $user->id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $user->id),
                                    ]
                                ) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>