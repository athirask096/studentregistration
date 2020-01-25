
<!-----------------Admin:add timetable page--------------------------------------------->

<?php include("base.php");
?>

<div class="container-fluid bg-style media1">
			
	<div class="row">
					
		<div class="col-md-12 log-style">
	<form name="subject" method="post" class="m-auto py-3 text-light p-3 form-style rounded">	
	
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='day' required="required" placeholder="day">
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='coursename' required="required" placeholder="course name">
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='semester' required="required" placeholder="semester">
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='subjectname' required="required" placeholder="subject name">
	<input type="time" class="form-control inputcomponent mt-md-3 space" name='time' required="required" placeholder="time">
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='adminid' required="required" placeholder="adminid">
	<button type="submit" class="btn-primary mt-md-3 px-5 rounded shadow" name="submit">submit</button>
	
</form>

<?php 
if(isset($_POST['submit']))
	{
		include '../controller/MyController.php';
		$obj=new MyController();
		$obj->timetableinsert($_POST['day'],$_POST['coursename'],$_POST['semester'],$_POST['subjectname'],$_POST['time'],$_POST['adminid']);
	
	}
?>

</div>
</div>
</div>