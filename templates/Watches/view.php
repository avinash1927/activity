<section class="content-header">
  <h1>
    Watch
    <small><?php echo __('View'); ?></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo $this->Url->build(['action' => 'index']); ?>"><i class="fa fa-dashboard"></i> <?php echo __('Home'); ?></a></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-info"></i>
          <h3 class="box-title"><?php echo __('Information'); ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <dl class="dl-horizontal">
            <dt scope="row"><?= __('Name') ?></dt>
            <dd><?= h($watch->name) ?></dd>
            <dt scope="row"><?= __('Firmware Version') ?></dt>
            <dd><?= h($watch->firmware_version) ?></dd>
            <dt scope="row"><?= __('Id') ?></dt>
            <dd><?= $this->Number->format($watch->id) ?></dd>
            <dt scope="row"><?= __('User Id') ?></dt>
            <dd><?= $this->Number->format($watch->user_id) ?></dd>
            <dt scope="row"><?= __('Created') ?></dt>
            <dd><?= h($watch->created) ?></dd>
            <dt scope="row"><?= __('Modified') ?></dt>
            <dd><?= h($watch->modified) ?></dd>
          </dl>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-share-alt"></i>
          <h3 class="box-title"><?= __('Steps') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <?php if (!empty($watch->steps)): ?>
          <table class="table table-hover">
              <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('Stepscount') ?></th>
                    <th scope="col"><?= __('Distance') ?></th>
                    <th scope="col"><?= __('Calories') ?></th>
                    <th scope="col"><?= __('Date') ?></th>
                    <th scope="col"><?= __('Sdktime') ?></th>
                    <th scope="col"><?= __('Watch Id') ?></th>
                    <th scope="col"><?= __('User Id') ?></th>
                    <th scope="col"><?= __('Created') ?></th>
                    <th scope="col"><?= __('Modified') ?></th>
                    <th scope="col" class="actions text-center"><?= __('Actions') ?></th>
              </tr>
              <?php foreach ($watch->steps as $steps): ?>
              <tr>
                    <td><?= h($steps->id) ?></td>
                    <td><?= h($steps->stepscount) ?></td>
                    <td><?= h($steps->distance) ?></td>
                    <td><?= h($steps->calories) ?></td>
                    <td><?= h($steps->date) ?></td>
                    <td><?= h($steps->sdktime) ?></td>
                    <td><?= h($steps->watch_id) ?></td>
                    <td><?= h($steps->user_id) ?></td>
                    <td><?= h($steps->created) ?></td>
                    <td><?= h($steps->modified) ?></td>
                      <td class="actions text-right">
                      <?= $this->Html->link(__('View'), ['controller' => 'Steps', 'action' => 'view', $steps->id], ['class'=>'btn btn-info btn-xs']) ?>
                      <?= $this->Html->link(__('Edit'), ['controller' => 'Steps', 'action' => 'edit', $steps->id], ['class'=>'btn btn-warning btn-xs']) ?>
                      <?= $this->Form->postLink(__('Delete'), ['controller' => 'Steps', 'action' => 'delete', $steps->id], ['confirm' => __('Are you sure you want to delete # {0}?', $steps->id), 'class'=>'btn btn-danger btn-xs']) ?>
                  </td>
              </tr>
              <?php endforeach; ?>
          </table>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-share-alt"></i>
          <h3 class="box-title"><?= __('Watch Faces') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <?php if (!empty($watch->watch_faces)): ?>
          <table class="table table-hover">
              <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('Watch Id') ?></th>
                    <th scope="col"><?= __('User Id') ?></th>
                    <th scope="col"><?= __('Upload File') ?></th>
                    <th scope="col"><?= __('Created') ?></th>
                    <th scope="col"><?= __('Modified') ?></th>
                    <th scope="col" class="actions text-center"><?= __('Actions') ?></th>
              </tr>
              <?php foreach ($watch->watch_faces as $watchFaces): ?>
              <tr>
                    <td><?= h($watchFaces->id) ?></td>
                    <td><?= h($watchFaces->watch_id) ?></td>
                    <td><?= h($watchFaces->user_id) ?></td>
                    <td><?= h($watchFaces->upload_file) ?></td>
                    <td><?= h($watchFaces->created) ?></td>
                    <td><?= h($watchFaces->modified) ?></td>
                      <td class="actions text-right">
                      <?= $this->Html->link(__('View'), ['controller' => 'WatchFaces', 'action' => 'view', $watchFaces->id], ['class'=>'btn btn-info btn-xs']) ?>
                      <?= $this->Html->link(__('Edit'), ['controller' => 'WatchFaces', 'action' => 'edit', $watchFaces->id], ['class'=>'btn btn-warning btn-xs']) ?>
                      <?= $this->Form->postLink(__('Delete'), ['controller' => 'WatchFaces', 'action' => 'delete', $watchFaces->id], ['confirm' => __('Are you sure you want to delete # {0}?', $watchFaces->id), 'class'=>'btn btn-danger btn-xs']) ?>
                  </td>
              </tr>
              <?php endforeach; ?>
          </table>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
