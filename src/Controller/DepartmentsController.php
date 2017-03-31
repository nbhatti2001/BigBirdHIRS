<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
/**
 * Departments Controller
 *
 * @property \App\Model\Table\DepartmentsTable $Departments
 */
class DepartmentsController extends AppController
{
	public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
    }	
	public function isAuthorized($user)
	{
		$this->loadModel('UserRoles');
		$qryRoles = $this->UserRoles->find('all')
			->where(['role_id'=>$this->Auth->user('user_role_id'), 'menu_id'=>3]);
			//->contain(['Menus']);

		$myRights=array();
		foreach($qryRoles as $row)
		{
			if($row->read==1)
			{
				array_push($myRights,'index');
				array_push($myRights,'view');
			}
			if($row->write==1)
			{
				array_push($myRights,'add');
			}			
			if($row->delete==1)
			{
				array_push($myRights,'delete');
			}
			if($row->edit==1)
			{
				array_push($myRights,'edit');
			}

			if(in_array($this->request->action,$myRights))
				return true;
			else
				$this->redirect(['controller'=> 'Pages','action'=>'denied']);
		}

	}

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Companies','MyUsers','ModifiedBy']
        ];
        $departments = $this->paginate($this->Departments);
        $this->set(compact('departments'));
        $this->set('_serialize', ['departments']);
    }

    /**
     * View method
     *
     * @param string|null $id Department id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $department = $this->Departments->get($id, [
            'contain' => ['Companies', 'Users1', 'Users']
        ]);
        $this->set('department', $department);
        $this->set('_serialize', ['department']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $department = $this->Departments->newEntity();
        if ($this->request->is('post')) {
            $department = $this->Departments->patchEntity($department, $this->request->data);
            if ($this->Departments->save($department)) {
                $this->Flash->success(__('The department has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The department could not be saved. Please, try again.'));
            }
        }
        $companies = $this->Departments->Companies->find('list', ['limit' => 200]);
        $this->set(compact('department', 'companies'));
		// some TEST changes
        $this->set('_serialize', ['department']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Department id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $department = $this->Departments->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $department = $this->Departments->patchEntity($department, $this->request->data);
            if ($this->Departments->save($department)) {
                $this->Flash->success(__('The department has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The department could not be saved. Please, try again.'));
            }
        }
        $companies = $this->Departments->Companies->find('list', ['limit' => 200]);
       
        $this->set(compact('department', 'companies'));
        $this->set('_serialize', ['department']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Department id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $department = $this->Departments->get($id);
        if ($this->Departments->delete($department)) {
            $this->Flash->success(__('The department has been deleted.'));
        } else {
            $this->Flash->error(__('The department could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
