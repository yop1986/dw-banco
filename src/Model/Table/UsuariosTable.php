<?php
namespace App\Model\Table;

use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Usuarios Model
 *
 * @property \App\Model\Table\BeneficiariosTable|\Cake\ORM\Association\HasMany $Beneficiarios
 * @property \App\Model\Table\CuentasTable|\Cake\ORM\Association\HasMany $Cuentas
 *
 * @method \App\Model\Entity\Usuario get($primaryKey, $options = [])
 * @method \App\Model\Entity\Usuario newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Usuario[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Usuario|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Usuario patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Usuario[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Usuario findOrCreate($search, callable $callback = null, $options = [])
 */
class UsuariosTable extends Table
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

        $this->setTable('usuarios');
        $this->setDisplayField('usuario');
        $this->setPrimaryKey('id');

        $this->hasMany('Beneficiarios', [
            'foreignKey' => 'usuario_id'
        ]);
        $this->hasMany('Cuentas', [
            'foreignKey' => 'usuario_id'
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
            ->scalar('nombre')
            ->requirePresence('nombre', 'create')
            ->notEmpty('nombre');

        $validator
            ->scalar('usuario')
            ->requirePresence('usuario', 'create')
            ->notEmpty('usuario')
            ->add('usuario', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('correo')
            ->requirePresence('correo', 'create')
            ->notEmpty('correo')
            ->add('correo', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('telefono')
            ->requirePresence('telefono', 'create')
            ->notEmpty('telefono');

        $validator
            ->scalar('contrasena')
            ->requirePresence('contrasena', 'create')
            ->notEmpty('contrasena');

        $validator
            ->dateTime('creado')
            ->requirePresence('creado', 'create')
            ->allowEmpty('creado');

        $validator
            ->dateTime('modificado')
            ->requirePresence('modificado', 'update')
            ->allowEmpty('modificado');

        $validator
            ->boolean('activo')
            ->allowEmpty('activo');

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
        $rules->add($rules->isUnique(['usuario']));
        $rules->add($rules->isUnique(['correo']));

        return $rules;
    }


    //query para logueo verificando estado del usuario
    public function findAuth(\Cake\ORM\Query $query, array $options)
    {
        $query
            ->select()
            ->where(['Usuarios.activo' => 1]);

        return $query;
    }

    //validaciones en cambio de contraseña
    //http://base-syst.com/2016/09/16/password-validation-when-changing-password-in-cakephp-3/
    public function validationContrasena(Validator $validator)
    {
        $validator
            ->add('ContrasenaAnt', 'custom', [
                  'rule' => function ($value, $context) {
                    $user = $this->get($context['data']['id']);
                    if($user) {
                        if ((new DefaultPasswordHasher)->check($value, $user->contrasena)) {
                            return true;
                        }
                    }
                    return false;
                  },
                  'message' => __('The old password does not match the current password!')
              ])
            ->notEmpty('ContrasenaAnt');

        $validator
            ->add('Contrasena1', [
                  'length' => [
                    'rule' => ['minLength', 6],
                    'message' => __('The password have to be at least of 6 characters!'),
                  ]
              ])
            ->notEmpty('Contrasena1');

        $validator
            ->add('Contrasena2', [
                  'match' => [
                    'rule' => ['compareWith', 'Contrasena1'],
                    'message' => __('The passwords does not match!'),
                  ]
              ])
            ->notEmpty('Contrasena2');

        return $validator;
    }
}
