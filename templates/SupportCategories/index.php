<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SupportCategory[]|\Cake\Collection\CollectionInterface $supportCategories
 */
?>
<div class="supportCategories index content">
    <?= $this->Html->link(__('New Support Category'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Support Categories') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('title') ?></th>
                    <th><?= $this->Paginator->sort('is_enable') ?></th>
                    <th><?= $this->Paginator->sort('is_trash') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($supportCategories as $supportCategory): ?>
                <tr>
                    <td><?= $this->Number->format($supportCategory->id) ?></td>
                    <td><?= h($supportCategory->title) ?></td>
                    <td><?= h($supportCategory->is_enable) ?></td>
                    <td><?= h($supportCategory->is_trash) ?></td>
                    <td><?= h($supportCategory->created) ?></td>
                    <td><?= h($supportCategory->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $supportCategory->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $supportCategory->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $supportCategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $supportCategory->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
