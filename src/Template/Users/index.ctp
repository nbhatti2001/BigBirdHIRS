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
							<th><?= $this->Paginator->sort('full_name') ?></th>
							<th><?= $this->Paginator->sort('email') ?></th>
							<th><?= $this->Paginator->sort('department_id') ?></th>
							<th><?= $this->Paginator->sort('station_id') ?></th>
							<th><?= $this->Paginator->sort('company_id') ?></th>
							
							<th class="actions"><?= __('Actions') ?></th>
						</tr>
					</thead>
					<tbody>
						<?php
						$cnt=1;
						foreach ($users as $user):
						//printr($user);
						$rowClass=(($cnt % 2)==1?"odd":"even");
						?>
						<tr role="row" class="<?=$rowClass?>">
							<td><?= $this->Number->format($user->id) ?></td>
							<td><?= h($user->full_name) ?></td>
							<td><?= h($user->email) ?></td>
							<td><?=$user->department->name?></td>
							<td><?=$user->station->name?></td>
							<td><?=$user->company->name?></td>
							
						    <td class="actions">
								<?= $this->Html->link("<i class='fa fa-eye'></i>", ['action' => 'view', $user->id],['title'=>'View', 'escape'=>FALSE,]) ?>
								<?= $this->Html->link("&nbsp;&nbsp;<i class='fa fa-pencil'></i>", ['action' => 'edit', $user->id],['title'=>'Edit', 'escape'=>FALSE,'class'=>'']) ?>
								<?= $this->Form->postLink("<i class='fa fa-fw fa-remove'></i>", ['action' => 'delete', $user->id], ['title'=>'Delete','escape'=>FALSE,'confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
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
