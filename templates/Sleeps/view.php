<section class="content-header">
  <h1>
    Sleep
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
            <dt scope="row"><?= __('Sleep Type') ?></dt>
            <dd><?= h($sleep->sleep_type) ?></dd>
            <dt scope="row"><?= __('Sleep Hours') ?></dt>
            <dd><?= h($sleep->sleep_hours) ?></dd>
            <dt scope="row"><?= __('Sleep Start Time') ?></dt>
            <dd><?= h($sleep->sleep_start_time) ?></dd>
            <dt scope="row"><?= __('Sleep End Time') ?></dt>
            <dd><?= h($sleep->sleep_end_time) ?></dd>
            <dt scope="row"><?= __('Watch') ?></dt>
            <dd><?= $sleep->has('watch') ? $this->Html->link($sleep->watch->name, ['controller' => 'Watches', 'action' => 'view', $sleep->watch->id]) : '' ?></dd>
            <dt scope="row"><?= __('User') ?></dt>
            <dd><?= $sleep->has('user') ? $this->Html->link($sleep->user->id, ['controller' => 'Users', 'action' => 'view', $sleep->user->id]) : '' ?></dd>
            <dt scope="row"><?= __('Id') ?></dt>
            <dd><?= $this->Number->format($sleep->id) ?></dd>
            <dt scope="row"><?= __('Date') ?></dt>
            <dd><?= h($sleep->date) ?></dd>
            <dt scope="row"><?= __('Created') ?></dt>
            <dd><?= h($sleep->created) ?></dd>
            <dt scope="row"><?= __('Modified') ?></dt>
            <dd><?= h($sleep->modified) ?></dd>
          </dl>
        </div>
      </div>
    </div>
  </div>

</section>
