<section class="content-header">
  <h1>
    User
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
            <dt scope="row"><?= __('Full Name') ?></dt>
            <dd><?= h($user->full_name) ?></dd>
            <dt scope="row"><?= __('Email') ?></dt>
            <dd><?= h($user->email) ?></dd>
            <dt scope="row"><?= __('Password') ?></dt>
            <dd><?= h($user->password) ?></dd>
            <dt scope="row"><?= __('Phone') ?></dt>
            <dd><?= h($user->phone) ?></dd>
            <dt scope="row"><?= __('Address1') ?></dt>
            <dd><?= h($user->address1) ?></dd>
            <dt scope="row"><?= __('Address2') ?></dt>
            <dd><?= h($user->address2) ?></dd>
            <dt scope="row"><?= __('Block') ?></dt>
            <dd><?= h($user->block) ?></dd>
            <dt scope="row"><?= __('Subblock') ?></dt>
            <dd><?= h($user->subblock) ?></dd>
            <dt scope="row"><?= __('City') ?></dt>
            <dd><?= h($user->city) ?></dd>
            <dt scope="row"><?= __('District') ?></dt>
            <dd><?= h($user->district) ?></dd>
            <dt scope="row"><?= __('State') ?></dt>
            <dd><?= h($user->state) ?></dd>
            <dt scope="row"><?= __('Access Token') ?></dt>
            <dd><?= h($user->access_token) ?></dd>
            <dt scope="row"><?= __('Device Token') ?></dt>
            <dd><?= h($user->device_token) ?></dd>
            <dt scope="row"><?= __('Device Type') ?></dt>
            <dd><?= h($user->device_type) ?></dd>
            <dt scope="row"><?= __('Login Ip') ?></dt>
            <dd><?= h($user->login_ip) ?></dd>
            <dt scope="row"><?= __('Otp') ?></dt>
            <dd><?= h($user->otp) ?></dd>
            <dt scope="row"><?= __('Img File') ?></dt>
            <dd><?= h($user->img_file) ?></dd>
            <dt scope="row"><?= __('Id') ?></dt>
            <dd><?= $this->Number->format($user->id) ?></dd>
            <dt scope="row"><?= __('Blockcode') ?></dt>
            <dd><?= $this->Number->format($user->blockcode) ?></dd>
            <dt scope="row"><?= __('Distcode') ?></dt>
            <dd><?= $this->Number->format($user->distcode) ?></dd>
            <dt scope="row"><?= __('Postal Code') ?></dt>
            <dd><?= $this->Number->format($user->postal_code) ?></dd>
            <dt scope="row"><?= __('Is Notification') ?></dt>
            <dd><?= $this->Number->format($user->is_notification) ?></dd>
            <dt scope="row"><?= __('Is Verified') ?></dt>
            <dd><?= $this->Number->format($user->is_verified) ?></dd>
            <dt scope="row"><?= __('Role') ?></dt>
            <dd><?= $this->Number->format($user->role) ?></dd>
            <dt scope="row"><?= __('Type') ?></dt>
            <dd><?= $this->Number->format($user->type) ?></dd>
            <dt scope="row"><?= __('Status') ?></dt>
            <dd><?= $this->Number->format($user->status) ?></dd>
            <dt scope="row"><?= __('Last Login') ?></dt>
            <dd><?= h($user->last_login) ?></dd>
            <dt scope="row"><?= __('Created On') ?></dt>
            <dd><?= h($user->created_on) ?></dd>
            <dt scope="row"><?= __('Modified On') ?></dt>
            <dd><?= h($user->modified_on) ?></dd>
          </dl>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-share-alt"></i>
          <h3 class="box-title"><?= __('Crop Order') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <?php if (!empty($user->crop_order)): ?>
          <table class="table table-hover">
              <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('Farmer Id') ?></th>
                    <th scope="col"><?= __('Order Id') ?></th>
                    <th scope="col"><?= __('Title') ?></th>
                    <th scope="col"><?= __('Crop Config Id') ?></th>
                    <th scope="col"><?= __('Crop Code Id') ?></th>
                    <th scope="col"><?= __('Quality Grade Id') ?></th>
                    <th scope="col"><?= __('Rate') ?></th>
                    <th scope="col"><?= __('Quantity') ?></th>
                    <th scope="col"><?= __('Total Amount') ?></th>
                    <th scope="col"><?= __('User Id') ?></th>
                    <th scope="col"><?= __('Order Date') ?></th>
                    <th scope="col"><?= __('Rate Date') ?></th>
                    <th scope="col"><?= __('Type') ?></th>
                    <th scope="col"><?= __('Status') ?></th>
                    <th scope="col"><?= __('Created On') ?></th>
                    <th scope="col" class="actions text-center"><?= __('Actions') ?></th>
              </tr>
              <?php foreach ($user->crop_order as $cropOrder): ?>
              <tr>
                    <td><?= h($cropOrder->id) ?></td>
                    <td><?= h($cropOrder->farmer_id) ?></td>
                    <td><?= h($cropOrder->order_id) ?></td>
                    <td><?= h($cropOrder->title) ?></td>
                    <td><?= h($cropOrder->crop_config_id) ?></td>
                    <td><?= h($cropOrder->crop_code_id) ?></td>
                    <td><?= h($cropOrder->quality_grade_id) ?></td>
                    <td><?= h($cropOrder->rate) ?></td>
                    <td><?= h($cropOrder->quantity) ?></td>
                    <td><?= h($cropOrder->total_amount) ?></td>
                    <td><?= h($cropOrder->user_id) ?></td>
                    <td><?= h($cropOrder->order_date) ?></td>
                    <td><?= h($cropOrder->rate_date) ?></td>
                    <td><?= h($cropOrder->type) ?></td>
                    <td><?= h($cropOrder->status) ?></td>
                    <td><?= h($cropOrder->created_on) ?></td>
                      <td class="actions text-right">
                      <?= $this->Html->link(__('View'), ['controller' => 'CropOrder', 'action' => 'view', $cropOrder->id], ['class'=>'btn btn-info btn-xs']) ?>
                      <?= $this->Html->link(__('Edit'), ['controller' => 'CropOrder', 'action' => 'edit', $cropOrder->id], ['class'=>'btn btn-warning btn-xs']) ?>
                      <?= $this->Form->postLink(__('Delete'), ['controller' => 'CropOrder', 'action' => 'delete', $cropOrder->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cropOrder->id), 'class'=>'btn btn-danger btn-xs']) ?>
                  </td>
              </tr>
              <?php endforeach; ?>
          </table>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-share-alt"></i>
          <h3 class="box-title"><?= __('Crop Order Received') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <?php if (!empty($user->crop_order_received)): ?>
          <table class="table table-hover">
              <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('Crop Order Id') ?></th>
                    <th scope="col"><?= __('Farmer Id') ?></th>
                    <th scope="col"><?= __('Crop Config Id') ?></th>
                    <th scope="col"><?= __('Rate') ?></th>
                    <th scope="col"><?= __('Quantity') ?></th>
                    <th scope="col"><?= __('User Id') ?></th>
                    <th scope="col"><?= __('Order Date') ?></th>
                    <th scope="col"><?= __('Rate Date') ?></th>
                    <th scope="col"><?= __('Is Forward') ?></th>
                    <th scope="col"><?= __('Is Approved') ?></th>
                    <th scope="col"><?= __('Received Date') ?></th>
                    <th scope="col"><?= __('Is Order Placed') ?></th>
                    <th scope="col"><?= __('Order Placed Quantity') ?></th>
                    <th scope="col"><?= __('Type') ?></th>
                    <th scope="col"><?= __('Status') ?></th>
                    <th scope="col"><?= __('Created On') ?></th>
                    <th scope="col"><?= __('Payment Advice No') ?></th>
                    <th scope="col"><?= __('Union Payment Advice No') ?></th>
                    <th scope="col" class="actions text-center"><?= __('Actions') ?></th>
              </tr>
              <?php foreach ($user->crop_order_received as $cropOrderReceived): ?>
              <tr>
                    <td><?= h($cropOrderReceived->id) ?></td>
                    <td><?= h($cropOrderReceived->crop_order_id) ?></td>
                    <td><?= h($cropOrderReceived->farmer_id) ?></td>
                    <td><?= h($cropOrderReceived->crop_config_id) ?></td>
                    <td><?= h($cropOrderReceived->rate) ?></td>
                    <td><?= h($cropOrderReceived->quantity) ?></td>
                    <td><?= h($cropOrderReceived->user_id) ?></td>
                    <td><?= h($cropOrderReceived->order_date) ?></td>
                    <td><?= h($cropOrderReceived->rate_date) ?></td>
                    <td><?= h($cropOrderReceived->is_forward) ?></td>
                    <td><?= h($cropOrderReceived->is_approved) ?></td>
                    <td><?= h($cropOrderReceived->received_date) ?></td>
                    <td><?= h($cropOrderReceived->is_order_placed) ?></td>
                    <td><?= h($cropOrderReceived->order_placed_quantity) ?></td>
                    <td><?= h($cropOrderReceived->type) ?></td>
                    <td><?= h($cropOrderReceived->status) ?></td>
                    <td><?= h($cropOrderReceived->created_on) ?></td>
                    <td><?= h($cropOrderReceived->payment_advice_no) ?></td>
                    <td><?= h($cropOrderReceived->union_payment_advice_no) ?></td>
                      <td class="actions text-right">
                      <?= $this->Html->link(__('View'), ['controller' => 'CropOrderReceived', 'action' => 'view', $cropOrderReceived->id], ['class'=>'btn btn-info btn-xs']) ?>
                      <?= $this->Html->link(__('Edit'), ['controller' => 'CropOrderReceived', 'action' => 'edit', $cropOrderReceived->id], ['class'=>'btn btn-warning btn-xs']) ?>
                      <?= $this->Form->postLink(__('Delete'), ['controller' => 'CropOrderReceived', 'action' => 'delete', $cropOrderReceived->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cropOrderReceived->id), 'class'=>'btn btn-danger btn-xs']) ?>
                  </td>
              </tr>
              <?php endforeach; ?>
          </table>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-share-alt"></i>
          <h3 class="box-title"><?= __('Farmers') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <?php if (!empty($user->farmers)): ?>
          <table class="table table-hover">
              <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('Farmer Code') ?></th>
                    <th scope="col"><?= __('Farmer Name') ?></th>
                    <th scope="col"><?= __('Farmer Guardian') ?></th>
                    <th scope="col"><?= __('Phone') ?></th>
                    <th scope="col"><?= __('Password') ?></th>
                    <th scope="col"><?= __('Address') ?></th>
                    <th scope="col"><?= __('Panchayat') ?></th>
                    <th scope="col"><?= __('Samooh Name') ?></th>
                    <th scope="col"><?= __('Village') ?></th>
                    <th scope="col"><?= __('District') ?></th>
                    <th scope="col"><?= __('State') ?></th>
                    <th scope="col"><?= __('Country') ?></th>
                    <th scope="col"><?= __('Postal Code') ?></th>
                    <th scope="col"><?= __('Vo Name') ?></th>
                    <th scope="col"><?= __('Age') ?></th>
                    <th scope="col"><?= __('Gender') ?></th>
                    <th scope="col"><?= __('Total Land') ?></th>
                    <th scope="col"><?= __('Leased Land') ?></th>
                    <th scope="col"><?= __('Block') ?></th>
                    <th scope="col"><?= __('Ward') ?></th>
                    <th scope="col"><?= __('Category') ?></th>
                    <th scope="col"><?= __('Birth Year') ?></th>
                    <th scope="col"><?= __('Adhaar') ?></th>
                    <th scope="col"><?= __('Qualification') ?></th>
                    <th scope="col"><?= __('Bank Name') ?></th>
                    <th scope="col"><?= __('Bank Ifsc') ?></th>
                    <th scope="col"><?= __('Account No') ?></th>
                    <th scope="col"><?= __('Bank Branch') ?></th>
                    <th scope="col"><?= __('Nominee Name') ?></th>
                    <th scope="col"><?= __('Nominee Birth Year') ?></th>
                    <th scope="col"><?= __('Nominee Adhaar') ?></th>
                    <th scope="col"><?= __('Nominee Relation') ?></th>
                    <th scope="col"><?= __('No Of Shares') ?></th>
                    <th scope="col"><?= __('Rec Mem Reg') ?></th>
                    <th scope="col"><?= __('Rec Mem Uuid') ?></th>
                    <th scope="col"><?= __('Rec Mem Name') ?></th>
                    <th scope="col"><?= __('Rec Mem Father') ?></th>
                    <th scope="col"><?= __('Rec Mem Sign') ?></th>
                    <th scope="col"><?= __('Rec Mem2 Reg') ?></th>
                    <th scope="col"><?= __('Rec Mem2 Uuid') ?></th>
                    <th scope="col"><?= __('Rec Mem2 Name') ?></th>
                    <th scope="col"><?= __('Rec Mem2 Father') ?></th>
                    <th scope="col"><?= __('Rec Mem2 Sign') ?></th>
                    <th scope="col"><?= __('Assigned To') ?></th>
                    <th scope="col"><?= __('Address Verified') ?></th>
                    <th scope="col"><?= __('Adress Proof Uploaded') ?></th>
                    <th scope="col"><?= __('Membership Paid') ?></th>
                    <th scope="col"><?= __('Membership Paid Slip Uploaded') ?></th>
                    <th scope="col"><?= __('Adhaar Verified') ?></th>
                    <th scope="col"><?= __('Adhaar Uploaded') ?></th>
                    <th scope="col"><?= __('Land Declared Verified') ?></th>
                    <th scope="col"><?= __('Land Document Uploaded') ?></th>
                    <th scope="col"><?= __('Lease Land Verified') ?></th>
                    <th scope="col"><?= __('Lease Land Document Uploaded') ?></th>
                    <th scope="col"><?= __('Bank Details Verified') ?></th>
                    <th scope="col"><?= __('Bank Document Uploaded') ?></th>
                    <th scope="col"><?= __('Profile Img') ?></th>
                    <th scope="col"><?= __('Sign Image') ?></th>
                    <th scope="col"><?= __('Domicile') ?></th>
                    <th scope="col"><?= __('Challan Copy') ?></th>
                    <th scope="col"><?= __('Utr No') ?></th>
                    <th scope="col"><?= __('Type') ?></th>
                    <th scope="col"><?= __('Status') ?></th>
                    <th scope="col"><?= __('Created On') ?></th>
                    <th scope="col"><?= __('Date Of Apply') ?></th>
                    <th scope="col"><?= __('Created On New') ?></th>
                    <th scope="col"><?= __('Created By') ?></th>
                    <th scope="col"><?= __('Land Area') ?></th>
                    <th scope="col"><?= __('Patta Land Area') ?></th>
                    <th scope="col"><?= __('Accepted') ?></th>
                    <th scope="col"><?= __('User Id') ?></th>
                    <th scope="col"><?= __('ISmember') ?></th>
                    <th scope="col"><?= __('Enrollment Number') ?></th>
                    <th scope="col"><?= __('Remark') ?></th>
                    <th scope="col"><?= __('Updated On') ?></th>
                    <th scope="col" class="actions text-center"><?= __('Actions') ?></th>
              </tr>
              <?php foreach ($user->farmers as $farmers): ?>
              <tr>
                    <td><?= h($farmers->id) ?></td>
                    <td><?= h($farmers->farmer_code) ?></td>
                    <td><?= h($farmers->farmer_name) ?></td>
                    <td><?= h($farmers->farmer_guardian) ?></td>
                    <td><?= h($farmers->phone) ?></td>
                    <td><?= h($farmers->password) ?></td>
                    <td><?= h($farmers->address) ?></td>
                    <td><?= h($farmers->panchayat) ?></td>
                    <td><?= h($farmers->samooh_name) ?></td>
                    <td><?= h($farmers->village) ?></td>
                    <td><?= h($farmers->district) ?></td>
                    <td><?= h($farmers->state) ?></td>
                    <td><?= h($farmers->country) ?></td>
                    <td><?= h($farmers->postal_code) ?></td>
                    <td><?= h($farmers->vo_name) ?></td>
                    <td><?= h($farmers->age) ?></td>
                    <td><?= h($farmers->gender) ?></td>
                    <td><?= h($farmers->total_land) ?></td>
                    <td><?= h($farmers->leased_land) ?></td>
                    <td><?= h($farmers->block) ?></td>
                    <td><?= h($farmers->ward) ?></td>
                    <td><?= h($farmers->category) ?></td>
                    <td><?= h($farmers->birth_year) ?></td>
                    <td><?= h($farmers->adhaar) ?></td>
                    <td><?= h($farmers->qualification) ?></td>
                    <td><?= h($farmers->bank_name) ?></td>
                    <td><?= h($farmers->bank_ifsc) ?></td>
                    <td><?= h($farmers->account_no) ?></td>
                    <td><?= h($farmers->bank_branch) ?></td>
                    <td><?= h($farmers->nominee_name) ?></td>
                    <td><?= h($farmers->nominee_birth_year) ?></td>
                    <td><?= h($farmers->nominee_adhaar) ?></td>
                    <td><?= h($farmers->nominee_relation) ?></td>
                    <td><?= h($farmers->no_of_shares) ?></td>
                    <td><?= h($farmers->rec_mem_reg) ?></td>
                    <td><?= h($farmers->rec_mem_uuid) ?></td>
                    <td><?= h($farmers->rec_mem_name) ?></td>
                    <td><?= h($farmers->rec_mem_father) ?></td>
                    <td><?= h($farmers->rec_mem_sign) ?></td>
                    <td><?= h($farmers->rec_mem2_reg) ?></td>
                    <td><?= h($farmers->rec_mem2_uuid) ?></td>
                    <td><?= h($farmers->rec_mem2_name) ?></td>
                    <td><?= h($farmers->rec_mem2_father) ?></td>
                    <td><?= h($farmers->rec_mem2_sign) ?></td>
                    <td><?= h($farmers->assigned_to) ?></td>
                    <td><?= h($farmers->address_verified) ?></td>
                    <td><?= h($farmers->adress_proof_uploaded) ?></td>
                    <td><?= h($farmers->membership_paid) ?></td>
                    <td><?= h($farmers->membership_paid_slip_uploaded) ?></td>
                    <td><?= h($farmers->adhaar_verified) ?></td>
                    <td><?= h($farmers->adhaar_uploaded) ?></td>
                    <td><?= h($farmers->land_declared_verified) ?></td>
                    <td><?= h($farmers->land_document_uploaded) ?></td>
                    <td><?= h($farmers->lease_land_verified) ?></td>
                    <td><?= h($farmers->lease_land_document_uploaded) ?></td>
                    <td><?= h($farmers->bank_details_verified) ?></td>
                    <td><?= h($farmers->bank_document_uploaded) ?></td>
                    <td><?= h($farmers->profile_img) ?></td>
                    <td><?= h($farmers->sign_image) ?></td>
                    <td><?= h($farmers->domicile) ?></td>
                    <td><?= h($farmers->challan_copy) ?></td>
                    <td><?= h($farmers->utr_no) ?></td>
                    <td><?= h($farmers->type) ?></td>
                    <td><?= h($farmers->status) ?></td>
                    <td><?= h($farmers->created_on) ?></td>
                    <td><?= h($farmers->date_of_apply) ?></td>
                    <td><?= h($farmers->created_on_new) ?></td>
                    <td><?= h($farmers->created_by) ?></td>
                    <td><?= h($farmers->land_area) ?></td>
                    <td><?= h($farmers->patta_land_area) ?></td>
                    <td><?= h($farmers->accepted) ?></td>
                    <td><?= h($farmers->user_id) ?></td>
                    <td><?= h($farmers->ISmember) ?></td>
                    <td><?= h($farmers->enrollment_number) ?></td>
                    <td><?= h($farmers->remark) ?></td>
                    <td><?= h($farmers->updated_on) ?></td>
                      <td class="actions text-right">
                      <?= $this->Html->link(__('View'), ['controller' => 'Farmers', 'action' => 'view', $farmers->id], ['class'=>'btn btn-info btn-xs']) ?>
                      <?= $this->Html->link(__('Edit'), ['controller' => 'Farmers', 'action' => 'edit', $farmers->id], ['class'=>'btn btn-warning btn-xs']) ?>
                      <?= $this->Form->postLink(__('Delete'), ['controller' => 'Farmers', 'action' => 'delete', $farmers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $farmers->id), 'class'=>'btn btn-danger btn-xs']) ?>
                  </td>
              </tr>
              <?php endforeach; ?>
          </table>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-share-alt"></i>
          <h3 class="box-title"><?= __('Harvest') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <?php if (!empty($user->harvest)): ?>
          <table class="table table-hover">
              <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('Harvest Date') ?></th>
                    <th scope="col"><?= __('Grade') ?></th>
                    <th scope="col"><?= __('Quantity') ?></th>
                    <th scope="col"><?= __('Price') ?></th>
                    <th scope="col"><?= __('Total Price') ?></th>
                    <th scope="col"><?= __('Crop Name') ?></th>
                    <th scope="col"><?= __('Crop Id') ?></th>
                    <th scope="col"><?= __('Plot Id') ?></th>
                    <th scope="col"><?= __('Farmer Id') ?></th>
                    <th scope="col"><?= __('User Id') ?></th>
                    <th scope="col"><?= __('Is Final') ?></th>
                    <th scope="col"><?= __('Type') ?></th>
                    <th scope="col"><?= __('Status') ?></th>
                    <th scope="col"><?= __('Created On') ?></th>
                    <th scope="col"><?= __('Created By') ?></th>
                    <th scope="col" class="actions text-center"><?= __('Actions') ?></th>
              </tr>
              <?php foreach ($user->harvest as $harvest): ?>
              <tr>
                    <td><?= h($harvest->id) ?></td>
                    <td><?= h($harvest->harvest_date) ?></td>
                    <td><?= h($harvest->grade) ?></td>
                    <td><?= h($harvest->quantity) ?></td>
                    <td><?= h($harvest->price) ?></td>
                    <td><?= h($harvest->total_price) ?></td>
                    <td><?= h($harvest->crop_name) ?></td>
                    <td><?= h($harvest->crop_id) ?></td>
                    <td><?= h($harvest->plot_id) ?></td>
                    <td><?= h($harvest->farmer_id) ?></td>
                    <td><?= h($harvest->user_id) ?></td>
                    <td><?= h($harvest->is_final) ?></td>
                    <td><?= h($harvest->type) ?></td>
                    <td><?= h($harvest->status) ?></td>
                    <td><?= h($harvest->created_on) ?></td>
                    <td><?= h($harvest->created_by) ?></td>
                      <td class="actions text-right">
                      <?= $this->Html->link(__('View'), ['controller' => 'Harvest', 'action' => 'view', $harvest->id], ['class'=>'btn btn-info btn-xs']) ?>
                      <?= $this->Html->link(__('Edit'), ['controller' => 'Harvest', 'action' => 'edit', $harvest->id], ['class'=>'btn btn-warning btn-xs']) ?>
                      <?= $this->Form->postLink(__('Delete'), ['controller' => 'Harvest', 'action' => 'delete', $harvest->id], ['confirm' => __('Are you sure you want to delete # {0}?', $harvest->id), 'class'=>'btn btn-danger btn-xs']) ?>
                  </td>
              </tr>
              <?php endforeach; ?>
          </table>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-share-alt"></i>
          <h3 class="box-title"><?= __('Updatebankdata') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <?php if (!empty($user->updatebankdata)): ?>
          <table class="table table-hover">
              <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('User Id') ?></th>
                    <th scope="col"><?= __('Old Bank Name') ?></th>
                    <th scope="col"><?= __('Old Account No') ?></th>
                    <th scope="col"><?= __('Old Ifsc Code') ?></th>
                    <th scope="col"><?= __('Old Branch Name') ?></th>
                    <th scope="col"><?= __('New Bank Name') ?></th>
                    <th scope="col"><?= __('New Account No') ?></th>
                    <th scope="col"><?= __('New Ifsc Code') ?></th>
                    <th scope="col"><?= __('New Branch Name') ?></th>
                    <th scope="col"><?= __('Status') ?></th>
                    <th scope="col"><?= __('Action On') ?></th>
                    <th scope="col"><?= __('Is Trash') ?></th>
                    <th scope="col"><?= __('Created On') ?></th>
                    <th scope="col" class="actions text-center"><?= __('Actions') ?></th>
              </tr>
              <?php foreach ($user->updatebankdata as $updatebankdata): ?>
              <tr>
                    <td><?= h($updatebankdata->id) ?></td>
                    <td><?= h($updatebankdata->user_id) ?></td>
                    <td><?= h($updatebankdata->old_bank_name) ?></td>
                    <td><?= h($updatebankdata->old_account_no) ?></td>
                    <td><?= h($updatebankdata->old_ifsc_code) ?></td>
                    <td><?= h($updatebankdata->old_branch_name) ?></td>
                    <td><?= h($updatebankdata->new_bank_name) ?></td>
                    <td><?= h($updatebankdata->new_account_no) ?></td>
                    <td><?= h($updatebankdata->new_ifsc_code) ?></td>
                    <td><?= h($updatebankdata->new_branch_name) ?></td>
                    <td><?= h($updatebankdata->status) ?></td>
                    <td><?= h($updatebankdata->action_on) ?></td>
                    <td><?= h($updatebankdata->is_trash) ?></td>
                    <td><?= h($updatebankdata->created_on) ?></td>
                      <td class="actions text-right">
                      <?= $this->Html->link(__('View'), ['controller' => 'Updatebankdata', 'action' => 'view', $updatebankdata->id], ['class'=>'btn btn-info btn-xs']) ?>
                      <?= $this->Html->link(__('Edit'), ['controller' => 'Updatebankdata', 'action' => 'edit', $updatebankdata->id], ['class'=>'btn btn-warning btn-xs']) ?>
                      <?= $this->Form->postLink(__('Delete'), ['controller' => 'Updatebankdata', 'action' => 'delete', $updatebankdata->id], ['confirm' => __('Are you sure you want to delete # {0}?', $updatebankdata->id), 'class'=>'btn btn-danger btn-xs']) ?>
                  </td>
              </tr>
              <?php endforeach; ?>
          </table>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-share-alt"></i>
          <h3 class="box-title"><?= __('User Crop Commision') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <?php if (!empty($user->user_crop_commision)): ?>
          <table class="table table-hover">
              <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('User Id') ?></th>
                    <th scope="col"><?= __('District') ?></th>
                    <th scope="col"><?= __('Crop Config Id') ?></th>
                    <th scope="col"><?= __('Crop Code Id') ?></th>
                    <th scope="col"><?= __('Quality Grade Id') ?></th>
                    <th scope="col"><?= __('Commission') ?></th>
                    <th scope="col"><?= __('Type') ?></th>
                    <th scope="col"><?= __('Status') ?></th>
                    <th scope="col"><?= __('Created On') ?></th>
                    <th scope="col"><?= __('Created By') ?></th>
                    <th scope="col" class="actions text-center"><?= __('Actions') ?></th>
              </tr>
              <?php foreach ($user->user_crop_commision as $userCropCommision): ?>
              <tr>
                    <td><?= h($userCropCommision->id) ?></td>
                    <td><?= h($userCropCommision->user_id) ?></td>
                    <td><?= h($userCropCommision->district) ?></td>
                    <td><?= h($userCropCommision->crop_config_id) ?></td>
                    <td><?= h($userCropCommision->crop_code_id) ?></td>
                    <td><?= h($userCropCommision->quality_grade_id) ?></td>
                    <td><?= h($userCropCommision->commission) ?></td>
                    <td><?= h($userCropCommision->type) ?></td>
                    <td><?= h($userCropCommision->status) ?></td>
                    <td><?= h($userCropCommision->created_on) ?></td>
                    <td><?= h($userCropCommision->created_by) ?></td>
                      <td class="actions text-right">
                      <?= $this->Html->link(__('View'), ['controller' => 'UserCropCommision', 'action' => 'view', $userCropCommision->id], ['class'=>'btn btn-info btn-xs']) ?>
                      <?= $this->Html->link(__('Edit'), ['controller' => 'UserCropCommision', 'action' => 'edit', $userCropCommision->id], ['class'=>'btn btn-warning btn-xs']) ?>
                      <?= $this->Form->postLink(__('Delete'), ['controller' => 'UserCropCommision', 'action' => 'delete', $userCropCommision->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userCropCommision->id), 'class'=>'btn btn-danger btn-xs']) ?>
                  </td>
              </tr>
              <?php endforeach; ?>
          </table>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-share-alt"></i>
          <h3 class="box-title"><?= __('Vw Veg Sale Reports') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <?php if (!empty($user->vw_veg_sale_reports)): ?>
          <table class="table table-hover">
              <tr>
                    <th scope="col"><?= __('Type') ?></th>
                    <th scope="col"><?= __('Assigned To') ?></th>
                    <th scope="col"><?= __('Payment Advice No') ?></th>
                    <th scope="col"><?= __('User Id') ?></th>
                    <th scope="col"><?= __('Farmer Id') ?></th>
                    <th scope="col"><?= __('Rate') ?></th>
                    <th scope="col"><?= __('Quantity') ?></th>
                    <th scope="col"><?= __('Revenue') ?></th>
                    <th scope="col"><?= __('Order Date') ?></th>
                    <th scope="col"><?= __('Block') ?></th>
                    <th scope="col"><?= __('Blockname') ?></th>
                    <th scope="col"><?= __('District') ?></th>
                    <th scope="col"><?= __('Distname') ?></th>
                    <th scope="col" class="actions text-center"><?= __('Actions') ?></th>
              </tr>
              <?php foreach ($user->vw_veg_sale_reports as $vwVegSaleReports): ?>
              <tr>
                    <td><?= h($vwVegSaleReports->type) ?></td>
                    <td><?= h($vwVegSaleReports->assigned_to) ?></td>
                    <td><?= h($vwVegSaleReports->payment_advice_no) ?></td>
                    <td><?= h($vwVegSaleReports->user_id) ?></td>
                    <td><?= h($vwVegSaleReports->farmer_id) ?></td>
                    <td><?= h($vwVegSaleReports->rate) ?></td>
                    <td><?= h($vwVegSaleReports->quantity) ?></td>
                    <td><?= h($vwVegSaleReports->revenue) ?></td>
                    <td><?= h($vwVegSaleReports->order_date) ?></td>
                    <td><?= h($vwVegSaleReports->block) ?></td>
                    <td><?= h($vwVegSaleReports->blockname) ?></td>
                    <td><?= h($vwVegSaleReports->district) ?></td>
                    <td><?= h($vwVegSaleReports->distname) ?></td>
                      <td class="actions text-right">
                      <?= $this->Html->link(__('View'), ['controller' => 'VwVegSaleReports', 'action' => 'view', $vwVegSaleReports->], ['class'=>'btn btn-info btn-xs']) ?>
                      <?= $this->Html->link(__('Edit'), ['controller' => 'VwVegSaleReports', 'action' => 'edit', $vwVegSaleReports->], ['class'=>'btn btn-warning btn-xs']) ?>
                      <?= $this->Form->postLink(__('Delete'), ['controller' => 'VwVegSaleReports', 'action' => 'delete', $vwVegSaleReports->], ['confirm' => __('Are you sure you want to delete # {0}?', $vwVegSaleReports->), 'class'=>'btn btn-danger btn-xs']) ?>
                  </td>
              </tr>
              <?php endforeach; ?>
          </table>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
