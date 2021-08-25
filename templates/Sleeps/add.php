<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sleep $sleep
 */
?>
<!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Sleep
      <small><?php echo __('Add'); ?></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo $this->Url->build(['action' => 'index']); ?>"><i class="fa fa-dashboard"></i> <?php echo __('Home'); ?></a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title"><?php echo __('Form'); ?></h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <?php echo $this->Form->create($sleep, ['role' => 'form']); ?>
            <div class="box-body">
              <?php
                echo $this->Form->control('sleep_type');
                echo $this->Form->control('sleep_hours');
                echo $this->Form->control('sleep_start_time');
                echo $this->Form->control('sleep_end_time');
                echo $this->Form->control('date', ['empty' => true]);
                echo $this->Form->control('watch_id', ['options' => $watches, 'empty' => true]);
                echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
              ?>
            </div>
            <!-- /.box-body -->

          <?php echo $this->Form->submit(__('Submit')); ?>

          <?php echo $this->Form->end(); ?>
        </div>
        <!-- /.box -->
      </div>
  </div>
  <!-- /.row -->
</section>

