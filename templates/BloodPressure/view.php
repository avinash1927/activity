<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BloodPressure $bloodPressure
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Blood Pressure'), ['action' => 'edit', $bloodPressure->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Blood Pressure'), ['action' => 'delete', $bloodPressure->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bloodPressure->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Blood Pressure'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Blood Pressure'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="bloodPressure view content">
            <h3><?= h($bloodPressure->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('First Value') ?></th>
                    <td><?= h($bloodPressure->first_value) ?></td>
                </tr>
                <tr>
                    <th><?= __('Second Value') ?></th>
                    <td><?= h($bloodPressure->second_value) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sdk Time') ?></th>
                    <td><?= h($bloodPressure->sdk_time) ?></td>
                </tr>
                <tr>
                    <th><?= __('Watch') ?></th>
                    <td><?= $bloodPressure->has('watch') ? $this->Html->link($bloodPressure->watch->name, ['controller' => 'Watches', 'action' => 'view', $bloodPressure->watch->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $bloodPressure->has('user') ? $this->Html->link($bloodPressure->user->id, ['controller' => 'Users', 'action' => 'view', $bloodPressure->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($bloodPressure->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($bloodPressure->date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($bloodPressure->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($bloodPressure->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
