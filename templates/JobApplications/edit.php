<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\JobApplication $jobApplication
 * @var string[]|\Cake\Collection\CollectionInterface $jobs
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $jobApplication->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $jobApplication->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Job Applications'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="jobApplications form content">
            <?= $this->Form->create($jobApplication) ?>
            <fieldset>
                <legend><?= __('Edit Job Application') ?></legend>
                <?php
                    echo $this->Form->control('jobs_id', ['options' => $jobs, 'empty' => true]);
                    echo $this->Form->control('condidate_name');
                    echo $this->Form->control('email');
                    echo $this->Form->control('resume');
                    echo $this->Form->control('cover_letter');
                    echo $this->Form->control('status');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
