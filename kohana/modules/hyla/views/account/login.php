<?php if ($errors): ?>
<div class="error"><?php echo __('Login Failed'); ?></div>
<?php endif; ?>
<?php echo Form::open(); ?>
<fieldset>
	<legend><?php echo __('Login'); ?></legend>
	<label for="username"><?php echo __('Username'); ?></label>
	<input type="text" name="username" id="username" />
	<label for="password"><?php echo __('Password'); ?></label>
	<input type="text" name="password" id="password" />
	<input type="checkbox" name="remember_me" id="remember_me" />
	<label for="remember_me"><?php echo __('Remember Me'); ?></label>
</fieldset>
<button type="submit" value="submit"><?php echo __('Login'); ?></button>
<?php echo Form::close(); ?>
<div>
<?php echo View::factory('profiler/stats');?>
</div>
<?php echo Kohana::debug($userdata);?>