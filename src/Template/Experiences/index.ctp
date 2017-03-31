<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Experience'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="experiences index large-9 medium-8 columns content">
    <h3><?= __('Experiences') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('employee_id') ?></th>
                <th><?= $this->Paginator->sort('company_name') ?></th>
                <th><?= $this->Paginator->sort('designation') ?></th>
                <th><?= $this->Paginator->sort('start_date') ?></th>
                <th><?= $this->Paginator->sort('end_date') ?></th>
                <th><?= $this->Paginator->sort('duties') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($experiences as $experience): ?>
            <tr>
                <td><?= $this->Number->format($experience->id) ?></td>
                <td><?= $experience->has('employee') ? $this->Html->link($experience->employee->id, ['controller' => 'Employees', 'action' => 'view', $experience->employee->id]) : '' ?></td>
                <td><?= h($experience->company_name) ?></td>
                <td><?= h($experience->designation) ?></td>
                <td><?= h($experience->start_date) ?></td>
                <td><?= h($experience->end_date) ?></td>
                <td><?= h($experience->duties) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $experience->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $experience->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $experience->id], ['confirm' => __('Are you sure you want to delete # {0}?', $experience->id)]) ?>
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
