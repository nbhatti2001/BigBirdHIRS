<section class="content-header">
      <h1>
        Employee's Attendance Import
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
							echo $this->Form->input('pmonth', ['options' => $months,'empty' => true]);
						?>
						
							</fieldset>
							<div class="box-footer">
								<?= $this->Form->button(__('Save'),['class'=>'btn btn-info pull-right']) ?>
								<div>
									<?= $this->Form->end() ?>						
								</div>
							</div>
					</div>
					<div class="box-header ">
					
						<?php if(isset($this->request->data['station_id'])) 
							echo $this->Html->link("Download Excel",['action'=>'ExportAttendenceSheet',$this->request->data['station_id'],$this->request->data['department_id'],$this->request->data['pmonth']]);
					?>
					<!-- for FILE INPUT -->
						<div class="col-xs-6 ">
						
							<?php
							
							
								$myTemplates =  [
								'inputContainer' => '<div class="form-group {{type}}{{required}}">{{content}}</div>',
								'inputContainerError' => '<div class="form-group input {{type}}{{required}} error">{{content}}{{error}}</div>',
								'label' => '<label class="col-sm-3" {{attrs}}>{{text}}</label>',
								'input' => '<div class="col-sm-9"><input class="form-control" type="{{type}}" name="{{name}}"  {{attrs}}/><p class="help-block">Example block-level help text here.</p></div>',
								'select' => '<div class="col-sm-9"><select class="form-control" type="{{type}}" name="{{name}}"  {{attrs}}/>{{content}}</select></div>'
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
					
					
					<!--  END OF INPUT  -->
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
				<input type="hidden" name="save_data" value="" />
				<input type="hidden" name="pmonth" value="<?=$pmonth?>" />
				<table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
				<tbody>	
					<thead>
						<tr class="jsgrid-header-row">
							<th class="jsgrid-header-cell jsgrid-header-sortable" style="width: 100px;">Employee No.</th>
							<th class="jsgrid-header-cell jsgrid-header-sortable" style="width: 150px;">Name</th>
							<th class="jsgrid-header-cell jsgrid-header-sortable" style="width: 100px;">Father Name</th>
							<th class="jsgrid-header-cell jsgrid-header-sortable" style="width: 150px;">Designation</th>
							<th class="jsgrid-header-cell jsgrid-header-sortable" style="width: 100px;">Days</th>
							<th class="jsgrid-header-cell jsgrid-header-sortable" style="width: 100px;">Overtime(Days)</th>
							<th class="jsgrid-header-cell jsgrid-header-sortable" style="width: 100px;">Overtime(Hrs)</th>
						</tr>	
					</thead>
					
					
						<fieldset>
						<?php
						$cnt=1;
						
						foreach($employees as $employee): 
						//printr ($employee->attendances[0]['days']);
						$rowClass=(($cnt % 2)==1?"odd":"even");
						echo "<tr class='jsgrid-row $rowClass'>";
						
						?>
							<input  name="employee_id[]" value="<?=$employee->id?>" type="hidden">
							<td class="jsgrid-cell" style="width: 150px;"><?=$employee->employee_no?></td>
							<td class="jsgrid-cell" style="width: 100px;"><?=$employee->employee_name?></td>
							<td class="jsgrid-cell" style="width: 100px;"><?=$employee->father_name?></td>
							<td class="jsgrid-cell" style="width: 100px;"><?=$employee->designation->name?></td>
							<td class="jsgrid-cell" ><input style="width:75px;" value="<?=(isset($employee->attendances[0]['days'])?$employee->attendances[0]['days']:'')?>" name="days_<?=$employee->id?>" type="text"></td>
							<td class="jsgrid-cell" ><input style="width:75px;" value="<?=(isset($employee->attendances[0]['overtime_days'])?$employee->attendances[0]['overtime_days']:'')?>" name="ot_days_<?=$employee->id?>" type="text"></td>
							<td class="jsgrid-cell" ><input style="width:75px;" value="<?=(isset($employee->attendances[0]['overtime_hours'])?$employee->attendances[0]['overtime_hours']:'')?>" name="ot_hours_<?=$employee->id?>" type="text"></td>
								
								</tr>
						<?php  $cnt++; endforeach; ?>
						

						</fieldset>
					</tbody>
					</table>
					<div class="box-footer">
						<?= $this->Form->button(__('Save'),['class'=>'btn btn-info pull-right']) ?>
						<div>
							<?= $this->Form->end() ?>						
						</div>
					</div>			
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