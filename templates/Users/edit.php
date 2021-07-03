<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      User
      <small><?php echo __('Edit'); ?></small>
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
          <?php echo $this->Form->create($user, ['role' => 'form']); ?>
            <div class="box-body">
              <?php
                echo $this->Form->control('full_name');
                echo $this->Form->control('email');
                echo $this->Form->control('password');
                echo $this->Form->control('phone');
                echo $this->Form->control('address1');
                echo $this->Form->control('address2');
                echo $this->Form->control('blockcode');
                echo $this->Form->control('block');
                echo $this->Form->control('subblock');
                echo $this->Form->control('city');
                echo $this->Form->control('distcode');
                echo $this->Form->control('district');
                echo $this->Form->control('state');
                echo $this->Form->control('postal_code');
                echo $this->Form->control('access_token');
                echo $this->Form->control('device_token');
                echo $this->Form->control('device_type');
                echo $this->Form->control('is_notification');
                echo $this->Form->control('login_ip');
                echo $this->Form->control('last_login', ['empty' => true]);
                echo $this->Form->control('otp');
                echo $this->Form->control('img_file');
                echo $this->Form->control('is_verified');
                echo $this->Form->control('role');
                echo $this->Form->control('type');
                echo $this->Form->control('status');
                echo $this->Form->control('created_on');
                echo $this->Form->control('modified_on');
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
