<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \App\Model\Table\CropOrderTable&\Cake\ORM\Association\HasMany $CropOrder
 * @property \App\Model\Table\CropOrderReceivedTable&\Cake\ORM\Association\HasMany $CropOrderReceived
 * @property \App\Model\Table\FarmersTable&\Cake\ORM\Association\HasMany $Farmers
 * @property \App\Model\Table\HarvestTable&\Cake\ORM\Association\HasMany $Harvest
 * @property \App\Model\Table\UpdatebankdataTable&\Cake\ORM\Association\HasMany $Updatebankdata
 * @property \App\Model\Table\UserCropCommisionTable&\Cake\ORM\Association\HasMany $UserCropCommision
 * @property \App\Model\Table\VwVegSaleReportsTable&\Cake\ORM\Association\HasMany $VwVegSaleReports
 *
 * @method \App\Model\Entity\User newEmptyEntity()
 * @method \App\Model\Entity\User newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\User|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class UsersTable extends Table
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

        $this->setTable('users');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('CropOrder', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('CropOrderReceived', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('Farmers', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('Harvest', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('SaleReports', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('Updatebankdata', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('Updatemobilenumber', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('UserCropCommision', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('VwVegSaleReports', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('VwVegUnionSaleReports', [
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
            ->scalar('full_name')
            ->maxLength('full_name', 255)
            ->allowEmptyString('full_name');

        $validator
            ->email('email')
            ->allowEmptyString('email');

        $validator
            ->scalar('password')
            ->maxLength('password', 255)
            ->requirePresence('password', 'create')
            ->notEmptyString('password');

        $validator
            ->scalar('phone')
            ->maxLength('phone', 255)
            ->allowEmptyString('phone');

        $validator
            ->scalar('address1')
            ->maxLength('address1', 255)
            ->allowEmptyString('address1');

        $validator
            ->scalar('address2')
            ->maxLength('address2', 255)
            ->allowEmptyString('address2');

        $validator
            ->integer('blockcode')
            ->allowEmptyString('blockcode');

        $validator
            ->scalar('block')
            ->maxLength('block', 255)
            ->allowEmptyString('block');

        $validator
            ->scalar('subblock')
            ->maxLength('subblock', 255)
            ->allowEmptyString('subblock');

        $validator
            ->scalar('city')
            ->maxLength('city', 100)
            ->allowEmptyString('city');

        $validator
            ->integer('distcode')
            ->allowEmptyString('distcode');

        $validator
            ->scalar('district')
            ->maxLength('district', 255)
            ->allowEmptyString('district');

        $validator
            ->scalar('state')
            ->maxLength('state', 100)
            ->allowEmptyString('state');

        $validator
            ->integer('postal_code')
            ->allowEmptyString('postal_code');

        $validator
            ->scalar('access_token')
            ->maxLength('access_token', 255)
            ->allowEmptyString('access_token');

        $validator
            ->scalar('device_token')
            ->maxLength('device_token', 255)
            ->allowEmptyString('device_token');

        $validator
            ->scalar('device_type')
            ->maxLength('device_type', 255)
            ->allowEmptyString('device_type');

        $validator
            ->notEmptyString('is_notification');

        $validator
            ->scalar('login_ip')
            ->maxLength('login_ip', 120)
            ->allowEmptyString('login_ip');

        $validator
            ->dateTime('last_login')
            ->allowEmptyDateTime('last_login');

        $validator
            ->scalar('otp')
            ->maxLength('otp', 15)
            ->allowEmptyString('otp');

        $validator
            ->scalar('img_file')
            ->maxLength('img_file', 255)
            ->allowEmptyFile('img_file');

        $validator
            ->allowEmptyString('is_verified');

        $validator
            ->integer('role')
            ->notEmptyString('role');

        $validator
            ->allowEmptyString('type');

        $validator
            ->notEmptyString('status');

        $validator
            ->dateTime('created_on')
            ->notEmptyDateTime('created_on');

        $validator
            ->dateTime('modified_on')
            ->notEmptyDateTime('modified_on');

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
        $rules->add($rules->isUnique(['email']), ['errorField' => 'email']);

        return $rules;
    }
}
