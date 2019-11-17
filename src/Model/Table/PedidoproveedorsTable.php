<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Pedidoproveedors Model
 *
 * @method \App\Model\Entity\Pedidoproveedor get($primaryKey, $options = [])
 * @method \App\Model\Entity\Pedidoproveedor newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Pedidoproveedor[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Pedidoproveedor|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pedidoproveedor saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pedidoproveedor patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Pedidoproveedor[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Pedidoproveedor findOrCreate($search, callable $callback = null, $options = [])
 */
class PedidoproveedorsTable extends Table
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

        $this->setTable('pedidoproveedors');
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
            ->scalar('id_proveedor')
            ->maxLength('id_proveedor', 45)
            ->allowEmptyString('id_proveedor');

        $validator
            ->scalar('pedido_proveedorcol')
            ->maxLength('pedido_proveedorcol', 45)
            ->allowEmptyString('pedido_proveedorcol');

        return $validator;
    }
}
