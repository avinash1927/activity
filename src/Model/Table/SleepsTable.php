<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sleeps Model
 *
 * @property \App\Model\Table\WatchesTable&\Cake\ORM\Association\BelongsTo $Watches
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\Sleep newEmptyEntity()
 * @method \App\Model\Entity\Sleep newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Sleep[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Sleep get($primaryKey, $options = [])
 * @method \App\Model\Entity\Sleep findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Sleep patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Sleep[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Sleep|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sleep saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sleep[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Sleep[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Sleep[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Sleep[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SleepsTable extends Table
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

        $this->setTable('sleeps');
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
            ->scalar('sleep_goal')
            ->maxLength('sleep_goal', 100)
            ->allowEmptyString('sleep_goal');

        $validator
            ->scalar('sleep_hours')
            ->maxLength('sleep_hours', 100)
            ->allowEmptyString('sleep_hours');

        $validator
            ->scalar('sleep_start_time')
            ->maxLength('sleep_start_time', 100)
            ->allowEmptyString('sleep_start_time');

        $validator
            ->scalar('sleep_end_time')
            ->maxLength('sleep_end_time', 100)
            ->allowEmptyString('sleep_end_time');

        $validator
            ->date('date')
            ->allowEmptyDate('date');

        $validator
            ->integer('light')
            ->allowEmptyString('light');

        $validator
            ->integer('sober')
            ->allowEmptyString('sober');

        $validator
            ->integer('rest')
            ->allowEmptyString('rest');

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
