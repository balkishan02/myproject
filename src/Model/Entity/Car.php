<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

class Car extends Entity{

    protected $_accessible = [
        'model' => true,
        'owner' => true
    ];
}
