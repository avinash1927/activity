<section class="content-header">
  <h1>
    Device Detail
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
            <dt scope="row"><?= __('Watch') ?></dt>
            <dd><?= $deviceDetail->has('watch') ? $this->Html->link($deviceDetail->watch->name, ['controller' => 'Watches', 'action' => 'view', $deviceDetail->watch->id]) : '' ?></dd>
            <dt scope="row"><?= __('Watch Mac') ?></dt>
            <dd><?= h($deviceDetail->watch_mac) ?></dd>
            <dt scope="row"><?= __('Watch Name') ?></dt>
            <dd><?= h($deviceDetail->watch_name) ?></dd>
            <dt scope="row"><?= __('Watch Firmware') ?></dt>
            <dd><?= h($deviceDetail->watch_firmware) ?></dd>
            <dt scope="row"><?= __('Id') ?></dt>
            <dd><?= $this->Number->format($deviceDetail->id) ?></dd>
            <dt scope="row"><?= __('User Id') ?></dt>
            <dd><?= $this->Number->format($deviceDetail->user_id) ?></dd>
            <dt scope="row"><?= __('Installation Date') ?></dt>
            <dd><?= h($deviceDetail->installation_date) ?></dd>
            <dt scope="row"><?= __('Created') ?></dt>
            <dd><?= h($deviceDetail->created) ?></dd>
            <dt scope="row"><?= __('Modified') ?></dt>
            <dd><?= h($deviceDetail->modified) ?></dd>
          </dl>
        </div>
      </div>
    </div>
  </div>

</section>
