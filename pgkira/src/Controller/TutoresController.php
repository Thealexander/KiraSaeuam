<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Tutores Controller
 *
 * @property \App\Model\Table\TutoresTable $Tutores
 */
class TutoresController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $tutores = $this->paginate($this->Tutores);

        $this->set(compact('tutores'));
        $this->set('_serialize', ['tutores']);
    }

    /**
     * View method
     *
     * @param string|null $id Tutore id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tutore = $this->Tutores->get($id, [
            'contain' => []
        ]);

        $this->set('tutore', $tutore);
        $this->set('_serialize', ['tutore']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tutore = $this->Tutores->newEntity();
        if ($this->request->is('post')) {
            $tutore = $this->Tutores->patchEntity($tutore, $this->request->data);
            if ($this->Tutores->save($tutore)) {
                $this->Flash->success(__('The tutore has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tutore could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tutore'));
        $this->set('_serialize', ['tutore']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tutore id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tutore = $this->Tutores->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tutore = $this->Tutores->patchEntity($tutore, $this->request->data);
            if ($this->Tutores->save($tutore)) {
                $this->Flash->success(__('The tutore has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tutore could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tutore'));
        $this->set('_serialize', ['tutore']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tutore id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tutore = $this->Tutores->get($id);
        if ($this->Tutores->delete($tutore)) {
            $this->Flash->success(__('The tutore has been deleted.'));
        } else {
            $this->Flash->error(__('The tutore could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
