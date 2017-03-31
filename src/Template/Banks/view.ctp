<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Bank'), ['action' => 'edit', $bank->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Bank'), ['action' => 'delete', $bank->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bank->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Banks'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bank'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Salary Masters'), ['controller' => 'SalaryMasters', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Salary Master'), ['controller' => 'SalaryMasters', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="banks view large-9 medium-8 columns content">
    <h3><?= h($bank->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Bank Name') ?></th>
            <td><?= h($bank->bank_name) ?></td>
        </tr>
        <tr>
            <th><?= __('Branch Name') ?></th>
            <td><?= h($bank->branch_name) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($bank->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Company Id') ?></th>
            <td><?= $this->Number->format($bank->company_id) ?></td>
        </tr>
        <tr>
            <th><?= __('User Id') ?></th>
            <td><?= $this->Number->format($bank->user_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified By') ?></th>
            <td><?= $this->Number->format($bank->modified_by) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($bank->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($bank->modified) ?></td>
        </tr>
        <tr>
            <th><?= __('Is Active') ?></th>
            <td><?= $bank->is_active ? __('Yes') : __('No'); ?></td>
         </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Employees') ?></h4>
        <?php if (!empty($bank->employees)): ?>
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
            <?php foreach ($bank->employees as $employees): ?>
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
        <h4><?= __('Related Salary Masters') ?></h4>
        <?php if (!empty($bank->salary_masters)): ?>
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
            <?php foreach ($bank->salary_masters as $salaryMasters): ?>
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
</div>
