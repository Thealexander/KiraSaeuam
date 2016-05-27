<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Genero Controller
 *
 * @property \App\Model\Table\GeneroTable $Genero
 */
class GeneroController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $genero = $this->paginate($this->Genero);

        $this->set(compact('genero'));
        $this->set('_serialize', ['genero']);
    }

    /**
     * View method
     *
     * @param string|null $id Genero id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $genero = $this->Genero->get($id, [
            'contain' => []
        ]);

        $this->set('genero', $genero);
        $this->set('_serialize', ['genero']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $genero = $this->Genero->newEntity();
        if ($this->request->is('post')) {
            $genero = $this->Genero->patchEntity($genero, $this->request->data);
            if ($this->Genero->save($genero)) {
                $this->Flash->success(__('The genero has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The genero could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('genero'));
        $this->set('_serialize', ['genero']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Genero id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $genero = $this->Genero->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $genero = $this->Genero->patchEntity($genero, $this->request->data);
            if ($this->Genero->save($genero)) {
                $this->Flash->success(__('The genero has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The genero could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('genero'));
        $this->set('_serialize', ['genero']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Genero id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $genero = $this->Genero->get($id);
        if ($this->Genero->delete($genero)) {
            $this->Flash->success(__('The genero has been deleted.'));
        } else {
            $this->Flash->error(__('The genero could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
