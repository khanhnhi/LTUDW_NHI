<?php echo form_open('login_attempt/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="ip_address" class="col-md-4 control-label">Ip Address</label>
		<div class="col-md-8">
			<input type="text" name="ip_address" value="<?php echo $this->input->post('ip_address'); ?>" class="form-control" id="ip_address" />
		</div>
	</div>
	<div class="form-group">
		<label for="login" class="col-md-4 control-label">Login</label>
		<div class="col-md-8">
			<input type="text" name="login" value="<?php echo $this->input->post('login'); ?>" class="form-control" id="login" />
		</div>
	</div>
	<div class="form-group">
		<label for="time" class="col-md-4 control-label">Time</label>
		<div class="col-md-8">
			<input type="text" name="time" value="<?php echo $this->input->post('time'); ?>" class="form-control" id="time" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>