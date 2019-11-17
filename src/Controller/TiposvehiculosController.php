<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Tiposvehiculos Controller
 *
 * @property \App\Model\Table\TiposvehiculosTable $Tiposvehiculos
 *
 * @method \App\Model\Entity\Tiposvehiculo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TiposvehiculosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $tiposvehiculos = $this->paginate($this->Tiposvehiculos);

        $this->set(compact('tiposvehiculos'));
    }

    /**
     * View method
     *
     * @param string|null $id Tiposvehiculo id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tiposvehiculo = $this->Tiposvehiculos->get($id, [
            'contain' => []
        ]);

        $this->set('tiposvehiculo', $tiposvehiculo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tiposvehiculo = $this->Tiposvehiculos->newEntity();
        if ($this->request->is('post')) {
            $tiposvehiculo = $this->Tiposvehiculos->patchEntity($tiposvehiculo, $this->request->getData());
            if ($this->Tiposvehiculos->save($tiposvehiculo)) {
                $this->Flash->success(__('The tiposvehiculo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tiposvehiculo could not be saved. Please, try again.'));
        }
        $this->set(compact('tiposvehiculo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tiposvehiculo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tiposvehiculo = $this->Tiposvehiculos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tiposvehiculo = $this->Tiposvehiculos->patchEntity($tiposvehiculo, $this->request->getData());
            if ($this->Tiposvehiculos->save($tiposvehiculo)) {
                $this->Flash->success(__('The tiposvehiculo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tiposvehiculo could not be saved. Please, try again.'));
        }
        $this->set(compact('tiposvehiculo'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tiposvehiculo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tiposvehiculo = $this->Tiposvehiculos->get($id);
        if ($this->Tiposvehiculos->delete($tiposvehiculo)) {
            $this->Flash->success(__('The tiposvehiculo has been deleted.'));
        } else {
            $this->Flash->error(__('The tiposvehiculo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
