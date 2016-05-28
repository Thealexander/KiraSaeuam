<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Clases Controller
 *
 * @property \App\Model\Table\ClasesTable $Clases
 */
class ClasesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $clases = $this->paginate($this->Clases);

        $this->set(compact('clases'));
        $this->set('_serialize', ['clases']);
    }

    /**
     * View method
     *
     * @param string|null $id Clase id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $clase = $this->Clases->get($id, [
            'contain' => []
        ]);

        $this->set('clase', $clase);
        $this->set('_serialize', ['clase']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $clase = $this->Clases->newEntity();
        if ($this->request->is('post')) {
            $clase = $this->Clases->patchEntity($clase, $this->request->data);
            if ($this->Clases->save($clase)) {
                $this->Flash->success(__('The clase has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The clase could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('clase'));
        $this->set('_serialize', ['clase']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Clase id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $clase = $this->Clases->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $clase = $this->Clases->patchEntity($clase, $this->request->data);
            if ($this->Clases->save($clase)) {
                $this->Flash->success(__('The clase has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The clase could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('clase'));
        $this->set('_serialize', ['clase']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Clase id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $clase = $this->Clases->get($id);
        if ($this->Clases->delete($clase)) {
            $this->Flash->success(__('The clase has been deleted.'));
        } else {
            $this->Flash->error(__('The clase could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
