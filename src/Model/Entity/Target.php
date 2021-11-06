<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Target Entity
 *
 * @property int $id
 * @property int|null $workoutType
 * @property int|null $validTime
 * @property int|null $steps
 * @property int|null $distance
 * @property int|null $calories
 * @property string|null $startTime
 * @property string|null $endTime
 * @property \Cake\I18n\FrozenDate|null $training_date
 * @property int|null $user_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\User $user
 */
class Target extends Entity
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
        'workoutType' => true,
        'validTime' => true,
        'steps' => true,
        'distance' => true,
        'calories' => true,
        'startTime' => true,
        'endTime' => true,
        'training_date' => true,
        'user_id' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
    ];
}
