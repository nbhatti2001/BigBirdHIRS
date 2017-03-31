<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $station->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $station->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Stations'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Managers'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Manager'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Employees Bkp'), ['controller' => 'EmployeesBkp', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employees Bkp'), ['controller' => 'EmployeesBkp', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Salary Masters'), ['controller' => 'SalaryMasters', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Salary Master'), ['controller' => 'SalaryMasters', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users Bkp'), ['controller' => 'UsersBkp', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Users Bkp'), ['controller' => 'UsersBkp', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="stations form large-9 medium-8 columns content">
    <?= $this->Form->create($station) ?>
    <fieldset>
        <legend><?= __('Edit Station') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('manager_id', ['options' => $managers, 'empty' => true]);
            echo $this->Form->input('company_id', ['options' => $companies]);
            echo $this->Form->input('user_id', ['options' => $myUsers, 'empty' => true]);
            echo $this->Form->input('modified_by', ['options' => $modifiedBy, 'empty' => true]);
            echo $this->Form->input('is_active');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
