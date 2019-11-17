<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ProveedorPedidoproveedor Controller
 *
 * @property \App\Model\Table\ProveedorPedidoproveedorTable $ProveedorPedidoproveedor
 *
 * @method \App\Model\Entity\ProveedorPedidoproveedor[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProveedorPedidoproveedorController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $proveedorPedidoproveedor = $this->paginate($this->ProveedorPedidoproveedor);

        $this->set(compact('proveedorPedidoproveedor'));
    }

    /**
     * View method
     *
     * @param string|null $id Proveedor Pedidoproveedor id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $proveedorPedidoproveedor = $this->ProveedorPedidoproveedor->get($id, [
            'contain' => []
        ]);

        $this->set('proveedorPedidoproveedor', $proveedorPedidoproveedor);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $proveedorPedidoproveedor = $this->ProveedorPedidoproveedor->newEntity();
        if ($this->request->is('post')) {
            $proveedorPedidoproveedor = $this->ProveedorPedidoproveedor->patchEntity($proveedorPedidoproveedor, $this->request->getData());
            if ($this->ProveedorPedidoproveedor->save($proveedorPedidoproveedor)) {
                $this->Flash->success(__('The proveedor pedidoproveedor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The proveedor pedidoproveedor could not be saved. Please, try again.'));
        }
        $this->set(compact('proveedorPedidoproveedor'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Proveedor Pedidoproveedor id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $proveedorPedidoproveedor = $this->ProveedorPedidoproveedor->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $proveedorPedidoproveedor = $this->ProveedorPedidoproveedor->patchEntity($proveedorPedidoproveedor, $this->request->getData());
            if ($this->ProveedorPedidoproveedor->save($proveedorPedidoproveedor)) {
                $this->Flash->success(__('The proveedor pedidoproveedor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The proveedor pedidoproveedor could not be saved. Please, try again.'));
        }
        $this->set(compact('proveedorPedidoproveedor'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Proveedor Pedidoproveedor id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $proveedorPedidoproveedor = $this->ProveedorPedidoproveedor->get($id);
        if ($this->ProveedorPedidoproveedor->delete($proveedorPedidoproveedor)) {
            $this->Flash->success(__('The proveedor pedidoproveedor has been deleted.'));
        } else {
            $this->Flash->error(__('The proveedor pedidoproveedor could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
