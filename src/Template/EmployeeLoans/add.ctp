<section class="content-header">
      <h1>
        Add Employee Loan
      </h1>
    </section>
<section class="content">
	 <div class="row">
        <!-- right column -->
        <div class="col-md-7">
          <!-- Horizontal Form -->
          <div class="box box-info">
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
			echo $this->Form->create($employeeloan,array('class'=>'form-horizontal')) 
			 ?>
			<fieldset>
			
        <?php
            echo $this->Form->input('employee_id', ['options' => $employees, 'empty' => true]);
            echo $this->Form->input('loan_amount');
            echo $this->Form->input('installment_amount',['onblur'=>'CalcInstNo();']);
			echo $this->Form->input('no_of_installment',['onblur'=>'CalcInstAmount();']);
            echo $this->Form->input('balance_amount');

			?>
			</fieldset>
			<div class="box-footer">
			<?= $this->Form->button(__('Save'),['class'=>'btn btn-info pull-right']); ?>
			<div>

    <?= $this->Form->end() ?>
		</div>
</section>
<script>
function CalcInstNo()
{
	
	if(isNaN(parseInt($("#loan-amount").val())))
	{
		alert("Loan Amount not given, Please provide and try again");
		return 0;
	}
	if(parseInt($("#installment-amount").val())>0 && parseInt($("#no-of-installment").val())==0)
	{
		no = Math.ceil( $("#loan-amount").val() / $("#installment-amount").val()); 
		$("#no-of-installment").val(no);
	}
}
function CalcInstAmount()
{
	if(isNaN(parseInt($("#loan-amount").val())))
	{
		alert("Loan Amount not given, Please provide and try again");
		return 0;
	}
	if(parseInt($("#no-of-installment").val()) > 0)
	{
		inst =Math.round(parseInt($("#loan-amount").val())  / parseInt($("#no-of-installment").val()),0);
		$("#installment-amount").val(inst);
	}
	
}
</script>
