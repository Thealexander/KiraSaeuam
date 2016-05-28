<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Turnos Controller
 *
 * @property \App\Model\Table\TurnosTable $Turnos
 */
class TurnosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $turnos = $this->paginate($this->Turnos);

        $this->set(compact('turnos'));
        $this->set('_serialize', ['turnos']);
    }

    /**
     * View method
     *
     * @param string|null $id Turno id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $turno = $this->Turnos->get($id, [
            'contain' => []
        ]);

        $this->set('turno', $turno);
        $this->set('_serialize', ['turno']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $turno = $this->Turnos->newEntity();
        if ($this->request->is('post')) {
            $turno = $this->Turnos->patchEntity($turno, $this->request->data);
            if ($this->Turnos->save($turno)) {
                $this->Flash->success(__('The turno has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The turno could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('turno'));
        $this->set('_serialize', ['turno']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Turno id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $turno = $this->Turnos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $turno = $this->Turnos->patchEntity($turno, $this->request->data);
            if ($this->Turnos->save($turno)) {
                $this->Flash->success(__('The turno has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The turno could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('turno'));
        $this->set('_serialize', ['turno']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Turno id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $turno = $this->Turnos->get($id);
        if ($this->Turnos->delete($turno)) {
            $this->Flash->success(__('The turno has been deleted.'));
        } else {
            $this->Flash->error(__('The turno could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
