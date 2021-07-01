<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ward Model
 *
 * @method \App\Model\Entity\Ward newEmptyEntity()
 * @method \App\Model\Entity\Ward newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Ward[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Ward get($primaryKey, $options = [])
 * @method \App\Model\Entity\Ward findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Ward patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Ward[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Ward|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ward saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ward[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Ward[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Ward[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Ward[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class WardTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('ward');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('sino')
            ->maxLength('sino', 255)
            ->requirePresence('sino', 'create')
            ->notEmptyString('sino');

        $validator
            ->scalar('wardname')
            ->maxLength('wardname', 255)
            ->requirePresence('wardname', 'create')
            ->notEmptyString('wardname');

        $validator
            ->scalar('wardcode')
            ->maxLength('wardcode', 255)
            ->requirePresence('wardcode', 'create')
            ->notEmptyString('wardcode');

        $validator
            ->scalar('distcode')
            ->maxLength('distcode', 255)
            ->requirePresence('distcode', 'create')
            ->notEmptyString('distcode');

        $validator
            ->scalar('blockcode')
            ->maxLength('blockcode', 255)
            ->requirePresence('blockcode', 'create')
            ->notEmptyString('blockcode');

        $validator
            ->scalar('panchayatcode')
            ->maxLength('panchayatcode', 255)
            ->requirePresence('panchayatcode', 'create')
            ->notEmptyString('panchayatcode');

        return $validator;
    }
}
