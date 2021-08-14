<section class="content-header">
  <h1>
    Oxygen
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
            <dt scope="row"><?= __('Oxygen Value') ?></dt>
            <dd><?= h($oxygen->oxygen_value) ?></dd>
            <dt scope="row"><?= __('Sdk Time') ?></dt>
            <dd><?= h($oxygen->sdk_time) ?></dd>
            <dt scope="row"><?= __('Watch') ?></dt>
            <dd><?= $oxygen->has('watch') ? $this->Html->link($oxygen->watch->name, ['controller' => 'Watches', 'action' => 'view', $oxygen->watch->id]) : '' ?></dd>
            <dt scope="row"><?= __('User') ?></dt>
            <dd><?= $oxygen->has('user') ? $this->Html->link($oxygen->user->id, ['controller' => 'Users', 'action' => 'view', $oxygen->user->id]) : '' ?></dd>
            <dt scope="row"><?= __('Id') ?></dt>
            <dd><?= $this->Number->format($oxygen->id) ?></dd>
            <dt scope="row"><?= __('Date') ?></dt>
            <dd><?= h($oxygen->date) ?></dd>
          </dl>
        </div>
      </div>
    </div>
  </div>

</section>
