<section class="content-header">
      <h1>
        Employee's List
      </h1>
</section>
<section class="content">
    <div class="row">
        <div class="col-md-12">

		
			<div class="box">
				<div style="border-bottom: 1px solid #d2d6de;" class="box-header">
					<div class="col-xs-6">
					  	<?php
							$myTemplates =  [
							'inputContainer' => '<div class="form-group input {{type}}{{required}}">{{content}}</div>',
							'inputContainerError' => '<div class="form-group input {{type}}{{required}} error">{{content}}{{error}}</div>',
							'label' => '<label class="col-sm-2 control-label" {{attrs}}>{{text}}</label>',
							'input' => '<div class="col-sm-10"><input class="form-control" type="{{type}}" name="{{name}}"  {{attrs}}/></div>',
							'select' => '<div class="col-sm-10"><select class="form-control" type="{{type}}" name="{{name}}"  {{attrs}}/>{{content}}</select></div>'
							];
							$this->Form->templates($myTemplates);
							echo $this->Form->create('',array('class'=>'form-horizontal')) ?>
							<fieldset>	
							
						<?php
							echo $this->Form->input('station_id', ['options' => $stations ,'empty' => true]);
							echo $this->Form->input('department_id', ['options' => $departments,'empty' => true]);
							echo $this->Form->input('is_active', ['options' => $status,'default'=>'Active']);
						?>
						
							</fieldset>
							<div class="box-footer">
								<?= $this->Form->button(__('Show'),['class'=>'btn btn-info pull-right']) ?>
								<div>
									<?= $this->Form->end() ?>						
								</div>
							</div>
					</div>
					<div class="col-xs-6 text-right">
						some contents here 2
					</div>
				</div>		  
		  
				<div class="box-header">
					  <h3 class="box-title"><?= __('Employees List') ?></h3>
				</div>
            <div class="box-body">
              <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
				<div class="row">
				<div class="col-sm-12" >
				<?php echo $this->Form->create('',array('class'=>'form-horizontal')) ?>
				<table id="example2" class="rpt-table table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
				<tbody>	
					<thead>
						<tr class="jsgrid-header-row">
							<th>Employee No.</th>
							<th>Name</th>
							<th>Father Name</th>
							<th>Designation</th>
							<th>Station</th>
							<th>Department</th>
							<th>Appointment Date</th>
							<th>Basic Pay</th>
							<th>Pay Scale</th>
							<th>Address</th>
						</tr>	
					</thead>
					
						<fieldset>
						<?php
						$cnt=1;
						
						foreach ($employees as $employee): 
						$rowClass=(($cnt % 2)==1?"odd":"even");
						echo "<tr  role='row'  class='$rowClass'>";
						?>
							<td><?=$employee->employee_no?></td>
							<td><?=$employee->employee_name?></td>
							<td><?=$employee->father_name?></td>
							<td><?=$employee->designation->name?></td>
							<td><?=$employee->station->name?></td>
							<td><?=$employee->department->name?></td>
							<td><?=$employee->appointment_date?></td>
							<td><?=$employee->basic_pay?></td>
							<td><?=$employee->payscale->name?></td>
							<td><?=$employee->permanent_address?></td>
							
						</tr>
						<?php  $cnt++; endforeach; ?>
						

						</fieldset>
					</tbody>
					</table>
		
				</div>
				</div>
		
		
	

			
			
			
			
			
			</div></div>
		
	</div>
	</div>
	</div>
</section>

</div>
<!--
<section class="content">
	 <div class="row">
        
        <div class="col-md-11">
         
			<div class="tab-pane active" id="qualification">
               
					<div class="post">

						<div class="users form large-9 medium-8 columns content">
						<div class="box">
							<fieldset>	
								<div id="jsGridExp" class="jsgrid" style="position: relative; height: 400px; width: 950px;">

								
								<div class="jsgrid-grid-body" style="height: 322px;">

								</div>
								
								</div>
							</fieldset>
							<div class="box-footer">
								<button class="btn btn-info pull-right" onclick="getExpData();" type="submit">Save</button>								<div>
															
								</div>
							</div>
						
						</div>
						</div>
						
				
					</div>
					
					
				
				</div>		  
		  
			<div style="display:none;"  class="box box-primary">
					<?php
						$myTemplates =  [
						'inputContainer' => '<div class="form-group input {{type}}{{required}}">{{content}}</div>',
						'inputContainerError' => '<div class="form-group input {{type}}{{required}} error">{{content}}{{error}}</div>',
						'label' => '<label {{attrs}}>{{text}}</label>',
						'input' => '<div class="col-sm-10"><input class="form-control" type="{{type}}" name="{{name}}"  {{attrs}}/><p class="help-block">Example block-level help text here.</p></div>',
						'select' => '<div class="col-sm-10"><select class="form-control" type="{{type}}" name="{{name}}"  {{attrs}}/>{{content}}</select></div>'
						];
						$this->Form->templates($myTemplates);
						echo $this->Form->create('',array('class'=>'form-horizontal','enctype'=>"multipart/form-data")) 
						
						 ?>
						 <div class="box-body"> 
						<fieldset>
						<?php
						echo $this->Form->input('upload_file',['type'=>'file']);	

						?>
						</fieldset>
						</div>
						<div class="box-footer">
							<?= $this->Form->button(__('Save'),['class'=>'btn btn-info pull-right']); ?>
							<div>
							<?= $this->Form->end(); ?>
							</div>
						</div>
			</div>
		</div>
	</div>
</section>
-->