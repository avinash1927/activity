<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BloodPressure $bloodPressure
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $bloodPressure->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $bloodPressure->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Blood Pressure'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="bloodPressure form content">
            <?= $this->Form->create($bloodPressure) ?>
            <fieldset>
                <legend><?= __('Edit Blood Pressure') ?></legend>
                <?php
                    echo $this->Form->control('first_value');
                    echo $this->Form->control('second_value');
                    echo $this->Form->control('sdk_time');
                    echo $this->Form->control('date', ['empty' => true]);
                    echo $this->Form->control('watch_id', ['options' => $watches, 'empty' => true]);
                    echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
