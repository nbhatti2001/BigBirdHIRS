<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Big Bird Payroll | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  	<?= $this->Html->css('cake.css') ?>
	<?= $this->Html->css('bootstrap/css/bootstrap.min.css') ?>
	<?= $this->Html->css('plugins/jvectormap/jquery-jvectormap-1.2.2.css') ?>
	<?= $this->Html->css('plugins/iCheck/square/blue.css') ?>
	<?= $this->Html->css('dist/css/AdminLTE.min.css') ?>
	<?= $this->Html->css('dist/css/skins/_all-skins.min.css') ?>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" />
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css" />
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Big Bird</b>Payroll</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>


	<?php 
			$myTemplates =  [
			'inputContainer' => '<div class="form-group has-feedback {{type}}{{required}}">{{content}}</div>',
			'inputContainerError' => '<div class="form-group has-feedback  {{type}}{{required}} error">{{content}}{{error}}</div>',
			'label' => '',
			'input' => '<input class="form-control" type="{{type}}" name="{{name}}"  {{attrs}}/>',
			'select' => '<div class="col-sm-10"><select class="form-control" type="{{type}}" name="{{name}}"  {{attrs}}/>{{content}}</select></div>'
			
			];
			$this->Form->templates($myTemplates);	
	
			echo $this->Form->create('User'); ?>
      <div class="form-group has-feedback">
        <!-- <input class="form-control" name="username"  required placeholder="Email"> -->
		<?php echo $this->Form->input('email',['Placeholder'=>'User Name']); ?>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
		<?php echo $this->Form->input('password',['Placeholder'=>'Password']); ?>
       <!-- <input type="password" name="password" class="form-control" placeholder="Password"> -->
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
	  <div class="error"> <?php echo $this->Flash->render();  ?></div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox" /> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <input type="submit" value="Sign In" class="btn btn-primary btn-block btn-flat">
        </div>
        <!-- /.col -->
      </div>
    <?php echo $this->Form->end(); ?>


    <!-- /.social-auth-links -->

    <a href="#">I forgot my password</a><br>
    <a href="register.html" class="text-center">Register a new membership</a>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>


<!-- Bootstrap 3.3.6 -->
<?php echo $this->Html->script('bootstrap/js/bootstrap.min.js'); ?>

<!-- iCheck -->
<?php echo $this->Html->script('plugins/iCheck/icheck.min.js'); ?>

<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
