<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Estudiantes Controller
 *
 * @property \App\Model\Table\EstudiantesTable $Estudiantes
 */
class EstudiantesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $estudiantes = $this->paginate($this->Estudiantes);

        $this->set(compact('estudiantes'));
        $this->set('_serialize', ['estudiantes']);
    }

    /**
     * View method
     *
     * @param string|null $id Estudiante id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $estudiante = $this->Estudiantes->get($id, [
            'contain' => []
        ]);

        $this->set('estudiante', $estudiante);
        $this->set('_serialize', ['estudiante']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $estudiante = $this->Estudiantes->newEntity();
        if ($this->request->is('post')) {
            $estudiante = $this->Estudiantes->patchEntity($estudiante, $this->request->data);
            if ($this->Estudiantes->save($estudiante)) {
                $this->Flash->success(__('The estudiante has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The estudiante could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('estudiante'));
        $this->set('_serialize', ['estudiante']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Estudiante id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $estudiante = $this->Estudiantes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $estudiante = $this->Estudiantes->patchEntity($estudiante, $this->request->data);
            if ($this->Estudiantes->save($estudiante)) {
                $this->Flash->success(__('The estudiante has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The estudiante could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('estudiante'));
        $this->set('_serialize', ['estudiante']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Estudiante id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $estudiante = $this->Estudiantes->get($id);
        if ($this->Estudiantes->delete($estudiante)) {
            $this->Flash->success(__('The estudiante has been deleted.'));
        } else {
            $this->Flash->error(__('The estudiante could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
