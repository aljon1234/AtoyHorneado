<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ProductoVenta Model
 *
 * @property \App\Model\Table\ProductosTable&\Cake\ORM\Association\BelongsTo $Productos
 * @property \App\Model\Table\VentasTable&\Cake\ORM\Association\BelongsTo $Ventas
 *
 * @method \App\Model\Entity\ProductoVentum get($primaryKey, $options = [])
 * @method \App\Model\Entity\ProductoVentum newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ProductoVentum[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ProductoVentum|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProductoVentum saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProductoVentum patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ProductoVentum[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ProductoVentum findOrCreate($search, callable $callback = null, $options = [])
 */
class ProductoVentaTable extends Table
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

        $this->setTable('producto_venta');
        $this->setDisplayField('productos_id');
        $this->setPrimaryKey(['productos_id', 'ventas_id']);

        $this->belongsTo('Productos', [
            'foreignKey' => 'productos_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Ventas', [
            'foreignKey' => 'ventas_id',
            'joinType' => 'INNER'
        ]);
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
        $rules->add($rules->existsIn(['productos_id'], 'Productos'));
        $rules->add($rules->existsIn(['ventas_id'], 'Ventas'));

        return $rules;
    }
}
