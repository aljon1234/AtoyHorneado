<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ProveedorPedidoproveedor Model
 *
 * @method \App\Model\Entity\ProveedorPedidoproveedor get($primaryKey, $options = [])
 * @method \App\Model\Entity\ProveedorPedidoproveedor newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ProveedorPedidoproveedor[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ProveedorPedidoproveedor|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProveedorPedidoproveedor saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProveedorPedidoproveedor patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ProveedorPedidoproveedor[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ProveedorPedidoproveedor findOrCreate($search, callable $callback = null, $options = [])
 */
class ProveedorPedidoproveedorTable extends Table
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

        $this->setTable('proveedor_pedidoproveedor');
        $this->setDisplayField('proveedores_idproveedores');
        $this->setPrimaryKey(['proveedores_idproveedores', 'pedido_proveedor_idpedido_proveedor']);
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
            ->integer('proveedores_idproveedores')
            ->allowEmptyString('proveedores_idproveedores', null, 'create');

        $validator
            ->integer('pedido_proveedor_idpedido_proveedor')
            ->allowEmptyString('pedido_proveedor_idpedido_proveedor', null, 'create');

        return $validator;
    }
}
