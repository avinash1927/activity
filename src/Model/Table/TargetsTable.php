<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Targets Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\Target newEmptyEntity()
 * @method \App\Model\Entity\Target newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Target[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Target get($primaryKey, $options = [])
 * @method \App\Model\Entity\Target findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Target patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Target[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Target|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Target saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Target[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Target[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Target[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Target[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TargetsTable extends Table
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

        $this->setTable('targets');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
        ]);
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
            ->integer('workoutType')
            ->allowEmptyString('workoutType');

        $validator
            ->integer('validTime')
            ->allowEmptyString('validTime');

        $validator
            ->integer('steps')
            ->allowEmptyString('steps');

        $validator
            ->integer('distance')
            ->allowEmptyString('distance');

        $validator
            ->integer('calories')
            ->allowEmptyString('calories');

        $validator
            ->scalar('startTime')
            ->maxLength('startTime', 100)
            ->allowEmptyString('startTime');

        $validator
            ->scalar('endTime')
            ->maxLength('endTime', 500)
            ->allowEmptyString('endTime');

        $validator
            ->date('training_date')
            ->allowEmptyDate('training_date');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['user_id'], 'Users'), ['errorField' => 'user_id']);
        $rules->add($rules->isUnique(['startTime','user_id']), ['errorField' => 'startTime']);

        return $rules;
    }
}
