
<!-----------------Student:view timetable page--------------------------------------------->

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
				
				<th>Day</th>
				<th>Coursename</th>
				<th>Semester</th>
				<th>Subjectname</th>
				<th>Time</th>
				<th>Adminid</th>
			</tr>
		</thead>
<?php
		include '../controller/Mycontroller.php';
		$obj=new Mycontroller();
		
		$result=$obj->stdtimetable($_SESSION['semester']);
		while($row=mysqli_fetch_assoc($result))
		{
			?>
					<tr>
					<tbody>
						<form>
							<td scope="row"><?php echo $row['day'];?></td>
							<td scope="row"><?php echo $row['coursename'];?></td>
							<td scope="row"><?php echo $row['semester'];?></td>
							<td scope="row"><?php echo $row['subjectname'];?></td>
							<td scope="row"><?php echo $row['time'];?></td>
							<td scope="row"><?php echo $row['adminid'];?></td>
							
						</form>
					</tbody>
					</tr>
	
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