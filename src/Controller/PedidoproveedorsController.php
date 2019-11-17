<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Pedidoproveedors Controller
 *
 * @property \App\Model\Table\PedidoproveedorsTable $Pedidoproveedors
 *
 * @method \App\Model\Entity\Pedidoproveedor[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PedidoproveedorsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $pedidoproveedors = $this->paginate($this->Pedidoproveedors);

        $this->set(compact('pedidoproveedors'));
    }

    /**
     * View method
     *
     * @param string|null $id Pedidoproveedor id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pedidoproveedor = $this->Pedidoproveedors->get($id, [
            'contain' => []
        ]);

        $this->set('pedidoproveedor', $pedidoproveedor);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pedidoproveedor = $this->Pedidoproveedors->newEntity();
        if ($this->request->is('post')) {
            $pedidoproveedor = $this->Pedidoproveedors->patchEntity($pedidoproveedor, $this->request->getData());
            if ($this->Pedidoproveedors->save($pedidoproveedor)) {
                $this->Flash->success(__('The pedidoproveedor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pedidoproveedor could not be saved. Please, try again.'));
        }
        $this->set(compact('pedidoproveedor'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Pedidoproveedor id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pedidoproveedor = $this->Pedidoproveedors->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pedidoproveedor = $this->Pedidoproveedors->patchEntity($pedidoproveedor, $this->request->getData());
            if ($this->Pedidoproveedors->save($pedidoproveedor)) {
                $this->Flash->success(__('The pedidoproveedor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pedidoproveedor could not be saved. Please, try again.'));
        }
        $this->set(compact('pedidoproveedor'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Pedidoproveedor id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pedidoproveedor = $this->Pedidoproveedors->get($id);
        if ($this->Pedidoproveedors->delete($pedidoproveedor)) {
            $this->Flash->success(__('The pedidoproveedor has been deleted.'));
        } else {
            $this->Flash->error(__('The pedidoproveedor could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
