<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
/**
 * Stations Controller
 *
 * @property \App\Model\Table\StationsTable $Stations
 */
class StationsController extends AppController
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
            'contain' => ['Managers', 'MyUsers', 'ModifiedBy', 'Companies']
        ];
        $stations = $this->paginate($this->Stations);

        $this->set(compact('stations'));
        $this->set('_serialize', ['stations']);
    }

    /**
     * View method
     *
     * @param string|null $id Station id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $station = $this->Stations->get($id, [
            'contain' => ['Managers', 'MyUsers', 'ModifiedBy', 'Companies', 'Employees', 'EmployeesBkp', 'SalaryMasters', 'Users', 'UsersBkp']
        ]);

        $this->set('station', $station);
        $this->set('_serialize', ['station']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $station = $this->Stations->newEntity();
        if ($this->request->is('post')) {
            $station = $this->Stations->patchEntity($station, $this->request->data);
            if ($this->Stations->save($station)) {
                $this->Flash->success(__('The station has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The station could not be saved. Please, try again.'));
            }
        }
        $managers = $this->Stations->Managers->find('list', ['limit' => 200]);
        $myUsers = $this->Stations->MyUsers->find('list', ['limit' => 200]);
        $modifiedBy = $this->Stations->ModifiedBy->find('list', ['limit' => 200]);
        $companies = $this->Stations->Companies->find('list', ['limit' => 200]);
        $this->set(compact('station', 'managers', 'myUsers', 'modifiedBy', 'companies'));
        $this->set('_serialize', ['station']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Station id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $station = $this->Stations->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $station = $this->Stations->patchEntity($station, $this->request->data);
            if ($this->Stations->save($station)) {
                $this->Flash->success(__('The station has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The station could not be saved. Please, try again.'));
            }
        }
        $managers = $this->Stations->Managers->find('list', ['limit' => 200]);
        $myUsers = $this->Stations->MyUsers->find('list', ['limit' => 200]);
        $modifiedBy = $this->Stations->ModifiedBy->find('list', ['limit' => 200]);
        $companies = $this->Stations->Companies->find('list', ['limit' => 200]);
        $this->set(compact('station', 'managers', 'myUsers', 'modifiedBy', 'companies'));
        $this->set('_serialize', ['station']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Station id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $station = $this->Stations->get($id);
        if ($this->Stations->delete($station)) {
            $this->Flash->success(__('The station has been deleted.'));
        } else {
            $this->Flash->error(__('The station could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
