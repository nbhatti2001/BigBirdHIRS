<section class="content">
      <div class="row">

        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Emplyees's Loan Detail</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <!-- Post -->
                <div class="post">
					<dl class="dl-horizontal">
					
        
            <dt><?= __('Id') ?></dt>
            <dd><?= $this->Number->format($employeeloan->id) ?></dd>
        
        
            <dt><?= __('Loan Amount') ?></dt>
            <dd><?= $this->Number->format($employeeloan->loan_amount) ?></dd>
        
        
            <dt><?= __('Instalment Amount') ?></dt>
            <dd><?= $this->Number->format($employeeloan->installment_amount) ?></dd>
        
            <dt><?= __('No of Instalment') ?></dt>
            <dd><?= $this->Number->format($employeeloan->no_of_installment) ?></dd>
			
            <dt><?= __('Balance Amount') ?></dt>
            <dd><?= $this->Number->format($employeeloan->balance_amount) ?></dd>
        
        
            <dt><?= __('Modified By') ?></dt>
            <dd><?= $this->Number->format($employeeloan->modified_by) ?></dd>
        
        
            <dt><?= __('Created') ?></dt>
            <dd><?= h($employeeloan->created) ?></dd>
        
        
            <dt><?= __('Modified') ?></dt>
            <dd><?= h($employeeloan->modified) ?></dd>
        
        
            <dt><?= __('Is Active') ?></dt>
            <dd><?= $employeeloan->is_active ? __('Yes') : __('No'); ?></dd>
         

         						
						
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