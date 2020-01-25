
<!----------------------------Superuser: view admins page------------------------>

<?php include("superdashboard.php");
?>
<div class="container-fluid bg-style media1">
			
	<div class="row">
					
		<div class="col-md-12 log-style">

			<div class="form-group">
			<table class="table table-striped card-text bg-light">
		<thead>
			<tr>
				
				<th>Username</th>
				<th>Passsword</th>
				<th>Adminid</th>
				<th>Action</th>
				
				
				
			</tr>
		</thead>
<?php
		include '../controller/Mycontroller.php';
		$obj=new Mycontroller();
		$result=$obj->viewadmin();
		while($row=mysqli_fetch_assoc($result))
		{
			?>
			
			<tbody>
					<tbody>
						
						<tr>
						<form method="POST">
							
							<td scope="row"><input type="text" name="username" value="<?php echo $row['username'];?>"></td>
							<td scope="row"><?php echo $row['password'];?></td>
							<td scope="row"><?php echo $row['adminid'];?></td>
							<td><input type="submit" value="Remove" class="btn-danger" name="submit"></td>
						</form>
						</tr>
						
					</tbody>
		
		<?php
		}
		if(isset($_POST['submit']))
		{
			$obj->removeadmin($_POST['username']);
		}
		?>
		</table>
		</div>
	
	
	
	</div>
		
			
			
			
			
			
			
			</div>	
		
		</div>
		</body>
		</html>