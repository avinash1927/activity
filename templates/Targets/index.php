<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Target[]|\Cake\Collection\CollectionInterface $targets
 */
?>
<div class="targets index content">
    <?= $this->Html->link(__('New Target'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Targets') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('workoutType') ?></th>
                    <th><?= $this->Paginator->sort('validTime') ?></th>
                    <th><?= $this->Paginator->sort('steps') ?></th>
                    <th><?= $this->Paginator->sort('distance') ?></th>
                    <th><?= $this->Paginator->sort('calories') ?></th>
                    <th><?= $this->Paginator->sort('startTime') ?></th>
                    <th><?= $this->Paginator->sort('endTime') ?></th>
                    <th><?= $this->Paginator->sort('training_date') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($targets as $target): ?>
                <tr>
                    <td><?= $this->Number->format($target->id) ?></td>
                    <td><?= $this->Number->format($target->workoutType) ?></td>
                    <td><?= $this->Number->format($target->validTime) ?></td>
                    <td><?= $this->Number->format($target->steps) ?></td>
                    <td><?= $this->Number->format($target->distance) ?></td>
                    <td><?= $this->Number->format($target->calories) ?></td>
                    <td><?= h($target->startTime) ?></td>
                    <td><?= h($target->endTime) ?></td>
                    <td><?= h($target->training_date) ?></td>
                    <td><?= $target->has('user') ? $this->Html->link($target->user->id, ['controller' => 'Users', 'action' => 'view', $target->user->id]) : '' ?></td>
                    <td><?= h($target->created) ?></td>
                    <td><?= h($target->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $target->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $target->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $target->id], ['confirm' => __('Are you sure you want to delete # {0}?', $target->id)]) ?>
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
