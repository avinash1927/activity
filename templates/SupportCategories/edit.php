<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SupportCategory $supportCategory
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $supportCategory->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $supportCategory->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Support Categories'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="supportCategories form content">
            <?= $this->Form->create($supportCategory) ?>
            <fieldset>
                <legend><?= __('Edit Support Category') ?></legend>
                <?php
                    echo $this->Form->control('title');
                    echo $this->Form->control('is_enable');
                    echo $this->Form->control('is_trash');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
