<section class="content">
      <div class="row">

        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Company's Detail</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <!-- Post -->
                <div class="post">
					<dl class="dl-horizontal">
					
						<dt>Name</dt>
						<dd><?=$company->name?></dd>
						<dt>Created By</dt>
						<dd><?=$company->user->full_name?></dd>	
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