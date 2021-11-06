<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserTraining $userTraining
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $userTraining->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $userTraining->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List User Training'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="userTraining form content">
            <?= $this->Form->create($userTraining) ?>
            <fieldset>
                <legend><?= __('Edit User Training') ?></legend>
                <?php
                    echo $this->Form->control('workoutType');
                    echo $this->Form->control('validTime');
                    echo $this->Form->control('steps');
                    echo $this->Form->control('distance');
                    echo $this->Form->control('calories');
                    echo $this->Form->control('startTime');
                    echo $this->Form->control('endTime');
                    echo $this->Form->control('training_date', ['empty' => true]);
                    echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
