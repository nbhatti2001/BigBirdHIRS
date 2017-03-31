<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Experience'), ['action' => 'edit', $experience->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Experience'), ['action' => 'delete', $experience->id], ['confirm' => __('Are you sure you want to delete # {0}?', $experience->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Experiences'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Experience'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="experiences view large-9 medium-8 columns content">
    <h3><?= h($experience->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Employee') ?></th>
            <td><?= $experience->has('employee') ? $this->Html->link($experience->employee->id, ['controller' => 'Employees', 'action' => 'view', $experience->employee->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Company Name') ?></th>
            <td><?= h($experience->company_name) ?></td>
        </tr>
        <tr>
            <th><?= __('Designation') ?></th>
            <td><?= h($experience->designation) ?></td>
        </tr>
        <tr>
            <th><?= __('Start Date') ?></th>
            <td><?= h($experience->start_date) ?></td>
        </tr>
        <tr>
            <th><?= __('End Date') ?></th>
            <td><?= h($experience->end_date) ?></td>
        </tr>
        <tr>
            <th><?= __('Duties') ?></th>
            <td><?= h($experience->duties) ?></td>
        </tr>
        <tr>
            <th><?= __('Contact Number') ?></th>
            <td><?= h($experience->contact_number) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($experience->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($experience->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($experience->modified) ?></td>
        </tr>
        <tr>
            <th><?= __('Is Active') ?></th>
            <td><?= $experience->is_active ? __('Yes') : __('No'); ?></td>
         </tr>
    </table>
</div>
