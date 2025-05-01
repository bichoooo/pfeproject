<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Attendence $attendence
 * @var string[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $attendence->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $attendence->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Attendences'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="attendences form content">
            <?= $this->Form->create($attendence) ?>
            <fieldset>
                <legend><?= __('Edit Attendence') ?></legend>
                <?php
                    echo $this->Form->control('users_id', ['options' => $users, 'empty' => true]);
                    echo $this->Form->control('date', ['empty' => true]);
                    echo $this->Form->control('check_in_time', ['empty' => true]);
                    echo $this->Form->control('check_out_time', ['empty' => true]);
                    echo $this->Form->control('status');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
