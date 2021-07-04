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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $farmer->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $farmer->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Farmers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="farmers form content">
            <?= $this->Form->create($farmer) ?>
            <fieldset>
                <legend><?= __('Edit Farmer') ?></legend>
                <?php
                    echo $this->Form->control('farmer_code');
                    echo $this->Form->control('farmer_name');
                    echo $this->Form->control('farmer_guardian');
                    echo $this->Form->control('phone');
                    echo $this->Form->control('password');
                    echo $this->Form->control('address');
                    echo $this->Form->control('panchayat');
                    echo $this->Form->control('samooh_name');
                    echo $this->Form->control('village');
                    echo $this->Form->control('district');
                    echo $this->Form->control('state');
                    echo $this->Form->control('country');
                    echo $this->Form->control('postal_code');
                    echo $this->Form->control('vo_name');
                    echo $this->Form->control('age');
                    echo $this->Form->control('gender');
                    echo $this->Form->control('total_land');
                    echo $this->Form->control('leased_land');
                    echo $this->Form->control('block');
                    echo $this->Form->control('ward');
                    echo $this->Form->control('category');
                    echo $this->Form->control('birth_year');
                    echo $this->Form->control('adhaar');
                    echo $this->Form->control('qualification');
                    echo $this->Form->control('bank_name');
                    echo $this->Form->control('bank_ifsc');
                    echo $this->Form->control('account_no');
                    echo $this->Form->control('bank_branch');
                    echo $this->Form->control('nominee_name');
                    echo $this->Form->control('nominee_birth_year');
                    echo $this->Form->control('nominee_adhaar');
                    echo $this->Form->control('nominee_relation');
                    echo $this->Form->control('no_of_shares');
                    echo $this->Form->control('rec_mem_reg');
                    echo $this->Form->control('rec_mem_uuid');
                    echo $this->Form->control('rec_mem_name');
                    echo $this->Form->control('rec_mem_father');
                    echo $this->Form->control('rec_mem_sign');
                    echo $this->Form->control('rec_mem2_reg');
                    echo $this->Form->control('rec_mem2_uuid');
                    echo $this->Form->control('rec_mem2_name');
                    echo $this->Form->control('rec_mem2_father');
                    echo $this->Form->control('rec_mem2_sign');
                    echo $this->Form->control('assigned_to');
                    echo $this->Form->control('address_verified');
                    echo $this->Form->control('adress_proof_uploaded');
                    echo $this->Form->control('membership_paid');
                    echo $this->Form->control('membership_paid_slip_uploaded');
                    echo $this->Form->control('adhaar_verified');
                    echo $this->Form->control('adhaar_uploaded');
                    echo $this->Form->control('land_declared_verified');
                    echo $this->Form->control('land_document_uploaded');
                    echo $this->Form->control('lease_land_verified');
                    echo $this->Form->control('lease_land_document_uploaded');
                    echo $this->Form->control('bank_details_verified');
                    echo $this->Form->control('bank_document_uploaded');
                    echo $this->Form->control('profile_img');
                    echo $this->Form->control('sign_image');
                    echo $this->Form->control('domicile');
                    echo $this->Form->control('challan_copy');
                    echo $this->Form->control('utr_no');
                    echo $this->Form->control('type');
                    echo $this->Form->control('status');
                    echo $this->Form->control('created_on');
                    echo $this->Form->control('created_on_new');
                    echo $this->Form->control('created_by');
                    echo $this->Form->control('land_area');
                    echo $this->Form->control('patta_land_area');
                    echo $this->Form->control('accepted');
                    echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
                    echo $this->Form->control('ISmember');
                    echo $this->Form->control('enrollment_number');
                    echo $this->Form->control('remark');
                    echo $this->Form->control('updated_on', ['empty' => true]);
                    echo $this->Form->control('date_of_apply', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
