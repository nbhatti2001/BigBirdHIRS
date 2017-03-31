<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Designations'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Salary Masters'), ['controller' => 'SalaryMasters', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Salary Master'), ['controller' => 'SalaryMasters', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="designations form large-9 medium-8 columns content">
    <?= $this->Form->create($designation) ?>
    <fieldset>
        <legend><?= __('Add Designation') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('payscale');
            echo $this->Form->input('company_id');
            echo $this->Form->input('user_id');
            echo $this->Form->input('modified_by');
            echo $this->Form->input('is_active');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
