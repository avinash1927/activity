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
            <dt scope="row"><?= __('User') ?></dt>
            <dd><?= $watch->has('user') ? $this->Html->link($watch->user->id, ['controller' => 'Users', 'action' => 'view', $watch->user->id]) : '' ?></dd>
            <dt scope="row"><?= __('Id') ?></dt>
            <dd><?= $this->Number->format($watch->id) ?></dd>
            <dt scope="row"><?= __('Created') ?></dt>
            <dd><?= h($watch->created) ?></dd>
            <dt scope="row"><?= __('Modified') ?></dt>
            <dd><?= h($watch->modified) ?></dd>
          </dl>
        </div>
      </div>
    </div>
  </div>

</section>
