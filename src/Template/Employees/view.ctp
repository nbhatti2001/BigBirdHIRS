<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Employee'), ['action' => 'edit', $employee->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Employee'), ['action' => 'delete', $employee->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employee->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Employees'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employee'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Stations'), ['controller' => 'Stations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Station'), ['controller' => 'Stations', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Departments'), ['controller' => 'Departments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Department'), ['controller' => 'Departments', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Banks'), ['controller' => 'Banks', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bank'), ['controller' => 'Banks', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Designations'), ['controller' => 'Designations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Designation'), ['controller' => 'Designations', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Payscales'), ['controller' => 'Payscales', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Payscale'), ['controller' => 'Payscales', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Salary Masters'), ['controller' => 'SalaryMasters', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Salary Master'), ['controller' => 'SalaryMasters', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="employees view large-9 medium-8 columns content">
    <h3><?= h($employee->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Employee No') ?></th>
            <td><?= h($employee->employee_no) ?></td>
        </tr>
        <tr>
            <th><?= __('Employee Name') ?></th>
            <td><?= h($employee->employee_name) ?></td>
        </tr>
        <tr>
            <th><?= __('Father Name') ?></th>
            <td><?= h($employee->father_name) ?></td>
        </tr>
        <tr>
            <th><?= __('Station') ?></th>
            <td><?= $employee->has('station') ? $this->Html->link($employee->station->name, ['controller' => 'Stations', 'action' => 'view', $employee->station->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Department') ?></th>
            <td><?= $employee->has('department') ? $this->Html->link($employee->department->name, ['controller' => 'Departments', 'action' => 'view', $employee->department->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Company') ?></th>
            <td><?= $employee->has('company') ? $this->Html->link($employee->company->name, ['controller' => 'Companies', 'action' => 'view', $employee->company->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Temparary Address') ?></th>
            <td><?= h($employee->temparary_address) ?></td>
        </tr>
        <tr>
            <th><?= __('Permanent Address') ?></th>
            <td><?= h($employee->permanent_address) ?></td>
        </tr>
        <tr>
            <th><?= __('City') ?></th>
            <td><?= h($employee->city) ?></td>
        </tr>
        <tr>
            <th><?= __('Contact Number') ?></th>
            <td><?= h($employee->contact_number) ?></td>
        </tr>
        <tr>
            <th><?= __('Mobile Number') ?></th>
            <td><?= h($employee->mobile_number) ?></td>
        </tr>
        <tr>
            <th><?= __('Emergency Contact Number') ?></th>
            <td><?= h($employee->emergency_contact_number) ?></td>
        </tr>
        <tr>
            <th><?= __('Cnic') ?></th>
            <td><?= h($employee->cnic) ?></td>
        </tr>
        <tr>
            <th><?= __('Id Mark') ?></th>
            <td><?= h($employee->id_mark) ?></td>
        </tr>
        <tr>
            <th><?= __('Bank Account') ?></th>
            <td><?= h($employee->bank_account) ?></td>
        </tr>
        <tr>
            <th><?= __('Bank') ?></th>
            <td><?= $employee->has('bank') ? $this->Html->link($employee->bank->id, ['controller' => 'Banks', 'action' => 'view', $employee->bank->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Eobi No') ?></th>
            <td><?= h($employee->eobi_no) ?></td>
        </tr>
        <tr>
            <th><?= __('Tax No') ?></th>
            <td><?= h($employee->tax_no) ?></td>
        </tr>
        <tr>
            <th><?= __('Social Security No') ?></th>
            <td><?= h($employee->social_security_no) ?></td>
        </tr>
        <tr>
            <th><?= __('Designation') ?></th>
            <td><?= $employee->has('designation') ? $this->Html->link($employee->designation->name, ['controller' => 'Designations', 'action' => 'view', $employee->designation->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Payscale') ?></th>
            <td><?= $employee->has('payscale') ? $this->Html->link($employee->payscale->name, ['controller' => 'Payscales', 'action' => 'view', $employee->payscale->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Leaving Reason') ?></th>
            <td><?= h($employee->leaving_reason) ?></td>
        </tr>
        <tr>
            <th><?= __('Attendance Code') ?></th>
            <td><?= h($employee->attendance_code) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($employee->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Depedents') ?></th>
            <td><?= $this->Number->format($employee->depedents) ?></td>
        </tr>
        <tr>
            <th><?= __('Male Childs') ?></th>
            <td><?= $this->Number->format($employee->male_childs) ?></td>
        </tr>
        <tr>
            <th><?= __('Female Childs') ?></th>
            <td><?= $this->Number->format($employee->female_childs) ?></td>
        </tr>
        <tr>
            <th><?= __('Tax Deduction') ?></th>
            <td><?= $this->Number->format($employee->Tax_deduction) ?></td>
        </tr>
        <tr>
            <th><?= __('No Of Increment') ?></th>
            <td><?= $this->Number->format($employee->no_of_increment) ?></td>
        </tr>
        <tr>
            <th><?= __('Advance Deduction') ?></th>
            <td><?= $this->Number->format($employee->advance_deduction) ?></td>
        </tr>
        <tr>
            <th><?= __('Anual Increment') ?></th>
            <td><?= $this->Number->format($employee->anual_increment) ?></td>
        </tr>
        <tr>
            <th><?= __('New Increment') ?></th>
            <td><?= $this->Number->format($employee->new_increment) ?></td>
        </tr>
        <tr>
            <th><?= __('Basic Pay') ?></th>
            <td><?= $this->Number->format($employee->basic_pay) ?></td>
        </tr>
        <tr>
            <th><?= __('Dearness Allowance') ?></th>
            <td><?= $this->Number->format($employee->dearness_allowance) ?></td>
        </tr>
        <tr>
            <th><?= __('Mess Allowance') ?></th>
            <td><?= $this->Number->format($employee->mess_allowance) ?></td>
        </tr>
        <tr>
            <th><?= __('Gpa Allowance') ?></th>
            <td><?= $this->Number->format($employee->gpa_allowance) ?></td>
        </tr>
        <tr>
            <th><?= __('Other Allowance') ?></th>
            <td><?= $this->Number->format($employee->other_allowance) ?></td>
        </tr>
        <tr>
            <th><?= __('Date Of Brith') ?></th>
            <td><?= h($employee->date_of_brith) ?></td>
        </tr>
        <tr>
            <th><?= __('Appointment Date') ?></th>
            <td><?= h($employee->appointment_date) ?></td>
        </tr>
        <tr>
            <th><?= __('Last Permanent Date') ?></th>
            <td><?= h($employee->last_permanent_date) ?></td>
        </tr>
        <tr>
            <th><?= __('Leaving Date') ?></th>
            <td><?= h($employee->leaving_date) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($employee->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($employee->modified) ?></td>
        </tr>
        <tr>
            <th><?= __('Is Active') ?></th>
            <td><?= $employee->is_active ? __('Yes') : __('No'); ?></td>
         </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Salary Masters') ?></h4>
        <?php if (!empty($employee->salary_masters)): ?>
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
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($employee->salary_masters as $salaryMasters): ?>
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
</div>
