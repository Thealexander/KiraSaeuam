<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Transacestudiantes Controller
 *
 * @property \App\Model\Table\TransacestudiantesTable $Transacestudiantes
 */
class TransacestudiantesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $transacestudiantes = $this->paginate($this->Transacestudiantes);

        $this->set(compact('transacestudiantes'));
        $this->set('_serialize', ['transacestudiantes']);
    }

    /**
     * View method
     *
     * @param string|null $id Transacestudiante id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $transacestudiante = $this->Transacestudiantes->get($id, [
            'contain' => []
        ]);

        $this->set('transacestudiante', $transacestudiante);
        $this->set('_serialize', ['transacestudiante']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $transacestudiante = $this->Transacestudiantes->newEntity();
        if ($this->request->is('post')) {
            $transacestudiante = $this->Transacestudiantes->patchEntity($transacestudiante, $this->request->data);
            if ($this->Transacestudiantes->save($transacestudiante)) {
                $this->Flash->success(__('The transacestudiante has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The transacestudiante could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('transacestudiante'));
        $this->set('_serialize', ['transacestudiante']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Transacestudiante id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $transacestudiante = $this->Transacestudiantes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $transacestudiante = $this->Transacestudiantes->patchEntity($transacestudiante, $this->request->data);
            if ($this->Transacestudiantes->save($transacestudiante)) {
                $this->Flash->success(__('The transacestudiante has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The transacestudiante could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('transacestudiante'));
        $this->set('_serialize', ['transacestudiante']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Transacestudiante id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $transacestudiante = $this->Transacestudiantes->get($id);
        if ($this->Transacestudiantes->delete($transacestudiante)) {
            $this->Flash->success(__('The transacestudiante has been deleted.'));
        } else {
            $this->Flash->error(__('The transacestudiante could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
