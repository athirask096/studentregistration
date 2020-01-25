
<!----------------------------Superuser:viewstudent page------------------------>

<?php include("superdashboard.php");
?>
<div class="container-fluid bg-style media1">
			
	<div class="row">
					
		<div class="col-md-12 log-style">

			<div class="form-group">
			<table class="table table-striped card-text bg-light">
		<thead>
			<tr>
				
				<th>Name</th>
				<th>Reg_no</th>
				<th>Dob</th>
				<th>Gender</th>
				<th>phoneno</th>
				<th>Qualification</th>
				<th>Batch</th>
				<th>Semester</th>
				<th>Username</th>
				<th>Passsword</th>
				<th>Action</th>
				
				
				
			</tr>
		</thead>
<?php
		include '../controller/Mycontroller.php';
		$obj=new Mycontroller();
		$result=$obj->viewstudent();
		while($row=mysqli_fetch_assoc($result))
		{
			?>
			
			<tbody>
					<tbody>
						
						<tr>
						<form method="Post">
							<td scope="row"><?php echo $row['name'];?></td>
							<td scope="row"><?php echo $row['reg_no'];?></td>
							<td scope="row"><?php echo $row['dob'];?></td>
							<td scope="row"><?php echo $row['gender'];?></td>
							<td scope="row"><?php echo $row['phoneno'];?></td>
							<td scope="row"><?php echo $row['qualification'];?></td>
							<td scope="row"><?php echo $row['batch'];?></td>
							<td scope="row"><?php echo $row['semester'];?></td>
							<td scope="row"><input type="text" name="username" value="<?php echo $row['username'];?>"></td>
							<td scope="row"><?php echo $row['password'];?></td>
							<td><input type="submit" value="Remove" class="btn-danger" name="submit"></td>
						</form>
						</tr>
						
					</tbody>
		
		<?php
		}
		if(isset($_POST['submit']))
		{
			$obj->removestudent($_POST['username']);
		}
		?>
		
		</table>
		</div>
	
	
	
	</div>
		
			
			
			
			
			
			
			</div>	
		
		</div>
		</body>
		</html>