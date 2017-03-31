<section class="content">
    <div class="row">
        <div class="col-xs-12">
			<div class="box">
		  
		  
				<div class="box-header">
					  <h3 class="box-title"><?= __('Users List') ?></h3>
				</div>
            <div class="box-body">
              <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
				<div class="row">
				<div class="col-sm-12" >
				<table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
					<thead>
						<tr role="row">
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('manager_id') ?></th>
                <th><?= $this->Paginator->sort('company_id') ?></th>
                <th><?= $this->Paginator->sort('user_id') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
				<th><?= $this->Paginator->sort('is_active',"Is Active") ?></th>

						</tr>
					</thead>
					<tbody>
						<?php
						$cnt=1;
						foreach ($stations as $station):
						$rowClass=(($cnt % 2)==1?"odd":"even");
		
						?>
						<tr role="row" class="<?=$rowClass?>">
							<td><?= $this->Number->format($station->id) ?></td>
							<td><?= h($station->name) ?></td>
							<td><?= $station->has('manager') ? $this->Html->link($station->manager->id, ['controller' => 'Users', 'action' => 'view', $station->manager->id]) : '' ?></td>
							<td><?= $station->has('company') ? $this->Html->link($station->company->name, ['controller' => 'Companies', 'action' => 'view', $station->company->id]) : '' ?></td>
							<td><?= $station->has('my_user') ? $this->Html->link($station->my_user->id, ['controller' => 'Users', 'action' => 'view', $station->my_user->id]) : '' ?></td>
							<td><?= h($station->created) ?></td>
							<td><?= h($station->modified) ?></td>
							<td><?= h($station->is_active)=='1' ? "Yes":"No" ?></td>
						    <td class="actions">
								<?= $this->Html->link(__('View'), ['action' => 'view', $station->id]) ?>
								<?= $this->Html->link(__('Edit'), ['action' => 'edit', $station->id]) ?>
								<?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $station->id], ['confirm' => __('Are you sure you want to delete # {0}?', $station->id)]) ?>
							</td>
						</tr>
						<?php $cnt++; endforeach; ?>
					</tbody>
				</table></div>
				</div>
		
		
	
			<div class="row">
			
				<div class="col-sm-5">
					  <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing <?= $this->Paginator->counter() ?> pages</div>
				</div>	  
	
					  
				<div class="col-sm-7">
					<ul class="pagination">
						<?= $this->Paginator->prev('< ' . __('previous')) ?>
						<?= $this->Paginator->numbers() ?>
						<?= $this->Paginator->next(__('next') . ' >') ?>
					</ul>
				</div>
			</div>
			
			
			
			
			
			</div></div>
		
	</div>
	</div>
	</div>
</section>

</div>
