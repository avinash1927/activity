<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Farmer[]|\Cake\Collection\CollectionInterface $farmers
 */
?>
<div class="farmers index content">
    <?= $this->Html->link(__('New Farmer'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Farmers') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('farmer_code') ?></th>
                    <th><?= $this->Paginator->sort('farmer_name') ?></th>
                    <th><?= $this->Paginator->sort('farmer_guardian') ?></th>
                    <th><?= $this->Paginator->sort('phone') ?></th>
                    <th><?= $this->Paginator->sort('panchayat') ?></th>
                    <th><?= $this->Paginator->sort('samooh_name') ?></th>
                    <th><?= $this->Paginator->sort('village') ?></th>
                    <th><?= $this->Paginator->sort('district') ?></th>
                    <th><?= $this->Paginator->sort('state') ?></th>
                    <th><?= $this->Paginator->sort('country') ?></th>
                    <th><?= $this->Paginator->sort('postal_code') ?></th>
                    <th><?= $this->Paginator->sort('vo_name') ?></th>
                    <th><?= $this->Paginator->sort('age') ?></th>
                    <th><?= $this->Paginator->sort('gender') ?></th>
                    <th><?= $this->Paginator->sort('total_land') ?></th>
                    <th><?= $this->Paginator->sort('leased_land') ?></th>
                    <th><?= $this->Paginator->sort('block') ?></th>
                    <th><?= $this->Paginator->sort('ward') ?></th>
                    <th><?= $this->Paginator->sort('category') ?></th>
                    <th><?= $this->Paginator->sort('birth_year') ?></th>
                    <th><?= $this->Paginator->sort('adhaar') ?></th>
                    <th><?= $this->Paginator->sort('qualification') ?></th>
                    <th><?= $this->Paginator->sort('bank_name') ?></th>
                    <th><?= $this->Paginator->sort('bank_ifsc') ?></th>
                    <th><?= $this->Paginator->sort('account_no') ?></th>
                    <th><?= $this->Paginator->sort('bank_branch') ?></th>
                    <th><?= $this->Paginator->sort('nominee_name') ?></th>
                    <th><?= $this->Paginator->sort('nominee_birth_year') ?></th>
                    <th><?= $this->Paginator->sort('nominee_adhaar') ?></th>
                    <th><?= $this->Paginator->sort('nominee_relation') ?></th>
                    <th><?= $this->Paginator->sort('no_of_shares') ?></th>
                    <th><?= $this->Paginator->sort('rec_mem_reg') ?></th>
                    <th><?= $this->Paginator->sort('rec_mem_uuid') ?></th>
                    <th><?= $this->Paginator->sort('rec_mem_name') ?></th>
                    <th><?= $this->Paginator->sort('rec_mem_father') ?></th>
                    <th><?= $this->Paginator->sort('rec_mem_sign') ?></th>
                    <th><?= $this->Paginator->sort('rec_mem2_reg') ?></th>
                    <th><?= $this->Paginator->sort('rec_mem2_uuid') ?></th>
                    <th><?= $this->Paginator->sort('rec_mem2_name') ?></th>
                    <th><?= $this->Paginator->sort('rec_mem2_father') ?></th>
                    <th><?= $this->Paginator->sort('rec_mem2_sign') ?></th>
                    <th><?= $this->Paginator->sort('assigned_to') ?></th>
                    <th><?= $this->Paginator->sort('address_verified') ?></th>
                    <th><?= $this->Paginator->sort('adress_proof_uploaded') ?></th>
                    <th><?= $this->Paginator->sort('membership_paid') ?></th>
                    <th><?= $this->Paginator->sort('membership_paid_slip_uploaded') ?></th>
                    <th><?= $this->Paginator->sort('adhaar_verified') ?></th>
                    <th><?= $this->Paginator->sort('adhaar_uploaded') ?></th>
                    <th><?= $this->Paginator->sort('land_declared_verified') ?></th>
                    <th><?= $this->Paginator->sort('land_document_uploaded') ?></th>
                    <th><?= $this->Paginator->sort('lease_land_verified') ?></th>
                    <th><?= $this->Paginator->sort('lease_land_document_uploaded') ?></th>
                    <th><?= $this->Paginator->sort('bank_details_verified') ?></th>
                    <th><?= $this->Paginator->sort('bank_document_uploaded') ?></th>
                    <th><?= $this->Paginator->sort('profile_img') ?></th>
                    <th><?= $this->Paginator->sort('sign_image') ?></th>
                    <th><?= $this->Paginator->sort('domicile') ?></th>
                    <th><?= $this->Paginator->sort('challan_copy') ?></th>
                    <th><?= $this->Paginator->sort('utr_no') ?></th>
                    <th><?= $this->Paginator->sort('type') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('created_on') ?></th>
                    <th><?= $this->Paginator->sort('created_on_new') ?></th>
                    <th><?= $this->Paginator->sort('created_by') ?></th>
                    <th><?= $this->Paginator->sort('land_area') ?></th>
                    <th><?= $this->Paginator->sort('patta_land_area') ?></th>
                    <th><?= $this->Paginator->sort('accepted') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('ISmember') ?></th>
                    <th><?= $this->Paginator->sort('enrollment_number') ?></th>
                    <th><?= $this->Paginator->sort('remark') ?></th>
                    <th><?= $this->Paginator->sort('updated_on') ?></th>
                    <th><?= $this->Paginator->sort('date_of_apply') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($farmers as $farmer): ?>
                <tr>
                    <td><?= $this->Number->format($farmer->id) ?></td>
                    <td><?= h($farmer->farmer_code) ?></td>
                    <td><?= h($farmer->farmer_name) ?></td>
                    <td><?= h($farmer->farmer_guardian) ?></td>
                    <td><?= h($farmer->phone) ?></td>
                    <td><?= h($farmer->panchayat) ?></td>
                    <td><?= h($farmer->samooh_name) ?></td>
                    <td><?= h($farmer->village) ?></td>
                    <td><?= h($farmer->district) ?></td>
                    <td><?= h($farmer->state) ?></td>
                    <td><?= h($farmer->country) ?></td>
                    <td><?= $this->Number->format($farmer->postal_code) ?></td>
                    <td><?= h($farmer->vo_name) ?></td>
                    <td><?= $this->Number->format($farmer->age) ?></td>
                    <td><?= $this->Number->format($farmer->gender) ?></td>
                    <td><?= h($farmer->total_land) ?></td>
                    <td><?= h($farmer->leased_land) ?></td>
                    <td><?= h($farmer->block) ?></td>
                    <td><?= h($farmer->ward) ?></td>
                    <td><?= h($farmer->category) ?></td>
                    <td><?= h($farmer->birth_year) ?></td>
                    <td><?= h($farmer->adhaar) ?></td>
                    <td><?= h($farmer->qualification) ?></td>
                    <td><?= h($farmer->bank_name) ?></td>
                    <td><?= h($farmer->bank_ifsc) ?></td>
                    <td><?= h($farmer->account_no) ?></td>
                    <td><?= h($farmer->bank_branch) ?></td>
                    <td><?= h($farmer->nominee_name) ?></td>
                    <td><?= h($farmer->nominee_birth_year) ?></td>
                    <td><?= h($farmer->nominee_adhaar) ?></td>
                    <td><?= h($farmer->nominee_relation) ?></td>
                    <td><?= h($farmer->no_of_shares) ?></td>
                    <td><?= h($farmer->rec_mem_reg) ?></td>
                    <td><?= h($farmer->rec_mem_uuid) ?></td>
                    <td><?= h($farmer->rec_mem_name) ?></td>
                    <td><?= h($farmer->rec_mem_father) ?></td>
                    <td><?= h($farmer->rec_mem_sign) ?></td>
                    <td><?= h($farmer->rec_mem2_reg) ?></td>
                    <td><?= h($farmer->rec_mem2_uuid) ?></td>
                    <td><?= h($farmer->rec_mem2_name) ?></td>
                    <td><?= h($farmer->rec_mem2_father) ?></td>
                    <td><?= h($farmer->rec_mem2_sign) ?></td>
                    <td><?= $this->Number->format($farmer->assigned_to) ?></td>
                    <td><?= h($farmer->address_verified) ?></td>
                    <td><?= h($farmer->adress_proof_uploaded) ?></td>
                    <td><?= h($farmer->membership_paid) ?></td>
                    <td><?= h($farmer->membership_paid_slip_uploaded) ?></td>
                    <td><?= h($farmer->adhaar_verified) ?></td>
                    <td><?= h($farmer->adhaar_uploaded) ?></td>
                    <td><?= h($farmer->land_declared_verified) ?></td>
                    <td><?= h($farmer->land_document_uploaded) ?></td>
                    <td><?= h($farmer->lease_land_verified) ?></td>
                    <td><?= h($farmer->lease_land_document_uploaded) ?></td>
                    <td><?= h($farmer->bank_details_verified) ?></td>
                    <td><?= h($farmer->bank_document_uploaded) ?></td>
                    <td><?= h($farmer->profile_img) ?></td>
                    <td><?= h($farmer->sign_image) ?></td>
                    <td><?= h($farmer->domicile) ?></td>
                    <td><?= h($farmer->challan_copy) ?></td>
                    <td><?= h($farmer->utr_no) ?></td>
                    <td><?= $this->Number->format($farmer->type) ?></td>
                    <td><?= $this->Number->format($farmer->status) ?></td>
                    <td><?= h($farmer->created_on) ?></td>
                    <td><?= h($farmer->created_on_new) ?></td>
                    <td><?= $this->Number->format($farmer->created_by) ?></td>
                    <td><?= h($farmer->land_area) ?></td>
                    <td><?= h($farmer->patta_land_area) ?></td>
                    <td><?= $this->Number->format($farmer->accepted) ?></td>
                    <td><?= $farmer->has('user') ? $this->Html->link($farmer->user->id, ['controller' => 'Users', 'action' => 'view', $farmer->user->id]) : '' ?></td>
                    <td><?= h($farmer->ISmember) ?></td>
                    <td><?= h($farmer->enrollment_number) ?></td>
                    <td><?= h($farmer->remark) ?></td>
                    <td><?= h($farmer->updated_on) ?></td>
                    <td><?= h($farmer->date_of_apply) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $farmer->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $farmer->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $farmer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $farmer->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
