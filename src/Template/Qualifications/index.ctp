<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Qualification'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="qualifications index large-9 medium-8 columns content">
    <h3><?= __('Qualifications') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('employee_id') ?></th>
                <th><?= $this->Paginator->sort('degree') ?></th>
                <th><?= $this->Paginator->sort('duration') ?></th>
                <th><?= $this->Paginator->sort('institute') ?></th>
                <th><?= $this->Paginator->sort('gpa') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($qualifications as $qualification): ?>
            <tr>
                <td><?= $this->Number->format($qualification->id) ?></td>
                <td><?= $qualification->has('employee') ? $this->Html->link($qualification->employee->id, ['controller' => 'Employees', 'action' => 'view', $qualification->employee->id]) : '' ?></td>
                <td><?= h($qualification->degree) ?></td>
                <td><?= h($qualification->duration) ?></td>
                <td><?= h($qualification->institute) ?></td>
                <td><?= h($qualification->gpa) ?></td>
                <td><?= h($qualification->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $qualification->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $qualification->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $qualification->id], ['confirm' => __('Are you sure you want to delete # {0}?', $qualification->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
