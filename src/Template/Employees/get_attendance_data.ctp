<section class="content">
	 <div class="row">
        
        <div class="col-md-11">
         
			<div class="tab-pane active" id="qualification">
               
					<div class="post">

						<div class="users form large-9 medium-8 columns content">
						<div class="box">
							<fieldset>	
								<div id="jsGridExp" class="jsgrid" style="position: relative; height: 400px; width: 950px;">

								
								<div class="jsgrid-grid-body" style="height: 322px;">KKKK
<div   class="box box-primary">
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