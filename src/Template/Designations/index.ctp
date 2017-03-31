<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Designation'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Salary Masters'), ['controller' => 'SalaryMasters', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Salary Master'), ['controller' => 'SalaryMasters', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="designations index large-9 medium-8 columns content">
    <h3><?= __('Designations') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('payscale') ?></th>
                <th><?= $this->Paginator->sort('company_id') ?></th>
                <th><?= $this->Paginator->sort('user_id') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($designations as $designation): ?>
            <tr>
                <td><?= $this->Number->format($designation->id) ?></td>
                <td><?= h($designation->name) ?></td>
                <td><?= h($designation->payscale) ?></td>
                <td><?= $this->Number->format($designation->company_id) ?></td>
                <td><?= $this->Number->format($designation->user_id) ?></td>
                <td><?= h($designation->created) ?></td>
                <td><?= h($designation->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $designation->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $designation->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $designation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $designation->id)]) ?>
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
