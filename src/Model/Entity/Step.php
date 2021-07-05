<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Step Entity
 *
 * @property int $id
 * @property string|null $stepscount
 * @property string|null $distance
 * @property string|null $calories
 * @property \Cake\I18n\FrozenDate|null $date
 * @property string|null $sdktime
 * @property int|null $watchid
 * @property int|null $userid
 */
class Step extends Entity
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
        'stepscount' => true,
        'distance' => true,
        'calories' => true,
        'date' => true,
        'sdktime' => true,
        'watchid' => true,
        'userid' => true,
    ];
}
