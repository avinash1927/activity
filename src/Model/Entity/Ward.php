<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Ward Entity
 *
 * @property int $id
 * @property string $sino
 * @property string $wardname
 * @property string $wardcode
 * @property string $distcode
 * @property string $blockcode
 * @property string $panchayatcode
 */
class Ward extends Entity
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
        'sino' => true,
        'wardname' => true,
        'wardcode' => true,
        'distcode' => true,
        'blockcode' => true,
        'panchayatcode' => true,
    ];
}
