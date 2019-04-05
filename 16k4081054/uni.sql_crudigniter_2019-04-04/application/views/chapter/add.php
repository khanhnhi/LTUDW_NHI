<?php echo form_open('chapter/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="isDelete" class="col-md-4 control-label">IsDelete</label>
		<div class="col-md-8">
			<input type="checkbox" name="isDelete" value="1" id="isDelete" />
		</div>
	</div>
	<div class="form-group">
		<label for="ID_Course" class="col-md-4 control-label">Course</label>
		<div class="col-md-8">
			<select name="ID_Course" class="form-control">
				<option value="">select course</option>
				<?php 
				foreach($all_course as $course)
				{
					$selected = ($course['ID'] == $this->input->post('ID_Course')) ? ' selected="selected"' : "";

					echo '<option value="'.$course['ID'].'" '.$selected.'>'.$course['ID'].'</option>';
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
					$selected = ($value == $this->input->post('Status')) ? ' selected="selected"' : "";

					echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="Name" class="col-md-4 control-label">Name</label>
		<div class="col-md-8">
			<input type="text" name="Name" value="<?php echo $this->input->post('Name'); ?>" class="form-control" id="Name" />
			<span class="text-danger"><?php echo form_error('Name');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="Description" class="col-md-4 control-label">Description</label>
		<div class="col-md-8">
			<input type="text" name="Description" value="<?php echo $this->input->post('Description'); ?>" class="form-control" id="Description" />
			<span class="text-danger"><?php echo form_error('Description');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="DateStart" class="col-md-4 control-label">DateStart</label>
		<div class="col-md-8">
			<input type="text" name="DateStart" value="<?php echo $this->input->post('DateStart'); ?>" class="form-control" id="DateStart" />
		</div>
	</div>
	<div class="form-group">
		<label for="Postion" class="col-md-4 control-label">Postion</label>
		<div class="col-md-8">
			<input type="text" name="Postion" value="<?php echo $this->input->post('Postion'); ?>" class="form-control" id="Postion" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>