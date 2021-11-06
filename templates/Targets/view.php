<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Target $target
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Target'), ['action' => 'edit', $target->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Target'), ['action' => 'delete', $target->id], ['confirm' => __('Are you sure you want to delete # {0}?', $target->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Targets'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Target'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="targets view content">
            <h3><?= h($target->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('StartTime') ?></th>
                    <td><?= h($target->startTime) ?></td>
                </tr>
                <tr>
                    <th><?= __('EndTime') ?></th>
                    <td><?= h($target->endTime) ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $target->has('user') ? $this->Html->link($target->user->id, ['controller' => 'Users', 'action' => 'view', $target->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($target->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('WorkoutType') ?></th>
                    <td><?= $this->Number->format($target->workoutType) ?></td>
                </tr>
                <tr>
                    <th><?= __('ValidTime') ?></th>
                    <td><?= $this->Number->format($target->validTime) ?></td>
                </tr>
                <tr>
                    <th><?= __('Steps') ?></th>
                    <td><?= $this->Number->format($target->steps) ?></td>
                </tr>
                <tr>
                    <th><?= __('Distance') ?></th>
                    <td><?= $this->Number->format($target->distance) ?></td>
                </tr>
                <tr>
                    <th><?= __('Calories') ?></th>
                    <td><?= $this->Number->format($target->calories) ?></td>
                </tr>
                <tr>
                    <th><?= __('Training Date') ?></th>
                    <td><?= h($target->training_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($target->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($target->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
