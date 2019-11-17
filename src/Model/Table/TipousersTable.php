<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tipousers Model
 *
 * @method \App\Model\Entity\Tipouser get($primaryKey, $options = [])
 * @method \App\Model\Entity\Tipouser newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Tipouser[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Tipouser|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tipouser saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tipouser patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Tipouser[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Tipouser findOrCreate($search, callable $callback = null, $options = [])
 */
class TipousersTable extends Table
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

        $this->setTable('tipousers');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('rol')
            ->maxLength('rol', 45)
            ->allowEmptyString('rol');

        return $validator;
    }
}
