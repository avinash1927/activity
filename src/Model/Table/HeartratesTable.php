<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Heartrates Model
 *
 * @property \App\Model\Table\WatchesTable&\Cake\ORM\Association\BelongsTo $Watches
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\Heartrate newEmptyEntity()
 * @method \App\Model\Entity\Heartrate newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Heartrate[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Heartrate get($primaryKey, $options = [])
 * @method \App\Model\Entity\Heartrate findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Heartrate patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Heartrate[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Heartrate|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Heartrate saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Heartrate[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Heartrate[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Heartrate[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Heartrate[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class HeartratesTable extends Table
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

        $this->setTable('heartrates');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

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
            ->scalar('hr_value')
            ->maxLength('hr_value', 200)
            ->allowEmptyString('hr_value');

        $validator
            ->scalar('sdk_time')
            ->maxLength('sdk_time', 200)
            ->allowEmptyString('sdk_time');

        $validator
            ->date('date')
            ->allowEmptyDate('date');

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
