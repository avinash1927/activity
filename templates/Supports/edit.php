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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $support->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $support->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Supports'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="supports form content">
            <?= $this->Form->create($support) ?>
            <fieldset>
                <legend><?= __('Edit Support') ?></legend>
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
