<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Watch Entity
 *
 * @property int $id
 * @property int|null $user_id
 * @property string|null $name
 * @property string|null $firmware_version
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Step[] $steps
 * @property \App\Model\Entity\WatchFace[] $watch_faces
 */
class Watch extends Entity
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
        'user_id' => true,
        'name' => true,
        'firmware_version' => true,
        'created' => true,
        'modified' => true,
        'steps' => true,
        'watch_faces' => true,
    ];
}
