<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Departamentos Controller
 *
 * @property \App\Model\Table\DepartamentosTable $Departamentos
 */
class DepartamentosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $departamentos = $this->paginate($this->Departamentos);

        $this->set(compact('departamentos'));
        $this->set('_serialize', ['departamentos']);
    }

    /**
     * View method
     *
     * @param string|null $id Departamento id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $departamento = $this->Departamentos->get($id, [
            'contain' => []
        ]);

        $this->set('departamento', $departamento);
        $this->set('_serialize', ['departamento']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $departamento = $this->Departamentos->newEntity();
        if ($this->request->is('post')) {
            $departamento = $this->Departamentos->patchEntity($departamento, $this->request->data);
            if ($this->Departamentos->save($departamento)) {
                $this->Flash->success(__('The departamento has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The departamento could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('departamento'));
        $this->set('_serialize', ['departamento']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Departamento id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $departamento = $this->Departamentos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $departamento = $this->Departamentos->patchEntity($departamento, $this->request->data);
            if ($this->Departamentos->save($departamento)) {
                $this->Flash->success(__('The departamento has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The departamento could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('departamento'));
        $this->set('_serialize', ['departamento']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Departamento id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $departamento = $this->Departamentos->get($id);
        if ($this->Departamentos->delete($departamento)) {
            $this->Flash->success(__('The departamento has been deleted.'));
        } else {
            $this->Flash->error(__('The departamento could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
