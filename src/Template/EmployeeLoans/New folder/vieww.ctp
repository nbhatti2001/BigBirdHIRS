<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Department'), ['action' => 'edit', $department->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Department'), ['action' => 'delete', $department->id], ['confirm' => __('Are you sure you want to delete # {0}?', $department->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Departments'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Department'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users1'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Users1'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Employees Bkp'), ['controller' => 'EmployeesBkp', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employees Bkp'), ['controller' => 'EmployeesBkp', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Salary Masters'), ['controller' => 'SalaryMasters', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Salary Master'), ['controller' => 'SalaryMasters', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users Bkp'), ['controller' => 'UsersBkp', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Users Bkp'), ['controller' => 'UsersBkp', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="departments view large-9 medium-8 columns content">
    <h3><?= h($department->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($department->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Company') ?></th>
            <td><?= $department->has('company') ? $this->Html->link($department->company->name, ['controller' => 'Companies', 'action' => 'view', $department->company->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Users1') ?></th>
            <td><?= $department->has('users1') ? $this->Html->link($department->users1->id, ['controller' => 'Users', 'action' => 'view', $department->users1->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($department->id) ?></td>
        </tr>
        <tr>
            <th><?= __('User Id') ?></th>
            <td><?= $this->Number->format($department->user_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($department->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($department->modified) ?></td>
        </tr>
        <tr>
            <th><?= __('Is Active') ?></th>
            <td><?= $department->is_active ? __('Yes') : __('No'); ?></td>
         </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Users') ?></h4>
        <?php if (!empty($department->users)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Username') ?></th>
                <th><?= __('Full Name') ?></th>
                <th><?= __('Email') ?></th>
                <th><?= __('Password') ?></th>
                <th><?= __('Department Id') ?></th>
                <th><?= __('Station Id') ?></th>
                <th><?= __('Company Id') ?></th>
                <th><?= __('User Role Id') ?></th>
                <th><?= __('Photo') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Is Active') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th><?= __('Modified By') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($department->users as $users): ?>
            <tr>
                <td><?= h($users->id) ?></td>
                <td><?= h($users->username) ?></td>
                <td><?= h($users->full_name) ?></td>
                <td><?= h($users->email) ?></td>
                <td><?= h($users->password) ?></td>
                <td><?= h($users->department_id) ?></td>
                <td><?= h($users->station_id) ?></td>
                <td><?= h($users->company_id) ?></td>
                <td><?= h($users->user_role_id) ?></td>
                <td><?= h($users->photo) ?></td>
                <td><?= h($users->user_id) ?></td>
                <td><?= h($users->is_active) ?></td>
                <td><?= h($users->created) ?></td>
                <td><?= h($users->modified) ?></td>
                <td><?= h($users->modified_by) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Employees') ?></h4>
        <?php if (!empty($department->employees)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Employee No') ?></th>
                <th><?= __('Employee Name') ?></th>
                <th><?= __('Father Name') ?></th>
                <th><?= __('Gender') ?></th>
                <th><?= __('Station Id') ?></th>
                <th><?= __('Department Id') ?></th>
                <th><?= __('Company Id') ?></th>
                <th><?= __('Temparary Address') ?></th>
                <th><?= __('Permanent Address') ?></th>
                <th><?= __('City') ?></th>
                <th><?= __('Contact Name') ?></th>
                <th><?= __('Contact Number') ?></th>
                <th><?= __('Residence Number') ?></th>
                <th><?= __('Mobile Number') ?></th>
                <th><?= __('Emergency Contact Number') ?></th>
                <th><?= __('Spouse Name') ?></th>
                <th><?= __('Male Childs') ?></th>
                <th><?= __('Female Childs') ?></th>
                <th><?= __('Others') ?></th>
                <th><?= __('Cnic') ?></th>
                <th><?= __('Id Mark') ?></th>
                <th><?= __('Date Of Brith') ?></th>
                <th><?= __('Appointment Date') ?></th>
                <th><?= __('Last Permanent Date') ?></th>
                <th><?= __('Bank Account') ?></th>
                <th><?= __('Bank Id') ?></th>
                <th><?= __('Eobi No') ?></th>
                <th><?= __('Tax No') ?></th>
                <th><?= __('Tax Deduction') ?></th>
                <th><?= __('No Of Increment') ?></th>
                <th><?= __('Advance Deduction') ?></th>
                <th><?= __('Social Security No') ?></th>
                <th><?= __('Designation Id') ?></th>
                <th><?= __('Payscale Id') ?></th>
                <th><?= __('Anual Increment') ?></th>
                <th><?= __('New Increment') ?></th>
                <th><?= __('Basic Pay') ?></th>
                <th><?= __('Dearness Allowance') ?></th>
                <th><?= __('Mess Allowance') ?></th>
                <th><?= __('Gpa Allowance') ?></th>
                <th><?= __('Other Allowance') ?></th>
                <th><?= __('Leaving Date') ?></th>
                <th><?= __('Leaving Reason') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th><?= __('Modified By') ?></th>
                <th><?= __('Is Active') ?></th>
                <th><?= __('User Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($department->employees as $employees): ?>
            <tr>
                <td><?= h($employees->id) ?></td>
                <td><?= h($employees->employee_no) ?></td>
                <td><?= h($employees->employee_name) ?></td>
                <td><?= h($employees->father_name) ?></td>
                <td><?= h($employees->gender) ?></td>
                <td><?= h($employees->station_id) ?></td>
                <td><?= h($employees->department_id) ?></td>
                <td><?= h($employees->company_id) ?></td>
                <td><?= h($employees->temparary_address) ?></td>
                <td><?= h($employees->permanent_address) ?></td>
                <td><?= h($employees->city) ?></td>
                <td><?= h($employees->contact_name) ?></td>
                <td><?= h($employees->contact_number) ?></td>
                <td><?= h($employees->residence_number) ?></td>
                <td><?= h($employees->mobile_number) ?></td>
                <td><?= h($employees->emergency_contact_number) ?></td>
                <td><?= h($employees->spouse_name) ?></td>
                <td><?= h($employees->male_childs) ?></td>
                <td><?= h($employees->female_childs) ?></td>
                <td><?= h($employees->others) ?></td>
                <td><?= h($employees->cnic) ?></td>
                <td><?= h($employees->id_mark) ?></td>
                <td><?= h($employees->date_of_brith) ?></td>
                <td><?= h($employees->appointment_date) ?></td>
                <td><?= h($employees->last_permanent_date) ?></td>
                <td><?= h($employees->bank_account) ?></td>
                <td><?= h($employees->bank_id) ?></td>
                <td><?= h($employees->eobi_no) ?></td>
                <td><?= h($employees->tax_no) ?></td>
                <td><?= h($employees->Tax_deduction) ?></td>
                <td><?= h($employees->no_of_increment) ?></td>
                <td><?= h($employees->advance_deduction) ?></td>
                <td><?= h($employees->social_security_no) ?></td>
                <td><?= h($employees->designation_id) ?></td>
                <td><?= h($employees->payscale_id) ?></td>
                <td><?= h($employees->anual_increment) ?></td>
                <td><?= h($employees->new_increment) ?></td>
                <td><?= h($employees->basic_pay) ?></td>
                <td><?= h($employees->dearness_allowance) ?></td>
                <td><?= h($employees->mess_allowance) ?></td>
                <td><?= h($employees->gpa_allowance) ?></td>
                <td><?= h($employees->other_allowance) ?></td>
                <td><?= h($employees->leaving_date) ?></td>
                <td><?= h($employees->leaving_reason) ?></td>
                <td><?= h($employees->created) ?></td>
                <td><?= h($employees->modified) ?></td>
                <td><?= h($employees->modified_by) ?></td>
                <td><?= h($employees->is_active) ?></td>
                <td><?= h($employees->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Employees', 'action' => 'view', $employees->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Employees', 'action' => 'edit', $employees->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Employees', 'action' => 'delete', $employees->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employees->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Employees Bkp') ?></h4>
        <?php if (!empty($department->employees_bkp)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Employee No') ?></th>
                <th><?= __('Employee Name') ?></th>
                <th><?= __('Father Name') ?></th>
                <th><?= __('Gender') ?></th>
                <th><?= __('Station Id') ?></th>
                <th><?= __('Department Id') ?></th>
                <th><?= __('Company Id') ?></th>
                <th><?= __('Temparary Address') ?></th>
                <th><?= __('Permanent Address') ?></th>
                <th><?= __('City') ?></th>
                <th><?= __('Contact Name') ?></th>
                <th><?= __('Contact Number') ?></th>
                <th><?= __('Residence Number') ?></th>
                <th><?= __('Mobile Number') ?></th>
                <th><?= __('Emergency Contact Number') ?></th>
                <th><?= __('Spouse Name') ?></th>
                <th><?= __('Male Childs') ?></th>
                <th><?= __('Female Childs') ?></th>
                <th><?= __('Others') ?></th>
                <th><?= __('Cnic') ?></th>
                <th><?= __('Id Mark') ?></th>
                <th><?= __('Date Of Brith') ?></th>
                <th><?= __('Appointment Date') ?></th>
                <th><?= __('Last Permanent Date') ?></th>
                <th><?= __('Bank Account') ?></th>
                <th><?= __('Bank Id') ?></th>
                <th><?= __('Eobi No') ?></th>
                <th><?= __('Tax No') ?></th>
                <th><?= __('Tax Deduction') ?></th>
                <th><?= __('No Of Increment') ?></th>
                <th><?= __('Advance Deduction') ?></th>
                <th><?= __('Social Security No') ?></th>
                <th><?= __('Designation Id') ?></th>
                <th><?= __('Payscale Id') ?></th>
                <th><?= __('Anual Increment') ?></th>
                <th><?= __('New Increment') ?></th>
                <th><?= __('Basic Pay') ?></th>
                <th><?= __('Dearness Allowance') ?></th>
                <th><?= __('Mess Allowance') ?></th>
                <th><?= __('Gpa Allowance') ?></th>
                <th><?= __('Other Allowance') ?></th>
                <th><?= __('Leaving Date') ?></th>
                <th><?= __('Leaving Reason') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th><?= __('Modified By') ?></th>
                <th><?= __('Is Active') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Action') ?></th>
                <th><?= __('Revision') ?></th>
                <th><?= __('Action Date') ?></th>
                <th><?= __('Action User Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($department->employees_bkp as $employeesBkp): ?>
            <tr>
                <td><?= h($employeesBkp->id) ?></td>
                <td><?= h($employeesBkp->employee_no) ?></td>
                <td><?= h($employeesBkp->employee_name) ?></td>
                <td><?= h($employeesBkp->father_name) ?></td>
                <td><?= h($employeesBkp->gender) ?></td>
                <td><?= h($employeesBkp->station_id) ?></td>
                <td><?= h($employeesBkp->department_id) ?></td>
                <td><?= h($employeesBkp->company_id) ?></td>
                <td><?= h($employeesBkp->temparary_address) ?></td>
                <td><?= h($employeesBkp->permanent_address) ?></td>
                <td><?= h($employeesBkp->city) ?></td>
                <td><?= h($employeesBkp->contact_name) ?></td>
                <td><?= h($employeesBkp->contact_number) ?></td>
                <td><?= h($employeesBkp->residence_number) ?></td>
                <td><?= h($employeesBkp->mobile_number) ?></td>
                <td><?= h($employeesBkp->emergency_contact_number) ?></td>
                <td><?= h($employeesBkp->spouse_name) ?></td>
                <td><?= h($employeesBkp->male_childs) ?></td>
                <td><?= h($employeesBkp->female_childs) ?></td>
                <td><?= h($employeesBkp->others) ?></td>
                <td><?= h($employeesBkp->cnic) ?></td>
                <td><?= h($employeesBkp->id_mark) ?></td>
                <td><?= h($employeesBkp->date_of_brith) ?></td>
                <td><?= h($employeesBkp->appointment_date) ?></td>
                <td><?= h($employeesBkp->last_permanent_date) ?></td>
                <td><?= h($employeesBkp->bank_account) ?></td>
                <td><?= h($employeesBkp->bank_id) ?></td>
                <td><?= h($employeesBkp->eobi_no) ?></td>
                <td><?= h($employeesBkp->tax_no) ?></td>
                <td><?= h($employeesBkp->Tax_deduction) ?></td>
                <td><?= h($employeesBkp->no_of_increment) ?></td>
                <td><?= h($employeesBkp->advance_deduction) ?></td>
                <td><?= h($employeesBkp->social_security_no) ?></td>
                <td><?= h($employeesBkp->designation_id) ?></td>
                <td><?= h($employeesBkp->payscale_id) ?></td>
                <td><?= h($employeesBkp->anual_increment) ?></td>
                <td><?= h($employeesBkp->new_increment) ?></td>
                <td><?= h($employeesBkp->basic_pay) ?></td>
                <td><?= h($employeesBkp->dearness_allowance) ?></td>
                <td><?= h($employeesBkp->mess_allowance) ?></td>
                <td><?= h($employeesBkp->gpa_allowance) ?></td>
                <td><?= h($employeesBkp->other_allowance) ?></td>
                <td><?= h($employeesBkp->leaving_date) ?></td>
                <td><?= h($employeesBkp->leaving_reason) ?></td>
                <td><?= h($employeesBkp->created) ?></td>
                <td><?= h($employeesBkp->modified) ?></td>
                <td><?= h($employeesBkp->modified_by) ?></td>
                <td><?= h($employeesBkp->is_active) ?></td>
                <td><?= h($employeesBkp->user_id) ?></td>
                <td><?= h($employeesBkp->action) ?></td>
                <td><?= h($employeesBkp->revision) ?></td>
                <td><?= h($employeesBkp->action_date) ?></td>
                <td><?= h($employeesBkp->action_user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'EmployeesBkp', 'action' => 'view', $employeesBkp->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'EmployeesBkp', 'action' => 'edit', $employeesBkp->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'EmployeesBkp', 'action' => 'delete', $employeesBkp->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employeesBkp->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Salary Masters') ?></h4>
        <?php if (!empty($department->salary_masters)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Employee Id') ?></th>
                <th><?= __('Station Id') ?></th>
                <th><?= __('Department Id') ?></th>
                <th><?= __('Designation Id') ?></th>
                <th><?= __('Peno') ?></th>
                <th><?= __('Salary Month') ?></th>
                <th><?= __('Working Days') ?></th>
                <th><?= __('Actual Basic') ?></th>
                <th><?= __('Basic Pay') ?></th>
                <th><?= __('House Rent Allowance') ?></th>
                <th><?= __('Medical Allowance') ?></th>
                <th><?= __('Over Time Days') ?></th>
                <th><?= __('Over Time Days Amount') ?></th>
                <th><?= __('Over Time Hours') ?></th>
                <th><?= __('Over Time Hours Amount') ?></th>
                <th><?= __('Over Time Amount') ?></th>
                <th><?= __('Gross Salary') ?></th>
                <th><?= __('Tax Deduction') ?></th>
                <th><?= __('Eobi Deduction') ?></th>
                <th><?= __('Advance Deduction') ?></th>
                <th><?= __('Other Deduction') ?></th>
                <th><?= __('Mess Deduction') ?></th>
                <th><?= __('Net Salary') ?></th>
                <th><?= __('Bank Id') ?></th>
                <th><?= __('Is Bank') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th><?= __('Modified By') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($department->salary_masters as $salaryMasters): ?>
            <tr>
                <td><?= h($salaryMasters->id) ?></td>
                <td><?= h($salaryMasters->employee_id) ?></td>
                <td><?= h($salaryMasters->station_id) ?></td>
                <td><?= h($salaryMasters->department_id) ?></td>
                <td><?= h($salaryMasters->designation_id) ?></td>
                <td><?= h($salaryMasters->peno) ?></td>
                <td><?= h($salaryMasters->salary_month) ?></td>
                <td><?= h($salaryMasters->working_days) ?></td>
                <td><?= h($salaryMasters->actual_basic) ?></td>
                <td><?= h($salaryMasters->basic_pay) ?></td>
                <td><?= h($salaryMasters->house_rent_allowance) ?></td>
                <td><?= h($salaryMasters->medical_allowance) ?></td>
                <td><?= h($salaryMasters->over_time_days) ?></td>
                <td><?= h($salaryMasters->over_time_days_amount) ?></td>
                <td><?= h($salaryMasters->over_time_hours) ?></td>
                <td><?= h($salaryMasters->over_time_hours_amount) ?></td>
                <td><?= h($salaryMasters->over_time_amount) ?></td>
                <td><?= h($salaryMasters->gross_salary) ?></td>
                <td><?= h($salaryMasters->tax_deduction) ?></td>
                <td><?= h($salaryMasters->eobi_deduction) ?></td>
                <td><?= h($salaryMasters->advance_deduction) ?></td>
                <td><?= h($salaryMasters->other_deduction) ?></td>
                <td><?= h($salaryMasters->mess_deduction) ?></td>
                <td><?= h($salaryMasters->net_salary) ?></td>
                <td><?= h($salaryMasters->bank_id) ?></td>
                <td><?= h($salaryMasters->is_bank) ?></td>
                <td><?= h($salaryMasters->user_id) ?></td>
                <td><?= h($salaryMasters->created) ?></td>
                <td><?= h($salaryMasters->modified) ?></td>
                <td><?= h($salaryMasters->modified_by) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'SalaryMasters', 'action' => 'view', $salaryMasters->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'SalaryMasters', 'action' => 'edit', $salaryMasters->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'SalaryMasters', 'action' => 'delete', $salaryMasters->id], ['confirm' => __('Are you sure you want to delete # {0}?', $salaryMasters->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Users Bkp') ?></h4>
        <?php if (!empty($department->users_bkp)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Username') ?></th>
                <th><?= __('Full Name') ?></th>
                <th><?= __('Email') ?></th>
                <th><?= __('Password') ?></th>
                <th><?= __('Department Id') ?></th>
                <th><?= __('Station Id') ?></th>
                <th><?= __('Company Id') ?></th>
                <th><?= __('User Role Id') ?></th>
                <th><?= __('Photo') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Is Active') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th><?= __('Modified By') ?></th>
                <th><?= __('Action') ?></th>
                <th><?= __('Revision') ?></th>
                <th><?= __('Action Date') ?></th>
                <th><?= __('Action User Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($department->users_bkp as $usersBkp): ?>
            <tr>
                <td><?= h($usersBkp->id) ?></td>
                <td><?= h($usersBkp->username) ?></td>
                <td><?= h($usersBkp->full_name) ?></td>
                <td><?= h($usersBkp->email) ?></td>
                <td><?= h($usersBkp->password) ?></td>
                <td><?= h($usersBkp->department_id) ?></td>
                <td><?= h($usersBkp->station_id) ?></td>
                <td><?= h($usersBkp->company_id) ?></td>
                <td><?= h($usersBkp->user_role_id) ?></td>
                <td><?= h($usersBkp->photo) ?></td>
                <td><?= h($usersBkp->user_id) ?></td>
                <td><?= h($usersBkp->is_active) ?></td>
                <td><?= h($usersBkp->created) ?></td>
                <td><?= h($usersBkp->modified) ?></td>
                <td><?= h($usersBkp->modified_by) ?></td>
                <td><?= h($usersBkp->action) ?></td>
                <td><?= h($usersBkp->revision) ?></td>
                <td><?= h($usersBkp->action_date) ?></td>
                <td><?= h($usersBkp->action_user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'UsersBkp', 'action' => 'view', $usersBkp->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'UsersBkp', 'action' => 'edit', $usersBkp->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'UsersBkp', 'action' => 'delete', $usersBkp->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usersBkp->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
