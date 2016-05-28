<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Edificios Controller
 *
 * @property \App\Model\Table\EdificiosTable $Edificios
 */
class EdificiosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $edificios = $this->paginate($this->Edificios);

        $this->set(compact('edificios'));
        $this->set('_serialize', ['edificios']);
    }

    /**
     * View method
     *
     * @param string|null $id Edificio id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $edificio = $this->Edificios->get($id, [
            'contain' => []
        ]);

        $this->set('edificio', $edificio);
        $this->set('_serialize', ['edificio']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $edificio = $this->Edificios->newEntity();
        if ($this->request->is('post')) {
            $edificio = $this->Edificios->patchEntity($edificio, $this->request->data);
            if ($this->Edificios->save($edificio)) {
                $this->Flash->success(__('The edificio has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The edificio could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('edificio'));
        $this->set('_serialize', ['edificio']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Edificio id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $edificio = $this->Edificios->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $edificio = $this->Edificios->patchEntity($edificio, $this->request->data);
            if ($this->Edificios->save($edificio)) {
                $this->Flash->success(__('The edificio has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The edificio could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('edificio'));
        $this->set('_serialize', ['edificio']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Edificio id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $edificio = $this->Edificios->get($id);
        if ($this->Edificios->delete($edificio)) {
            $this->Flash->success(__('The edificio has been deleted.'));
        } else {
            $this->Flash->error(__('The edificio could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
