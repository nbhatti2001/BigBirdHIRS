<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
/**
 * Banks Controller
 *
 * @property \App\Model\Table\BanksTable $Banks
 */
class BanksController extends AppController
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
            'contain' => ['MyUsers', 'ModifiedBy']
        ];
        $banks = $this->paginate($this->Banks);

        $this->set(compact('banks'));
        $this->set('_serialize', ['banks']);
    }

    /**
     * View method
     *
     * @param string|null $id Bank id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bank = $this->Banks->get($id, [
            'contain' => ['Companies', 'MyUsers', 'ModifiedBy', 'Employees', 'EmployeesBkp', 'SalaryMasters']
        ]);

        $this->set('bank', $bank);
        $this->set('_serialize', ['bank']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bank = $this->Banks->newEntity();
        if ($this->request->is('post')) {
            $bank = $this->Banks->patchEntity($bank, $this->request->data);
            if ($this->Banks->save($bank)) {
                $this->Flash->success(__('The bank has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The bank could not be saved. Please, try again.'));
            }
        }
        $companies = $this->Banks->Companies->find('list', ['limit' => 200]);
        $myUsers = $this->Banks->MyUsers->find('list', ['limit' => 200]);
        $modifiedBy = $this->Banks->ModifiedBy->find('list', ['limit' => 200]);
        $this->set(compact('bank', 'companies', 'myUsers', 'modifiedBy'));
        $this->set('_serialize', ['bank']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Bank id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bank = $this->Banks->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bank = $this->Banks->patchEntity($bank, $this->request->data);
            if ($this->Banks->save($bank)) {
                $this->Flash->success(__('The bank has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The bank could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('bank'));
        $this->set('_serialize', ['bank']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Bank id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bank = $this->Banks->get($id);
        if ($this->Banks->delete($bank)) {
            $this->Flash->success(__('The bank has been deleted.'));
        } else {
            $this->Flash->error(__('The bank could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
