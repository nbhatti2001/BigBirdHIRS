<section class="content">
    <div class="row">
        <div class="col-xs-12">
			<div class="box">
		  
		  
				<div class="box-header">
					  <h3 class="box-title"><?= __('Employees List') ?></h3>
				</div>
            <div class="box-body">
              <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
				<div class="row">
				<div class="col-sm-12" >
				<table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
					<thead>
						<tr>
							<th><?= $this->Paginator->sort('id') ?></th>
							<th><?= $this->Paginator->sort('employee_no') ?></th>
							<th><?= $this->Paginator->sort('employee_name') ?></th>
							<th><?= $this->Paginator->sort('father_name') ?></th>
							<th><?= $this->Paginator->sort('station_id') ?></th>
							<th><?= $this->Paginator->sort('department_id') ?></th>
							<th><?= $this->Paginator->sort('company_id') ?></th>
							<th class="actions"><?= __('Actions') ?></th>
						</tr>
					</thead>
					<tbody>
						<?php
						$cnt=1;
						foreach ($employees as $employee): 
						$rowClass=(($cnt % 2)==1?"odd":"even");
		
						?>
            
						<tr role="row" class="<?=$rowClass?>">
							<td><?= $this->Number->format($employee->id) ?></td>
							<td><?= h($employee->employee_no) ?></td>
							<td><?= h($employee->employee_name) ?></td>
							<td><?= h($employee->father_name) ?></td>
							<td><?= $employee->has('station') ? $this->Html->link($employee->station->name, ['controller' => 'Stations', 'action' => 'view', $employee->station->id]) : '' ?></td>
							<td><?= $employee->has('department') ? $this->Html->link($employee->department->name, ['controller' => 'Departments', 'action' => 'view', $employee->department->id]) : '' ?></td>
							<td><?= $employee->has('company') ? $this->Html->link($employee->company->name, ['controller' => 'Companies', 'action' => 'view', $employee->company->id]) : '' ?></td>
							<td class="actions">
								<?= $this->Html->link("<i class='fa fa-eye'></i>", ['action' => 'view', $employee->id],['title'=>'View', 'escape'=>FALSE,]) ?>
								<?= $this->Html->link("&nbsp;&nbsp;<i class='fa fa-pencil'></i>", ['action' => 'edit', $employee->id],['title'=>'Edit', 'escape'=>FALSE,'class'=>'']) ?>
								<?= $this->Form->postLink("<i class='fa fa-fw fa-remove'></i>", ['action' => 'delete', $employee->id], ['title'=>'Delete','escape'=>FALSE,'confirm' => __('Are you sure you want to delete # {0}?', $employee->id)]) ?>
							</td>
						</tr>
						<?php $cnt++; endforeach; ?>
					</tbody>
				</table>
				
				</div>
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
