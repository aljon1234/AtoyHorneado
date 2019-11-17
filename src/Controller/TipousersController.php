<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Tipousers Controller
 *
 * @property \App\Model\Table\TipousersTable $Tipousers
 *
 * @method \App\Model\Entity\Tipouser[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TipousersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $tipousers = $this->paginate($this->Tipousers);

        $this->set(compact('tipousers'));
    }

    /**
     * View method
     *
     * @param string|null $id Tipouser id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tipouser = $this->Tipousers->get($id, [
            'contain' => []
        ]);

        $this->set('tipouser', $tipouser);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tipouser = $this->Tipousers->newEntity();
        if ($this->request->is('post')) {
            $tipouser = $this->Tipousers->patchEntity($tipouser, $this->request->getData());
            if ($this->Tipousers->save($tipouser)) {
                $this->Flash->success(__('The tipouser has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipouser could not be saved. Please, try again.'));
        }
        $this->set(compact('tipouser'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tipouser id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tipouser = $this->Tipousers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tipouser = $this->Tipousers->patchEntity($tipouser, $this->request->getData());
            if ($this->Tipousers->save($tipouser)) {
                $this->Flash->success(__('The tipouser has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipouser could not be saved. Please, try again.'));
        }
        $this->set(compact('tipouser'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tipouser id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tipouser = $this->Tipousers->get($id);
        if ($this->Tipousers->delete($tipouser)) {
            $this->Flash->success(__('The tipouser has been deleted.'));
        } else {
            $this->Flash->error(__('The tipouser could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
