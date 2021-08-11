<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DeviceDetail Entity
 *
 * @property int $id
 * @property int|null $watch_id
 * @property string|null $watch_mac
 * @property string|null $watch_name
 * @property string|null $watch_firmware
 * @property \Cake\I18n\FrozenDate|null $installlatio_ndate
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Watch $watch
 */
class DeviceDetail extends Entity
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
        'watch_id' => true,
        'watch_mac' => true,
        'watch_name' => true,
        'watch_firmware' => true,
        'installlatio_ndate' => true,
        'created' => true,
        'modified' => true,
        'watch' => true,
    ];
}
