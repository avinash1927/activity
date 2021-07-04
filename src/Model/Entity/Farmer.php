<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Farmer Entity
 *
 * @property int $id
 * @property string|null $farmer_code
 * @property string $farmer_name
 * @property string|null $farmer_guardian
 * @property string $phone
 * @property string|null $password
 * @property string|null $address
 * @property string|null $panchayat
 * @property string|null $samooh_name
 * @property string|null $village
 * @property string|null $district
 * @property string $state
 * @property string $country
 * @property int|null $postal_code
 * @property string|null $vo_name
 * @property int|null $age
 * @property int|null $gender
 * @property string|null $total_land
 * @property string|null $leased_land
 * @property string|null $block
 * @property string|null $ward
 * @property string|null $category
 * @property string|null $birth_year
 * @property string|null $adhaar
 * @property string|null $qualification
 * @property string|null $bank_name
 * @property string|null $bank_ifsc
 * @property string|null $account_no
 * @property string|null $bank_branch
 * @property string|null $nominee_name
 * @property string|null $nominee_birth_year
 * @property string|null $nominee_adhaar
 * @property string|null $nominee_relation
 * @property string|null $no_of_shares
 * @property string|null $rec_mem_reg
 * @property string|null $rec_mem_uuid
 * @property string|null $rec_mem_name
 * @property string|null $rec_mem_father
 * @property string|null $rec_mem_sign
 * @property string|null $rec_mem2_reg
 * @property string|null $rec_mem2_uuid
 * @property string|null $rec_mem2_name
 * @property string|null $rec_mem2_father
 * @property string|null $rec_mem2_sign
 * @property int|null $assigned_to
 * @property bool $address_verified
 * @property bool $adress_proof_uploaded
 * @property bool $membership_paid
 * @property bool $membership_paid_slip_uploaded
 * @property bool $adhaar_verified
 * @property bool $adhaar_uploaded
 * @property bool $land_declared_verified
 * @property bool $land_document_uploaded
 * @property bool $lease_land_verified
 * @property bool $lease_land_document_uploaded
 * @property bool $bank_details_verified
 * @property bool $bank_document_uploaded
 * @property string|null $profile_img
 * @property string|null $sign_image
 * @property string|null $domicile
 * @property string|null $challan_copy
 * @property string|null $utr_no
 * @property int $type
 * @property int $status
 * @property \Cake\I18n\FrozenTime $created_on
 * @property string|null $created_on_new
 * @property int|null $created_by
 * @property string|null $land_area
 * @property string|null $patta_land_area
 * @property int|null $accepted
 * @property int|null $user_id
 * @property string|null $ISmember
 * @property string|null $enrollment_number
 * @property string|null $remark
 * @property \Cake\I18n\FrozenTime|null $updated_on
 * @property \Cake\I18n\FrozenDate|null $date_of_apply
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\ApplicationFlow[] $application_flows
 * @property \App\Model\Entity\CropOrder[] $crop_order
 * @property \App\Model\Entity\CropOrderReceived[] $crop_order_received
 * @property \App\Model\Entity\FarmerPlot[] $farmer_plots
 * @property \App\Model\Entity\FarmerRecommended[] $farmer_recommendeds
 * @property \App\Model\Entity\FarmerVegitable[] $farmer_vegitables
 * @property \App\Model\Entity\Harvest[] $harvest
 * @property \App\Model\Entity\PlotLocation[] $plot_locations
 * @property \App\Model\Entity\VwVegSaleReport[] $vw_veg_sale_reports
 */
class Farmer extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'farmer_code' => true,
        'farmer_name' => true,
        'farmer_guardian' => true,
        'phone' => true,
        'password' => true,
        'address' => true,
        'panchayat' => true,
        'samooh_name' => true,
        'village' => true,
        'district' => true,
        'state' => true,
        'country' => true,
        'postal_code' => true,
        'vo_name' => true,
        'age' => true,
        'gender' => true,
        'total_land' => true,
        'leased_land' => true,
        'block' => true,
        'ward' => true,
        'category' => true,
        'birth_year' => true,
        'adhaar' => true,
        'qualification' => true,
        'bank_name' => true,
        'bank_ifsc' => true,
        'account_no' => true,
        'bank_branch' => true,
        'nominee_name' => true,
        'nominee_birth_year' => true,
        'nominee_adhaar' => true,
        'nominee_relation' => true,
        'no_of_shares' => true,
        'rec_mem_reg' => true,
        'rec_mem_uuid' => true,
        'rec_mem_name' => true,
        'rec_mem_father' => true,
        'rec_mem_sign' => true,
        'rec_mem2_reg' => true,
        'rec_mem2_uuid' => true,
        'rec_mem2_name' => true,
        'rec_mem2_father' => true,
        'rec_mem2_sign' => true,
        'assigned_to' => true,
        'address_verified' => true,
        'adress_proof_uploaded' => true,
        'membership_paid' => true,
        'membership_paid_slip_uploaded' => true,
        'adhaar_verified' => true,
        'adhaar_uploaded' => true,
        'land_declared_verified' => true,
        'land_document_uploaded' => true,
        'lease_land_verified' => true,
        'lease_land_document_uploaded' => true,
        'bank_details_verified' => true,
        'bank_document_uploaded' => true,
        'profile_img' => true,
        'sign_image' => true,
        'domicile' => true,
        'challan_copy' => true,
        'utr_no' => true,
        'type' => true,
        'status' => true,
        'created_on' => true,
        'created_on_new' => true,
        'created_by' => true,
        'land_area' => true,
        'patta_land_area' => true,
        'accepted' => true,
        'user_id' => true,
        'ISmember' => true,
        'enrollment_number' => true,
        'remark' => true,
        'updated_on' => true,
        'date_of_apply' => true,
        'user' => true,
        'application_flows' => true,
        'crop_order' => true,
        'crop_order_received' => true,
        'farmer_plots' => true,
        'farmer_recommendeds' => true,
        'farmer_vegitables' => true,
        'harvest' => true,
        'plot_locations' => true,
        'vw_veg_sale_reports' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password',
    ];
}
