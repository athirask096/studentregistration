
<!-----------------Student:notice view page--------------------------------------------->

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
				
				<th>Semester</th>
				<th>Noticeid</th>
				<th>Title</th>
				<th>Beginningdate</th>
				<th>Author</th>
				<th>Endingdate</th>
				<th>Description</th>
				<th>Adminid</th>
				
				
				
				
			</tr>
		</thead>
<?php
		include '../controller/Mycontroller.php';
		$obj=new Mycontroller();
		$result=$obj->notiprofile($_SESSION['semester']);
		while($row=mysqli_fetch_assoc($result))
		{
			?>
			
			
			
			
			<tbody>
					<tbody>
						
						<tr>
						<form>
							<td scope="row"><?php echo $row['semester'];?></td>
							<td scope="row"><?php echo $row['noticeid'];?></td>
							<td scope="row"><?php echo $row['title'];?></td>
							<td scope="row"><?php echo $row['beginningdate'];?></td>
							<td scope="row"><?php echo $row['author'];?></td>
							<td scope="row"><?php echo $row['endingdate'];?></td>
							<td scope="row"><?php echo $row['description'];?></td>
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