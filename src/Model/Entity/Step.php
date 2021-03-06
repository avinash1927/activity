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
 * @property string|null $steps_ goal
 * @property \Cake\I18n\FrozenDate|null $date
 * @property string|null $sdktime
 * @property int|null $watch_id
 * @property int|null $user_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Watch $watch
 * @property \App\Model\Entity\User $user
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
        'steps_goal' => true,
        'date' => true,
        'sdktime' => true,
        'watch_id' => true,
        'user_id' => true,
        'created' => true,
        'modified' => true,
        'watch' => true,
        'user' => true,
    ];
}
