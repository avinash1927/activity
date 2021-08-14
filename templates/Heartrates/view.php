<section class="content-header">
  <h1>
    Heartrate
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
            <dt scope="row"><?= __('Hr Value') ?></dt>
            <dd><?= h($heartrate->hr_value) ?></dd>
            <dt scope="row"><?= __('Sdk Time') ?></dt>
            <dd><?= h($heartrate->sdk_time) ?></dd>
            <dt scope="row"><?= __('Watch') ?></dt>
            <dd><?= $heartrate->has('watch') ? $this->Html->link($heartrate->watch->name, ['controller' => 'Watches', 'action' => 'view', $heartrate->watch->id]) : '' ?></dd>
            <dt scope="row"><?= __('User') ?></dt>
            <dd><?= $heartrate->has('user') ? $this->Html->link($heartrate->user->id, ['controller' => 'Users', 'action' => 'view', $heartrate->user->id]) : '' ?></dd>
            <dt scope="row"><?= __('Id') ?></dt>
            <dd><?= $this->Number->format($heartrate->id) ?></dd>
            <dt scope="row"><?= __('Date') ?></dt>
            <dd><?= h($heartrate->date) ?></dd>
          </dl>
        </div>
      </div>
    </div>
  </div>

</section>
