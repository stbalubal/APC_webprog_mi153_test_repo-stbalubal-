<style>
	table {
		table-layout: fixed;
	}
	
	th, td {
		width: 170px;
	}
	
	body {
		background-image: url("<?php echo base_url('css/uploads/bg.jpg')?>");
	}
</style>


<body>

<center>
                <p><a href="<?php echo site_url('views'); ?>">View List</a> | <a href="<?php echo site_url('views/User_Add'); ?>">Add Details</a></p>
<table border='1' cellpadding='4px' >
    <tr>
        <td><strong>Name</strong></td>
        <td><strong>Nickname</strong></td>
        <td><strong>Email</strong></td>
		<td><strong>Home</strong></td>
		<td><strong>Gender</strong></td>
		<td><strong>Number</strong></td>
		<td><strong>Comment</strong></td>
		<td><strong>Action</strong></td>
		
    </tr>
<?php foreach ($views as $views_item): ?>
        <tr>
			<td><?php echo $views_item['name']; ?></td>
            <td><?php echo $views_item['nickname']; ?></td>
			<td><?php echo $views_item['email']; ?></td>
			<td><?php echo $views_item['home']; ?></td>
			<td><?php echo $views_item['gender']; ?></td>
			<td><?php echo $views_item['number']; ?></td>
			<td><?php echo $views_item['comment']; ?></td>
            <td>
                <a href="<?php echo site_url('views/'.$views_item['nickname']); ?>">View</a> | 
                <a href="<?php echo site_url('views/User_Edit/'.$views_item['user_id']); ?>">Edit</a> | 
                <a href="<?php echo site_url('views/User_Delete/'.$views_item['user_id']); ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a>
            </td>
        </tr>
<?php endforeach; ?>
</table>