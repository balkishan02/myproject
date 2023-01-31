<?php

declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class OwnerTable extends Table{

    public function initialize(array $config): void
    {
        parent::initialize($config); // TODO: Change the autogenerated stub

//        $this->setTable('owner');
//        $this->setDisplayField('name');
//        $this->setPrimaryKey('oid');

        $this->belongsTo('Car',[
            'foreignKey' => 'fid :: bigint',
        ]);
    }

    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('name')
            ->notEmptyString('name');

        $validator
            ->scalar('fid')
            ->notEmptyString('fid');

        return $validator;
    }
}