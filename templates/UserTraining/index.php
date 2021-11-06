<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserTraining[]|\Cake\Collection\CollectionInterface $userTraining
 */
?>
<div class="userTraining index content">
    <?= $this->Html->link(__('New User Training'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('User Training') ?></h3>
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
                <?php foreach ($userTraining as $userTraining): ?>
                <tr>
                    <td><?= $this->Number->format($userTraining->id) ?></td>
                    <td><?= $this->Number->format($userTraining->workoutType) ?></td>
                    <td><?= $this->Number->format($userTraining->validTime) ?></td>
                    <td><?= $this->Number->format($userTraining->steps) ?></td>
                    <td><?= $this->Number->format($userTraining->distance) ?></td>
                    <td><?= $this->Number->format($userTraining->calories) ?></td>
                    <td><?= h($userTraining->startTime) ?></td>
                    <td><?= h($userTraining->endTime) ?></td>
                    <td><?= h($userTraining->training_date) ?></td>
                    <td><?= $userTraining->has('user') ? $this->Html->link($userTraining->user->id, ['controller' => 'Users', 'action' => 'view', $userTraining->user->id]) : '' ?></td>
                    <td><?= h($userTraining->created) ?></td>
                    <td><?= h($userTraining->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $userTraining->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $userTraining->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $userTraining->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userTraining->id)]) ?>
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
