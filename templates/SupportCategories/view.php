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
            <?= $this->Html->link(__('Edit Support Category'), ['action' => 'edit', $supportCategory->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Support Category'), ['action' => 'delete', $supportCategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $supportCategory->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Support Categories'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Support Category'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="supportCategories view content">
            <h3><?= h($supportCategory->title) ?></h3>
            <table>
                <tr>
                    <th><?= __('Title') ?></th>
                    <td><?= h($supportCategory->title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($supportCategory->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($supportCategory->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($supportCategory->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Is Enable') ?></th>
                    <td><?= $supportCategory->is_enable ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Is Trash') ?></th>
                    <td><?= $supportCategory->is_trash ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Supports') ?></h4>
                <?php if (!empty($supportCategory->supports)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Support Category Id') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Is Trash') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($supportCategory->supports as $supports) : ?>
                        <tr>
                            <td><?= h($supports->id) ?></td>
                            <td><?= h($supports->support_category_id) ?></td>
                            <td><?= h($supports->description) ?></td>
                            <td><?= h($supports->status) ?></td>
                            <td><?= h($supports->user_id) ?></td>
                            <td><?= h($supports->is_trash) ?></td>
                            <td><?= h($supports->created) ?></td>
                            <td><?= h($supports->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Supports', 'action' => 'view', $supports->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Supports', 'action' => 'edit', $supports->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Supports', 'action' => 'delete', $supports->id], ['confirm' => __('Are you sure you want to delete # {0}?', $supports->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
