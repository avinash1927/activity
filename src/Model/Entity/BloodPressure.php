<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * BloodPressure Entity
 *
 * @property int $id
 * @property string|null $first_value
 * @property string|null $second_value
 * @property string|null $sdk_time
 * @property \Cake\I18n\FrozenDate|null $date
 * @property int|null $watch_id
 * @property int|null $user_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Watch $watch
 * @property \App\Model\Entity\User $user
 */
class BloodPressure extends Entity
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
        'first_value' => true,
        'second_value' => true,
        'sdk_time' => true,
        'date' => true,
        'watch_id' => true,
        'user_id' => true,
        'created' => true,
        'modified' => true,
        'watch' => true,
        'user' => true,
    ];
}
