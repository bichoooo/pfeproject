<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\JobApplication $jobApplication
 * @var \Cake\Collection\CollectionInterface|string[] $jobs
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Job Applications'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="jobApplications form content">
            <?= $this->Form->create($jobApplication) ?>
            <fieldset>
                <legend><?= __('Add Job Application') ?></legend>
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
