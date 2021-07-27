<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Watch Faces

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
                  <th scope="col"><?= $this->Paginator->sort('watch_id') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('preview') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('file') ?></th>
                  <th scope="col">Status</th>
                  <th scope="col" class="actions text-center"><?= __('Actions') ?></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($watchFaces as $watchFace): ?>
                <tr>
                  <td><?= $this->Number->format($watchFace->id) ?></td>
                  <td><?= $this->Number->format($watchFace->watch_id) ?></td>
                  <td><?= $this->Number->format($watchFace->user_id) ?></td>
                  <td><?= h($watchFace->preview) ?></td>
                  <td><?= h($watchFace->file) ?></td>
                  <td>
                    <?php
                    if($watchFace->is_enable == 1){
                      echo '<p class="text-green">Active</p>';
                    }else{
                      echo '<p class="text-red">In Active</p>';
                    }
                    ?>
                  </td>
                  <td class="actions text-right">
                      <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $watchFace->id], ['confirm' => __('Are you sure you want to delete # {0}?', $watchFace->id), 'class'=>'btn btn-danger btn-xs']) ?>
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