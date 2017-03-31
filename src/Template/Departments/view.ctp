<section class="content">
      <div class="row">

        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Department's Detail</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <!-- Post -->
                <div class="post">
					<dl class="dl-horizontal">
					
            <dt><?= __('Id') ?></dt>
            <dd><?=$department->id ?></dd>
        
            <dt><?= __('Name') ?></dt>
            <dd><?= h($department->name) ?></dd>
        
            <dt><?= __('Company') ?></dt>
            <dd><?= $department->has('company') ? $this->Html->link($department->company->name, ['controller' => 'Companies', 'action' => 'view', $department->company->id]) : '' ?></dd>
        
            <dt><?= __('Users1') ?></dt>
            <dd><?= $department->has('users1') ? $this->Html->link($department->users1->id, ['controller' => 'Users', 'action' => 'view', $department->users1->id]) : '' ?></dd>
       
            <dt><?= __('User Id') ?></dt>
            <dd><?= $department->user_id ?></dd>
        
            <dt><?= __('Created') ?></dt>
            <dd><?= h($department->created) ?></dd>
        
            <dt><?= __('Modified') ?></dt>
            <dd><?= h($department->modified) ?></dd>
        
            <dt><?= __('Is Active') ?></dt>
            <dd><?= $department->is_active ? __('Yes') : __('No'); ?></dd>
         						
						
					</dl>
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
      <!-- /.row -->
    </section>