<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\Event\Event;
/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        // Allow users to register and logout.
        // You should not add the "login" action to allow list. Doing so would
        // cause problems with normal functioning of AuthComponent.
        $this->Auth->allow(['add', 'logout']);
    }	 
	public function isAuthorized($user)
	{
		return true;
	}
    public function index()
    {
        $this->paginate = [
            'contain' => ['Departments', 'Stations', 'Companies']
        ];
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
    }
	public function login() 
	{
		if ($this->request->is('post')) 
		{
			$user =$this->Auth->identify();
			if($user)
			{
				$this->Auth->setUser($user);
				return $this->redirect(['controller'=>'users','action'=>'index']);
			}
			$this->Flash->error(__('Invalid user name or password, try again'));
		}
		$this->viewBuilder()->layout('');
    }	
	public function logout()
	{
		return $this->redirect($this->Auth->logout());
	}

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Departments', 'Stations', 'Companies', 'GroupDetails']
        ]);

        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
		//printr($this->request->data);exit;
	
	// $photo = base64_encode($this->data['photo']['name']);
	
	
	
        if ($this->request->is('post')) {
			//printr($this->request->data);exit;
            $user = $this->Users->patchEntity($user, $this->request->data);
			///
				if(!empty($this->request->data['photo']['name']))
				{
					$file = $this->request->data['photo']['name']; //put the data into a var for easy use
					$file =str_replace (" ","_",$file);
					$ext = substr(strtolower(strrchr($file, '.')), 1); //get the extension
					$arr_ext = array('jpg', 'jpeg', 'gif'); //set allowed extensions

					//only process if the extension is valid
					if(in_array($ext, $arr_ext))
					{
						//do the actual uploading of the file. First arg is the tmp name, second arg is
						//where we are putting it
						move_uploaded_file($this->request->data['photo']['tmp_name'], WWW_ROOT .'/img/'. $file);
						
				
				$hex_string = base64_encode($this->data->$file);
						
						
						//prepare the filename for database entry
						//$this->data['photo']['image'] = $file['name'];
					}
					
					
				}			
			///
		//	$encode = base64_encode($file);
			$this->request->data['photo'] =$hex_string;
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        $departments = $this->Users->Departments->find('list', ['limit' => 200]);
        $stations = $this->Users->Stations->find('list', ['limit' => 200]);
        $companies = $this->Users->Companies->find('list', ['limit' => 200]);
        $this->set(compact('user', 'departments', 'stations', 'companies'));
        $this->set('_serialize', ['user']);
    }
	public function updReady($id)
	{
		$this->loadModel('Tblaction');
		$tblaction = $this->Tblaction->newEntity();
		$data['atable']="users";
		$data['user_id']=$this->Auth->user("id");
		$data['pid']=$id;
		$tblaction = $this->Tblaction->patchEntity($tblaction, $data);
		if($this->Tblaction->save($tblaction))
			return true;
		else
			return false;
	}
	public function updDestroy($id)
	{
		$this->loadModel('Tblaction');
		$this->Tblaction->deleteAll(['atable'=>'users','pid'=>$id]);
	}
    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) 
		{
			$status=$this->updReady($id);
			$this->request->data['modified_by']= $this->Auth->user("id");
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
				$this->updDestroy($id);
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        $departments = $this->Users->Departments->find('list', ['limit' => 200]);
        $stations = $this->Users->Stations->find('list', ['limit' => 200]);
        $companies = $this->Users->Companies->find('list', ['limit' => 200]);
        $this->set(compact('user', 'departments', 'stations', 'companies'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
