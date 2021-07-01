<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ward $ward
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $ward->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ward->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Ward'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="ward form content">
            <?= $this->Form->create($ward) ?>
            <fieldset>
                <legend><?= __('Edit Ward') ?></legend>
                <?php
                    echo $this->Form->control('sino');
                    echo $this->Form->control('wardname');
                    echo $this->Form->control('wardcode');
                    echo $this->Form->control('distcode');
                    echo $this->Form->control('blockcode');
                    echo $this->Form->control('panchayatcode');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
