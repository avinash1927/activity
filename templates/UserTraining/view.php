<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserTraining $userTraining
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit User Training'), ['action' => 'edit', $userTraining->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete User Training'), ['action' => 'delete', $userTraining->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userTraining->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List User Training'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New User Training'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="userTraining view content">
            <h3><?= h($userTraining->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('StartTime') ?></th>
                    <td><?= h($userTraining->startTime) ?></td>
                </tr>
                <tr>
                    <th><?= __('EndTime') ?></th>
                    <td><?= h($userTraining->endTime) ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $userTraining->has('user') ? $this->Html->link($userTraining->user->id, ['controller' => 'Users', 'action' => 'view', $userTraining->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($userTraining->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('WorkoutType') ?></th>
                    <td><?= $this->Number->format($userTraining->workoutType) ?></td>
                </tr>
                <tr>
                    <th><?= __('ValidTime') ?></th>
                    <td><?= $this->Number->format($userTraining->validTime) ?></td>
                </tr>
                <tr>
                    <th><?= __('Steps') ?></th>
                    <td><?= $this->Number->format($userTraining->steps) ?></td>
                </tr>
                <tr>
                    <th><?= __('Distance') ?></th>
                    <td><?= $this->Number->format($userTraining->distance) ?></td>
                </tr>
                <tr>
                    <th><?= __('Calories') ?></th>
                    <td><?= $this->Number->format($userTraining->calories) ?></td>
                </tr>
                <tr>
                    <th><?= __('Training Date') ?></th>
                    <td><?= h($userTraining->training_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($userTraining->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($userTraining->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
