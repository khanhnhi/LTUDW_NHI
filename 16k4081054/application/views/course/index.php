<div class="pull-right">
	<a href="<?php echo site_url('course/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>IsDelete</th>
		<th>ID User</th>
		<th>Status</th>
		<th>Name</th>
		<th>Description</th>
		<th>DateStart</th>
		<th>Postion</th>
		<th>Actions</th>
    </tr>
	<?php foreach($course as $c){ ?>
    <tr>
		<td><?php echo $c['ID']; ?></td>
		<td><?php echo $c['isDelete']; ?></td>
		<td><?php echo $c['ID_User']; ?></td>
		<td><?php echo $c['Status']; ?></td>
		<td><?php echo $c['Name']; ?></td>
		<td><?php echo $c['Description']; ?></td>
		<td><?php echo $c['DateStart']; ?></td>
		<td><?php echo $c['Postion']; ?></td>
		<td>
            <a href="<?php echo site_url('course/edit/'.$c['ID']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('course/remove/'.$c['ID']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
