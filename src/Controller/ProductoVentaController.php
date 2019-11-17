<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ProductoVenta Controller
 *
 * @property \App\Model\Table\ProductoVentaTable $ProductoVenta
 *
 * @method \App\Model\Entity\ProductoVentum[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProductoVentaController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Productos', 'Ventas']
        ];
        $productoVenta = $this->paginate($this->ProductoVenta);

        $this->set(compact('productoVenta'));
    }

    /**
     * View method
     *
     * @param string|null $id Producto Ventum id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $productoVentum = $this->ProductoVenta->get($id, [
            'contain' => ['Productos', 'Ventas']
        ]);

        $this->set('productoVentum', $productoVentum);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $productoVentum = $this->ProductoVenta->newEntity();
        if ($this->request->is('post')) {
            $productoVentum = $this->ProductoVenta->patchEntity($productoVentum, $this->request->getData());
            if ($this->ProductoVenta->save($productoVentum)) {
                $this->Flash->success(__('The producto ventum has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The producto ventum could not be saved. Please, try again.'));
        }
        $productos = $this->ProductoVenta->Productos->find('list', ['limit' => 200]);
        $ventas = $this->ProductoVenta->Ventas->find('list', ['limit' => 200]);
        $this->set(compact('productoVentum', 'productos', 'ventas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Producto Ventum id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $productoVentum = $this->ProductoVenta->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $productoVentum = $this->ProductoVenta->patchEntity($productoVentum, $this->request->getData());
            if ($this->ProductoVenta->save($productoVentum)) {
                $this->Flash->success(__('The producto ventum has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The producto ventum could not be saved. Please, try again.'));
        }
        $productos = $this->ProductoVenta->Productos->find('list', ['limit' => 200]);
        $ventas = $this->ProductoVenta->Ventas->find('list', ['limit' => 200]);
        $this->set(compact('productoVentum', 'productos', 'ventas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Producto Ventum id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $productoVentum = $this->ProductoVenta->get($id);
        if ($this->ProductoVenta->delete($productoVentum)) {
            $this->Flash->success(__('The producto ventum has been deleted.'));
        } else {
            $this->Flash->error(__('The producto ventum could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
