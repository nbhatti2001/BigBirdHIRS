<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $qualification->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $qualification->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Qualifications'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="qualifications form large-9 medium-8 columns content">
    <?= $this->Form->create($qualification) ?>
    <fieldset>
        <legend><?= __('Edit Qualification') ?></legend>
        <?php
            echo $this->Form->input('employee_id', ['options' => $employees]);
            echo $this->Form->input('degree');
            echo $this->Form->input('duration');
            echo $this->Form->input('institute');
            echo $this->Form->input('gpa');
            echo $this->Form->input('is_active');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
