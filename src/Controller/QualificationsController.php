<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Qualifications Controller
 *
 * @property \App\Model\Table\QualificationsTable $Qualifications
 */
class QualificationsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Employees']
        ];
        $qualifications = $this->paginate($this->Qualifications);

        $this->set(compact('qualifications'));
        $this->set('_serialize', ['qualifications']);
    }

    /**
     * View method
     *
     * @param string|null $id Qualification id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $qualification = $this->Qualifications->get($id, [
            'contain' => ['Employees']
        ]);

        $this->set('qualification', $qualification);
        $this->set('_serialize', ['qualification']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $qualification = $this->Qualifications->newEntity();
        if ($this->request->is('post')) {
			print_r($this->request->data);exit;
            $qualification = $this->Qualifications->patchEntity($qualification, $this->request->data);
            if ($this->Qualifications->save($qualification)) {
                $this->Flash->success(__('The qualification has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The qualification could not be saved. Please, try again.'));
            }
        }
        $employees = $this->Qualifications->Employees->find('list', ['limit' => 200]);
        $this->set(compact('qualification', 'employees'));
        $this->set('_serialize', ['qualification']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Qualification id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $qualification = $this->Qualifications->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $qualification = $this->Qualifications->patchEntity($qualification, $this->request->data);
            if ($this->Qualifications->save($qualification)) {
                $this->Flash->success(__('The qualification has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The qualification could not be saved. Please, try again.'));
            }
        }
        $employees = $this->Qualifications->Employees->find('list', ['limit' => 200]);
        $this->set(compact('qualification', 'employees'));
        $this->set('_serialize', ['qualification']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Qualification id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $qualification = $this->Qualifications->get($id);
        if ($this->Qualifications->delete($qualification)) {
            $this->Flash->success(__('The qualification has been deleted.'));
        } else {
            $this->Flash->error(__('The qualification could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
