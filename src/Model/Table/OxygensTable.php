<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Oxygens Model
 *
 * @property \App\Model\Table\WatchesTable&\Cake\ORM\Association\BelongsTo $Watches
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\Oxygen newEmptyEntity()
 * @method \App\Model\Entity\Oxygen newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Oxygen[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Oxygen get($primaryKey, $options = [])
 * @method \App\Model\Entity\Oxygen findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Oxygen patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Oxygen[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Oxygen|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Oxygen saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Oxygen[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Oxygen[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Oxygen[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Oxygen[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class OxygensTable extends Table
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

        $this->setTable('oxygens');
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
            ->scalar('oxygen_value')
            ->maxLength('oxygen_value', 200)
            ->allowEmptyString('oxygen_value');

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
