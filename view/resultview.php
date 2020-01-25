
<!----------------------------Student: result view page------------------------>

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
				
				<th>Reg_no</th>
				<th>Username</th>
				<th>Coursecode</th>
				<th>Subjectname</th>
				<th>Result</th>
				<th>Credit</th>
				<th>Totalgpa</th>
				
				
				
			</tr>
		</thead>
<?php
		include '../controller/Mycontroller.php';
		$obj=new Mycontroller();
		$result=$obj->resprofile($_SESSION['reg_no']);
		while($row=mysqli_fetch_assoc($result))
		{
			?>
			
			
			
			
			<tbody>
					<tbody>
						
						<tr>
						<form>
							<td scope="row"><?php echo $row['reg_no'];?></td>
							<td scope="row"><?php echo $row['username'];?></td>
							<td scope="row"><?php echo $row['coursecode'];?></td>
							<td scope="row"><?php echo $row['subjectname'];?></td>
							<td scope="row"><?php echo $row['result'];?></td>
							<td scope="row"><?php echo $row['credit'];?></td>
							<td scope="row"><?php echo $row['totalgpa'];?></td>
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