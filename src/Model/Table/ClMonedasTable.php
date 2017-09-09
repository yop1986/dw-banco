<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ClMonedas Model
 *
 * @property \App\Model\Table\ClMonedaTable|\Cake\ORM\Association\BelongsTo $ClMonedas
 *
 * @method \App\Model\Entity\ClMoneda get($primaryKey, $options = [])
 * @method \App\Model\Entity\ClMoneda newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ClMoneda[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ClMoneda|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ClMoneda patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ClMoneda[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ClMoneda findOrCreate($search, callable $callback = null, $options = [])
 */
class ClMonedasTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('cl_monedas');
        $this->setDisplayField('simbolo');
        $this->setPrimaryKey('id');

        $this->hasMany('Cuentas', [
            'foreignKey' => 'moneda_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('simbolo')
            ->requirePresence('simbolo', 'create')
            ->notEmpty('simbolo')
            ->add('simbolo', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('descripcion')
            ->requirePresence('descripcion', 'create')
            ->notEmpty('descripcion');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['simbolo']));

        return $rules;
    }
}
