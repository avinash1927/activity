<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Steps Model
 *
 * @property \App\Model\Table\WatchesTable&\Cake\ORM\Association\BelongsTo $Watches
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\Step newEmptyEntity()
 * @method \App\Model\Entity\Step newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Step[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Step get($primaryKey, $options = [])
 * @method \App\Model\Entity\Step findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Step patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Step[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Step|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Step saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Step[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Step[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Step[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Step[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class StepsTable extends Table
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

        $this->setTable('steps');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Watches', [
            'foreignKey' => 'watch_id',
        ]);
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
            ->scalar('stepscount')
            ->maxLength('stepscount', 50)
            ->allowEmptyString('stepscount');

        $validator
            ->scalar('distance')
            ->maxLength('distance', 50)
            ->allowEmptyString('distance');

        $validator
            ->scalar('calories')
            ->maxLength('calories', 50)
            ->allowEmptyString('calories');

        $validator
            ->date('date')
            ->allowEmptyDate('date');

        $validator
            ->scalar('sdktime')
            ->maxLength('sdktime', 50)
            ->allowEmptyString('sdktime');

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
        $rules->add($rules->existsIn(['watch_id'], 'Watches'), ['errorField' => 'watch_id']);
        $rules->add($rules->existsIn(['user_id'], 'Users'), ['errorField' => 'user_id']);

        return $rules;
    }
}
