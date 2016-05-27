<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Aulas Controller
 *
 * @property \App\Model\Table\AulasTable $Aulas
 */
class AulasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $aulas = $this->paginate($this->Aulas);

        $this->set(compact('aulas'));
        $this->set('_serialize', ['aulas']);
    }

    /**
     * View method
     *
     * @param string|null $id Aula id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $aula = $this->Aulas->get($id, [
            'contain' => []
        ]);

        $this->set('aula', $aula);
        $this->set('_serialize', ['aula']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $aula = $this->Aulas->newEntity();
        if ($this->request->is('post')) {
            $aula = $this->Aulas->patchEntity($aula, $this->request->data);
            if ($this->Aulas->save($aula)) {
                $this->Flash->success(__('The aula has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The aula could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('aula'));
        $this->set('_serialize', ['aula']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Aula id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $aula = $this->Aulas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $aula = $this->Aulas->patchEntity($aula, $this->request->data);
            if ($this->Aulas->save($aula)) {
                $this->Flash->success(__('The aula has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The aula could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('aula'));
        $this->set('_serialize', ['aula']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Aula id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $aula = $this->Aulas->get($id);
        if ($this->Aulas->delete($aula)) {
            $this->Flash->success(__('The aula has been deleted.'));
        } else {
            $this->Flash->error(__('The aula could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
