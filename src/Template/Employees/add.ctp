
<section class="content">		
	<h2>
	Employee Profile
	<small>New</small>
	</h2>
<div class="row">	  
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
				<li class="active"><a href="#activity" data-toggle="tab">Employee's Info</a></li>
				<li><a href="#contact" data-toggle="tab">Contact Info</a></li>
				<li><a href="#account" data-toggle="tab">Account Info</a></li>
				<li><a href="#qualification" data-toggle="tab">Qualification Info</a></li>
				<li><a href="#experience" data-toggle="tab">Experience</a></li>
				<li><a href="#attachments" data-toggle="tab">Attachments</a></li>
				<li><a href="#leaved" data-toggle="tab">Leaved</a></li>
            </ul>
    <div class="tab-content">
	
				<div class="active tab-pane" id="activity">

                <!-- Post -->
					<div class="post">

						<div class="users form large-9 medium-8 columns content">
						<?php
							$myTemplates =  [
							'inputContainer' => '<div class="form-group input {{type}}{{required}}">{{content}}</div>',
							'inputContainerError' => '<div class="form-group input {{type}}{{required}} error">{{content}}{{error}}</div>',
							'label' => '<label class="col-sm-2 control-label" {{attrs}}>{{text}}</label>',
							'input' => '<div class="col-sm-10"><input class="form-control" type="{{type}}" name="{{name}}"  {{attrs}}/></div>',
							'select' => '<div class="col-sm-10"><select class="form-control" type="{{type}}" name="{{name}}"  {{attrs}}/>{{content}}</select></div>'
							];
							$this->Form->templates($myTemplates);
							echo $this->Form->create($employee,array('class'=>'form-horizontal')) ?>
							<fieldset>	
						<?php
							$gender=array(''=>'Select Gender', "Male"=>"Male" , "Female"=>"Female");
							echo $this->Form->input('employee_no');
							echo $this->Form->input('attendance_code');
							echo $this->Form->input('employee_name');
							echo $this->Form->input('father_name');
							echo $this->Form->input('gender', ['options' => $gender]);
							//echo $this->Form->input('date_of_brith', [ 'id'=>'dob', 'empty' => true]);
							echo $this->Form->input('date_of_brith', ['id'=>'dob', 'type' => 'text']);
							echo $this->Form->input('cnic',['label'=>['text'=>'CNIC'], "data-inputmask"=>"'mask': ['99999-9999999-9']","data-mask"]);
							echo $this->Form->input('id_mark');					

							echo $this->Form->input('station_id', ['options' => $stations ,'empty' => true]);
							echo $this->Form->input('department_id', ['options' => $departments,'empty' => true]);
							echo $this->Form->input('company_id', ['options' => $companies,'empty' => true]);
							echo $this->Form->input('temparary_address');
							echo $this->Form->input('permanent_address');
							echo $this->Form->input('city');			
										?>
							</fieldset>
							<div class="box-footer">
								<?= $this->Form->button(__('Save'),['class'=>'btn btn-info pull-right']) ?>
								<div>
									<?= $this->Form->end() ?>						
								</div>
							</div>
						<!-- /.post -->
						</div>
					<!-- /.tab-pane -->
					</div>
            <!-- /.tab-content -->
				</div>

				<div class="tab-pane" id="contact">
                <!-- Post -->
					<div class="post">

						<div class="users form large-9 medium-8 columns content">
						<?php
							$myTemplates =  [
							'inputContainer' => '<div class="form-group input {{type}}{{required}}">{{content}}</div>',
							'inputContainerError' => '<div class="form-group input {{type}}{{required}} error">{{content}}{{error}}</div>',
							'label' => '<label class="col-sm-2 control-label" {{attrs}}>{{text}}</label>',
							'input' => '<div class="col-sm-10"><input class="form-control" type="{{type}}" name="{{name}}"  {{attrs}}/></div>',
							'select' => '<div class="col-sm-10"><select class="form-control" type="{{type}}" name="{{name}}"  {{attrs}}/>{{content}}</select></div>'
							];
							$this->Form->templates($myTemplates);
							echo $this->Form->create($employee,array('class'=>'form-horizontal')) ?>
							<fieldset>	
							<?php
							echo $this->Form->input('contact_name');
							echo $this->Form->input('contact_number');
							echo $this->Form->input('residence_number');
							echo $this->Form->input('mobile_number');
							echo $this->Form->input('emergency_contact_number');
							echo $this->Form->input('spouse_name');
							//echo $this->Form->input('dependent');
							echo $this->Form->input('male_childs');
							echo $this->Form->input('female_childs');
							echo $this->Form->input('others');
			
							?>
							</fieldset>
							<div class="box-footer">
								<?= $this->Form->button(__('Save'),['class'=>'btn btn-info pull-right']) ?>
								<div>
									<?= $this->Form->end() ?>						
								</div>
							</div>
						<!-- /.post -->
						</div>
				</div>
			</div>
				<div class="tab-pane" id="account">
                <!-- Post -->
					<div class="post">

						<div class="users form large-9 medium-8 columns content">
						<?php
							$myTemplates =  [
							'inputContainer' => '<div class="form-group input {{type}}{{required}}">{{content}}</div>',
							'inputContainerError' => '<div class="form-group input {{type}}{{required}} error">{{content}}{{error}}</div>',
							'label' => '<label class="col-sm-2 control-label" {{attrs}}>{{text}}</label>',
							'input' => '<div class="col-sm-10"><input class="form-control" type="{{type}}" name="{{name}}"  {{attrs}}/></div>',
							'select' => '<div class="col-sm-10"><select class="form-control" type="{{type}}" name="{{name}}"  {{attrs}}/>{{content}}</select></div>'
							];
							$this->Form->templates($myTemplates);
							echo $this->Form->create($employee,array('class'=>'form-horizontal')) ?>
							<fieldset>	
							<?php
								echo $this->Form->input('appointment_date',  ['id'=>'aptdate', 'type' => 'text']);
								echo $this->Form->input('last_permanent_date', ['id'=>'pmtdate', 'type' => 'text']);
								echo $this->Form->input('bank_account');
								echo $this->Form->input('bank_id', ['options' => $banks, 'empty' => true]);
								echo $this->Form->input('eobi_no',['label'=>['text'=>'EOBI No.']]);
								echo $this->Form->input('tax_no');
								echo $this->Form->input('Tax_deduction');
								echo $this->Form->input('no_of_increment');
								echo $this->Form->input('advance_deduction');
								echo $this->Form->input('social_security_no');
								echo $this->Form->input('designation_id', ['options' => $designations, 'empty' => true]);
								echo $this->Form->input('payscale_id', ['options' => $payscales, 'empty' => true]);
								echo $this->Form->input('anual_increment');
								echo $this->Form->input('new_increment');
								echo $this->Form->input('basic_pay');
								echo $this->Form->input('dearness_allowance');
								echo $this->Form->input('mess_allowance');
								echo $this->Form->input('gpa_allowance');
								echo $this->Form->input('other_allowance');
			
							?>
							</fieldset>
							<div class="box-footer">
								<?= $this->Form->button(__('Save'),['class'=>'btn btn-info pull-right']) ?>
								<div>
									<?= $this->Form->end() ?>						
								</div>
							</div>
						<!-- /.post -->
						</div>
						
					<!-- /.tab-pane -->
					</div>
            <!-- /.tab-content -->
				</div>	
				
				<div class="tab-pane" id="qualification">
                <!-- Post -->
					<div class="post">

						<div class="users form large-9 medium-8 columns content">
						<?php
							$myTemplates =  [
							'inputContainer' => '<div class="form-group input {{type}}{{required}}">{{content}}</div>',
							'inputContainerError' => '<div class="form-group input {{type}}{{required}} error">{{content}}{{error}}</div>',
							'label' => '<label class="col-sm-2 control-label" {{attrs}}>{{text}}</label>',
							'input' => '<div class="col-sm-10"><input class="form-control" type="{{type}}" name="{{name}}"  {{attrs}}/></div>',
							'select' => '<div class="col-sm-10"><select class="form-control" type="{{type}}" name="{{name}}"  {{attrs}}/>{{content}}</select></div>'
							];
							//$this->Form->templates($myTemplates);
							//echo $this->Form->create($employee,array('class'=>'form-horizontal')) ?>
							<fieldset>	
								<div id="jsGridQual"></div>
							</fieldset>
							<div class="box-footer">
								<?= $this->Form->button(__('Save'),['class'=>'btn btn-info pull-right','onclick'=>'getTableData();']) ?>
								<div>
									<?php //echo  $this->Form->end(); ?>						
								</div>
							</div>
						<!-- /.post -->
						</div>
						
					<!-- /.tab-pane -->
					</div>
            <!-- /.tab-content -->
				</div>						


				<div class="tab-pane" id="experience">
                <!-- Post -->
					<div class="post">

						<div class="users form large-9 medium-8 columns content">
						<?php
							$myTemplates =  [
							'inputContainer' => '<div class="form-group input {{type}}{{required}}">{{content}}</div>',
							'inputContainerError' => '<div class="form-group input {{type}}{{required}} error">{{content}}{{error}}</div>',
							'label' => '<label class="col-sm-2 control-label" {{attrs}}>{{text}}</label>',
							'input' => '<div class="col-sm-10"><input class="form-control" type="{{type}}" name="{{name}}"  {{attrs}}/></div>',
							'select' => '<div class="col-sm-10"><select class="form-control" type="{{type}}" name="{{name}}"  {{attrs}}/>{{content}}</select></div>'
							];
							$this->Form->templates($myTemplates);
							echo $this->Form->create($employee,array('class'=>'form-horizontal')) ?>
							<fieldset>	
								<div id="jsGridExp"></div>
							</fieldset>
							<div class="box-footer">
								<?= $this->Form->button(__('Save'),['class'=>'btn btn-info pull-right']) ?>
								<div>
									<?= $this->Form->end() ?>						
								</div>
							</div>
						<!-- /.post -->
						</div>
						
					<!-- /.tab-pane -->
					</div>
            <!-- /.tab-content -->
				</div>						

				<div class="tab-pane" id="attachments">
                <!-- Post -->
					<div class="post">

						<div class="users form large-9 medium-8 columns content">
						<?php
							$myTemplates =  [
							'inputContainer' => '<div class="form-group input {{type}}{{required}}">{{content}}</div>',
							'inputContainerError' => '<div class="form-group input {{type}}{{required}} error">{{content}}{{error}}</div>',
							'label' => '<label class="col-sm-2 control-label" {{attrs}}>{{text}}</label>',
							'input' => '<div class="col-sm-10"><input class="form-control" type="{{type}}" name="{{name}}"  {{attrs}}/></div>',
							'select' => '<div class="col-sm-10"><select class="form-control" type="{{type}}" name="{{name}}"  {{attrs}}/>{{content}}</select></div>'
							];
							$this->Form->templates($myTemplates);
							echo $this->Form->create($employee,array('class'=>'form-horizontal')) ?>
							<fieldset>	
							<?php
								echo $this->Form->input('appointment_date', ['empty' => true]);

			
							?>
							</fieldset>attachments
							<div class="box-footer">
								<?= $this->Form->button(__('Save'),['class'=>'btn btn-info pull-right']) ?>
								<div>
									<?= $this->Form->end() ?>						
								</div>
							</div>
						<!-- /.post -->
						</div>
						
					<!-- /.tab-pane -->
					</div>
            <!-- /.tab-content -->
				</div>						

				<div class="tab-pane" id="leaved">
                <!-- Post -->
					<div class="post">

						<div class="users form large-9 medium-8 columns content">
						<?php
							$myTemplates =  [
							'inputContainer' => '<div class="form-group input {{type}}{{required}}">{{content}}</div>',
							'inputContainerError' => '<div class="form-group input {{type}}{{required}} error">{{content}}{{error}}</div>',
							'label' => '<label class="col-sm-2 control-label" {{attrs}}>{{text}}</label>',
							'input' => '<div class="col-sm-10"><input class="form-control" type="{{type}}" name="{{name}}"  {{attrs}}/></div>',
							'select' => '<div class="col-sm-10"><select class="form-control" type="{{type}}" name="{{name}}"  {{attrs}}/>{{content}}</select></div>'
							];
							$this->Form->templates($myTemplates);
							echo $this->Form->create($employee,array('class'=>'form-horizontal')) ?>
							<fieldset>	
							<?php
								echo $this->Form->input('leaving_date', ['id'=>'leavingdate', 'type' => 'text']);
								echo $this->Form->input('leaving_reason');
								echo $this->Form->input('is_active', [
								'label' => ['text' => 'Is Active','class' => 'col-sm-3'],
								'templates' => [
								'label' => '<label{{attrs}}>{{text}}</label>',
								'input' => '<input type="{{type}}" name="{{name}}"  {{attrs}}/>',
								'inputContainer' => '<div class="form-group {{type}}{{required}}"><div class="col-sm-offset-2 col-sm-10"> <div class="checkbox"> {{content}}</div></div></div>',
								'inputContainerError' => '<div class="form-group  {{type}}{{required}} has-error">{{content}}{{error}}</div>',
								],]);								

							?>
							</fieldset>
							<div class="box-footer">
								<?= $this->Form->button(__('Save'),['class'=>'btn btn-info pull-right']) ?>
								<div>
									<?= $this->Form->end() ?>						
								</div>
							</div>
						<!-- /.post -->
						</div>
						
					<!-- /.tab-pane -->
					</div>
            <!-- /.tab-content -->
				</div>						
          <!-- /.nav-tabs-custom -->
			</div>
        <!-- /.col -->
      </div>
	  </div>
      <!-- /.row -->
    </section>
	

<script>
/*	function getTableData()
	{
empId=1;
		var jSon='{"data":[';
		var MyRows = $('table#qualification').find('tbody').find('tr');
		for (var i = 0; i < MyRows.length; i++) 
		{
			var degree = $(MyRows[i]).find('td:eq(0)').html();
			var duration = $(MyRows[i]).find('td:eq(1)').html();
			var institute = $(MyRows[i]).find('td:eq(2)').html();
			var gpa = $(MyRows[i]).find('td:eq(3)').html();
			jSon+='{"degree":"'+ degree +'","duration": "'+ duration+'","institute":"'+institute+'" ,"gpa":"'+ gpa+'","empid":"'+ empId+'"},';
		}
		jSon=jSon.substring(1,jSon.length-1);
		jSon+=']}';
		console.log(jSon);
		var jSon = encodeURIComponent(jSon);
		
		$.post('<?php echo $this->Url->build(array('controller'=>'employees','action'=>'addqual'));?>',
			{mydata:jSon},
			 function (data) {
				alert(data);
			});	

		
	}*/
    $('#dob').datepicker({
      changeMonth: true,
      changeYear: true,
	  dateFormat: 'dd/mm/yy',
	  yearRange:'1965:1998'
    });	
	
    $('#aptdate').datepicker({
      changeMonth: true,
      changeYear: true
    });	
	
    $('#pmtdate').datepicker({
      changeMonth: true,
      changeYear: true
    });	
    $('#leavingdate').datepicker({
      changeMonth: true,
      changeYear: true
    });	

  
    $("#jsGridQual").jsGrid({
        width: "100%",
        height: "400px",
		tableName:"qualification",
 
        inserting: true,
        editing: true,
        sorting: true,
        paging: true,
       
 
        fields: [
            { name: "Degree/Certificate Title", type: "text", width: 150, validate: "required" },
            { name: "Duration", type: "text", width: 150, validate: "required" },
			{ name: "Institute Name", type: "text", width: 150, validate: "required" },
			{ name: "Division/GPA", type: "text", width: 150, validate: "required" },
            { type: "control" }
        ]
    });	
	
    $("#jsGridExp").jsGrid({
        width: "100%",
        height: "400px",
		tableName:"experience",
 
        inserting: true,
        editing: true,
        sorting: true,
        paging: true,
 
      
 
        fields: [
            { name: "Company Name", type: "text", width: 150, validate: "required" },
            { name: "Designation", type: "text", width: 150, validate: "required" },
			{ name: "Starting Date", type: "text", width: 150, validate: "required" },
			{ name: "Ending Date", type: "text", width: 150, validate: "required" },
			{ name: "Summary of Duties", type: "text", width: 150, validate: "required" },
			{ name: "Reporting Officer Contact No.", type: "text", width: 150, validate: "required" },
            { type: "control" }
        ]
    });		
	
</script>