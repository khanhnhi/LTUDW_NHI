<div class="pull-right">
	<a href="<?php echo site_url('lession/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>IsDelete</th>
		<th>ID Chapter</th>
		<th>Status</th>
		<th>Name</th>
		<th>Description</th>
		<th>Position</th>
		<th>Content</th>
		<th>Actions</th>
    </tr>
	<?php foreach($lession as $l){ ?>
    <tr>
		<td><?php echo $l['ID']; ?></td>
		<td><?php echo $l['isDelete']; ?></td>
		<td><?php echo $l['ID_Chapter']; ?></td>
		<td><?php echo $l['Status']; ?></td>
		<td><?php echo $l['Name']; ?></td>
		<td><?php echo $l['Description']; ?></td>
		<td><?php echo $l['Position']; ?></td>
		<td><?php echo $l['Content']; ?></td>
		<td>
            <a href="<?php echo site_url('lession/edit/'.$l['ID']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('lession/remove/'.$l['ID']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
