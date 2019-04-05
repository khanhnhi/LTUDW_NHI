<?php echo form_open('course/edit/'.$course['ID'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="isDelete" class="col-md-4 control-label">IsDelete</label>
		<div class="col-md-8">
			<input type="checkbox" name="isDelete" value="1" <?php echo ($course['isDelete']==1 ? 'checked="checked"' : ''); ?> id='isDelete' />
		</div>
	</div>
	<div class="form-group">
		<label for="ID_User" class="col-md-4 control-label">User</label>
		<div class="col-md-8">
			<select name="ID_User" class="form-control">
				<option value="">select user</option>
				<?php 
				foreach($all_users as $user)
				{
					$selected = ($user['id'] == $course['ID_User']) ? ' selected="selected"' : "";

					echo '<option value="'.$user['id'].'" '.$selected.'>'.$user['id'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="Status" class="col-md-4 control-label">Status</label>
		<div class="col-md-8">
			<select name="Status" class="form-control">
				<option value="">select</option>
				<?php 
				$Status_values = array(
					'0'=>'Private',
					'1'=>'Public',
				);

				foreach($Status_values as $value => $display_text)
				{
					$selected = ($value == $course['Status']) ? ' selected="selected"' : "";

					echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="Name" class="col-md-4 control-label">Name</label>
		<div class="col-md-8">
			<input type="text" name="Name" value="<?php echo ($this->input->post('Name') ? $this->input->post('Name') : $course['Name']); ?>" class="form-control" id="Name" />
			<span class="text-danger"><?php echo form_error('Name');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="Description" class="col-md-4 control-label">Description</label>
		<div class="col-md-8">
			<input type="text" name="Description" value="<?php echo ($this->input->post('Description') ? $this->input->post('Description') : $course['Description']); ?>" class="form-control" id="Description" />
			<span class="text-danger"><?php echo form_error('Description');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="DateStart" class="col-md-4 control-label">DateStart</label>
		<div class="col-md-8">
			<input type="text" name="DateStart" value="<?php echo ($this->input->post('DateStart') ? $this->input->post('DateStart') : $course['DateStart']); ?>" class="form-control" id="DateStart" />
		</div>
	</div>
	<div class="form-group">
		<label for="Postion" class="col-md-4 control-label">Postion</label>
		<div class="col-md-8">
			<input type="text" name="Postion" value="<?php echo ($this->input->post('Postion') ? $this->input->post('Postion') : $course['Postion']); ?>" class="form-control" id="Postion" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>