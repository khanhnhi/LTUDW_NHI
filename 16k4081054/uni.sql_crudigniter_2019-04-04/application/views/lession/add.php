<?php echo form_open('lession/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="isDelete" class="col-md-4 control-label">IsDelete</label>
		<div class="col-md-8">
			<input type="checkbox" name="isDelete" value="1" id="isDelete" />
		</div>
	</div>
	<div class="form-group">
		<label for="ID_Chapter" class="col-md-4 control-label">Chapter</label>
		<div class="col-md-8">
			<select name="ID_Chapter" class="form-control">
				<option value="">select chapter</option>
				<?php 
				foreach($all_chapter as $chapter)
				{
					$selected = ($chapter['ID'] == $this->input->post('ID_Chapter')) ? ' selected="selected"' : "";

					echo '<option value="'.$chapter['ID'].'" '.$selected.'>'.$chapter['ID'].'</option>';
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
		<label for="Position" class="col-md-4 control-label">Position</label>
		<div class="col-md-8">
			<input type="text" name="Position" value="<?php echo $this->input->post('Position'); ?>" class="form-control" id="Position" />
		</div>
	</div>
	<div class="form-group">
		<label for="Content" class="col-md-4 control-label">Content</label>
		<div class="col-md-8">
			<textarea name="Content" class="form-control" id="Content"><?php echo $this->input->post('Content'); ?></textarea>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>