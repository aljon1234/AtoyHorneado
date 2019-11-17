<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Tiposproductos Controller
 *
 * @property \App\Model\Table\TiposproductosTable $Tiposproductos
 *
 * @method \App\Model\Entity\Tiposproducto[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TiposproductosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $tiposproductos = $this->paginate($this->Tiposproductos);

        $this->set(compact('tiposproductos'));
    }

    /**
     * View method
     *
     * @param string|null $id Tiposproducto id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tiposproducto = $this->Tiposproductos->get($id, [
            'contain' => []
        ]);

        $this->set('tiposproducto', $tiposproducto);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tiposproducto = $this->Tiposproductos->newEntity();
        if ($this->request->is('post')) {
            $tiposproducto = $this->Tiposproductos->patchEntity($tiposproducto, $this->request->getData());
            if ($this->Tiposproductos->save($tiposproducto)) {
                $this->Flash->success(__('The tiposproducto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tiposproducto could not be saved. Please, try again.'));
        }
        $this->set(compact('tiposproducto'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tiposproducto id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tiposproducto = $this->Tiposproductos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tiposproducto = $this->Tiposproductos->patchEntity($tiposproducto, $this->request->getData());
            if ($this->Tiposproductos->save($tiposproducto)) {
                $this->Flash->success(__('The tiposproducto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tiposproducto could not be saved. Please, try again.'));
        }
        $this->set(compact('tiposproducto'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tiposproducto id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tiposproducto = $this->Tiposproductos->get($id);
        if ($this->Tiposproductos->delete($tiposproducto)) {
            $this->Flash->success(__('The tiposproducto has been deleted.'));
        } else {
            $this->Flash->error(__('The tiposproducto could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
