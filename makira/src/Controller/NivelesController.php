<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Niveles Controller
 *
 * @property \App\Model\Table\NivelesTable $Niveles
 */
class NivelesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $niveles = $this->paginate($this->Niveles);

        $this->set(compact('niveles'));
        $this->set('_serialize', ['niveles']);
    }

    /**
     * View method
     *
     * @param string|null $id Nivele id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $nivele = $this->Niveles->get($id, [
            'contain' => []
        ]);

        $this->set('nivele', $nivele);
        $this->set('_serialize', ['nivele']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $nivele = $this->Niveles->newEntity();
        if ($this->request->is('post')) {
            $nivele = $this->Niveles->patchEntity($nivele, $this->request->data);
            if ($this->Niveles->save($nivele)) {
                $this->Flash->success(__('The nivele has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The nivele could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('nivele'));
        $this->set('_serialize', ['nivele']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Nivele id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $nivele = $this->Niveles->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $nivele = $this->Niveles->patchEntity($nivele, $this->request->data);
            if ($this->Niveles->save($nivele)) {
                $this->Flash->success(__('The nivele has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The nivele could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('nivele'));
        $this->set('_serialize', ['nivele']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Nivele id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $nivele = $this->Niveles->get($id);
        if ($this->Niveles->delete($nivele)) {
            $this->Flash->success(__('The nivele has been deleted.'));
        } else {
            $this->Flash->error(__('The nivele could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
