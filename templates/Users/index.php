<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="users index content">
    <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Users') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('full_name') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('password') ?></th>
                    <th><?= $this->Paginator->sort('phone') ?></th>
                    <th><?= $this->Paginator->sort('address1') ?></th>
                    <th><?= $this->Paginator->sort('address2') ?></th>
                    <th><?= $this->Paginator->sort('block') ?></th>
                    <th><?= $this->Paginator->sort('subblock') ?></th>
                    <th><?= $this->Paginator->sort('city') ?></th>
                    <th><?= $this->Paginator->sort('district') ?></th>
                    <th><?= $this->Paginator->sort('state') ?></th>
                    <th><?= $this->Paginator->sort('postal_code') ?></th>
                    <th><?= $this->Paginator->sort('access_token') ?></th>
                    <th><?= $this->Paginator->sort('device_token') ?></th>
                    <th><?= $this->Paginator->sort('device_type') ?></th>
                    <th><?= $this->Paginator->sort('is_notification') ?></th>
                    <th><?= $this->Paginator->sort('login_ip') ?></th>
                    <th><?= $this->Paginator->sort('last_login') ?></th>
                    <th><?= $this->Paginator->sort('otp') ?></th>
                    <th><?= $this->Paginator->sort('img_file') ?></th>
                    <th><?= $this->Paginator->sort('is_verified') ?></th>
                    <th><?= $this->Paginator->sort('role') ?></th>
                    <th><?= $this->Paginator->sort('type') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('created_on') ?></th>
                    <th><?= $this->Paginator->sort('modified_on') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $this->Number->format($user->id) ?></td>
                    <td><?= h($user->full_name) ?></td>
                    <td><?= h($user->email) ?></td>
                    <td><?= h($user->password) ?></td>
                    <td><?= h($user->phone) ?></td>
                    <td><?= h($user->address1) ?></td>
                    <td><?= h($user->address2) ?></td>
                    <td><?= h($user->block) ?></td>
                    <td><?= h($user->subblock) ?></td>
                    <td><?= h($user->city) ?></td>
                    <td><?= h($user->district) ?></td>
                    <td><?= h($user->state) ?></td>
                    <td><?= $this->Number->format($user->postal_code) ?></td>
                    <td><?= h($user->access_token) ?></td>
                    <td><?= h($user->device_token) ?></td>
                    <td><?= h($user->device_type) ?></td>
                    <td><?= $this->Number->format($user->is_notification) ?></td>
                    <td><?= h($user->login_ip) ?></td>
                    <td><?= h($user->last_login) ?></td>
                    <td><?= h($user->otp) ?></td>
                    <td><?= h($user->img_file) ?></td>
                    <td><?= $this->Number->format($user->is_verified) ?></td>
                    <td><?= $this->Number->format($user->role) ?></td>
                    <td><?= $this->Number->format($user->type) ?></td>
                    <td><?= $this->Number->format($user->status) ?></td>
                    <td><?= h($user->created_on) ?></td>
                    <td><?= h($user->modified_on) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
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
