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
            <?= $this->Html->link(__('Edit Support'), ['action' => 'edit', $support->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Support'), ['action' => 'delete', $support->id], ['confirm' => __('Are you sure you want to delete # {0}?', $support->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Supports'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Support'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="supports view content">
            <h3><?= h($support->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Support Category') ?></th>
                    <td><?= $support->has('support_category') ? $this->Html->link($support->support_category->title, ['controller' => 'SupportCategories', 'action' => 'view', $support->support_category->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $support->has('user') ? $this->Html->link($support->user->id, ['controller' => 'Users', 'action' => 'view', $support->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($support->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($support->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($support->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $support->status ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Is Trash') ?></th>
                    <td><?= $support->is_trash ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($support->description)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
