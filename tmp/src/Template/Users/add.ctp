<section class="content-header">
      <h1>
        General Form Elements
        
      </h1>

    </section>
	

<section class="content">
	 <div class="row">
	 
        <!-- right column -->
        <div class="col-md-7">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"><?=__('Add User') ?></h3>
            </div>
		<div class="users form large-9 medium-8 columns content">
		<?php
			$myTemplates =  [
			'inputContainer' => '<div class="form-group input {{type}}{{required}}">{{content}}</div>',
			'inputContainerError' => '<div class="form-group input {{type}}{{required}} error">{{content}}{{error}}</div>',
			'label' => '<label class="col-sm-2 control-label" {{attrs}}>{{text}}</label>',
			'input' => '<div class="col-sm-10"><input class="form-control" type="{{type}}" name="{{name}}"  {{attrs}}/></div>'
			];

			$this->Form->templates($myTemplates);
			echo $this->Form->create($user,array('class'=>'form-horizontal')) ?>
			<fieldset>
			<?php
			//["label"=>["class"=>"col-sm-2 control-label"]]
			/*
			echo $this->Form->input('full_name', [
				'label' => ['text' => 'Full Name','class' => 'col-sm-2'],
				'templates' => [
				'label' => '<label{{attrs}}>{{text}}</label>',
				'input' => '<div class="col-sm-10"><input type="{{type}}" name="{{name}}"  {{attrs}}/></div>',
				'inputContainer' => '<div class="form-group {{type}}{{required}}">{{content}}</div>',
				'inputContainerError' => '<div class="form-group  {{type}}{{required}} has-error">{{content}}{{error}}</div>',
			],
				]);*/
				echo $this->Form->input('full_name');
				//echo $this->Form->input('full_name',['class' => 'form-control','label' => ["class"=>"col-sm-3 control-label"],'templateVars' =>['class' =>'col-sm-10']]);
				echo $this->Form->input('email');
				echo $this->Form->input('password');
				echo $this->Form->input('station_id', ['options' => $stations, 'empty' => true]);
				echo $this->Form->input('department_id', ['options' => $departments, 'empty' => true]);
				
				echo $this->Form->input('is_active');

			?>
			</fieldset>
			<?= $this->Form->button(__('Submit')) ?>
			<?= $this->Form->end() ?>
		</div>
</section>