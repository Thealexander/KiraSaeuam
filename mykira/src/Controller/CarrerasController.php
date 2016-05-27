<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Carreras Controller
 *
 * @property \App\Model\Table\CarrerasTable $Carreras
 */
class CarrerasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $carreras = $this->paginate($this->Carreras);

        $this->set(compact('carreras'));
        $this->set('_serialize', ['carreras']);
    }

    /**
     * View method
     *
     * @param string|null $id Carrera id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $carrera = $this->Carreras->get($id, [
            'contain' => []
        ]);

        $this->set('carrera', $carrera);
        $this->set('_serialize', ['carrera']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $carrera = $this->Carreras->newEntity();
        if ($this->request->is('post')) {
            $carrera = $this->Carreras->patchEntity($carrera, $this->request->data);
            if ($this->Carreras->save($carrera)) {
                $this->Flash->success(__('The carrera has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The carrera could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('carrera'));
        $this->set('_serialize', ['carrera']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Carrera id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $carrera = $this->Carreras->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $carrera = $this->Carreras->patchEntity($carrera, $this->request->data);
            if ($this->Carreras->save($carrera)) {
                $this->Flash->success(__('The carrera has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The carrera could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('carrera'));
        $this->set('_serialize', ['carrera']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Carrera id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $carrera = $this->Carreras->get($id);
        if ($this->Carreras->delete($carrera)) {
            $this->Flash->success(__('The carrera has been deleted.'));
        } else {
            $this->Flash->error(__('The carrera could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
