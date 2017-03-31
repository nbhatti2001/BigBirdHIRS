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
			echo $this->Form->create($employeeLoan,array('class'=>'form-horizontal')) 
			 ?>
			<fieldset>
			
        <?php
            echo $this->Form->input('employee_id', ['options' => $employees, 'empty' => true]);
            echo $this->Form->input('loan_amount');
            echo $this->Form->input('installment_amount');
            echo $this->Form->input('balance_amount');
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
			<?= $this->Form->button(__('Save'),['class'=>'btn btn-info pull-right']); ?>
			<div>

    <?= $this->Form->end() ?>
		</div>
</section>
