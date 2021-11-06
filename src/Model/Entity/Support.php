<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Support Entity
 *
 * @property int $id
 * @property int|null $support_category_id
 * @property string|null $description
 * @property bool|null $status
 * @property int|null $user_id
 * @property bool|null $is_trash
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\SupportCategory $support_category
 * @property \App\Model\Entity\User $user
 */
class Support extends Entity
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
        'support_category_id' => true,
        'description' => true,
        'status' => true,
        'user_id' => true,
        'is_trash' => true,
        'created' => true,
        'modified' => true,
        'support_category' => true,
        'user' => true,
    ];
}
