<section class="content-header">
  <h1>
    Watch Face
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
            <dd><?= $watchFace->has('watch') ? $this->Html->link($watchFace->watch->name, ['controller' => 'Watches', 'action' => 'view', $watchFace->watch->id]) : '' ?></dd>
            <dt scope="row"><?= __('User') ?></dt>
            <dd><?= $watchFace->has('user') ? $this->Html->link($watchFace->user->id, ['controller' => 'Users', 'action' => 'view', $watchFace->user->id]) : '' ?></dd>
            <dt scope="row"><?= __('Preview') ?></dt>
            <dd><?= h($watchFace->preview) ?></dd>
            <dt scope="row"><?= __('File') ?></dt>
            <dd><?= h($watchFace->file) ?></dd>
            <dt scope="row"><?= __('Id') ?></dt>
            <dd><?= $this->Number->format($watchFace->id) ?></dd>
            <dt scope="row"><?= __('Created') ?></dt>
            <dd><?= h($watchFace->created) ?></dd>
            <dt scope="row"><?= __('Modified') ?></dt>
            <dd><?= h($watchFace->modified) ?></dd>
            <dt scope="row"><?= __('Is Enable') ?></dt>
            <dd><?= $watchFace->is_enable ? __('Yes') : __('No'); ?></dd>
          </dl>
        </div>
      </div>
    </div>
  </div>

</section>
