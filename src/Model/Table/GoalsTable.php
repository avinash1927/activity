<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Goals Model
 *
 * @method \App\Model\Entity\Goal newEmptyEntity()
 * @method \App\Model\Entity\Goal newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Goal[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Goal get($primaryKey, $options = [])
 * @method \App\Model\Entity\Goal findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Goal patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Goal[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Goal|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Goal saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Goal[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Goal[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Goal[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Goal[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class GoalsTable extends Table
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

        $this->setTable('goals');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->integer('userid')
            ->allowEmptyString('userid');

        $validator
            ->scalar('goaltype')
            ->maxLength('goaltype', 50)
            ->allowEmptyString('goaltype');

        $validator
            ->scalar('goalvalue')
            ->maxLength('goalvalue', 50)
            ->allowEmptyString('goalvalue');

        return $validator;
    }
}
