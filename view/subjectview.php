
<!-----------------------student subject view page------------------------>

<?php include("studentbase.php");
?>
<?php session_start();?>
<div class="container-fluid bg-style media1">
			
	<div class="row">
					
		<div class="col-md-12 log-style">

			<div class="form-group">
			<table class="table table-striped card-text bg-light">
		<thead>
			<tr>
				
				<th>Code</th>
				<th>Semester</th>
				<th>Year</th>
				<th>Subjectname</th>
				<th>Adminid</th>
				
			</tr>
		</thead>
<?php
		include '../controller/Mycontroller.php';
		$obj=new Mycontroller();
		$result=$obj->subjprofile($_SESSION['semester']);
		while($row=mysqli_fetch_assoc($result))
		{
			?>
	        
			<tbody>
					<tbody>
						
						<tr>
						<form>
							<td scope="row"><?php echo $row['code'];?></td>
							<td scope="row"><?php echo $row['semester'];?></td>
							<td scope="row"><?php echo $row['year'];?></td>
							<td scope="row"><?php echo $row['subjectname'];?></td>
							<td scope="row"><?php echo $row['adminid'];?></td>
						</form>
						</tr>
						
					</tbody>
		
		<?php
		}
		?>
		</table>
		</div>
	
	
	
	</div>
		
			
			
			
			
			
			
			</div>	
		
		</div>
		</body>
		</html>