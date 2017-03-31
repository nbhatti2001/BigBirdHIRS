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
							<th><?= $this->Paginator->sort('user_id') ?></th>
							<th><?= $this->Paginator->sort('is_active',"Is Active") ?></th>
							<th class="actions"><?= __('Actions') ?></th>
						</tr>
					</thead>
					<tbody>
						<?php
						$cnt=1;
						foreach ($companies as $company):
						$rowClass=(($cnt % 2)==1?"odd":"even");
		
						?>
						<tr role="row" class="<?=$rowClass?>">
							<td><?= $this->Number->format($company->id) ?></td>
							<td><?= h($company->name) ?></td>
							<td><?=$company->has('user')? $company->user->full_name:'22'?></td>
							<td><?= h($company->is_active)=='1' ? "Yes":"No" ?></td>

							<td class="actions">
								<?= $this->Html->link("<i class='fa fa-eye'></i>", ['action' => 'view', $company->id],['title'=>'View', 'escape'=>FALSE,]) ?>
								<?= $this->Html->link("&nbsp;&nbsp;<i class='fa fa-pencil'></i>", ['action' => 'edit', $company->id],['title'=>'Edit', 'escape'=>FALSE,'class'=>'']) ?>
								<?= $this->Form->postLink("<i class='fa fa-fw fa-remove'></i>", ['action' => 'delete', $company->id], ['title'=>'Delete','escape'=>FALSE,'confirm' => __('Are you sure you want to delete # {0}?', $company->id)]) ?>
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
