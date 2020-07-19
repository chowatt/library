<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Book Entity
 *
 * @property string $id
 * @property string|null $call_number
 * @property string|null $subject_id
 * @property string|null $media_type_id
 * @property string|null $title
 * @property string|null $publisher
 * @property int|null $pages
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property \Cake\I18n\FrozenDate|null $acquired
 * @property string|null $description
 *
 * @property \App\Model\Entity\Subject $subject
 * @property \App\Model\Entity\MediaType $media_type
 */
class Book extends Entity
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
        'call_number' => true,
        'subject_id' => true,
        'media_type_id' => true,
        'title' => true,
        'publisher' => true,
        'pages' => true,
        'created' => true,
        'modified' => true,
        'acquired' => true,
        'description' => true,
        'subject' => true,
        'media_type' => true,
    ];
}
