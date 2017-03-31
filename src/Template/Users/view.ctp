<section class="content">
      <div class="row">
        <div class="col-md-3">
          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
				<?php 
					if($user->photo=="")
						echo $this->Html->image('dummy.jpg',["class"=>"profile-user-img img-responsive img-circle"]);
					else
						echo $this->Html->image('users/'.$user->photo,["class"=>"profile-user-img img-responsive img-circle"]);
				?>
              <h3 class="profile-username text-center"><?= h($user->full_name) ?></h3>
              <p class="text-muted text-center"><?=$user->department->name?></p>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">User's Detail</a></li>

            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <!-- Post -->
                <div class="post">
					<dl class="dl-horizontal">
					
						<dt>Station</dt>
						<dd><?=$user->station->name?></dd>
						<dt>Department</dt>
						<dd><?=$user->department->name?></dd>	
						<dt>Company</dt>
						<dd><?=$user->company->name?></dd>	
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