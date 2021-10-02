<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BloodPressure[]|\Cake\Collection\CollectionInterface $bloodPressure
 */
?>
<div class="bloodPressure index content">
    <?= $this->Html->link(__('New Blood Pressure'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Blood Pressure') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('first_value') ?></th>
                    <th><?= $this->Paginator->sort('second_value') ?></th>
                    <th><?= $this->Paginator->sort('sdk_time') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th><?= $this->Paginator->sort('watch_id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($bloodPressure as $bloodPressure): ?>
                <tr>
                    <td><?= $this->Number->format($bloodPressure->id) ?></td>
                    <td><?= h($bloodPressure->first_value) ?></td>
                    <td><?= h($bloodPressure->second_value) ?></td>
                    <td><?= h($bloodPressure->sdk_time) ?></td>
                    <td><?= h($bloodPressure->date) ?></td>
                    <td><?= $bloodPressure->has('watch') ? $this->Html->link($bloodPressure->watch->name, ['controller' => 'Watches', 'action' => 'view', $bloodPressure->watch->id]) : '' ?></td>
                    <td><?= $bloodPressure->has('user') ? $this->Html->link($bloodPressure->user->id, ['controller' => 'Users', 'action' => 'view', $bloodPressure->user->id]) : '' ?></td>
                    <td><?= h($bloodPressure->created) ?></td>
                    <td><?= h($bloodPressure->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $bloodPressure->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $bloodPressure->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $bloodPressure->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bloodPressure->id)]) ?>
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
