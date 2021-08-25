<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Sleeps

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
                  <th scope="col"><?= $this->Paginator->sort('sleep_type') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('sleep_hours') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('sleep_start_time') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('sleep_end_time') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('date') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('watch_id') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                  <th scope="col" class="actions text-center"><?= __('Actions') ?></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($sleeps as $sleep): ?>
                <tr>
                  <td><?= $this->Number->format($sleep->id) ?></td>
                  <td><?= h($sleep->sleep_type) ?></td>
                  <td><?= h($sleep->sleep_hours) ?></td>
                  <td><?= h($sleep->sleep_start_time) ?></td>
                  <td><?= h($sleep->sleep_end_time) ?></td>
                  <td><?= h($sleep->date) ?></td>
                  <td><?= $this->Number->format($sleep->watch_id) ?></td>
                  <td><?= $this->Number->format($sleep->user_id) ?></td>
                  <td class="actions text-right">
                      <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sleep->id], ['class'=>'btn btn-warning btn-xs']) ?>
                      <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sleep->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sleep->id), 'class'=>'btn btn-danger btn-xs']) ?>
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