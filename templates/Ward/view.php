<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ward $ward
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Ward'), ['action' => 'edit', $ward->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Ward'), ['action' => 'delete', $ward->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ward->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Ward'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Ward'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="ward view content">
            <h3><?= h($ward->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Sino') ?></th>
                    <td><?= h($ward->sino) ?></td>
                </tr>
                <tr>
                    <th><?= __('Wardname') ?></th>
                    <td><?= h($ward->wardname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Wardcode') ?></th>
                    <td><?= h($ward->wardcode) ?></td>
                </tr>
                <tr>
                    <th><?= __('Distcode') ?></th>
                    <td><?= h($ward->distcode) ?></td>
                </tr>
                <tr>
                    <th><?= __('Blockcode') ?></th>
                    <td><?= h($ward->blockcode) ?></td>
                </tr>
                <tr>
                    <th><?= __('Panchayatcode') ?></th>
                    <td><?= h($ward->panchayatcode) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($ward->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
