<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Proveedors Controller
 *
 * @property \App\Model\Table\ProveedorsTable $Proveedors
 *
 * @method \App\Model\Entity\Proveedor[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProveedorsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $proveedors = $this->paginate($this->Proveedors);

        $this->set(compact('proveedors'));
    }

    /**
     * View method
     *
     * @param string|null $id Proveedor id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $proveedor = $this->Proveedors->get($id, [
            'contain' => []
        ]);

        $this->set('proveedor', $proveedor);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $proveedor = $this->Proveedors->newEntity();
        if ($this->request->is('post')) {
            $proveedor = $this->Proveedors->patchEntity($proveedor, $this->request->getData());
            if ($this->Proveedors->save($proveedor)) {
                $this->Flash->success(__('The proveedor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The proveedor could not be saved. Please, try again.'));
        }
        $this->set(compact('proveedor'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Proveedor id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $proveedor = $this->Proveedors->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $proveedor = $this->Proveedors->patchEntity($proveedor, $this->request->getData());
            if ($this->Proveedors->save($proveedor)) {
                $this->Flash->success(__('The proveedor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The proveedor could not be saved. Please, try again.'));
        }
        $this->set(compact('proveedor'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Proveedor id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $proveedor = $this->Proveedors->get($id);
        if ($this->Proveedors->delete($proveedor)) {
            $this->Flash->success(__('The proveedor has been deleted.'));
        } else {
            $this->Flash->error(__('The proveedor could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
