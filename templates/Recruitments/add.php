<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Recruitment $recruitment
 * @var \Cake\Collection\CollectionInterface|string[] $jobs
 * @var \Cake\Collection\CollectionInterface|string[] $departments
 * @var \Cake\Collection\CollectionInterface|string[] $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Recruitments'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="recruitments form content">
            <?= $this->Form->create($recruitment) ?>
            <fieldset>
                <legend><?= __('Add Recruitment') ?></legend>
                <?php
                    echo $this->Form->control('jobs_id', ['options' => $jobs, 'empty' => true]);
                    echo $this->Form->control('departments_id', ['options' => $departments, 'empty' => true]);
                    echo $this->Form->control('recruitment_type');
                    echo $this->Form->control('available_profile_nbr');
                    echo $this->Form->control('state');
                    echo $this->Form->control('users_id', ['options' => $users, 'empty' => true]);
                    echo $this->Form->control('posted_date');
                    echo $this->Form->control('deadline_date');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
