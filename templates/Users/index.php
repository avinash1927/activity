<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Users

    <div class="pull-right"><?php echo $this->Html->link(__('New'), ['action' => 'add'], ['class'=>'btn btn-success btn-xs']) ?></div>
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"><?php echo __('List'); ?></h3>

          <div class="box-tools">
            <form action="<?php echo $this->Url->build(); ?>" method="POST">
              <div class="input-group input-group-sm" style="width: 150px;">
                <input type="text" name="table_search" class="form-control pull-right" placeholder="<?php echo __('Search'); ?>">

                <div class="input-group-btn">
                  <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <thead>
              <tr>
                  <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('full_name') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('phone') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('address1') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('address2') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('blockcode') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('block') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('subblock') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('city') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('distcode') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('district') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('state') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('postal_code') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('access_token') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('device_token') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('device_type') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('is_notification') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('login_ip') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('last_login') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('otp') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('img_file') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('is_verified') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('role') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('type') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('created_on') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('modified_on') ?></th>
                  <th scope="col" class="actions text-center"><?= __('Actions') ?></th>
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
                  <td><?= $this->Number->format($user->blockcode) ?></td>
                  <td><?= h($user->block) ?></td>
                  <td><?= h($user->subblock) ?></td>
                  <td><?= h($user->city) ?></td>
                  <td><?= $this->Number->format($user->distcode) ?></td>
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
                  <td class="actions text-right">
                      <?= $this->Html->link(__('View'), ['action' => 'view', $user->id], ['class'=>'btn btn-info btn-xs']) ?>
                      <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id], ['class'=>'btn btn-warning btn-xs']) ?>
                      <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class'=>'btn btn-danger btn-xs']) ?>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>
</section>