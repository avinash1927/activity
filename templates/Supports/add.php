<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Support $support
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Supports'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="supports form content">
            <?= $this->Form->create($support) ?>
            <fieldset>
                <legend><?= __('Add Support') ?></legend>
                <?php
                    echo $this->Form->control('support_category_id', ['options' => $supportCategories, 'empty' => true]);
                    echo $this->Form->control('description');
                    echo $this->Form->control('status');
                    echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
                    echo $this->Form->control('is_trash');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
