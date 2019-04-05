<div class="pull-right">
	<a href="<?php echo site_url('login_attempt/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Ip Address</th>
		<th>Login</th>
		<th>Time</th>
		<th>Actions</th>
    </tr>
	<?php foreach($login_attempts as $l){ ?>
    <tr>
		<td><?php echo $l['id']; ?></td>
		<td><?php echo $l['ip_address']; ?></td>
		<td><?php echo $l['login']; ?></td>
		<td><?php echo $l['time']; ?></td>
		<td>
            <a href="<?php echo site_url('login_attempt/edit/'.$l['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('login_attempt/remove/'.$l['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
