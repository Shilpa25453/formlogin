<!DOCTTYPE html>
<html>
<head>
	<title></title>
	<style>
		table,th,td{
			border:1px solid;

		}
	</style>
	</head>
	<body>

		<table>
			<thead>
			<tr>
			
				<th>firstname</th>
				<th>lastname</th>
				<th>address</th>
				<th>district</th>
				<th>pincode</th>
				<th>phonenumber</th>
				<th>dob</th>
				<th>gender</th>
				<th>highesteducation</th>
				<th>email</th>
			
			</tr>
			</thead>
		<?php
		if($n->num_rows()>0)
		{
			foreach($n->result()as $row)
		{
		?>
		<tr>
		<td><?php echo $row->firstname;?></td>
		<td><?php echo $row->lastname;?></td>
		<td><?php echo $row->address;?></td>
		<td><?php echo $row->district;?></td>
		<td><?php echo $row->pincode;?></td>
		<td><?php echo $row->phonenumber;?></td>
		<td><?php echo $row->dob;?></td>
		<td><?php echo $row->gender;?></td>
		<td><?php echo $row->highesteducation;?></td>
		<td><?php echo $row->email;?></td>
		<?php
		if($row->status==1)
		{
			?>
			<td>approved</td><td><a href="<?php echo base_url()?>main/reject_reg/<?php echo $row->loginid;?>">reject</a></td>
			<?php
		}
		elseif($row->status==2)
		{
			?>
			<td>rejected</td><td><a href="<?php echo base_url()?>main/approval/<?php echo $row->loginid;?>">approve</a></td>
			<?php
		}
		else
		{
			?>

		
		<td><a href="<?php echo base_url()?>main/approval/<?php echo $row->loginid;?>">approve</a></td>
		<td><a href="<?php echo base_url()?>main/reject_reg/<?php echo $row->loginid;?>">reject</a></td>
		</tr>
		<?php
}
}}
else
{
	?>
	<tr>
		<td>no data found</td>
		</tr>
	<?php
}

?>
	
	</table>
</form>
	</body>
	</html>

