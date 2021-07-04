<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Farmers Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\ApplicationFlowsTable&\Cake\ORM\Association\HasMany $ApplicationFlows
 * @property \App\Model\Table\CropOrderTable&\Cake\ORM\Association\HasMany $CropOrder
 * @property \App\Model\Table\CropOrderReceivedTable&\Cake\ORM\Association\HasMany $CropOrderReceived
 * @property \App\Model\Table\FarmerPlotsTable&\Cake\ORM\Association\HasMany $FarmerPlots
 * @property \App\Model\Table\FarmerRecommendedsTable&\Cake\ORM\Association\HasMany $FarmerRecommendeds
 * @property \App\Model\Table\FarmerVegitablesTable&\Cake\ORM\Association\HasMany $FarmerVegitables
 * @property \App\Model\Table\HarvestTable&\Cake\ORM\Association\HasMany $Harvest
 * @property \App\Model\Table\PlotLocationsTable&\Cake\ORM\Association\HasMany $PlotLocations
 * @property \App\Model\Table\VwVegSaleReportsTable&\Cake\ORM\Association\HasMany $VwVegSaleReports
 *
 * @method \App\Model\Entity\Farmer newEmptyEntity()
 * @method \App\Model\Entity\Farmer newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Farmer[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Farmer get($primaryKey, $options = [])
 * @method \App\Model\Entity\Farmer findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Farmer patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Farmer[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Farmer|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Farmer saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Farmer[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Farmer[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Farmer[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Farmer[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class FarmersTable extends Table
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

        $this->setTable('farmers');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('ApplicationFlows', [
            'foreignKey' => 'farmer_id',
        ]);
        $this->hasMany('CropOrder', [
            'foreignKey' => 'farmer_id',
        ]);
        $this->hasMany('CropOrderReceived', [
            'foreignKey' => 'farmer_id',
        ]);
        $this->hasMany('FarmerPlots', [
            'foreignKey' => 'farmer_id',
        ]);
        $this->hasMany('FarmerRecommendeds', [
            'foreignKey' => 'farmer_id',
        ]);
        $this->hasMany('FarmerVegitables', [
            'foreignKey' => 'farmer_id',
        ]);
        $this->hasMany('Harvest', [
            'foreignKey' => 'farmer_id',
        ]);
        $this->hasMany('PlotLocations', [
            'foreignKey' => 'farmer_id',
        ]);
        $this->hasMany('VwVegSaleReports', [
            'foreignKey' => 'farmer_id',
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
            ->scalar('farmer_code')
            ->maxLength('farmer_code', 20)
            ->allowEmptyString('farmer_code');

        $validator
            ->scalar('farmer_name')
            ->maxLength('farmer_name', 255)
            ->requirePresence('farmer_name', 'create')
            ->notEmptyString('farmer_name');

        $validator
            ->scalar('farmer_guardian')
            ->maxLength('farmer_guardian', 255)
            ->allowEmptyString('farmer_guardian');

        $validator
            ->scalar('phone')
            ->maxLength('phone', 255)
            ->requirePresence('phone', 'create')
            ->notEmptyString('phone');

        $validator
            ->scalar('password')
            ->allowEmptyString('password');

        $validator
            ->scalar('address')
            ->allowEmptyString('address');

        $validator
            ->scalar('panchayat')
            ->maxLength('panchayat', 255)
            ->allowEmptyString('panchayat');

        $validator
            ->scalar('samooh_name')
            ->maxLength('samooh_name', 255)
            ->allowEmptyString('samooh_name');

        $validator
            ->scalar('village')
            ->maxLength('village', 255)
            ->allowEmptyString('village');

        $validator
            ->scalar('district')
            ->maxLength('district', 100)
            ->allowEmptyString('district');

        $validator
            ->scalar('state')
            ->maxLength('state', 100)
            ->notEmptyString('state');

        $validator
            ->scalar('country')
            ->maxLength('country', 100)
            ->notEmptyString('country');

        $validator
            ->integer('postal_code')
            ->allowEmptyString('postal_code');

        $validator
            ->scalar('vo_name')
            ->maxLength('vo_name', 255)
            ->allowEmptyString('vo_name');

        $validator
            ->integer('age')
            ->allowEmptyString('age');

        $validator
            ->integer('gender')
            ->allowEmptyString('gender');

        $validator
            ->scalar('total_land')
            ->maxLength('total_land', 25)
            ->allowEmptyString('total_land');

        $validator
            ->scalar('leased_land')
            ->maxLength('leased_land', 255)
            ->allowEmptyString('leased_land');

        $validator
            ->scalar('block')
            ->maxLength('block', 255)
            ->allowEmptyString('block');

        $validator
            ->scalar('ward')
            ->maxLength('ward', 255)
            ->allowEmptyString('ward');

        $validator
            ->scalar('category')
            ->maxLength('category', 255)
            ->allowEmptyString('category');

        $validator
            ->scalar('birth_year')
            ->maxLength('birth_year', 255)
            ->allowEmptyString('birth_year');

        $validator
            ->scalar('adhaar')
            ->maxLength('adhaar', 255)
            ->allowEmptyString('adhaar');

        $validator
            ->scalar('qualification')
            ->maxLength('qualification', 255)
            ->allowEmptyString('qualification');

        $validator
            ->scalar('bank_name')
            ->maxLength('bank_name', 255)
            ->allowEmptyString('bank_name');

        $validator
            ->scalar('bank_ifsc')
            ->maxLength('bank_ifsc', 255)
            ->allowEmptyString('bank_ifsc');

        $validator
            ->scalar('account_no')
            ->maxLength('account_no', 255)
            ->allowEmptyString('account_no');

        $validator
            ->scalar('bank_branch')
            ->maxLength('bank_branch', 255)
            ->allowEmptyString('bank_branch');

        $validator
            ->scalar('nominee_name')
            ->maxLength('nominee_name', 255)
            ->allowEmptyString('nominee_name');

        $validator
            ->scalar('nominee_birth_year')
            ->maxLength('nominee_birth_year', 255)
            ->allowEmptyString('nominee_birth_year');

        $validator
            ->scalar('nominee_adhaar')
            ->maxLength('nominee_adhaar', 255)
            ->allowEmptyString('nominee_adhaar');

        $validator
            ->scalar('nominee_relation')
            ->maxLength('nominee_relation', 255)
            ->allowEmptyString('nominee_relation');

        $validator
            ->scalar('no_of_shares')
            ->maxLength('no_of_shares', 255)
            ->allowEmptyString('no_of_shares');

        $validator
            ->scalar('rec_mem_reg')
            ->maxLength('rec_mem_reg', 250)
            ->allowEmptyString('rec_mem_reg');

        $validator
            ->scalar('rec_mem_uuid')
            ->maxLength('rec_mem_uuid', 250)
            ->allowEmptyString('rec_mem_uuid');

        $validator
            ->scalar('rec_mem_name')
            ->maxLength('rec_mem_name', 250)
            ->allowEmptyString('rec_mem_name');

        $validator
            ->scalar('rec_mem_father')
            ->maxLength('rec_mem_father', 250)
            ->allowEmptyString('rec_mem_father');

        $validator
            ->scalar('rec_mem_sign')
            ->maxLength('rec_mem_sign', 250)
            ->allowEmptyString('rec_mem_sign');

        $validator
            ->scalar('rec_mem2_reg')
            ->maxLength('rec_mem2_reg', 250)
            ->allowEmptyString('rec_mem2_reg');

        $validator
            ->scalar('rec_mem2_uuid')
            ->maxLength('rec_mem2_uuid', 250)
            ->allowEmptyString('rec_mem2_uuid');

        $validator
            ->scalar('rec_mem2_name')
            ->maxLength('rec_mem2_name', 250)
            ->allowEmptyString('rec_mem2_name');

        $validator
            ->scalar('rec_mem2_father')
            ->maxLength('rec_mem2_father', 250)
            ->allowEmptyString('rec_mem2_father');

        $validator
            ->scalar('rec_mem2_sign')
            ->maxLength('rec_mem2_sign', 250)
            ->allowEmptyString('rec_mem2_sign');

        $validator
            ->integer('assigned_to')
            ->allowEmptyString('assigned_to');

        $validator
            ->boolean('address_verified')
            ->requirePresence('address_verified', 'create')
            ->notEmptyString('address_verified');

        $validator
            ->boolean('adress_proof_uploaded')
            ->requirePresence('adress_proof_uploaded', 'create')
            ->notEmptyString('adress_proof_uploaded');

        $validator
            ->boolean('membership_paid')
            ->requirePresence('membership_paid', 'create')
            ->notEmptyString('membership_paid');

        $validator
            ->boolean('membership_paid_slip_uploaded')
            ->requirePresence('membership_paid_slip_uploaded', 'create')
            ->notEmptyString('membership_paid_slip_uploaded');

        $validator
            ->boolean('adhaar_verified')
            ->requirePresence('adhaar_verified', 'create')
            ->notEmptyString('adhaar_verified');

        $validator
            ->boolean('adhaar_uploaded')
            ->requirePresence('adhaar_uploaded', 'create')
            ->notEmptyString('adhaar_uploaded');

        $validator
            ->boolean('land_declared_verified')
            ->requirePresence('land_declared_verified', 'create')
            ->notEmptyString('land_declared_verified');

        $validator
            ->boolean('land_document_uploaded')
            ->requirePresence('land_document_uploaded', 'create')
            ->notEmptyString('land_document_uploaded');

        $validator
            ->boolean('lease_land_verified')
            ->requirePresence('lease_land_verified', 'create')
            ->notEmptyString('lease_land_verified');

        $validator
            ->boolean('lease_land_document_uploaded')
            ->requirePresence('lease_land_document_uploaded', 'create')
            ->notEmptyString('lease_land_document_uploaded');

        $validator
            ->boolean('bank_details_verified')
            ->requirePresence('bank_details_verified', 'create')
            ->notEmptyString('bank_details_verified');

        $validator
            ->boolean('bank_document_uploaded')
            ->requirePresence('bank_document_uploaded', 'create')
            ->notEmptyString('bank_document_uploaded');

        $validator
            ->scalar('profile_img')
            ->maxLength('profile_img', 255)
            ->allowEmptyFile('profile_img');

        $validator
            ->scalar('sign_image')
            ->maxLength('sign_image', 255)
            ->allowEmptyFile('sign_image');

        $validator
            ->scalar('domicile')
            ->maxLength('domicile', 255)
            ->allowEmptyString('domicile');

        $validator
            ->scalar('challan_copy')
            ->maxLength('challan_copy', 250)
            ->allowEmptyString('challan_copy');

        $validator
            ->scalar('utr_no')
            ->maxLength('utr_no', 250)
            ->allowEmptyString('utr_no');

        $validator
            ->notEmptyString('type');

        $validator
            ->notEmptyString('status');

        $validator
            ->dateTime('created_on')
            ->notEmptyDateTime('created_on');

        $validator
            ->scalar('created_on_new')
            ->maxLength('created_on_new', 50)
            ->allowEmptyString('created_on_new');

        $validator
            ->integer('created_by')
            ->allowEmptyString('created_by');

        $validator
            ->scalar('land_area')
            ->maxLength('land_area', 250)
            ->allowEmptyString('land_area');

        $validator
            ->scalar('patta_land_area')
            ->maxLength('patta_land_area', 250)
            ->allowEmptyString('patta_land_area');

        $validator
            ->allowEmptyString('accepted');

        $validator
            ->scalar('ISmember')
            ->maxLength('ISmember', 1)
            ->allowEmptyString('ISmember');

        $validator
            ->scalar('enrollment_number')
            ->maxLength('enrollment_number', 255)
            ->allowEmptyString('enrollment_number');

        $validator
            ->scalar('remark')
            ->maxLength('remark', 255)
            ->allowEmptyString('remark');

        $validator
            ->dateTime('updated_on')
            ->allowEmptyDateTime('updated_on');

        $validator
            ->date('date_of_apply')
            ->allowEmptyDate('date_of_apply');

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

        return $rules;
    }
}
