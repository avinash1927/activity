<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SupportCategories Model
 *
 * @property \App\Model\Table\SupportsTable&\Cake\ORM\Association\HasMany $Supports
 *
 * @method \App\Model\Entity\SupportCategory newEmptyEntity()
 * @method \App\Model\Entity\SupportCategory newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\SupportCategory[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SupportCategory get($primaryKey, $options = [])
 * @method \App\Model\Entity\SupportCategory findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\SupportCategory patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SupportCategory[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\SupportCategory|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SupportCategory saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SupportCategory[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\SupportCategory[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\SupportCategory[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\SupportCategory[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SupportCategoriesTable extends Table
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

        $this->setTable('support_categories');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Supports', [
            'foreignKey' => 'support_category_id',
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
            ->scalar('title')
            ->maxLength('title', 250)
            ->allowEmptyString('title');

        $validator
            ->boolean('is_enable')
            ->allowEmptyString('is_enable');

        $validator
            ->boolean('is_trash')
            ->allowEmptyString('is_trash');

        return $validator;
    }
}
