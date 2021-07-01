<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $user->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users form content">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend><?= __('Edit User') ?></legend>
                <?php
                    echo $this->Form->control('full_name');
                    echo $this->Form->control('email');
                    echo $this->Form->control('password');
                    echo $this->Form->control('phone');
                    echo $this->Form->control('address1');
                    echo $this->Form->control('address2');
                    echo $this->Form->control('block');
                    echo $this->Form->control('subblock');
                    echo $this->Form->control('city');
                    echo $this->Form->control('district');
                    echo $this->Form->control('state');
                    echo $this->Form->control('postal_code');
                    echo $this->Form->control('access_token');
                    echo $this->Form->control('device_token');
                    echo $this->Form->control('device_type');
                    echo $this->Form->control('is_notification');
                    echo $this->Form->control('login_ip');
                    echo $this->Form->control('last_login', ['empty' => true]);
                    echo $this->Form->control('otp');
                    echo $this->Form->control('img_file');
                    echo $this->Form->control('is_verified');
                    echo $this->Form->control('role');
                    echo $this->Form->control('type');
                    echo $this->Form->control('status');
                    echo $this->Form->control('created_on');
                    echo $this->Form->control('modified_on');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
