<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class CarTable extends Table{
    public function initialize(array $config): void
    {
        parent::initialize($config); // TODO: Change the autogenerated stub

//        $this->setTable('car');
//        $this->setDisplayField('model');
//        $this->setPrimaryKey('cid');

        $this->hasMany('Owner', [
           'foreignKey' => 'fid :: bigint',
        ]);
    }

    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('model')
            ->notEmptyString('model');

        return $validator;
    }
}
