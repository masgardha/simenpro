<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Outputs Model
 *
 * @property \App\Model\Table\StoresTable&\Cake\ORM\Association\BelongsTo $Stores
 * @property \App\Model\Table\StocksTable&\Cake\ORM\Association\BelongsTo $Stocks
 *
 * @method \App\Model\Entity\Output newEmptyEntity()
 * @method \App\Model\Entity\Output newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Output[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Output get($primaryKey, $options = [])
 * @method \App\Model\Entity\Output findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Output patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Output[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Output|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Output saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Output[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Output[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Output[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Output[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class OutputsTable extends Table
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

        $this->setTable('outputs');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Stores', [
            'foreignKey' => 'store_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Stocks', [
            'foreignKey' => 'stock_id',
            'joinType' => 'INNER',
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
            ->integer('quantity')
            ->requirePresence('quantity', 'create')
            ->notEmptyString('quantity');

        $validator
            ->scalar('description')
            ->maxLength('description', 255)
            ->allowEmptyString('description');

        $validator
            ->date('date')
            ->requirePresence('date', 'create')
            ->notEmptyDate('date');

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
        $rules->add($rules->existsIn('store_id', 'Stores'), ['errorField' => 'store_id']);
        $rules->add($rules->existsIn('stock_id', 'Stocks'), ['errorField' => 'stock_id']);

        return $rules;
    }
}
