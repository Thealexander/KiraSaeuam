<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Periodos Controller
 *
 * @property \App\Model\Table\PeriodosTable $Periodos
 */
class PeriodosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $periodos = $this->paginate($this->Periodos);

        $this->set(compact('periodos'));
        $this->set('_serialize', ['periodos']);
    }

    /**
     * View method
     *
     * @param string|null $id Periodo id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $periodo = $this->Periodos->get($id, [
            'contain' => []
        ]);

        $this->set('periodo', $periodo);
        $this->set('_serialize', ['periodo']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $periodo = $this->Periodos->newEntity();
        if ($this->request->is('post')) {
            $periodo = $this->Periodos->patchEntity($periodo, $this->request->data);
            if ($this->Periodos->save($periodo)) {
                $this->Flash->success(__('The periodo has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The periodo could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('periodo'));
        $this->set('_serialize', ['periodo']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Periodo id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $periodo = $this->Periodos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $periodo = $this->Periodos->patchEntity($periodo, $this->request->data);
            if ($this->Periodos->save($periodo)) {
                $this->Flash->success(__('The periodo has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The periodo could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('periodo'));
        $this->set('_serialize', ['periodo']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Periodo id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $periodo = $this->Periodos->get($id);
        if ($this->Periodos->delete($periodo)) {
            $this->Flash->success(__('The periodo has been deleted.'));
        } else {
            $this->Flash->error(__('The periodo could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
