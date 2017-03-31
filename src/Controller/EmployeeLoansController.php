<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
/**
 * EmployeeLoans Controller
 *
 * @property \App\Model\Table\EmployeeLoansTable $EmployeeLoans
 */
class EmployeeLoansController extends AppController
{
	public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow('add');
    }
	public function isAuthorized($user)
	{
		$this->loadModel('UserRoles');
		$qryRoles = $this->UserRoles->find('all')
			->where(['role_id'=>$this->Auth->user('user_role_id'), 'menu_id'=>1]);
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
            'contain' => ['Employees', 'Companies', 'Users']
        ];
        $employeeloans = $this->paginate($this->EmployeeLoans);

        $this->set(compact('employeeloans'));
        $this->set('_serialize', ['employeeloans']);
    }

    /**
     * View method
     *
     * @param string|null $id Employeeloan id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $employeeloan = $this->EmployeeLoans->get($id, [
            'contain' => ['Employees', 'Companies', 'Users']
        ]);

        $this->set('employeeloan', $employeeloan);
        $this->set('_serialize', ['employeeloan']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $employeeloan = $this->EmployeeLoans->newEntity();
        if ($this->request->is('post')) {
            $employeeloan = $this->EmployeeLoans->patchEntity($employeeloan, $this->request->data);
            if ($this->EmployeeLoans->save($employeeloan)) {
                $this->Flash->success(__('The employeeloan has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The employeeloan could not be saved. Please, try again.'));
            }
        }
        $employees = $this->EmployeeLoans->Employees->find('list', ['valueField'=>'employee_name', 'limit' => 200]);
		//printr($employees);exit;
        $companies = $this->EmployeeLoans->Companies->find('list', ['limit' => 200]);
        $users = $this->EmployeeLoans->Users->find('list', ['limit' => 200]);
        $this->set(compact('employeeloan', 'employees', 'companies', 'users'));
        $this->set('_serialize', ['employeeloan']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Employeeloan id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $employeeloan = $this->EmployeeLoans->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $employeeloan = $this->EmployeeLoans->patchEntity($employeeloan, $this->request->data);
            if ($this->EmployeeLoans->save($employeeloan)) {
                $this->Flash->success(__('The employeeloan has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The employeeloan could not be saved. Please, try again.'));
            }
        }
        $employees = $this->EmployeeLoans->Employees->find('list', ['valueField'=>'employee_name','limit' => 200]);
        $companies = $this->EmployeeLoans->Companies->find('list', ['limit' => 200]);
        $users = $this->EmployeeLoans->Users->find('list', ['limit' => 200]);
        $this->set(compact('employeeloan', 'employees', 'companies', 'users'));
        $this->set('_serialize', ['employeeloan']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Employeeloan id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $employeeloan = $this->EmployeeLoans->get($id);
        if ($this->EmployeeLoans->delete($employeeloan)) {
            $this->Flash->success(__('The employeeloan has been deleted.'));
        } else {
            $this->Flash->error(__('The employeeloan could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
