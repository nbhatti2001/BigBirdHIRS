<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Groups'), ['controller' => 'Groups', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Group'), ['controller' => 'Groups', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Stations'), ['controller' => 'Stations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Station'), ['controller' => 'Stations', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Group Details'), ['controller' => 'GroupDetails', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Group Detail'), ['controller' => 'GroupDetails', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Full Name') ?></th>
            <td><?= h($user->full_name) ?></td>
        </tr>
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th><?= __('Group') ?></th>
            <td><?= $user->has('group') ? $this->Html->link($user->group->name, ['controller' => 'Groups', 'action' => 'view', $user->group->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Station') ?></th>
            <td><?= $user->has('station') ? $this->Html->link($user->station->name, ['controller' => 'Stations', 'action' => 'view', $user->station->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created On') ?></th>
            <td><?= h($user->created_on) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified On') ?></th>
            <td><?= h($user->modified_on) ?></td>
        </tr>
        <tr>
            <th><?= __('Is Active') ?></th>
            <td><?= $user->is_active ? __('Yes') : __('No'); ?></td>
         </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Group Details') ?></h4>
        <?php if (!empty($user->group_details)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Group Id') ?></th>
                <th><?= __('User Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->group_details as $groupDetails): ?>
            <tr>
                <td><?= h($groupDetails->id) ?></td>
                <td><?= h($groupDetails->group_id) ?></td>
                <td><?= h($groupDetails->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'GroupDetails', 'action' => 'view', $groupDetails->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'GroupDetails', 'action' => 'edit', $groupDetails->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'GroupDetails', 'action' => 'delete', $groupDetails->id], ['confirm' => __('Are you sure you want to delete # {0}?', $groupDetails->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
