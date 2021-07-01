<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users view content">
            <h3><?= h($user->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Full Name') ?></th>
                    <td><?= h($user->full_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($user->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Password') ?></th>
                    <td><?= h($user->password) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone') ?></th>
                    <td><?= h($user->phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Address1') ?></th>
                    <td><?= h($user->address1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Address2') ?></th>
                    <td><?= h($user->address2) ?></td>
                </tr>
                <tr>
                    <th><?= __('Block') ?></th>
                    <td><?= h($user->block) ?></td>
                </tr>
                <tr>
                    <th><?= __('Subblock') ?></th>
                    <td><?= h($user->subblock) ?></td>
                </tr>
                <tr>
                    <th><?= __('City') ?></th>
                    <td><?= h($user->city) ?></td>
                </tr>
                <tr>
                    <th><?= __('District') ?></th>
                    <td><?= h($user->district) ?></td>
                </tr>
                <tr>
                    <th><?= __('State') ?></th>
                    <td><?= h($user->state) ?></td>
                </tr>
                <tr>
                    <th><?= __('Access Token') ?></th>
                    <td><?= h($user->access_token) ?></td>
                </tr>
                <tr>
                    <th><?= __('Device Token') ?></th>
                    <td><?= h($user->device_token) ?></td>
                </tr>
                <tr>
                    <th><?= __('Device Type') ?></th>
                    <td><?= h($user->device_type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Login Ip') ?></th>
                    <td><?= h($user->login_ip) ?></td>
                </tr>
                <tr>
                    <th><?= __('Otp') ?></th>
                    <td><?= h($user->otp) ?></td>
                </tr>
                <tr>
                    <th><?= __('Img File') ?></th>
                    <td><?= h($user->img_file) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($user->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Postal Code') ?></th>
                    <td><?= $this->Number->format($user->postal_code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Is Notification') ?></th>
                    <td><?= $this->Number->format($user->is_notification) ?></td>
                </tr>
                <tr>
                    <th><?= __('Is Verified') ?></th>
                    <td><?= $this->Number->format($user->is_verified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Role') ?></th>
                    <td><?= $this->Number->format($user->role) ?></td>
                </tr>
                <tr>
                    <th><?= __('Type') ?></th>
                    <td><?= $this->Number->format($user->type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $this->Number->format($user->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Last Login') ?></th>
                    <td><?= h($user->last_login) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created On') ?></th>
                    <td><?= h($user->created_on) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified On') ?></th>
                    <td><?= h($user->modified_on) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Crop Order') ?></h4>
                <?php if (!empty($user->crop_order)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Farmer Id') ?></th>
                            <th><?= __('Order Id') ?></th>
                            <th><?= __('Title') ?></th>
                            <th><?= __('Crop Config Id') ?></th>
                            <th><?= __('Crop Code Id') ?></th>
                            <th><?= __('Quality Grade Id') ?></th>
                            <th><?= __('Rate') ?></th>
                            <th><?= __('Quantity') ?></th>
                            <th><?= __('Total Amount') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Order Date') ?></th>
                            <th><?= __('Rate Date') ?></th>
                            <th><?= __('Type') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Created On') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->crop_order as $cropOrder) : ?>
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
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'CropOrder', 'action' => 'view', $cropOrder->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'CropOrder', 'action' => 'edit', $cropOrder->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'CropOrder', 'action' => 'delete', $cropOrder->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cropOrder->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Crop Order Received') ?></h4>
                <?php if (!empty($user->crop_order_received)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Crop Order Id') ?></th>
                            <th><?= __('Farmer Id') ?></th>
                            <th><?= __('Crop Config Id') ?></th>
                            <th><?= __('Rate') ?></th>
                            <th><?= __('Quantity') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Order Date') ?></th>
                            <th><?= __('Rate Date') ?></th>
                            <th><?= __('Is Forward') ?></th>
                            <th><?= __('Is Approved') ?></th>
                            <th><?= __('Type') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Created On') ?></th>
                            <th><?= __('Payment Advice No') ?></th>
                            <th><?= __('Is Order Placed') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->crop_order_received as $cropOrderReceived) : ?>
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
                            <td><?= h($cropOrderReceived->type) ?></td>
                            <td><?= h($cropOrderReceived->status) ?></td>
                            <td><?= h($cropOrderReceived->created_on) ?></td>
                            <td><?= h($cropOrderReceived->payment_advice_no) ?></td>
                            <td><?= h($cropOrderReceived->is_order_placed) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'CropOrderReceived', 'action' => 'view', $cropOrderReceived->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'CropOrderReceived', 'action' => 'edit', $cropOrderReceived->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'CropOrderReceived', 'action' => 'delete', $cropOrderReceived->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cropOrderReceived->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Farmers') ?></h4>
                <?php if (!empty($user->farmers)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Farmer Code') ?></th>
                            <th><?= __('Farmer Name') ?></th>
                            <th><?= __('Farmer Guardian') ?></th>
                            <th><?= __('Phone') ?></th>
                            <th><?= __('Password') ?></th>
                            <th><?= __('Address') ?></th>
                            <th><?= __('Panchayat') ?></th>
                            <th><?= __('Samooh Name') ?></th>
                            <th><?= __('Village') ?></th>
                            <th><?= __('District') ?></th>
                            <th><?= __('State') ?></th>
                            <th><?= __('Country') ?></th>
                            <th><?= __('Postal Code') ?></th>
                            <th><?= __('Vo Name') ?></th>
                            <th><?= __('Age') ?></th>
                            <th><?= __('Gender') ?></th>
                            <th><?= __('Total Land') ?></th>
                            <th><?= __('Leased Land') ?></th>
                            <th><?= __('Block') ?></th>
                            <th><?= __('Ward') ?></th>
                            <th><?= __('Category') ?></th>
                            <th><?= __('Birth Year') ?></th>
                            <th><?= __('Adhaar') ?></th>
                            <th><?= __('Qualification') ?></th>
                            <th><?= __('Bank Name') ?></th>
                            <th><?= __('Bank Ifsc') ?></th>
                            <th><?= __('Account No') ?></th>
                            <th><?= __('Bank Branch') ?></th>
                            <th><?= __('Nominee Name') ?></th>
                            <th><?= __('Nominee Birth Year') ?></th>
                            <th><?= __('Nominee Adhaar') ?></th>
                            <th><?= __('Nominee Relation') ?></th>
                            <th><?= __('No Of Shares') ?></th>
                            <th><?= __('Rec Mem Reg') ?></th>
                            <th><?= __('Rec Mem Uuid') ?></th>
                            <th><?= __('Rec Mem Name') ?></th>
                            <th><?= __('Rec Mem Father') ?></th>
                            <th><?= __('Rec Mem Sign') ?></th>
                            <th><?= __('Rec Mem2 Reg') ?></th>
                            <th><?= __('Rec Mem2 Uuid') ?></th>
                            <th><?= __('Rec Mem2 Name') ?></th>
                            <th><?= __('Rec Mem2 Father') ?></th>
                            <th><?= __('Rec Mem2 Sign') ?></th>
                            <th><?= __('Assigned To') ?></th>
                            <th><?= __('Address Verified') ?></th>
                            <th><?= __('Adress Proof Uploaded') ?></th>
                            <th><?= __('Membership Paid') ?></th>
                            <th><?= __('Membership Paid Slip Uploaded') ?></th>
                            <th><?= __('Adhaar Verified') ?></th>
                            <th><?= __('Adhaar Uploaded') ?></th>
                            <th><?= __('Land Declared Verified') ?></th>
                            <th><?= __('Land Document Uploaded') ?></th>
                            <th><?= __('Lease Land Verified') ?></th>
                            <th><?= __('Lease Land Document Uploaded') ?></th>
                            <th><?= __('Bank Details Verified') ?></th>
                            <th><?= __('Bank Document Uploaded') ?></th>
                            <th><?= __('Profile Img') ?></th>
                            <th><?= __('Sign Image') ?></th>
                            <th><?= __('Domicile') ?></th>
                            <th><?= __('Challan Copy') ?></th>
                            <th><?= __('Utr No') ?></th>
                            <th><?= __('Type') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Created On') ?></th>
                            <th><?= __('Created On New') ?></th>
                            <th><?= __('Created By') ?></th>
                            <th><?= __('Land Area') ?></th>
                            <th><?= __('Patta Land Area') ?></th>
                            <th><?= __('Accepted') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('ISmember') ?></th>
                            <th><?= __('Enrollment Number') ?></th>
                            <th><?= __('Remark') ?></th>
                            <th><?= __('Updated On') ?></th>
                            <th><?= __('Date Of Apply') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->farmers as $farmers) : ?>
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
                            <td><?= h($farmers->date_of_apply) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Farmers', 'action' => 'view', $farmers->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Farmers', 'action' => 'edit', $farmers->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Farmers', 'action' => 'delete', $farmers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $farmers->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Harvest') ?></h4>
                <?php if (!empty($user->harvest)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Harvest Date') ?></th>
                            <th><?= __('Grade') ?></th>
                            <th><?= __('Quantity') ?></th>
                            <th><?= __('Price') ?></th>
                            <th><?= __('Total Price') ?></th>
                            <th><?= __('Crop Name') ?></th>
                            <th><?= __('Crop Id') ?></th>
                            <th><?= __('Plot Id') ?></th>
                            <th><?= __('Farmer Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Is Final') ?></th>
                            <th><?= __('Type') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Created On') ?></th>
                            <th><?= __('Created By') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->harvest as $harvest) : ?>
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
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Harvest', 'action' => 'view', $harvest->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Harvest', 'action' => 'edit', $harvest->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Harvest', 'action' => 'delete', $harvest->id], ['confirm' => __('Are you sure you want to delete # {0}?', $harvest->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Updatebankdata') ?></h4>
                <?php if (!empty($user->updatebankdata)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Old Bank Name') ?></th>
                            <th><?= __('Old Account No') ?></th>
                            <th><?= __('Old Ifsc Code') ?></th>
                            <th><?= __('Old Branch Name') ?></th>
                            <th><?= __('New Bank Name') ?></th>
                            <th><?= __('New Account No') ?></th>
                            <th><?= __('New Ifsc Code') ?></th>
                            <th><?= __('New Branch Name') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Bank Status') ?></th>
                            <th><?= __('Is Trash') ?></th>
                            <th><?= __('Created On') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->updatebankdata as $updatebankdata) : ?>
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
                            <td><?= h($updatebankdata->bank_status) ?></td>
                            <td><?= h($updatebankdata->is_trash) ?></td>
                            <td><?= h($updatebankdata->created_on) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Updatebankdata', 'action' => 'view', $updatebankdata->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Updatebankdata', 'action' => 'edit', $updatebankdata->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Updatebankdata', 'action' => 'delete', $updatebankdata->id], ['confirm' => __('Are you sure you want to delete # {0}?', $updatebankdata->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related User Crop Commision') ?></h4>
                <?php if (!empty($user->user_crop_commision)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('District') ?></th>
                            <th><?= __('Crop Config Id') ?></th>
                            <th><?= __('Crop Code Id') ?></th>
                            <th><?= __('Quality Grade Id') ?></th>
                            <th><?= __('Commission') ?></th>
                            <th><?= __('Type') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Created On') ?></th>
                            <th><?= __('Created By') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->user_crop_commision as $userCropCommision) : ?>
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
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'UserCropCommision', 'action' => 'view', $userCropCommision->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'UserCropCommision', 'action' => 'edit', $userCropCommision->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'UserCropCommision', 'action' => 'delete', $userCropCommision->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userCropCommision->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Vw Veg Sale Reports') ?></h4>
                <?php if (!empty($user->vw_veg_sale_reports)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Type') ?></th>
                            <th><?= __('Assigned To') ?></th>
                            <th><?= __('Payment Advice No') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Farmer Id') ?></th>
                            <th><?= __('Rate') ?></th>
                            <th><?= __('Quantity') ?></th>
                            <th><?= __('Revenue') ?></th>
                            <th><?= __('Order Date') ?></th>
                            <th><?= __('Block') ?></th>
                            <th><?= __('Blockname') ?></th>
                            <th><?= __('District') ?></th>
                            <th><?= __('Distname') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->vw_veg_sale_reports as $vwVegSaleReports) : ?>
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
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'VwVegSaleReports', 'action' => 'view', $vwVegSaleReports->]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'VwVegSaleReports', 'action' => 'edit', $vwVegSaleReports->]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'VwVegSaleReports', 'action' => 'delete', $vwVegSaleReports->], ['confirm' => __('Are you sure you want to delete # {0}?', $vwVegSaleReports->)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
