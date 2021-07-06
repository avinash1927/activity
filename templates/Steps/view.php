<section class="content-header">
  <h1>
    Step
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
            <dt scope="row"><?= __('Stepscount') ?></dt>
            <dd><?= h($step->stepscount) ?></dd>
            <dt scope="row"><?= __('Distance') ?></dt>
            <dd><?= h($step->distance) ?></dd>
            <dt scope="row"><?= __('Calories') ?></dt>
            <dd><?= h($step->calories) ?></dd>
            <dt scope="row"><?= __('Sdktime') ?></dt>
            <dd><?= h($step->sdktime) ?></dd>
            <dt scope="row"><?= __('Watch') ?></dt>
            <dd><?= $step->has('watch') ? $this->Html->link($step->watch->name, ['controller' => 'Watches', 'action' => 'view', $step->watch->id]) : '' ?></dd>
            <dt scope="row"><?= __('User') ?></dt>
            <dd><?= $step->has('user') ? $this->Html->link($step->user->id, ['controller' => 'Users', 'action' => 'view', $step->user->id]) : '' ?></dd>
            <dt scope="row"><?= __('Id') ?></dt>
            <dd><?= $this->Number->format($step->id) ?></dd>
            <dt scope="row"><?= __('Date') ?></dt>
            <dd><?= h($step->date) ?></dd>
            <dt scope="row"><?= __('Created') ?></dt>
            <dd><?= h($step->created) ?></dd>
            <dt scope="row"><?= __('Modified') ?></dt>
            <dd><?= h($step->modified) ?></dd>
          </dl>
        </div>
      </div>
    </div>
  </div>

</section>
