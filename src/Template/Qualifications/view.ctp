<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Qualification'), ['action' => 'edit', $qualification->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Qualification'), ['action' => 'delete', $qualification->id], ['confirm' => __('Are you sure you want to delete # {0}?', $qualification->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Qualifications'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Qualification'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="qualifications view large-9 medium-8 columns content">
    <h3><?= h($qualification->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Employee') ?></th>
            <td><?= $qualification->has('employee') ? $this->Html->link($qualification->employee->id, ['controller' => 'Employees', 'action' => 'view', $qualification->employee->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Degree') ?></th>
            <td><?= h($qualification->degree) ?></td>
        </tr>
        <tr>
            <th><?= __('Duration') ?></th>
            <td><?= h($qualification->duration) ?></td>
        </tr>
        <tr>
            <th><?= __('Institute') ?></th>
            <td><?= h($qualification->institute) ?></td>
        </tr>
        <tr>
            <th><?= __('Gpa') ?></th>
            <td><?= h($qualification->gpa) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($qualification->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($qualification->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($qualification->modified) ?></td>
        </tr>
        <tr>
            <th><?= __('Is Active') ?></th>
            <td><?= $qualification->is_active ? __('Yes') : __('No'); ?></td>
         </tr>
    </table>
</div>
