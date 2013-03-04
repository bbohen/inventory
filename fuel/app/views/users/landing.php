<div class="container">
	<div class="span4 well">
    <h2>Sign Up</h2>
    <?= Form::open(array('action' => 'register', 'method' => 'post', 'autocomplete' => 'off', 'class' => 'user', 'id' => 'sign_up_form')); ?>
	    <label>First Name</label>
	    <input type="text" name="fname" class="span4">
	    <label>Username</label>
	    <input type="text" name="username" class="span4">
	    <label>Password</label>
	    <input type="password" name="password" class="span4">
	    <input type="submit" value="Sign Up" class="btn btn-primary pull-right">
	    <div class="clearfix"></div>
    <?= Form::close(); ?>
	</div>
	<div class="span1">
		<h1 id="or_label">or</h1>
	</div>
	<div class="span4 well">
    <h2>Sign In</h2>
    <?= Form::open(array('action' => 'login', 'method' => 'post', 'autocomplete' => 'off')); ?>
	    <label>Username</label>
	    <input type="text" name="username" class="span4">
	    <label>Password</label>
	    <input type="password" name="password" class="span4">
	    <input type="submit" value="Sign In" class="btn btn-primary pull-right">
	    <div class="clearfix"></div>
    <?= Form::close(); ?>
	</div>
</div>