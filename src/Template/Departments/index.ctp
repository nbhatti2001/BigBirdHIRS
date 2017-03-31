<section class="content">
    <div class="row">
        <div class="col-xs-12">
			<div class="box">
		  
		  
				<div class="box-header">
					  <h3 class="box-title"><?= __('Departments List') ?></h3>
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
							<th><?= $this->Paginator->sort('company_id') ?></th>
							<th><?= $this->Paginator->sort('user_id') ?></th>
							<th><?= $this->Paginator->sort('created') ?></th>
							<th><?= $this->Paginator->sort('modified') ?></th>
							<th><?= $this->Paginator->sort('modified_by') ?></th>
							<th><?= $this->Paginator->sort('is_active') ?></th>
							<th class="actions"><?= __('Actions') ?></th>
						</tr>
					</thead>
					<tbody>
						<?php
						$cnt=1;
						foreach ($departments as $department):
						$rowClass=(($cnt % 2)==1?"odd":"even");
		
						?>
						<tr role="row" class="<?=$rowClass?>">
							<td><?= $department->id ?></td>
							<td><?= h($department->name) ?></td>
							<td><?= $department->has('company') ? $this->Html->link($department->company->name, ['controller' => 'Companies', 'action' => 'view', $department->company->id]) : '' ?></td>
							<td><?= $department->users_id ?></td>
							<td><?= h($department->created) ?></td>
							<td><?= h($department->modified) ?></td>
							<td><?= $department->has('modified_by') ? $department->modified_by->full_name : '' ?></td>
							<td><?= h($department->is_active)=='1' ? "Yes":"No" ?></td>
						    <td class="actions">
								<?= $this->Html->link("<i class='fa fa-eye'></i>", ['action' => 'view', $department->id],['title'=>'View', 'escape'=>FALSE,]) ?>
								<?= $this->Html->link("&nbsp;&nbsp;<i class='fa fa-pencil'></i>", ['action' => 'edit', $department->id],['title'=>'Edit', 'escape'=>FALSE,'class'=>'']) ?>
								<?= $this->Form->postLink("<i class='fa fa-fw fa-remove'></i>", ['action' => 'delete', $department->id], ['title'=>'Delete','escape'=>FALSE,'confirm' => __('Are you sure you want to delete # {0}?', $department->id)]) ?>
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
