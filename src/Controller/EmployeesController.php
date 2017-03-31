<?php
namespace App\Controller;

use Cake\Core\App;
use App\Controller\AppController;
use Cake\Event\Event;

use SimpleXLSX\SimpleXLSX;

require_once(ROOT .DS. 'Vendor' . DS . 'SimpleXLSX' . DS . 'SimpleXLSX.php');

//App::uses('Vendor', 'Excel/PHPExcel.php');
//require_once(ROOT . DS . "vendor" . DS .  "Excel\PHPExcel.php") ;
/**
 * Employees Controller
 *
 * @property \App\Model\Table\EmployeesTable $Employees
 */
class EmployeesController extends AppController
{
	//public $uses = array("Employees","Qualifications");
	/*public function initialize()
	{
		parent::initialize();
		$this->loadComponent('Auth');
	}*/	
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
			array_push($myRights,'importAttendance');
			array_push($myRights,'exportAttendenceSheet');
			array_push($myRights,'getAttendanceData');
			if(in_array($this->request->action,$myRights))
				return true;
			else
				$this->redirect(['controller'=> 'Pages','action'=>'denied']);
		}

	}	
	public function addexp()
	{
		if ($this->request->is('post')) 
		{
			$data=$this->request->data['mydata'];
			$data = urldecode($data);
			$rows= (array) json_decode($data);
			//$myQualData=(array) 
			$cnt=0;
			$this->loadModel("Experiences");
			//
			foreach($rows['data'] as $row)
			{
				$empId=$row->empid;
				break;
			}
			$this->Experiences->deleteAll(['employee_id'=>$empId]);	
			//
			foreach($rows['data'] as $row)
			{
				$this->request->data['employee_id'] = $row->empid;
				$this->request->data['company_name'] = $row->name;
				$this->request->data['designation'] = $row->designation;
				$this->request->data['start_date'] = $row->startdate;
				$this->request->data['end_date'] = $row->enddate;
				$this->request->data['duties'] = $row->duties;
				$this->request->data['contact_number'] = $row->contact;
				$this->request->data['is_active'] = 1;
				$experience = $this->Experiences->newEntity();
				$experience = $this->Experiences->patchEntity($experience, $this->request->data);
				$this->Experiences->save($experience);			
			}
		}
		exit;
	}
	public function addqual()
	{
		if ($this->request->is('post')) 
		{
			$data=$this->request->data['mydata'];
			$data = urldecode($data);
			$rows= (array) json_decode($data);
			//$myQualData=(array) 
			$cnt=0;
			$this->loadModel("Qualifications");
			//
			foreach($rows['data'] as $row)
			{
				$empId=$row->empid;
				break;
			}
			$this->Qualifications->deleteAll(['employee_id'=>$empId]);	
			//
			foreach($rows['data'] as $row)
			{
				$this->request->data['employee_id'] = $row->empid;
				$this->request->data['degree'] = $row->degree;
				$this->request->data['duration'] = $row->duration;
				$this->request->data['institute'] = $row->institute;
				$this->request->data['gpa'] = $row->gpa;
				$this->request->data['is_active'] = 1;
				$qualification = $this->Qualifications->newEntity();
				$qualification = $this->Qualifications->patchEntity($qualification, $this->request->data);
				$this->Qualifications->save($qualification);			
			}
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
            'contain' => ['Stations', 'Departments', 'Companies', 'Banks', 'Designations', 'Payscales']
        ];
        $employees = $this->paginate($this->Employees);

        $this->set(compact('employees'));
        $this->set('_serialize', ['employees']);
    }

    /**
     * View method
     *
     * @param string|null $id Employee id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $employee = $this->Employees->get($id, [
            'contain' => ['Stations', 'Departments', 'Companies', 'Banks', 'Designations', 'Payscales', 'SalaryMasters']
        ]);

        $this->set('employee', $employee);
        $this->set('_serialize', ['employee']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $employee = $this->Employees->newEntity();
        if ($this->request->is('post')) {
			if(isset($this->request->data['date_of_brith']))
				$this->request->data['date_of_brith']= date("Y-m-d", strtotime($this->request->data['date_of_brith']));
			$this->request->data['user_id']= $this->Auth->user("id");
            $employee = $this->Employees->patchEntity($employee, $this->request->data);
			//echo "<pre>";
			//print_r($employee);exit;
            if ($res=$this->Employees->save($employee)) 
			{
				$eId=$res->id;
                $this->Flash->success(__('The employee has been saved.'));
                return $this->redirect(['action' => 'edit',$eId]);
            } else {
                $this->Flash->error(__('The employee could not be saved. Please, try again.'));
            }
        }
        $stations = $this->Employees->Stations->find('list', ['limit' => 200]);
        $departments = $this->Employees->Departments->find('list', ['limit' => 200]);
        $companies = $this->Employees->Companies->find('list', ['limit' => 200]);
        $banks = $this->Employees->Banks->find('list', ['limit' => 200]);
        $designations = $this->Employees->Designations->find('list', ['limit' => 200]);
        $payscales = $this->Employees->Payscales->find('list', ['limit' => 200]);
        $this->set(compact('employee', 'stations', 'departments', 'companies', 'banks', 'designations', 'payscales'));
        $this->set('_serialize', ['employee']);
    }


    /**
     * Edit method
     *
     * @param string|null $id Employee id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
	public function updReady($id)
	{
		$this->loadModel('Tblaction');
		$tblaction = $this->Tblaction->newEntity();
		$data['atable']="employees";
		$data['user_id']=$this->Auth->user("id");
		$data['pid']=$id;
		//printr($data);exit;
		$tblaction = $this->Tblaction->patchEntity($tblaction, $data);
		if($this->Tblaction->save($tblaction))
			return true;
		else
			return false;
	}
	public function updDestroy($id)
	{
		$this->loadModel('Tblaction');
		$this->Tblaction->delete(['atable'=>'employees','pid'=>$id]);
	}
    public function edit($id = null)
    {
        $employee = $this->Employees->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) 
		{
			$status=$this->updReady($id);
			if(isset($this->request->data['date_of_brith']))
				$this->request->data['date_of_brith']= date("Y-m-d", strtotime($this->request->data['date_of_brith']));
			$this->request->data['modified_by']= $this->Auth->user("id");			
            $employee = $this->Employees->patchEntity($employee, $this->request->data);
			//echo "<pre>";
			
			//print_r($this->request->data);
			//print_r($employee);exit;
            if ($this->Employees->save($employee)) {
				$this->updDestroy($id);
                $this->Flash->success(__('The employee has been saved.'));
                return $this->redirect(['action' => 'edit',$id]);
            } else {
                $this->Flash->error(__('The employee could not be saved. Please, try again.'));
            }
        }
        $stations = $this->Employees->Stations->find('list', ['limit' => 200]);
        $departments = $this->Employees->Departments->find('list', ['limit' => 200]);
        $companies = $this->Employees->Companies->find('list', ['limit' => 200]);
        $banks = $this->Employees->Banks->find('list', ['limit' => 200]);
        $designations = $this->Employees->Designations->find('list', ['limit' => 200]);
        $payscales = $this->Employees->Payscales->find('list', ['limit' => 200]);
		$qryExp = $this->Employees->Experiences->find('all',['conditions' => ['employee_id'=>$id]]);
		$qryQual = $this->Employees->Qualifications->find('all',['conditions' => ['employee_id'=>$id]]);
		//$data = $query->toArray();
		///////// ------------------------------
		$birthDate= (array) $employee['date_of_brith'];
		$employee['date_of_brith'] = date("d/m/Y",	strtotime(str_replace("-","/",  $birthDate['date'])));
		
		//$birthDate= (array) $employee['date_of_brith'];
		//$employee['date_of_brith'] = date("d/m/Y",	strtotime(str_replace("-","/",  $birthDate['date'])));
		
        $this->set(compact('employee', 'stations', 'departments', 'companies', 'banks', 'designations', 'payscales','qryQual','qryExp'));
        $this->set('_serialize', ['employee']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Employee id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $employee = $this->Employees->get($id);
        if ($this->Employees->delete($employee)) {
            $this->Flash->success(__('The employee has been deleted.'));
        } else {
            $this->Flash->error(__('The employee could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
	public function eobi()
	{
        set_time_limit(0);
		$employees=array();
		if(isset($this->request->data['station_id']))
		{
			$filter=array();
			$stationId =$this->request->data['station_id'];
			if($stationId <> "")
				$filter['station_id']= $stationId;
			$departmentId = $this->request->data['department_id'];//'station_id'=>$stationId,'department_id'=>$departmentId
			if($departmentId <> "")
				$filter['department_id']= $departmentId	;
			$isActive=$this->request->data['is_active'];
			$filter['Employees.is_active']=$isActive;
			$employees = $this->Employees->find('all',['conditions'=>array($filter),
			'contain'=>['Stations','Departments','Designations','Payscales']]);
		}		
		$status=["1"=>"Active","0"=>"In-Active"];
        $stations = $this->Employees->Stations->find('list', ['limit' => 200]);
        $departments = $this->Employees->Departments->find('list', ['limit' => 200]);
		$this->set(compact('stations', 'departments','employees','status'));	
	}
	public function empList()
	{
        set_time_limit(0);
		$employees=array();
		if(isset($this->request->data['station_id']))
		{
			$filter=array();
			$stationId =$this->request->data['station_id'];
			if($stationId <> "")
				$filter['station_id']= $stationId;
			$departmentId = $this->request->data['department_id'];//'station_id'=>$stationId,'department_id'=>$departmentId
			if($departmentId <> "")
				$filter['department_id']= $departmentId	;
			$isActive=$this->request->data['is_active'];
			$filter['Employees.is_active']=$isActive;
			$employees = $this->Employees->find('all',['conditions'=>array($filter),
			'contain'=>['Stations','Departments','Designations','Payscales']]);
		}		
		$status=["1"=>"Active","0"=>"In-Active"];
        $stations = $this->Employees->Stations->find('list', ['limit' => 200]);
        $departments = $this->Employees->Departments->find('list', ['limit' => 200]);
		$this->set(compact('stations', 'departments','employees','status'));	
	}
	public function getAttendanceData()
	{
		$xlsx = array();
		if ($this->request->is('post') || $this->request->is('put')) 
        {		
			$file_name=time()."_".str_replace(" ","_",$this->request->data['upload_file']['name']);
			move_uploaded_file($this->request->data['upload_file']['tmp_name'],APP."../webroot/files/data/".$file_name);
			$fileName = APP."../webroot/files/data/".$file_name;
			//
			//$fileName=APP."../webroot/files/data/test.xlsx";
			//echo $fileName;
			
			$xlsx = new SimpleXLSX($fileName);
			return $xlsx->rows();
			
		}
		return $xlsx;
	
	}
	public function importAttendance()
	{
        set_time_limit(0);
        $str="";
		//printr($this->request->data);exit;
		$employee = array();
		$pmonth="";
		$employees=array();
        if ($this->request->is('post') || $this->request->is('put')) 
        { 
            //debug($this->request->data);
			$this->loadModel('Attendances');
            if(isset($this->request->data['upload_file']['name']) && $this->request->data['upload_file']['name']!='')
            {
				$attenData=$this->getAttendanceData($this->request->data);
				//printr($attenData);exit;
				$cnt=0;
				if(count($attenData)<2)
				{
					$str="Not enough data to import";
				}
				else 
				{    $cnt=0; 
					unset($this->request->data['upload_file']);
					foreach($attenData as $dataAr)
					{
						if($cnt==0) 
						{ 	$cnt++;
							continue;
						}
						$this->request->data['employee_id']=$dataAr[0];
						$this->request->data['pmonth'] =$dataAr[4];
						$days=$dataAr[5];
						$otDays = $dataAr[6]; // Over Time Days
						$otHrs = $dataAr[7];  // over time Hours
						$attendances = $this->Attendances->newEntity();
						$this->request->data['days'] =$days;
						if(trim($otDays) != '' && trim($otDays)!='0')
							$this->request->data['overtime_days'] =$otDays;
						if(trim($otHrs) != '' && trim($otHrs)!='0')
							$this->request->data['overtime_hours'] =$otHrs;
						
						$attendances = $this->Attendances->patchEntity($attendances, $this->request->data);
						$this->Attendances->save($attendances);	
						//printr($this->request->data);exit;
					}
				}
			}
			if(isset($this->request->data['save_data']))
			{
				foreach($this->request->data['employee_id'] as $eId)
				{
					
					$attendance = $this->Attendances->newEntity();
					
					//
					$days= $this->request->data['days_'.$eId];
					$otdays= $this->request->data['ot_days_'.$eId];
					$othours= $this->request->data['ot_hours_'.$eId];
					$this->request->data['employee_id'] =$eId;
					$this->request->data['days'] =$days;
					$this->request->data['overtime_days'] =$otdays;
					$this->request->data['overtime_hours'] =$othours;
					$attendance = $this->Attendances->patchEntity($attendance, $this->request->data);
					$this->Attendances->save($attendance);
				}
			}
			if(isset($this->request->data['station_id']))
			{
				$stationId =$this->request->data['station_id'];
				$departmentId = $this->request->data['department_id'];
				$pmonth= $this->request->data['pmonth'];
				$employees = $this->Employees->find('all',['conditions'=>['station_id'=>$stationId,'department_id'=>$departmentId],
				'contain'=>['Designations','Attendances'=>['conditions'=>['pmonth'=>$pmonth]]]]);
				
			}
		}
		$months=[date("Y-m")=>date("Y-m"),date("Y-m",strtotime("-1 month"))=>date("Y-m",strtotime("-1 month")),date("Y-m",strtotime("-2 month"))=>date("Y-m",strtotime("-2 month"))];
        $stations = $this->Employees->Stations->find('list', ['limit' => 200]);
        $departments = $this->Employees->Departments->find('list', ['limit' => 200]);		
		$this->set(compact('stations', 'departments','employees','months','pmonth'));
	}
	function ExportAttendenceSheet()
	{
        if ($this->request->is('get')) 
        { 
			//printr($this->request->params['pass']);exit;
			if(isset($this->request->params))
			{
				$stationId =$this->request->params['pass'][0];
				$departmentId =$this->request->params['pass'][1];
				$employees = $this->Employees->find('all',['conditions'=>['station_id'=>$stationId,'department_id'=>$departmentId],
				'contain'=>['Designations']]);
				$pmonth= $this->request->params['pass'][2];
				
			}
		}
		//printr($employees);exit;
		$this->set(compact('employees','pmonth'));
		$this->viewBuilder()->layout('forexcel');
		
	}
}
