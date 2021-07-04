<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Farmer $farmer
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Farmer'), ['action' => 'edit', $farmer->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Farmer'), ['action' => 'delete', $farmer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $farmer->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Farmers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Farmer'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="farmers view content">
            <h3><?= h($farmer->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Farmer Code') ?></th>
                    <td><?= h($farmer->farmer_code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Farmer Name') ?></th>
                    <td><?= h($farmer->farmer_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Farmer Guardian') ?></th>
                    <td><?= h($farmer->farmer_guardian) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone') ?></th>
                    <td><?= h($farmer->phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Panchayat') ?></th>
                    <td><?= h($farmer->panchayat) ?></td>
                </tr>
                <tr>
                    <th><?= __('Samooh Name') ?></th>
                    <td><?= h($farmer->samooh_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Village') ?></th>
                    <td><?= h($farmer->village) ?></td>
                </tr>
                <tr>
                    <th><?= __('District') ?></th>
                    <td><?= h($farmer->district) ?></td>
                </tr>
                <tr>
                    <th><?= __('State') ?></th>
                    <td><?= h($farmer->state) ?></td>
                </tr>
                <tr>
                    <th><?= __('Country') ?></th>
                    <td><?= h($farmer->country) ?></td>
                </tr>
                <tr>
                    <th><?= __('Vo Name') ?></th>
                    <td><?= h($farmer->vo_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Total Land') ?></th>
                    <td><?= h($farmer->total_land) ?></td>
                </tr>
                <tr>
                    <th><?= __('Leased Land') ?></th>
                    <td><?= h($farmer->leased_land) ?></td>
                </tr>
                <tr>
                    <th><?= __('Block') ?></th>
                    <td><?= h($farmer->block) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ward') ?></th>
                    <td><?= h($farmer->ward) ?></td>
                </tr>
                <tr>
                    <th><?= __('Category') ?></th>
                    <td><?= h($farmer->category) ?></td>
                </tr>
                <tr>
                    <th><?= __('Birth Year') ?></th>
                    <td><?= h($farmer->birth_year) ?></td>
                </tr>
                <tr>
                    <th><?= __('Adhaar') ?></th>
                    <td><?= h($farmer->adhaar) ?></td>
                </tr>
                <tr>
                    <th><?= __('Qualification') ?></th>
                    <td><?= h($farmer->qualification) ?></td>
                </tr>
                <tr>
                    <th><?= __('Bank Name') ?></th>
                    <td><?= h($farmer->bank_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Bank Ifsc') ?></th>
                    <td><?= h($farmer->bank_ifsc) ?></td>
                </tr>
                <tr>
                    <th><?= __('Account No') ?></th>
                    <td><?= h($farmer->account_no) ?></td>
                </tr>
                <tr>
                    <th><?= __('Bank Branch') ?></th>
                    <td><?= h($farmer->bank_branch) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nominee Name') ?></th>
                    <td><?= h($farmer->nominee_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nominee Birth Year') ?></th>
                    <td><?= h($farmer->nominee_birth_year) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nominee Adhaar') ?></th>
                    <td><?= h($farmer->nominee_adhaar) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nominee Relation') ?></th>
                    <td><?= h($farmer->nominee_relation) ?></td>
                </tr>
                <tr>
                    <th><?= __('No Of Shares') ?></th>
                    <td><?= h($farmer->no_of_shares) ?></td>
                </tr>
                <tr>
                    <th><?= __('Rec Mem Reg') ?></th>
                    <td><?= h($farmer->rec_mem_reg) ?></td>
                </tr>
                <tr>
                    <th><?= __('Rec Mem Uuid') ?></th>
                    <td><?= h($farmer->rec_mem_uuid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Rec Mem Name') ?></th>
                    <td><?= h($farmer->rec_mem_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Rec Mem Father') ?></th>
                    <td><?= h($farmer->rec_mem_father) ?></td>
                </tr>
                <tr>
                    <th><?= __('Rec Mem Sign') ?></th>
                    <td><?= h($farmer->rec_mem_sign) ?></td>
                </tr>
                <tr>
                    <th><?= __('Rec Mem2 Reg') ?></th>
                    <td><?= h($farmer->rec_mem2_reg) ?></td>
                </tr>
                <tr>
                    <th><?= __('Rec Mem2 Uuid') ?></th>
                    <td><?= h($farmer->rec_mem2_uuid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Rec Mem2 Name') ?></th>
                    <td><?= h($farmer->rec_mem2_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Rec Mem2 Father') ?></th>
                    <td><?= h($farmer->rec_mem2_father) ?></td>
                </tr>
                <tr>
                    <th><?= __('Rec Mem2 Sign') ?></th>
                    <td><?= h($farmer->rec_mem2_sign) ?></td>
                </tr>
                <tr>
                    <th><?= __('Profile Img') ?></th>
                    <td><?= h($farmer->profile_img) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sign Image') ?></th>
                    <td><?= h($farmer->sign_image) ?></td>
                </tr>
                <tr>
                    <th><?= __('Domicile') ?></th>
                    <td><?= h($farmer->domicile) ?></td>
                </tr>
                <tr>
                    <th><?= __('Challan Copy') ?></th>
                    <td><?= h($farmer->challan_copy) ?></td>
                </tr>
                <tr>
                    <th><?= __('Utr No') ?></th>
                    <td><?= h($farmer->utr_no) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created On New') ?></th>
                    <td><?= h($farmer->created_on_new) ?></td>
                </tr>
                <tr>
                    <th><?= __('Land Area') ?></th>
                    <td><?= h($farmer->land_area) ?></td>
                </tr>
                <tr>
                    <th><?= __('Patta Land Area') ?></th>
                    <td><?= h($farmer->patta_land_area) ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $farmer->has('user') ? $this->Html->link($farmer->user->id, ['controller' => 'Users', 'action' => 'view', $farmer->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('ISmember') ?></th>
                    <td><?= h($farmer->ISmember) ?></td>
                </tr>
                <tr>
                    <th><?= __('Enrollment Number') ?></th>
                    <td><?= h($farmer->enrollment_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Remark') ?></th>
                    <td><?= h($farmer->remark) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($farmer->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Postal Code') ?></th>
                    <td><?= $this->Number->format($farmer->postal_code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Age') ?></th>
                    <td><?= $this->Number->format($farmer->age) ?></td>
                </tr>
                <tr>
                    <th><?= __('Gender') ?></th>
                    <td><?= $this->Number->format($farmer->gender) ?></td>
                </tr>
                <tr>
                    <th><?= __('Assigned To') ?></th>
                    <td><?= $this->Number->format($farmer->assigned_to) ?></td>
                </tr>
                <tr>
                    <th><?= __('Type') ?></th>
                    <td><?= $this->Number->format($farmer->type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $this->Number->format($farmer->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created By') ?></th>
                    <td><?= $this->Number->format($farmer->created_by) ?></td>
                </tr>
                <tr>
                    <th><?= __('Accepted') ?></th>
                    <td><?= $this->Number->format($farmer->accepted) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created On') ?></th>
                    <td><?= h($farmer->created_on) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updated On') ?></th>
                    <td><?= h($farmer->updated_on) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date Of Apply') ?></th>
                    <td><?= h($farmer->date_of_apply) ?></td>
                </tr>
                <tr>
                    <th><?= __('Address Verified') ?></th>
                    <td><?= $farmer->address_verified ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Adress Proof Uploaded') ?></th>
                    <td><?= $farmer->adress_proof_uploaded ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Membership Paid') ?></th>
                    <td><?= $farmer->membership_paid ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Membership Paid Slip Uploaded') ?></th>
                    <td><?= $farmer->membership_paid_slip_uploaded ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Adhaar Verified') ?></th>
                    <td><?= $farmer->adhaar_verified ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Adhaar Uploaded') ?></th>
                    <td><?= $farmer->adhaar_uploaded ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Land Declared Verified') ?></th>
                    <td><?= $farmer->land_declared_verified ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Land Document Uploaded') ?></th>
                    <td><?= $farmer->land_document_uploaded ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Lease Land Verified') ?></th>
                    <td><?= $farmer->lease_land_verified ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Lease Land Document Uploaded') ?></th>
                    <td><?= $farmer->lease_land_document_uploaded ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Bank Details Verified') ?></th>
                    <td><?= $farmer->bank_details_verified ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Bank Document Uploaded') ?></th>
                    <td><?= $farmer->bank_document_uploaded ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Password') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($farmer->password)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Address') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($farmer->address)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Application Flows') ?></h4>
                <?php if (!empty($farmer->application_flows)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Farmer Id') ?></th>
                            <th><?= __('From User Id') ?></th>
                            <th><?= __('To User Id') ?></th>
                            <th><?= __('Show Status') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Application Status') ?></th>
                            <th><?= __('Remarks') ?></th>
                            <th><?= __('Created On') ?></th>
                            <th><?= __('Created On New') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($farmer->application_flows as $applicationFlows) : ?>
                        <tr>
                            <td><?= h($applicationFlows->id) ?></td>
                            <td><?= h($applicationFlows->farmer_id) ?></td>
                            <td><?= h($applicationFlows->from_user_id) ?></td>
                            <td><?= h($applicationFlows->to_user_id) ?></td>
                            <td><?= h($applicationFlows->show_status) ?></td>
                            <td><?= h($applicationFlows->status) ?></td>
                            <td><?= h($applicationFlows->application_status) ?></td>
                            <td><?= h($applicationFlows->remarks) ?></td>
                            <td><?= h($applicationFlows->created_on) ?></td>
                            <td><?= h($applicationFlows->created_on_new) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'ApplicationFlows', 'action' => 'view', $applicationFlows->]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'ApplicationFlows', 'action' => 'edit', $applicationFlows->]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ApplicationFlows', 'action' => 'delete', $applicationFlows->], ['confirm' => __('Are you sure you want to delete # {0}?', $applicationFlows->)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Crop Order') ?></h4>
                <?php if (!empty($farmer->crop_order)) : ?>
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
                        <?php foreach ($farmer->crop_order as $cropOrder) : ?>
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
                <?php if (!empty($farmer->crop_order_received)) : ?>
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
                        <?php foreach ($farmer->crop_order_received as $cropOrderReceived) : ?>
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
                <h4><?= __('Related Farmer Plots') ?></h4>
                <?php if (!empty($farmer->farmer_plots)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Plot Title') ?></th>
                            <th><?= __('Plot Description') ?></th>
                            <th><?= __('Farmer Id') ?></th>
                            <th><?= __('Crop Id') ?></th>
                            <th><?= __('Crop Config Id') ?></th>
                            <th><?= __('Plot Area') ?></th>
                            <th><?= __('Crop Name') ?></th>
                            <th><?= __('Expected Harvest') ?></th>
                            <th><?= __('Season') ?></th>
                            <th><?= __('Yields') ?></th>
                            <th><?= __('Unit') ?></th>
                            <th><?= __('Address') ?></th>
                            <th><?= __('Village') ?></th>
                            <th><?= __('Block') ?></th>
                            <th><?= __('District') ?></th>
                            <th><?= __('State') ?></th>
                            <th><?= __('Country') ?></th>
                            <th><?= __('Postal Code') ?></th>
                            <th><?= __('Date Of Sowing') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Created On') ?></th>
                            <th><?= __('Created By') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($farmer->farmer_plots as $farmerPlots) : ?>
                        <tr>
                            <td><?= h($farmerPlots->id) ?></td>
                            <td><?= h($farmerPlots->plot_title) ?></td>
                            <td><?= h($farmerPlots->plot_description) ?></td>
                            <td><?= h($farmerPlots->farmer_id) ?></td>
                            <td><?= h($farmerPlots->crop_id) ?></td>
                            <td><?= h($farmerPlots->crop_config_id) ?></td>
                            <td><?= h($farmerPlots->plot_area) ?></td>
                            <td><?= h($farmerPlots->crop_name) ?></td>
                            <td><?= h($farmerPlots->expected_harvest) ?></td>
                            <td><?= h($farmerPlots->season) ?></td>
                            <td><?= h($farmerPlots->yields) ?></td>
                            <td><?= h($farmerPlots->unit) ?></td>
                            <td><?= h($farmerPlots->address) ?></td>
                            <td><?= h($farmerPlots->village) ?></td>
                            <td><?= h($farmerPlots->block) ?></td>
                            <td><?= h($farmerPlots->district) ?></td>
                            <td><?= h($farmerPlots->state) ?></td>
                            <td><?= h($farmerPlots->country) ?></td>
                            <td><?= h($farmerPlots->postal_code) ?></td>
                            <td><?= h($farmerPlots->date_of_sowing) ?></td>
                            <td><?= h($farmerPlots->status) ?></td>
                            <td><?= h($farmerPlots->created_on) ?></td>
                            <td><?= h($farmerPlots->created_by) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'FarmerPlots', 'action' => 'view', $farmerPlots->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'FarmerPlots', 'action' => 'edit', $farmerPlots->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'FarmerPlots', 'action' => 'delete', $farmerPlots->id], ['confirm' => __('Are you sure you want to delete # {0}?', $farmerPlots->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Farmer Recommendeds') ?></h4>
                <?php if (!empty($farmer->farmer_recommendeds)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Farmer Id') ?></th>
                            <th><?= __('Farmer Code') ?></th>
                            <th><?= __('Rec Name') ?></th>
                            <th><?= __('Rec Dob') ?></th>
                            <th><?= __('Rec Uuid') ?></th>
                            <th><?= __('Rec Relation') ?></th>
                            <th><?= __('Rec Share') ?></th>
                            <th><?= __('Rec Mem Reg') ?></th>
                            <th><?= __('Rec Mem Uuid') ?></th>
                            <th><?= __('Rec Mem Sign1') ?></th>
                            <th><?= __('Rec Mem Sign') ?></th>
                            <th><?= __('Verify Type') ?></th>
                            <th><?= __('Rec Mem Otp') ?></th>
                            <th><?= __('Rec Mem2 Reg') ?></th>
                            <th><?= __('Rec Mem2 Uuid') ?></th>
                            <th><?= __('Rec Mem2 Sign1') ?></th>
                            <th><?= __('Rec Mem2 Sign') ?></th>
                            <th><?= __('Verify Type2') ?></th>
                            <th><?= __('Rec Mem2 Otp') ?></th>
                            <th><?= __('Created By') ?></th>
                            <th><?= __('Created On New') ?></th>
                            <th><?= __('Created On') ?></th>
                            <th><?= __('Updated On') ?></th>
                            <th><?= __('Rec Mem Father') ?></th>
                            <th><?= __('Rec Mem Name') ?></th>
                            <th><?= __('Rec Mem2 Father') ?></th>
                            <th><?= __('Rec Mem2 Name') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($farmer->farmer_recommendeds as $farmerRecommendeds) : ?>
                        <tr>
                            <td><?= h($farmerRecommendeds->id) ?></td>
                            <td><?= h($farmerRecommendeds->farmer_id) ?></td>
                            <td><?= h($farmerRecommendeds->farmer_code) ?></td>
                            <td><?= h($farmerRecommendeds->rec_name) ?></td>
                            <td><?= h($farmerRecommendeds->rec_dob) ?></td>
                            <td><?= h($farmerRecommendeds->rec_uuid) ?></td>
                            <td><?= h($farmerRecommendeds->rec_relation) ?></td>
                            <td><?= h($farmerRecommendeds->rec_share) ?></td>
                            <td><?= h($farmerRecommendeds->rec_mem_reg) ?></td>
                            <td><?= h($farmerRecommendeds->rec_mem_uuid) ?></td>
                            <td><?= h($farmerRecommendeds->rec_mem_sign1) ?></td>
                            <td><?= h($farmerRecommendeds->rec_mem_sign) ?></td>
                            <td><?= h($farmerRecommendeds->verify_type) ?></td>
                            <td><?= h($farmerRecommendeds->rec_mem_otp) ?></td>
                            <td><?= h($farmerRecommendeds->rec_mem2_reg) ?></td>
                            <td><?= h($farmerRecommendeds->rec_mem2_uuid) ?></td>
                            <td><?= h($farmerRecommendeds->rec_mem2_sign1) ?></td>
                            <td><?= h($farmerRecommendeds->rec_mem2_sign) ?></td>
                            <td><?= h($farmerRecommendeds->verify_type2) ?></td>
                            <td><?= h($farmerRecommendeds->rec_mem2_otp) ?></td>
                            <td><?= h($farmerRecommendeds->created_by) ?></td>
                            <td><?= h($farmerRecommendeds->created_on_new) ?></td>
                            <td><?= h($farmerRecommendeds->created_on) ?></td>
                            <td><?= h($farmerRecommendeds->updated_on) ?></td>
                            <td><?= h($farmerRecommendeds->rec_mem_father) ?></td>
                            <td><?= h($farmerRecommendeds->rec_mem_name) ?></td>
                            <td><?= h($farmerRecommendeds->rec_mem2_father) ?></td>
                            <td><?= h($farmerRecommendeds->rec_mem2_name) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'FarmerRecommendeds', 'action' => 'view', $farmerRecommendeds->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'FarmerRecommendeds', 'action' => 'edit', $farmerRecommendeds->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'FarmerRecommendeds', 'action' => 'delete', $farmerRecommendeds->id], ['confirm' => __('Are you sure you want to delete # {0}?', $farmerRecommendeds->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Farmer Vegitables') ?></h4>
                <?php if (!empty($farmer->farmer_vegitables)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('RegistrationNO') ?></th>
                            <th><?= __('Farmer Id') ?></th>
                            <th><?= __('Vegitable Name') ?></th>
                            <th><?= __('Estimated Veg') ?></th>
                            <th><?= __('Land Estimated Veg') ?></th>
                            <th><?= __('Vegitable Season') ?></th>
                            <th><?= __('Created On') ?></th>
                            <th><?= __('Updated On') ?></th>
                            <th><?= __('Created On New') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($farmer->farmer_vegitables as $farmerVegitables) : ?>
                        <tr>
                            <td><?= h($farmerVegitables->id) ?></td>
                            <td><?= h($farmerVegitables->RegistrationNO) ?></td>
                            <td><?= h($farmerVegitables->farmer_id) ?></td>
                            <td><?= h($farmerVegitables->vegitable_name) ?></td>
                            <td><?= h($farmerVegitables->estimated_veg) ?></td>
                            <td><?= h($farmerVegitables->land_estimated_veg) ?></td>
                            <td><?= h($farmerVegitables->vegitable_season) ?></td>
                            <td><?= h($farmerVegitables->created_on) ?></td>
                            <td><?= h($farmerVegitables->updated_on) ?></td>
                            <td><?= h($farmerVegitables->created_on_new) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'FarmerVegitables', 'action' => 'view', $farmerVegitables->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'FarmerVegitables', 'action' => 'edit', $farmerVegitables->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'FarmerVegitables', 'action' => 'delete', $farmerVegitables->id], ['confirm' => __('Are you sure you want to delete # {0}?', $farmerVegitables->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Harvest') ?></h4>
                <?php if (!empty($farmer->harvest)) : ?>
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
                        <?php foreach ($farmer->harvest as $harvest) : ?>
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
                <h4><?= __('Related Plot Locations') ?></h4>
                <?php if (!empty($farmer->plot_locations)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Plot Id') ?></th>
                            <th><?= __('Farmer Id') ?></th>
                            <th><?= __('Latitude') ?></th>
                            <th><?= __('Longitude') ?></th>
                            <th><?= __('Type') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Created On') ?></th>
                            <th><?= __('Created By') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($farmer->plot_locations as $plotLocations) : ?>
                        <tr>
                            <td><?= h($plotLocations->id) ?></td>
                            <td><?= h($plotLocations->plot_id) ?></td>
                            <td><?= h($plotLocations->farmer_id) ?></td>
                            <td><?= h($plotLocations->latitude) ?></td>
                            <td><?= h($plotLocations->longitude) ?></td>
                            <td><?= h($plotLocations->type) ?></td>
                            <td><?= h($plotLocations->status) ?></td>
                            <td><?= h($plotLocations->created_on) ?></td>
                            <td><?= h($plotLocations->created_by) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'PlotLocations', 'action' => 'view', $plotLocations->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'PlotLocations', 'action' => 'edit', $plotLocations->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'PlotLocations', 'action' => 'delete', $plotLocations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $plotLocations->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Vw Veg Sale Reports') ?></h4>
                <?php if (!empty($farmer->vw_veg_sale_reports)) : ?>
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
                        <?php foreach ($farmer->vw_veg_sale_reports as $vwVegSaleReports) : ?>
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
