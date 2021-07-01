<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string|null $full_name
 * @property string|null $email
 * @property string $password
 * @property string|null $phone
 * @property string|null $address1
 * @property string|null $address2
 * @property string|null $block
 * @property string|null $subblock
 * @property string|null $city
 * @property string|null $district
 * @property string|null $state
 * @property int|null $postal_code
 * @property string|null $access_token
 * @property string|null $device_token
 * @property string|null $device_type
 * @property int $is_notification
 * @property string|null $login_ip
 * @property \Cake\I18n\FrozenTime|null $last_login
 * @property string|null $otp
 * @property string|null $img_file
 * @property int|null $is_verified
 * @property int $role
 * @property int|null $type
 * @property int $status
 * @property \Cake\I18n\FrozenTime $created_on
 * @property \Cake\I18n\FrozenTime $modified_on
 *
 * @property \App\Model\Entity\CropOrder[] $crop_order
 * @property \App\Model\Entity\CropOrderReceived[] $crop_order_received
 * @property \App\Model\Entity\Farmer[] $farmers
 * @property \App\Model\Entity\Harvest[] $harvest
 * @property \App\Model\Entity\Updatebankdata[] $updatebankdata
 * @property \App\Model\Entity\UserCropCommision[] $user_crop_commision
 * @property \App\Model\Entity\VwVegSaleReport[] $vw_veg_sale_reports
 */
class User extends Entity
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
        'full_name' => true,
        'email' => true,
        'password' => true,
        'phone' => true,
        'address1' => true,
        'address2' => true,
        'block' => true,
        'subblock' => true,
        'city' => true,
        'district' => true,
        'state' => true,
        'postal_code' => true,
        'access_token' => true,
        'device_token' => true,
        'device_type' => true,
        'is_notification' => true,
        'login_ip' => true,
        'last_login' => true,
        'otp' => true,
        'img_file' => true,
        'is_verified' => true,
        'role' => true,
        'type' => true,
        'status' => true,
        'created_on' => true,
        'modified_on' => true,
        'crop_order' => true,
        'crop_order_received' => true,
        'farmers' => true,
        'harvest' => true,
        'updatebankdata' => true,
        'user_crop_commision' => true,
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
